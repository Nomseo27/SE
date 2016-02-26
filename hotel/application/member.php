<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="../../css/icon.css" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script type="text/javascript">
             function resizeIframe(id) {
                alert(here);
				var obj = document.getElementById(id);
				var obj.style.height = obj.contentWindow.document.body.clientHeight + "px"; 
			}
        </script>
    </head>
    <body class="fame" onload="resizeIframe('frame');">
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../../js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="../../js/materialize.min.js"></script>
        <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper teal">
                <a href="#!" class="brand-logo"><img src="../../images/hotellogoSmall.png" alt="" class="circle responsive-img" id="logimg" style="max-width: 80%"></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <div class="right hide-on-med-and-down valign-wrapper">
                    <!-- Dropdown Trigger -->
                  <a class='dropdown-button btn truncate center' href='#' data-activates='dropdown1' data-beloworigin="true" style="margin-right: 20px;top:0px;"><img src="../../images/login.jpg" alt="" class="circle responsive-img lext" style="max-width: 20px; margin-right: 20px;margin-top:5px;">User</a>

                  <!-- Dropdown Structure -->
                  <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">one</a></li>
                    <li><a href="#!">two</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">Logout</a></li>
                  </ul>
                    <a href="member.php"><img class="responsive-img" src="../../images/registerSmall.png" style="padding-bottom:0px;">
                        </a>
                    <a href="event.html"><img class="responsive-img" src="../../images/eventSmall.png"></a>
                    <a href="setting.html"><img class="responsive-img" src="../../images/settingsWSmall.png"></a>
                </div>
                <ul class="side-nav" id="mobile-demo">
                    <div class="row">

                            <div class="col s12" style="background: url(../../images/cover.png); height: 200px">
                                <div class="align"><img src="../../images/login.jpg" alt="" class="circle responsive-img" id="logimg" style="margin: 10px;">
                                </div>
                            </div>
                        </div>
                    <ul class="collapsible black-text" data-collapsible="accordion">
    <li>
        <div class="collapsible-header "><img class="responsive-img left" src="../../images/registerSmall.png"><span class="">Registration</span></div>
      <div class="collapsible-body"><a href="#" data-activates="guestR">Guest</a></div>
    </li>
    <li>
      <div class="collapsible-header "><img class="responsive-img left" src="../../images/eventSmall.png">Event</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header "><img class="responsive-img left" src="../../images/settingsTSmall.png">Settings</div>
      <div class="collapsible-body"><a href="#" data-activates="room">ADD ROOM</a></div>
      <div class="collapsible-body"><a href="#" data-activates="function">ADD FUNCTION ROOM</a></div>
      <div class="collapsible-body"><a href="#" data-activates="Amenities">ADD AMENITIES</a></div>
    </li>
                    </ul>
                    
                    
                </div>
        </nav>
        </div>
        
       <div class=' container' style="width:50%;">
    <form class="col s5 center" method="post" action="hotelregi.php">
      <div class="row s12">

        <div class="input-field col s4">
          <i class="material-icons prefix">account_circle</i>
          <input name="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>

        <div class="input-field col s4">
          <input name="middle_name"type="text" class="validate">
          <label for="middle_name">Middle Name</label>
   	    </div>


        <div class="input-field col s4">
          <input name="first_name"type="text" class="validate">
          <label for="first_name">First Name</label>
   	    </div>
      </div><!--END OF first row-->

      <div class="row s12"><!--SECOND ROW STARTS HERE-->


        <div class="input-field col s6">
          <i class="material-icons prefix">perm_contact_calendar</i>
          <input name="join_date" type="date" class="datepicker ">
          <label for="join_date">Date Joined</label>
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">perm_contact_calendar</i>
          <input name="expiration_date" type="date" class="datepicker ">
          <label for="expiration_date">Expiration Date</label>
        </div>
      </div><!--SECOND ROW STARTS HERE-->

      <div class="row s12"><!--THIRD ROW STARTS HERE-->
        <div class="input-field col s6">
          <i class="material-icons prefix">perm_identity</i>
          <input name="user_name" type="text" class="validate ">
          <label for="user_name">Username</label>
        </div>      	

        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input name="pass_word" type="password" class="validate ">
          <label for="pass_word">Password</label>
        </div>  

      </div>   <!--THIRD ROW ENDS HERE-->

      <div class="row s12"><!--FOURTH ROW STARTS HERE-->
      	<div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input name="email" type="email" class="validate ">
          <label for="email">Email</label>
     	</div>  

		<div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input name="contact_phone" type="text" class="validate ">
          <label for="contact_phone">Contact</label>
     	</div>  
      </div> <!--FOURTH ROW ENDS HERE-->

   <div class="row s12"><!--FIFTH ROW STARTS HERE-->
      	<div class="input-field col s12">
          <i class="material-icons prefix">location_on</i>
          <input name="address" type="text" class="validate ">
          <label for="address">Address</label>
     	</div>  
	</div><!--FIFTH ROW ENDS HERE-->

   <div class="row s12"><!--FIFTH ROW STARTS HERE-->
      	<div class="input-field col s6">
          <i class="material-icons prefix">payment</i>
          <input name="acc_balance" type="text" class="validate ">
          <label for="acc_balance">Account Balance</label>
     	</div> 

     	<div class="input-field col s6">
          <input name="acc_rewards" type="text" class="validate ">
          <label for="acc_rewards">Account Rewards</label>
     	</div>   
	</div><!--FIFTH ROW ENDS HERE-->

		 <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
		    <i class="material-icons right">send</i>
		 </button>     <!--REGISTER THE USER -->
    </form>
 

 <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Register as Visitor</a>
 <div id="modal1" class="modal"> <!--OPEN A MODAL FOR THE REGISTRATION OF VISITOR-->
    <div class="modal-content">
      <h4>Visitor Registration</h4>
        <form class="col s5 center" method="post" action="visregi.php">
    <div class="row s12">
    	<div class="input-field col s4">
          <i class="material-icons prefix">account_circle</i>
          <input name="vis_ln" type="text" class="validate">
          <label for="vis_ln">Last Name</label>
        </div>

    <div class="input-field col s4">
          <i class="material-icons prefix">account_circle</i>
          <input name="vis_mn" type="text" class="validate">
          <label for="vis_mn">Middle Name</label>
        </div>
    <div class="input-field col s4">
          <i class="material-icons prefix">account_circle</i>
          <input name="vis_fn" type="text" class="validate">
          <label for="vis_fn">First Name</label>
    </div>
    </div>

    <div class="row s12">
    	<div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input name="vis_email" type="text" class="validate">
          <label for="vis_email">Email</label>
        </div>

		<div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input name="vis_contact" type="text" class="validate">
          <label for="vis_contact">Contact</label>
        </div>
    </div>    
<div class="row s12">
	<div class="input-field col s6 offset-s4">	
    <button class="btn waves-effect waves-light center" type="submit" name="action">Submit
    	<i class="material-icons right">send</i>
    </div>
 </div>
  	</button><!--REGISTER AS VISITOR-->	
    </div><!-- END OF MODAL's CONTAINER-->
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

</form>
  </div>
            
            
        <!---->
 <script>
      $(document).ready(function(){
          // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      $('.modal-trigger').leanModal();
      $(".button-collapse").sideNav();
      $('.slider').slider({full_width: true});
      $('ul.tabs').tabs('select_tab', 'tab_id');
    $('.collapsible').collapsible({
      accordion : true // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
          $('select').material_select();
      

        });
$('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: true, // Does not change width of dropdown to that of the activator
      hover: false, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'center' // Displays dropdown with edge aligned to the left of button
    }
  );
     $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
      
    
                
      </script>
    </body>
</html>
        