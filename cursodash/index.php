<?php include 'header.php'; ?>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
       <?php include 'topbar.php' ?>
        <!-- End Navigation -->

        <?php include 'menu.php'; ?>

        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Dashboard</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>

                        

                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-danger">
                                <i class="far fa-user float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Users</h6>
                                <h1 class="m-b-20 text-white counter">487</h1>
                                <span class="text-white">12 Today</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-purple">
                                <i class="fas fa-download float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Downloads</h6>
                                <h1 class="m-b-20 text-white counter">290</h1>
                                <span class="text-white">12 Today</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-warning">
                                <i class="fas fa-shopping-cart float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Orders</h6>
                                <h1 class="m-b-20 text-white counter">320</h1>
                                <span class="text-white">25 Today</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-info">
                                <i class="far fa-envelope float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Messages</h6>
                                <h1 class="m-b-20 text-white counter">58</h1>
                                <span class="text-white">5 New</span>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

           



                  

                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->

        <?php include 'footer.php' ?>