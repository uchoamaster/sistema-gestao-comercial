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
									<li class="breadcrumb-item active">Add Contacts</li>
								</ol>
								<div class="clearfix"></div>
							</div>



						</div>
					</div>

					<!-- download -->
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<div class="card mb-3">
							<div class="card-header">
								<h3><i class="far fa-check-square"></i> Form Contacts</h3>
							</div>

							<div class="card-body">
								<?php

								if(isset($_GET['msg'])) {?>
									<div class="alert alert-success" role="alert">
										Usuário inserido com sucesso !
									</div>
								<?php }	?>
								<form action="_insert_contacts.php" method="post">
									<div class="form-group">
										<label for="exampleInputEmail1">Name</label>
										<input type="text" class="form-control"  placeholder="Your Name" name="name" required autocomplete="off">
										
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">E-mail</label>
										<input type="email" class="form-control" id="exampleInputNumber1" name = "mail" aria-describedby="numberlHelp" placeholder="Your Mail" required autocomplete="off">
										
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Tel</label>
										<input type="text" name="phone" class="form-control" placeholder="Telephone" id="telefone" name="telefone" required autocomplete="off">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Business</label>
										<input type="text" class="form-control" id="exampleInputPassword1" name="business" placeholder="Your Business" required autocomplete="off">
									</div>
									<div style="text-align: right">
										<button type="submit" class="btn btn-block btn-dark">Submit</button>
									</div>
								</form>

							</div>
						</div><!-- end card-->
					</div>




					<script type="text/javascript">
						$("#telefone, #celular").mask("(00) 00000-0000"); //000 000 0000 eua
					</script>






				</div>
				<!-- END container-fluid -->

			</div>
			<!-- END content -->

		</div>
		<!-- END content-page -->

		<?php include 'footer.php' ?>