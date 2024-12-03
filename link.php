<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
    <?php
    $host="localhost";
    $dbname="famhak";
    $username="root";
    $password= "";


    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $deliverypoint = $_POST['deliverypoint'];
    $pickuppoint =$_POST['pickuppoint'];
    $weight =$_POST['weight'];
}
$sql= "INSERT INTO qoute(deliverypoint, pickuppoint, weight)
        VALUES ('$deliverypoint', '$pickuppoint', '$weight')";
        if ($conn->query($sql) === TRUE) 
        {
            echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'qoute gotten successfully!',
            text: 'Welcome to Famhak Logistics.',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'index.php'; // Redirect back to the form or another page
            }
        });
     </script>";


        } else {
            echo "<script>
        alert('Error submitting your application. Please try again.');
        window.history.back(); // Go back to the form for correction
      </script>";
        }
    

    $conn->close();
        ?>
</body>
</html>