<!-- <script>
    window.location = 'index.html';
</script> -->
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from royalearn.in/demo/premium/admin/users by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Sep 2021 06:10:27 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Alpa Mall</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css"
        rel="stylesheet">
    <!-- toast CSS -->
    <!-- <link href="plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet"> -->
    <!-- morris CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo base_url(); ?>assets/plugins/bower_components/chartist-js/dist/chartist.min.css"
        rel="stylesheet">
    <link
        href="<?php echo base_url(); ?>assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css"
        rel="stylesheet">
    <!-- Datatable CSS -->
    <link
        href="../../../../<?php echo base_url(); ?>assets/cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"
        rel="stylesheet">
    <!-- <link href="../../../../cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
    <!-- Datatables JS Library -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.js"></script>
    <!-- <script src="../../../../cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="../../../../cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script> -->
    <!-- animation CSS -->
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url(); ?>assets/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">

                <!-- /Logo -->
                <ul class="nav navbar-top-links">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg"
                            href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>

                    <li>
                        <a class="profile-pic" href="my_profile.html"> <img src="plugins/images/users/varun.jpg"
                                alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><span
                                    style='color: yellow;'>Hello</span>, </b></a>
                    </li>
                </ul>
            </div>


            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span
                            class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="dashboard.html" class="waves-effect"><i class="fa fa-clock-o fa-fw"
                                aria-hidden="true"></i>Dashboard</a>
                    </li>

                    <!-- ================================================================================================ -->
                    <li>
                        <a href="users.html" class="waves-effect"><i class="fa fa-user fa-fw"
                                aria-hidden="true"></i>Users</a>
                    </li>
                    <li>
                        <a href="all-admin.html" class="waves-effect"><i class="fa fa-user fa-fw"
                                aria-hidden="true"></i>Admin Settings</a>
                    </li>
                    <li>
                        <a href="spots.html" class="waves-effect"><i class="fa fa-desktop fa-fw"
                                aria-hidden="true"></i>Spots</a>
                    </li>
                    <li>
                        <a href="deposit%20update.html" class="waves-effect"><i class="fa fa-database fa-fw"
                                aria-hidden="true"></i>Deposit Update</a>
                    </li>
                    <li>
                        <a href="auto_manual.html" class="waves-effect"><i class="fa fa-database fa-fw"
                                aria-hidden="true"></i>Auto Manual</a>
                    </li>
                    <li>
                        <a href="update_color.html" class="waves-effect"><i class="fa fa-database fa-fw"
                                aria-hidden="true"></i>Update Next Color</a>
                    </li>
                    <li>
                        <a href="referals.html" class="waves-effect"><i class="fa fa-graduation-cap fa-fw"
                                aria-hidden="true"></i>Referals</a>
                    </li>
                    <li>
                        <a href="ban_fake_users.html" class="waves-effect"><i class="fa fa-columns fa-fw"
                                aria-hidden="true"></i>Ban Users</a>
                    </li>

                    <li>
                        <a href="transactions.html" class="waves-effect"><i class="fa fa-database fa-fw"
                                aria-hidden="true"></i>All Transactions</a>
                    </li>
                    <li>
                        <a href="withdraw-req.html" class="waves-effect"><i class="fa fa-database fa-fw"
                                aria-hidden="true"></i>Withdraw Requests</a>
                    </li>



                    <li>
                        <a href="banner.html" class="waves-effect"><i class="fa fa-image fa-fw"
                                aria-hidden="true"></i>Banner</a>
                    </li>
                    <li>
                        <a href="marquee.html" class="waves-effect"><i class="fa fa-book fa-fw"
                                aria-hidden="true"></i>Marquee</a>
                    </li>
                    <li>
                        <a href="rules.html" class="waves-effect"><i class="fa fa-book fa-fw"
                                aria-hidden="true"></i>Rules</a>
                    </li>
                    <li>
                        <a href="policies.html" class="waves-effect"><i class="fa fa-book fa-fw"
                                aria-hidden="true"></i>Terms & Policies</a>
                    </li>
                    <!-- <li>
                        <a href="./account-setting" class="waves-effect"><i class="fa fa-briefcase fa-fw" aria-hidden="true"></i>Account Setting</a>
                    </li> -->
                    <li>
                        <a href="index.html" class="waves-effect"><i class="fa fa-sign-out fa-fw"
                                aria-hidden="true"></i>Logout</a>
                    </li>


                    <!-- -------------------------------------------------------------------------------------------------------------->


                </ul>

            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Users</h4>
                    </div>

                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <!-- <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <select class="form-control pull-right row b-none">
                                    <option>March 2017</option>
                                    <option>April 2017</option>
                                    <option>May 2017</option>
                                    <option>June 2017</option>
                                    <option>July 2017</option>
                                </select>
                            </div> -->

                            <div class="table-responsive">
                                <table id="usersTable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>

                                            <th>UID</th>
                                            <th>NAME</th>
                                            <th>EMAIL</th>
                                            <th>PHONE</th>
                                            <th>REF CODE</th>
                                            <th>REF BY</th>
                                            <th>CREATED AT</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>610a15d2c2cf7</td>
                                            <td></td>
                                            <td></td>
                                            <td>7498643047</td>
                                            <td>uq4k9vis</td>
                                            <td></td>
                                            <td>2021-09-15 12:37:16</td>
                                            <td>
                                                <a href="user-detailscd31.html?refid=610a15d2c2cf7"
                                                    target="_blank"><button class="btn btn-warning btn-sm"
                                                        style="color: #fff;">View</button></a>
                                                <a href="user-updatecd31.html?refid=610a15d2c2cf7"
                                                    target="_blank"><button class="btn btn-info btn-sm"
                                                        style="color: #fff;">Update</button></a>
                                                <a href="user-deletecd31.html?refid=610a15d2c2cf7"
                                                    target="_blank"><button class="btn btn-danger btn-sm"
                                                        style="color: #fff;" disabled>Delete</button></a>
                                                <a href="user-ban7409.html?refid=610a15d2c2cf7&amp;status=PWQDFS"
                                                    target="_blank"><button class="btn btn-danger btn-sm"
                                                        style="color: #fff;" disabled>Ban User</button></a>

                                            </td>

                                        </tr>


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">

                            <h4>BANNED USERS</h4>

                            <div class="table-responsive">
                                <table id="banTable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>

                                            <th>UID</th>
                                            <th>NAME</th>
                                            <th>PHONE</th>
                                            <th>Email</th>
                                            <th>REF CODE</th>
                                            <Th>REF BY</th>
                                            <th>CREATED AT</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>610294ed44682</td>
                                            <td>ijj</td>
                                            <td>9876543210</td>
                                            <td></td>
                                            <td>wrnb01y5</td>
                                            <td></td>
                                            <td>2021-09-15 02:07:12</td>
                                            <td>
                                                <a href="user-details9e4b.html?refid=610294ed44682"
                                                    target="_blank"><button class="btn btn-warning btn-sm"
                                                        style="color: #fff;">View</button></a>
                                                <a href="user-update9e4b.html?refid=610294ed44682"
                                                    target="_blank"><button class="btn btn-info btn-sm"
                                                        style="color: #fff;">Update</button></a>
                                                <a href="user-delete9e4b.html?refid=610294ed44682"
                                                    target="_blank"><button class="btn btn-danger btn-sm"
                                                        style="color: #fff;">Delete</button></a>
                                                <a href="user-ban9aad.html?refid=610294ed44682&amp;status=OASDSK"
                                                    target="_blank"><button class="btn btn-success btn-sm"
                                                        style="color: #fff;">Unban User</button></a>

                                            </td>

                                        </tr>


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#usersTable').DataTable({
            "searching": true
        });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#banTable').DataTable({
            "searching": true
        });
    });
    </script>

    <!-- 
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script> -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
    <!--Counter js -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script
        src="<?php echo base_url(); ?>assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js">
    </script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js">
    </script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dashboard1.js"></script>
</body>


<!-- Mirrored from royalearn.in/demo/premium/admin/users by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Sep 2021 06:11:22 GMT -->

</html>