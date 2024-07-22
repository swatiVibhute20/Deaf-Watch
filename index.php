 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deaf-Watch</title>
    <link rel="stylesheet" href="style.css">
    <link
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
    />
 </head>
 <body>
   <!-- THE STARTING NAVBAR      -->
    <header class="section-navbar">
        <div class="container">
            <div>
                <a href="index.html">
                    <!-- <img src="/img/Android Large - 7.png" alt="logo of website" width="80%" height="auto"> -->
                </a>

            </div>
            <nav class="navbar">
                <ul>
                        <?php
                        if(isset($_POST['user']))
                        {
                        ?>
                            <form action="image.php" method="post">
                                <input type="hidden" name="user" value = "<?php echo $_POST['user']; ?>">
                                <li class="nav-item"><a class="nav-link" onclick="link('form-home')">Home </a></li>
                            </form> 
                            <!-- <li class="nav-item"><a class="nav-link" href="profile.html"><b> <?php echo $user ?></b></a></li> -->
                        <?php
                        }
                        ?>
                   
                   <li class="nav-item"><a class="nav-link" href="about.html"> About </a></li>
                   <li class="nav-item"><a class="nav-link" href="features.html?"> Features</a></li>
                   <li class="nav-item"><a class="nav-link" href="contact-us.html"> Contact Us </a></li>
                   <?php 
                        if(isset($_POST['user']))
                        {
                            $user = $_POST['user'];
                        ?>
                            <li class="nav-item"><a class="nav-link" href="profile.html"><b> <?php echo $user ?></b></a></li>
                        <?php
                        }
                        else{
                        ?>
                            <li class="nav-item"><a class="nav-link" href="signIn.html"> SignUp</a></li>
                        <?php
                        }
                        ?>
                </ul>
            </nav>
        </div>
    </header>

    <!-- END OF NAVBAR     -->

    <!-- Start Hero section -->
    <main>
        <div class="section-hero">
            <div class="container grid grid-two--cols">
                <div class="section-hero--content">
                    <p class="hero-subheading">Learn with experince</p>
                    <h1 class="hero-heading">DEAF-WATCH: </h1>
                    <h2 class="hero-h2-heading">A Continuous Sound 
                        <br>Monitoring System</h2>
                    <p class="hero-para">
                        Welcome to Deaf-Watch, 
                        Your Solution for Continuous Sound Monitoring. 
                        With our state-of-the-art system, 
                        stay informed about your environment in real-time. 
                        From emergency alarms to subtle changes, we've got you covered.
                        Welcome to a safer, more aware tomorrow.                      
                    </p>

                    <div class="hero-btn">
                        <a href="services.html" class="btn btn-white">Learn With Us</a>
                    </div>
                </div>
            
                <div class="section-hero--image">
                    <figure>
                        <img  src="./img/cuate.png" alt="sticker" >
                    </figure>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1711820196">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </main>

    <!-- END HERO SECTION -->


    <!-- Start About SECTION  -->
    <section class="section-about">
        <div class="container">
            <h2 class="section-common-heading">
                About DEAF WATCH
            <h2/>
            <p class="section-common-subheading">Guiding your learning through research, design and 
                development excellence </p>
        </div>
        <div class="container grid grid-three--cols">
            <div class="about-div">
                <div class="icon">
                    <img src="./img/Marketing.png" alt="research team">
                </div>
                <h3 class="section-common-title">Research</h3>
                <p>
                    We start by learning envirnoment in which you live. We look at what's strange and 
                    common in envirnoment so that get information perfectly and to display image or text to 
                    you accordingly using ML model.
                </p>
            </div>


            <div class="about-div">
                <div class="icon">
                    <img src="./img/design.png" alt="design team">
                </div>
                <h3 class="section-common-title">Design</h3>
                <p>
                    We designed our website effectively in such way that it will recogninse real time sound event.
                    Unlike existing apps focusing on sound amplification or text-to-speech/speech-to-text, it is optimized 
                    for low latency, ensuring real-time functionality.
