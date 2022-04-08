<?php
    include_once('point.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-center">
                    <div class="card-header">
                        <h3 class="alert alert-danger">
                            Voici mon super jeu 45
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="btn btn-danger">
                            <a href="index.php?n=p" style="text-decoration: none; color:black;">
                                Jouer
                            </a>
                        </div>
                        <span class="float-right">
                            <?php
                                if(isset($_GET['n']) && !empty($_GET['n']) )
                                {   
                                    if($_GET['n']=="p")
                                    {
                                        $cle = "";
                                        for ($i=1; $i <= 5 ; $i++) { 
                                            $cle .=mt_rand(0,9);
                                        }
                                        echo $cle;
                                    }
                                }  
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>