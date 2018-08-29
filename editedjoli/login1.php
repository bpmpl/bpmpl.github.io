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
                    <a onclick="myFunction3(blogs)">
                        <span class="fa fa-briefcase"></span>
                        <span class="xn-text">Blogs</span>
                    </a>
                </li>
                <li class="">
                    <a onclick="myFunction(deposit)">
                        <span class="fa fa-download"></span>
                        <span class="xn-text">Deposit Amount</span>
                    </a>
                </li>
                <li class="">
                    <a onclick="myFunction3(messages)">
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
                                <h3 class="panel-title">Publisher Clients</h3>
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
                                <h3 class="panel-title">Advertiser Clientt</h3>
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
                                <h3 class="panel-title">Applicants</h3>
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
                    <div class="col-md-9 messages-recieved">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <span class="fa fa-comments"></span> Messages</h3>
                                <div class="pull-right">
                                    <span class="label label-primary">Dmitry</span>,
                                    <span class="label label-primary">John</span>
                                </div>
                            </div>
                            <div class="panel-body">
                        
                                <div class="messages messages-img">
                                    <div class="item in">
                                        <div class="image">
                                            <img src="assets/images/users/user2.jpg" alt="John Doe">
                                        </div>
                                        <div class="text">
                                            <div class="heading">
                                                <a href="#">John Doe</a>
                                                <span class="date">08:33</span>
                                            </div>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis suscipit eros vitae iaculis.
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image">
                                            <img src="assets/images/users/user.jpg" alt="Dmitry Ivaniuk">
                                        </div>
                                        <div class="text">
                                            <div class="heading">
                                                <a href="#">Dmitry Ivaniuk</a>
                                                <span class="date">08:27</span>
                                            </div>
                                            Quisque ultricies turpis pulvinar lectus semper, eget fringilla purus tincidunt.
                                        </div>
                                    </div>
                                    <div class="item in">
                                        <div class="image">
                                            <img src="assets/images/users/user2.jpg" alt="John Doe">
                                        </div>
                                        <div class="text">
                                            <div class="heading">
                                                <a href="#">John Doe</a>
                                                <span class="date">08:25</span>
                                            </div>
                                            Fusce dictum mauris quis velit cursus, consectetur tempor justo volutpat.
                                        </div>
                                    </div>
                                </div>
                        
                            </div>
                            <div class="panel-footer">
                                <div class="input-group">
                                    <!-- <input type="text" class="form-control" placeholder="Type a message..." /> -->
                                    <textarea name="message" class="form-control" id="reply" cols="150" rows="10"></textarea>
                                    <span class="input-group-btn" style="display:block;">
                                        <button class="btn btn-default" type="button" style="display:block;">Send</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>        

                    <div class="col-md-3 recent-messages">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Recent Contacts</h3>
                            </div>
                            <div class="panel-body list-group list-group-contacts">
                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali" />
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Singer-Songwriter</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded">
                                            <span class="fa fa-pencil"></span>
                                        </button>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk" />
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Web Developer/Designer</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded">
                                            <span class="fa fa-pencil"></span>
                                        </button>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe" />
                                    <span class="contacts-title">John Doe</span>
                                    <p>UI/UX Designer</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded">
                                            <span class="fa fa-pencil"></span>
                                        </button>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe" />
                                    <span class="contacts-title">John Doe</span>
                                    <p>UI/UX Designer</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded">
                                            <span class="fa fa-pencil"></span>
                                        </button>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe" />
                                    <span class="contacts-title">John Doe</span>
                                    <p>UI/UX Designer</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded">
                                            <span class="fa fa-pencil"></span>
                                        </button>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe" />
                                    <span class="contacts-title">John Doe</span>
                                    <p>UI/UX Designer</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded">
                                            <span class="fa fa-pencil"></span>
                                        </button>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe" />
                                    <span class="contacts-title">John Doe</span>
                                    <p>UI/UX Designer</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded">
                                            <span class="fa fa-pencil"></span>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 main-content sem3" id="blogs">
                    <div class="col-md-9 blog-single">
                        <div class="block">
                                <h4></h4>

                                    <p>This is a user friendly blog editor, any one can get started with this writing awesome blogs! </p>
                                <textarea class="summernote" row="20"><h4>Also subhearder available too</h4>
