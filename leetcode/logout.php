
<?php
session_start();
  $file = $_POST['submit'];
  $_SESSION['userLogin'] = '';
  header("Location: ../index.php");
  die();

?>