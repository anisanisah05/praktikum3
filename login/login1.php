<?php

$user = $_POST['username'];
$pass = $_POST['pass'];
if (($user == "firdausa") && ($pass == "123")) {
  echo "login berhasill";
} else {
  echo "login gagal";
}
 ?>
