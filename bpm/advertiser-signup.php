<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $title = $_POST['title'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $landline = $_POST['landline'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    $cname = $_POST['cname'];
    $url = $_POST['url'];
    $whoami = $_POST['whoami'];
    $cprofile = $_POST['cprofile'];
    $guidance = $_POST['guidance'];
    $dc=mysqli_connect("localhost","root","raghib@1998", "bpm")or die('Error connecting to MySQL server.');
    $query = "INSERT INTO advertiser()values('$username','$password','$title','$firstname','$middlename','$lastname','$email','$phone','$landline','$country','$state','$city','$zipcode',
        '$address','$position','$cname','$url','$whoami','$cprofile','$guidance')";
    $result=mysqli_query($dc,$query);
    echo mysqli_error($dc);
    mysqli_close($dc);
?>