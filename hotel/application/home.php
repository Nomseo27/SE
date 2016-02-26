<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="../../css/icon.css" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
        <div>
            <div class="col s12">
                <h4>Maintenance</h4>
                <ul class="tabs" id="regTab">
                    <li class="tab col s3"><a class="active" href="#test1">BED ROOM</a></li>
                    <li class="tab col s3"><a href="#test2" >FUNCTION ROOM</a></li>
                    <li class="tab col s3"><a href="#test3" >AMENITIES</a></li>
                </ul>
            </div>
            <div id="test1" class="col s12"> 
                <div id="room">
                    <form class="col s12 center" method="post" action="bedrAdd.php">
                        <div class="row">
                            <div class="input-field col s12">
                                <h2>Bed Room</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input name="roomno" type="text" class="validate">
                                <label for="first_name">Room Number</label>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Php" name="Price" type="text" class="validate">
                                <label for="price">Price</label>
                            </div>
                        <div class="input-field col s6">
                            <select name="rate">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="HOUR">Per Hour</option>
                                <option value="DAY">Per Day</option>
                                <option value="USE">Per Use</option>
                            </select>
                            <label>Rate</label>
                        </div>   
                        </div>
                        <div class="row" id="room">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea name="roomdes" class="materialize-textarea"></textarea>
                                <label for="roomdes">Room Description</label>
                            </div>
                        </div>
                        <input type="submit" class="waves-effect waves-light btn right" name=submit value="ADD BEDROOM">
                    </form>
                </div>
            </div>
            <div id="test2" class="col s12">
                <div>
                    <form class="col s12 center" method="post" action="funcrAdd.php">
                        <div class="row">
                            <div class="input-field col s12">
                            <h2>Function Room</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input name="roomno" type="text" class="validate">
                                <label for="first_name">Room Number</label>
                            </div>
                            <form>
                                <div class="input-field col s4">
                                    <input id="search" type="search" required>
                                    <label for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                                <div class="input-field col s2">
                                    <input type=submit class="waves-effect waves-light btn" value="search"></a>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Php" name="Price" type="text" class="validate">
                                <label for="Price">Price</label>
                            </div>
                            <div class="input-field col s6">
                                <select name='rate'>
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="HOUR">Per Hour</option>
                                    <option value="DAY">Per Day</option>
                                    <option value="USE">Per Use</option>
                                </select>
                                <label>Rate</label>
                            </div>   
                        </div>
                        <div class="row" id="function">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea name="capacity" class="materialize-textarea"></textarea>
                            <label for="capacity">Capacity</label>
                            </div>
                        </div>
                            <input type="submit" name="submit" class="waves-effect waves-light btn right" value="ADD Function Room">
                </form>
                </div>
            </div>
            <div id="test3" class="col s12">
                <div>
                    <form class="col s12 center" method="post" action="amenAdd.php">
                        <div class="row">
                            <div class="input-field col s12">
                                <h2>Amenities</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input name="roomno" type="text" class="validate">
                                <label for="first_name">Room Number</label>
                            </div>
                            <form>
                                <div class="input-field col s4">
                                    <input id="search" type="search" required>
                                    <label for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                                <div class="input-field col s2">
                                    <input type=submit class="waves-effect waves-light btn" value="search"></a>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Php" name="Price" type="text" class="validate">
                                <label for="price">Price</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="rate">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="HOUR">Per Hour</option>
                                    <option value="DAY">Per Day</option>
                                    <option value="USE">Per Use</option>
                                </select>
                                <label>Rate</label>
                            </div>   
                        </div>
                        <div class="row" id="amenities">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea name="amenities" class="materialize-textarea"></textarea>
                                <label for="amenities">Service Description</label>
                            </div>
                        </div>
                            <input type="submit" name="submit" class="waves-effect waves-light btn right" value="ADD Amenities">
                    </form>
                    </div>
            </div>
        </div>

<div id="table-datatables">
              <h4 class="header">DataTables example</h4>
              <div class="row">
                <div class="col s12 m4 l3">
                  <p>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function.</p>

                  <p>Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example.</p>
                </div>
                <div class="col s12 m8 l9">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Room ID</th>
                            <th>Room No</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Rate</th>
                            <th>Description</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    
                    <tfoot>
                        <tr>
                            <th>Room ID</th>
                            <th>Room No</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Rate</th>
                            <th>Description</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        
                        <?php
                            $serverName = "NOMSEO"; //serverName\instanceName

                            // Since UID and PWD are not specified in the $connectionInfo array,
                            // The connection will be attempted using Windows Authentication.
                            $connectionInfo = array( "Database"=>"HOTELDB", "UID"=>"sa", "PWD"=>"mpv08271996");
                            $conn = sqlsrv_connect( $serverName, $connectionInfo);

                            if( $conn ) {
                               
                            }
                            else{
                                echo "Connection could not be established.<br />";
                                die( print_r( sqlsrv_errors(), true));
                            }
                           
                            $stmt = sqlsrv_query($conn,'{CALL SP_DISPLAYROOM}');
                        
                            while ($rs = sqlsrv_fetch_array($stmt)) {
										
								echo "<tr>
                                	   <td>".$rs['RoomID']."</td>
                                        <td>".$rs['RoomNo']."</td>
                                        <td>".$rs['RoomType']."</td>
                                        <td>".$rs['Price']."</td>
                                        <td>".$rs['Rate']."</td>
                                        <td>".$rs['RoomDescription']."</td>
                                        <td>".$rs['AcctStat']."</td>
                                    </tr>";
			
                            }
                        ?>
                        
                    </tbody>
                  </table>
                </div>
              </div>
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
      </script>

 <!-- jQuery Library -->
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
    </body>
</html>
        