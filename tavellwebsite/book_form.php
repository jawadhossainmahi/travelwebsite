<?php
$conn = mysqli_connect('localhost', 'root', '', 'travell_website');
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guest = $_POST['guest'];
    $arivals = $_POST['arivals'];
    $leaving = $_POST['leaving'];

    if ($name == null || $email == null || $phone == null || $address == null || $location == null || $guest == null || $arivals == null || $leaving == null) {
        header('location:/projects/tavellwebsite/book.php?submitee=false');
    }
    else {
        
        $sqli = "INSERT INTO `form_travel` ( `name`, `email`, `phone`, `address`, `location`, `guest`, `arivals`, `leaving`, `booking_date`) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guest', '$arivals', '$leaving', current_timestamp())";

        $result = mysqli_query($conn, $sqli);
        if ($result) {
            header('location:/projects/tavellwebsite/book.php?submitee=true');
        }
        
    }
}
