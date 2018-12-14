<!DOCTYPE html>
<html class="no-js">
    <?php require 'head.php';?>
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
    price start
    ============================ -->
    <section id="price">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if(isset($_REQUEST['success'])){
                            echo "<div class='alert alert-success'>
                            <strong>Item successfully added to cart, view <a href='cartList.php'>your cart here</a> to checkout.
                          </div>";
                        }
                        if(isset($_REQUEST['failed'])){
                            echo "<div class='alert alert-danger'>
                            <strong>A problem was encountered while adding to cart.
                          </div>";
                        }
                        if(isset($_REQUEST['order_success'])){
                            echo "<div class='alert alert-success'>
                            <strong>Order successfully placed. Thank you for your patronage</a>.
                          </div>";
                        }
                    ?>
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">our <span>Artwork</span> the <span>PRICE</span></h1>
                                <?php
                                    require 'db.php';
                                        $sqql = "select * from arts order by admin_name";
                                        $rresult = mysqli_query($conn, $sqql);
                                        echo '
                                        <ul>';
                                        while($rrow=mysqli_fetch_array($rresult,MYSQLI_NUM)){//get all art s under the category
                                            echo "
                                            <li class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='300ms'>
                                                    <div class='row'>
                                                    <img src='data:image/jpag;base64,".base64_encode($rrow[3])."' class='col-md-2' style='width:150px; height:100px;'/>
                                                    <div class='item col-md-10'>
                                                        <div class='item-title'>
                                                            <h2>$rrow[1]</h2>
                                                            <b style='float:right; color: #ff530a; font-size:2rem'> ₦$rrow[4]
                                                            <a href='cart.php?id=$rrow[0]' style='border:2px solid #ff530a; color: #ff530a; margin:0 1rem' onclick='#' title='Add to Cart. Click as much as the quantity you want'>&plus; </a>
                                                            </b>
                                                        </div>
                                                    <p style='font-size:2rem'>$rrow[2]</p>
                                                    <p>By <em>$rrow[5]</em></p>
                                                    </div>
                                                </div>
                                            </li>";
                                        }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #price close -->
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