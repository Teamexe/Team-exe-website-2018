<?php 
// i think ur use a div and create a easy website and without using lot of br tag 
          include_once('stylesheets.php');          
          include_once('dbconnect.php');
          include_once('user_session.php');
?>
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

    <title>View Users - Team .EXE</title>

  </head>

  <body>
<?php 
      include_once('header.php');
      
      echo "<br><br><br>";
      echo '<div class="jumbotron">';
      echo '<div class="container">';
      echo "<center>";
      echo '<h2><code>';
      echo "Registered Users - <b>";
      
      //fetch user count from database
      $qr=mysqli_query($link," SELECT COUNT(google_id) as total FROM users");
      $num_rows = mysqli_fetch_assoc($qr);
      echo $num_rows['total'];
      echo "</b></h2></code><br>";

      echo "<table>";
      //echo "$user_check";

      //Displaying user image after fetching from database
      $qryya=mysqli_query($link,"SELECT name,link,picture FROM users order by name asc");
      $i=0;
      $bl="_blank";
      while($rowaa = mysqli_fetch_array($qryya))
      {
        $i++;
        $n=$rowaa['name'];
        $l=$rowaa['link'];
        $p=$rowaa['picture'];
      
      ?>
      
      <tr>
      <td><?php print("<a href=".$l." target=".$bl." >"); print("<img src=".$p." width=30% />"); print("</a>"); ?></td>
      <td><?php print("<a href=".$l." target=".$bl." ><button class='btn btn-info' type='button'>"); echo $n; print("</button></a>"); ?></td>
      </tr>
      <?php     
      }

      echo "</table>";
      echo "</center>";
      echo "</div>";
      echo "</div>";
            //here ur use navigation i think ur use navigation top on the body for good view
      include_once('navigation.php');
      include_once('footer.php');
?>
</body>
</html>
