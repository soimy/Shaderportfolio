<?php
switch($_SERVER['REQUEST_METHOD'])
{
case 'GET': $the_request = &$_GET; break;
case 'POST': $the_request = &$_POST; break;
default:
}
?>

Hi <?php echo htmlspecialchars($the_request['firstName']); ?>.
Your birthday is <?php echo $the_request['birthday']; ?> .