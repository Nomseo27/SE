<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 2.2
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->


<!-- Mirrored from demo.geekslabs.com/materialize/v2.2/layout01/table-data.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Feb 2016 14:11:59 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Administrator | NFCTEL</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
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
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left grey darken-4"></div>
      <div class="loader-section section-right grey darken-4"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="grey darken-4">
                <div class="nav-wrapper">                    
                    
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="index-2.html" class="brand-logo darken-1"><img src="images/nfctellogo.png"></a> <span class="logo-text">Materialize</span></h1></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">                        
                        <li><a href="events.php" class="waves-effect waves-block waves-light pink-text"><i class="mdi-social-cake"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-person-add pink-text"></i></a>
                        </li>                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-location-city pink-text"></i></a>
                        </li>                        
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat pink-text"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation grey darken-4">
            <li class="user-details cyan darken-2">
                <div class="row">
                    <div class="col col s4 m4 l4">
                        <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                    </div>
                    <div class="col col s8 m8 l8">
                        <ul id="profile-dropdown" class="dropdown-content grey darken-4 ">
                            <li ><a href="#" class="pink-text text-lighten-3"><i class="mdi-action-face-unlock pink-text text-lighten-2"></i> Profile</a>
                            </li>
                            <li><a href="#" class="pink-text text-lighten-3"><i class="mdi-action-settings pink-text text-lighten-2"></i> Settings</a>
                            </li>
                            <li><a href="#" class="pink-text text-lighten-3"><i class="mdi-communication-live-help pink-text text-lighten-2"></i> Help</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#" class="pink-text text-lighten-3"><i class="mdi-action-lock-outline pink-text text-lighten-2"></i> Lock</a>
                            </li>
                            <li><a href="#" class="pink-text text-lighten-3"><i class="mdi-hardware-keyboard-tab pink-text text-lighten-2"></i> Logout</a>
                            </li>
                        </ul>
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                        <p class="user-roal">Administrator</p>
                    </div>
                </div>
            </li>
            <li class="bold"><a href="adminhome.php" class="waves-effect waves-pink pink-text"><i class="mdi-action-dashboard"></i> Dashboard</a>
            </li>
            <li class="bold"><a href="app-email.html" class="waves-effect waves-pink pink-text"><i class="mdi-communication-email"></i> Mailbox <span class="new badge">4</span></a>
            </li>
            <li class="bold"><a href="member.php" class="waves-effect waves-pink pink-text"><i class="mdi-social-person-add "></i> Registration</a>
            </li>
            <li class="bold"><a href="guest.php" class="waves-effect waves-pink pink-text"><i class="mdi-maps-directions-walk"></i> Guest</a>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion grey darken-4">
                    <li class="bold"><a class="collapsible-header waves-effect waves-pink pink-text"><i class="mdi-social-location-city"></i> Rooms</a>
                        <div class="collapsible-body grey darken-3">
                            <ul>
                                <li><a href="bedroom.php" class="pink-text text-lighten-4">Bed Rooms</a>
                                </li>                                        
                                <li><a href="function.php" class="pink-text text-lighten-4">Function Rooms</a>
                                </li>
                                <li><a href="amenities.php" class="pink-text text-lighten-4">Amenities</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-pink grey darken-4 pink-text"><i class="mdi-content-add-circle"></i>Booking Confirmation</a>
                        <div class="collapsible-body grey darken-3">
                            <ul>
                                <li><a href="ui-buttons.html" class="pink-text text-lighten-4">Events</a>
                                </li>
                                <li><a href="ui-badges.html" class="pink-text text-lighten-4">Bed Rooms</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header waves-effect waves-pink grey darken-4 pink-text"><i class="mdi-notification-event-note l"></i> Reports</a>
                        <div class="collapsible-body grey darken-3">
                            <ul>
                                <li><a href="table-basic.html" class="pink-text text-lighten-4">Sales Report</a>
                                </li>
                                <li><a href="table-data.html" class="pink-text text-lighten-4">Data Tables</a>
                                </li>
                            </ul>
                        </div>
                    </li>  
                </ul>
            </li>
            
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only pink"><i class="mdi-navigation-menu grey-text text-darken-4"></i></a>
      </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">
        
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-2">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Room Maintenance</h5>
                <ol class="breadcrumb">
                    <li><a href="index-2.html" class="pink-text">Dashboard</a></li>
                    <li><a href="#" class="pink-text">Rooms</a></li>
                    <li class="active">Bed Rooms</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <div class="section">

            <!--DataTables example Row grouping-->
            <div id="row-grouping" class="section">
              <h4 class="header">Bed Room</h4>
              
                <div class="col s12 m8 l9">
                  <table id="data-table-simple" class="display" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                            <th>Room ID</th>
                            <th>Room No</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Rate</th>
                            <th>Description</th>
                            <th>Manage</th>
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
                            <th>Manage</th>
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
										$rid = $rs['RoomID'];
                                        $rno = $rs['RoomNo'];
                                        $rtype = $rs['RoomType'];
                                        $rprice = $rs['Price'];
                                        $rrate = $rs['Rate'];
                                        $rdes = $rs['RoomDescription'];
								echo "<tr>
                                        <form name = ". $rid ." method='post' action='editroom.php'>
                                	   <td><input type='hidden' name='' value='".$rid."'>". $rid."</td>
                                        <td><input type='hidden' name='".$rno."' value='".$rno."'>".$rno."</td>
                                        <td><input type='hidden' name='".$rtype."' value='".$rtype."'>".$rno."</td>
                                        <td><input type='hidden' name='".$rprice."' value='".$rprice."'>".$rprice."</td>
                                        <td><input type='hidden' name='".$rrate."' value='".$rrate."'>".$rrate."</td>
                                        <td><input type='hidden' name='".$rdes."' value='".$rdes."'>".$rdes."</td>
                                        <td><input class='input-field btn center grey darken-4 pink-text' type='submit' name='submit' value='edit | delete'>
                                            <i class='mdi-editor-mode-edit'></i>
                                            </a></td>
                                    </tr>";
			
                            }
                        ?>
                        
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
           
          </div>
          <div class="container">

          <div id="mail-app" class="section">
          <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                <a href="#modal1" class="btn-floating btn-large grey darken-4 modal-trigger">
                  <i class="large mdi-content-add pink-text"></i>
                </a>
            </div>
            <!-- Floating Action Button -->
          <div id="modal1" class="modal">
              <div class="modal-content">
                <nav class="pink">
                  <div class="nav-wrapper">
                    <div class="left col s12 m5 l5">
                      <ul>
                        <li><a href="#!" class="email-menu"><i class="modal-action modal-close  mdi-hardware-keyboard-backspace"></i></a>
                        </li>
                        <li><a href="#!" class="email-type">ADD Bed Room</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col s12 m7 l7 hide-on-med-and-down">
                       
                      
                    </div>

                  </div>
                </nav>
              </div>
              <div class="model-email-content">
                   <form class="col s12 center" method="post" action="bedrAdd.php"> 
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
                      <i class="mdi-editor-mode-edit prefix"></i>
                      <textarea name="roomdes" class="materialize-textarea"></textarea>
                      <label for="roomdes" class="">Message</label>
                    </div>
            </div>
            <ul class="right">
                         
                        <li><input class="input-field btn center grey darken-4 pink-text" type="submit" name="submit" value="ADD">
                        </li>
                      </ul>
        </form>
              </div>
            </div>
              </div>
          </div>
        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START RIGHT SIDEBAR NAV-->
      <aside id="right-sidebar-nav">
        <ul id="chat-out" class="side-nav rightside-navigation">
            <li class="li-hover">
            <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
            <div id="right-search" class="row">
                <form class="col s12">
                    <div class="input-field">
                        <i class="mdi-action-search prefix"></i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Search</label>
                    </div>
                </form>
            </div>
            </li>
            <li class="li-hover">
                <ul class="chat-collapsible" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                    <div class="collapsible-body recent-activity">
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">just now</a>
                                <p>Jim Doe Purchased new equipments for zonal office.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">Yesterday</a>
                                <p>Your Next flight for USA will be on 15th August 2015.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">Last Week</a>
                                <p>Jessy Jay open a new store at S.G Road.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                    <div class="collapsible-body sales-repoart">
                        <div class="sales-repoart-list  chat-out-list row">
                            <div class="col s8">Target Salse</div>
                            <div class="col s4"><span id="sales-line-1"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Payment Due</div>
                            <div class="col s4"><span id="sales-bar-1"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Total Delivery</div>
                            <div class="col s4"><span id="sales-line-2"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Total Progress</div>
                            <div class="col s4"><span id="sales-bar-2"></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                    <div class="collapsible-body favorite-associates">
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Eileen Sideways</p>
                                <p class="place">Los Angeles, CA</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Zaham Sindil</p>
                                <p class="place">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Renov Leongal</p>
                                <p class="place">Cebu City, Philippines</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Weno Carasbong</p>
                                <p>Tokyo, Japan</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Nusja Nawancali</p>
                                <p class="place">Bangkok, Thailand</p>
                            </div>
                        </div>
                    </div>
                </li>
                </ul>
            </li>
        </ul>
      </aside>
      <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <footer class="page-footer pink darken-2">
    <div class="footer-copyright pink darken-2">
      <div class="container pink darken-2">
        <span>Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>
        </div>
    </div>
  </footer>
    <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    <script type="text/javascript">
        function getINFO(id, no, type, price, rate, des){
            alert('here');
            var form = document.forms[id];
            var form2 = document.forms['modaled'];
            
            form2.elements['roomno'].value = form.elements[id].value;
            
        }
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


<!-- Mirrored from demo.geekslabs.com/materialize/v2.2/layout01/table-data.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Feb 2016 14:12:04 GMT -->
</html>