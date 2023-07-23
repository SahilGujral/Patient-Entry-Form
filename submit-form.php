<?php
// Start session
session_start();

// Redirect if user is not logged in
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true)
{
    header("location: login.php");
}

// Connect to database
$conn = mysqli_connect("localhost", "root", "", "patiententryform");

// Check if connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get the form data
    $FirstName = $_POST["FirstName"];
    $MiddleName = $_POST["MiddleName"];
    $LastName = $_POST["LastName"];
    $Contactnumber = $_POST["Contactnumber"];
    $EmailAddress = $_POST["EmailAddress"];
    $Age = $_POST["Age"];
    $Gender = $_POST["Gender"];
    $DiseaseInformation = $_POST["DiseaseInformation"];
    #if(DiseaseInformation=="hypertension")
    $Systolic = $_POST["Systolic"];
    $Diastolic = $_POST["Diastolic"];
    $TSH = $_POST["TSH"];
    $T3 = $_POST["T3"];
    $T4 = $_POST["T4"];
    $HbA1c = $_POST["HbA1c"];
    $BeforeFastSugar = $_POST["BeforeFastSugar"];
    $AfterFastSugar = $_POST["AfterFastSugar"];
    $DoctorName = $_POST["DoctorName"];
    $TreatmentSince = $_POST["TreatmentSince"];

    
    // Prepare the INSERT query
    $sql = "INSERT INTO form (FirstName, MiddleName, LastName, Contactnumber, EmailAddress, Age, Gender, DiseaseInformation,Systolic,Diastolic,TSH,T3,T4,HbA1c,BeforeFastSugar,AfterFastSugar,DoctorName,TreatmentSince) 
            VALUES (' $FirstName', '$MiddleName', '$LastName', ' $Contactnumber', ' $EmailAddress', ' $Age', '$Gender', '$DiseaseInformation','$Systolic','$Diastolic','$TSH','$T3','$T4','$HbA1c','$BeforeFastSugar','$AfterFastSugar','$DoctorName','$TreatmentSince')";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        #console.log(DiseaseInformation);
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>

