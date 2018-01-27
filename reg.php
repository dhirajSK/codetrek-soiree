<?php include('header.php') ?>


  <div class="container">  
  <form id="contact" action="thanks.php" method="post">
    <h3>Request An invite</h3>
    <fieldset>
      <input placeholder="Name" type="text"  id="name" name="name" required">
    </fieldset>
    <fieldset>
      <input placeholder="Enter Email" type="email" id="email" name="email" required>
    </fieldset>
    <fieldset>
      <input placeholder="Phone Number" type="tel" id="phn-no" name="phn-no" required>
    </fieldset>
    <fieldset>
      <input placeholder="City" type="text" id="city" name="city" required >
    </fieldset>
    <fieldset>
      <label>Gender</label><br>
      <label class="radio-inline">
        <input type="radio" name="gender" value="Male">Male
      </label>
      <label class="radio-inline">
        <input type="radio" name="gender" value="Female">Female
      </label>
      </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit">Request Invitation</button>
    </fieldset>
   
  </form>
</div>


</body>
<?php include('footer.php') ?>

</html>
