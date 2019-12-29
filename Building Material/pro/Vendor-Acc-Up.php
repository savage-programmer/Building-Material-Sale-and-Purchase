<?php

session_start();

include "connect.php";
if(isset($_REQUEST['sub']))
{

	$user=$_SESSION['Username'];

    if($_POST['userName']=='$user') 
    { 
     $q="select * from vendor where UserName='$user' and Vpassword='$password'";
     $qr=mysqli_query($con,$q);

      if(mysqli_num_rows($qr)>0)
      {
       $_SESSION['Username']=$username;
      header("location:  Admin-Main.php");
      }
      else
      {
        echo"<script>alert('Admin UserName OR Password was wrong');</script>";
      }
    }
  }

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Construction - WeBuilder Template</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/materialdesignicons.min.css" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        <link href="vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .header{
                font-family: "Montserrat", sans-serif;
                color: white;
                margin-top: 20px;
                margin-bottom: 20px;
            }
        
        



* {
  box-sizing: border-box;
}




.signinbox {
    color: black; 
    
    margin-top: 10px;
  
  max-width: 500px;
  padding: 16px;
  background-color: transparent;
  border-radius: 12px;
}

.input_fields {
    padding-left: 120px;
}

input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: cream;
  border-radius: 10px;
    color : black;
}

input[type=text]:focus {
  background-color: #ddf0ff;
  outline: none;
}


input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: cream;
  border-radius: 10px;
  color : black;
}

input[type=password]:focus {
  background-color: #ddf0ff;
  outline: none;
}


.button 
{
    display: inline-block;
    border-radius: 6px;
    background-color: #35444f;
    border: none;
    color: #b4cddf;
    text-align: center;
    font-size: 18px;
    padding: 10px;
    width: 100px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 2px;
    margin-left: 83px;
}

.button span 
{
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
}

.button span:after 
{
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
}

.button:hover span
{
    padding-right: 25px;
}

.button:hover span:after
 {
     opacity: 1;
    right: 0;
   }


        </style>
    </head>
    <body>
       
       
        <!--================Header Area =================-->
    <header class="main_header_area">
            <div class="header_top_area">
                <div class="container">
                  <h2 style="margin: 15px; color: white;">Welcome to WeBuild Market Place(Where Buying and Selling Made Easier)</h2>
                </div>
            </div>
            <div class="main_menu_area">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="Vendor-Home.php">Home</a></li>
                                <li class="dropdown submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Orders</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="Vendor-Order-Main.php">All Orders Orders</a></li>
                                        <li><a href="Vendor-Order-Compl.php">Completed Orders</a></li>
                                        <li><a href="Vendor-Order-Pending.php">Pending Orders</a></li>
                                        <li><a href="Vendor-Order-Canceled.php">Canceled Orders</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Payments</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="Vendor-Bill-Main.php">All Payments</a></li>
                                        <li><a href="Vendor-Bill-Pending.php">Pending Payments</a></li>
                                        <li><a href="Vendor-Bill-Compl.php">Complted Payments</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Advertisements</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="Vendor-Advertisement-Main.php">View All Advertisements</a></li>
                                        <li><a href="Vendor-Ad-Upload.php">Add Advertisements</a></li>
                                        <li><a href="Vendor-Enabled-Advertisements.php">Enable Advertisements</a></li>
                                        <li><a href="Vendor-Disabled-Advertisements.php">Disable Advertisements</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Supplier</a>
                                    <ul class="dropdown-menu">
                                <li class="active"><a href="Vendor-Supplier-Info.php">Supplier Info</a></li>
                                <li class="active"><a href="Vendor-Supplier-Info-Status.php">Supplier Selection</a></li>
                            </ul>
                        </li>
                                <li><a href="Vendor-Acc-Up.php">Upgrade Account</a></li>
                                <li><a href="Account-Info.php">Account Info</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
            <a class='slider_btn' href='Logout_action.php' style="float: right; margin-right: 50px;">Logout</a>
        </header>
        <!--================Header Area =================-->
        
        <!--================Main Slider Area =================-->
        <section class="main_slider_area">
            <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
                <ul> 
                    <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="img/home-slider/slider-1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div class="slider_text_box">
                            <div class="tp-caption first_text" 
                            data-x="['center','center','center','center']" 
                            data-y="['middle','middle','middle','middle']" 
                            data-hoffset="['0','0','0','0']" 
                            data-voffset="['-38','-38','-38','-20','-20']" 
                            data-fontsize="['28','28','28','28']"
                            data-lineheight="['38','38','38','38']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]">We are weBuilder</div>
                                
                            <div class="tp-caption secand_text" 
                            data-x="['center','center','center','center']" 
                            data-y="['middle','middle','middle','middle']" 
                            data-hoffset="['0','0','0','0']" 
                            data-voffset="['38','38','38','38','38']" 
                            data-fontsize="['110','110','110','50','50']"
                            data-lineheight="['100','100','100','70','70']"
                            data-width="['none','none','none','none']"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[10,10,10,10]"
                            data-paddingleft="[0,0,0,0]">we innovate </div>
                        </div>
                    </li>
                    <li data-index="rs-2973" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="img/home-slider/slider-2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div class="slider_text_box2">
                            <div class="tp-caption first_text" 
                            data-x="['left','left','left','left','left']" 
                            data-y="['middle','middle','middle','middle','middle']" 
                            data-hoffset="['0','15','15','15','15']" 
                            data-voffset="['-30','-30','-30','-30','-60']"  
                            data-fontsize="['80','80','60','60','40']"
                            data-lineheight="['90','90','70','70','50']"
                            data-width="['none','none','none','none']"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[10,10,10,10]"
                            data-paddingleft="[0,0,0,0]">we build dream</div>
                            
                            <div class="tp-caption secand_text" 
                            data-x="['left','left','left','left','left']" 
                            data-y="['middle','middle','middle','middle']" 
                            data-hoffset="['0','15','15','15','15']" 
                            data-voffset="['50','50','50','40','0']" 
                            data-fontsize="['28','28','28','20','20']"
                            data-lineheight="['38','38','38','30','30']"
                            data-width="['760','760','760','550','400']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]">We made just most advance & user friendly constraction theme in the world</div>
                            
                            <div class="tp-caption" 
                            data-x="['left','left','left','left','left']" 
                            data-y="['middle','middle','middle','middle']" 
                            data-hoffset="['0','15','15','15','15']"
                            data-voffset="['140','140','140','130','90']" 
                            data-fontsize="['28','28','28','28']"
                            data-lineheight="['38','38','38','38']"
                            data-width="['730']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"><a class="slider_btn" href="#">browse services</a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--================End Main Slider Area =================-->

        <!--================Our Service Area =================-->
        <section class="our_service_area">
            <div class="left_service">
                <div class="left_service_inner">
                    <div class="bg-img">
    <form class="signinbox" method="POST">
    <b>User Name</b>
    <input type="text" placeholder="Enter User Name" name="userName"><br>
    <b>Password</b>
    <input type="password" placeholder="Password" name="password"><br>
    <br>
        <button class="slider_btn" type="submit" name="sub"><span>Proceed</span></button>
      <button class="slider_btn" type="reset" name="res"><span>Reset</span></button>

    </form>
