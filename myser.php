<?php

if($_POST) {
    $first = "";
  //  $second = "";
    $gender = "";
    $mail = "";
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

    if(isset($_POST['first'])) {
        $first = filter_var($_POST['first'], FILTER_SANITIZE_STRING);
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
        $mail = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['mail']);
        $mail = filter_var($mail, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Customer Email:</b></label>&nbsp;<span>".$mail."</span>
                        </div>";
    }


    if(isset($_POST['book'])) {
        $book = filter_var($_POST['book'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Booking Type:</b></label>&nbsp;<span>".$book."</span>
                        </div>";
    }
    if(isset($_POST['menu'])) {
        $book = filter_var($_POST['menu'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Menu Type (Asked for better experience at Hotel): </b></label>&nbsp;<span>".$menu."</span>
                        </div>";
    }
    if(isset($_POST['Spacea'])) {
        $book = filter_var($_POST['Spacea'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Accomodation Type:</b></label>&nbsp;<span>".$Spacea."</span>
                        </div>";
    }
if(isset($_POST['quantitya']))
{
  $fbill=$fbill+($_POST["quantitya"])*149;
  $email_body .= "<div>
                     <label><b>Number of Food Items Selected in Category-I Starters:</b></label>&nbsp;<span>".$quantitya."</span>
                  </div>";
}
if(isset($_POST['quantityb']))
{
  $fbill=$fbill+($_POST["quantityb"])*99;
  $email_body .= "<div>
                     <label><b>Number of Food Items Selected in Category-II Desserts:</b></label>&nbsp;<span>".$quantityb."</span>
                  </div>";
}
if(isset($_POST['quantityc']))
{
  $fbill=$fbill+($_POST["quantityc"])*399;
  $email_body .= "<div>
                     <label><b>Number of Food Items Selected in Category-III Meals:</b></label>&nbsp;<span>".$quantityc."</span>
                  </div>";
}
if(isset($_POST['quantityd']))
{
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

    if($book == "Only_Food") {
        $recipient = "pandeys0803@gmail.com";
    }
    else if($book == "Only_Room") {
        $recipient = "pandeys491@gmail.com";
    }
    else if($book == "Both_Food_Room") {
        $recipient = "satyam.p0807@gmail.com";
    }
    else {
        $recipient = "pandeypratima76@gmail.com";
    }
    if($Spacea == "AC1")
    {
      $abill=$abill+500;
    }
   if($Spacea == "AC2")
    {
      $abill=$abill+300;
    }
    if($Spacea == "General")
    {
      $abill=$abill+100;
    }


    $email_body .= "</div>";
    $email_body .= "<div>
                       <label><b>Your Food Bill:</b></label>
                       <div>".$fbill."</div>
                    </div>";
                  $email_body .= "<div>
                                       <label><b>Your Accomodation Bill:</b></label>
                                       <div>".$abill."</div>
                                    </div>";

    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $mail . "\r\n";
    ini_set("SMTP", "aspmx.l.google.com");
  ini_set("sendmail_from", "pandeys0803@gmail.com");


    if(mail($recipient,$book, $email_body, $headers)) {
        echo "<p>Hi! $first. Thank you for contacting us. You will be connected by concerned team within 24 hours.</p>";
        echo "<pre>We look forward to serve you with our services,Stay Healthy! Stay Hygienic!
               Regards,
               Team Hotel Satyam</pre>";
    } else {
        echo '<p>We are sorry but we could not process your request.</p>';
        echo "<pre>We look forward to serve you with our services,Stay Healthy! Stay Hygienic!
  Regards,
  Team Hotel Satyam</pre>";
    }

} else {
    echo '<p>Something went wrong, sorry for inconvenience</p>';
}
?>
