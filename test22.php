<?php
require("class.phpmailer.php");
if(isset($_POST['submit'])) {
    $first = "";
  //  $second = "";
    $gender = "";
    $mailk = "";
    $book = "";
    $menu= "";
    $quantitya= "";
    $quantityb= "";
    $quantityc= "";
    $quantityd= "";
    $Spacea= "";
    $customer_message= "";
    $email_body = "<div>";
    $fbill=0;
    $abill=0;
    $mail = new PHPMailer();//creating a mail object
    $mail->IsSMTP();
    $mail->isHTML(true);
    $mail->SMTPDebug  = 0;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host       = "smtp.gmail.com";//smtp host like here 
    $mail->Port        = '465';//port number
    $mail->Username   ="";//user email from which mail has to be sent
    $mail->Password   ="";//password
    $mail->SetFrom('','Hotel Satyam Online Services');//from email and corresponding name 
    $mail->AddReplyTo("","Restaurant Satyam");//reply to email and corresponding mail
    //$from="pandeys0803@gmail.com";
    
    if(isset($_POST['first'])) {
        $first = filter_var($_POST['first'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
    <label>Hello<b> </label>&nbsp;<span>".$first. ","."</b></span>
 </div>"."<br> Thank you for registering with us. We are glad to serve you. Here is what we have received from you: <br> <b>(Note: </b> In case of any error, please report to us, we apologise for the incovenience caused)<br><br>";
        $email_body .= "<div>
                           <label><b>Customer Name:</b></label>&nbsp;<span>".$first."</span>
                        </div>";
        
    }
    if(isset($_POST['gender']))
    {
    $k=$_POST["gender"];
    $email_body .= "<div>
                       <label><b>Gender:</b></label>&nbsp;<span>".$k."</span>
                    </div>";

    }
    if(isset($_POST['mail'])) {
        $mailk = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['mail']);
        $mailk = filter_var($mailk, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Customer Email:</b></label>&nbsp;<span>".$mailk."</span>
                        </div>";
    }


    if(isset($_POST['book'])) {
        $book = filter_var($_POST['book'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Booking Type:</b></label>&nbsp;<span>".$book."</span>
                        </div>";
    }
    if(isset($_POST['menu'])) {
        $menu = filter_var($_POST['menu'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Menu Type (Asked for better experience at Hotel): </b></label>&nbsp;<span>".$menu."</span>
                        </div>";
    }
    if(isset($_POST['Spacea'])) {
        $Spacea = filter_var($_POST['Spacea'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Accomodation Type:</b></label>&nbsp;<span>".$Spacea."</span>
                        </div>";
    }
if(isset($_POST['quantitya']))
{
  $quantitya=$_POST['quantitya'];
  $fbill=$fbill+($_POST["quantitya"])*149;
  $email_body .= "<div>
                     <label><b>Number of Food Items Selected in Category-I Starters:</b></label>&nbsp;<span>".$quantitya."</span>
                  </div>";
}
if(isset($_POST['quantityb']))
{
  $quantityb=$_POST['quantityb'];
  $fbill=$fbill+($_POST["quantityb"])*99;
  $email_body .= "<div>
                     <label><b>Number of Food Items Selected in Category-II Desserts:</b></label>&nbsp;<span>".$quantityb."</span>
                  </div>";
}
if(isset($_POST['quantityc']))
{
  $quantityc=$_POST['quantityc'];
  $fbill=$fbill+($_POST["quantityc"])*399;
  $email_body .= "<div>
                     <label><b>Number of Food Items Selected in Category-III Meals:</b></label>&nbsp;<span>".$quantityc."</span>
                  </div>";
}
if(isset($_POST['quantityd']))
{
  $quantityd=$_POST['quantityd'];
  $fbill=$fbill+($_POST["quantityd"])*49;
  $email_body .= "<div>
                     <label><b>Number of Food Items Selected in Category-IV Juices:</b></label>&nbsp;<span>".$quantityd."</span>
                  </div>";
}
    if(isset($_POST['customer_message'])) {
        $customer_message = htmlspecialchars($_POST['customer_message']);
        $email_body .= "<div>
                           <label><b>Customer's Special Customisation Request Message:</b></label>
                           <div>".$customer_message."</div>
                        </div>";
    }

    if(isset($_POST['Spacea']))
    {
        if($_POST['Spacea']=='VIP')
        $abill=$abill+500;
        else if($_POST['Spacea']=='VIP Second Class')
        $abill=$abill+300;
        else
        $abill=$abill+150;
    }
    else
    $abill=50;
    
    $email_body .= "<div>
                       <label><b>Your Total Food Bill:</b></label>
                       <div>".$fbill."</div>
                    </div>";
                  $email_body .= "<div>
                                       <label><b>Your Accomodation Bill:</b></label>
                                       <div>".$abill."</div>
                                    </div>";
                                    $email_body .= "<div>
                                    <label><b>Total Bill: </b></label>
                                    <div>".($abill+$fbill)."</div>
                                 </div>";
                                 $email_body .= "<div>
                                    <label><b>GST(18%): </b></label>
                                    <div>".($abill+$fbill)*0.18."</div>
                                 </div>";
                                 $email_body .= "<div>
                                 <label><b>Total Amount to be Paid (Inclusive of GST): </b></label>
                                 <div><i><b>Rs. ".($abill+$fbill)*1.18."/-</b></i></div>
                              </div>";
                 
                $email_body .= "<div>
                                    <p><br>We look forward to serve you with our services,Stay Healthy! Stay Hygienic!<br><br>
                                    <b>Best Regards, </b><br>
                                    Team Hotel Satyam</p></div>";
                                  //  echo "$email_body";

                                    $mail->Body    = $email_body;
                                    $mail->AltBody = $email_body;
                                    $mail->addAddress($mailk, $first);
                                    $mail->Subject= "Registration Details-Hotel Satyam";
                                    if($mail->send())
                                    {echo "<p>Hi! $first. Thank you for contacting us. You must have received confirmation mail and billing details.<br> You will be connected by concerned team within 24 hours.</p>";
                                        echo "<p>We look forward to serve you with our services,Stay Healthy! Stay Hygienic!<br><br> <b> Best Regards</b>,<br>Team Hotel Satyam</p>";}
                                        else {
                                            echo '<p>We are sorry but we are unable to process your request as of now.</p>';
                                            echo "<p>We look forward to serve you with our services soon, Stay Healthy! Stay Hygienic!<br><br> <b> Best Regards</b>,<br>Team Hotel Satyam</p>";
                                        }
                                
                                    // Clear all addresses and attachments for next loop
                                    $mail->clearAddresses();
                                    $mail->clearAttachments();


                                                                       

}
?>
