<?php
        $service = $_POST['service'];
        $sdate = $_POST['startdate'];
        $edate = $_POST['enddate'];
        $budget = $_POST['budget'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $cname = $_POST['cname'];
        $aboutproject = $_POST['aboutproject'];
        $guidance = $_POST['guidance'];
        $dc=mysqli_connect("localhost","root","raghib@1998", "bpm")or die('Error connecting to MySQL server.');
        $query="INSERT INTO clientData()VALUES('$service','$sdate','$edate','$budget','$name','$email','$phonenumber','$cname','$aboutproject','$guidance')";
        #$result=mysqli_query($dc,$query) or die("registration couldnt be completed!!");
        if (!mysqli_query($dc,$query)) {
            $error = mysqli_error($dc);
        echo $error;
        }
        mysqli_close($dc);
        header("location:https://www.bridgingpointsmedia.com/service-landing-page/")
    ?>