<p><span style="font-weight: bold;">Lorem ipsum dolor sit amet</span>, consectetur adipiscing elit. Ut vel consequat massa. <span style="color: rgb(99, 0, 0); font-weight: bold;">Aliquam augue odio, vulputate non tempus et, sollicitudin in magna</span>. Sed dignissim, tellus sagittis varius vestibulum, erat sapien varius dolor, non elementum sem velit ut nunc. Sed gravida vehicula ipsum, sit amet auctor nunc ultricies et. <a href="http://#">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</a> <span style="font-style: italic;">Morbi dapibus massa faucibus</span>, euismod augue non, facilisis odio. In blandit consectetur nibh, eu venenatis ligula condimentum sed. Nullam magna velit, eleifend ut tincidunt sit amet, sagittis id ligula. Aenean eget metus auctor, fringilla nunc in, lacinia nisi. Suspendisse potenti. Suspendisse vel vulputate lectus.</p>
<blockquote><span style="text-decoration: underline;">
    Cras posuere scelerisque faucibus</span>. Fusce consectetur elit at nisi accumsan rutrum. Sed quis risus vel purus hendrerit mattis. In hac habitasse platea dictumst. Morbi volutpat justo in nunc tincidunt, sed auctor dui ullamcorper. <span style="color: rgb(41, 82, 24);">Praesent eleifend adipiscing nisi</span>. <a href="http://#">Aliquam mi elit, cursus nec posuere vel, varius in tortor</a>. Nullam fermentum nunc felis, sed varius ante auctor et.
</blockquote>
<p>Curabitur urna neque, pharetra vel felis commodo, dictum bibendum odio.<a href="http://#"> Suspendisse mauris augue</a>, volutpat vel augue in, pellentesque semper turpis. Donec congue, magna quis condimentum facilisis, dolor mauris suscipit enim, eu aliquam risus elit vel diam.</p>
                                

                                    </textarea>
                            </div>
                    </div>
                    <div class="col-md-3 blog-list">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Recent Blogs</h3>
                            </div>
                            <div class="panel-body list-group list-group-contacts">
                                
                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk" />
                                    <span class="contacts-title">Cras posuere scelerisque faucibus</span>
                                    <p>Curabitur urna neque, pharetra vel felis commodo, dictum bibendum odio.</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded">
                                            <span class="fa fa-pencil"></span>
                                        </button>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe" />
                                    <span class="contacts-title">JUt vel consequat massa.</span>
                                    <p>Fusce consectetur elit at nisi accumsan rutrum. Sed quis risus vel purus hendrerit mattis. In hac habitasse platea dictumst.</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded">
                                            <span class="fa fa-pencil"></span>
                                        </button>
                                    </div>
                                </a>
                                
                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk" />
                                    <span class="contacts-title">Cras posuere scelerisque faucibus</span>
                                    <p>Curabitur urna neque, pharetra vel felis commodo, dictum bibendum odio.</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded">
                                            <span class="fa fa-pencil"></span>
                                        </button>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe" />
                                    <span class="contacts-title">JUt vel consequat massa.</span>
                                    <p>Fusce consectetur elit at nisi accumsan rutrum. Sed quis risus vel purus hendrerit mattis. In hac habitasse platea dictumst.</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded">
                                            <span class="fa fa-pencil"></span>
                                        </button>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk" />
                                    <span class="contacts-title">Cras posuere scelerisque faucibus</span>
                                    <p>Curabitur urna neque, pharetra vel felis commodo, dictum bibendum odio.</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded">
                                            <span class="fa fa-pencil"></span>
                                        </button>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe" />
                                    <span class="contacts-title">JUt vel consequat massa.</span>
                                    <p>Fusce consectetur elit at nisi accumsan rutrum. Sed quis risus vel purus hendrerit mattis. In hac habitasse platea dictumst.</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded">
                                            <span class="fa fa-pencil"></span>
                                        </button>
                                    </div>
                                </a>
                                
                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk" />
                                    <span class="contacts-title">Cras posuere scelerisque faucibus</span>
                                    <p>Curabitur urna neque, pharetra vel felis commodo, dictum bibendum odio.</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded">
                                            <span class="fa fa-pencil"></span>
                                        </button>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe" />
                                    <span class="contacts-title">JUt vel consequat massa.</span>
                                    <p>Fusce consectetur elit at nisi accumsan rutrum. Sed quis risus vel purus hendrerit mattis. In hac habitasse platea dictumst.</p>
                                    <div class="list-group-controls">
                                        <button class="btn btn-primary btn-rounded">
                                            <span class="fa fa-pencil"></span>
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
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
    <script type="text/javascript" src="js/plugins/codemirror/codemirror.js"></script>        
        <script type='text/javascript' src="js/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/mode/xml/xml.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/mode/javascript/javascript.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/mode/css/css.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/mode/clike/clike.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/mode/php/php.js"></script>
    <script type="text/javascript" src="js/plugins/summernote/summernote.js"></script>
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