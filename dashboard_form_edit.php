<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: DASHBOARD/login.php");
}



?>



<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Dashboard Home</title>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="dh.css">
    <link rel="stylesheet" href="l.css">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!-- Including The Skeleton of the Dashboard -->
    <?php include 'dashboard_Skeleton.php' ?>

    <!-- --------------------------------------------------------------Including The Form -------------------------------------------------------------------->

    

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
            <?php

                    include'config.php';

                    $ids = $_GET['id'];
                    $showquery = "select * from customer_details where id={$ids}";
                    $showdata = mysqli_query($conn,$showquery);
                    $arrdata = mysqli_fetch_array($showdata);

                    if(isset($_POST['submit']))
                    {

                    $idupdate = $_GET['id'];

                    $first_name = $_POST['first_name'];
                    $last_name = $_POST['last_name'];
                    $number = $_POST['number'];
                    $alt_number = $_POST['alt_number'];
                    $address = $_POST['address'];
                    $city = $_POST['city'];

                    #$insertquery = "INSERT INTO customer_details(fname, lname, address, city, mobile1, mobile2) VALUES ('$first_name','$last_name','$address','$city','$number','$alt_number')";
                    
                    $query = "update customer_details set id=$idupdate, fname='$first_name', lname='$last_name', address='$address', city='$city', mobile1='$number', mobile2='$alt_number' where id=$idupdate ";
                            #The id is the db column name and the $idupdate and stuff is u know on top declared
                    mysqli_query($conn,$query);
                    
                    }


            ?>
          <div class="form-group">
           <label for="first-name">First Name <i>(Max 30 Characters a-z and A-Z)</i></label>
            <input type="text" name="first_name" id="first-name" value="<?php echo $arrdata['fname'] ?>" required>
          </div> 
          <div class="form-group">
            <label for="last-name">Last Name <i>(Max 30 Characters a-z and A-Z)</i></label>
            <input type="text" name="last_name" id="last-name" value="<?php echo $arrdata['lname'] ?>" required>
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
            <input type="number" name="number" id="number" value="<?php echo $arrdata['mobile1'] ?>" required>
          </div><br />
          <div class="form-group">
            <label for="number">Alternate Mobile Number <i>(10 Digit Number)</i></label>
            <input type="number" name="alt_number" id="number" value="<?php echo $arrdata['mobile2'] ?>" >
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
            <input type="texarea" name="address" id="address" value="<?php echo $arrdata['address'] ?>" required>
          </div>
         <div class="form-group">
            <label for="city">City <i>(Max 30 Characters a-z and A-Z)</i></label>
            <input type="text" name="city" id="city" value="<?php echo $arrdata['city'] ?>" required>
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
          <button type="submit" name="submit" class="btn"><b>Update </b></button>
        <!--  <p class="bottom-text">By clicking the Sign Up, you agree to our
            <a href="#">Terms &amp; Conditions</a> and 
            <a href="#">Privacy Policy</a>
          </p> -->
        </form> 
      </div>
    </div>

</body>
</html>


    <!-- --------------------------------------------------------------Including The Form -------------------------------------------------------------------->

    <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() 
    {
        sidebar.classList.toggle("active");
        if(sidebar.classList.contains("active")){
        sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
        }else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>

