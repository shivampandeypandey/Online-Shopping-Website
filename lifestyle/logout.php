<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container" style="margin-top:150px; margin-left: 400px;">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>You have been logged out. <a href="login.php">Login again.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer" style="margin-top:250px;">
               <div class="container">
               <center>
                   <p>Copyright &copy Lifestyle Store. All Rights Reserved. | Contact Us: +91 90000 00000</p>
                   
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>