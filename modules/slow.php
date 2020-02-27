<?php

class Slow
{
    function index()
    {

        global $db;


        $row = $db->query_first("SELECT *        
FROM INFORMATION_SCHEMA.STATISTICS
WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME='sim' AND
INDEX_NAME='giaban';");
        print_r($row);

    }
}