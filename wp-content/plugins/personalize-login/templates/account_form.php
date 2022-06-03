
<?php

include_once 'class/personalize_class.php';

$npersonalize = new personalize_class();
?>



<?php
 if ( is_user_logged_in() ) 
    {
    $current_user = wp_get_current_user();
    get_header('loggedin');
    }
    else{
    $current_user = wp_get_current_user();
     get_header('loggedout'); 
    }
    
    ?>




 <?php   
    global $wpdb;
   
         $retreive_friend_email = $wpdb->get_var($wpdb->prepare("select email FROM $npersonalize->personalize_table_name WHERE email = %s",   $current_user->user_email));
         //echo $retreive_friend_email;
                  
    if   ($retreive_friend_email == "")  
    { 
        $email = $current_user->user_email;
        $surname = "";
        $othername = "";
        $comment = "";
        $mobile = "";
       
        
      $npersonalize->create($comment, $email, $mobile, $othername, $surname);
    }
    else 
    {
        $setrow = $wpdb->get_row($wpdb->prepare("select * FROM $npersonalize->personalize_table_name WHERE email = %s", $current_user->user_email)); 
     
    }

?>

      
<?php
if(isset($_POST['btn-save']))
   
{
     
        $email  = $_POST['v_email'];
        $surname = $_POST['v_surname'];
        $othername = $_POST['v_othername'];
        $comment = $_POST['v_comment'];
        $mobile = $_POST['v_mobile'];
        
               
 
        //
        
        if(!isset($errMSG))
          {
         // Image Processing Ending
           
             wp_redirect("?errMSGx");
               
        }
        
      
        
        
        if($npersonalize->update( $email,$comment, $mobile, $othername, $surname))
              { 	
            wp_redirect("?inserted");
        }
	 else
        {
              wp_redirect("?failure");
           
        }
        
         
    }
        
?>
    


<section class="register-photo" style="background-color: transparent;">
    
    <?php
if(isset($_GET['inserted']))
{
	?>
    <div class="container">
	<div class="alert alert-info">
    <strong>WOW!</strong> Record was Edited Successfully <a href="<?php echo site_url(); ?>/view-std-data/">HOME</a>!
	</div>
	</div>
    <?php
}
else if(isset($_GET['failure']))
{
	?>
    <div class="container">
	<div class="alert alert-warning">
    <strong>SORRY!</strong> ERROR while Editing record !
	</div>
	</div>
    <?php
}else if(isset($_GET['errMSGx']))
{
	?>
    <div class="container">
	<div class="alert alert-warning">
    <strong>SORRY!</strong> <?php echo $errMSG; ?> 
	</div>
	</div>
    <?php
}
?>
    
       
        <div class="container">
         <div class="row">
            <div class="col">
        <form method='post' enctype="multipart/form-data">
             
             <?php
             
             if ($retreive_friend_email <> "")
                 
             {
                 ?>
            
 
           <div class="form-group"><label>Email</label><input type="email" class="form-control"  value ='<?php echo $current_user->user_email;?>' name="v_email" required /></div>
           <div class="form-group"><label>Surname</label><input type="text" class="form-control"  value ='<?php echo $setrow->surname; ?>' name="v_surname" required /></div>
           <div class="form-group"><label>Other Names</label><input type="text" class="form-control"  value ='<?php echo $setrow->othernames; ?>' name="v_othername" required /></div>         
           <div class="form-group"><label>Mobile</label><input type="text" class="form-control"  value ='<?php echo $setrow->mobile; ?>' name="v_mobile" required /></div>         
           <div class="form-group"><label>Comment</label><input type="text" class="form-control"  value ='<?php echo $setrow->comment; ?>' name="v_comment" required /></div>         
        
              
            <div class="form-group">
            <button type="submit" class="btn btn-primary" name="btn-save"><span class="glyphicon glyphicon-plus"></span> Update </button>  
            <a href="<?php echo wp_logout_url(site_url()); ?>" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i>Logout</a>
            </div>
       
              <?php
             
             }
             
             else
                
             {
             ?>
             
      
           <div class="form-group"><label>Email</label><input type="email" class="form-control"  value ='<?php echo $current_user->user_email;?>' name="v_email" required /></div>
           <div class="form-group"><label>Surname</label><input type="text" class="form-control"  value ='' name="v_surname" required /></div>
           <div class="form-group"><label>Other Names</label><input type="text" class="form-control"  value ='' name="v_othername" required /></div>         
           <div class="form-group"><label>Mobile</label><input type="text" class="form-control"  value ='' name="v_mobile" required /></div>         
           <div class="form-group"><label>Comment</label><input type="text" class="form-control"  value ='' name="v_comment" required /></div>         
        
              
            <div class="form-group">
            <button type="submit" class="btn btn-primary" name="btn-save"><span class="glyphicon glyphicon-plus"></span> Update </button>  
            <a href="<?php echo wp_logout_url(site_url()); ?>" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i>Logout</a>
            </div>
             
                 
            <?php
            
            
             }
             
             
                ?>
          
         
         </form>
             </div>
    
                <div class="col">
                    <ul class="list-group">
                            <li class="list-group-item"><span><a href="<?php echo plugin_dir_url(__DIR__);?>/upload/doc/resume_one_pg.pdf" target="_blank">One page Resume</a></span></li>
                             <li class="list-group-item"><span><a href="<?php echo plugin_dir_url(__DIR__);?>/upload/doc/resume_one_pg.pdf" target="_blank">Academic CV</a></span></li>
                            <li class="list-group-item"><span><a href="<?php echo plugin_dir_url(__DIR__);?>/upload/doc/resume_one_pg.pdf" target="_blank">Industry CV</a></span></li>
                    </ul> 
                </div> 
                
            </div>
            
	</div>
     
     


 </section>



 

