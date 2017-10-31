
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KTU Notes Sharing</title>
  <meta name="description" content="Get free Class Notes for KTU Engineering Students">
  <meta name="keywords" content="ktu class notes, ktu notes , notes , kerala technological university, engineering notes ">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

  <div class="loader"></div>
  <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#">KTU <span class="logo-dec">Notes</span></a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#main-header">Home</a></li>
                  <li class=""><a href="#portfolio">Get Notes</a></li>
                  <li class=""><a href="#service">Upload Notes</a></li>
                  <li class=""><a href="#blog">Latest Notes</a></li>
                  <li class=""><a href="#contact">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="banner-info text-center wow fadeIn delay-05s">
                <h1 class="bnr-title">Get <span>KTU</span> notes</h1>
                <h2 class="bnr-sub-title">KTU Notes</h2>
                <p class="bnr-para">Description</p>
                <div class="brn-btn">
                  <a href="#portfolio" class="btn btn-download">Get Notes</a>
                  <a href="#service" class="btn btn-more">Upload Notes</a>
                </div>
                <div class="overlay-detail">
                  <a href="#feature"><i class="fa fa-angle-down"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ HEADER-->

        <!---->
        <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <h2 class="service-title pad-bt15">Get Notes</h2>
                <p class="sub-title pad-bt15">Select Semester</p>
                <hr class="bottom-line">
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                <figure href="notes/S1/">
                  <img src="img/port01.jpg" href="notes/S1/" class="img-responsive">
                  <figcaption>
                    <h2>Semester 1 Notes<br>
                    <a href="notes/S1/">Get Here</a></h2>
                  </figcaption>

                </figure>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                <figure>
                  <img src="img/port02.jpg" class="img-responsive">
                  <figcaption>
                    <h2>Semester 2 Notes<br>
                    <a href="notes/S2/">Get Here</a></h2>
                  </figcaption>
                </figure>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                <figure>
                  <img src="img/port03.jpg" class="img-responsive">
                  <figcaption>
                    <h2>Semester 3 Notes<br>
                    <a href="notes/S3/">Get Here</a></h2>
                  </figcaption>
                </figure>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                <figure>
                  <img src="img/port04.jpg" class="img-responsive">
                  <figcaption>
                    <h2>Semester 4 Notes<br>
                    <a href="notes/S4/">Get Here</a></h2>
                  </figcaption>
                </figure>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                <figure>
                  <img src="img/port05.jpg" class="img-responsive">
                  <figcaption>
                    <h2>Semester 5 Notes<br>
                    <a href="notes/S5/">Get Here</a></h2>
                  </figcaption>
                </figure>
              </div>

            </div>
          </div>
        </section>
        <!---->

    <!---->
    <section id="service" class="section-padding wow fadeInUp delay-05s">
      <form action="upload.php" method="post" name="upload" enctype="multipart/form-data">

      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Upload Notes</h2>
            <p class="sub-title pad-bt15">Upload Your Notes Here</p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3>Select<span>Sem</span></h3>
              <select class="form-control" name="semester">
                <option value="0">--select--</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                <option value="S4">S4</option>
                <option value="S5">S5</option>
              </select>
            </div>
          </div>
          <div class="col-md-5 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3>Selct<span>Branch</span></h3>
              <select class="form-control" name="branch">
                <option value="0">--select--</option>
                <option value="CSE">Computer Science</option>
                <option value="MECHANICAL">Mechanical</option>
                <option value="EEE">Electrical</option>
                <option value="EC">Electronics</option>
                <option value="CIVIL">Civil</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3>Upload<span>Note</span></h3>
                  <input type="file" name="fileToUpload" id="fileToUpload">
                  <input type="submit" class="btn btn-download" value="Upload Note" name="submit">
            </div>
          </div>

        </div>
      </div>
    </form>

    </section>
    <!---->
    <section id="blog" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Latest Notes</h2>
            <p class="sub-title pad-bt15">Description.</p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img src="img/blog01.jpg" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2>Note1.</h2>
                <div class="blog-comment">
                  <p>
                    <span><a href="#"><i class="fa fa-eye"></i></a> 11</span></p>
                </div>
                <p>topics</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img src="img/blog02.jpg" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2>Note2</h2>
                <div class="blog-comment">
                  <p>
                    <span><a href="#"><i class="fa fa-eye"></i></a> 11</span></p>
                </div>
                <p>Topics</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img src="img/blog03.jpg" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2>NOte3</h2>
                <div class="blog-comment">
                  <p>
                    <span><a href="#"><i class="fa fa-eye"></i></a> 11</span></p>
                </div>
                <p>topics</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <section id="contact" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center white">
            <h2 class="service-title pad-bt15">Keep in touch with us</h2>
            <p class="sub-title pad-bt15">Tell me what you feel about the website</p>
            <hr class="bottom-line white-bg">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="loction-info white">
              <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>MACE<br>Kothamangalam,Ernakulam</p>
              <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>abhinavtk97@gmail.com</p>
              <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+919400406889</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="col-md-6 padding-right-zero">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-submit">SEND NOW</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <footer id="footer">
      <div class="container">
        <div class="row text-center">
          <p>&copy; Abhi. All Rights Reserved.</p>
          <div class="credits">
            Designed by Abhi
          </div>
        </div>
      </div>
    </footer>
    <!---->
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>
</html>
