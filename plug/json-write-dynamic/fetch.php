<?php 

//Preparing Query
$query = 'SELECT `ID`, `post_content`, `post_title`, `post_status`, `post_name`, `guid`, `post_type` FROM `w2_posts` WHERE `post_content` != ""';

//Fetching Query Result for php 
//$result = mysql_query($query) or 	die ('Query failed: '.mysql_error());

//Fetching Query in json style Result for json

$rsPackages = mysql_query($query, $connectionName) or  die(mysql_error());









?>