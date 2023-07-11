<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from bithumbverify.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Jun 2023 07:02:16 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="{{ URL('assets/home/fav.png') }}" type="image/gif" sizes="16x16">
    <title>Bithumb Official Verification Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Verification Center" name="description" />
    <meta content="Verification, Bithumb" name="keywords" />
    <meta content="Bithumb" name="author" />
    <meta name="robots" content="noindex">

    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Bithumb" />
    <meta property="og:title" content="Official Verification Center" />
    <meta property="og:url" content="index-2.html" />
    <meta property="og:type" content="website" />
    <meta property="og:description"content="Official Verification Center" />
    <meta property="og:image" content="assets/home/fav.png" />
    <meta property="og:image:url" content="assets/home/fav.png" />
    <meta property="og:image:secure_url" content="assets/home/fav.png" />

    <!-- <![if lt IE 9]> -->
    <!-- <script src="js/html5shiv.js"></script> -->
    <!-- <![endif] -->

    <!-- CSS Files
            ================================================== -->
    <link href="assets/home/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"> -->
    <link href="assets/home/css/jpreloader.css" rel="stylesheet" type="text/css">
    <link href="assets/home/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="assets/home/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="assets/home/css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="assets/home/css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="assets/home/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="assets/home/css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link href="assets/home/css/style.css" rel="stylesheet" type="text/css" />

    <!-- color scheme -->
    <link id="colors" href="assets/home/css/colors/scheme-01.css" rel="stylesheet" />
    <link href="assets/home/css/coloring.css" rel="stylesheet" />

    <!-- CSS Files for current page only
            ================================================== -->
    <link href="assets/home/css/let-it-snow.css" rel="stylesheet" />
    <style>
        /* *{
                background-color: black;
              } */
        .dropdown-item img {
            /*width: 20px;*/
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div id="wrapper">

        <!--  <div id="btn-exit">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                </div> -->

        <div class="transition"></div>

        <!-- header begin -->
        <header class="transparent">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between">
                            <div class="align-self-center header-col-left">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="index-2.html">
                                        <img src="assets/home/logo2.png" alt="">
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>

                            <div class="align-self-center ml-auto header-col-right">
                                <!-- <div class="social-icons sc-plain">
                                            <a href="index-snow.html#"><i class="fa fa-facebook fa-lg"></i></a>
                                            <a href="index-snow.html#"><i class="fa fa-twitter fa-lg"></i></a>
                                            <a href="index-snow.html#"><i class="fa fa-linkedin fa-lg"></i></a>
                                            <a href="index-snow.html#"><i class="fa fa-instagram fa-lg"></i></a>
                                        </div> -->

                                <!-- <span id="menu-btn"></span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>



            <section id="section-main" class="vertical-center text-light let-it-snow"
                data-bgimage="url(assets/home/images/background/1.jpg) top">



                <div class="container" style="font-family: Lucida Console, Courier New, monospace;">
                    <div class="row wow fadeIn" data-wow-delay=".3s">
                        <div class="col-lg-10 offset-lg-1 text-center">
                            <!-- <img src="https://bithumbverify.com/assets/home/logo2.png" alt=""><br /> -->
                            <h2><i>BITHUMB <span class="id-color">OFFICIAL</span> VERIFICATION</span> <span
                                        class="id-color">CENTER</span></i></h2>
                        </div>
                        <div class="col-lg-6 offset-lg-3 text-center" style="color: #fff;">
                            <p style="font-size: 16px; color: #fff">To protect yourself against scammers pretending to
                                be Bithumb, kindly check to see if a website link, telegram handle, linkedin link, email
                                comes from an official Bithumb channel by using Bithumb Verify. Please do not contact
                                any unofficial/non-verified sources or reveal your account details to them.
                                <br /><br />Simply enter the information you would like to verify into the search field
                                below, then click the Check button
                                
                                  {{-- {{ $info }} --}}
                                
                            </p>
                            <div class="spacer-10"></div>

                            <form class="row g-2" action="{{ route('home.post') }}" method="POST">
                              @method('POST')
                              @csrf
                                <div class="col-md-3">
                                  <select name="type" id="type" class="form-select" required>
                                      <option value="">Select</option>
                                      <option value="website">Website</option>
                                      <option value="telegram">Telegram</option>
                                      <option value="email">Email</option>
                                      <option value="twitter">Twitter</option>
                                      <option value="discord">Discord</option>
                                      <option value="linkedin">Linkedin</option>
                                  </select>
                                </div>


                                <!-- <div class="col-md-3">
                                      <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                          Select
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <li><a class="dropdown-item" href="#"><img src="image1.jpg" alt="Image 1">Option 1</a></li>
                                          <li><a class="dropdown-item" href="#"><img src="image2.jpg" alt="Image 2">Option 2</a></li>
                                          <li><a class="dropdown-item" href="#"><img src="image3.jpg" alt="Image 3">Option 3</a></li>
                                        </ul>
                                      </div>
                                    </div> -->

                                <div class="col-md-7">
                                    <input 
                                      id="value"
                                      type="text" 
                                      name="value" 
                                      required
                                      placeholder="Enter information to be Verified" class="form-control">
                                </div>

                                <div class="col-md-2">
                                    <button 
                                      id="verify"
                                      type="submit" 
                                      data-url="{{ route('home.post') }}"
                                      class="btn btn-primary btn-md"
                                      style="background-color: #fd8200;"
                                      >
                                        Check
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->

    </div>
  


    <!-- Javascript Files
            ================================================== -->
    <script src="assets/home/js/jquery.min.js"></script>
    <script src="assets/home/js/jpreLoader.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="assets/home/js/bootstrap.min.js"></script>
    <script src="assets/home/js/wow.min.js"></script>
    <script src="assets/home/js/jquery.isotope.min.js"></script>
    <script src="assets/home/js/easing.js"></script>
    <script src="assets/home/js/owl.carousel.js"></script>
    <script src="assets/home/js/validation.js"></script>
    <script src="assets/home/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/home/js/enquire.min.js"></script>
    <script src="assets/home/js/jquery.stellar.min.js"></script>
    <script src="assets/home/js/jquery.plugin.js"></script>
    <script src="assets/home/js/jquery.countdown.js"></script>
    <script src="assets/home/js/typed.js"></script>
    <script src="assets/home/js/typed-custom.js"></script>
    <script src="assets/home/js/designesia.js"></script>

    <!-- Javascript Files for current page only
            ================================================== -->
    <script src="assets/home/js/let-it-snow.min.js"></script>
    <script>
        $.letItSnow('.let-it-snow', {
            stickyFlakes: 'lis-flake--js',
            makeFlakes: true,
            sticky: true
        });
    </script>

    <!-- Countdown
            ================================================== -->
    <script>
        jQuery(document).ready(function() {
            $(function() {
                $('#defaultCountdown').countdown({
                    until: new Date(2023, 12, 10, 8)
                }); // year, month (value-1), date, hour
            });
        });
    </script>
</body>

<!-- Mirrored from bithumbverify.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Jun 2023 07:02:28 GMT -->

</html>