functionality
                </p>
            </div>


            <div class="about-div">
                <div class="icon">
                    <img src="./img/development.png" alt="Development team">
                </div>
                <h3 class="section-common-title">development</h3>
                <p>
                    We developed an AI model which will convert sound wave into proper image and text easily in few seconds,
                    it will also recogninse key sound events of interest to deaf community such as car horns & baby where immediate alerts are needed.

                </p>
            </div>
        </div>

        
    </section>

    <!-- END About SETCION -->




    <!-- Start the TextToIMG & IMGToText  -->

    <section class="section-explore">
        <div class="container">
            <h2 class="section-common-heading">
                Explore functionality :
            <h2/>
            <p class="section-common-subheading">
                Input the voice and get further alerts!!
               </p>
        </div>

        <div class="container grid grid-four--cols">
            <div class="explore-div">
                <div class="icon">
                    <form action="image.php" method="post" id="form-image">
                    <?php 
                        if(isset($_POST['user']))
                        {      
                        ?>
                             <input type="hidden" name="user" value = "<?php echo $user; ?>">                        <?php
                        }
                       ?>
                            <button type="submit" style="background-color:#e2edf3;border:0px;">
                                <i class="fa-regular fa-solid fa-file-lines"></i>
                                <h3 class="section-common-title">Image</h3>
                            </button>
                    </form>
                </div>
                <p>
                   It displays image as output for given voice Input.                   
                </p>
            </div>
            <div class="explore-div">
                <div class="icon">
                <form action="text.php" method="post" id="form-image">
                    <?php 
                        if(isset($_POST['user']))
                        {      
                        ?>
                             <input type="hidden" name="user" value = "<?php echo $user; ?>">                        <?php
                        }
                       ?>
                            <button type="submit" style="background-color:#e2edf3;border:0px;">
                                <i class="fa-regular fa-solid fa-file-lines"></i>
                                <h3 class="section-common-title">Text</h3>
                            </button>
                    </form>
                </div>
                <p>
                   It gives Text as output for given voice Input
                    
                </p>
            </div>
            <div class="explore-div">
                <div class="icon">
                    <a href="soundalerts.html?user=<?php echo $user ?>">
                        <i class="fa-regular fa-solid fa-triangle-exclamation"></i>
                        <h3 class="section-common-title">Sound Alerts</h3>
                    </a>
                </div>
                <p>
                    It gives emergency alrets about the input sound if it is of horn, baby crying ,etc.
                </p>
            </div>
            <div class="explore-div">
                <div class="icon">
                    <a href="combo.html?user=<?php echo $user ?>">
                        <i class="fa-regular fa-solid fa-object-group"></i>
                        <h3 class="section-common-title">Combo</h3>
                    </a>                        
                </div>
                <p>
                    It gives combination output of image, text, alerts!
                   
                </p>
            </div>
            <div class="explore-div">
                <div class="icon">
                    <a href="savedData.html?user=<?php echo $user ?>">
                    <i class="fa-regular fa-solid fa-bookmark"></i>
                    <h3 class="section-common-title">Saved Data</h3>
                </a>
                </div>
                <p>
                    This feature gives the data you haved saved from before in this website.                   
                </p>
            </div>
            <div class="explore-div">
                <div class="icon">
                    <a href="futureGoals.html">
                    <i class="fa-regular fa-solid fa-bullseye"></i>
                    <h3 class="section-common-title">Future Goals</h3>
                </a>
                </div>
                <p>
                    Extra features will get added in future.                   
                </p>
            </div>
            
            
        </div>
    </section>

    <!-- End the TextToIMG & IMGToText  -->


    <!-- Start the Why choose Deaf-Watch  -->

   
    <!-- Start the Why choose Deaf-Watch  -->

    <section class="section-why--choose">
        <div class="container">
            <h2 class="section-common-heading">
                Why Choose Deaf-Watch
            <h2/>
            <p class="section-common-subheading">
                Choose DEAF-WATCH for continuous sound monitoring
                with real-time alerts, advanced technology and enhanced safety.
            </p>
        </div>
        <div class="container grid grid-three--cols">
        
        <!-- ** left side content -->
            <div class=".choose-left--div text-align--right">
                <div class="why-choose--div">
                    <p class="common-text--highlight">1</p>
                    <h3 class="section-common--title">Continuous Monitoring</h3>

                    <p style="font-size: small;">It ensures constant surveillance of your environment,
                         stay informed about any changes in sound patterns.
                                                
                    </p>
                </div>
                <div class="why-choose--div">
                    <p class="common-text--highlight">2</p>
                    <h3 class="section-common--title">Comprehensive Support </h3>

                    <p style="font-size: small;"> Dedicated customer service and resources.
                                                
                    </p>
                </div>
                <div class="why-choose--div">
                    <p class="common-text--highlight">3</p>
                    <h3 class="section-common--title">Security and Privacy</h3>

                    <p style="font-size: small;">Robust measures to protect your data
                                                
                    </p>
                </div>
            </div>

        <!-- ** center part of image -->

        <div class="choose-center--div">
            <figure>
                 <img src="img/whychoose.png" alt="Home page image"> 
            </figure>
        </div>

        <!-- ** right side content -->
        <div class=".choose-right--div text-align--left">
            <div class="why-choose--div">
                <p class="common-text--highlight">4</p>
                <h3 class="section-common--title">Real-Time Alerts</h3>
                <p style="font-size: small;">Receive immediate notifications for any detected emergency 
                    alarms.
                </p>
            </div>
            <div class="why-choose--div">
                <p class="common-text--highlight">5</p>
                <h3 class="section-common--title">Innovative Technology</h3>

                <p style="font-size: small;">Cutting-edge solutions for enhanced accessibility.
                                            
                </p>
            </div>
            <div class="why-choose--div">
                <p class="common-text--highlight">6</p>
                <h3 class="section-common--title">User-Friendly Interface </h3>

                <p style="font-size: small;">Easy navigation for all users.
                                            
                </p>
            </div>
        </div>

        </div>

    </section>



    <!-- End the Why choose Deaf-Watch -->


  <!-- Start of  contact home section  -->

  <div class="section-contact--homepage" id="section-contact--homepage">
        <div class="container grid grid-two--cols">
            <div class="contact-content">
                <h2 class="contact-title">Let's Revolutionize the way you studied</h2>
                <p>Join our free Bootcamps to know us better</p>
                <div class="btn">
                    <a href="contact-us.html" target="_blank">
                        start now <i class="fa-regular fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="contact-image">
                <img src="img/amico.png" alt="guy with study">
            </div>
        </div>
    </div>
    
     <!-- End of  contact home section  -->

    <!-- Start of  Footer section  -->
    <footer class="container grid grid-four--cols">
        <div class="footer-1--div">
            <div class="logo-brand">
                <a href="index.html" class="footer-subheading">Deaf Watch</a>
            </div>
            <p>Let's Revolutionize the way you <br />study with Deaf Watch</p>
    
            <div class="social-footer--icons">
                <a href="https://www.youtube.com/" target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/mynetwork/" target="_blank">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
        </div>
    
        <div class="footer-2--div">
            <p class="footer-subheading">Quick Links</p>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="features.html">Features</a></li>
                <li><a href="about.html">About Us</a></li>
            </ul>
        </div>
    
        <div class="footer-3--div">
            <p class="footer-subheading">Support</p>
            <ul>
                <li><a href="contact-us.html">Contact Us</a></li>
                <li><a href="contact-us.html">Help</a></li>
                <li><a href="contact-us.html">FAQ</a></li>
            </ul>
        </div>
    
        <div class="footer-4--div">
            <p class="footer-subheading">Services</p>
            <ul>
                <li><a href="features.html">Text Recognition</a></li>
                <li><a href="features.html">Image Recognition</a></li>
                <li><a href="features.html">Alerts</a></li>
            </ul>
        </div>
    </footer>
    

         <!-- End of  Footer section  -->

</body>
 </html>