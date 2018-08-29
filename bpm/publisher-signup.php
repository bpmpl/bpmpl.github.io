<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $title = $_POST['title'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $position = $_POST['position'];
    $cname = $_POST['cname'];
    $url = $_POST['url'];
    $entity = $_POST['entity-type'];
    $model = $_POST['model'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $landline = $_POST['landline'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $address = $_POST['address'];
    $semail = $_POST['semail'];
    $heared = $_POST['heared-about'];
    $wurl = $_POST['wurl'];
    $wcategory = $_POST['wcategory'];
    $wlang = $_POST['wlang'];
    $uvpm = $_POST['uvpm'];
    $pvpm = $_POST['pvpm'];
    $gender = $_POST['vgender'];
    $vage = $_POST['vage'];
    $adformat = $_POST['ad-format'];
    $wurl1 = $_POST['wurl1'];
    $wlang1 = $_POST['wlang1'];
    $uvpm1 = $_POST['uvpm1'];
    $pvpm1 = $_POST['pvpm1'];
    $list = $_POST['list'];

    $dc=mysqli_connect("localhost","root","raghib@1998", "bpm")or die('Error connecting to MySQL server.');
    $query = "INSERT INTO publisher()values('$username','$password','$title','$firstname','$middlename','$lastname',
        '$position','$cname','$url','$entity','$model','$email','$phone','$landline','$country','$state','$city','$zipcode',
        '$address','$semail','$heared','$wurl','$wcategory','$wlang','$uvpm','$pvpm','$gender','$vage','$adformat','$wurl1','$wlang1','$uvpm1','$pvpm1','$list')";
    $result=mysqli_query($dc,$query);
    echo mysqli_error($dc);
    mysqli_close($dc);

    //$con = mysqli_connect("localhost","root","raghib@1998","bpm") or die("can't connect to databaase");
?>