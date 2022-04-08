<?php

// sanitizing for string 
  function sanitizeString($string)
  {
      $string = trim($string);
      $string = filter_var($string,FILTER_SANITIZE_STRING);
      return $string;
  }
  
function checkEmpty($val) {
  if (empty($val)) {
    return false;
  } 
  return true;

}


function checkLess($val, $min) {
  if (trim(strlen($val)) <= $min) {
    return false;
  }
  return true;
} 

// sanitize for email
  function sanitizeEmail($email)
  {
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      return $email;
  }


function validEmail($email) {
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return false;
  } 
  return true;

}

?>
