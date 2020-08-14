<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

    <style>
        
        .big-banner{
            background: url('assets/img/rom2.jpg'); 
            background-size: auto;
            height: 800px;
            text-align: center;
        }
    
        .big-banner p{
            font-style: oblique;
            font-size: 30px;
        }
    
        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
        <div class="container">
        <a class="navbar-brand font-weight-bold" href="#">Rumah Laundry</a>
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">


                <li class="nav-item dropdown">

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           LOGIN  <i class="fas fa-users"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Login</a>
                            <a class="dropdwon-item" href="#">Register</a>
                        </div>
                    </div>
                </li>
                
                </ul>

            </div>
            </div>
            </div>
        </nav>

        
        <div class="jumbotron big-banner">
            <div class="container">
                <br><br><br><br><br><br><br>
                <b>
                <h1 class="display-4">Rumah Laundry</h1>
                <hr class="my-4">
                <p>Siap Mencuci Pakaian Anda Hingga Bersih Dan Wangi</p>
                </b>
            </div>
        </div>
</body>
</html>