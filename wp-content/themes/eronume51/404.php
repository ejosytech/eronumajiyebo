
<?php
/*
  Template Name: Error 404 Page 
 */
?>
<?php if ( is_user_logged_in() ) 
    {
    get_header('logout'); 
    }
   else{
 get_header('login'); 
    }
?>

<div class= "container">
    
  <img src="<?php bloginfo("template_directory");?>\uploads\images\error_page\under_construction.jpeg" alt="Site Under Construction">

</div>