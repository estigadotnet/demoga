<?php
$jumlahPengimpor = "";
$jumlahStorage   = "";
$jumlahDepo      = "";
$jumlahTipe      = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$jumlahPengimpor = $_POST["jumlahPengimpor"];
	$jumlahStorage   = $_POST["jumlahStorage"];
	$jumlahDepo      = $_POST["jumlahDepo"];
	$jumlahTipe      = $_POST["jumlahTipe"];
	$pengimpor       = $_POST["pengimpor"];
	$storage         = $_POST["storage"];
	$depo            = $_POST["depo"];
	$tipe            = $_POST["tipe"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Demo v1.0 - Projection</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Demo v1.0</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
	  
	  <!-- Heading -->
      <div class="sidebar-heading">
        Proses
      </div>
	  
	  <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="input.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Projection</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Input</h1>
          </div>

          <div class="row">

            <div class="col-sm-12">
				<!-- Jumlah Titik Jaringan (Himpunan Jaringan) -->
				<div class="card mb-3">
					<div class="card-header">
						Jumlah Titik Jaringan (Himpunan Jaringan)
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-2">
								<div class="p-2">
									<form method="POST" action="input4.php">
									<div class="form-group row">Jumlah Pengimpor
										<input type="text" name="jumlahPengimpor" value="<?php echo $jumlahPengimpor; ?>" class="form-control form-control-user" id="jumlahPengimpor" placeholder="" readonly>
									</div>
									<div class="form-group row">Jumlah Storage
										<input type="text" name="jumlahStorage" value="<?php echo $jumlahStorage; ?>" class="form-control form-control-user" id="jumlahStorage" placeholder="" readonly>
									</div>
									<div class="form-group row">Jumlah Depo
										<input type="text" name="jumlahDepo" value="<?php echo $jumlahDepo; ?>" class="form-control form-control-user" id="jumlahDepo" placeholder="" readonly>
									</div>
									<div class="form-group row">Jumlah Tipe Tanker
										<input type="text" name="jumlahTipe" value="<?php echo $jumlahTipe; ?>" class="form-control form-control-user" id="jumlahTipeTanker" placeholder="" readonly>
									</div>
									<hr>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php if ($jumlahPengimpor > 0 or $jumlahStorage > 0 or $jumlahDepo > 0 or $jumlahTipe > 0) { ?>
			
			<div class="col-sm-12">
				<div class="card mb-3">
					<div class="card-body">
					
						<div class="row">
							
							<!-- pengimpor -->
							<?php
							if ($jumlahPengimpor > 0) {
							?>
								<div class="col-sm-2">
									<div class="p-2">
										<div class="form-group row">
										Pengimpor
										</div>
										<?php
										for ($i = 1; $i <= $jumlahPengimpor; $i++) {
										?>
										<div class="form-group row">
											<input type="text" name="pengimpor[]" value="<?php echo $pengimpor[$i-1]; ?>" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php
										}
										?>
									</div>
								</div>
							<?php
							}
							?>
							<!-- end of pengimpor -->
							
							<!-- storage -->
							<?php
							if ($jumlahStorage > 0) {
							?>
								<div class="col-sm-2">
									<div class="p-2">
										<div class="form-group row">
										Storage
										</div>
										<?php
										for ($i = 1; $i <= $jumlahStorage; $i++) {
										?>
										<div class="form-group row">
											<input type="text" name="storage[]" value="<?php echo $storage[$i-1]; ?>" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php
										}
										?>
									</div>
								</div>
							<?php
							}
							?>
							<!-- end of storage -->
							
							<!-- depo -->
							<?php
							if ($jumlahDepo > 0) {
							?>
								<div class="col-sm-2">
									<div class="p-2">
										<div class="form-group row">
										Depo
										</div>
										<?php
										for ($i = 1; $i <= $jumlahDepo; $i++) {
										?>
										<div class="form-group row">
											<input type="text" name="depo[]" value="<?php echo $depo[$i-1]; ?>" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php
										}
										?>
									</div>
								</div>
							<?php
							}
							?>
							<!-- end of depo -->
							
							<!-- tipe tanker -->
							<?php
							if ($jumlahTipe > 0) {
							?>
								<div class="col-sm-2">
									<div class="p-2">
										<div class="form-group row">
										Tipe Tanker
										</div>
										<?php
										for ($i = 1; $i <= $jumlahTipe; $i++) {
										?>
										<div class="form-group row">
											<input type="text" name="tipe[]" value="<?php echo $tipe[$i-1]; ?>" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php
										}
										?>
									</div>
								</div>
							<?php
							}
							?>
							<!-- end of tipe tanker -->
						
						</div>
					</div>
				</div>
            </div>
			
			<!-- proses ketiga -->
			<div class="col-sm-12">
				<div class="card mb-3">
					<div class="card-body">
					
						<div class="row">
							
							<!-- tabel 1           -->
							<!-- baris = pengimpor -->
							<!-- kolom = depo      -->
							<?php if ($jumlahPengimpor > 0) { ?>

								<!-- kolom i1, i2, in -->
								<!-- kolom pertama -->
								<div class="col-sm-1">
									<div class="p-2">
										<div class="form-group row">
											<input type="text" name="t1_A1" value="" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php for ($i = 1; $i <= $jumlahPengimpor; $i++) { ?>
										<div class="form-group row">
											<input type="text" name="t1_A<?php echo $i+1; ?>" value="i<?php echo $i; ?>" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php } ?>
										<div class="form-group row">
											<input type="text" name="t1_A<?php echo $i+1; ?>" value="" class="form-control form-control-user" size="2" readonly>
										</div>
									</div>
								</div>
								
								<!-- kolom d1, d2, dn -->
								<!-- kolom kedua, kolom_n-1 -->
								<?php for ($d = 1; $d <= $jumlahDepo; $d++) { ?>
								<?php $row = 1; ?>
								<div class="col-sm-1">
									<div class="p-2">
										<div class="form-group row">
											<input type="text" name="t1_<?php echo chr(65+$d).$row++; ?>" value="d<?php echo $d; ?>" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php for ($i = 1; $i <= $jumlahPengimpor; $i++) { ?>
										<div class="form-group row">
											<input type="text" name="t1_<?php echo chr(65+$d).$row; ?>" value="<?php echo $_POST['t1_'.chr(65+$d).$row++]; ?>" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php } ?>
										<div class="form-group row">
											<input type="text" name="t1_<?php echo chr(65+$d).$row++; ?>" value="<?php echo $depo[$d-1];?>" class="form-control form-control-user" size="2" readonly>
										</div>
									</div>
								</div>
								<?php } ?>
								
								<!-- kolom terakhir -->
								<div class="col-sm-1">
									<div class="p-2">
										<div class="form-group row">
											<?php $row = 1; ?>
											<input type="text" name="t1_<?php echo chr(65+$d).$row++; ?>" value="" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php for ($i = 1; $i <= $jumlahPengimpor; $i++) { ?>
										<div class="form-group row">
											<input type="text" name="t1_<?php echo chr(65+$d).$row++; ?>" value="<?php echo $pengimpor[$i-1];?>" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php } ?>
										<div class="form-group row">
											<input type="text" name="t1_<?php echo chr(65+$d).$row++; ?>" value="" class="form-control form-control-user" size="2" readonly>
										</div>
									</div>
								</div>
								
							<?php } ?>
							<!-- end of tabel 1    -->
							
						</div>
					</div>
				</div>
            </div>
			
			<div class="col-sm-12">
				<div class="card mb-3">
					<div class="card-body">
					
						<div class="row">
							
							<!-- tabel 2           -->
							<!-- baris = depo      -->
							<!-- kolom = storage   -->
							<?php if ($jumlahDepo > 0) { ?>
							
								<!-- kolom d1, d2, dn -->
								<!-- kolom pertama -->
								<div class="col-sm-1">
									<div class="p-2">
										<div class="form-group row">
											<input type="text" name="t2_A1" value="" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php for ($d = 1; $d <= $jumlahDepo; $d++) { ?>
										<div class="form-group row">
											<input type="text" name="t2_A<?php echo $d+1; ?>" value="d<?php echo $d; ?>" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php } ?>
										<div class="form-group row">
											<input type="text" name="t2_A<?php echo $d+1; ?>" value="" class="form-control form-control-user" size="2" readonly>
										</div>
									</div>
								</div>
								
								<!-- kolom s1, s2, sn -->
								<!-- kolom kedua, kolom_n-1 -->
								<?php for ($s = 1; $s <= $jumlahStorage; $s++) {?>
								<?php $row = 1; ?>
								<div class="col-sm-1">
									<div class="p-2">
										<div class="form-group row">
											<input type="text" name="t2_<?php echo chr(65+$s).$row++; ?>" value="s<?php echo $s; ?>" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php for ($d = 1; $d <= $jumlahDepo; $d++) { ?>
										<div class="form-group row">
											<input type="text" name="t2_<?php echo chr(65+$s).$row; ?>" value="<?php echo $_POST['t2_'.chr(65+$s).$row++]; ?>" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php } ?>
										<div class="form-group row">
											<input type="text" name="t2_<?php echo chr(65+$s).$row++; ?>" value="<?php echo $storage[$s-1]; ?>" class="form-control form-control-user" size="2" readonly>
										</div>
									</div>
								</div>
								<?php } ?>
								
								<!-- kolom terakhir -->
								<div class="col-sm-1">
									<div class="p-2">
										<div class="form-group row">
											<?php $row = 1; ?>
											<input type="text" name="t2_<?php echo chr(65+$s).$row++; ?>" value="" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php for ($d = 1; $d <= $jumlahDepo; $d++) { ?>
										<div class="form-group row">
											<input type="text" name="t2_<?php echo chr(65+$s).$row++; ?>" value="<?php echo $depo[$d-1]; ?>" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php } ?>
										<div class="form-group row">
											<input type="text" name="t2_<?php echo chr(65+$s).$row++; ?>" value="" class="form-control form-control-user" size="2" readonly>
										</div>
									</div>
								</div>
								
							<?php } ?>
							<!-- end of tabel 2    -->
							
						</div>
					</div>
				</div>
            </div>
			
			<div class="col-sm-12">
				<div class="card mb-3">
					<div class="card-body">
					
						<div class="row">
							
							<!-- tabel 3           -->
							<!-- baris = tanker    -->
							<!-- kolom = depo      -->
							<?php if ($jumlahTipe > 0) { ?>

								<!-- kolom t1, t2, tn -->
								<!-- kolom pertama -->
								<div class="col-sm-1">
									<div class="p-2">
										<div class="form-group row">
											<input type="text" name="t3_A1" value="" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php for ($t = 1; $t <= $jumlahTipe; $t++) { ?>
										<div class="form-group row">
											<input type="text" name="t3_A<?php echo $t+1; ?>" value="t<?php echo $t; ?>" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php } ?>
										<div class="form-group row">
											<input type="text" name="t3_A<?php echo $t+1; ?>" value="" class="form-control form-control-user" size="2" readonly>
										</div>
									</div>
								</div>
								
								<!-- kolom d1, d2, dn -->
								<!-- kolom kedua, kolom_n-1 -->
								<?php for ($d = 1; $d <= $jumlahDepo; $d++) { ?>
								<?php $row = 1; ?>
								<div class="col-sm-1">
									<div class="p-2">
										<div class="form-group row">
											<input type="text" name="t3_<?php echo chr(65+$d).$row++; ?>" value="d<?php echo $d; ?>" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php for ($t = 1; $t <= $jumlahTipe; $t++) { ?>
										<div class="form-group row">
											<input type="text" name="t3_<?php echo chr(65+$d).$row; ?>" value="<?php echo $_POST['t3_'.chr(65+$d).$row++]; ?>" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php } ?>
										<div class="form-group row">
											<input type="text" name="t3_<?php echo chr(65+$d).$row++; ?>" value="<?php echo $depo[$d-1];?>" class="form-control form-control-user" size="2" readonly>
										</div>
									</div>
								</div>
								<?php } ?>
								
								<!-- kolom terakhir -->
								<div class="col-sm-1">
									<div class="p-2">
										<div class="form-group row">
											<?php $row = 1; ?>
											<input type="text" name="t3_<?php echo chr(65+$d).$row++; ?>" value="" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php for ($t = 1; $t <= $jumlahTipe; $t++) { ?>
										<div class="form-group row">
											<input type="text" name="t3_<?php echo chr(65+$d).$row++; ?>" value="<?php echo $tipe[$t-1];?>" class="form-control form-control-user" size="2" readonly>
										</div>
										<?php } ?>
										<div class="form-group row">
											<input type="text" name="t3_<?php echo chr(65+$d).$row++; ?>" value="" class="form-control form-control-user" size="2" readonly>
										</div>
									</div>
								</div>
								
							<?php } ?>
							<!-- end of tabel 3    -->
							
						</div>
					</div>
				</div>
            </div>
			<!-- end of proses ketiga -->
			
			<div class="col-sm-12">
				<div class="card mb-3">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-3">
								<div class="p-2">
									<!-- <button class="btn btn-primary" type="submit" name="proses2">Proses</button> -->
									<a href="#" class="btn btn-primary btn-icon-split" onClick="history.go(-1); return false;">
										<span class="icon text-white-50">
											<i class="fas fa-arrow-left"></i>
										</span>
										<span class="text">Back</span>
									</a>
									<!-- <input type="submit" class="btn btn-primary" type="submit" name="proses4" value="Proses"> -->
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
			
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
