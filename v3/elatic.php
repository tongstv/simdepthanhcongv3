<?php

namespace elatic;
if (!defined('JSON_PRESERVE_ZERO_FRACTION')) {
    define('JSON_PRESERVE_ZERO_FRACTION', 1024);
}
require __DIR__ . '/vendor/autoload.php';

use Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()->build();


function deletesimdl($simdl)
{
    global $client;
    $client->deleteByQuery([
        'index' => 'sim',
        'type' => '_doc',
        'body' => [
            'query' => [
                'match' =>
                    ['simdl' => $simdl]


            ]]
    ]);
}

function num_rows($sql)
{
    global $client;
    $body = SqlToElatic($sql);
    $result = $client->search($body);
    require $result['hits']['total'];
}

function getSim($i, $sql)
{
    global $client;

    $body = SqlToElatic($sql);

    $result = $client->search($body);

    $hits = $result['hits']['hits'];
    $total = $result['hits']['total'];

    $data = [];

    if (is_array($hits)) {

        foreach ($hits AS $row) {
            $i++;
            $row['_source']['stt'] = $i;
            $data[] = $row['_source'];
        }
    }

    return $data;


}

function SqlToElatic($sql2)
{
    $sql = strtolower($sql2);


    if (preg_match('/from(\s)?([\S]+)/', $sql, $index)) {
        $body['index'] = (string)$index[2];
    }

    if (preg_match('/limit(\s)?([0-9]+)(\s)?\,(\s)?([0-9]+)/', $sql, $limit)) {
        $from = $limit[2];
        $size = $limit[5];
        $body['body']['from'] = $from;
        $body['body']['size'] = $size;

    }


    if (preg_match('/order(\s)?by(\s)?([\S]+)(\s)?([\S]+)/', $sql, $orderby)) {
        if (in_array($orderby[5], ['desc', 'asc'])) {
            $body['sort'][$orderby[3]]['order'] = strtolower($orderby[5]);
        }

    }


    $and = [];
    if (preg_match('/r?like(\s)?\'([0-9\%]+)\'/', $sql, $rlike)) {

        $and[] = [
            'wildcard' => [

                'sim2' => [
                    'wildcard' => str_replace("%", "*", $rlike[2])

                ]
            ]

        ];


    }
    if (preg_match('/and(\s)?\(?mang(\s)?=(\s)?([\d]+)\)?/', $sql, $mang)) {

        $and[] = [
            'term' => [
                'mang' =>
                    ['value' => $mang[4]]
            ]
        ];
    }
    if (preg_match('/and(\s)?\(?tong(\s)?=(\s)?([\d]+)\)?/', $sql, $tong)) {
        $and[] = [
            'term' => [
                'tong' =>
                    ['value' => $tong[4]]
            ]
        ];
    }
    if (preg_match('/and(\s)?\(?tongnut(\s)?=(\s)?([\d]+)\?\)?/', $sql, $tongnut)) {
        $and[] = [
            'term' => [
                'tongnut' =>
                    ['value' => $tongnut[3]]
            ]
        ];
    }

    if (preg_match('/and(\s)?\(?left\(sim2\,2\)(\s)?=(\s)?([\d]+)\)?/', $sql, $dauso)) {
        $and[] = [
            'term' => [
                'dauso' =>
                    ['value' => $dauso[4]]
            ]
        ];
    }


    if (preg_match('/and(\s)?\(giaban(\s)?>=(\s)?([\d]+)(\s)?and(\s)?giaban(\s)?<=(\s)?([\d]+)\)/', $sql, $range)) {


        $and[] = ['range' =>
            ['giaban' =>
                [
                    'from' => $range[4],
                    'to' => $range[9]
                ]

            ]
        ];


    }

    if (preg_match('/and(\s)?\(?giaban(\s)?>(\s)?100\)?/', $sql, $range)) {


        $and[] = ['range' =>
            ['giaban' =>
                [
                    'from' => 100,
                    'to' => 10000
                ]

            ]
        ];


    }
    $i = 0;

    foreach ($and as $bool) {
        $i++;
        $tempbool[] = $bool;
        if ($i % 2 == 0) {
            $body['body']['query']['bool']['must'][]['bool']['must'] = array_values($tempbool);
            unset($tempbool);
        }
    }

    if (isset($tempbool)) {
        $body['body']['query']['bool']['must'][] = $tempbool;
    }


    return $body;

}

//print_r(SqlToElatic("select * from sim where sim=1"));