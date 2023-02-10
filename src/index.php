<?php
//phpinfo();die;

$db = new PDO('sqlite:dbname=test_db;host=db', 'test', 'secret');
$result = $db->query("show tables");
while ($row = $result->fetch(PDO::FETCH_NUM)) {
    var_dump($row[0]);
}

