<?= $this->extend('template/sectionadmin'); ?>
<?= $this->section('konten'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Upload kode Akses </h3>

        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Station Distribusi</h4>

                        <form method="post" class="forms-sample" action="<?= base_url(); ?>/akses/saveakses" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <?php

                            foreach ($akses as $row) { ?>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="exampleInputUsername1">Id Akses Anydesk </label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="akses_anydesk" value="<?= $row->akses_anydesk; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputUsername1">Password Anydesk Full Acces</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="distribusi_fullacc" value=" <?= $row->distribusi_fullacc; ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="exampleInputUsername1">password Anydesk Screensharing</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="distribusi_ss" value="<?= $row->distribusi_ss; ?>">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="exampleInputUsername1">Id Ruskdesk</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="akses_ruskdesk" value=" <?= $row->akses_ruskdesk; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputUsername1">Password Ruskdesk Full Acces </label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="ruskfullacc_distribusi" value="<?= $row->ruskfullacc_distribusi; ?>">
                                    </div>

                                </div>

                                <h4 class="card-title" style="margin-top: 20px;">Station Testing </h4>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="exampleInputUsername1">Kode Akses Anydesk </label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="idanydesk_testing" value="<?= $row->idanydesk_testing; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputUsername1">Password Anydesk Fullacces </label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="anydeskfullacc_testing" value=" <?= $row->anydeskfullacc_testing; ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="exampleInputUsername1">password Anydesk Screensharing</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="anydeskss_testing" value="<?= $row->anydeskss_testing; ?>">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="exampleInputUsername1">Id Ruskdesk</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="ruskdesk_testing" value=" <?= $row->ruskdesk_testing; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputUsername1">Password Ruskdesk Full Acces </label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="fullaccrusk_testing" value="<?= $row->fullaccrusk_testing; ?>">
                                    </div>

                                </div>

                                <h4 class="card-title" style="margin-top: 20px;">Station Proccesing </h4>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="exampleInputUsername1">Kode Akses Anydesk </label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="idanydesk_proccesing" value="<?= $row->idanydesk_proccesing; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputUsername1">Password Anydesk Fullacces </label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="fullacc_proccesing" value=" <?= $row->fullacc_proccesing; ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="exampleInputUsername1">password Anydesk Screensharing</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="anydeskss_proccesing" value="<?= $row->anydeskss_proccesing; ?>">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="exampleInputUsername1">Id Ruskdesk</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="idruskdesk_proccesing" value=" <?= $row->idruskdesk_proccesing; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputUsername1">Password Ruskdesk </label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="fullaccrusk_proccesing" value="<?= $row->fullaccrusk_proccesing; ?>">
                                    </div>

                                </div>

                                <h4 class="card-title" style="margin-top: 20px;">Station Handling </h4>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="exampleInputUsername1">Kode Akses Anydesk </label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="idanydesk_handling" value="<?= $row->idanydesk_handling; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputUsername1">Password Anydesk Fullacces </label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="fullacc_handling" value=" <?= $row->fullacc_handling; ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="exampleInputUsername1">password Anydesk Screensharing</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="anydeskss_handling" value="<?= $row->anydeskss_handling; ?>">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="exampleInputUsername1">Id Ruskdesk</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="idruskdesk_handling" value=" <?= $row->idruskdesk_handling; ?>">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputUsername1">Password Ruskdesk </label>
                                        <input type="text" class="form-control" id="exampleInputUsername1" name="fullaccrusk_handling" value="<?= $row->fullaccrusk_handling; ?>">
                                    </div>

                                </div>












                            <?php
                            }
                            ?>



                            <button type="submit" style="margin-top: 20px;" class="btn btn-primary mr-2">Update</button>

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