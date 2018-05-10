<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Readmore</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charse t="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--bootstrap-->
	<link href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet" >
    <link href="<?php echo base_url("assets/bootstrap/css/bootstrap.css.map"); ?>" rel="stylesheet" >
    <link href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet" >
    <link rel="stylesheet" href="<?php echo base_url("assets/readmore.css"); ?>" type="text/css">
    <script src="<?php echo base_url("assets/bootstrap/js/jquery.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
</head>
<body id="body">

        <nav class="navbar navbar-inverse navbar-fixed-top" id="nav">
             <div class="container-fluid">
                 <!-- Brand and toggle get grouped for better mobile display -->
                 <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand" href="#">
                        <img src="<?php echo base_url('assets/img/fti.png'); ?>" width="50" height="45" class="logo" alt="">
                </a>
                 </div>

             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav">
                 <!--li><img src="img/logo.png" alt="logo-ukdw " id="logo"></li-->
                 <li class="active kategori" id="home" ><a href="HalamanUtama.html" ><span id="kategori">Beranda</span></a></li>
                 <li class="kategori" ><a href="<MuscleBuild>11111</MuscleBuild>.html"><span id="kategori">Partner</span></a></li>
                 <li class="kategori"><a href="Healthy.html"><span id="kategori">Contact Us</span></a></li>
             </ul>
             <div class="col-sm-3 col-md-3 pull-right">
                    <form class="navbar-form" role="search">
                    <div class="input-group" id="search">
                        <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                    </form>
                    </div>
             </div><!-- /.navbar-collapse -->

         </div><!-- /.container-fluid -->

 </nav>

    <div class="container">
            <div class="row bg-read">
                <div  id="colread" style="margin-top: 10px;">
                    <p class="judulcontent">Lorem Ipsum Dolor</p>
                    <p class="date">17-08-2017</p>
                    <hr id="hr">
                    <div class="col-sm-4">
                        <img src="assets/img/mou.png" width="100%" height="100%" alt="Image">
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/img/mou2.png" width="100%" height="100%" alt="Image">
                    </div>
                    
                    <div class="col-sm-4">
                        <img src="assets/img/mou3.png" width="100%" height ="100%" alt="Image">
                    </div>
            </div>
            </div>
               <br> 
                <div class="tulisan">
                    <p>Judul: [MOU] Nota Kesepahaman Sinode Gereja GKJ  </p>
                </div>  
                <div class="tulisan">
                    <p>Mitra: GKJ</p>
                </div>
                
                <div class="tulisan">   
                    <p>Nama yang terlibat: Marcel</p>
                </div>

                <div class="tulisan">   
                    <p>Start Date: 10 - 05 - 2018</p>
                </div>
                 
                 <div class="tulisan">  
                    <p>End Date: 20 - 05 - 2018</p>
                </div>
                  
                <div class="tulisan">  
                    <p>Tingkat Kerjasama: PRODI</p>
                </div>
                
                <div class="tulisan">
                    <p>Deskripsi: lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
                    lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum   
                    lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                    lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
                    lorem ipsum lorem ipsum lorem ipsum </p>
                </div>
                    </div>    
                </div>

</div>
         <footer>
            <section class="nb-footer">
            <div class="container">
            <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-single">

                                <a class="navbar-brand ukdwfooter" href="#">
                                    <img src="<?php echo base_url('assets/img/ukdw.png'); ?>" width="50" height="45" class="logo" alt="">
                                </a>
                                <h2>Universitas Kristen</h2>
                                <h2>Duta Wacana</h2>

                    <p>Jl. Dr. Wahidin Sudiro Husodo No. 5 – 25
                    Yogyakarta 55224
                    Telp. 0274 – 563929 Fax. 0274 – 513235
                    Email: humas@staff.ukdw.ac.id</p>

                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-single useful-links">
                 <div class="footer-title"><h2>Navigation</h2></div>
                 <ul class="list-unstyled">
                        <li><a href="index.html" class="isifooter">Beranda<i class="fa fa-angle-right pull-right"></i></a></li>
                        <li><a href="about1.html"class="isifooter">Partner<i class="fa fa-angle-right pull-right"></i></a></li>
                        <li><a href="service1.html"class="isifooter">Contact Us<i class="fa fa-angle-right pull-right"></i></a></li>
                    </div>
            </div>
            <div class="clearfix visible-sm"></div>

            <div class="col-md-3 col-sm-6">

                <div class="col-sm-12 left-clear right-clear footer-single footer-project">
                    <div class="footer-title"><h2>Lorem Ipsum</h2></div>
                    <!--div class="col-xs-4">
                        <img src="http://lorempixel.com/200/200/" class="img-responsive center-block">
                    </div>
                    <div class="col-xs-4">
                        <img src="http://lorempixel.com/200/200/" class="img-responsive center-block">
                    </div>
                    <div class="col-xs-4">
                        <img src="http://lorempixel.com/200/200/" class="img-responsive center-block">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-xs-4">
                        <img src="http://lorempixel.com/200/200/" class="img-responsive center-block">
                    </div>
                    <div class="col-xs-4">
                        <img src="http://lorempixel.com/200/200/" class="img-responsive center-block">
                    </div>
                    <div class="col-xs-4">
                        <img src="http://lorempixel.com/200/200/" class="img-responsive center-block">
                    </div-->

                </div>

            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-single">
                    <div class="footer-title"><h2>Contact Information</h2></div>
                    <div class="col-sm-12">
                        <ul class="list-inline footer-social">
                            <li><a href=""><img src="<?php echo base_url('assets/img/2.png'); ?>" width="30" height="35" class="logo" alt=""></a></li>
                            <li><a href=""><img src="<?php echo base_url('assets/img/1.png'); ?>" width="30" height="35" class="logo" alt=""></a></li>
                            <li><a href=""><img src="<?php echo base_url('assets/img/4.png'); ?>" width="30" height="35" class="logo" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            </div>

            <div class="col-sm-6 copyrt xs-center">
                <span id="copy">2018 © Manpro</span>
            </div>

            </div>
            </section>
            </footer>
            </body>
            </html>

      </body>

 </html>