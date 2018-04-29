<header>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
<div class="container">
<a class="navbar-brand" href="#">Massagisto</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul id="navbar-example1" class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link active" href="#panel1">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#panel2">Types</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#panel3">Contact</a>
    </li>
  </ul>

  <ul class="navbar-nav mr-sm-2">
    <?php
        if (array_key_exists("user", $_SESSION)){
          $id = $_SESSION["user"];
          $result = $mysqli->query("SELECT first_name FROM users WHERE id= $id");
          $name = $result->fetch_assoc();
         ?>
         <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $name["first_name"]; ?><b class="caret"></b></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="changepassword.php">Change Password</a></li>
          </li>
            <li><a href="pages/logout.php">Logout</a></li>
          </ul>
          <?php
        } else {?>
    <li class="nav-item">
      <a class="nav-link" data-toggle="modal" data-target="#modalLoginForm" href="#">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Register</a>
    </li>
  </ul>
  <?php
    }
    ?>
</div>
</div>
</nav>




    <!--/.Navbar-->

    <!--Intro Section-->
    <section class="view intro-1 hm-black-strong">
<div class="full-bg-img flex-center">
<div class="container">
  <ul class="animated fadeInUp col-md-12">
    <li>
      <h1 class="h1-responsive flex-item font-bold">Today is a good day for a massage!</h1>

      <li>
        <a target="_blank" href="#" class="btn btn-warning btn-lg flex-item" rel="nofollow">Book appointment</a>
      </li>

    </ul>
  </div>
</div>
</section>


</header>

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-signin" method="post" action="pages/login.php" id="login-form">
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" placeholder="Email address" name="email" id="email" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" placeholder="Password" name="password" id="password" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-orange" name="btn-login" id="btn-login">Login</button>
            </div>
          </form>
        </div>
    </div>
</div>


<!-- Main container-->
<div class="container">
    <div class="divider-new pt-5">
        <h2 id="panel1" class="h2 text-center py-5" data-wow-delay="0.2s">About us</h2>
    </div>

    <!--Section: About-->
    <section id="about" class="text-center wow fadeIn" data-wow-delay="0.2s">

        <p>Massagisto is a young and modern company adapted to modern people’s needs and life.</p>
        <p>Brilliant service in a busy world we live in.</p>

    </section>

    <!--Section: About-->

    <div class="divider-new pt-5">
        <h2 id="panel2" class="h2 text-center py-5">Types of Massage</h2>
    </div>

    <!--Section: Best features-->
    <section id="types-of-massage">

        <div class="row pt-3">

            <!--First columnn-->
            <div class="col-lg-3 mb-r">

                <!--Card-->
                <div class="card wow fadeIn">

                    <!--Card image-->
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(25).jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title text-center">Classic</h4>
                        <hr>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--First columnn-->

            <!--Second columnn-->
            <div class="col-lg-3 mb-r">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.2s">

                    <!--Card image-->
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(14).jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title text-center">Acupressure</h4>
                        <hr>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--Second columnn-->

            <!--Third columnn-->
            <div class="col-lg-3 mb-r">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.4s">

                    <!--Card image-->
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(21).jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title text-center">Aromatic</h4>
                        <hr>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--Third columnn-->

            <!--First columnn-->
            <div class="col-lg-3 mb-r">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.6s">

                    <!--Card image-->
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(37).jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title text-center">Bandage</h4>
                        <hr>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--First columnn-->
        </div>

    </section>
    <!--/Section: Best features-->

    <div class="divider-new">
        <h2 id="panel3" class="h2 text-center py-5">Contact us</h2>
    </div>

    <!--Section: Contact-->
    <section id="contact pb-5">
        <div class="row">
            <!--First column-->
            <div class="col-md-8 mb-5">
                <div id="map-container" class="z-depth-1 wow fadeIn" style="height: 300px"></div>
            </div>
            <!--/First column-->

            <!--Second column-->
            <div class="col-md-4">
                <ul class="text-center list-unstyled">
                    <li class="wow fadeIn" data-wow-delay="0.2s"><i class="fa fa-map-marker teal-text fa-lg"></i>
                        <p>New York, NY 10012, USA</p>
                    </li>

                    <li class="wow fadeIn mt-5 pt-2" data-wow-delay="0.3s"><i class="fa fa-phone teal-text fa-lg"></i>
                        <p>+ 01 234 567 89</p>
                    </li>

                    <li class="wow fadeIn mt-5 pt-2" data-wow-delay="0.4s"><i class="fa fa-envelope teal-text fa-lg"></i>
                        <p>contact@mdbootstrap.com</p>
                    </li>
                </ul>
            </div>
            <!--/Second column-->
        </div>
    </section>
    <!--Section: Contact-->
  </div>


