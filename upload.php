<?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["csvFile"]["name"]);
    $uploadOk = TRUE;
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $uploadErr = "";

    // Check if image file is a actual image or fake image
    if(isset($_POST["csvFile"])) {
        $check = getimagesize($_FILES["csvFile"]["tmp_name"]);
        if($check !== false) {
            echo "File is an csv - " . $check["mime"] . ".";
            $uploadOk = TRUE;
        }
    }
    // Check file size
    if ($_FILES["csvFile"]["size"] > 500000) {
        $uploadErr = "Sorry, your file is too large. (max 500000)";
        $uploadOk = FALSE;
    }
    // Allow certain file formats
    if($fileType != "csv") {
        $uploadErr = "Sorry, only CSV file is allowed.";
        $uploadOk = FALSE;
    }
    // if everything is ok, try to upload file
    else {
        if (move_uploaded_file($_FILES["csvFile"]["tmp_name"], "uploads/".$_FILES["csvFile"]["name"])) {
            echo "The file ". basename( $_FILES["csvFile"]["name"]). " has been uploaded.";
            $_SESSION['csv'] = $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $_SESSION['uploadStatus'] = $uploadOk;
    if($uploadOk == 0){
        $_SESSION['uploadErr'] = $uploadErr;
    }

?>