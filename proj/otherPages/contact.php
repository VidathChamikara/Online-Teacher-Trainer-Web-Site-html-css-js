<?php
  
if($_POST) {
    $fname = "";
    $emailAdd = "";
    $addr = "";
      
    if(isset($_POST['fname'])) {
        $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
        $emailAdd .= "<div>
                           <label><b>fname:</b></label>&nbsp;<span>".$fname."</span>
                        </div>";
    }
 
    if(isset($_POST['emailAdd'])) {
        $emailAdd = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['emailAdd']);
        $emailAdd = filter_var($emailAdd, FILTER_VALIDATE_EMAIL);
        $emailAdd .= "<div>
                           <label><b>emailAdd:</b></label>&nbsp;<span>".$emailAdd."</span>
                        </div>";
    }
      
   
    if(isset($_POST['addr'])) {
        $addr = htmlspecialchars($_POST['addr']);
        $emailAdd .= "<div>
                           <label><b>addr:</b></label>
                           <div>".$addr."</div>
                        </div>";
    }
      
    
      
    $emailAdd .= "</div>";
 
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $emailAdd . "\r\n";
      
   
        echo "<p>Thank you for contacting us, $fname. We will contact you within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
      
   
?>