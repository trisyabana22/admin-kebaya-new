<div class="page-wrapper">
		<!-- Left Sidenav -->
		<div class="left-sidenav">
			<!--end main-icon-menu-->

			<div class="main-menu-inner">
				<div class="menu-body slimscroll">
					<div id="MetricaPages" class="main-icon-menu-pane active">
						<div class="title-box">
							<h6 class="menu-title">Menu</h6>
						</div>
						<ul class="nav" style="margin-bottom: 3rem">
							<li class="nav-item ">
								<a class="nav-link <?php if($this->uri->segment(1)=="C_beranda"){echo "active";}?>" href="<?= base_url(); ?>index.php/C_beranda"><i class="dripicons-monitor"></i>Beranda</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?php if($this->uri->segment(1)=="C_tentang_kami"){echo "active";}?>" href="<?= base_url(); ?>index.php/C_tentang_kami" ><i
										class="dripicons-user-id"></i>Tentang kami</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?php if($this->uri->segment(1)=="C_produk"){echo "active";}?>" href="<?= base_url(); ?>index.php/C_produk" > <i class="dripicons-store"></i>Product</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?php if($this->uri->segment(1)=="C_kontak"){echo "active";}?>" href="<?= base_url(); ?>index.php/C_kontak"><i
										class="far fa-address-book"></i>Contact</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link" href="javascript:void(0)" data-toggle="modal"
								data-animation="bounce" data-target=".edit-social-media"><i class="dripicons-link"></i>Edit Social
									Media</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0)" data-toggle="modal"
								data-animation="bounce" data-target=".edit-pdf"><i class="dripicons-document"></i>Edit
									Daftar Menu</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0)" data-toggle="modal"
								data-animation="bounce" data-target=".edit-reservasi"><i class="dripicons-message"></i>Edit
									Reservasi</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0)" data-toggle="modal"
								data-animation="bounce" data-target=".edit-kontak"><i class="far fa-address-book"></i>Edit
									Kontak</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" target="_blank" href="http://menus.ptmsn.co.id/demod"><i
										class="far fa-address-book"></i>Lihat Menu Asli</a>
							</li> -->
						</ul>
					</div>
					<!-- end Pages -->
				</div>
				<!--end menu-body-->
			</div>
			<!-- end main-menu-inner-->
		</div>
		<!-- end left-sidenav-->