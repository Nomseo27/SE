<html>
<head>
  <meta charset= "utf-8">
  <link rel="stylesheet" href="./css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="./css/materialize.css"/>
     <link type="text/css" rel="stylesheet" href="./css/style.css"/>

<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="./js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="./js/materialize.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
<nav class='green darken-4 navbar-fixed' style="" style="width:100%">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li> <a class="modal-trigger waves-effect waves-light btn right" href="#modal1">Login</a> </li>
        <li> <a class="waves-effect waves-light btn right"  href="registration.php">Register </a> </li>
      </ul>

      <ul class="side-nav" id="mobile-demo">
        <li> <a class="modal-trigger" href="#modal1">Login    </a></li>
        <li> <a href="registration.php">             Register   </a></li>
      </ul>
    </div>
  </nav>
 
  <div class="row">
      <!-- Modal Structure -->

</div> 
  <div id="modal1" class="modal modal-fixed-footer"  style="width: 500px;">
    <div class="modal-content">
      <h4 class="green-text text-darken-2">LOGIN</h4>
          <form class="col s12 center">
            <br />
            <br />
              <div class="input-field center" id="usernaming">
              <i class="material-icons prefix">account_circle</i>
              <input id="username" type="text" class="validate">
              <label for="username">Username</label>
              </div>
              <div class="input-field center" id="passwording">
              <i class="material-icons prefix">https</i>
              <input id="password" type="password" class="validate">
              <label for="username">Password</label>
              </div>

              <div id="submitButton">
                <button class="btn waves-effect waves-light green darken-3 center" type="submit" name="action">Submit
                 <i class="material-icons right"></i>
                </button>
              </div>
        </form>   
      </div>
    </div> <!--END OF LOGIN-->


<!--SLIDER-->
 <div class="slider">
    <ul class="slides">
      <li>
        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
  <!--   Icon Section   -->

      <div class="row">
        <div class="col s12 m4">
          <div class="card-panel teal">
          <div class="icon-block">
            <h2 class="center white-text"><i class="material-icons large">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>
      </div>
        <div class="col s12 m4">
         <div class="card-panel teal">
          <div class="icon-block">
            <h2 class="center white-text"><i class="material-icons large">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>
       </div>

        <div class="col s12 m4">
         <div class="card-panel teal">
          <div class="icon-block">
            <h2 class="center white-text"><i class="material-icons large">settings</i></h2>
            <h5 class="center">Easy to work with</h5>
            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="grey lighten-2 z-depth-5"> 
  <div class="container ">
<div>
    <h1 class="left-align  light-green-text text-darken-4">Events</h1>
</div> 
   <div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="images/5.jpg" width="35%">
              <span class="card-title light-green darken-2">Paramore Conference</span>
            </div>
            <div class="card-content">
              <p>Hayley was a keynote speaker yesterday at the first ever PTTOW! Music Conference at Grammy Week. 
                She had some awesome things to say about how fans shape the band’s decisions and why “at the heart of this, we are all people.
                 Not consumers. We are all fans.” We’re still waiting on more photos and video of her speech, but in the meantime,
                  click here to find out more about PTTOW!</p>
            </div>
            <div class="card-action">
              <a href="#">Click here for details</a>
            </div>
          </div>
        </div>


       <div class="col s4">
        <div class="card small hoverable">
         <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/4.jpg">
         </div>
         <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Rape Suspect<i class="material-icons right">more_vert</i></span>
          <p><a href="#">This is a link</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Donate Now!<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
      </div>

           <div class="col s4">
        <div class="card small hoverable">
         <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/2.jpg">
         </div>
         <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Drug Syndicate<i class="material-icons right">more_vert</i></span>
          <p><a href="#">This is a link</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Contact if found!<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
      </div>

      <div class="col s4">
        <div class="card small hoverable">
         <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/3.jpg">
         </div>
         <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Nawawalang Bata<i class="material-icons right">more_vert</i></span>
          <p><a href="#">This is a link</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Contact Parents<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
      </div>
      </div><!--row ends here-->
</div> <!--container ends here-->



  <div class=" light-green lighten-2 z-depth-5"> 
  <div class="container ">
    <div>
    <h1 class="left-align  light-green-text text-darken-4">Hotels</h1>
