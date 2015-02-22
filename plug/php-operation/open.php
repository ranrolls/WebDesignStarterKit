<?php 

//Opening connection
$connectionName = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die('Could not connect'.mysql_error());

echo '<h1><strong>Step 1:</strong>		Connected Success!</h1><br />';

//Connecting to Database for php
mysql_select_db(DB_NAME) or 	die('No database('.DB_NAME.') because of: '.mysql_error());		


//Connecting to Database for json 
//mysql_select_db(DB_NAME,$connectionName) or 	die('No database('.DB_NAME.') because of: '.mysql_error());		

echo 'Step 2: Connected to ('.DB_NAME.') success';	
		
?>