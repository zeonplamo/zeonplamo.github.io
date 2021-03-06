<?php
session_start();
if ($_SESSION['loginstatus'] != 'login') {
    $_SESSION['loginstatus'] = '';
}
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

    <div class="jumbotron">
        <div class="container-fluid">
            <div class="header-content-inner">
                <h1>Welcome to Chanteclaire</h1> 
                <h3>We are proud of our long history of making delicious chocolates, as well as a warm and 
                friendly atmosphere created by our professional staff.</h3>
            </div>
        </div>
    </div>

    <section class="bg-about bg-section" id="about">
        <div class="container-fluid">
            <h1 class="container-h1">About</h1>
            <div class="row">
                <div class="col-sm-5">

                    <div class="hov-img">
                        <img src="https://media.discordapp.net/attachments/613736379746353154/819159315113967627/CE1192.png" class="hov-img-bottom img-fluid">
                    </div>                    

                    <div class="hov-img">
                        <img src="https://cdn.discordapp.com/attachments/613736379746353154/819161944157716520/Portrait_CE_0742.png" class="hov-img-bottom img-fluid">
                    </div>
                   
                </div>

                <div class="col-sm-7">
                    <div class="row ">
                        <div class="restaurant-history text-center">
                            <h3 class="section-heading">What is Chanteclaire?</h3>
                            <p class="about-history">
                                We are a bakery and chocolatier specializing on many kinds of chocolates fit for any occassion. From weddings to gifts for you special someone, our array of chefs are always prepared for your order.
                                <br>
                                <br>
                                During this COVID-19 pandemic, we want to continue offering our services to those who need them. However due to the strict restrictions and to keep our quality high, customers must order online in order to buy our porudcts. Thank you! 
                            </p>
                            <h3 class="section-heading">What types of chocolates are available?</h3>
                            <p class="about-history">
                                Chanteclaire offers a large variety of chocolates from bars to cakes to tarts! Our large selection of chocolates means that there is always one type for any occasion. Our chocolates are high-quality and made on demand to ensure that they are fresh and tailor-made to our customer's desires.
                                <br>
                                <br>
                                Our chefs are trained to create any types of chocolates to order, however we recommend you to check our menu before doing a special order in case there might be a design which suits your needs.
                                <br>
                                <br>
                                <button type="button" style="border-radius: 10px; font-size: 25px; background-color: #a4141c;"><a href="menu.php" style="color: aliceblue;">Our Menu</a></button>
                            </p>
                        </div>
                    </div>
                </div> 
            </div>     
        </div>
    </section>

    <section class="bg-staff" id="staff">
        <div class="container-fluid">
            <h3>Website Builders</h3>
            <hr class="hr-h3s"> 
                <div class="row text-center thumbnail-row">
                    <div class="col-sm-3">
                        <div class="staff">
                            <img src="https://res.cloudinary.com/deb0tkzkf/image/upload/v1615261866/Screenshot_2021-03-09-10-49-03-32_fvbcpg.jpg" class="" alt="chef-img" style="width:170px; height: 170px">
                            <h5 class="">Benjamin Tantra</h5>
                            <h6>SQL, CRUD and Login/Logout</h6>    
                        </div>
                     </div>
                     <div class="col-sm-3">  
                        <div class="staff">
                            <img src="https://res.cloudinary.com/deb0tkzkf/image/upload/v1615261873/Screenshot_2021-03-09-10-49-27-57_ucqkmj.jpg" class="" alt="chef-img" style="width:170px; height: 170px">
                            <h5 class="">Andrew Sergio D</h5>
                            <h6>CRUD Function</h6>         
                        </div>
                    </div>  
                    <div class="col-sm-3">  
                        <div class="staff">
                            <img src="https://res.cloudinary.com/deb0tkzkf/image/upload/v1615261866/Screenshot_2021-03-09-10-50-10-85_qvtvwl.jpg" class="" alt="chef-img" style="width:170px; height: 170px">
                            <h5 class="">M Noval Rifki H</h5>
                            <h6>Front-End display</h6>
                        </div>
                    </div>
                      <div class="col-sm-3">  
                        <div class="staff">
                            <img src="https://res.cloudinary.com/deb0tkzkf/image/upload/v1615261871/Screenshot_2021-03-09-10-49-47-10_qyj1qn.jpg" class="" alt="chef-img" style="width:170px; height: 170px">
                            <h5 class="">Michael Kent S</h5>
                            <h6>Login/Logout</h6>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <section class="bg-contact bg-section" id="contact">
        <div class="container-fluid">
            <h1 class="container-h1">Contact us</h1>
            <div class="row">
                <div class="col-md-6 col-sm-6 contact-left">
                    <div class="left-box">
                        <address class="contact">
                            <span class="span-contact">Call:</span>
                            <br>
                            62+ 813 422 554
                            <br> 
                            <span class="span-contact">Email:</span> 
                            <br>
                            info@chanteclaire.com
                            <br>
                            <span class="span-contact">Visit:</span>  
                            <br>
                             Jl. Boulevard Gading Serpong
                            <br>
                            Tangerang, Banten
                            <br>
                            Indonesia
                        </address>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 contact-right" >
                            
                            <form novalidate action="mailto:anttnew@gmmmail.com" name="frm" method="post">
                                 <div class="form-group has-feedback">
                                    <label class="sr-only">First name:</label>
                                    <input type="text" name="name" class="form-control" placeholder="First name" required>
                                    
                                </div>
                                 <div class="form-group has-feedback">
                                    <label class="sr-only">Last name:</label>
                                    <input type="text" name="surname" class="form-control" placeholder="Last name" required>
                                    
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="sr-only">Email:</label>
                                    <input type="email" name="email" class="form-control"  placeholder="Email" required>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" name="comment" for="comment">Comment:</label>
                                    <textarea class="form-control" rows="5" id="comment" placeholder="Description"></textarea>
                                </div>
                                <div class="contact-buttons pull-left">
                                    <input type="submit" name="submit"  value="Send" />
                                    <input type="reset" value="Reset" />
                                </div>
                            </form>
                            
                </div>
            </div>
        </div>    
    </section>

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

    <script>

    </script>  
    
</body>

</html>