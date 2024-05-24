<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta  http-equiv="Refresh" content="3;URL=lead-ebook.htm">
<title>Untitled Document</title>
</head>
<?php
$email=$_POST[email];
$nome=$_POST[nome];
$to      = 'deividfrechou@hotmail.com';
$subject = 'Leads Fostertec';
$message = $nome;
$headers = $email;

mail($to, $subject, $message, $headers);
echo "";
?>
<body>
</body>
</html>