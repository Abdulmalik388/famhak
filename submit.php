<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title> Famhak.com</title>
</head>

<body>


    <?php


    $host = "localhost";
    $dbname = "famhak";
    $username = "root"; // Database username (default for XAMPP/WAMP)
    $password = ""; // Database password (default is empty for XAMPP/WAMP)
    
    // Step 2: Connect to the database
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Step 3: Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $full_name = $_POST['full_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $nin = $_POST['nin'];
        $guarantor = $_POST['guarantor'];
        $guarantorresident = $_POST['guarantorresident'];
        $license = $_POST['license'];
        $experience = $_POST['experience'];
        $routes = $_POST['routes'];

        // Step 4: Insert data into the database
        $sql = "INSERT INTO riders (full_name, phone, email, address, nin, guarantor, guarantorresident, license, experience, routes)
            VALUES ('$full_name', '$phone', '$email', '$address', '$nin', '$guarantor', '$guarantorresident', '$license', '$experience', '$routes')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Application Submitted!',
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
    }


    $conn->close();
    ?>

    <body>

    </body>

</html>