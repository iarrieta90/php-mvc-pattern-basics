<?php
function error($error)
{
  $errorMsg = $error;
  require_once VIEWS . "/error/error.php";
}