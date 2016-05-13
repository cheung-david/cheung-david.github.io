<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$email_to = "firerefinededge@outlook.com";
$name = $_POST ['name'];
$email = $_POST ['email'];
$subject = $_POST ['subject'];
$comment = $_POST ['comment'];

$subject = "$subeject";
$message = "Here's chart information for today: /n/n Name: $name /n/n Email: $email /n/n Subeject: $subject /n/n Comment: /n $comment ";

mail ($to, $subject, $messsage);
?>

<body>
</body>
</html>