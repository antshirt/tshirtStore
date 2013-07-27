<!DOCTYPE html>
<html>
  <head>
    <title>Your T-shirt store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }
    
	.navbar .btn, .navbar .btn-group {
		margin-top: 10px;
	}	
	.navbar form {
		margin-top: 10px;
	}	

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 400px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 400px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }

    .carousel-indicators.middle {
		left: 0;
		right: 0;
		top: auto;
		bottom: 15px;
		text-align: center;
	}
    .carousel-indicators.middle li {
        float: none;
        display: inline-block;
    }

	   /* CUSTOMIZE THE CAROUSEL DETAILS
    -------------------------------------------------- */

    /* Carousel base class */
    .carouselDetails {
      margin-bottom: 60px;
    }

    .carouselDetails .container {
      position: relative;
      z-index: 9;
    }

    .carousel-controlDetails {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carouselDetails .item {
      height: 350px;
    }
    .carouselDetails img {
      position: absolute;
      margin: auto;
      top: 0;
      left: 0;
      right:0;
      min-width: 0%;
      height: 350px;
    }
    .carousel-indicatorsDetails.middle {
		left: 0;
		right: 0;
		top: auto;
		bottom: 15px;
		text-align: center;
	}
    .carousel-indicatorsDetails.middle li {
        float: none;
        display: inline-block;
    }
	
	
    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }

	.details {
		margin-top: 80px;
	}

    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    /*
     Popover modifcations for checkout
    */
    .popover {
      min-width:270px;
	}
	.popover hr{
		margin:0;
	}

    </style>
  </head>
  <body>
      <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#" onclick="showFront();">T-shirt store</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#" onclick="showFront();" data-toggle="tab">Home</a></li>
                <li><a href="#about" data-toggle="tab">About</a></li>
                <li><a href="#contact" data-toggle="tab">Contact</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>				
              </ul>
			<form class="navbar-search pull-left">
			  <input type="text" class="search-query" placeholder="Search">
			</form>				  
	       <a id="checkoutBtn" class="btn btn-small btn-success pull-right" href="#" onclick="onCheckOut();" data-content="" rel="popover" data-html="true" data-placement="bottom" data-original-title="Shopping basket" data-trigger="hover"><i class="icon-shopping-cart"></i> Checkout</a>

      	  
             </div><!--/.nav-collapse -->

          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
     <ol class="carousel-indicators middle">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol> 
      <div class="carousel-inner">
        <div class="item active">
          <img src="./img/jumbotron_img1.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img src="./img/jumbotron_img1.jpg" alt="">
          <div class="container">
           <!-- <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
            -->
          </div>
        </div>
        <div class="item">
          <img src="./img/jumbotron_img1.jpg" alt="">
          <div class="container">
           <!--   <div class="carousel-caption">
            <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>              
            -->

          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->

	<div id="checkout" class="container hidden">
	</div>

     <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-box" src="./img/thumb_img01.jpg">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
          <p><a class="btn" href="#" onclick="showItemDetails('130701');">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
         <img class="img-box" src="./img/thumb_img02.jpg">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
          <p><a class="btn" href="#" onclick="showItemDetails('130702');">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
       <img class="img-box" src="./img/thumb_img01.jpg">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.</p>
          <p><a class="btn" href="#" onclick="showItemDetails('130703');">View details &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->
	</div><!-- /.marketing -->
	
	<!-- Item Details -->
	<div class="container details hidden">
		<div class="row">
			<div class="span6">
				 <div id="myCarouselDetails" class="carousel carouselDetails slide">
					 <ol class="carousel-indicators middle">
						<li data-target="#myCarouselDetails" data-slide-to="0" class="active"></li>
						<li data-target="#myCarouselDetails" data-slide-to="1"></li>
						<li data-target="#myCarouselDetails" data-slide-to="2"></li>
					 </ol> 	
					 <div class="carousel-inner">
						  <div class="item active">
							  <img src="./img/tshirt-agression01.jpg" alt="">
							</div>
							<div class="item">
							  <img src="./img/tshirt-darkforces01.jpg" alt="">
							</div>
							<div class="item">
							  <img src="./img/framed-agression.jpg" alt="">
							</div>
						  </div> <!-- /carousel-inner -->
						  <a class="left carousel-control" href="#myCarouselDetails" data-slide="prev">&lsaquo;</a>
						  <a class="right carousel-control" href="#myCarouselDetails" data-slide="next">&rsaquo;</a>				
					  </div><!-- /.carousel -->			
				<div class="row">
