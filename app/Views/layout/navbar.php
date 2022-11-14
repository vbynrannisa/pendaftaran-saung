<nav class="navbar navbar-expand-lg navbar-light ">
	<a class="navbar-brand" href="#">SIP Saung IT</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('home') ?>">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('about') ?>">Tentang</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white " href="<?= base_url('registry') ?>">Pendaftaran</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('saung') ?>">Siswa</a>
			</li>

			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Aksi
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<?php if (logged_in()) : ?>
								<a class="dropdown-item" href="<?= base_url('admin') ?>"><i class="fas fa-th-list"></i>&nbsp;&nbsp;Kelola Data</a>
								<a class="dropdown-item" href="<?= base_url('logout') ?>"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Logout Admin</a>
							<?php else : ?>
								<a class="dropdown-item" href="<?= base_url('login') ?>"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Login Admin</a>
							<?php endif; ?>
						</div>
					</li>
				</ul>
			</div>
		</ul>
	</div>
</nav>