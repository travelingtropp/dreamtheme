<!doctype html>
<html>
<head>
	<meta charset='utf=-8'>
	<title>Jacqueline Tropp</title>
	<?php wp_head(); ?>
</head>

<body> 

	<div id='wrapper'>
		<div id = 'header_wrapper'>
			<div id="header">
				<nav class="navbar navbar-default" role="navigation"> 
<!-- Brand and toggle get grouped for better mobile display --> 
  <div class="navbar-header"> 
    
  </div> 
  <!-- Collect the nav links, forms, and other content for toggling --> 
  <div class="collapse navbar-collapse navbar-ex1-collapse"> 
    <ul class="nav navbar-nav"> 
      <li class="active"><a href="#">Link</a></li> 
      <li><a href="#">Link</a></li> 
      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a> 
        <?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'Top',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav',
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);
?>
      </li> 
    </ul>
  </div>
</nav>









				<!--
					<div class="nav-container">
						
						<nav class="navbar navbar-expand-lg">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'Top',
									'container' => false,
									'menu_class' => 'nav navbar-nav'
								) );	
							?>
						</nav>





<!--
 				<div class='row'>

						<div class='col'>
							<ul class='nav'>

				<?php wp_nav_menu(array('theme_location'=>'Top')); ?>
							</ul>
						</div>
						

						<div id='socialnav' class='col' >
				<?php wp_nav_menu(array('theme_location' => 'Social')) ?>
						</div>
					</div>

					<div class='row'>
						<div class = 'col-xs-12'>

				<img src="<?php header_image(); ?>">
					</div>
				</div>
				<div class='row'>
						<div class = 'col-xs-12'>

				<?php wp_nav_menu(array('theme_location' => 'Primary')) ?>
						</div>
				</div>


	</div>
	</div>

					