<?php
if (isset($_GET['page']) && count($_GET) == 1){
	$page = $_GET['page'];
}else{
	$page = 'home';
}

//HEAD
include 'templates/header.php';

//BODY
echo '<main id="page-'.$page.'">';
include 'templates/pages/'.$page.'.php';
echo '</main>';

//Footer
include 'templates/footer.php';

?>
