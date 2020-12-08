<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<base href="<?= base_url(); ?>">
	<title><?= $title ?? 'Home'; ?> - SIMPEG UNSIKA</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>/assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>/assets/css/custom.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Page-specific stylesheets -->
	<?= $this->renderSection('customCss'); ?>
	<!-- /page-specific stylesheets -->
</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="<?= base_url(); ?>/assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav mr-md-auto">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<ul class="navbar-nav">
				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="<?= session('account')['avatar_url']; ?>" class="rounded-circle mr-2" height="34" width="32" alt="">
						<span><?= session('account')['name']; ?></span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="<?= session('endpoint_profile'); ?>" class="dropdown-item"><i class="icon-user"></i> My profile</a>
						<!-- <div class="dropdown-divider"></div> -->
						<a href="<?= base_url('auth/handleLogout'); ?>" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="<?= session('account')['avatar_url']; ?>" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold"><?= session('account')['name']; ?></div>
								<div class="font-size-xs opacity-50">
									<i class="icon-profile font-size-sm"></i> &nbsp;Staff
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header">
							<div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link <?= $dashboard ?? ''; ?>">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-folder-open"></i> <span>Master Data</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="<?= base_url('eselon'); ?>" class="nav-link <?= $eselon ?? ''; ?>">Data Eselon</a></li>
								<li class="nav-item"><a href="<?= base_url('golongan'); ?>" class="nav-link <?= $golongan ?? ''; ?>">Data Golongan</a></li>
								<li class="nav-item"><a href="<?= base_url('jabatan-fungsional'); ?>" class="nav-link <?= $jabatanFungsional ?? ''; ?>">Data Jabatan Fungsional</a></li>
								<li class="nav-item"><a href="<?= base_url('jabatan-pegawai'); ?>" class="nav-link <?= $jabatanPegawai ?? ''; ?>">Data Jabatan Pegawai</a></li>
								<li class="nav-item"><a href="<?= base_url('jenis-pegawai'); ?>" class="nav-link <?= $jenisPegawai ?? ''; ?>">Data Jenis Pegawai</a></li>
								<li class="nav-item"><a href="<?= base_url('status-aktif'); ?>" class="nav-link <?= $statusAktif ?? ''; ?>">Data Status Aktif</a></li>
								<li class="nav-item"><a href="<?= base_url('status-pegawai'); ?>" class="nav-link <?= $statusPegawai ?? ''; ?>">Data Status Pegawai</a></li>
								<li class="nav-item"><a href="<?= base_url('unit-kerja'); ?>" class="nav-link <?= $unitKerja ?? ''; ?>">Data Unit Kerja</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('pegawai'); ?>" class="nav-link <?= $pegawai ?? ''; ?>">
								<i class="icon-users"></i>
								<span>
									Data Pegawai
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('penggajian'); ?>" class="nav-link <?= $penggajian ?? ''; ?>">
								<i class="icon-calculator"></i>
								<span>
									Penggajian
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('KGB'); ?>" class="nav-link <?= $kgb ?? ''; ?>">
								<i class="icon-coin-dollar"></i>
								<span>
									Kenaikan Gaji Berkala
								</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link <?= $laporan ?? ''; ?>">
								<i class="icon-file-text2"></i>
								<span>
									Laporan
								</span>
							</a>
						</li>
						<!-- /main -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->

		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<?= $this->renderSection('content'); ?>

			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2020. Sistem Informasi Kepegawaian <a href="https://unsika.ac.id/" target="_blank">Universitas Singaperbangsa Karawang</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="#" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

	<!-- Modal section -->
	<?= $this->renderSection('modalSection'); ?>
	<!-- /modal section -->

	<!-- Core JS files -->
	<script src="<?= base_url(); ?>/assets/js/main/jquery.min.js"></script>
	<script src="<?= base_url(); ?>/assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>/assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?= base_url(); ?>/assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="<?= base_url(); ?>/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="<?= base_url(); ?>/assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="<?= base_url(); ?>/assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="<?= base_url(); ?>/assets/js/plugins/pickers/daterangepicker.js"></script>
	<script src="<?= base_url(); ?>/assets/js/plugins/tables/datatables/datatables.min.js"></script>

	<!-- Page-specific JS -->
	<?= $this->renderSection('customJs'); ?>
	<!-- /page-specific JS -->

	<script src="<?= base_url(); ?>/assets/js/app.js"></script>
	<script src="<?= base_url(); ?>/assets/js/custom.js"></script>
	<!-- /theme JS files -->

</body>

</html>