<html>
<title>Book A Hotel Room</title>
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
    <br>
    
    <div>
        <h1 class="left-align  light-green-text text-darken-4">Book A Room</h1>
    </div> 
        <form class="col s5 center">
          <div class="row s12">

            <div class="input-field col s6">
              <i class="material-icons prefix">events</i>
              <input id="rsv_id" type="text" class="validate">
              <label for="rsv_id">Reservation ID</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix">assignment_ind</i>
              <input id="cust_id" type="text" class="textarea">
              <label for="cust_id">Customer ID</label>
            </div>

          </div><!--END OF first row-->

      <div class="row s12"><!--SECOND ROW STARTS HERE-->
           <div class="input-field col s6">
              <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>

               <label>Room Type</label>
            </div>
          
            <div class="input-field col s3">
              <i class="material-icons prefix">information</i>
              <input disabled id="room_price" type="text" class="validate ">
              <label for="room_price">Price</label>
            </div>  
          
            <div class="input-field col s3">
              <i class="material-icons prefix">information</i>
              <input disabled id="room_rate" type="text" class="validate ">
              <label for="room_rate">Rate</label>
            </div>
            </div><!--SECOND ROW ENDS HERE-->
        
        <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s11">
                  <textarea id="textarea1" class="materialize-textarea"></textarea>
                  <label for="textarea1">Reservation Description</label>
                </div>
              </div>
            </form>
          </div>
        
    
   
   
		 <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
		    <i class="material-icons right">send</i>
		 </button>     <!--REGISTER THE USER -->
        
        
<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Nonmember Booking</a>
    <div id="modal1" class="modal" style="height: 1000px; width: 1000px;"> <!--OPEN A MODAL FOR THE REGISTRATION OF VISITOR-->
    <div class="modal-content">
      <h4>Non-Member Booking</h4>
        <div class="col s12 m9 l10">
    					<form class="col s12" action="case.php" method="POST">
							
							<div class="row">
								<div class="input-field col s4">
									<i class="material-icons prefix">events</i>
                                    <input id="rsv_id" type="text" class="validate">
                                    <label for="rsv_id">Reservation ID</label>
                                    </div>
                            </div>

							<div class="row">
    
                                <div class="input-field col s6">
                                    <select>
                                      <option value="" disabled selected>Choose your option</option>
                                      <option value="1">Option 1</option>
                                      <option value="2">Option 2</option>
                                      <option value="3">Option 3</option>
                                    </select>
                                    <label>Room Type</label>
                                </div>
                                
                                <div class="input-field col s3">
                                    <i class="material-icons prefix">information</i>
                                    <input id="room_price" type="text" class="validate">
                                    <label for="room_price">Price</label>
                                </div>  

                                <div class="input-field col s3">
                                    <i class="material-icons prefix">information</i>
                                    <input id="room_rate" type="text" class="validate">
                                    <label for="room_rate">Rate</label>
                                </div>
                            </div>
                                
                            <div class = "row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">card_travel</i>
                                    <textarea id="caseDesc" class="materialize-textarea" name="casedes"></textarea>
                                    <label for="caseDesc">Reservation Description</label>
                                </div>
                                
                                <div class="row">  
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="vis_ln" type="text" class="validate">
                                    <label for="vis_ln">Last Name</label>
                                </div>

                                <div class="input-field col s4">
                                      <i class="material-icons prefix">account_circle</i>
                                      <input id="vis_mn" type="text" class="validate">
                                      <label for="vis_mn">Middle Name</label>
                                    </div>
                                <div class="input-field col s4">
                                      <i class="material-icons prefix">account_circle</i>
                                      <input id="vis_fn" type="text" class="validate">
                                      <label for="vis_fn">First Name</label>
                                </div>
                                    
                                
                                <div class="input-field col s6">
                                  <i class="material-icons prefix">email</i>
                                  <input id="vis_email" type="text" class="validate">
                                  <label for="vis_email">Email</label>
                                </div>

                                <div class="input-field col s6">
                                  <i class="material-icons prefix">phone</i>
                                  <input id="vis_contact" type="text" class="validate">
                                  <label for="vis_contact">Contact</label>
                                </div>
                                </div>    
                                <div class="row s12">
                                <div class="input-field col s6 offset-s4">	
                                <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </div>
                                </div>
                            </div>
  	</button><!--REGISTER AS VISITOR-->	
    </div><!-- END OF MODAL's CONTAINER-->
  </div>

</form>
  </div>

<script>
 $('.modal-trigger').leanModal();
 $(document).ready(function() {
    $('select').material_select();
  });
</script>

</body>
</html>