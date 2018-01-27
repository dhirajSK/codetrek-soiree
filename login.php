<?php include('header.php') ;
  session_start();
  if(isset($_SESSION['is_user_logged_in']) && $_SESSION['is_user_logged_in'])
  header("Location:/admin.php");
?>
  
  <div class="container">  
  <form id="contact" action="auth.php" method="post">
    <h3>Log in</h3>

    <fieldset>
      <input placeholder="name" type="text" id="username" name="username" required>
    </fieldset>
    <fieldset>
      <input placeholder="password" type="password" id="pass" name="pass" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" ">Login</button>
    </fieldset>
   
  </form>
</div>


</body>
<?php include('footer.php') ?>
