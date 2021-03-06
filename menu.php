<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chanteclaire Home</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 

    <!-- Custom CSS -->  
    <link rel="stylesheet" href="style.css" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="myPage"  data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="index.php">
            <img src="https://media.discordapp.net/attachments/613736379746353154/818471840661241906/Chanteclaire.png" style="width:250px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#staff">Staff</a>
                </li>  
                <li class="nav-item">
                    <a class="nav-link" href="index.php#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">Menu</a>
                </li>
                <?php if ($_SESSION['loginstatus'] == 'login') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                <?php } ?>    
            </ul>
        </div>  
</nav>

<main>
<br>
<br>
<br>
<br>
<h1>Our Menu</h1>
<h6>Take a look at our menu!</h6>
<!--Menu Choice-->
<div class="row justify-content-center">
    <table id="menu" class="table table-striped table-bordered" style="width:90%">
        <thead>
            <tr>
            <th><h5><a href="menukue.php" style="color: #a4141c;">CAKES</a></h5></th>
            <th><h5><a href="menubrownies.php" style="color: #a4141c;">BROWNIES</a></h5></th>
            <th><h5><a href="menucoklat.php" style="color: #a4141c;">CHOCOLATE</a></h5></th>
            </tr>
        </thead>
        <tr style="text-align:center;">
            <td>
            <a href="menukue.php">
                <img src="/uts/asset/Portrait_CE_0742.png" alt="Cake Menu" style="height:300px;">
            </a>
            </td>
            <td>
            <a href="menubrownies.php">
                <img src="/uts/asset/CE1192.png" alt="Brownies Menu" style="height:300px;">
            </a>
            </td>
            <td>
            <a href="menucoklat.php">
                <img src="/uts/asset/Crimson_and_White_Choco.png" alt="Chocolate Menu" style="height:300px;">
            </a>
            </td>
        </tr>   
    </table>

    <footer class="-bg-footer" id="footer">
        <div class="container-fluid">
            <div class="row footer-align">
                <div class="col-md-4 col-sm-4">
                    <h5>UMN</h5>
                    <hr class="hr-foot">
                    <div class="footer-items">
                        <p class="footer">
                            Is a university that was founded in 2006 with a definitive campus located in Kelapa Dua Summarecon Serpong, Tangerang Regency. <br>
			<br>The university was inaugurated on 20 November 2006. The educational focus is in the field of information and communication technology (ICT). The university was founded by the Kompas Gramedia Group.
                        </p>
                        <ul class="social-networks">
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h5>Our contact</h5>
                    <hr class="hr-foot">
                    <div class="footer-items">
                        <address>
                                Jl. Boulevard Gading Serpong
                                <br>
                                Tangerang, Banten
                                <br>
                                Indonesia
                                <br>
                                <i class="fa fa-phone address"></i> 62+ 813 422 554
                                <br>
                                <i class="fa fa-fax address"></i> 62+ 813 422 554
                                <br>
                                <i class="fa fa-envelope address"></i> info@chanteclaire.com</a>
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h5>Open hours</h5>
                    <hr class="hr-foot">
                    <div class="footer-items">
                        <ul>
                            <li>Mon-Fri: 08:00-22:00</li>
                            <li>Sat    : 09:00-22:00</li>
                            <li>Sun    : Closed</li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <a class="to-top" href="#myPage" title="toTop">
            <i class="fa fa-chevron-up"></i>
        </a>
    </footer>

    <div class="footer-copyright">
            <p>&copy 2021 Copyright by <a href="http://www.restokueumn.com" target="blank">restokueumn.com</a></p>
    </div>





    <script src="script.js"></script>
    <script src="cart.js"></script>

    <script>

    </script>  
    
</body>

</html>