</div>
                </div>
            </div>
            <div class="right_service">
                <div class="right_service_text">
                    <div class="main_b_title">
                        <h2>our <br class="title_br" /> service</h2>
                        <h6>The Best Construction <br class="sub_br" /> Company</h6>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>

                    <div class="border_bar"></div>
                </div>
            </div>
        </section>
        
     
        
       
        
        <!--================Address Area =================-->
     <?php
        $add="select * from vendor where UserName='$user'";
        $read=mysqli_query($con,$add);
        $adrow=mysqli_fetch_assoc($read);

        $admin="select admin.PhoneNumber from admin inner join vendor on vendor.AdminID=admin.AdminID where vendor.UserName='$user'";
        $resad=mysqli_query($con,$admin);
        $admrow=mysqli_fetch_assoc($resad);

        ?>

        <section class="address_area">
            <div class="container">
                <div class="row address_inner">
                    <div class="col-md-4">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/place-icon.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4>Office Address :</h4>
                                <h5><?php echo "<td>{$adrow['Address']}</td>"; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/phone-icon.png" alt="">
                            </div>
                            <div class="media-body">
                                <h5><?php echo "<td>{$adrow['PhoneNo']}</td>"; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/inbox-icon.png" alt="">
                            </div>
                            <div class="media-body">
                                <h5><?php echo "<td>{$adrow['Email']}</td>"; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Address Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area">
                <div class="container">
                    <div class="row footer_widgets_inner">
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget about_widget">
                                <img src="img/footer-logo.png" alt="">
                                <p>
                                     We’re a global product group.+20 brands. All Nations. One mindset.
                                     We empower people to upgrade their lives. Our products & services make it super easy for anyone to buy or sell almost anything.Every month thousands of people use our market-leading trading platforms. We’re going for a billion.
                                  </p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget recent_widget">
                                <div class="f_w_title">
                                    <h3>Recent Posts</h3>
                                </div>
                                <div class="recent_w_inner">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="img/blog/recent-post/recent-1.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <a href="#"><p>The road to success is always under TeamWork</p></a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="img/blog/recent-post/recent-2.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <a href="#"><p>The road to success is always under HardShip</p></a>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget address_widget">
                                <div class="f_w_title">
                                    <h3>Office Address</h3>
                                </div>
                                <div class="address_w_inner">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <p><?php echo "<td>{$adrow['Address']}</td>"; ?></p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <p><?php echo "<td>{$adrow['PhoneNo']}</td>"; ?></p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="media-body">
                                            <p><?php echo "<td>{$adrow['Email']}</td>"; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <aside class="f_widget give_us_widget">
                                <h5>Contact Authorities</h5>
                                <h4><?php echo "<td>{$admrow['PhoneNumber']}</td>"; ?></h4>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copy_right">
                <div class="container">
                    <h4><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Free Classifieds in Pakistan. © 2006-2019 WeBuild </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></h4>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/counterup/waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/flex-slider/jquery.flexslider-min.js"></script>
        
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>