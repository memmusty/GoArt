<!DOCTYPE html>
<html class="no-js">
    <?php require 'head.php';?>
    <head>
    <style type="text/css">
        #p1, #p2, #p3, #p4, #p5{
            display: none;
            color: #ff530a;
        }
    </style>
    <script src="js/reg_validate.js" type="text/javascript"></script>
    </head>
	<body>
	<!--
	header-img start 
	============================== -->
    <section id="hero-area">
      <img class="img-responsive" src="images/7.1.jpg" alt="">
    </section>
	<!--
    Header start 
	============================== -->
    <?php include 'nav.php';?>
    <!--
    CONTACT US  start
    ============================= -->
    <section id="login">
        <div class="container">
            <?php
                if(isset($_REQUEST["success"])){
                    echo "<div class='alert alert-success'>
                    <strong>Account created successfully!</strong>
                  </div>";
                }
                if(isset($_REQUEST['error'])){
                    echo "<div class='alert alert-danger'>
                    <strong>Incorrect Username or Password.</strong>
                  </div>";
                }
                if(isset($_REQUEST['order'])){
                    echo "<div class='alert alert-danger'>
                    <strong>Login to checkout.</strong>
                  </div>";
                }
                if(isset($_REQUEST['email_exists'])){
                    echo "<div class='alert alert-danger'>
                    <strong>Account creation failed, email already in use.</strong>
                  </div>";
                }
                if(isset($_REQUEST['user_exists'])){
                    echo "<div class='alert alert-danger'>
                    <strong>Account creation failed, username already in use.</strong>
                  </div>";
                }
                if(isset($_REQUEST['logout'])){
                    echo "<div class='alert alert-danger'>
                    <strong>Please logout to continue</strong>
                  </div>";
                }
            ?>
            <div class="row">
                <div class="col-md-5">
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms"><span>JOIN US</span></h1>
                        <form method="POST" action="submit.php">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Write your first name here..." required oninput="string('fname')"  onchange="final_string('fname')">
							</div>
							<p id="p1">* Please enter your full-name only *</p>
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Write your last name here..." required oninput="string('lname')"  onchange="final_string('lname')">
							</div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="text" class="form-control" id="email" name="email"  placeholder="Write your email address here..." required oninput="vemail()"  onchange="final_vemail()">
							</div>
							<p id="p5">* Please a valid email address *</p>
                            <div class="form-group">
                                <label for="uname">Username</label>
                                <input type="text" class="form-control" id="uname" name="uname" placeholder="Write your username here..." oninput="lengthDef('uname',3,20)" onchange="final_lengthDef('uname',3,20)" required>
                            </div>
							<p id="p2">* Please enter between 3 and 20 characters *</p>
                            <div class=form-group>
                                <label for="pword">Password</label>
                                <input type="password"  class="form-control" name="pword" id="pword" placeholder="Write your password here..." required oninput="lengthDefine('password',6)" onchange="final_lengthDefine('password',6)"/>
							</div>
							<p id="p3">* Please enter atleast 6 characters *</p>
                            <div class=form-group>
                                <label for="cpword">Confirm Password</label>
                                <input type="password" class="form-control" name="cpword" id="cpword" placeholder="Retype your password here..." required oninput="fetch()" onchange="final_fetch()"/>
							</div>
							<p id="p4">* password does not match! *</p>
                            <div>
                                <button class="mybtn" type="submit" id="register" name="register" color="#ff530a">JOIN US</button>
                            </div>
                        </form>
                </div><!-- .col-md-12 close -->
                
                <div class="col-md-5 col-md-push-2">
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms"><span>LOG IN</span></h1>
                        <form method="POST" action="submit.php">
                            <div class="form-group">
                                <label for="uname">Username</label>
                                <input type="text" class="form-control" id="uname" name="uname" placeholder="Write your username here..." required>
                            </div>
                            <div class=form-group>
                                <label for="pword">Password</label>
                                <input type="password"  class="form-control" name="pword" id="pword" placeholder="Write your password here..." required>
                            </div>
                            <div>
                                <button class="mybtn" type="submit" id="login" name="login" color="#ff530a">LOGIN</button>
                            </div>
                        </form>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- #contact-us close -->
    <!--
    footer  start
    ============================= -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="1100ms">
                        <div class="social-media-link">
                            <h3>Follow <span>US</span></h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="200ms">
                        <h3>CONTACT <span>INFO</span></h3>
                        <div class="info">
                            <ul>
                                <li>
                                  <h4><i class="fa fa-phone"></i>Telephone</h4>
                                  <p>(+234) 817 5873 064</p>
                                    
                                </li>
                                <li>
                                  <h4><i class="fa fa-map-marker"></i>Address</h4>
                                  <p>233 Herbert Macaulay Way, Sabo yaba, Lagos</p>
                                </li>
                                <li>
                                  <h4><i class="fa fa-envelope"></i>E-mail</h4>
                                  <p>memunati@gmail.com</p>
                                  
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d333.44014562208054!2d3.379083979855607!3d6.497224003103006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c58bd8680c1%3A0xd87bbee7c3358342!2sHerbert+Macaulay+Library+(You+Read)!5e0!3m2!1sen!2sng!4v1543856169802" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <!-- .col-md-4 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #footer close -->
    <!--
    footer-bottom  start
    ============================= -->
    <footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>Copyright &copy; 2018 - All Rights Reserved.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>