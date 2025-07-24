<?php
$link = mysql_connect('localhost', 'deepmed2@gmail.com', 'meddeep99');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>