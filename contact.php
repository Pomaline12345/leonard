<?php include "header.php"; ?>

<?php


if (isset($_POST['submit'])) {

  if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'],
  FILTER_VALIDATE_EMAIL)) {
    //http_response_code(500);
    print $the_message;
    exit();
  }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = "tacabuleegbadistrict@gmail.com";


$subject = "Website Contact Form: $name";
$body = "You have received a new message from your website contact form. \n\n"."Here are the details:\n
\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";
$header = "From: noreply@platiniumnets.xyz\n"; 
$header = "Reply-To: $email";

if (!mail($to, $subject, $body, $header));

http_response_code(500);
}

?>
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax" style="background-image:url(images/cross.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Contact</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header --> 
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Contact</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <h2 class="post-title">Our Location</h2>
            </header>
            <div class="post-content">
              <div id="gmap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.9748550773875!2d3.300751514449876!3d6.650038423525083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b912b9d226b11%3A0xe354708157fe75cf!2sThe%20Apostolic%20Church!5e0!3m2!1sen!2sng!4v1571232266044!5m2!1sen!2sng" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
              <div class="row">
                <form method="post" action="">

                  <h4> Fill In This Form Below We Like To Hear From You</h4><br>
                 
                    <div class="form-group">
                      <input type="text" name="name"  class="form-control" placeholder="Name*">
                    </div>

                    <div class="form-group">
                      <input type="email"  name="email"  class="form-control" placeholder="Email*">
                    </div>
                

                     <div class="form-group">
                      <input type="digit"  name="phone"  class="form-control" placeholder="PHONE*">
                    </div>
                
                  
                    <div class="form-group">
                      <textarea cols="6" rows="7" name="message" class="form-control" placeholder="Message"></textarea>
                    </div>
                
                  
                    <input type="submit" class="btn btn-success" value="Submit now!" name="submit">
                </form>                   
                </div>
              </div>
            </div>
          
          <!-- Start Sidebar -->
          <?php include"side-bar.php"; ?>
  <!-- Start Footer -->
<?php include "footer.php"; ?>
