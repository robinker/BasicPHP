<?php
    session_start();
    $nameErr = $lastNameErr = $usernameErr = $killErr = $deadErr = $assistErr = NULL;
    $killEmpty = $deadEmpty = $assistEmpty = NULL;
    $name = $lastName = $gender = $username = $kill = $dead = $assist = "";
    $error = FALSE;
   
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = TRUE;
          $error = TRUE;
        } else {
          $name = $_POST["name"];
        }
        
        if (empty($_POST["last_name"])) {
          $lastNameErr = TRUE;
          $error = TRUE;
        } else {
          $lastName = $_POST["last_name"];
        }
          
        $gender = $_POST["gender"];
        
        if (empty($_POST["username"])) {
          $usernameErr = TRUE;
          $error = TRUE;
        } else {
          $username = $_POST["username"];
        }
      
        if (empty($_POST["kill"])) {
          $killErr = TRUE;
          $error = TRUE;
        } else {
            $kill = $_POST["kill"];
        }

        if (empty($_POST["dead"]) && $_POST["dead"] !=0) {
          $deadErr = TRUE;
          $error = TRUE;
        } else {
          if($_POST["dead"] >= 0 && $_POST["dead"] !=""){
            $dead = $_POST["dead"];
          } else {
            $deadErr = TRUE;
            $error = TRUE;
          }
          
        }

        if (empty($_POST["assist"]) && $_POST["assist"] != 0) {
          echo $_POST["assist"];
          $assistErr = TRUE;
          $error = TRUE;
        } else {
          if($_POST["assist"] >= 0 && $_POST["assist"] !=""){
            $assist = $_POST["assist"];
          } else {
            $assistErr = TRUE;
            $error = TRUE;
          }
          
        }
      
      }

      require('upload.php');
      
      $_SESSION['error'] = $error;
      $_SESSION['nameErr'] = $nameErr;
      $_SESSION['lastNameErr']= $lastNameErr;
      $_SESSION['usernameErr'] = $usernameErr;
      $_SESSION['killErr'] = $killErr;
      $_SESSION['deadErr'] = $deadErr;
      $_SESSION['assistErr'] = $assistErr;

      $_SESSION['killEmpty'] = $killEmpty;
      $_SESSION['deadEmpty'] = $deadEmpty;
      $_SESSION['assistEmpty'] = $assistEmpty;

      $_SESSION['name'] = $name;
      $_SESSION['last_name'] = $lastName;
      $_SESSION['gender'] = $gender;
      $_SESSION['username'] = $username;
      $_SESSION['kill'] = $kill;
      $_SESSION['dead'] = $dead;
      $_SESSION['assist'] = $assist;
      
      if($_SESSION['uploadStatus']){
        header('Location: result.php');
        die();
      }

      if($error){
        header('Location: index.php');
        die();
      }
      
      if(isset($_POST["submit"])){
        header('Location: result.php');
        die();
      }

?>