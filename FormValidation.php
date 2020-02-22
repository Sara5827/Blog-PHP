<?php
require('connexion.php');
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = addslashes($data);
//   $data = htmlspecialchars($data);
  $data = strip_tags($data);
  return $data;
}
?>

