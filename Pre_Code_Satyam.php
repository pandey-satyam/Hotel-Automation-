<html>
<head><title><Satyam Restaurant</title>

<link rel="stylesheet" type="text/css" href="satstyle.css">
</head>
<body background="c.jpg" text="blue">

    <div id="naya">
        <font color="white">
        <p>Satyam Restaurant</p>
    </font>
    </div>

<h1 align="center"> <font color="black" size="25" face="Constantia"><u><marquee>Satyam Restaurant Welcomes You All</marquee></h1> </u></b></font>
<hr align="center" width="50%" size="4" color="white">
<font color="blue" size="7"><hr size="5">
<center><p><b>Delicious, Yummy and Mouthwatering Menu to Serve You!</b></center></font></p>
    <font color="black">
        <div id="sat">
                <center><p><h2>About</h2><h4>If your taste buds need some spice of variety, sweetness of honey <br>or your mind needs peace and heart needs joy,<br> welcome to the very own restaurant of the city.<br> Hotel Sundaram, a leading multicuisine restaurant invites you all,<br> established in 1985, has its past filled with richness of culture<br> and variety serving for about 35 years.</h4></p></center>
    </div>
    </font>
    <div id="mee">
    <center><img src="satshivsun.jpg" height="300" ></center></div>
<center><table border="3" width="5" cellpadding="5">
<tr>
<th>S.No.</th>
<th>Item</th>
<th>Image</th>
<th>Cost</th>
</tr>
<tr>
<th colspan="4"><strong>I. Hot n Spicy Indian Starters</Strong></th>
</tr>
<tr>
<td>1</td>
<td>Paneer Tikka</td>
<td><img src="Paneer.jpg"></td>
<td>Rs.149</td>
</tr>
<tr>
<td>2</td>
<td>Veg. Manchurian</td>
<td><img src="Manchurian.jpg"></td>
<td>Rs.149</td>
</tr>
<tr>
<td>3</td>
<td>Aloo Delhi Special Tadka Chat</td>
<td><img src="Aloo.jpg"></td>
<td>Rs.149</td>
</tr>
<tr>
<td>4</td>
<td>Sev Puri & Gujarati Khaman</td>
<td><IMG SRC="Sev.jpg"></td>
<td>Rs.149</td>
</tr>
<tr>
<td>5</td>
<td>Pav Bhaji Unlimited</td>
<td><img src="pav.jpg"></td>
<td>Rs.149</td>
</tr>
<tr>
<th colspan="4"><b>II. Desserts</b></th>
</tr>
<tr>
<td>1</td>
<td>Brownie Bite</td>
<td><IMG SRC="br.jpg"></td>
<td>Rs.99</td>
</tr>
<tr>
<td>2</td>
<td>Mousse</td>
<td><IMG SRC="cr.jpg"></td>
<td>Rs.99</td>
</tr>
<tr>
<td>3</td>
<td>Baltimorebar</td>
<td><IMG SRC="baltimorebar.jpg"></td>
<td>Rs.99</td>
</tr>
<tr>
<tr>
<td>4</td>
<td>Delicious Choco (Restaurant Special)</td>
<td><IMG SRC="Delicious Choco.jpg"></td>
<td>Rs.99</td>
</tr>
<tr>
<td>5</td>
<td>Pure Chocolaty Bar</td>
<td><IMG SRC="pure.jpg"></td>
<td>Rs.99</td>
</tr>
<tr>
<td>6</td>
<td>Kheer Speecial</td>
<td><IMG SRC="Kheer.jpg"></td>
<td>Rs.99</td>
</tr>
<tr>
<th colspan="4"><b>III.Perfect Food Menu(Indian Thali)</b></th>
</tr>
<tr>
<td>1</td>
<td>North Indian Thali</td>
<td><IMG SRC="North Indian Thali.jpg"></td>
<td>Rs.399</td>
</tr>
<tr>
<td>2</td>
<td>Sampurna 'Puri' Thali</td>
<td><IMG SRC="Puri.jpg"></td>
<td>Rs.399</td>
</tr>
<tr>
<td>3</td>
<td>Rajdhani Thali</td>
<td><IMG SRC="Rajdhani Thali.jpg"></td>
<td>Rs.399</td>
</tr>
<tr>
<td>4</td>
<td>Gujarati Thali</td>
<td><IMG SRC="Gujarati.jpg"></td>
<td>Rs.399</td>
</tr>

