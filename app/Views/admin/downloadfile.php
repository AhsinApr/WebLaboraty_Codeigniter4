<?= $this->extend('template/sectionadmin'); ?>
<?= $this->section('konten'); ?>


<div class="main-panel">

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="content-wrapper">



        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Reservasi & Download File</h4>


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
                                            <button type="button" style="margin-left: 5%;" class="btn btn-outline-danger btn-icon-text">
                                                <a href="/Admin/download/<?= $row->id_berkas; ?>" class=""> Download</a> </button>
                                            <br>
                                            <br>
                                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                                <div class="navbar-profile">

                                                    <p class="btn btn-outline-success btn-icon-text">Beri Akses</p>

                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">

                                                <div class="dropdown-divider"></div>
                                                <a href="/admin/beriakses/<?= $row->id_berkas; ?>" class="dropdown-item preview-item">
                                                    <div class="preview-thumbnail">
                                                        <div class="preview-icon bg-dark rounded-circle">
                                                            <i class="mdi mdi-lan-connect text-danger"></i>
                                                        </div>
                                                    </div>
                                                    <div class="preview-item-content">
                                                        <p class="preview-subject mb-1">Anydesk</p>

                                                    </div>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="/admin/beriaksesruskdesk/<?= $row->id_berkas; ?>" class="dropdown-item preview-item">
                                                    <div class="preview-thumbnail">
                                                        <div class="preview-icon bg-dark rounded-circle">
                                                            <i class="mdi mdi-lan text-primary"></i>
                                                        </div>
                                                    </div>
                                                    <div class="preview-item-content">
                                                        <p class="preview-subject mb-1">RuskDesk</p>

                                                    </div>
                                                </a>

                                            </div>

                                            <div class="dropdown">
                                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                    Delete akses sebelumnya
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="/admin/deleteanydesk/<?= $row->nama; ?>">Anydesk</a>
                                                    <a class="dropdown-item" href="/admin/deleteruskdesk/<?= $row->nama; ?>">Ruskdesk</a>

                                                </div>
                                            </div>
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