<!--					<img class="img-box" src="./img/tshirt-agression01.jpg">
-->
					<img class="img-box" src="./img/tshirt-agression01.jpg" data-target="#myCarouselDetails" data-slide-to="0" width="100">
					<img class="img-box" src="./img/tshirt-darkforces01.jpg" data-target="#myCarouselDetails" data-slide-to="1" width="100">
					<img class="img-box" src="./img/framed-agression.jpg" data-target="#myCarouselDetails" data-slide-to="2" width="100">
				</div>	
			</div> <!-- /.span6 -->
			<div class="span6">
			  <h2 id="shirtName">Heading</h2>
			  <h4 id="price">299 SEK</h4>
			  <p id="desc">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
			  <hr>
				<div class="btn-group" data-toggle="buttons-radio">
				  <button type="button" class="btn">S</button>
				  <button type="button" class="btn active">M</button>
				  <button type="button" class="btn">L</button>
				  <button type="button" class="btn">XL</button>
				</div>
				<br><br>
				<a class="btn btn-primary" href="#" onclick="addItem();">Add to cart</a>
			</div> <!-- /.span6 -->
		</div> <!-- /.row -->
	</div>
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    <script src="js/json.js"></script>
	<script src="js/store.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
		var g_nItems = 0;
		var g_currentItem = undefined;
		
      !function ($) {
        $(function(){
		store.clear();
          // carousel demo
        $('.carousel').carousel({
			interval: 4000
			});
        })
      }(window.jQuery)

		function showFront(){
			$("#myCarousel").show();
			$(".marketing").show();
			$(".details").addClass('hidden');
		}		
		function showItemDetails(sku){
			$("#myCarousel").hide();
			$(".marketing").hide();
			$(".details").removeClass('hidden');
			loadSku(sku);
		}
		
		function addItem() {
			g_nItems++;
			$("#checkoutBtn").html('<i class="icon-shopping-cart"></i> Checkout ('+g_nItems+')');
			g_currentItem.quantity = 1;
			g_currentItem.fullsku =  g_currentItem.sku+'-'+$(".btn-group > .btn.active").text();
			
			var newsku = g_currentItem.fullsku;
			
			
			if (store.get(newsku) != null){
				var item = store.get(newsku);
				item.quantity +=1;
				store.set(newsku,item);
			}else {
				store.set(newsku,g_currentItem);
			}
			$('#checkoutBtn').popover();
			var allItems = store.getAll();
			var text="";
			var price = 0;
			$.each(allItems, function(i,item){
				text+=item.name +' ('+item.fullsku + ") Qty: "+item.quantity+"<hr>";
				price+=item.price;
			});
			$('#checkoutBtn[data-content]').attr("data-content",text);
			$('#checkoutBtn[data-original-title]').attr("data-original-title","Shopping basket (price: "+price+" SEK)");

			
		}
		
		function loadSku(skuId) {
			$.getJSON("item.php?",
				{
			   	 sku  : skuId,
			   	 format  : "json"
			   	 },function(data) {
			   	 	g_currentItem = data.item;
				   	$("#shirtName").text(data.item.name);
				   	$("#price").text(data.item.price+' SEK');
				   	$("#desc").text(data.item.description);
			   	 }); //end callback function
			
		}
		function onCheckOut(){
			$("#myCarousel").hide();
			$(".marketing").hide();

			$.ajax({
			  type: "POST",
			  url:"checkout.php"
			}).done(function( msg ) {
				$("#checkout").html(msg);				  
			});
			$("#checkout").removeClass('hidden');

		}
	  
    </script>
  </body>
</html>