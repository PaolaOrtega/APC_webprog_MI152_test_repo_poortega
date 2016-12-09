<!DOCTYPE html> 

<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Mypage</title>  
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>


      <style>

#prof{
    width: 1300px;
    height: 420px;
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
 
<?php echo form_open('users/create'); ?>    
    		<br>
            <br>
        
            <label>Name</label>
            <input type="input" name="name" size="20" />
            <br>
            <br>
        
            <label>NickName</label>
            <input type="input" name="nickname" size="20" />
        	<br>
            <br>
        
			<label>Email</label>
            <input type="input" name="email" size="20" />
        	<br>
            <br>

            <label>Home Address</label>
            <input type="input" name="hadd" size="20" />
            <br>
            <br>

            <label>Gender</label>
            <input type="input" name="gender" size="20" />
    		<br>
            <br>    

            <label>Cellphone number</label>
            <input type="input" name="cpnum" size="20" />
        	<br>
            <br>

            <label>Comment</label>
            <input type="input" name="comment" size="20" />
	        <br>
            <br>
            
            <input type="submit" name="submit" value="Create Users item" />
        
    
</form>
</center>
</div>
   </body>
</html>