<?= $this->extend('template/sectionadmin'); ?>
<?= $this->section('konten'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Upload kode Akses RuskDesk </h3>

        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Station <?= $berkas['station']; ?></h4>

                        <form method="post" class="forms-sample" action="<?= base_url(); ?>/admin/saveruskdesk" enctype="multipart/form-data">
                            <?= csrf_field(); ?>

                            <input type="hidden" class="form-control" id="exampleInputUsername1" name="nama" value="<?= $berkas['nama_user']; ?>">
                            <input type="hidden" class="form-control" id="exampleInputUsername1" name="nama_kelompok" value="<?= $berkas['nama']; ?>">
                            <input type="hidden" class="form-control" id="exampleInputUsername1" name="station" value="<?= $berkas['station']; ?>">
                            <input type="hidden" class="form-control" id="exampleInputUsername1" name="w_awal" value="<?= $berkas['w_awal']; ?>">
                            <input type="hidden" class="form-control" id="exampleInputUsername1" name="w_akhir" value="<?= $berkas['w_akhir']; ?>">
                            <input type="hidden" class="form-control" id="exampleInputUsername1" name="tanggal" value="<?= $berkas['tanggal']; ?>">
                            <div class="form-row">
                                <div class="col">
                                    <label for="exampleInputUsername1">Id Ruskdesk </label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" name="akses_ruskdesk" value="">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="exampleInputUsername1">password RuskDesk</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" name="password" value="">
                                </div>

                            </div>




                            <button type="submit" style="margin-top: 20px;" class="btn btn-primary mr-2">Beri Akses</button>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>

<?php $this->endSection() ?>