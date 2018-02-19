<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Online Shop</title>
</head>


<script>

</script>
<body style='background: green;'>
<form method="post" action="<?=base_url();?>index.php/contr/check_admin" >
  <input style='margin-top:10px;' type="text" name="login" placeholder="Login"/></br>
  <input style='margin-top:10px;' type="password" name="password" placeholder="Password"/></br>
  <input style='margin-top:10px;' type="submit" name="Submit" value="Send"/>
</form>
</body>
</html>  