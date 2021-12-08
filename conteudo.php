<?php 


 foreach ($_REQUEST as $___opt => $___val) {
 	 $$___opt = $___val;  
}  
	if(empty($pagina)) {  
		include("home.php");  
}

	else {  
		include("$pagina.php");  
}  
 ?>