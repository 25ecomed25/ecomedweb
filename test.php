<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>&nbsp;</p>
<form name="web_form" id="web_form" method="post" action="process-form-data.php">
        <p><label>Enter name: </label><input type="text" name="name" id="name" /></p>
        <p><label>Enter email: </label><input type="text" name="email" id="email" /></p>
        <p><input type="submit" name="s1″ id="s1″ value="Submit" /></p>
</form>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$fp = fopen("formdata.txt", "a");
$savestring = $name . "," . $email . "n";
fwrite($fp, $savestring);
fclose($fp);
echo "<h1>You data has been saved in a text file!</h1>";
?>
<p>&nbsp;</p>
</body>
</html>