<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-tap-highlight" content="no">
		<meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
		<meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
			<!-- For iPhone -->
		<meta name="msapplication-TileColor" content="#00bcd4">
		<meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
			<!-- For Windows Phone -->
			<!-- CORE CSS-->
		<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
			<!-- Custome CSS-->    
		<link href="css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="../../../../cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
			<!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
		<link href="css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link rel="stylesheet" href="css2/materialize.css">
		<link rel="stylesheet" href="css2/materialize.min.css">
		
		<script src="js2/jquery-2.1.1.min.js"></script> 
		<script src="js2/materialize.js"></script>
		<script src="js2/materialize.min.js"></script>
		
		<style type="text/css">
			.tryLang{
				font-size: 12px;
			}
		</style>
	</head>

	<body>
		<div class="container">
			<div class="section">            
            <!--DataTables example-->
            <!--DataTables example Row grouping-->
				<div id="row-grouping" class="section">
					<div class="row">
						<div class="col s12 m8 l9">
							<table id="data-table-simple" class="display" cellspacing="0" width="130%">
								<thead>
									<tr>
										<th class="tryLang">Event Number</th>
										<th class="tryLang">Event Name</th>
										<th class="tryLang">Event Information</th>
										<th class="tryLang">Type of Event</th>
										<th class="tryLang">Price</th>
										<th class="tryLang">Start Date</th>
										<th class="tryLang">End Date</th>
										<th class="tryLang">Room ID</th>
										<!--<th>Username</th>
										<th>Password</th>-->
									</tr>
								</thead>
                   
								<tfoot>
									<tr>
										<th class="tryLang">Event Number</th>
										<th class="tryLang">Event Name</th>
										<th class="tryLang">Event Information</th>
										<th class="tryLang">Type of Event</th>
										<th class="tryLang">Price</th>
										<th class="tryLang">Start Date</th>
										<th class="tryLang">End Date</th>
										<th class="tryLang">Room ID</th>
									</tr>
								</tfoot>
								
								<tbody>
									<tr>
										<td>EvNo1</td>
										<td>EventName1</td>
										<td>EventInfo1</td>
										<td>RadioBtn</td>
										<td>$1</td>
										<td>DateType</td>
										<td>DateType</td>
										<td>ForeignKey</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col offset-s7">
				<a class="modal-trigger waves-effect waves-light btn" href="#modal1">Create an Event</a>
			</div>
		</div>

		<div id="modal1" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h4>Add Event</h4>
				<div class="row">
					<div class="col s12">
						<div class="input-field col s6">
							<i class="material-icons prefix">work</i><br />
							<input id="room_number" type="text" class="validate">
							<label for="first_name">Event Number</label>
						</div>
						
						<div class="input-field col s6">
							<i class="material-icons prefix">label_outline</i><br />
							<input id="room_number" type="text" class="validate">
							<label for="first_name">Event Name</label>
						</div>
						
						<div class="input-field col s12">
							<i class="material-icons prefix">description</i>
							<textarea id="textarea1" class="materialize-textarea"></textarea>
							<label for="textarea1">Event Information</label>
						</div>
					</div>  
				</div> 
				
				<div class="row">         
					<div class="col s12">
						<div class="input-field col s6">
							<i class="material-icons prefix">group_work</i>
							<label for="group2">Type of Event</label><br /><br />
							<input name="group2" type="radio" id="privateRadio" />
    						<label for="privateRadio">Private</label>     
							
							<input name="group2"id="publicRadio" type="radio" class="validate">
							<label for="publicRadio">Public</label>
						</div>  
      
						<div class="input-field col s6">
							<i class="material-icons prefix">payment</i><br /><br />
							<input id="room_number" type="text" class="validate">
							<label for="first_name">Price</label>
						</div>
					</div>
				</div>  
				
				<div class="row">         
					<div class="col s12">
						<div class="input-field col s4">
							<i class="material-icons prefix">av_timer</i><br /><br />
							<input id="room_number" type="date" class="validate">
							<label for="first_name">Start Date</label>
						</div>
						
						<div class="input-field col s4">
							<i class="material-icons prefix">av_timer</i><br /><br />
							<input id="room_number" type="date" class="validate">
							<label for="first_name">End Date</label>
						</div>
						
						<div class="input-field col s4">
							<i class="material-icons prefix">av_timer</i><br /><br />
							<label for="first_name">Available Rooms</label>
							<select>
								<option value="" disabled selected>Select a Room</option>
								<!--Retrive records from ROOM-->
								<option value="1">SampleRoom</option>
								<option value="2">SampleRoom</option>
								<option value="3">SampleRoom</option>
							</select>
						</div>
					</div>
				</div>  
  
				
			</div><!--END OF MODAL CONTENT-->
    
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Submit</a>
			</div>
		</div>     

		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    
			<!--materialize js-->
		<script type="text/javascript" src="js/materialize.js"></script>
			<!--prism-->
		<script type="text/javascript" src="js/prism.js"></script>
			<!--scrollbar-->
		<script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
			<!-- data-tables -->
		<script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>
			<!-- chartist -->
		<script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>       
			<!--plugins.js - Some Specific JS codes for Plugin Settings-->
		<script type="text/javascript" src="js/plugins.js"></script>    
	
		<script>
			$(document).ready(function(){
				// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
				$('.modal-trigger').leanModal();
			});
		</script> 

	</body>
</html> 