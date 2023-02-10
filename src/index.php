<?php
//phpinfo();die;

$db = new PDO('mysql:dbname=test_db;host=db', 'test', 'secret');
$result = $db->query("select * from test");
while ($row = $result->fetch(PDO::FETCH_NUM)) {
    var_dump($row[0]);
}

