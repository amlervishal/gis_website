<?php
    $email_sent = false;

    if(isset($_POST['email']) && $_POST['email'] != ''){
       
        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
            // sumbit the form

            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userMobile = $_POST['mobile'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];

            $to = "gemsk12school@gmail.com";
            $headers = 'From: contactus@gemsedu.in'. "\r\n";
            $emailSubject = "Partner With Us: ". $messageSubject;
            $body = "";


            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Mobile: ".$userMobile. "\r\n";
            $body .= "Subject: ".$messageSubject. "\r\n";
            $body .= "Message: ".$message. "\r\n";

            mail($to, $emailSubject, $body, $headers);
            
            $email_sent = true;
        }
        else{
            $invalid_class_name = "form-invalid";
        }
    }

?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GEMS International School</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
        <script>history.pushState({}, "", "")</script>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
         <!-- Navigation-->
         <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container-fluid">
                <a class="navbar-brand js-scroll-trigger" href="index.html"><img class="logo1" src="assets/img/gems-icon.png" alt="Gems-Logo"/>GEMS International School</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <img class="img-hamburger" src="assets/img/menu.svg" alt="menu"/>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">Home</a>
                </li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger">Why GEMS</a>
                                <!--new menu item drop down test-->
                                <div class="dropdown">
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="gems-learner-profile.html">Gems Learner Profile</a>
                                        <a class="dropdown-item" href="global-network.html">Global Network</a>
                                        <a class="dropdown-item" href="schools-for-good.html">Schools for Good</a>
                                    </div>
                                </div>  
                                    <!--new menu item drop down test-->
                        </li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger">About Us</a>
                            <!--new menu item drop down test-->
                            <div class="dropdown">
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="note-founder.html">Note from Founder</a>
                                    <a class="dropdown-item" href="note-principal.html">Note from Principal</a>
                                    <a class="dropdown-item" href="our-team.html">Our Team</a>
                                    <a class="dropdown-item" href="safety-security.html">Safety & Security</a>
                                    <a class="dropdown-item" href="career-at-gems.php">Careers at Gems</a>
                                    <a class="dropdown-item" href="contact-us.php">Contact Us</a>
                                </div>
                            </div>  
                        </li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" >For Parents</a>
                                <div class="dropdown">
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="parent-partnership.html">Parent Partnership</a>
                                    </div>
                                </div>  
                                    <!--new menu item drop down test-->    
                        </li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" >Learning</a>
                                <!--new menu item drop down test-->
                                <div class="dropdown">
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="curriculum.html">Curriculum</a>
                                        <a class="dropdown-item" href="early-childhood.html">Early Childhood</a>
                                        <a class="dropdown-item" href="primary-years.html">Primary Years</a>
                                        <a class="dropdown-item" href="middle-school.html">Middle School</a>
                                        <a class="dropdown-item" href="senior-school.html">Senior School</a>
                                        <a class="dropdown-item" href="beyond-books-and-boundaries.html">Beyond Books & Boundaries</a>
                                        <a class="dropdown-item" href="university-destination.html">University Destintions</a>
                                    </div>
                                </div>  
                                <!--new menu item drop down test-->    
                        </li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="admissionform.php"><button type="button" class="btn-2 btn-primary">Admissions</button></a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="page-head-partner">
            <div class="container d-flex h-50 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase text-white"> <span class="img-gemslogo1"><img class="img-gemslogo1" src="assets/cover-img/GEMS-logo.png" alt=""></span> </h1>
                    <h2 class="text-white mx-auto mt-4">Be a GEMS EDUCATION INDIA verified school</h2>
                </div>
            </div>
        </header>

        <!-- FORM -->
        <section class="typical-section">

            <div class="container text-center">
                <h4>Partnership Models For India Region</h4>
                <hr>
                <p>Worlds largest operator of K12 schools in revenue</p>
            </div>

            <div class="container-flx">
                <p class="icon-01 "> 190 Schools</p>
                <p class="icon-01"> 1,70,000+ students</p>
                <p class="icon-01"> 176 Nationalities </p>
                <p class="icon-01"> 10 Countries</p>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 px-3">
                    <div class="container-flx2 mx-3">
                        <img class="partner-img" src="assets/cover-img/partner-1.png" alt="">
                        <img class="partner-img" src="assets/cover-img/partner-2.png" alt="">
                        <img class="partner-img" src="assets/cover-img/partner-3.png" alt="">
                    </div>

                </div>

                <div class="col-md-6 px-3">
                    <div class="container-flx3 mx-3">
                        <div>
                            <h4 class="text-center">PARTNER WITH US</h4>
                            <p class="text-center">Have a question. Ask us. Our team will get back to you.</p>
                        </div>
                       
                        <div class="admission-form d-flex justify-content-center">
                        <form action="partner.php" method="POST" class="form">
                            <div class="form-group">
                                <label for="name" class="form-label text-blue">Your Name </label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
                            </div>
        
                            <div class="form-group">
                                <label for="email" class="form-label text-blue" <?= $invalid_class_name ?? "" ?>">Your Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
                            </div>
        
                            <div class="form-group">
                                <label for="mobile" class="form-label text-blue">Contact Number</label>
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" tabindex="3" required>
                            </div>
        
                           
        
                            <div class="form-group">
                                <label for="inlineFormCustomSelect" class="form-label text-blue">Subject</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                                        <option selected>Choose...</option>
                                        <option value="1">Franchise</option>
                                        <option value="2">School Operations Takeover</option>
                                        <option value="3">School Real Estate</option>
                                </select>
                                
                            </div>
        
                            <div class="form-group">
                                <label for="message" class="form-label text-blue">Message</label>
                                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="5"></textarea>
                            </div>
        
                            <div class="text-center my-2">
                                <button type="submit" class="btn icon-01 px-5">Send Message!</button>
                            </div>
                            <?php
                                if($email_sent):
                            ?>
                                <h5 class="text-center">Thank you, We will be in touch soon</h5>
                            <?php
                                endif;
                            ?>
                       </div>
        
                        </form>
                    </div>

                </div>
                
            </div>

        </section>


        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Gems Education & Saeloun 2020</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>