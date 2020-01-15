<!-- Header -->


<div class="header  py-5 ">
    <div class="container ">
        <div class="header-body text-center pb-8">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <img src="<?= base_url(); ?>assets/img/brand/logo.png" id="logo-tidesa" alt="">
                    <h1 class="text-primary pt-3">SELAMAT DATANG!</h1>
                    <p class="text-lead text-default">Silahkan registrasi untuk mendaftar di Teknologi Informasi Desa</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-2">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col ">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <?= $this->session->flashdata('message'); ?>
                        <form role="form" method="post" action="<?= base_url('auth/register') ?>">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" type="text" value="<?= set_value('nama_lengkap'); ?>">
                                        </div>
                                        <?= form_error('nama_lengkap', '<span class="badge badge-pill badge-warning">', '</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Email" name="email" type="ema" value="<?= set_value('email'); ?>">
                                        </div>
                                        <?= form_error('email', '<span class="badge badge-pill badge-warning">', '</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-tag"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" type="text" value="<?= set_value('tempat_lahir'); ?>">
                                        </div>
                                        <?= form_error('tempat_lahir', '<span class="badge badge-pill badge-warning">', '</span>'); ?>
                                        
                                        
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control datepicker" placeholder="Pilih Tanggal" type="text" name="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>">
                                        </div>
                                        <?= form_error('tanggal_lahir', '<span class="badge badge-pill badge-warning">', '</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Nomor Telepon" type="number" name="no_telepon" value="<?= set_value('no_telepon'); ?>">
                                        </div>
                                        <?= form_error('no_telepon', '<span class="badge badge-pill badge-warning">', '</span>'); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!-- cik dropzone -->
                                    <h5>Upload FILE SK</h5>
                                    <div class="dropzone dropzone-multiple" data-toggle="dropzone" data-dropzone-multiple data-dropzone-url="http://">
                                        <div class="fallback">
                                            <div class="custom-file">
                                                <input type="file" name='file' id="file" class="custom-file-input" multiple>
                                                <label class="custom-file-label" for="customFileUploadMultiple">Choose file</label>
                                            </div>
                                        </div>
                                        <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                                            <li class="list-group-item px-0">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar">
                                                            <img class="avatar-img rounded" src="...html" alt="..." data-dz-thumbnail>
                                                        </div>
                                                    </div>
                                                    <div class="col ml--3">
                                                        <h4 class="mb-1" data-dz-name>...</h4>
                                                        <p class="small text-muted mb-0" data-dz-size>...</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item" data-dz-remove>
                                                                    Remove
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <br>
                                    <?= form_error('file', '<span class="badge badge-pill badge-warning">', '</span>'); ?>
                                    <!-- stop dropzone -->
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-building"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Nama Desa" type="text" name="nama_desa" value="<?= set_value('nama_desa'); ?>">
                                        </div>
                                        <?= form_error('nama_desa', '<span class="badge badge-pill badge-warning">', '</span>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-spaceship"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Subdomain desa" type="text" id="subdomain" name="subdomain" value="<?= set_value('subdomain'); ?>">
                                            
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="notif"></span>
                                            </div>
                                        </div>
                                        <?= form_error('subdomain', '<span class="badge badge-pill badge-warning">', '</span>'); ?>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary  btn-block mt-4">DAFTAR</button>
                                    </div>
                                    


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>