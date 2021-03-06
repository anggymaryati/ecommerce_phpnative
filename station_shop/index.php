<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Station Shop </title>
<meta name="keywords" content="station shop, theme, free template, templatemo, CSS, HTML" />
<meta name="description" content="Station Shop Theme, free CSS template provided by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />

<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>

<script type="text/javascript">
    
    $(document).ready(function() {
        
        $(".carousel").dualSlider({
            auto:true,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    });
    
</script>

</head>

<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    
    	<div id="site_title">
        	<h1><a href="http://www.templatemo.com" rel="nofollow">Free CSS Templates</a></h1>
        </div>
        
        <div id="header_right">
        <?php include "config/config.php";
            if (isset($_SESSION['username'])){ ?>
	           <a href="#">My Account</a> | <a href="#">My Wishlist</a> | <a href="#">My Cart</a> | <a href="#">Checkout</a> | <a href="process/logout_submit.php">Log Out</a>
            <?php }else{ ?>
                 <a href="#">My Account</a> | <a href="#">My Wishlist</a> | <a href="#">My Cart</a> | <a href="#">Checkout</a> | <a href="admin/index.php">Log In</a>
            <?php } ?>
		</div>
        
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menu">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" class="selected">Home</a></li>
                <li><a href="products.php">Products</a>
                    <ul>
                        <li><a rel="nofollow" href="http://www.templatemo.com/page/1">Sub menu 1</a></li>
                        <li><a rel="nofollow" href="http://www.templatemo.com/page/2">Sub menu 2</a></li>
                        <li><a rel="nofollow" href="http://www.templatemo.com/page/3">Sub menu 3</a></li>
                  </ul>
                </li>
                <li><a href="about.php">About</a>
                    <ul>
                        <li><a rel="nofollow" href="http://www.templatemo.com/page/1">Sub menu 1</a></li>
                        <li><a rel="nofollow" href="http://www.templatemo.com/page/2">Sub menu 2</a></li>
                        <li><a rel="nofollow" href="http://www.templatemo.com/page/3">Sub menu 3</a></li>
                        <li><a rel="nofollow" href="http://www.templatemo.com/page/4">Sub menu 4</a></li>
                        <li><a rel="nofollow" href="http://www.templatemo.com/page/5">Sub menu 5</a></li>
                  </ul>
                </li>
                <li><a href="faqs.php">FAQs</a></li>
                <li><a href="checkout.php">Checkout</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="menu_second_bar">
        	<div id="top_shopping_cart">
            	Shopping Cart: <strong>3 Products</strong> ( <a href="#">Show Cart</a> )
            </div>
        	<div id="templatemo_search">
                 <form action="search_product.php" method="get">
                  <input type="text" value="Search" name="search" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value="search" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
            <div class="cleaner"></div>
    	</div>
    </div> <!-- END of templatemo_menu -->
    
    <div id="templatemo_middle" class="carousel">
    	<div class="panel">
				
				<div class="details_wrapper">
					
					<div class="details">
					
						<div class="detail">
							<h2><a href="#">Station Shop</a></h2>
                            <p><a rel="nofollow" href="http://www.templatemo.com/">Station Shop</a> is free css template provided by <a rel="nofollow" href="http://www.templatemo.com/">templatemo.com</a> for your personal or commercial websites. Sed aliquam arcu. Donec urna massa, cursus et mattis at, mattis quis lectus. </p>
							<a href="#" title="Read more" class="more">Read more</a>
						</div><!-- /detail -->
						
						<div class="detail">
							<h2><a href="#">Fusce hendrerit</a></h2>
                            <p>Duis dignissim tincidunt turpis eget pellentesque. Nulla consectetur accumsan facilisis. Suspendisse et est lectus, at consectetur sem.</p>
							<a href="#" title="Read more" class="more">Read more</a>
						</div><!-- /detail -->
						
						<div class="detail">
							<h2><a href="#">Aenean massa cum</a></h2>
                            <p>Sed vel interdum sapien. Aliquam consequat, diam sit amet iaculis ultrices, diam erat faucibus dolor, quis auctor metus libero vel mi.</p>
							<a href="#" title="Read more" class="more">Read more</a>
						</div><!-- /detail -->
						
					</div><!-- /details -->
					
				</div><!-- /details_wrapper -->
				
				<div class="paging">
					<div id="numbers"></div>
					<a href="javascript:void(0);" class="previous" title="Previous" >Previous</a>
					<a href="javascript:void(0);" class="next" title="Next">Next</a>
				</div><!-- /paging -->
				
				<a href="javascript:void(0);" class="play" title="Turn on autoplay">Play</a>
				<a href="javascript:void(0);" class="pause" title="Turn off autoplay">Pause</a>
				
			</div><!-- /panel -->
	
			<div class="backgrounds">
				
				<div class="item item_1">
					<img src="images/slider/02.jpg" alt="Slider 01" />
				</div><!-- /item -->
				
				<div class="item item_2">
					<img src="images/slider/03.jpg" alt="Slider 02" />
				</div><!-- /item -->
				
				<div class="item item_3">
					<img src="images/slider/01.jpg" alt="Slider 03" />
				</div><!-- /item -->
				
			</div><!-- /backgrounds -->
    </div> <!-- END of templatemo_middle -->
    
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<h3>Categoriesa <a href="http://www.onlyimage.com" title="Free Images" class="more_link"  target="_blank"></a></h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                    	<li class="first"><a href="#">Aenean varius nulla</a></li>
                        <li><a href="#">Cras mattis arcu</a></li>
                        <li><a href="#">Donec turpis ipsum</a></li>
                        <li><a href="#">Fusce sodales mattis</a></li>
                        <li><a href="#">Maecenas et mauris</a></li>
                        <li><a href="#">Mauris nulla tortor</a></li>
                        <li><a href="#">Nulla odio ipsum</a></li>
                        <li><a href="#">Nunc ac viverra nibh</a></li>
                        <li><a href="#">Praesent id venenatis</a></li>
                        <li><a href="#">Quisque odio velit</a></li>
                        <li><a href="#">Suspendisse posuere</a></li>
                        <li><a href="#">Tempus lacus risus</a></li>
                        <li><a href="#">Ut tincidunt imperdiet</a></li>
                        <li><a href="#">Vestibulum eleifend</a></li>
                        <li class="last"><a href="#">Velit mi rutrum diam</a></li>
                    </ul>
                </div>
            </div>
            <div class="sidebar_box"><span class="bottom"></span>
            	<h3>Best Sellers <a href="http://www.onlyimage.com/free-images/beauty" title="Beauty" class="more_link" rel="nofollow" target="_blank"></a></h3>   
                <div class="content"> 
                	<div class="bs_box">
                    	<a href="#"><img src="images/templatemo_image_01.jpg" alt="Image 01" /></a>
                        <h4><a href="#">Donec nunc nisl</a></h4>
                        <p class="price">$10</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                    	<a href="#"><img src="images/templatemo_image_01.jpg" alt="Image 02" /></a>
                        <h4><a href="#">Aenean eu tellus</a></h4>
                        <p class="price">$12</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                    	<a href="#"><img src="images/templatemo_image_01.jpg" alt="Image 03" /></a>
                        <h4><a href="#">Phasellus ut dui</a></h4>
                        <p class="price">$20</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                    	<a href="#"><img src="images/templatemo_image_01.jpg" alt="Image 04" /></a>
                        <h4><a href="#">Vestibulum ante</a></h4>
                        <p class="price">$16</p>
                        <div class="cleaner"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="float_r">
        	<h1>New Products</h1>
              <?php 
                $view = 6;
               
                if(isset($_GET['page'])){
                  $page_aktif = $_GET['page'];
                }else{
                  $page_aktif = 1;
                }

                $awaldata = ($page_aktif-1)*$view;
                
                $sql = "SELECT * FROM product_tbl ORDER BY product_id DESC LIMIT $awaldata,$view";
                $qproduct = $koneksi->query($sql); 
                $rowproduct = $qproduct->fetch_assoc();
                do{
            ?>
            <div class="product_box no_margin_right">
            	<a href="productdetail.html"><img src="images/product/<?php echo $rowproduct['gambar']; ?>" alt="Image 01" /></a>
                <h3><?php echo $rowproduct['product_name']; ?></h3>
                <p class="product_price">$ <?php echo $rowproduct['price']; ?></p>
                <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                <a href="product_detail.php?product_id=<?php echo $rowproduct['product_id']?>"" class="detail">Detail</a>
            </div>    
            <?php  
            }while($rowproduct = $qproduct->fetch_assoc() ); 
            ?>    	
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
    <div id="templatemo_footer">
    	<p>
			<a href="index.html">Home</a> | <a href="products.html">Products</a> | <a href="about.html">About</a> | <a href="faqs.html">FAQs</a> | <a href="checkout.html">Checkout</a> | <a href="contact.html">Contact</a>
		</p>

    	Copyright © 2048 <a href="#">Your Company Name</a> | Designed by <a href="http://www.templatemo.com" rel="nofollow" target="_parent">Free CSS Templates</a>
    </div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>