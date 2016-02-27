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
</head>



<style> 

</style>
<body>
<div class="container">
          <div class="section">            
            <!--DataTables example-->
            <!--DataTables example Row grouping-->
            <div id="row-grouping" class="section">
              <div class="row">
                <div class="col s12 m8 l9">
                  <table id="data-table-simple" class="display" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th>Room Number</th>
                              <th>Price</th>
                              <th>Rate</th>
                              <th>Capacity</th>
                              <th>Manage</th>
                          </tr>
                      </thead>
                   
                      <tfoot>
                          <tr>
                              <th>Room Number</th>
                              <th>Price</th>
                              <th>Rate</th>
                              <th>Service Description</th>
                              <th>Manage</th>
                          </tr>
                      </tfoot>
                   
                      <tbody>
                          <tr>
                              <td>00001</td>
                              <td>$1,s150</td>
                              <td>$50/hr</td>
                              <td>Amazing!</td>
                              <td></td>
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
  <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Create Amenities</a>
</div>
</div>

    <div id="modal1" class="modal  modal-fixed-footer">
    <div class="modal-content">
      <h4>Add Function Room</h4>


<div class="row">
      <div class="col s12">
      <div class="input-field col s3">
              <i class="material-icons prefix">room</i>
              <input id="room_id" type="text" class="validate">
              <label for="room_id">Room ID</label>
          </div>  
          <div class="input-field col s4">
              <i class="material-icons prefix"></i>
              <input id="room_number" type="text" class="validate">
              <label for="room_number">Room Number</label>
          </div>

          <div class="input-field col s4">
            <select>
              <option value="" disabled selected>Select Room Type</option>
              <option value="1">SOGO 1</option>
              <option value="2">MOTEL 2</option>
              <option value="3">HOTEL 3</option>
            </select>
              <label>Room Type</label>
        </div>
      </div>  
     </div> <!--____________END OF FIRST ROW_______________-->


  <div class="row">         
  <div class="col s12">
    <div class=" input-field col s4">
      <i class="material-icons prefix">payment</i>
        <input id="price" type="text" class="validate">
        <label for="price">Price</label>
    </div>
    
    <div class=" input-field col s4">
      <i class="material-icons prefix"></i>
        <input id="rate" type="text" class="validate">
        <label for="rate">Rate</label>
    </div>
<div class="input-field col s4">
        <br>
        <div class="switch">
        <label>
          Off
        <input id="check" type="checkbox">
        <span class="lever"></span>
        On
        </label>
        </div>
</div>
  </div>
  </div> 


  <div class="row">   
    <div class="col s12">
      <div class="input-field col s3">
              <i class="material-icons prefix">room</i>
              <input id="capacity" type="text" class="validate">
              <label for="capacity">Capacity</label>
          </div>  

      <div class="input-field col s6">
      <div class="file-field input-field disabled">
      <div class="btn">
        <span>File</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
      </div>
  </div>

    </div>

    </div>
    </div><!--END OF MODAL CONTENT-->
    <div class="modal-footer">
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
      </button>    <!--____INSERT SA DB-->
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