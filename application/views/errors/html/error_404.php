<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<style type="text/css">

body{
  background: white;
  text-align: center;
  font-family: 'Droid Sans', sans-serif;
}
img{
	width: 100%;
}
h1{
  margin-top: 30px;
  color: black;
  text-shadow: 0px 2px 0px rgba(150, 150, 150, 1);
}
#err-icon{
  font-size: 80pt;
  color: #bdc3c7;
  margin-top: 150px;
  text-shadow: 0px 3px 0px rgba(150, 150, 150, 1);
  -webkit-transition: 0.5s;
}
#err-icon:hover{
  -webkit-transform: scale(1.1);
  color: #e74c3c;
  text-shadow: 0px 3px 0px rgba(192, 57, 43, 1);
}
p{
  color: rgba(189, 195, 199,1.0);
  font-weight: bold;
}
</style>
</head>

</html>

<h1><?php echo $heading; ?></h1>
<p><?php echo $message; ?></p>