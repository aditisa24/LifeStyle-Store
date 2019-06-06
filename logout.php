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
        
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        
       
        <style type="text/css">
            <style type="text/css">
.row_style
{

    
        margin-top: 100px;
    
}

        </style>
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br><br>
            <div class="container">
                <div class="row row_style">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            
                            <div class="panel-body">
                                <p>You have been logged out. <a href="login.php">Login again.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <?php
    
    require 'footer.php';
    ?>

    </body>
</html>