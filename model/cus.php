<?php

$data = $db->fetch_all_array("select * from sim2 limit 20");
print_r($data);