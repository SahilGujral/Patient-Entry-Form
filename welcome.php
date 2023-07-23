<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
        body {
            background-color: #ffffff;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            font-size: 36px;
            color: #333;
        }

        form {
        
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
            max-width: 600px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
            text-align: left;
        }

        input[type="text"], input[type="number"], select {
            display: block;
            margin-bottom: 20px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #f2f2f2;
            color: #333;
            font-size: 16px;
            width: 100%;
        }

        .hypertension, .thyroid, .diabetic {
            display: none;
        }

        .hypertension input, .thyroid input, .diabetic input {
            margin-bottom: 10px;
        }

        button[type="submit"] {
            display: block;
            margin: 0 auto;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .doctor {
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 600px;
        }

        h3 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }

        p {
            color: #333;
            font-size: 16px;
            line-height: 1.5;
        }

        /* Additional styles for doctor */
        .doctor img {
            float: left;
            margin-right: 20px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .doctor h4 {
            margin-bottom: 5px;
            font-size: 20px;
            color: #333;
        }

        .doctor h5 {
            margin: 0;
            font-size: 16px;
            color: #666;
        }

        .doctor p {
            margin-bottom: 10px;
        }

        .doctor button {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color: #2e2e2e;
        }

        form {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            margin-top: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #2e2e2e;
            text-align: left;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: url('https://cdn3.iconfinder.com/data/icons/google-material-design-icons/48/ic_keyboard_arrow_down_48px-512.png') no-repeat right #fff;
            background-size: 25px;
            background-position-x: 97%;
            background-position-y: 50%;
        }

        button[type="submit"] {
            background-color: #f23e3e;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .doctor {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            margin-top: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .doctor img {
            border-radius: 50%;
            max-width: 200px;
            margin-bottom: 20px;
        }

        .doctor h4 {
            margin-bottom: 10px;
            color: #2e2e2e;
        }

        .doctor h5 {
            margin-bottom: 10px;
            color: #f23e3e;
        }

        .doctor p {
            margin-bottom: 10px;
            color: #2e2e2e;
        }

        .doctor button {
            background-color: #f23e3e;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        .input-group {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
  }
  
  .input-group label {
    width: 30%;
    margin-right: 10px;
  }
  
  .input-group input {
    width: 60%;
  }
         p {
      text-align: left;
    }

    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Patient Entry Form</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now fill your details</h3>
<hr>
<form action="submit-form.php" method="post">
  <div class="form-group">
  <p><b><u>Personal Information:</u></b></p>
  <div class="input-group">
  <label for="FirstName">First Name:</label>
  <input type="text" id="FirstName" name="FirstName">
  <label for="MiddleName">Middle Name:</label>
  <input type="text" id="MiddleName" name="MiddleName">
  <label for="LastName">Last Name:</label>
  <input type="text" id="LastName" name="LastName">
</div>
          
        <div class="input-group">
        <label for="Contactnumber">Contact number</label>
        <input type="number" id="Contactnumber" name="Contactnumber" required>
        </div>
        <div class="input-group">
        <label for="EmailAddress">Email Address</label>
        <input type="text" id="EmailAddress" name="EmailAddress" required>
        </div>
        <div class="input-group">
        <label for="Age">Age</label>
        <input type="number" id="Age" name="Age" required>
        </div>
        <label for="Gender">Gender</label>
        <select id="Gender" name="Gender">
            <option value="">--Please select--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
        <br>
        
        <label for="DiseaseInformation"><u>Disease Information:</u></label>
        <select name="DiseaseInformation" id="DiseaseInformation" onchange="showFields()">
            <option value="">Select a disease</option>
            <option value="hypertension">Hypertension</option>
            <option value="thyroid">Thyroid</option>
            <option value="diabetic">Diabetic</option>
        </select>

        <div id="hypertensionFields" class="input-group">
            <label for="Systolic">Systolic:</label>
            <input type="number" name="Systolic" id="Systolic" placeholder="Enter systolic">
            <label for="Diastolic">Diastolic:</label>
            <input type="number" name="Diastolic" id="Diastolic" placeholder="Enter diastolic">
        </div>

        <div id="thyroidFields" class="input-group">
            <label for="TSH">TSH:</label>
            <input type="number" name="TSH" id="TSH" placeholder="Enter TSH">
            <label for="T3">T3:</label>
            <input type="number" name="T3" id="T3" placeholder="Enter T3">
            <label for="T4">T4:</label>
            <input type="number" name="T4" id="T4" placeholder="Enter T4">
        </div>

        <div id="diabeticFields" class="input-group">
            <label for="HbA1c">HbA1c:</label>
            <input type="number" name="HbA1c" id="HbA1c" placeholder="Enter HbA1c">
            <label for="BeforeFastSugar">Before Fast Sugar:</label>
            <input type="number" name="BeforeFastSugar" id="BeforeFastSugar" placeholder="Enter before fast sugar">
            <label for="AfterFastSugar">After Fast Sugar:</label>
            <input type="number" name="AfterFastSugar" id="AfterFastSugar" placeholder="Enter after fast sugar">
      </div>
      <br>
        <label><u>Treatment Details:</u></label>
        <br>
        <label for="DoctorName">Doctor Name:</label>
        <input type="text" id="DoctorName" name="DoctorName" required>
        <label for="name">Treatment Since(in months):</label>
        <input type="number" id="TreatmentSince" name="TreatmentSince" required>
        <button type="submit">Submit</button>
    </form>
    <script>
        function showFields() {
            var disease = document.getElementById("DiseaseInformation").value;
            var hypertensionFields = document.getElementById("hypertensionFields");
            var thyroidFields = document.getElementById("thyroidFields");
            var diabeticFields = document.getElementById("diabeticFields");

            switch (disease) {
                case "hypertension":
                    hypertensionFields.style.display = "block";
                    thyroidFields.style.display = "none";
                    diabeticFields.style.display = "none";
                    break;
                case "thyroid":
                    hypertensionFields.style.display = "none";
                    thyroidFields.style.display = "block";
                    diabeticFields.style.display = "none";
                    break;
                case "diabetic":
                    hypertensionFields.style.display = "none";
                    thyroidFields.style.display = "none";
                    diabeticFields.style.display = "block";
                    break;
                default:
                    hypertensionFields.style.display = "none";
                    thyroidFields.style.display = "none";
                    diabeticFields.style.display = "none";
            }
        }
    </script>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
