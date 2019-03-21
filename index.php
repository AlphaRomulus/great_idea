<?php
//HEAD
include 'templates/header.php';

//BODY
if (isset($_GET['page']) && count($_GET) == 1){
	echo '<main id="page-'.$_GET['page'].'">';
	include 'templates/pages/'.$_GET['page'].'.php';
	echo '</main>';
}else{
	echo '<main id="page-'.$_GET['page'].'">';
	include 'templates/pages/home.php';
	echo '</main>';
}
//Footer
include 'templates/footer.php';
?>