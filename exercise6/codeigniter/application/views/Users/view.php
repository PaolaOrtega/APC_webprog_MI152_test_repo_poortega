<!DOCTYPE html> 

<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
      <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/Style.css"> 

      <style>

      #prof{
    width: 1300px;
    height: 660px;
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


   <div id = "prof">
   <center>
<?php

echo'<h1>'."Name: ".'</label>'.$users_item['name'].'</h2>' ;

echo'<h1>'."NickName: ".'</label>'.$users_item['nickname'].'</h2>' ;

echo'<h1>'."Email: ".'</label>'.$users_item['email'].'</h2>' ;

echo'<h1>'."Home Address: ".'</label>'.$users_item['hadd'].'</h2>' ;

echo'<h1>'."Gender: ".'</label>'.$users_item['gender'].'</h2>' ;

echo'<h1>'."Cellphone Number: ".'</label>'.$users_item['cpnum'].'</h2>' ;

echo'<h1>'."comment: ".'</label>'.$users_item['comment'].'</h2>' ;
?>
</center>
</div>
</body>
</html>