<tr>
    <td>5</td>
<td>Satyam Thali (Restaurant Special)</td>
<td><IMG SRC="Pakwan.jpg"></td>
<td>Rs.399</td>
</tr>
<tr>
<th colspan="4">IV. Juices</th>
</tr>
<tr>
<th colspan="4"><img src="Juices.jpg"></th>
</tr>
<tr>
<th colspan="4">Above Juices at Rs.49 each</th>
</tr>
</table><!--<p> Note: Prices Inclusive of all taxes (including GST) </p>-->
<font color="red" size="6">
<a href="vegetarian.jpg"><u>Look for Vegetarian-Click Here</u></a>
<center><b><h2>Prebooking Registration</h2></b></center>
<div id="pre-book">
    <form action="myser2.php" method="post" id="sep"><!--I also have actions and methods-->
        <label for="fname">Name</label>
            <input type="text" id ="fname" name="first" placeholder="Satyam Pandey" pattern=[A-Z\sa-z]{3,20} required>
        <div>
            <label>Male</label>
            <input type="radio" name="gender" value="Male">
            <label>Female</label>
            <input type="radio" name="gender" value="Female">
            <label>Others</label>
            <input type="radio" name="gender" value="Other">

        </div>
        <div>
            <label for="email1">Email-id</label>
            <input type="email" id="email1" name="mail" placeholder="xyz@gmail.com" required>
        <!--   <label for="pass">Password</label>
            <input type="password" name="pass">-->
        </div>
        <div>
          <label for="Booking">Booking For:</label>
          <select id="Booking" name="book" required>
            <option value="Only_Food"> Only Food </option>
            <option value="Only_Room"> Only Accomodation</option>
            <option value="Both_Food_Room"> Both Food & Accomodation</option>
          </select>
        </div>
        <div>
            <label for="Typemenu">Food Type</label>
            <select id="Typemenu" name="menu" required>
                <option value="veg">Pure Vegetarian</option>
                <option value="non-veg">Non Veg</option>
                <option value="NA">Not Applicable</option>
            </select>
        </div>
        <div>
          <p>If selected Food please let us know the quantity as below:</p>
          <label for="itemsa">Required Items in Category-I</label>
          <input type="number" id="itemsa" name="quantitya" min="0" max="10">
          <label for="itemsb">Required Items in Category-II</label>
          <input type="number" id="itemsb" name="quantityb" min="0" max="10">
          <label for="itemsc">Required Items in Category-III</label>
          <input type="number" id="itemsc" name="quantityc" min="0" max="10">
          <label for="itemsd">Required Items in Category-IV</label>
          <input type="number" id="itemsd" name="quantityd" min="0" max="10">
        </div>


        <div>
          <p>If selected Accomodation please let us know the type:</p>
            <label for="Spacea">Accomodation</label>
            <select name="Spacea">
                <option value="AC1">Air-Conditioned VIP</option>
                <option value="AC2">Air-Conditioned General</option>
                <option value="General">Non-AC General</option>
            </select>
        </div>
        <div>
    <label for="message">Any Custom Request?</label>
    <textarea id="message" name="customer_message" placeholder="Say whatever you wish, if any."></textarea>
  </div>
        <div>
            <label for="pay">Are you willing to pay Payment Advance?</label>
            <input type="checkbox" name="pay" required>
        </div>
        <button type="submit">Submit</button>

</div>
</form>
<div id="sca">
<h3>Specialities include:</h3></center></div>
<ol>
    <li>Gymnasium</li>
    <li>Open Park Restaurant</li>
    <li>Candle Light Dinner</li>
    <li>Customised Services Support</li>
</ol>
<p><b>For more information<a href="Satyam Veg-Food Plaza.htm"><u>Click Here</u></a></b><br><center>
<p><font color="grey" size="6"><center><b><u>Venue</u>:-Near High Court, Prayagaraj, U.P. </b></center>
<h5 align="center"> <font color="red" size="5">Home Delivery Facility Available</h4> </u>
<p>Note: Complete Air Conditioned Hotel and menu available on demand</p>
<p>Come and Visit, Have fun and fill your stomach with our spice</P
<p>Remember!Variety is the spice of life</p>
<p><center>For Further Details e-mail us at <u>pandeysatyam2013@gmail.com</u></center>
    <script src="newjs.js"></script>
    <footer>
        Copyright 2021
    </footer>
</body>

</html>
