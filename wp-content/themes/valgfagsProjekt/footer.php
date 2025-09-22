</div>
<footer>
  <?php 
  $user = get_user_by('login', 'adminKunde');
  $public_image = get_field('public_image', 'user_' . $user->ID);
  $public_name = get_field('public_name', 'user_' . $user->ID);
  $public_number = get_field('public_number', 'user_' . $user->ID);
  $public_email = get_field('public_email', 'user_' . $user->ID);
  ?>
  <div class="footerInfo">
    <div class="profilInfo">
      <img src="<?php echo($public_image) ?>" alt="">
      <div class="kundeInfo">
        <p><?php echo($public_name) ?></p>
        <p>Tel.: <?php echo($public_number) ?></p>
        <p><?php echo($public_email) ?></p>
      </div>
    </div>
    <div class="copPri">
      <p>Private Policy</p>
      <p>Cookiepolicy</p>
      <p>Terms and Conditions</p>
      <p>Contact</p>
    </div>
    <div class="copPri">
      <p>Copyright © Food Site</p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>