<!--Section: Team v.2-->
<section class="team-section pb-5">
        <div class="divider-new pt-5">
        <!--Section heading-->
        <h2 class="h2 text-center py-5">Our amazing team</h2>
        <!--Section description-->
      </div>
        <p class="grey-text pb-5 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
            esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

        <div class="row text-center">

            <!--Grid column-->
            <div class="col-md-4 mb-4">

                <div class="avatar mx-auto my-3" style="max-width: 150px;">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded img-fluid z-depth-1-half" alt="First sample avatar image">
                </div>
                <h4 class="font-weight-bold dark-grey-text">
                    <strong>Maria Kate</strong>
                </h4>
                <h6 class="grey-text">Photographer</h6>

                <!--Facebook-->
                <a type="button" class="btn-floating btn-sm mx-1  btn-fb ">
                    <i class="fa fa-facebook"></i>
                </a>
                <!--Dribbble-->
                <a type="button" class="btn-floating btn-sm mx-1  btn-dribbble ">
                    <i class="fa fa-dribbble"></i>
                </a>
                <!--Twitter-->
                <a type="button" class="btn-floating btn-sm mx-1  btn-tw ">
                    <i class="fa fa-twitter"></i>
                </a>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 mb-4">

                <div class="avatar mx-auto my-3" style="max-width: 150px;">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" class="rounded img-fluid z-depth-1-half" alt="Second sample avatar image">
                </div>
                <h4 class="font-weight-bold dark-grey-text">
                    <strong>John Doe</strong>
                </h4>
                <h6 class="grey-text">Front-end Developer</h6>

                <!--Email-->
                <a type="button" class="btn-floating btn-sm mx-1  btn-email ">
                    <i class="fa fa-envelope"></i>
                </a>
                <!--Facebook-->
                <a type="button" class="btn-floating btn-sm mx-1  btn-fb ">
                    <i class="fa fa-facebook"></i>
                </a>
                <!--GitHub-->
                <a type="button" class="btn-floating btn-sm mx-1  btn-git ">
                    <i class="fa fa-github"></i>
                </a>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 mb-4">

                <div class="avatar mx-auto my-3" style="max-width: 150px;">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" class="rounded img-fluid z-depth-1-half" alt="Third sample avatar image">
                </div>
                <h4 class="font-weight-bold dark-grey-text">
                    <strong>Sarah Melyah</strong>
                </h4>
                <h6 class="grey-text">Web Developer</h6>

                <!--Linkedin-->
                <a type="button" class="btn-floating btn-sm mx-1  btn-li">
                    <i class="fa fa-linkedin "></i>
                </a>
                <!--Twitter-->
                <a type="button" class="btn-floating btn-sm mx-1  btn-tw">
                    <i class="fa fa-twitter "></i>
                </a>
                <!--Pinterest-->
                <a type="button" class="btn-floating btn-sm mx-1  btn-pin">
                    <i class="fa fa-pinterest "></i>
                </a>

            </div>
            <!--Grid column-->
        </div>

    </section>
    <!--Section: Team v.2-->


</div>
<!--/ Main container-->
