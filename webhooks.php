<?php
 
$token = "test";
 
if ($_GET['hub_verify_token'] == $token) {
  echo $_GET['hub_challenge'];
} else {
  echo 'error';
}