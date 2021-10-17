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
									<li class="breadcrumb-item active">List Contacts</li>
								</ol>
								<div class="clearfix"></div>
							</div>



						</div>
					</div>

					<!-- download -->
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-12 col-xl-12">
						<div class="card mb-3">
							<div class="card-header">
								<h3><i class="far fa-check-square"></i> List Contacts</h3>
							</div>

							<div class="card-body">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
									<div class="card mb-3">
										

										<div class="card-body">
											<div class="table-responsive">
												<table id="example" class="table table-bordered table-hover display" style="width:100%">
													<thead>
														<tr>
															<th>Name</th>
															<th>Mail</th>
															<th>Telephone</th>
															<th>Business</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<?php
														include 'conexao.php';
														$sql = "SELECT * FROM agenda";
														$search = mysqli_query($conexao,$sql);

														while($array = mysqli_fetch_array($search)) {
															$name = $array['name'];
															$mail = $array['mail'];
															$tel = $array['telephone'];
															$business = $array['business'];

															?>
															<tr>
																<td><?php echo $name ?></td>
																<td><?php echo $mail ?></td>
																<td><?php echo $tel ?></td>
																<td><?php echo $business ?></td>
																<td>
																	<button type="button" class="btn btn-warning" title="Edit"><i class="fas fa-user-edit"></i></button>
																	<button type="button" class="btn btn-danger" title="Delete"><i class="fas fa-user-minus"></i></button>
																</td>
															</tr>


														<?php	} ?>
													</tbody>
												</table>
											</div>
											<!-- end table-responsive-->

										</div>
										<!-- end card-body-->

									</div>
									<!-- end card-->

								</div>

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
		<!--<script type="text/javascript">
			$(document).ready(function() {
				$('#example').DataTable();

			} );
		</script> -->
		<script type="text/javascript">
			$(document).ready(function() {
				$('#example').DataTable( {
       /* "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
        }*/
    } );
			} );
		</script>
		<script src="https://cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json"></script>