<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Laura Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Laura
  * Template URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#skills">Skills</a></li>
        <li><a class="nav-link scrollto" href="#educational">Educational</a></li>
        {{-- <li><a class="nav-link scrollto " href="#experience">Experience</a></li> --}}
        <li><a class="nav-link scrollto" href="#experiences"> Experience</a></li>
        <li><a class="nav-link scrollto " href="#webinar">Webinar</a></li>
        <li><a class="nav-link scrollto " href="#blog">Blog</a></li>
        
        {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a> --}}
          
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        <li><a class="nav-link scrollto" href="{{ route('login') }}">Log In</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Rosemarie Faller</h1>
      <h2>Graphic Designer, Web Developer</h2>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <span>About Me</span>
          <h2>About Me</h2>
          <p>Here are my information:</p>
        </div>

        <div class="row">
          {{-- <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div> --}}
          {{-- <div class="col-lg-8 d-flex flex-column align-items-stretch"> --}}
            <div class="content ps-lg-4 d-flex flex-column justify-content-center">
              <div class="row">
                @foreach($about as $abouts)
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>{{$abouts->name}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>{{$abouts->address}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$abouts->age}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Phone Number:</strong> <span>{{$abouts->phone_number}}</span></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$abouts->email}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Gender:</strong> <span>{{$abouts->gender}}</span></li>
                  </ul>
                </div>
              </div>
              @endforeach
              
           
            {{-- Skills --}}
            
            <!-- ======= Skills Section ======= -->
            <section id="skills" class="skills">
              <div class="container">
                <div class="section-title">
                  <h2>Skills</h2>
                  <p>Here are my skills:</p>
                </div>
                <div class="row">
                  <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
                  <div class="col-lg-8 d-flex flex-column align-items-stretch">
                    <div class="content ps-lg-4 d-flex flex-column justify-content-center">
                      <div class="row">
                        @foreach($skills as $skill)
                        <div class="col-lg-6">
                          <div class="skills-content ps-lg-4">
                            <div class="progress">
                              <span class="skill">{{$skill->skill_name}} <i class="value">{{$skill->percentage}}</i></span>
                              <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" style="width: {{$skill->percentage}}" aria-valuenow="{{$skill->percentage}}" aria-valuemin="0" aria-valuemax="500"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            

     
    <!-- End About Me Section -->

    <!-- ======= My Educational Attainmaent Section ======= -->
    <section id="educational" class="educational">
      <div class="container">
          <div class="section-title">
              <span>Educational Attainment</span>
              <h2>Educational Attainment</h2>
              <p>Here is some information about my studies</p>
          </div>
          <div class="row">
              <div class="col-lg-6">
                  <h3 class="educational-title">SUMMARY</h3>
                  @foreach($educationals as $educational)
                  <div class="educational-item">
                      <h4>{{$educational->grade_level}}</h4>
                      <p><em>{{$educational->school_name}}</em></p>
                      <h5>{{$educational->school_year}}</h5>
                      <p>{{$educational->description}}</p>
                  </div>
                  @endforeach
              </div>
              <!-- End col-lg-6 -->
          </div>
          <!-- End row -->
      </div>
      <!-- End container -->
  </section>
  <!-- End My Resume Section -->

    <!-- ======= My Experience Section ======= -->
    <section id="experiences" class="experiences">
      <div class="container">
          <div class="section-title">
              <span>Experiences</span>
              <h2>Experiences</h2>
              {{-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> --}}
          </div>
          
          <div class="experience-container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px;">
              @foreach($experiences as $experience)
                  <div class="experience">
                      <div class="experience-title">{{$experience->title}}</div>
                      <div class="experience-year">{{$experience->year}}</div>
                      <div class="experience-details">{{$experience->details}}</div>
                      <img class="experience-image" src="{{ 'storage/'. $experience->image }}" alt="Experience Image" style="width: 50%; height: 50%;">
                  </div>
              @endforeach
          </div>
      </div>
  </section>
  
  
  
  
  

    </section><!-- End My Services Section -->

    

    <!-- ======= Webinar ======= -->
    <section id="webinar" class="webinar">
      <div class="container">
          <div class="section-title">
              <span>Webinar</span>
              <h2>Webinar</h2>
              {{-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> --}}
          </div>
  
          <div class="webinar-container" style="display: flex; flex-wrap: wrap;">
              @foreach($webinars as $webinar)
                  <div class="webinar-box" style="border: 1px solid #ccc; padding: 20px; margin-right: 20px; margin-bottom: 20px;">
                      <div class="webinar">
                          <div class="webinar-certificate">{{$webinar->certificate}}</div>
                          <div class="webinar-agenda">{{$webinar->agenda}}</div>
                          <div class="webinar-description">{{$webinar->description}}</div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </section>
  
  <!-- End Webinar -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">
          <div class="section-title">
              <span>Blog</span>
              <h2>Blog</h2>
              {{-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> --}}
          </div>
          <div class="blog-container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 10px;">
              @foreach($blogs->chunk(2) as $chunk)
              <div class="blog-row">
                  @foreach($chunk as $blog)
                  <div class="blog" style="border: 1px solid #ccc; padding: 10px;">
                      <div class="blog-title">{{$blog->title}}</div>
                      <img class="blog-image" src="{{'storage/'. $blog->image}}" alt="Blog Image" style="width: 100%; height: auto; max-height: 300px; object-fit: cover;">
                      <div class="blog-content">{{$blog->content}}</div>
                  </div>
                  @endforeach
              </div>
              @endforeach
          </div>
      </div>
  </section>
  
  
  
  </section>
  <!-- End Blog Section -->

    <!-- ======= Contact Me Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact Me</span>
          <h2>Contact Me</h2>
          {{-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> --}}
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-share-alt"></i>
                  <h3>Social Profiles</h3>
                  <div class="social-links">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/rosemarie.faller.52" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                    <a href="https://www.linkedin.com/in/rosemarie-faller-96b35a259/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Me</h3>
                  <p>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Me</h3>
                  <p>+1 5589 55488 55</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Me Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Rosemarie Faller</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      {{-- <div class="copyright">
        &copy; Copyright <strong><span>Laura</span></strong>. All Rights Reserved
      </div> --}}
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/ -->
         <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>