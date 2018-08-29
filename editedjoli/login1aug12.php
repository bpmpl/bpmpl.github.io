<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>miniBANK</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css" />
    <link rel="stylesheet" href="login1.css">
    <!-- EOF CSS INCLUDE -->
    <?php
                        //$username=$_SESSION['username'];
                        //$password=$_SESSION['password'];
                        $db=mysqli_connect("localhost","root","raghib@1998","bpm");
                        $query="SELECT * from publisher";
                        $query1="SELECT * from advertiser";
                        $query2="SELECT * from wearehiring";
                        // <!-- $query1="SELECT * from allAcc where username='$username' ";
                        // $query2="SELECT * from allTransaction where username='$username' and type='DEBIT' order by date_of_transaction desc,time_of_transaction desc limit 1";
                        // $query3="SELECT * from allTransaction where username='$username' and type='CREDIT' order by date_of_transaction desc,time_of_transaction desc limit 1";
                        // $getmessage="SELECT count(message) as messages from notification where username='$username' and isReaded=0";
                        // $message="SELECT * from notification where username='$username' and isReaded=0 order by date_of_notification desc,time_of_notification desc";
                        // $messageall="SELECT * from notification where username='$username' order by date_of_notification desc,time_of_notification desc"; -->
                        $result=mysqli_query($db,$query) or die("login couldnt be completed!!");
                        $result1=mysqli_query($db,$query) or die("login couldnt be completed!!");
                        $result2=mysqli_query($db,$query1) or die("login couldnt be completed!!");
                        $result21=mysqli_query($db,$query1) or die("login couldnt be completed!!");
                        $result3=mysqli_query($db,$query2) or die("login couldnt be completed!!");
                        $result31=mysqli_query($db,$query2) or die("login couldnt be completed!!");
                        // <!-- $result1=mysqli_query($db,$query1) or die("account no couldnt be found!!");
                        // $result2=mysqli_query($db,$query2) or die("account no couldnt be found!!");
                        // $result3=mysqli_query($db,$query3) or die("account no couldnt be found!!"); 
                        // $getmessageresult=mysqli_query($db,$getmessage) or die("account no couldnt be found!!");   
                        // $messageresult=mysqli_query($db,$message) or die("account no couldnt be found!!"); 
                        // $messageallresult=mysqli_query($db,$messageall) or die("account no couldnt be found!!");    -->
                        // <!-- $row1=mysqli_fetch_array($result1);
                        // $row2=mysqli_fetch_array($result2);
                        // $row3=mysqli_fetch_array($result3);
                        // $getmessagerow=mysqli_fetch_array($getmessageresult); -->
                        
                        mysqli_close($db);
            ?>
        <script>
            function myFunction(contentId) {
                var arr = document.getElementsByClassName("sem");
                for (var i = 0; i < arr.length; i++) {
                    arr[i].style.display = "none";
                }
                var x = document.getElementById(contentId);


                contentId.style.display = "block";
                $(event.target).click(function () {
                    $(".x-navigation-control").click();
                    return false;
                });
            }

            function myFunction1(contentId) {
                var arr = document.getElementsByClassName("sem");
                for (var i = 0; i < arr.length; i++) {
                    arr[i].style.display = "none";
                }
                var x = document.getElementById(contentId);


                contentId.style.display = "block";
            }

            function myFunction2(contentId) {
                var arr = document.getElementsByClassName("sem1");
                for (var i = 0; i < arr.length; i++) {
                    arr[i].style.display = "none";
                }
                var x = document.getElementById(contentId);


                contentId.style.display = "block";
            }

            function myFunction3(contentId) {
                var arr = document.getElementsByClassName("sem3");
                for (var i = 0; i < arr.length; i++) {
                    arr[i].style.display = "none";
                }
                var x = document.getElementById(contentId);


                contentId.style.display = "block";
            }

        </script>

        <style>
            .sem,
            .sem3 {
                display: none;
            }

            .table-responsive {
                height: 500px;
                overflow: auto;
            }
        </style>
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <div id="menu" class="page-sidebar" style="background-color : white;">
            <!-- START X-NAVIGATION -->
            <ul class="x-navigation">
                <li class="xn-logo">
                    <a href="index.html" style="background-color : rgb(31, 82, 121);;">
                        <span class="fa fa-university" style="font-size: 24px; color : white;"></span> BPM</a>
                    <a href="#" class="x-navigation-control"></a>
                </li>
                <li class="xn-profile">
                    <a href="#" class="profile-mini">
                        <img src="assets/images/users/avatar.jpg" alt="" />
                    </a>
                    <div class="profile">
                        <div class="profile-image">
                            <img src="assets/images/users/avatar.jpg" alt="" />
                        </div>
                        <div class="profile-data">
                            <div class="profile-data-name">
                                <?php echo $row['name'];?>
                            </div>
                            <div class="profile-data-title">Welcome</div>
                        </div>
                        <div class="profile-controls">
                            <a href="" class="profile-control-left">
                                <span class="fa fa-info"></span>
                            </a>
                            <a href="" class="profile-control-right">
                                <span class="fa fa-envelope"></span>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="">
                    <a onclick="myFunction3(publisher)">
                        <span class="fa fa-table"></span>
                        <span class="xn-text">Publishers</span>
                    </a>
                </li>
                <li class="">
                    <a onclick="myFunction3(advertiser)">
                        <span class="fa fa-inr"></span>
                        <span class="xn-text">Advertisers</span>
                    </a>
                </li>
                <li class="">
                    <a onclick="myFunction3(wearehiring)">
                        <span class="fa fa-share-square-o"></span>
                        <span class="xn-text">We Are Hiring</span>
                    </a>
                </li>
                <li class="">
                    <a onclick="myFunction(withdraw)">
                        <span class="fa fa-briefcase"></span>
                        <span class="xn-text">Withdraw Amount</span>
                    </a>
                </li>
                <li class="">
                    <a onclick="myFunction(deposit)">
                        <span class="fa fa-download"></span>
                        <span class="xn-text">Deposit Amount</span>
                    </a>
                </li>
                <li class="">
                    <a onclick="myFunction(message)">
                        <span class="fa fa-comments"></span>
                        <span class="xn-text">Messages</span>
                    </a>
                </li>

            </ul>
            <!-- END X-NAVIGATION -->
        </div>
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- TOGGLE NAVIGATION -->
                <li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize">
                        <span class="fa fa-dedent"></span>
                    </a>
                </li>
                <!-- END TOGGLE NAVIGATION -->
                <!-- SEARCH -->
                <li class="xn-search">
                    <form role="form">
                        <input type="text" name="search" placeholder="Search..." />
                    </form>
                </li>
                <!-- END SEARCH -->
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right" style="position : fixed; right :1em;">
                    <a href="#" class="mb-control" data-box="#mb-signout">
                        <span class="fa fa-sign-out"></span>
                    </a>
                </li>
                <!-- END SIGN OUT -->
                <!-- MESSAGES -->



                <!-- END MESSAGES -->
                <!-- TASKS -->

                <!-- END TASKS -->
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->


            <!-- START CONTENT FRAME -->
            <div class="main-content-all">
                <!-- publisher details -->
                <div class="col-md-12 main-content sem3" id="publisher">

                    <div class="col-md-6 list-all-client">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Default</h3>
                                <ul class="panel-controls">
                                    <li>
                                        <a href="#" class="panel-collapse">
                                            <span class="fa fa-angle-down"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="panel-refresh">
                                            <span class="fa fa-refresh"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="panel-remove">
                                            <span class="fa fa-times"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Company</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($result))
                                            {
                                        ?>
                                            <tr onclick="myFunction1(publisher<?php echo $row['username'] ?>)">
                                                <td>
                                                    <?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['position'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['company'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['username'] ?>
                                                </td>
                                            </tr>
                                            <?php } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 single-client">
                            <?php
                                while($row1=mysqli_fetch_array($result1))
                                {
                            ?>
                            <div class="sem" id="publisher<?php echo $row1['username'] ?>">
                                <div class="panel panel-default tabs">
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active">
                                            <a href="#tab8<?php echo $row1['username'] ?>publisher" data-toggle="tab">Personal Details</a>
                                        </li>
                                        <li>
                                            <a href="#tab9<?php echo $row1['username'] ?>publisher" data-toggle="tab">Company Details</a>
                                        </li>
                                        <li>
                                            <a href="#tab10<?php echo $row1['username'] ?>publisher" data-toggle="tab">Website Details</a>
                                        </li>
                                        <li>
                                            <a href="#tab11<?php echo $row1['username'] ?>publisher" data-toggle="tab">Other Details</a>
                                        </li>

                                    </ul>
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="tab8<?php echo $row1['username']?>publisher">
                                            <span>
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <h2>
                                                <?php echo $row1['firstname']." ".$row1['middlename']." ".$row1['lastname'] ?>
                                            </h2>
                                            <h4>(
                                                <?php echo $row1['position'] ?>)</h4>
                                            <h3>Personal Details</h3>
                                            <div class="client-details">
                                                <table>
                                                    <tbody>

                                                        <tr>
                                                            <td>Phone</td>
                                                            <td>
                                                                <?php echo $row1['phone'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email</td>
                                                            <td>
                                                                <?php echo $row1['email'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Skype ID</td>
                                                            <td>
                                                                <?php echo $row1['skype'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Landline</td>
                                                            <td>
                                                                <?php echo $row1['landline'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Country</td>
                                                            <td>
                                                                <?php echo $row1['country'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>State</td>
                                                            <td>
                                                                <?php echo $row1['state'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>City</td>
                                                            <td>
                                                                <?php echo $row1['city'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zip Code</td>
                                                            <td>
                                                                <?php echo $row1['zipcode'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Address</td>
                                                            <td>
                                                                <?php echo $row1['address'] ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="control-buttons">
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-phone"> Call Juned</i>
                                                    </span>
                                                </button>
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-envelope-o"> Mail Juned</i>
                                                    </span>
                                                </button>
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-skype"> Skype Juned</i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="tab-pane " id="tab9<?php echo $row1['username']?>publisher">
                                            <span>
                                                <i class="fa fa-building-o"></i>
                                            </span>
                                            <h2>
                                                <?php echo $row1['company'] ?>
                                            </h2>
                                            <h4>(
                                                <?php echo $row1['entity'] ?>)</h4>
                                            <h3>Company Details</h3>
                                            <div class="client-details">
                                                <table>
                                                    <tbody>

                                                        <tr>
                                                            <td>Position / Designation</td>
                                                            <td>
                                                                <?php echo $row1['position'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Company Name</td>
                                                            <td>
                                                                <?php echo $row1['company'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Company Website</td>
                                                            <td>
                                                                <?php echo $row1['curl'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Legal Entity Type</td>
                                                            <td>
                                                                <?php echo $row1['entity'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Primary Business Model</td>
                                                            <td>
                                                                <?php echo $row1['model'] ?>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="control-buttons">
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-phone"> Call Juned</i>
                                                    </span>
                                                </button>
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-envelope-o"> Mail Juned</i>
                                                    </span>
                                                </button>
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-skype"> Skype Juned</i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="tab-pane " id="tab10<?php echo $row1['username']?>publisher">
                                            <span>
                                                <i class="fa fa-globe"></i>
                                            </span>
                                            <h2>
                                                <?php echo $row1['curl'] ?>
                                            </h2>
                                            <h4>(
                                                <?php echo $row1['company'] ?>)</h4>
                                            <h3>Website Details</h3>
                                            <div class="client-details">
                                                <table>
                                                    <tbody>

                                                        <tr>
                                                            <td>Website Primary Category</td>
                                                            <td>
                                                                <?php echo $row1['wcategory'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Site Language</td>
                                                            <td>
                                                                <?php echo $row1['wlang'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unique Visitors Per Month</td>
                                                            <td>
                                                                <?php echo $row1['uvpm'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Page Views Per Month</td>
                                                            <td>
                                                                <?php echo $row1['pvpm'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gender of Visitors</td>
                                                            <td>
                                                                <?php echo $row1['gender'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Age of Visitors</td>
                                                            <td>
                                                                <?php echo $row1['vage'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Acceptable Ad Format</td>
                                                            <td>
                                                                <?php echo $row1['adformat'] ?>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="control-buttons">
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-phone"> Call Juned</i>
                                                    </span>
                                                </button>
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-envelope-o"> Mail Juned</i>
                                                    </span>
                                                </button>
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-skype"> Skype Juned</i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="tab-pane " id="tab11<?php echo $row1['username']?>publisher">
                                            <span>
                                                <i class="fa fa-briefcase"></i>
                                            </span>
                                            <h2>Additional Information</h2>
                                            <h4>(
                                                <?php echo $row1['company'] ?>)</h4>
                                            <div class="client-details">
                                                <table>
                                                    <tbody>

                                                        <tr>
                                                            <td>Additional Website URL</td>
                                                            <td>
                                                                <?php echo $row1['wurl1'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Site Language</td>
                                                            <td>
                                                                <?php echo $row1['wlang1'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unique Visitors Per Month</td>
                                                            <td>
                                                                <?php echo $row1['uvpm1'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Page Views Per Month</td>
                                                            <td>
                                                                <?php echo $row1['pvpm1'] ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="hearedfrom">
                                                    <p style="font-size:1.32em; font-weight:1000;">Have other websites?</p>
                                                    <p>
                                                        <?php echo $row1['list'] ?>
                                                    </p>
                                                </div>
                                                <div class="hearedfrom">
                                                    <p style="font-size:1.32em; font-weight:1000;">Where have you heared about US?</p>
                                                    <p>
                                                        <?php echo $row1['heared'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="control-buttons">
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-phone"> Call Juned</i>
                                                    </span>
                                                </button>
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-envelope-o"> Mail Juned</i>
                                                    </span>
                                                </button>
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-skype"> Skype Juned</i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php }?>
                    </div>

                </div>
                <div class="col-md-12 main-content sem3" id="advertiser">

                    <div class="col-md-6 list-all-client">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Default</h3>
                                <ul class="panel-controls">
                                    <li>
                                        <a href="#" class="panel-collapse">
                                            <span class="fa fa-angle-down"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="panel-refresh">
                                            <span class="fa fa-refresh"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="panel-remove">
                                            <span class="fa fa-times"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Company</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while($row2=mysqli_fetch_array($result2))
                                            {
                                        ?>
                                            <tr onclick="myFunction1(<?php echo $row2['username'] ?>advertiser)">
                                                <td>
                                                    <?php echo $row2['firstname']." ".$row2['middlename']." ".$row2['lastname'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row2['position'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row2['company'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row2['username'] ?>
                                                </td>
                                            </tr>
                                            <?php } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 single-client">
                        <?php
                                while($row21=mysqli_fetch_array($result21))
                                {
                            ?>
                            <div class="sem" id="<?php echo $row21['username'] ?>advertiser">
                                <div class="panel panel-default tabs">
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active">
                                            <a href="#tab8<?php echo $row21['username'] ?>advertiser" data-toggle="tab">Personal Details</a>
                                        </li>
                                        <li>
                                            <a href="#tab9<?php echo $row21['username'] ?>advertiser" data-toggle="tab">Company Details</a>
                                        </li>
                                    </ul>
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="tab8<?php echo $row21['username']?>advertiser">
                                            <span>
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <h2>
                                                <?php echo $row21['firstname']." ".$row21['middlename']." ".$row21['lastname'] ?>
                                            </h2>
                                            <h4>(
                                                <?php echo $row21['position'] ?>)</h4>
                                            <h3>Personal Details</h3>
                                            <div class="client-details">
                                                <table>
                                                    <tbody>

                                                        <tr>
                                                            <td>Phone</td>
                                                            <td>
                                                                <?php echo $row21['phone'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email</td>
                                                            <td>
                                                                <?php echo $row21['email'] ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Landline</td>
                                                            <td>
                                                                <?php echo $row21['landline'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Country</td>
                                                            <td>
                                                                <?php echo $row21['country'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>State</td>
                                                            <td>
                                                                <?php echo $row21['state'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>City</td>
                                                            <td>
                                                                <?php echo $row21['city'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zip Code</td>
                                                            <td>
                                                                <?php echo $row21['zipcode'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Address</td>
                                                            <td>
                                                                <?php echo $row21['address'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Client Type</td>
                                                            <td>
                                                                <?php echo $row21['whoami'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Position / Designation</td>
                                                            <td>
                                                                <?php echo $row21['position'] ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="control-buttons">
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-phone"> Call Juned</i>
                                                    </span>
                                                </button>
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-envelope-o"> Mail Juned</i>
                                                    </span>
                                                </button>
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-skype"> Skype Juned</i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="tab-pane " id="tab9<?php echo $row21['username']?>advertiser">
                                            <span>
                                                <i class="fa fa-building-o"></i>
                                            </span>
                                            <h2>
                                                <?php echo $row21['company'] ?>
                                            </h2>
                                            <h4>(
                                                <?php echo $row21['entity'] ?>)</h4>
                                            <h3>Company Details</h3>
                                            <div class="client-details">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>Company Name</td>
                                                            <td>
                                                                <?php echo $row21['company'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Company Website</td>
                                                            <td>
                                                                <?php echo $row21['curl'] ?>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <div class="hearedfrom">
                                                    <p style="font-size:1.32em; font-weight:1000;">Brief about company Profile?</p>
                                                    <p>
                                                        <?php echo $row21['cprofile'] ?>
                                                    </p>

                                                    <p style="font-size:1.32em; font-weight:1000;">Any specific guidance?</p>
                                                    <p>
                                                        <?php echo $row21['guidance'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="control-buttons">
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-phone"> Call Juned</i>
                                                    </span>
                                                </button>
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-envelope-o"> Mail Juned</i>
                                                    </span>
                                                </button>
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-skype"> Skype Juned</i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <?php }?>
                    </div>

                </div>
                <div class="col-md-12 main-content sem3" id="wearehiring">

                    <div class="col-md-6 list-all-client">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Default</h3>
                                <ul class="panel-controls">
                                    <li>
                                        <a href="#" class="panel-collapse">
                                            <span class="fa fa-angle-down"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="panel-refresh">
                                            <span class="fa fa-refresh"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="panel-remove">
                                            <span class="fa fa-times"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Subject</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                                        while($row3=mysqli_fetch_array($result3))
                                                        {
                                                    ?>
                                            <tr onclick="myFunction1(<?php echo $row3['sno'] ?>wearehiring)">
                                                <td>
                                                    <?php echo $row3['fullname'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row3['subject'] ?>
                                                </td>
                                            </tr>
                                            <?php } 
                                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 single-client">
                        <?php
                                            while($row31=mysqli_fetch_array($result31))
                                            {
                                        ?>
                            <div class="sem" id="<?php echo $row31['sno'] ?>wearehiring">
                                <div class="panel panel-default tabs">
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active">
                                            <a href="#tab8<?php echo $row31['sno'] ?>wearehiring" data-toggle="tab">Applicant Details</a>
                                        </li>
                                    </ul>
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="tab8<?php echo $row31['sno']?>wearehiring">
                                            <span>
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <h2>
                                                <?php echo $row31['fullname'] ?>
                                            </h2>
                                            <h4>(
                                                <?php echo $row31['subject'] ?>)</h4>
                                            <h3>Personal Details</h3>
                                            <div class="client-details">
                                                <table>
                                                    <tbody>

                                                        <tr>
                                                            <td>Phone</td>
                                                            <td>
                                                                <?php echo $row31['phone'] ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email</td>
                                                            <td>
                                                                <?php echo $row31['email'] ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="hearedfrom">
                                                    <p style="font-size:1.32em; font-weight:1000;">Subject :</p>
                                                    <p>
                                                        <?php echo $row31['subject'] ?>
                                                    </p>

                                                    <p style="font-size:1.32em; font-weight:1000;">Message : </p>
                                                    <p>
                                                        <?php echo $row31['message'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="control-buttons">
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-phone"> Call Juned</i>
                                                    </span>
                                                </button>
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-envelope-o"> Mail Juned</i>
                                                    </span>
                                                </button>
                                                <button class="button">
                                                    <span>
                                                        <i class="fa fa-skype"> View Resume</i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php }?>
                    </div>

                </div>
                <div class="col-md-12 main-content sem3" id="messages">
                      <div>
                        
                      </div>  
                </div>
            </div>
            <!-- publisher details ends -->

            <!-- advertiser details begin -->


        </div>

        <!-- advertiser details ends -->

        <!-- we are hiring begins -->


    </div>

    <!-- we are hiring ends -->
    </div>

    </div>
    <!-- END CONTENT FRAME -->
    <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->

    <!-- MESSAGE BOX-->
    <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
        <div class="mb-container">
            <div class="mb-middle">
                <div class="mb-title">
                    <span class="fa fa-sign-out"></span> Log
                    <strong>Out</strong> ?</div>
                <div class="mb-content">
                    <p>Are you sure you want to log out?</p>
                    <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                </div>
                <div class="mb-footer">
                    <div class="pull-right">
                        <a href="logout.php" class="btn btn-success btn-lg">Yes</a>
                        <button class="btn btn-default btn-lg mb-control-close">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MESSAGE BOX-->

    <!-- START PRELOADS -->
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>

    <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
    <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>
    <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
    <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
    <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
    <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
    <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>

    <script type="text/javascript" src="js/plugins/moment.min.js"></script>
    <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- END THIS PAGE PLUGINS-->

    <!-- START TEMPLATE -->
    <!-- <script type="text/javascript" src="js/settings.js"></script> -->

    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>

    <script type="text/javascript" src="js/demo_dashboard.js"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
</body>

</html>