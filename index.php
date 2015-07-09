<?php
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Demo Contact Form'; 
    $to = 'example@domain.com'; 
    $subject = 'Message from Contact Demo ';
    
    $body ="From: $name\n E-Mail: $email\n Message:\n $message";
    // Check if name has been entered
    if (!$_POST['name']) {
      $errName = 'Please enter your name';
    }
    
    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }
    
    //Check if message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Please enter your message';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 5) {
      $errHuman = 'Your anti-spam is incorrect';
    }
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
  if (mail ($to, $subject, $body, $from)) {
    $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
  } else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
  }
}
  }
?>
<html>
<head>
<title>McArthur Bates Communicative Development Inventories</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="fonts/glyphicons-halflings-regular.woff2">
    <link href="fonts/glyphicons-halflings-regular.woff">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand" href="index.html"><img src="images/logobggray.png" onmouseover="this.src='images/logobgwhite.png'" onmouseout="this.src='images/logobggray.png'" style="width:200px; margin-top:-7px;"/></a>

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse navbar-menubuilder">
                        <ul class="nav navbar-nav navbar-left" style="font-size: 32px;"> 
                            <li><a href="board.html">Advisory Board</a>
                            </li>
                            <li><a href="forms.html">CDI Forms</a>
                            </li>
                            <li><a href="adaptations.html">Adaptations</a>
                            </li>
                            <li><a href="scores.html">Scoring Program</a>
                            </li>
                            <!--<li><a href="news.html">News</a>
                            </li>
                            <li><a href="resources.html">Resources</a>
                            </li>-->
                        </ul>
                        <!--<ul class="nav navbar-nav navbar-right">
                        <li><a href="contact.html"><!-<span class="glyphicon glyphicon-envelope"></span>-> Contact</a></li>
                      </ul> -->
                    </div>
                </div>
            </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/logobg4.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption" id="name">
              <p>The MacArthur-Bates Communicative Development Inventories (CDIs), and the corresponding Spanish-language Inventarios, are parent report instruments which capture important information about children's developing abilities in several domains of early language, including vocabulary comprehension, production, gesture use, and early grammar.  </p>
              <p>
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/wordle7.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption" id="name">
              <h1>Announcements and News!</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed sapien lectus. Donec eu enim leo. Ut fermentum leo lectus. Vivamus et lobortis est. </p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="item" >
          <img id="effect8" class="third-slide" src="images/bates_picture.jpg" alt="Third slide" style="margin-left: 10%">
          <div class="container">
            <div class="carousel-caption" id="memoriam">
              <p>In 2004, the Advisory Board renamed the MacArthur Communicative Development Inventories to MacArthur-Bates Communicative Development Inventories in honor and remembrance of Elizabeth Bates who passed away in December 2003. </p>
              <p>The work by Dr. Bates and her colleagues in the 1970s and 1980s provided the groundwork for the CDIs and she became a central contributor to the inception and subsequent expansion of the instruments in the 1990s and beyond.  Her energy, enthusiasm, and remarkable insight inspired and guided her MacArthur colleagues in the development and expansion of the inventories and supporting tools.</p>
              <p> Elizabeth Bates <br> In Memoriam <br> 1947-2003 </p>
              
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row" id="bubbles">
        <div class="col-lg-3" id="bubble">
          <img class="img-circle" src="images/babies/ChineseGirl.png" alt="Generic placeholder image" width="140" height="140">
          <h2>English and Spanish Forms</h2>
          <p>The long forms of the MacArthur-Bates CDIs in English and Spanish are generally appropriate for use with children 8-30 months.  Short form versions in both languages are also available, including a short-form extension for use with English-learning children up to 36 months.</p>
          <p><a class="btn btn-default" href="#" role="button">See More Here!</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3" id="bubble">
          <img class="img-circle" src="images/babies/HispanicGirl.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Scoring Program</h2>
          <p>The CDI Scoring program is a free, downloadable Windows-based database application (Access, Word, Excel) which enables users to track CDI administrations, score responses, look-up percentiles, and generate user-friendly summary reports.</p>
          <p><a class="btn btn-default" href="#" role="button">Learn More</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3" id="bubble">
          <img class="img-circle" src="images/babies/BlueBoy.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Adaptations in Other Languages</h2>
          <p>Adaptations of the CDIs have been developed in more than 60 languages other than English and Mexican Spanish, following guidelines provided by the CDI Advisory Board. Click below for a list of available languages and currently available contact information.</p>
          <p><a class="btn btn-default" href="#" role="button">View Details</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3" id="bubble">
          <img class="img-circle" src="images/babies/ChineseBaby.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Lexical Norms</h2>
          <p>Both CLEX and Wordbank compile responses from many different CDI administrations in dozens of languages, providing exciting new resources for the construction of crosslinguistic lexical norms.  Click below to learn about our latest developments!</p>
          <p><a class="btn btn-default" href="#" role="button">Click Here!</a></p>
        </div>
      </div><!-- /.row -->


      <!-- START THE FEATURETTES 

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

       /END THE FEATURETTES -->
<form class="form-horizontal" role="form" method="post" action="index.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First and Last Name" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
    </div>
</form>

      <!-- FOOTER -->
      <footer>
        <div id="Copywrite">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </div>
        <div class="row" id="sitemap">
          <div class="col-lg-2">
            <ul>
                  <li><a href="index.html">CDI Home Page</a>
                </li>
                  <li><a href="forms.html">CDI Forms</a>
                </li>
                  <li><a href="adaptations.html">Adaptations In Other Languages</a>
                </li>
                  <li><a href="scores.html">Scoring Program</a>
                </li>
                  <li><a href="board.html">Board Members</a>
                </li>
            </ul>
          </div>
          <div class="col-lg-2">
            <ul>
              <li><a href="contact.html">Contact</a>
                </li>
                  <li><a href="news.html">News</a>
                </li>
                  <li><a href="resources.html">Resources</a>
                </li>
                  <li><a href="faq.html">Frequently Asked Questions</a>
                </li>
                  
            </ul>
          </div>
          <div class="col-lg-8">
            <ul>
              <li><a href="#">External Link1</a>
                </li>
                  <li><a href="#">External Link2</a>
                </li>
                  <li><a href="#">External Link3</a>
                </li>
            </ul>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>