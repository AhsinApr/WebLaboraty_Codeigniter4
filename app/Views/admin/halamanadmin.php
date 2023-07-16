<?= $this->extend('template/sectionadmin'); ?>
<?= $this->section('konten'); ?>


<div class="main-panel">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="content-wrapper">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Task </h3>

            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Input Module dan JobSheet</h4>

                            <form method="post" class="forms-sample" action="<?= base_url(); ?>/task/savetask" enctype="multipart/form-data">
                                <?= csrf_field(); ?>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Keterangan</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" name="keterangan" placeholder="Keterangan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Kelas</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" name="kelas" placeholder="Kelas">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Nama Dosen</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" name="nama_dosen" placeholder="Nama Dosen">
                                </div>
                                <div>
                                    <label for="exampleInputUsername1">Input File</label>
                                    <input type="file" class="form-control" id="exampleInputConfirmPassword1" name="taks">
                                </div>


                                <button type="submit" style="margin-top: 20px;" class="btn btn-primary mr-2">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Module dan Jobsheet</h4>

                            </p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Keterangan</th>
                                            <th>Nama Dosen</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($task as $row) { ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $row->keterangan; ?></td>
                                                <td><?= $row->nama_dosen; ?></td>

                                                <td>
                                                    <button type="button" class="btn btn-inverse-warning btn-sm"><a href="/Task/delete/<?= $row->id_task; ?>" class="btn-outline-warning">Hapus</a></button>


                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Hapus Data Reservasi</h4>


                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama kelompok / Mahasiswa</th>
                                        <th>Station</th>
                                        <th>Software</th>
                                        <th>Tanggal</th>
                                        <th>Jam Mulai</th>
                                        <th>Jam Selesai</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($berkas as $row) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $row->nama; ?></td>
                                            <td><?= $row->station; ?></td>
                                            <td><?= $row->software; ?></td>
                                            <td><?= $row->tanggal; ?></td>
                                            <td><?= $row->w_awal; ?></td>
                                            <td><?= $row->w_akhir; ?></td>


                                            <td>
                                                <button type="button" class="btn btn-outline-warning btn-icon-text">
                                                    <a href="/Admin/delete/<?= $row->id_berkas; ?>" class="">Hapus Data</a> </button>

                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
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