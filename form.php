

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HTML & CSS Form</title>
  <link rel="stylesheet" href="l.css">

</head>
<body> 
    <div class="container">
      <div id="form-wrap">
        <form action="" method="POST">
         <h1>Customer Details</h1>
         <!-- <p>It's free and only takes a minute</p> -->
          <div class="form-group">
           <label for="first-name">First Name <i>(Max 30 Characters a-z and A-Z)</i></label>
            <input type="text" name="first_name" id="first-name" required>
          </div> 
          <div class="form-group">
            <label for="last-name">Last Name <i>(Max 30 Characters a-z and A-Z)</i></label>
            <input type="text" name="last_name" id="last-name" required>
    </div>
     <!--    <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" id="date">
          </div> -->
        <!--  <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
          </div>
         <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
          </div> -->
         <div class="form-group">
            <label for="number">Mobile Number <i>(10 Digit Number)</i></label>
            <input type="number" name="number" id="number" required>
          </div><br />
          <div class="form-group">
            <label for="number">Alternate Mobile Number <i>(10 Digit Number)</i></label>
            <input type="number" name="alt_number" id="number" >
          </div><br />
         <!-- <div class="gender">
            <label for="gender">Gender</label><br /><br />
            <label for="radio-m">Male</label>
            <input type="radio" name="radio-m" id="radio-m">
            <label for="radio-m">Female</label>
            <input type="radio" name="radio-f" id="radio-f">
          </div> -->
          <div class="form-group">
            <label for="address">Address</label>
            <input type="texarea" name="address" id="address" required>
          </div>
         <div class="form-group">
            <label for="city">City <i>(Max 30 Characters a-z and A-Z)</i></label>
            <input type="text" name="city" id="city" required>
          </div>
      <!--   <div class="form-group">
            <label for="pincode">Postal Code <i>(6 Digit Number)</i></label>
            <input type="text" name="pincode" id="pincode">
          </div>
          <div class="form-group">
            <label for="state">State <i>(Max 30 Characters a-z and A-Z)</i></label>
            <input type="text" name="state" id="state">
          </div> -->
          <br><br><br>
          <h1>Hall Details</h1>
          <div class="form-group">
            <label for="city">Hall 1 or Hall 2 <i>(Enter 1 or 2)</i></label>
            <input type="text" name="hall_type" id="city">
          </div>
          <div class="form-group">
            <label for="city">Slot <i>(Enter M,E or F for Morning, Evening or Full Day Slot)</i></label>
            <input type="text" name="slot" id="city">
          </div>
          <div class="form-group">
            <label for="date">Date of Slot <i   >(Enter dd/mm/yyyy)</i><br> <i style="color:red;">Note* Dates allowed 90 days from now</i></label></label>
            <input type="date" name="date_of_slot" id="date">
          </div>
          <div class="form-group">
            <label for="city">Event <i>(Enter the event)</i></label>
            <input type="text" name="event_name" id="city">
          </div>
          <div class="form-group">
            <label for="city">Guests <i>(Approximate number of Guests)</i></label>
            <input type="text" name="guests" id="city">
          </div>

          <br><br><br>
          <h1>Decoration</h1>
          <div class="form-group">
            <label for="city">Hall 1 or Hall 2 <i>(Enter 1 or 2)</i></label>
            <input type="text" name="hall_type" id="city">
          </div>
          <div class="form-group">
            <label for="city">Slot <i>(Enter M,E or F for Morning, Evening or Full Day Slot)</i></label>
            <input type="text" name="slot" id="city">
          </div>
          <div class="form-group">
            <label for="date">Date of Slot <i   >(Enter dd/mm/yyyy)</i><br> <i style="color:red;">Note* Dates allowed 90 days from now</i></label></label>
            <input type="date" name="date_of_slot" id="date">
          </div>
          <div class="form-group">
            <label for="city">Event <i>(Enter the event)</i></label>
            <input type="text" name="event_name" id="city">
          </div>
          <div class="form-group">
            <label for="city">Guests <i>(Approximate number of Guests)</i></label>
            <input type="text" name="guests" id="city">
          </div>
          <br><br><br>
          <h1>Catering</h1>
          <div class="form-group">
            <label for="city">Hall 1 or Hall 2 <i>(Enter 1 or 2)</i></label>
            <input type="text" name="hall_type" id="city">
          </div>
          <div class="form-group">
            <label for="city">Slot <i>(Enter M,E or F for Morning, Evening or Full Day Slot)</i></label>
            <input type="text" name="slot" id="city">
          </div>
          <div class="form-group">
            <label for="date">Date of Slot <i   >(Enter dd/mm/yyyy)</i><br> <i style="color:red;">Note* Dates allowed 90 days from now</i></label></label>
            <input type="date" name="date_of_slot" id="date">
          </div>
          <div class="form-group">
            <label for="city">Event <i>(Enter the event)</i></label>
            <input type="text" name="event_name" id="city">
          </div>
          <div class="form-group">
            <label for="city">Guests <i>(Approximate number of Guests)</i></label>
            <input type="text" name="guests" id="city">
          </div>
          <br><br><br>
          <h1>Hall Details 3</h1>
          <div class="form-group">
            <label for="city">Hall 1 or Hall 2 <i>(Enter 1 or 2)</i></label>
            <input type="text" name="hall_type" id="city">
          </div>
          <div class="form-group">
            <label for="city">Slot <i>(Enter M,E or F for Morning, Evening or Full Day Slot)</i></label>
            <input type="text" name="slot" id="city">
          </div>
          <div class="form-group">
            <label for="date">Date of Slot <i   >(Enter dd/mm/yyyy)</i><br> <i style="color:red;">Note* Dates allowed 90 days from now</i></label></label>
            <input type="date" name="date_of_slot" id="date">
          </div>
          <div class="form-group">
            <label for="city">Event <i>(Enter the event)</i></label>
            <input type="text" name="event_name" id="city">
          </div>
          <div class="form-group">
            <label for="city">Guests <i>(Approximate number of Guests)</i></label>
            <input type="text" name="guests" id="city">
          </div>
          <button type="submit" name="submit" class="btn"><b>Submit</b></button>
        <!--  <p class="bottom-text">By clicking the Sign Up, you agree to our
            <a href="#">Terms &amp; Conditions</a> and 
            <a href="#">Privacy Policy</a>
          </p> -->
        </form> 
      </div>
    </div>

</body>
</html>