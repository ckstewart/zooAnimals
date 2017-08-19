<?php 
    require_once 'createAnimals.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zoo Example</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/animals.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    
    
    
</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>Menu</a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Example 1</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>Example 2</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Example 3</a>
            </li>
            
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Zoo Animals</h1>
            
        </div>
    </header>

    <!-- About -->
    
    <div class="container">
    
    <div class="row">
        
        <br>
            
          <div class="col-12 col-md-3 col-sm-6">
					<a title="Lion" href="#"> 
						<img class="thumbnail img-responsive" id="image-1" src="img/lions.JPG">
					</a>
				</div>
      
				<div class="col-12 col-md-3 col-sm-6">
					<a title="Camel" href="#"> 
						<img class="thumbnail img-responsive" id="image-2" src="img/camel.JPG">
					</a>

				</div>
				<div class="col-12 col-md-3 col-sm-6">
					<a title="Elephant" href="#"> 
						<img class="thumbnail img-responsive" id="image-3" src="img/elephant.JPG">
					</a>
				</div>
        <div class="col-12 col-md-3 col-sm-6">
					<a title="Tucan" href="#"> 
						<img class="thumbnail img-responsive" id="image-4" src="img/tucan.JPG">
					</a>
				</div>
    </div>
        <div class="row">
        
        <br>
            
          <div class="col-12 col-md-3 col-sm-6">
					<a title="Komodo Dragon" href="#"> 
						<img class="thumbnail img-responsive" id="image-5" src="img/komodoDragon.JPG">
					</a>
				</div>
      
				<div class="col-12 col-md-3 col-sm-6">
					<a title="Otters" href="#"> 
						<img class="thumbnail img-responsive" id="image-6" src="img/otters.JPG">
					</a>

				</div>
				<div class="col-12 col-md-3 col-sm-6">
					<a title="Rhino" href="#"> 
						<img class="thumbnail img-responsive" id="image-7" src="img/rhino.JPG">
					</a>
				</div>
            <div class="col-12 col-md-3 col-sm-6">
					<a title="Two Hump Camel" href="#"> 
						<img class="thumbnail img-responsive" id="image-8" src="img/twoHumpCamel.JPG">
					</a>
				</div>
    </div>
    
    <hr>
    
  </div>
</div>

	<div class="hidden" id="img-repo">
        
		<?php 
        echo'<div class="item" id="image-1">
			<img class="thumbnail img-responsive" title="'.ucfirst($lion->name).' Price: $'.$lion->price.'" src="img/lions.JPG">
		</div>
		<div class="item" id="image-1">
			<img class="thumbnail img-responsive" title="'.ucfirst($lion->name).' Price: $'.$lion->price.'" src="img/lionTwo.JPG">
		</div>';
        
        echo '<div class="item" id="image-2">
			<img class="thumbnail img-responsive" title="'.ucfirst($camel->name).' Price: $'.$camel->price.'" src="img/camel.JPG">
		</div>
		<div class="item" id="image-2">
			<img class="thumbnail img-responsive" title="'.ucfirst($camel->name).' Price: $'.$camel->price.'" src="img/camel.JPG">
		</div>';
        
        echo '<div class="item" id="image-3">
			<img class="thumbnail img-responsive" title="'.ucfirst($elephant->name).' Price: $'.$elephant->price.'" src="img/elephant.jpg">
		</div><div class="item" id="image-3">
			<img class="thumbnail img-responsive" title="'.ucfirst($elephant->name).' Price: $'.$elephant->price.'" src="img/elephant.jpg">
		</div>';
        
        echo '<div class="item" id="image-4">
			<img class="thumbnail img-responsive" title="'.ucfirst($tucan->name).' Price: $'.$tucan->price.'" src="img/tucan.jpg">
		</div>
		<div class="item" id="image-4">
			<img class="thumbnail img-responsive" title="'.ucfirst($tucan->name).' Price: $'.$tucan->price.'" src="img/tucan.jpg">
		</div>';
        
        echo '<div class="item" id="image-5">
			<img class="thumbnail img-responsive" title="'.ucfirst($komodoDragon->name).' Price: $'.$komodoDragon->price.'" src="img/komodoDragon.jpg">
		</div>
		<div class="item" id="image-5">
			<img class="thumbnail img-responsive" title="'.ucfirst($komodoDragon->name).' Price: $'.$komodoDragon->price.'" src="img/komodoDragonTwo.jpg">
		</div>';
        
        echo '<div class="item" id="image-6">
			<img class="thumbnail img-responsive" title="'.ucfirst($otter->name).' Price: $'.$otter->price.'" src="img/otterTwo.jpg">
		</div>
		<div class="item" id="image-6">
			<img class="thumbnail img-responsive" title="'.ucfirst($otter->name).' Price: $'.$otter->price.'" src="img/otters.jpg">
		</div>';
        
        echo '<div class="item" id="image-7">
			<img class="thumbnail img-responsive" title="'.ucfirst($rhino->name).' Price: $'.$rhino->price.'" src="img/rhino.jpg">
		</div>
		<div class="item" id="image-7">
			<img class="thumbnail img-responsive" title="'.ucfirst($rhino->name).' Price: $'.$rhino->price.'" src="img/rhinoTwo.jpg">
		</div>';
        
        echo '<div class="item" id="image-8">
			<img class="thumbnail img-responsive" title="'.ucfirst($twoHumpCamel->name).' Price: $'.$twoHumpCamel->price.'" src="img/twoHumpCamel.jpg">
		</div>
		<div class="item" id="image-8">
			<img class="thumbnail img-responsive" title="'.ucfirst($twoHumpCamel->name).' Price: $'.$twoHumpCamel->price.'" src="img/twoHumpCamelTwo.jpg">
		</div>
		       ';
        
        
        ?>
				
		      
		<!-- #image-6-->
		
		        
		<!-- #image-7-->
		
		     
		<!-- #image-8-->
		
		
	</div>

<div class="modal" id="modal-gallery" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal">×</button>
          <h3 class="modal-title" align="center"></h3>
      </div>
      <div class="modal-body">
          <div id="modal-carousel" class="carousel">
   
            <div class="carousel-inner">           
            </div>
            
            <a class="carousel-control left" href="#modal-carousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="carousel-control right" href="#modal-carousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            
          </div>
                
            
        
        
        
        </div>
    
    
    
    
    </div>
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
        
        
    </script>
      
      <script src="js/animals.js"></script>

</body>

</html>
