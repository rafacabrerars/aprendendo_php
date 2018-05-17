<?php
$dbname='learning_php';
$host='localhost';
$dbuser='rafacabrerars';
$dbpass='123456';
$db = new PDO("pgsql:dbname=$dbname;host=$host", $dbuser, $dbpass);
$query=$db->query('select * from selecao_brasileira');
$jodadores=$query->fetchAll();
echo "<pre>";
print_r($jodadores);
