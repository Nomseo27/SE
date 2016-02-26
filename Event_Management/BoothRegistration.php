<html>
<title>Booth Registration</title>
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
    <div><h1 class="left-align  light-green-text text-darken-4">Booth Registration</h1></div>
    <form class="col s5 center">
      <div class="row s12">
          
        <div class="input-field col s4">
          <i class="material-icons prefix">events</i>
          <input id="evnt_id" type="text" class="validate">
          <label for="evnt_id">Event ID</label>
        </div>

        <div class="input-field col s8">
          <input disabled id="event_name"type="text" class="validate">
          <label for="event_name">Event Name</label>
   	    </div><!--FIRST ROW ENDS HERE-->
          
          
          <!-- SECOND ROW STARTS HERE-->
        <div class="input-field col s4">
          <i class="material-icons prefix">perm_contact_calendar</i>
          <input id="event_date" type="date" class="datepicker ">
          <label for="event_date">Date</label>
        </div>
  

        
        <div class="input-field col s4">
          <i class="material-icons prefix">account_circle</i>
          <input id="reg_id"type="text" class="validate">
          <label for="reg_id">Registration ID</label>
   	    </div>
            
         
        <div class="input-field col s4">
          <i class="material-icons prefix">account_circle</i>
          <input id="user_name" type="text" class="validate ">
          <label for="user_name">Customer ID</label>
        </div>  <!--SECOND ROW ENDS HERE-->

        <!--THIRD ROW STARTS HERE-->
        <div class="input-field col s4">
          <i class="material-icons prefix">account_circle</i>
          <input disabled id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>

        <div class="input-field col s4">
          <input disabled id="middle_name"type="text" class="validate">
          <label for="middle_name">Middle Name</label>
   	    </div>


        <div class="input-field col s4">
          <input disabled id="first_name"type="text" class="validate">
          <label for="first_name">First Name</label>
   	    </div>
    </div><!-- THIRD ROW ENDS HERE-->


        <div class = "row">
      	<div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input disabled id="email" type="email" class="validate ">
          <label for="email">Email</label>
     	</div>  

		<div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input disabled id="contact_phone" type="text" class="validate ">
          <label for="contact_phone">Contact</label>
     	</div>  
      </div> 



		 <button class="btn waves-effect waves-light right" type="submit" name="action">REGISTER
		    <i class="material-icons right">send</i>
		 </button>     <!--REGISTER THE USER -->

  </div>

</form>
  </div>

<script>
 $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });

</script>

</body>
</html>