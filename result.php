<?php
    session_start();
    if($_SESSION['uploadStatus']){
        $row = 1;
        $index = 0;
        $killArr = array();
        $deadArr = array();
        $assistArr = array();
        if (($handle = fopen($_SESSION['csv'], "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                $row++;
                if($row != 2){
                    // skip name, last name, origin id
                    if($row >= 4){
                        $index = 4;
                    }else{
                        $_SESSION["name"] = $data[0];
                        $_SESSION["last_name"] = $data[1];
                        $_SESSION["gender"] = $data[2];
                        $_SESSION["username"] = $data[3];
                    }
                    if($row == 3){
                        $_SESSION["name"] = $data[0];
                        $_SESSION["last_name"] = $data[1];
                        $_SESSION["gender"] = $data[2];
                        $_SESSION["username"] = $data[3];
                    }else{
                        array_push($killArr,$data[4]);
                        array_push($deadArr,$data[5]);
                        array_push($assistArr,$data[6]);
                    }

                }
            }
            fclose($handle);
        }
    $sumK = 0;
    $sumD = 0;
    $sumA = 0;
    for($i=0 ; $i < count($killArr); $i++){
        $sumK += $killArr[$i];
        $sumD += $deadArr[$i];
        $sumA += $assistArr[$i];
    }
    $_SESSION["kill"] = $sumK;
    $_SESSION["dead"] = $sumD;
    $_SESSION["assist"] = $sumA;
    }
    
    require("result_view.php");
?>