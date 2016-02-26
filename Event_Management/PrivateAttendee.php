<html>
<title>Attendance</title>
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
      <div class="row s12">
          
        <div class="input-field col s5">
          <i class="material-icons prefix">account_circle</i>
          <input id="attendee_id" type="text" class="validate">
          <label for="attendee_id">Attendee ID</label>
        </div>  
        </div>
          
        <div class = "row">
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
        
      </div><!--END OF first row-->

     

		 <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
		    <i class="material-icons right">send</i>
		 </button>     <!--REGISTER THE USER -->

 



</form>
  </div>

<script>
 

</script>

</body>
</html>