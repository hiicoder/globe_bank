<?php
if(!isset($page_title)){$page_title = 'Staff Area';}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>GBI - <?php echo h($page_title);?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" media="all" type="text/css" href="<?php echo url_for('/stylesheets/staff.css');?>"/>
</head>
<body>
<header>
	<h1>GBI Staff area</h1>
</header>

<navigation>
<ul>
	<li><a href="<?php echo url_for('/staff/index.php');?>">Menu</a></li>
</ul>	
</navigation>