<?php include 'header.php' ?>

<body class="adminbody">

    <div id="main">

<?php include 'topbar.php' ?>

<?php include 'menu.php' ?>

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
                                    <li class="breadcrumb-item active">Add Contacts</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>

                          

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="far fa-check-square"></i> Form Contacts</h3>
                              
                                </div>

                                <div class="card-body">

                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">E-mail</label>
                                            <input type="email" class="form-control" id="exampleInputNumber1" aria-describedby="numberlHelp" placeholder="Your Mail" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tel</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="(XX)XXXXX-XXXX" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Business</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your Business" required autocomplete="off">
                                        </div>
                                      <div style="text-align:right">
                                        <button type="submit" class="btn btn-block btn-dark">Submit</button>
                                    </div>
                                    </form>

                                </div>
                            </div><!-- end card-->
                        </div>


   




                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->
<?php include 'footer.php' ?>