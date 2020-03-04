<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="307712715810-5gqv439ef8l9hmmod3ggpbdplcc7t7gq.apps.googleusercontent.com">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Team .EXE is the technical team of Computer Science & Engineering Department for technical fest NIMBUS at NIT Hamirpur.">
    <meta name="author" content="Team .EXE">
    <link rel="icon" href="images/title.png">

    <title>Projects - Team .EXE</title>

    <?php 
          include_once('stylesheets.php');          
          include_once('dbconnect.php');
    ?>
  </head>

  <body>
<?php 
      include_once('header.php');
      include_once('navigation.php');
?>       
    <center>
    <div class="container">
    <h1>Projects by Team .EXE</h1>
</div>
    </center>

    <section id="blog-full-width">
                <div class="container">
                    <?php
                            include_once('projects_embed.php');
                    ?>


                            <div class="col-md-8">
                                <article class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">
                                    <div class="blog-post-image">
                                        
                                    </div>
                                    <div class="blog-content">

                                        <?php 
      include_once('header.php');
      include_once('navigation.php');
     $p_id=$_GET['p_id'];
      $query= "Select * from project_info Where p_id='$p_id'";
      $result = mysqli_query($link,$query);
      if(!$result){
          echo "nip";
      }
  
      
?>       
    <center>
    <?php
while($disp=mysqli_fetch_assoc($result)){
  $name=$disp['p_name'];
  $abstract=$disp['p_abstract'];
  $socialOutcome=$disp['p_social_outcome'];
  $learningOutcome=$disp['p_learning_outcome'];
  $socialOutcome=(preg_split("/##/",$socialOutcome));
  $learningOutcome=(preg_split("/##/",$learningOutcome));



}

?><div style ="width:56%">
<div class="">
    <h1>Projects Description</h1>
    <hr width=86%>
</div>
<section  class="border border-dark rounded">
      <h1 class="display-5 text-center "><?php echo $name;?></h1>
      
      <h2 class="display-6 text-center mt-3 border-bottom">Abstract</h2>
      <p class="mt-4 mx-5  pl-2"><?php echo $abstract;?>
      <h2 class="display-6 text-center mt-3 border-bottom">Social Outcome</h2>
      <p class="mt-4 mx-5  pl-2"><?php foreach($socialOutcome as $key=>$value){
   print "<li> $value</li>\n";
}?>
      <h2 class="display-6 text-center mt-3 border-bottom">Learning Outcome</h2>
      <p class="mt-4 mx-5  pl-2"><?php foreach($learningOutcome as $key=>$value){
   print "<li> $value</li>\n";
}?></div>
    </center>


       
</div>
                                        
                                        
                                    </div>
                                </article>

							</div>
                                </div>
                        </div>
                    </section>
    
</div>
</div>
<?php
    include_once('footer.php');
?>    
  </body>
</html>