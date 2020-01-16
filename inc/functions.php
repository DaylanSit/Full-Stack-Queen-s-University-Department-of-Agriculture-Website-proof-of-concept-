<?php 

function print_head($pgTitle, $inclMagPopup = FALSE) { ?>
    <head>
     <!-- Daylan Sit -->
	<title> <?php echo "$pgTitle" ?> </title>
	<meta charset="utf-8"/>
	<meta name="author" content="Daylan Sit"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="css/icons.css"> 	
	<link rel="stylesheet" href="css/style.css"> 	
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/header-slideshow.js"></script>
    <script src="js/form-validation.js"></script>

    <?php if ($inclMagPopup == TRUE) : ?>

        <link rel="stylesheet" href="css/magnific-popup.css">
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/thumbnail-gallery.js"></script>

    <?php endif; ?>
    

</head>

<?php

}






/*****************************************************************************/
/* Constants */
/*****************************************************************************/


define("SEARCH_FORM", "search-form");
define("SEARCH_BAR", "search-bar");

/***************************************************************************/
/* Manage Form Data */
/***************************************************************************/
function get_string_form_data($name, $superglobal, $filter = FILTER_SANITIZE_STRING) {
	$form_data = '';
	if (array_key_exists($name, $superglobal)) {
		$form_data = trim($superglobal[$name]);
		$form_data = filter_var($form_data, $filter);
	}
	
	return $form_data;
}


?>