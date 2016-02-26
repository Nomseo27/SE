<html>
<title>Registration</title>
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
<nav class="green">

</nav>

<div class=' container center' style="width:50%;">
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

<script>
 $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
 $('.modal-trigger').leanModal();

</script>

</body>
</html>