<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KDA Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bulma-0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="myscript.js"></script>
    
</head>
<body>
    <div class="container">
        <section class="hero">
            <div class="hero-body">
                <div class="container">
                <h1 class="title">
                    This is KDA calculator
                </h1>
                <h2 class="subtitle">
                    Fill the form with your total score that you play in one game to see how was your average kill per dead!
                </h2>
                </div>
            </div>
        </section>
        <form id="myform" action="form.php" class="form" method="POST" enctype="multipart/form-data">
            <div class="field">
                <label class="label">Name</label>
                <label class="warning" id="lbl_name">
                    <?php
                        if(isset($_SESSION['nameErr']) && $_SESSION['nameErr']){
                            echo '* Name Require';
                        }
                    ?>
                
                </label> 
                <div class="control">
                    <input type="text" class="input is-hover" id="name" name="name">
                </div>
            </div>

            <div class="field">
                <label class="label">Last Name</label> 
                <label class="warning" id="lbl_last_name">
                    <?php
                        if(isset($_SESSION['lastNameErr']) && $_SESSION['lastNameErr']){
                            echo '* Last Name Require';
                        }
                    ?>
                </label>
                <div class="control">
                    <input type="text" class="input is-hover" id="last_name" name="last_name">
                </div>
            </div>

            <div class="field">
                <label><strong>Gender :</strong></label>
                <span class="gender-selection">
                    <input type="radio" name="gender" value="male" checked> Male
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="other"> Other
                </span>
            </div>

            <div class="field">
                <label class="label">Origin ID</label>
                <label class="warning" id="lbl_username">
                    <?php
                        if(isset($_SESSION['usernameErr']) && $_SESSION['usernameErr']){
                            echo '* Origin ID Require';
                        }
                    ?>
                
                </label> 
                <div class="control">
                    <input type="text" class="input is-hover" id="username" name="username">
                </div>
            </div>
                
            <div class="field">
                    <label class="label">Kill Score</label>
                    <label class="warning" id="lbl_kill">
                        <?php
                            if(isset($_SESSION['killErr'])){
                                if($_SESSION['killErr']){
                                    echo '* Kill Score Require';
                                }
                            }
                        ?>
                    </label> 
                    <div class="control">
                        <input type="number" class="input is-hover" id="kill" name="kill">
                    </div>
            </div>

            <div class="field">
                <label class="label">Dead Score</label>
                    <label class="warning" id="lbl_dead">
                        <?php
                            if(isset($_SESSION['deadErr'])){
                                if($_SESSION['deadErr']){
                                    echo '* Dead Score Require (Positive number)';
                                }
                            }
                        ?>
                    
                    </label> 
                    <div class="control">
                        <input type="number" class="input is-hover" id="dead" name="dead">
                    </div>
            </div>

            <div class="field">
                <label class="label">Assist Score</label>
                    <label class="warning" id="lbl_dead">
                        <?php
                            if(isset($_SESSION['assistErr'])){
                                if($_SESSION['assistErr']){
                                    echo '* Assist Score Require (Positive number)';
                                }
                            }
                        ?>
                    
                    </label> 
                    <div class="control">
                        <input type="number" class="input is-hover" id="assist" name="assist">
                    </div>
            </div>
            <div class="field is-grouped">
                <p class="control">
                    <button class="button is-primary" id="submit-btn" name="submit">Submit</button>
                </p>
                <p class="control">
                    <div class="file">
                        <label class="file-label">
                            <input class="file-input" type="file" name="csvFile" id="csvFile" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                            <span class="file-cta">
                                <span class="file-label">
                                    Upload Form
                                </span>
                            </span>
                            <span class="file-name" style="display:none" id='filename'>
                                
                            </span>
                        </label>
                    </div>
                </p>
            </div>
            <div class='field'>
                <a class="button is-link">Download Form</a>
            </div>

        </form>
    </div>
</body>
</html>