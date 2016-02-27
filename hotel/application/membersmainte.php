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

<body>

    <div class="row">
            <div class="col s12">
                <ul class="tabs grey darken-3" id="regTab">
                    <li class="tab col s3"><a class="active cyan-text text-accent-3" href="#test1" id="guest">Guest</a></li>
                    <li class="tab col s3"><a class="active cyan-text text-accent-3" href="#test2" id="member">Members</a></li>
                </ul>
            </div>
        
            <div id="test1" class="col s12">    
                <div  class="container center">
                  <div class="section">            
                    <!--DataTables example-->
                    <!--DataTables example Row grouping-->
                    <div id="row-grouping" class="section">
                      <div class="row">
                        <div class="col s12 m8 l9">
                          <table id="data-table-simple" class="display" cellspacing="0" width="100%">
                              <thead>
                                  <tr>
                                      <th>Customer ID</th>
                                      <th>Last Name</th>
                                      <th>First Name</th>
                                      <th>Middle Name</th>
                                      <th>E-mail</th>
                                      <th>Contact No.</th>
                                  </tr>
                              </thead>

                              <tfoot>
                                  <tr>
                                  </tr>
                              </tfoot>

                              <tbody>
                                  <tr>
                                      <td>00001</td>
                                      <td>Lopez</td>
                                      <td>Toni</td>
                                      <td>Esguerra</td>
                                      <td>sadako@gg.com</td>
                                      <td>0999-000-9999</td>
                                  </tr>
                                  
                                  <tr>
                                      <td>00001</td>
                                      <td>Lopez</td>
                                      <td>Toni</td>
                                      <td>Esguerra</td>
                                      <td>sadako@gg.com</td>
                                      <td>0999-000-9999</td>
                                  </tr>
                                  
                                   <tr>
                                      <td>00001</td>
                                      <td>Lopez</td>
                                      <td>Toni</td>
                                      <td>Esguerra</td>
                                      <td>sadako@gg.com</td>
                                      <td>0999-000-9999</td>
                                  </tr>
                                  
                                   <tr>
                                      <td>00001</td>
                                      <td>Lopez</td>
                                      <td>Toni</td>
                                      <td>Esguerra</td>
                                      <td>sadako@gg.com</td>
                                      <td>0999-000-9999</td>
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
          <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Add Guests</a>
        </div>
        </div>

            <div id="modal1" class="modal modal-fixed-footer">
            <div class="modal-content">
              <h4>Guests</h4>
            <div class="row">
              <div class="col s12">
              <div class="input-field col s6">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="room_number" type="text" class="validate">
                      <label for="first_name">Customer ID:</label>
                  </div>
                </div>
                  
               <div class="row">
               <div class="col s12">  
                  <div class="input-field col s4">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="room_number" type="text" class="validate">
                      <label for="first_name">Last Name:</label>
                  </div>
                   
                   <div class="input-field col s4">
                      <i class="material-icons prefix"></i>
                      <input id="room_number" type="text" class="validate">
                      <label for="first_name">First Name:</label>
                  </div>
                   
                   <div class="input-field col s4">
                      <i class="material-icons prefix"></i>
                      <input id="room_number" type="text" class="validate">
                      <label for="first_name">Middle Name:</label>
                  </div>
              </div>  
             </div>   
          <div class="row">         
            <div class="col s12">
                  <div class="input-field col s6">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="room_number" type="text" class="validate">
                      <label for="first_name">E-mail:</label>
                  </div> 
            
              <div class="input-field col s6">
                      <i class="material-icons prefix">phone</i>
                      <input id="room_number" type="text" class="validate">
                      <label for="first_name">Contact No.:</label>
                  </div>
                  </div>
          </div>
          </div>  

            </div><!--END OF MODAL CONTENT-->
            <div class="modal-footer">
              <a href="membersmainte.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancel</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Submit</a>
            </div>
          </div> 
    </div>
        
        <!--ADD MEMBERS-->
        
            <div id="test2" class="col s12">    
                <div class="container center">
                  <div class="section">            
                    <!--DataTables example-->
                    <!--DataTables example Row grouping-->
                    <div id="row-grouping" class="section">
                      <div class="row">
                        <div class="col s20 m8 l9">
                          <table id="data-table-simple" class="display" cellspacing="0" width="100%">
                              <thead>
                                  <tr>
                                      <th>Member ID</th>
                                      <th>Username</th>
                                      <th>Password</th>
                                      <th>Last Name</th>
                                      <th>First Name</th>
                                      <th>Middle Name</th>
                                      <th>Validation of Membership</th>
                                      <th>Expiration of Membership</th>
                                      <th>E-mail</th>
                                      <th>Contact No.</th>
                                      <th>Address</th>
                                  </tr>
                              </thead>

                              <tfoot>
                                  <tr>
                                  </tr>
                              </tfoot>

                              <tbody>
                               
                                  <tr>
                                      <td>00001</td>
                                      <td>kimchens</td>
                                      <td>ayossup</td>
                                      <td>Lopez</td>
                                      <td>Toni</td>
                                      <td>Esguerra</td>
                                      <td>01-02-16</td>
                                      <td>01-02-19</td>
                                      <td>sadakongsingkit@gg.com</td>
                                      <td>0999-999-9999</td>
                                      <td>Antipolo City</td>
                                  </tr>
                                  
                                     <tr>
                                      <td>00002</td>
                                      <td>meguchan</td>
                                      <td>chichi</td>
                                      <td>Neverio</td>
                                      <td>Editha</td>
                                      <td>Lumapag</td>
                                      <td>01-02-16</td>
                                      <td>01-02-19</td>
                                      <td>sleepyymeg@gg.com</td>
                                      <td>0999-999-9999</td>
                                      <td>Antipolo City</td>
                                  </tr>
                                  
                                     <tr>
                                      <td>00003</td>
                                      <td>goldii</td>
                                      <td>ilygoldy</td>
                                      <td>Rosello</td>
                                      <td>Bryan</td>
                                      <td>Moomoo</td>
                                      <td>01-02-16</td>
                                      <td>01-02-19</td>
                                      <td>dbmr@gg.com</td>
                                      <td>0999-999-9999</td>
                                      <td>Marikina City</td>
                                  </tr>
                                  
                                     <tr>
                                      <td>00004</td>
                                      <td>nomseo</td>
                                      <td>mvp0827</td>
                                      <td>Velasco</td>
                                      <td>Mon</td>
                                      <td>V</td>
                                      <td>01-02-16</td>
                                      <td>01-02-19</td>
                                      <td>mpvnomseo@gg.com</td>
                                      <td>0999-999-9999</td>
                                      <td>Manila City</td>
                                  </tr>
                                  
                                     <tr>
                                      <td>00005</td>
                                      <td>jonasbros</td>
                                      <td>justjonas</td>
                                      <td>Villamar</td>
                                      <td>Jonas</td>
                                      <td>Jonas</td>
                                      <td>01-02-16</td>
                                      <td>01-02-19</td>
                                      <td>jonasbros@gg.com</td>
                                      <td>0999-999-9999</td>
                                      <td>Pasig City</td>
                                  </tr>
                                  
                                     <tr>
                                      <td>00006</td>
                                      <td>jrlnbnscnj</td>
                                      <td>jujueats</td>
                                      <td>Buenconsejo</td>
                                      <td>Jerlon</td>
                                      <td>Frondozo</td>
                                      <td>01-02-16</td>
                                      <td>01-02-19</td>
                                      <td>jrlnbncnj@gg.com</td>
                                      <td>0999-999-9999</td>
                                      <td>Mandaluyong City</td>
                                  </tr>
                                  
                                     <tr>
                                      <td>00001</td>
                                      <td>vinceee</td>
                                      <td>vincenba</td>
                                      <td>Magtubo</td>
                                      <td>Vince</td>
                                      <td>Garcia</td>
                                      <td>01-02-16</td>
                                      <td>01-02-19</td>
                                      <td>juanvicente@gg.com</td>
                                      <td>0999-999-9999</td>
                                      <td>Valenzuela City</td>
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
          <a class="modal-trigger waves-effect waves-light btn" href="#modal2">Add Members</a>
        </div>
        </div>

            <div id="modal2" class="modal modal-fixed-footer">
            <div class="modal-content">
              <h4>Members</h4>
            <div class="row">
              <div class="col s12">
              <div class="input-field col s6">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="room_number" type="text" class="validate">
                      <label for="first_name">Member ID:</label>
                  </div> 
                </div>


                <div class="row col s12"> 
                  <div class="input-field col s5">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Username:</label>
                  </div> 
                    
                  <div class="input-field col s5">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Password:</label>
                  </div> 
                </div>    
                    
                
                  <div class="row col s12"> 
                  <div class="input-field col s4">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Last Name:</label>
                  </div>  


                  <div class="input-field col s4">
                      <i class="material-icons prefix"></i>
                      <input id="first_name" type="text" class="validate">
                      <label for="first_name">First Name:</label>
                  </div>  

                  <div class="input-field col s4">
                      <i class="material-icons prefix"></i>
                      <input id="middle_name" type="text" class="validate">
                      <label for="middle_name">Middle Name:</label>
                  </div>
               </div>

                <div class="row s12"><!--SECOND ROW STARTS HERE-->


                <div class="input-field col s6">
                  <i class="material-icons prefix">perm_contact_calendar</i>
                  <input name="join_date" type="date" class="datepicker">
                  <label for="join_date">Date Joined:</label>
                </div>

                <div class="input-field col s6">
                  <i class="material-icons prefix">perm_contact_calendar</i>
                  <input name="expiration_date" type="date" class="datepicker ">
                  <label for="expiration_date">Expiration Date:</label>
                </div>
              </div>

                <div class="row">   
                <div class="col s12">
                  <div class="input-field col s6">
                          <i class="material-icons prefix">account_circle</i>
                          <input id="middle_name" type="text" class="validate">
                          <label for="middle_name">E-mail:</label>
                      </div>
                    </div>
                    
                    <div class="row"> 
                    <div class="input-field col s6">
                          <i class="material-icons prefix left">phone</i>
                          <input id="middle_name" type="text" class="validate">
                          <label for="middle_name">Contact No:</label>
                      </div>
                    </div>
                        
                    <div class="row">     
                    <div class="input-field col s12">
                          <i class="material-icons prefix">place</i>
                          <input id="middle_name" type="text" class="validate">
                          <label for="middle_name">Address:</label>
                      </div>
                    </div>
                </div>
                </div>
                </div><!--END OF MODAL CONTENT-->
                    <div class="modal-footer">
                      <a href="membersmainte.php" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancel</a>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Submit</a>
                    </div>
                  </div>  
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