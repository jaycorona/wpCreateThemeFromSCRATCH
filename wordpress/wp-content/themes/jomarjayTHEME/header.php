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


<?php  wp_nav_menu(array('theme_location'=>'primary')); ?>
