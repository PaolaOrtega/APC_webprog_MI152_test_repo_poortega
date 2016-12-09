<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>

      <style>


      #prof{
    width: 1300px;
    height: 550px;
    background: rgba(0,0,0,0.1);
    padding: 5px;
    color: black;
    margin: auto;
    margin-top: 5px;
    margin-bottom: 5px;
    text-align: center;
}
      </style>
   </head> 
	
   <body> 


   <div id ="prof">
   <center>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('users/edit/'.$users_item['id']); ?>
  		  <br>
            <br>
        
            <label for="name">Name</label>
            <input type="input" name="name" size="20"  value="<?php echo $users_item['name'] ?>" />
            <br>
            <br>
            
        	 <label for="nickname">NickName</label>
            <input type="input" name="nickname" size="20" value="<?php echo $users_item['nickname'] ?>" />
        	<br>
            <br>
        
			<label for="email">Email</label>
            <input type="input" name="email" size="20"  value="<?php echo $users_item['email'] ?>"/>
        	<br>
            <br>

            <label for="hadd">Home Address</label>
            <input type="input" name="hadd" size="20" value="<?php echo $users_item['hadd'] ?>"/>
            <br>
            <br>

            <label for="gender">Gender</label>
            <input type="input" name="gender" size="20" value="<?php echo $users_item['gender'] ?>"/>
    		<br>
            <br>    
 

            <label for="cpnum">Cellphone Number</label>
            <input type="input" name="cpnum" size="20" value="<?php echo $users_item['cpnum'] ?>"/>
 			<br>
            <br>


            <label for="text">Comment</label>
            <textarea name="comment" rows="10" cols="40"><?php echo $users_item['comment'] ?></textarea>
        	<br>
        	<br>
        
        

            <input type="submit" name="submit" value="Edit User Information" />
        </div>
        </body>
	
</html>
    
</form>