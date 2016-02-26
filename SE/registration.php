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
  <!--NAVBAR STARTS HERE-->
<nav class='grey darken-3  navbar-fixed'  style="width:100%">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li> <a class="modal-trigger waves-effect waves-light btn right" href="#modal1">Login</a> </li>
        <li> <a class="waves-effect waves-light btn right"               href="registration.php">Register </a> </li>
      </ul>

      <ul class="side-nav" id="mobile-demo">
        <li> <a class="modal-trigger" href="#modal1">Login      </a></li>
        <li> <a href="registration.php">             Register   </a></li>
      </ul>
    </div>
  </nav>
   <!--NAVBAR ENDS HERE-->

<div class="row">
<!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer"  style="width: 500px;">
    <div class="modal-content">
      <h4 class="green-text text-darken-2">LOGIN</h4>
          <form class="col s12 center">
            <br />
            <br />
              <div class="input-field center" id="usernaming"> <!--Username this-->
              <i class="material-icons prefix">account_circle</i>
              <input id="username" type="text" class="validate">
              <label for="username">Username</label>
              </div>
              <div class="input-field center" id="passwording">
              <i class="material-icons prefix">https</i>
              <input id="password" type="password" class="validate">
              <label for="username">Password</label>
              </div>


              <div id="submitButton">  <!--Submit Button para sa login-->
                <button class="btn waves-effect waves-light green darken-3 center" type="submit" name="action">Submit
                 <i class="material-icons right"></i>
                </button>
              </div>
        </form>   
      </div>
    </div> <!--END OF LOGIN-->




<!--REGISTRATION FORM-->
<div class='container center' style="width:50%;">
<form class="center">
<div class="row ">
<!--Username FIELD-->
     <div class="input-field col s25" >
              <i class="material-icons prefix">account_circle</i>
              <input id="password" type="text" class="validate">
              <label for="username">Username</label>
    </div>
<!--Password FIELD-->
     <div class="input-field col s25" >

              <i class="material-icons prefix">vpn_key</i>
              <input id="password" type="password" class="validate">
              <label for="username">Password</label>
     </div>
<!--FirstName FIELD-->
     <div class="input-field col s25" >

              <i class="material-icons prefix">perm_identity</i>
              <input id="firstname" type="text" class="validate">
              <label for="username">First Name</label>
     </div>
<!--MiddleName FIELD-->
     <div class="input-field col s25" >

              <i class="material-icons prefix">perm_identity</i>
              <input id="middlename" type="text" class="validate">
              <label for="username">Middle Name</label>
     </div>
<!--LastName FIELD-->
     <div class="input-field col s25" >

              <i class="material-icons prefix">perm_identity</i>
              <input id="lastname" type="text" class="validate">
              <label for="username">Last Name</label>
    </div>
<!--Email FIELD-->
     <div class="input-field col s25" >

              <i class="material-icons prefix">email</i>
              <input id="email" type="email" class="validate">
              <label for="username">Email</label>
    </div>

<!--Address FIELD-->    
     <div class="input-field col s25" >

              <i class="material-icons prefix">location_on</i>
              <input id="address" type="text" class="validate">
              <label for="username">Address</label>
    </div>

<!--Contact FIELD-->
     <div class="input-field col s25" >

              <i class="material-icons prefix">contact_phone</i>
              <input id="text" type="text" class="validate">
              <label for="username">Contact Number</label>
              <br />
              <br />
              <br />
      <input type="submit" class="btn waves-effect waves-light col s6 m6" />
     </div>
    <!--REGISTER BUTTON ENDS HERE-->
</div>
</form>
</div>
<!--END OF REGISTRATION FIELDSET-->













<!---->
 <script>
      $(document).ready(function(){
          // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
          $('.modal-trigger').leanModal();
    $(".button-collapse").sideNav();

        });
                
      </script>
</body>
</html>