</div> 
  <div class="row">
  <div class="col s4">
        <div class="card small hoverable">
         <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/h1.jpg">
         </div>
      
  <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Shangri-La Hotel<i class="material-icons right">more_vert</i></span>
          <p><a href="http://www.shangri-la.com/">Website</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">About Us<i class="material-icons right">close</i></span>
          <p>
            <b>Address</b> 1 Garden Way, Ortigas Centre, Mandaluyong City, 1650, Philippines<br />
            <b>Tel</b> (63 2) 633 8888<br />
            <b>Fax</b> (63 2) 631 1067<br />
            <b>Email</b> <a href="">Email This Hotel</a></p>
        </div>
      </div>
      </div>

        <div class="col s4">
        <div class="card small hoverable">
         <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/h2.jpg">
         </div>
         <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">New World Makati Hotel<i class="material-icons right">more_vert</i></span>
          <p><a href="http://manila.newworldhotels.com/en/">Website</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">About Us<i class="material-icons right">close</i></span>
          <p><b>HOTEL LOCATION</b> <br />

            NEW WORLD MAKATI HOTEL <br />

            Esperanza Street corner Makati Avenue, Ayala Center, Makati City 1228, Philippines<br />
            <b>Tel:</b> +63 2 811 6888<br /> <b>Fax:</b>   +63 2 811 6777</p>
        </div>
      </div>
      </div>

        <div class="col s4">
        <div class="card small hoverable">
         <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/h3.jpg">
         </div>
         <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Manila Hotel<i class="material-icons right">more_vert</i></span>
          <p><a href="http://www.manila-hotel.com.ph/">Website</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">About Us<i class="material-icons right">close</i></span>
          <p> ONE RIZAL PARK, 0913,

              MANILA, Philippines <br />

              <b>TELEPHONE:</b> 632 527 0011<br />

              <b>FAX:</b> 632 527 5348</p>
        </div>
      </div>
      </div>

  <div class="col s4">
        <div class="card small hoverable">
         <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/h4.jpg">
         </div>
         <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Pan Pacific Manila<i class="material-icons right">more_vert</i></span>
          <p><a href="www.panpacific.com">Website</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">About Us<i class="material-icons right">close</i></span>
          <p><b>Address</b> M. Adriatico corner<br />
              Gen. Malvar Streets,</br>
              Manila City 1004, Malate, Philippines <br />
              <b>Telephone: </b>+63 2 318 0788
              <br /><b>Toll-Free</b> 1800 8908 6362
              / 1800 1441 0621
              <br /><b>Email</b> enquiry.ppmnl@panpacific.com</p>
        </div>
      </div>
      </div>

      <div class="col s4">
        <div class="card small hoverable">
         <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/h5.jpg">
         </div>
         <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">New Horizon Hotel<i class="material-icons right">more_vert</i></span>
          <p><a href="http://www.newhorizonhotel-manila.com/">Website</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">About Us<i class="material-icons right">close</i></span>
          <p>New Horizon Hotel - Manila<br />
            778 Boni Ave., Mandaluyong City<br />
            Metro Manila, Philippines<br />

            <b>Phone Number:</b> 532.3021<br />
            <b>E-mail:</b> newhorizonhotel@gmail.com</p>
        </div>
      </div>
      </div>

      <div class="col s4">
        <div class="card small hoverable">
         <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="images/h6.jpg">
         </div>
         <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Raffles Makati<i class="material-icons right">more_vert</i></span>
          <p><a href="http://www.raffles.com/makati/">Website</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Contact Parents<i class="material-icons right">close</i></span>
          <p><b>Address:</b> 1 Raffles Drive, Makati Avenue, Makati, 1224
           <br /><b> Phone:</b>(02) 555 9777</p>
        </div>
      </div>
      </div><!--row ends here-->

      

</div> <!--container ends here-->
</div>




<!--FOOTER ENDS HERE-->
 <footer class="page-footer green darken-4">
          <div class="container" style="width:80%">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>






<!---->
 <script>
      $(document).ready(function(){
          // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      $('.modal-trigger').leanModal();
      $(".button-collapse").sideNav();
      $('.slider').slider({full_width: true});

        });
                
      </script>
</body>
</html>