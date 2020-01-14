<body class="bg-default">
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
            <div class="container px-4">
                <a class="navbar-brand" href="../index.html">
                    <img src="../assets/img/brand/white.png" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-collapse-main">
                    <!-- Collapse header -->
                    <div class="navbar-collapse-header d-md-none">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="../index.html">
                                    <img src="assets/img/brand/logo.png">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <h1 class="text-white">Welcome!</h1>
                            <p class="text-lead text-light">Use these awesome forms to login or create new account in your project for free.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>Or sign up with credentials</small>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <form role="form" method="post" action="<?= base_url('auth/register') ?>">
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Email" name="email" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Tanggal Lahir" type="date" name="tanggal_lahir">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Nomor Telepon" type="text" name="no_telepon">
                                </div>
                            </div>
                            <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">
                                <div class="fallback">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="projectCoverUploads">
                                        <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                    </div>
                                </div>
                                <div class="dz-preview dz-preview-single">
                                    <div class="dz-preview-cover">
                                        <img class="dz-preview-img" src="...html" alt="..." data-dz-thumbnail>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Subdomain desa" type="text" id="subdomain" name="subdomain">
                                    <p id="notif"></p>
                                </div>
                                <input class="form-control" placeholder="Nama Desa" type="text" name="nama_desa">
                            </div>
                            
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Subdomain desa" type="text" id="subdomain" name="domain">
                                    <p id="notif"></p>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">DAFTAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>