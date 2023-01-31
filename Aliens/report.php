<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Aliens Abducted Me - Report an Abduction</title>
</head>
<body>
  <h2>Aliens Abducted Me - Report an Abduction</h2>

<?php
$when_it_happened = $_GET['whenithappened'];
$first_name = $_GET['firstname'];
//create variables for the rest of the form fields here**

echo 'hi ' . $first_name . '<br/>';
echo 'Thanks for submitting the form. <br />';
echo 'You said it happened ' . $when_it_happened;
//note the variable contents is output in these strings using the echo function.
//Also note that HTML tags are treated as strings here too because they are inside the php environment

//the php environment is closed with the question-mark, greater-than symbol sequence below this comment
?>



</body>
</html>
