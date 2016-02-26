<html>
<title>Walk-In Attendees</title>
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
    <form class="col s5 center">
        
        <div><h1 class="left-align  light-green-text text-darken-4">Walk-In Registration</h1></div>
      <div class="row s12">

        <div class="input-field col s4">
          <i class="material-icons prefix">events</i>
          <input id="evnt_id" type="text" class="validate">
          <label for="evnt_id">Event ID</label>
        </div>

        <div class="input-field col s8">
          <input id="event_name"type="text" class="validate">
          <label for="event_name">Event Name</label>
   	    </div>

        <div class ="row">  
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="reg_id"type="text" class="validate">
          <label for="reg_id">Registration ID</label>
   	    </div>
            
         <div class="row s6"><!--THIRD ROW STARTS HERE-->
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="cust_id" type="text" class="validate ">
          <label for="cust_id">Customer ID</label>
        </div>      
      </div><!--END OF first row-->

      <div class="row">
          
       <div class="input-field col s4">
          <i class="material-icons prefix">account_circle</i>
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>

        <div class="input-field col s4">
          <input id="middle_name"type="text" class="validate">
          <label for="middle_name">Middle Name</label>
   	    </div>


        <div class="input-field col s4">
          <input id="first_name"type="text" class="validate">
          <label for="first_name">First Name</label>
   	    </div>
        </div>

      <div class="row">
      	<div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate ">
          <label for="email">Email</label>
     	</div>  

		<div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="contact_phone" type="text" class="validate ">
          <label for="contact_phone">Contact</label>
     	</div>  
      </div> <!--FOURTH ROW ENDS HERE-->

   <div class="row s12"><!--FIFTH ROW STARTS HERE-->
      	<div class="input-field col s12">
          <i class="material-icons prefix">location_on</i>
          <input id="address" type="text" class="validate ">
          <label for="address">Address</label>
     	</div>  
	</div><!--FIFTH ROW ENDS HERE-->

   

		 <button class="btn waves-effect waves-light right" type="submit" name="action">REGISTER
		    <i class="material-icons right">send</i>
		 </button>     <!--REGISTER THE USER -->

 

 
  </div>

</form>
  </div>

<script>
</script>

</body>
</html>