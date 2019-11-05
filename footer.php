
  <footer class="site-footer">
    <div class="container">
      <div class="row"> 
        <!-- Start Footer Widgets -->
        <div class="col-md-8 col-sm-8 widget footer-widget">
          <h4 class="footer-widget-title">About TACN</h4>
          <img src="images/church.jpg" alt="church">
		  <?php
				$result = $db->prepare("SELECT * FROM welcome");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				?>  
          <div class="spacer-20"></div>
        <?php echo strip_tags(substr($row['body'],0,180)) ;?>...  <a href="programmes.php">Read More</a>
		  <?php } ?>
		</div>
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">Fast Links</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">Our History</a></li>
            <li><a href="events.php">All Events</a></li>
            <li><a href="news-updates.php">News Update</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
		 <?php
                            //include('../connect.php');
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
               ?> 
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">Contact Information</h4>
          <?php echo $row['phone']; ?> </br>
		  <?php echo $row['linkedin']; ?></br>
		 <?php echo $row['email']; ?>
        </div>
		
      </div>
    </div>
  </footer>
  <footer class="site-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="copyrights-col-left col-md-6 col-sm-6">
          <p>&copy; 2019 TACN Abule Egba District. All Rights Reserved</p>
        </div>
        <div class="copyrights-col-right col-md-6 col-sm-6">

          <div class="social-icons"> <a href="https://www.facebook.com/Tacn Abule Egba<?php echo $row['facebook']; ?>" target="facebook"><i class="fa fa-facebook">
            </i></a> <a href="https://twitter.com/Tacn abule egba<?php echo $row['twitter']; ?>" target="twitter"><i class="fa fa-twitter"></i></a> <a href="https://instagram.com/<?php echo $row['status']; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
            </i></a> <a href=" https://api.whatsapp.com/send?phone=2348063516855&text=contacting-from%20the%20website%20name=" target="whatsapp"><i class="fa fa-whatsapp"></i></a></div>
        </div>
      </div>
    </div>
	<?php } ?>
  </footer>
  <!-- End Footer --> 
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 
</div>
<script src="js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call --> 
<script src="plugins/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin --> 
<script src="js/helper-plugins.js"></script> <!-- Plugins --> 
<script src="js/bootstrap.js"></script> <!-- UI --> 
<script src="js/waypoints.js"></script> <!-- Waypoints --> 
<script src="plugins/mediaelement/mediaelement-and-player.min.js"></script> <!-- MediaElements --> 
<script src="js/init.js"></script> <!-- All Scripts --> 
<script src="plugins/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider --> 
<script src="plugins/countdown/js/jquery.countdown.min.js"></script> <!-- Jquery Timer --> 
<script src="style-switcher/js/jquery_cookie.js"></script> 
<script src="style-switcher/js/script.js"></script> 

</body>


</html>