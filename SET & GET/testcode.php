<?php

  $con = mysql_connect("localhost","root","");
  $prefix = 'IKL';          //prefixed value
  $tbl_name = "test_table"; //to change accordingly
  $db_name = "test";        //to change accordingly

  if( $_POST ) {

    if (!$con) {
      die('Could not connect: ' . mysql_error());
    }

    mysql_select_db($db_name, $con);
    $users_name = $_POST['name'];
    $users_name = mysql_real_escape_string($users_name);
    $query = "INSERT INTO $db_name.$tbl_name (`id`,`prefix`,`name`) VALUES (NULL,'$prefix','$users_name');";
    mysql_query($query);
    echo "You have added <b>". $users_name. "</b> into the database";
    mysql_close($con);
  }

  if($_GET) {

      if (!$con) {
        die('Could not connect: ' . mysql_error());
      }

      mysql_select_db($db_name, $con);
      $userid = $_GET['userid'];

      //to split the string into alpha numeric array
      //for more information: 
      //http://stackoverflow.com/questions/7908327/how-to-explode-a-string-by-any-integer-regex
      $id = preg_split("/(\d+)/", $userid, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE); 

      //string value in $result[0];
      //integer value in $result[1];
      $sql = "SELECT name FROM $tbl_name WHERE id='$id[1]'";
      $find = mysql_query($sql);
      $result = mysql_fetch_assoc($find);
      echo "<div>Name: <b>".$result["name"]."</b></div>";
      mysql_close($con);

  }
?>

