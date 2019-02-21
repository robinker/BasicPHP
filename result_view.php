<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bulma-0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="myscript.js"></script>
</head>
<body>
    <div class="container">
        <label for="" class="label"> Personnal Details</label>
        <hr>
        <div class="field">
            <strong> Name </strong><?php echo $_SESSION["name"]; ?><br>
        </div>
        <div class="field">
            <strong> Lastname </strong><?php echo $_SESSION["last_name"]; ?><br>
        </div>
        <div class="field">
            <strong> Gender </strong><?php echo $_SESSION["gender"]; ?><br>
        </div>
        <div class="field">
            <strong> Origin </strong><?php echo $_SESSION["username"]; ?><br>
        </div>

        <div class="field">
            <strong> Kill score </strong><?php echo $_SESSION["kill"]; ?>
        </div>
        <div class="field">
            <strong> Dead Score </strong><?php echo $_SESSION["dead"]; ?>
        </div>
        <div class="field">
            <strong> Assist Score </strong><?php echo $_SESSION["assist"]; ?>
        </div>
        <div class="field">
            <strong> Your KDA is </strong>
            <?php  
                $kda = ($_SESSION["kill"] + $_SESSION["assist"])/($_SESSION["dead"]+1); 
                echo $kda; 
            ?>
        </div>
        <div class="field">
            <a href="index.php">Back</a>
        </div>
    </div>
</body>
</html>