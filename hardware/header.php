<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navigation.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Audiowide|Iceland|Monoton|Pacifico|Permanent+Marker|Vampiro+One' rel='stylesheet' type='text/css'><link rel="stylesheet" href="./style.css">

    <link rel="stylesheet" type="text/css" href="fullpage.css" />

<!-- This following line is optional. Only necessary if you use the option css3:false and you want to use other easing effects rather than "easeInOutCubic". -->
<script src="vendors/easings.min.js"></script>


<!-- This following line is only necessary in the case of using the option `scrollOverflow:true` -->
<script type="text/javascript" src="vendors/scrolloverflow.min.js"></script>

<script type="text/javascript" src="fullpage.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/navigation.js"></script>
    <script src="js/script.js"></script>
    <script src="js/blooming-menu.min.js"></script>

    

    <!--granim-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/granim/2.0.0/granim.min.js"></script> 
    <!--granim-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/multiple.js/0.0.1/multiple.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/multiple.js/0.0.1/multiple.css">
    <!--Animate On Scroll Library-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src='./example/js/blooming-menu.min.js'></script>
    <!--Animate On Scroll Library-->

    <link rel="stylesheet" href="test.css" > 

    <script src="./js/script.js"></script>
  

 <style> #granim-canvas {
    position:absolute; top:0; left:0; width:100%; height:100%; z-index:-1
}

</style>

</head>
<body>

<!--<canvas id="granim-canvas" style="width:100%;height:500%  "></canvas>-->
<header>

	<!-- Main -->
  
  <div class="main container">
			
			<div class="nav-wrap">
			
				<nav id="navigation" class="navigation navigation-justified">
					<div class="navigation-header">
						<div class="navigation-brand-text">
            <a class="violet"> Night</a>
						</div>
						<div class="navigation-button-toggler">
							<i class="hamburger-icon"></i>
						</div>
					</div>
					<div class="navigation-body">
						<div class="navigation-body-header">
							<div class="navigation-brand-text ">
              <a class="violet "> Cys3c</a>
							</div>
							<span class="navigation-body-close-button">&#10005;</span>
						</div>
						<ul class="navigation-menu">
							<li class="navigation-item is-active">
								<a class="navigation-link " href="#">Compare</a>
							</li>
              <li class="navigation-item is-active">
								<a class="navigation-link " href="#">Build</a>
							</li>
              <li class="navigation-item is-active">
								<a class="navigation-link " href="#">Test</a>
							</li>
											

						</ul>
						<ul class="navigation-menu align-to-right">
							<li class="navigation-item">
								<a class="navigation-link" href="#">
								<i class="fas fa-shopping-cart"></i>
								<span class="hide-on-landscape">Cart</span>
								<span class="navigation-badge">0</span>
								</a>
							</li>
							<li class="navigation-item">
								<a class="navigation-link" href="#">
								<i class="fas fa-search"></i>
								<span class="hide-on-landscape">Search</span>
								</a>
							</li>
						</ul>
						<div class="navigation-body-section">
							<a class="navigation-btn" href="#">Sign in</a>
						</div>
					</div>
				</nav>
			
			</div>
			
	
				
		</div>


<!--
<script>
var granimInstance = new Granim({
   element: '#granim-canvas',
   name: 'granim',
   opacity: [1, 1],
   states : {
       "default-state": {
        gradients: [
                ['#29323c', '#485563'],
                ['#FF6B6B', '#556270'],
                ['#80d3fe', '#7ea0c4'],
                ['#f0ab51', '#eceba3']
            ],
            transitionSpeed: 7000
       }
   }
});
</script>


<script>
  var granimInstance = new Granim({
    element: '#canvas-image-blending',
    direction: 'top-bottom',
    isPausedWhenNotInView: true,

    states : {
        "default-state": {
            gradients: [
                ['#29323c', '#485563'],
                ['#FF6B6B', '#556270'],
                ['#80d3fe', '#7ea0c4'],
                ['#f0ab51', '#eceba3']
            ],
            transitionSpeed: 7000
        }
    }
});
</script>-->
<script>
var multiple = new Multiple({
  selector: '.item',
  background: 'linear-gradient(#273463, #8B4256)'
})
  </script>