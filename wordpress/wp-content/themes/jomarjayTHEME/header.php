<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jomar Jay</title>
	<?php wp_head(); ?>
</head>

<?php 
	//is_home() -> means asa tanan post nimo gibutang
	//is_front_page()  -> ug asa imong imong HOME PAGE

	if(is_front_page() ):
		$jomarjay_classes = array( 'jomarjay-class','my-class');
	else:
		$jomarjay_classes = array( 'no-jomarjay-class');
	endif;


 ?>

<body <?php body_class($jomarjay_classes);		//body_class(array('jomarjay-class','my-class')); ?>>


<?php // wp_nav_menu(array('theme_location'=>'primary')); ?>
	
		<div class="container">
		
			<div class="row">
				
				<div class="col-xs-12">
					
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="#">Jomar Jay Practice</a>
					    </div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'nav navbar-nav navbar-right'
									)
								);
							?>
						</div>
					  </div><!-- /.container-fluid -->
					</nav>
				
				</div>
				
			</div>