<style>
@media screen and (min-width: 1280px) { 
    .text-world{ padding-top:7px !important;width:35%; }
}
@media screen and (min-width: 771px) and (max-device-width: 1280px) { 
    .text-world{ padding-top:40px !important;width:35%; }
}
@media only screen and (max-device-width: 770px) {
    .text-world{ display:none; }
}
@media only screen and (max-device-width: 991px) {
    .tagline-slogen{ display:none; }
}
.topcorner{
    position:absolute;
    top:15px;
    right: 10px;
 }
 
 .shoppingbasket {
  width:40px;
  height:40px;
  background-color:#fff;
  position:absolute;
  top:10px;
  right:13%;
}
.basketitems {
  color:#fff;
  font-size:75%;
  background-color:#e74c3c;
  position:absolute;
  top:20%;
  left:50%;
  -webkit-transform:translate(-50%,-90%);
  -moz-transform:translate(-50%,-90%);
  transform:translate(-50%,-90%);
  padding:0 12%;
  border-radius:1500px;
}

img.cart-img {
    height: 30px;
    width: 32px;
    margin-top: 2px;
}

</style>
<?php error_reporting(0); ?>
<!-- Preloader -->
<!--<div class="preloader-container">-->
<!--    <div class="preloader-wrapper">-->
<!--        <div class="preloader-border"></div>-->
<!--        <div class="preloader-line-mask">-->
<!--            <div class="preloader-line"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!-- Navigation menu -->
<div class="navik-header header-shadow navik-mega-menu mega-menu-fullwidth">
    <!--<div class="bg-indigo">-->
    <!--    <div class="container">-->
    <!--        <div class="row align-items-center">-->
    <!--            <div class="col-lg-6 d-none d-lg-block text-white-75 text-center text-lg-left py-3 py-lg-0">-->
    <!--                <small class="text-white font-weight-600">Think eSim, think gsm2go</small>-->
    <!--            </div>-->
    <!--            <div class="col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-end">-->
    <!--                <button type="button" class="btn btn-indigo shadow-none rounded-0 px-3 mb-0" data-toggle="modal" data-target="#modalLogin"><i class="fas fa-sign-in-alt"></i>Log in</button>-->
    <!--                <button type="button" class="btn btn-indigo shadow-none rounded-0 px-3 mb-0" data-toggle="modal" data-target="#modalRegister"><i class="fas fa-pen-nib"></i>Register</button>-->
    <!--            </div>-->

    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <?php
    $link = end(explode("/", 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'])); 
    if($link=="checkout.php"){
    ?>
    <div class="container-fluid px-5">
        <div class="navik-header-container">
            <!--Logo-->
            <div class="logo" data-mobile-logo="assets/logo.png" data-sticky-logo="assets/logo.png">
                <a href="/"><img src="assets/logo.png" alt="logo"/></a>
            </div>
            <!-- Burger menu -->
            <div class="burger-menu">
                <div class="line-menu line-half first-line"></div>
                <div class="line-menu"></div>
                <div class="line-menu line-half last-line"></div>
            </div>
            <!--Navigation menu-->
            <nav class="navik-menu menu-caret menu-hover-3 submenu-top-border submenu-scale">
                <ul>
                    <li>
                        <?php
                        $zone = mysqli_fetch_assoc(mysqli_query($con, "select zone_id from plans where id='".$_SESSION['direct']."'"));
                        ?>
                        <a href="plans"><form method="post" action="plans.php"><button type="submit" class="btn btn-primary mb-0" name="submit">Go back to Plans</button></form></a>
                    </li>
                    <li>
                        <a href="#"><?php echo $_SESSION['fname']; ?></a>
                    </li>
       
                    <!-- <li><a href="#">Pages</a>
                        <ul>
                            <li><a href="#">Login & Signup</a>
                                <ul>
                                    <li><a href="login-01.html">Login Style 1</a></li>
                                    <li><a href="login-02.html">Login Style 2</a></li>
                                    <li><a href="signup-01.html">Signup Style 1</a></li>
                                    <li><a href="signup-02.html">Signup Style 2</a></li>
                                    <li><a href="password-reset-01.html">Password Reset Style 1</a></li>
                                    <li><a href="password-reset-02.html">Password Reset Style 2</a></li>
                                </ul>
                            </li>
           

                            <li><a href="#">Blog</a>
                                <ul>
                                    <li><a href="blog-01.html">Blog Style 1</a></li>
                                    <li><a href="blog-02.html">Blog Style 2</a></li>
                                    <li><a href="blog-single-01.html">Blog Single Style 1</a></li>
                                    <li><a href="blog-single-02.html">Blog Single Style 2</a></li>
                                </ul>
                            </li>
                            <li><a href="faq.html">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu"><a href="#">Mega Menu</a>
                        <ul>
							<li>
								<div class="mega-menu-container">
									<div class="row">

										<div class="col-md-6 col-lg-3">
											<div class="mega-menu-box">
												<div class="mega-menu-thumbnail">
													<a href="#">
														<img src="assets/images/upload/mega-menu-service-01.jpg" alt="image">
													</a>
												</div>
												<h4 class="mega-menu-heading font-weight-700"><a href="#">Research Project</a></h4>
												<div class="mega-menu-desc">
													Donec tellus faucibus dolor viverra neca blandit at justo pendisse dolor turpis lobortis in sodales.
												</div>
											</div>
										</div>

										<div class="col-md-6 col-lg-3">
											<div class="mega-menu-box">
												<div class="mega-menu-thumbnail">
													<a href="#">
														<img src="assets/images/upload/mega-menu-service-02.jpg" alt="image">
													</a>
												</div>
												<h4 class="mega-menu-heading font-weight-700"><a href="#">Sales Conversion</a></h4>
												<div class="mega-menu-desc">
													Quisque vitae sapien neque in amet fusce enim nec nisl gravida rutrum dolor justo sem scelerisque.
												</div>
											</div>
										</div>

										<div class="col-md-6 col-lg-3">
											<div class="mega-menu-box">
												<div class="mega-menu-thumbnail">
													<a href="#">
														<img src="assets/images/upload/mega-menu-service-03.jpg" alt="image">
													</a>
												</div>
												<h4 class="mega-menu-heading font-weight-700"><a href="#">Growth Strategy</a></h4>
												<div class="mega-menu-desc">
													Laoreet eu ornare at nulla in luctus neque dapibus rhoncus malesuada in vivamus sodales vestibulum.
												</div>
											</div>
										</div>

										<div class="col-md-6 col-lg-3">
											<div class="mega-menu-box">
												<div class="mega-menu-thumbnail">
													<a href="#">
														<img src="assets/images/upload/mega-menu-service-04.jpg" alt="image">
													</a>
												</div>
												<h4 class="mega-menu-heading font-weight-700"><a href="#">Tax Accounting</a></h4>
												<div class="mega-menu-desc">
													Placerat semper massa molestie vehicula ultricies pharetra nisl sem a fermentum sollicitudin.
												</div>
											</div>
										</div>

									</div>
								</div>
							</li>
						</ul>
                    </li> -->
                    
                </ul>
            </nav>

        </div>
    </div>
    <?php } else{ ?>
    <div class="container-fluid px-5">
        <div class="navik-header-container">
            <!--Logo-->
            <div class="logo" data-mobile-logo="assets/logo.png" data-sticky-logo="assets/logo.png">
                <a href="/"><img src="assets/logo.png" alt="logo"/></a>
            </div>
            <style type="text/css">

@font-face {
font-family: SnellBT-Regular;
src: url('assets/SnellBT-Regular.otf');
}
.tagline {
font-family: SnellBT-Regular;
font-size:26pt;
}
.tagline2 {

font-family: calibri light;
font-size:14pt;
}


</style>
            <div class="text-world logo text-right tagline-slogen" style="width:36%;">
               <!-- <span class="tagline">The World's Best </span><span class="tagline2"><i>eSIM</i></span> -->
               <span class="tagline"><font color="#133cb6">The World's Best </font><font color="#76ad33">eSIM</font></span>
            </div>
           
            <!-- Burger menu -->
            <div class="burger-menu">
                <div class="line-menu"></div>
                <div class="line-menu"></div>
                <div class="line-menu"></div>
            </div>


            <!--Navigation menu-->
            <nav class="navik-menu menu-caret menu-hover-3 submenu-top-border submenu-scale font-weight-600">
                <ul>
                    <li class="current-menu"><a href="/index#eSim">eSim</a></li>
                   <!-- <li><a href="global-dialer-plans">Global Dialer</a></li>-->
                    <li><a href="virtual-numbers.php">Virtual Numbers</a></li>
                    <li><a href="faq">FAQ</a></li>
                    <li><a href="about-us">About Us</a></li>
                    <li>
                        <?php if(isset($_SESSION['user']) && ($_SESSION['role']=="U") ){?>
                        <a href="#"><?php echo $_SESSION['fname']; ?></a>
                        <ul class="submenu">
                            <li><a href="orders"><i class="fa fa-home"></i> My Orders</a></li>
                            <li><a href="profile"><i class="fa fa-user"></i> My Profile</a></li>
                            <li><a href="logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                        </ul>
                        <?php } else{ ?>
                        <a href="login.php">Login</a>
                        <?php } ?>
                    </li>
                    
                </ul>
            </nav>

        </div>
    </div>
    
    <?php
     $checkRecord = mysqli_query($con,"SELECT * FROM cart_items WHERE user_id=5");
              $totalrows = mysqli_num_rows($checkRecord);
    ?>
    <div class="topcorner">
      <!-- <a href="cart2"><?php echo $totalrows;?><img src="assets/cart.png" width="40px"></a> -->
      <a href="cart2">
<div class="shoppingbasket"> 

  <!--<div><i class="fa fa-shopping-cart fa-2x" aria-hidden="true" ></i></div>-->
  <div><img src="assets/images/sp.png" class="cart-img"></div>

  <div class="basketitems" id="basketitems"><?php //echo $totalrows;?>0</div>
</div>
</a>
    </div>    
    <?php } ?>
</div>