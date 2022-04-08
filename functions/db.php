<?php 

$server   = "localhost";
$username = "root";
$password = "";
$dbname   = "medical_serv";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
  die("Error in connection: " . mysqli_connect_error());
}

function db_insert($sql) {
  global $conn;
  $result = mysqli_query($conn, $sql);
  if ($result) {
    return "Added success";
  }
  return false;
}

function db_update($sql) {
  global $conn;
  $result = mysqli_query($conn, $sql);
  if ($result) {
    return "Updated success";
  }
  return false;
}


// get row from database
function getRow($table, $filed, $val) {
  global $conn;
  $sql = "SELECT * FROM `$table` WHERE `$filed` = '$val'";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    $rows = [];
    if (mysqli_num_rows($result) > 0) {
      $rows[] = mysqli_fetch_assoc($result);
      return $rows[0];
    }

  }
  return false;
}


function getRows($table) {
  global $conn;
  $sql = "SELECT * FROM `$table`";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    $rows = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
      }
    }
  }
  
  return $rows;
}


function chekRow($table,$field,$value)
{
    global $conn;
    $sql = "SELECT * FROM `$table` WHERE `$field`='$value' ";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        return true;
    }

    return false;

}



function deleteRow($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "Deleted Success";
    }
    return false;
}



// count of records
function count_table($table)
{
    global $conn;
    $sql = "SELECT * FROM `$table` ";
    
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo mysqli_error($conn);
    }
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $rows[] = $row;
        }
    }
   return count($rows);
}


