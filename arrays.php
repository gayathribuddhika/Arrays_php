<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
<?php 
	$mycars = array(10,20,30,"Toyota","Zuzuki",array("black","Yellow","Blue"),"Nissan","Kia");
	
	
?>
<br>
<h3>Before</h3>
<?php print_r($mycars);?>
<br>
<pre>
	<?php print_r($mycars);?>
</pre>
<?php $mycars [5][1] = "red";?>
<?php $mycars [4] = "Mazda";?>
<?php $mycars [] = "Mitsubishi";?>
<?php $mycars [2] = "Honda";?>
<h3>After</h3>
<pre>
	<br>
<?php print_r($mycars);?></pre>
<pre>
	<?php print_r($mycars);?>
</pre>

</body>
</html>