<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>

	<link rel="stylesheet" href="css/materialize.css">
	<link rel="stylesheet" href="css/materialize.min.css">
	<script src="js/jquery-2.1.1.min.js"></script>	
	<script src="js/materialize.js"></script>
	<script src="js/materialize.min.js"></script>
</head>
<style>
.size{
	height:250px;
	overflow:scroll;
	overflow-x : hidden; 
}




</style>

<body>
<br>
<br>

<br>
<br><br><br>
<div class="row ">	
<div class="col size offset-s3 col s6 borders">
	<table class="tblSize bordered responsive-table striped centered">
        <thead>
          <tr>
              <th data-field="id">Room Number</th>
              <th data-field="name">Price </th>
              <th data-field="price">Rate</th>
              <th data-field="description">Service Description</th>
              <th data-field="description">Manage</th>

          </tr>
        </thead>

        <tbody>
          <tr>
            <td>00001</td>
            <td>$3.76</td>
            <td>$0.87 /12 hrs</td>
            <td>Sexy</td>
            <td></td>

          </tr>
          <tr>
            <td>00002</td>
            <td>$3.76</td>
            <td>$3.76 /12 hrs</td>
            <td>Pabebe Girls</td>
            <td></td>

          </tr>
          <tr>
            <td>00003</td>
            <td>$3.76</td>
            <td>$7.00/12 hrs</td>
            <td>Nae nae</td>
            <td></td>

          </tr>

          <tr>
            <td>00004</td>
            <td>$3.76</td>
            <td>$7.00/12 hrs</td>
            <td>Nae nae</td>
            <td></td>
            
          </tr>
          <tr>
            <td>00005</td>
            <td>$3.76</td>
            <td>$7.00/12 hrs</td>
            <td>Nae nae</td>
            <td></td>
          </tr>                    
         
         <tr>
            <td>00006</td>
            <td>$3.76</td>
            <td>$7.00/12 hrs</td>
            <td>Nae nae</td>
            <td></td>
          </tr>                    
       
          <tr>
            <td>00007</td>
            <td>$3.76</td>
            <td>$7.00/12 hrs</td>
            <td>Nae nae</td>
            <td></td>
          </tr>                    
         
          <tr>
            <td>00008</td>
            <td>$3.76</td>
            <td>$7.00/12 hrs</td>
            <td>Nae nae</td>
            <td></td>
          </tr>                    
        </tbody>
      </table>
</div>	
</div> <!--________________________ROW________________________-->
<div class="row">
	<div class="col offset-s7">
  <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Create Amenities</a>
</div>
</div>

<!--____________________________
Dear Devs,
	Eto yung laman pag pindinot yung TaModal.

						Nagmamahal,
						Goku 
______________________________-->						


<!--________________ADD Amenities Modal CONTENT___________-->
 <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Add Ameneties because why not?</h4>
		<div class="row">
			<div class="col s12">
			<div class="input-field col s6">
          		<i class="material-icons prefix">room</i>
          		<input id="room_number" type="text" class="validate">
        	  	<label for="first_name">Room Number</label>
       		</div>	
       		<div class="input-field col s6">
          		<i class="material-icons prefix">payment</i>
          		<input id="room_number" type="text" class="validate">
        	  	<label for="first_name">Price</label>
       		</div>
      </div> 	
     </div> 	
 	<div class="row">      		
    <div class="col s12">
       		<div class="input-field col s6">
          		<i class="material-icons prefix">payment</i>
          		<input id="room_number" type="text" class="validate">
        	  	<label for="first_name">Price</label>
       		</div>	
			
			<div class="input-field col s6">
          		<i class="material-icons prefix">payment</i>
          		<input id="room_number" type="text" class="validate">
        	  	<label for="first_name">Rate</label>
       		</div>
	</div>
	</div>	
 	<div class="row">   
		<div class="col s12">
			<div class="input-field col s12">
			<i class="material-icons prefix">description</i>
          	<textarea id="textarea1" class="materialize-textarea"></textarea>
          	<label for="textarea1">Description</label>
        </div>
		</div>
	</div>

    </div><!--END OF MODAL CONTENT-->
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Submit</a>
    </div>
  </div>


<script>
	$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });




</script>	
</body>
</html>