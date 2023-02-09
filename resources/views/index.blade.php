<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href=
    "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.slim.js">
        </script>
        <script src=
    "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js">
        </script>

    <link rel="stylesheet" href="css/boxicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" /> --}}


    <title>Alexis</title>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- ================================ NAV BAR STARTING ================================= -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
        <div class="container">
          <a class="navbar-brand logo-text" href="#">A L E X I S </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#service">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonials">Testimonials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
        <!-- ================================ NAV BAR ENDING ================================= -->






          <!-- ================================ HOME SECTION ================================= -->


        <section id="home">

            <div class="container text-center">
                @if ($errors->any())
                <div class="alert alert-danger
                alert-dismissible fade show mx-5 mt-4
                border border-success" role="alert">
                <strong>Error!</strong> All fields are required for the form.
                <button type="button" class="close"
                    data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                </button>
                  </div>

                {{-- <div class="alert alert-danger alert-dismissible " role="alert">
                    <strong>Error!</strong> All fields are required for the form.
                     <button type="button" class="alert alert-danger btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div> --}}


            @endif

        @if(Session::has('success'))
                <div class="alert alert-success
                alert-dismissible fade show mx-5 mt-4
                border border-success" role="alert">
                <b>{{ session()->get('success')}}</b>

                <button type="button" class="close"
                    data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                </button>
                  </div>

            {{-- <div class="alert alert-success alert-dismissible">
                {{ session()->get('success')}}
                <button type="button" class="m1-2 mb-1 close" data-dismiss="alert" aria-Label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> --}}
        @endif
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 class="text-white display-4">WE ARE CREATIVE AGENCY, CREATIVE PEOPLE</h1>
                         <p class="text-white">It is a long established fact that  the world is moving towards the era of internet. This agency are group of  IT professionals who does the job and are patient enough to help there client in times of difficulty.
                            Contact us now and taste from the finest software enginneers in the world.
                            </p>
                            <a href="#contact" class="btn btn-brand">Contact</a>
                    </div>
                </div>
            </div>


        </section>

         <!-- ================================ END HOME SECTION ================================= -->




          <!-- ================================ SERVICE SECTION ================================= -->
        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-12 section-intro">
                        <h1>Our Services</h1>
                        <div class="hline"></div>

                    </div>
                </div>




                    <div class="row">

                      <div class="col-lg-4 col-sm-6 p-4">
                          <div class="icon-box">
                              <i class="bx bxs-landscape"></i>
                          </div>
                          <h4 class="title-sm mt-4">Graphic Designing</h4>
                          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                          </p>
                    </div>


                    <div class="col-lg-4 col-sm-6 p-4">
                        <div class="icon-box">
                            <i class="bx bxs-coffee"></i>
                        </div>
                        <h4 class="title-sm mt-4">Programming </h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        </p>
                    </div>




                    <div class="col-lg-4 col-sm-6 p-4">
                      <div class="icon-box">
                          <i class="bx bxs-image"></i>
                      </div>
                      <h4 class="title-sm mt-4">Photography</h4>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      </p>
                  </div>



                  <div class="col-lg-4 col-sm-6 p-4">
                    <div class="icon-box">
                        <i class="bx bxs-check-shield"></i>
                    </div>
                    <h4 class="title-sm mt-4">Hacking</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                 </div>



                  <div class="col-lg-4 col-sm-6 p-4">
                      <div class="icon-box">
                          <i class="bx bx-laptop"></i>
                      </div>
                      <h4 class="title-sm mt-4">Web Designing</h4>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      </p>
                  </div>


                  <div class="col-lg-4 col-sm-6 p-4">
                    <div class="icon-box">
                        <i class="bx bxs-happy-heart-eyes"></i>
                    </div>
                    <h4 class="title-sm mt-4">UI/UX Design</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                   </div>




                </div>
            </div>


        </section>

        <!-- ================================  END SERVICE SECTION ================================= -->




        <!-- ================================ PORTFOLIO SECTION ================================= -->
         <section id="portfolio" class="row g-0">
            <div class="row">
                    <div class="col-12 section-intro">
                        <h1>Our Projects</h1>
                        <div class="hline"></div>

                    </div>
                </div>

                 <div class="col-lg-4 col-sm-6">
                   <div class="portfolio-item">
                       <img src="img/grading.png" alt=""
                        style="height: 300px; width:520px; object-fit:;"
                       >
                       <div class="portfolio-overlay">
                         <div>
                         <h3>Teacher Grading System</h3>
                         <h6>Grading system for a school</h6>
                        </div>
                       </div>
                   </div>
                 </div>



                 <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <img src="img/app.png" alt=""
                        style="height: 300px; width:520px; object-fit:cover;"
                        >
                        <div class="portfolio-overlay">
                          <div>
                          <h3>App Development</h3>
                          <h6>E-commerce App Project</h6>
                         </div>
                        </div>
                    </div>
                  </div>




                <div class="col-lg-4 col-sm-6">
                  <div class="portfolio-item">
                      <img src="img/road_service.png" alt=""
                      style="height: 300px; width:520px; object-fit:cover;"
                      >
                      <div class="portfolio-overlay">
                        <div>
                        <h3>On Road Service</h3>
                        <h6>On Road Service System</h6>
                       </div>
                      </div>
                  </div>
                </div>





                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <img src="img/blog2.jpg" alt="">
                        <div class="portfolio-overlay">
                          <div>
                          <h3>Photography</h3>
                          <h6>A classic Photography </h6>
                         </div>
                        </div>
                    </div>
                  </div>





                <div class="col-lg-4 col-sm-6">
                  <div class="portfolio-item">
                      <img src="img/netflix.png" alt=""
                      style="height: 300px; width:520px; object-fit:cover;"
                      >
                      <div class="portfolio-overlay">
                        <div>
                        <h3>Netflix Project</h3>
                        <h6>Netflix Project with react</h6>
                       </div>
                      </div>
                  </div>
                </div>





                <div class="col-lg-4 col-sm-6">
                  <div class="portfolio-item">
                      <img src="img/hospital.png" alt=""
                      style="height: 300px; width:520px; object-fit:cover;"
                      >
                      <div class="portfolio-overlay">
                        <div>
                        <h3>Hospital System</h3>
                        <h6>Hospital Management booking system</h6>
                       </div>
                      </div>
                  </div>
                </div>

         </section>


          <!-- ================================ END PORTFOLIO SECTION ================================= -->



          <!-- ================================ FEATURES SECTION ================================= -->
          <section id="features">
            <div class="container">
                <div class="row">
                    <div class="col-12 section-intro">
                        <h1>Our Features</h1>
                        <div class="hline"></div>

                    </div>
                </div>

                <div class="row gy-4">


                            <div class="col-lg-4 col-sm-6 feature d-flex">
                              <div class="icon-box me-4">
                                <i class="bx bx-check"></i>
                              </div>
                              <div>
                                <h5 class="title-sm">
                                  Accessible
                                </h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ab odio saepe assumenda id.</p>
                              </div>
                            </div>


                            <div class="col-lg-4 col-sm-6 feature d-flex">
                              <div class="icon-box me-4">
                                <i class="bx bx-check"></i>
                              </div>
                              <div>
                                <h5 class="title-sm">
                                  Reliable
                                </h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ab odio saepe assumenda id.</p>
                              </div>
                            </div>




                            <div class="col-lg-4 col-sm-6 feature d-flex">
                              <div class="icon-box me-4">
                                <i class="bx bx-check"></i>
                              </div>
                              <div>
                                <h5 class="title-sm">
                                  Accuracy
                                </h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ab odio saepe assumenda id.</p>
                              </div>
                            </div>




                            <div class="col-lg-4 col-sm-6 feature d-flex">
                              <div class="icon-box me-4">
                                <i class="bx bx-check"></i>
                              </div>
                              <div>
                                <h5 class="title-sm">
                                  Available
                                </h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ab odio saepe assumenda id.</p>
                              </div>
                            </div>



                            <div class="col-lg-4 col-sm-6 feature d-flex">
                              <div class="icon-box me-4">
                                <i class="bx bx-check"></i>
                              </div>
                              <div>
                                <h5 class="title-sm">
                                  Dependable
                                </h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ab odio saepe assumenda id.</p>
                              </div>
                            </div>





                            <div class="col-lg-4 col-sm-6 feature d-flex">
                              <div class="icon-box me-4">
                                <i class="bx bx-check"></i>
                              </div>
                              <div>
                                <h5 class="title-sm">
                                  Supportive
                                </h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ab odio saepe assumenda id.</p>
                              </div>
                            </div>






              </div>





            </div>


        </section>


          <!-- ================================ END FEATURES SECTION ================================= -->




          <!-- ================================ FEATURES SECTION ================================= -->
          <section id="team">
            <div class="row g-0 py-0">
              <div class="col-lg-3 col-sm-6 team-member text-center">
                  <div class="team-member-img">
                    <img src="img/team1.jpg" alt="">
                    <div class="social-icons">
                      <a href="#" ><i class="bx bxl-facebook"></i></a>
                      <a href="#" ><i class="bx bxl-twitter"></i></a>
                      <a href="#" ><i class="bx bxl-instagram"></i></a>
                      <a href="#" ><i class="bx bxl-github"></i></a>
                    </div>
                  </div>
                  <div class="p-4">
                    <h5 class="title-sm mb-0 text-white">
                      Jude Benjamin
                    </h5>
                    <small class="text-white">Web Designer</small>
                    <div class="hline"></div>
                    <p class="text-white">Well skillful lorem Ipsum is not simply random text.It has roots in a piece of classical Latin literature from 45 BC</p>
                  </div>

              </div>








              <div class="col-lg-3 col-sm-6 team-member text-center even">
                <div class="team-member-img">
                  <img src="img/team2.jpg" alt="">
                  <div class="social-icons">
                    <a href="#" ><i class="bx bxl-facebook"></i></a>
                    <a href="#" ><i class="bx bxl-twitter"></i></a>
                    <a href="#" ><i class="bx bxl-instagram"></i></a>
                    <a href="#" ><i class="bx bxl-github"></i></a>
                  </div>
                </div>
                <div class="p-4">
                  <h5 class="title-sm mb-0 text-white">
                    Jude Benjamin
                  </h5>
                  <small class="text-white">Web Designer</small>
                  <div class="hline"></div>
                  <p class="text-white">Well skillful lorem Ipsum is not simply random text.It has roots in a piece of classical Latin literature from 45 BC</p>
                </div>

            </div>







            <div class="col-lg-3 col-sm-6 team-member text-center">
              <div class="team-member-img">
                <img src="img/team3.jpg" alt="">
                <div class="social-icons">
                  <a href="#" ><i class="bx bxl-facebook"></i></a>
                  <a href="#" ><i class="bx bxl-twitter"></i></a>
                  <a href="#" ><i class="bx bxl-instagram"></i></a>
                  <a href="#" ><i class="bx bxl-github"></i></a>
                </div>
              </div>
              <div class="p-4">
                <h5 class="title-sm mb-0 text-white">
                  Jude Benjamin
                </h5>
                <small class="text-white">Web Designer</small>
                <div class="hline"></div>
                <p class="text-white">Well skillful lorem Ipsum is not simply random text.It has roots in a piece of classical Latin literature from 45 BC</p>
              </div>

          </div>










          <div class="col-lg-3 col-sm-6 team-member text-center even">
            <div class="team-member-img">
              <img src="img/team4.jpg" alt="">
              <div class="social-icons">
                <a href="#" ><i class="bx bxl-facebook"></i></a>
                <a href="#" ><i class="bx bxl-twitter"></i></a>
                <a href="#" ><i class="bx bxl-instagram"></i></a>
                <a href="#" ><i class="bx bxl-github"></i></a>
              </div>
            </div>
            <div class="p-4">
              <h5 class="title-sm mb-0 text-white">
                Jude Benjamin
              </h5>
              <small class="text-white">Web Designer</small>
              <div class="hline"></div>
              <p class="text-white">Well skillful lorem Ipsum is not simply random text.It has roots in a piece of classical Latin literature from 45 BC</p>
            </div>

        </div>
            </div>
          </section>

<!-- ================================ END FEATURES SECTION ================================= -->



<!-- ================================ TESTIMONIES SECTION ================================= -->

   <section id="testimonials" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <ul class="nav nav-pills justify-content-center mb-3 " id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                <img src="img/team1.jpg" alt="">
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                <img src="img/team2.jpg" alt="">
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                <img src="img/team4.jpg" alt="">
              </button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="review">
                <div class="star">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, dolore nemo. Inventore voluptas eaque harum.</p>
                <h5 class="title-sm mb-0">Chidi Onedibe</h5>
                <small>Web Developer</small>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="review">
                <div class="star">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, dolore nemo. Inventore voluptas eaque harum.</p>
                <h5 class="title-sm mb-0">Chidi Onedibe</h5>
                <small>Web Developer</small>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              <div class="review">
                <div class="star">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, dolore nemo. Inventore voluptas eaque harum.</p>
                <h5 class="title-sm mb-0">Chidi Onedibe</h5>
                <small>Web Developer</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </section>




<!-- ================================ END TESTIMONIES SECTION ================================= -->



<!-- ================================ CLIENTS SECTION ================================= -->


<section id="clients" class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-3 col-6">
        <img src="img/pro1.jpg" alt="">
      </div>


      <div class="col-lg-2 col-md-3 col-6">
        <img src="img/pro2.jpg" alt="">
      </div>



      <div class="col-lg-2 col-md-3 col-6">
        <img src="img/pro3.jpg" alt="">
      </div>



      <div class="col-lg-2 col-md-3 col-6">
        <img src="img/pro4.jpg" alt="">
      </div>



      <div class="col-lg-2 col-md-3 col-6">
        <img src="img/pro5.jpg" alt="">
      </div>


      <div class="col-lg-2 col-md-3 col-6">
        <img src="img/pro6.jpg" alt="">
      </div>
    </div>
  </div>
</section>


<!-- ================================ END CLIENTS SECTION ================================= -->




<!-- ================================ CONTACT SECTION ================================= -->
<section id="contact">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4">
        <img src="img/pro6.jpg" alt="">
      </div>

      <div class="col-lg-6 offset-lg-1">


        <!-- Way 1: Display All Error Messages -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/send" method="POST">
            @csrf
          <div class="mb-3">
            <small>Name:</small>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          </div>

          <div class="mb-3">
            <small>Email:</small>
            <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          </div>

          <div class="mb-3">
            <small>Phone-number:</small>
            <input type="number" name='phone' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          </div>

          <div class="mb-3">
            <small>Additional Information (Optional): </small>
          <textarea name="description" id="" cols="30" rows="4" class="form-control"></textarea>
          </div>

          <button type="submit" class="btn btn-brand">Submit</button>
        </form>
      </div>
    </div>
  </div>

</section>

<!-- ================================ END CONTACT SECTION ================================= -->




<!-- ================================ FOOTER SECTION ================================= -->

<section id="cta" class="py-5">
  <div class="container py-4">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h3 class="text-white">Let's build something great</h3>
      </div>
      <div class="col-auto">
        <a href="#" class="btn btn-light">Get Started</a>
      </div>
    </div>
  </div>
</section>




<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row gy-5">
        <div class="col-md-4">
          <h4 class="logo-text ">
            A L E X I A
          </h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet doloremque sapiente odit incidunt magnam voluptas quas exercitationem et suscipit alias!</p>
          <div class="social-icons">
            <a href="#" ><i class="bx bxl-facebook"></i></a>
            <a href="#" ><i class="bx bxl-twitter"></i></a>
            <a href="#" ><i class="bx bxl-instagram"></i></a>
            <a href="#" ><i class="bx bxl-github"></i></a>
          </div>
        </div>

        <div class="col-md-2">
          <h5 class="title-sm">Navigation</h5>
          <div class="footer-links">
            <a href="#" >Service</a>
            <a href="#">Our Work</a>
            <a href="#">Our Team</a>
            <a href="#">Blog</a>

          </div>
        </div>

        <div class="col-md-2">
          <h5 class="title-sm">More</h5>
          <div class="footer-links">
            <a href="#" >FAQ's</a>
            <a href="#">Privacy & Policy</a>
            <a href="#">Licenses</a>


          </div>
        </div>

        <div class="col-md-2">
          <h5 class="title-sm">Contact</h5>
          <div class="footer-links">
            <p class="mb">Dansoman, close to Wiseley Grammar's Accra Ghana</p>
            <p class="mb">(+233) 50 613 8382</p>
            <p class="mb">alexanderemmanuel1719@gmail.com</p>
            <a href="#">Blog</a>

          </div>
        </div>

      </div>
    </div>
  </div>



  <div class="footer-bottom">
    <div class="contianer">
      <div class="row justify-content-between gy-4">
        <div class="col-md-6">
          <p class="mb p-2">
            @copy A L E X I A 2022. All rights reserved.
          </p>
        </div>

        <div class="col-auto">
          <p class="mb-0 p-2">
            Created with 💖❤💕 by Alex
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>





<!-- ================================ END FOOTER SECTION ================================= -->
<!-- Optional Javascript: Choose one of the two -->

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
