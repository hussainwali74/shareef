<?php
 include('header.php');
 error_reporting(-1);
 ini_set('display_errors', 'On');
//  set_error_handler("var_dump");
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = "hussainwali743@gmail.com";
        $subject = "HTML email";
        
        $messsage = "
        <html>
        <head>
        <title>HTML email</title>
        </head>
        <body>
        <p>This email contains HTML Tags!</p>
        <table>
        <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        </tr>
        <tr>
        <td>John</td>
        <td>Doe</td>
        </tr>
        </table>
        </body>
        </html>
        ";
        
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: <webmaster@example.com>' . "\r\n";
        $headers .= 'Cc: <hussain743@gmail.com>' . "\r\n";
        
        if(mail($to,$subject,$message,$headers)){
            echo "
      
            sent";
        }else{
            echo "
            
            <br>
            <br>
            error";
        }
    
    }
?> 
 
<div class="container contact">
<h4 class="text-center">Contact Us</h4>
<hr>
  <div class="row">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <form action="contact.php" method="post" >    
                  <div class="form-group">
                          <label for="name">Full Name</label>
                          <input  class="form-control" type="text" name="name" placeholder="Enter Your Full Name">
                      </div>
                  <div class="form-group">
                          <label for="email">Email</label>
                          <input  class="form-control" type="email" name="email" placeholder="Enter Your Email">
                      </div>
                   
                      <div class="form-group">
                          <label for="message">Message</label>
                          <textarea name="message" id="message" class="form-control"></textarea>
                        </div>
                      <input type="submit" class="btn btn-info " value="Send" name="submit">
                  </form>
              </div>
          </div>
      </div>
    </div>
  </div>
 
<?php include('footer.php'); ?> 


