<?= $this->extend('template/templateuser'); ?>
<?= $this->section('konten'); ?>


<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>


<style>
    .container nav {
        margin-top: 2%;
    }

    .container p {

        margin-left: 1%;
        display: inline-block;
        font-size: 25px;

    }

    .container .button {
        display: inline-block;
        margin-left: 3%;
    }

    .caption h6 {
        text-align: center;
    }

    .remote {
        margin-left: 20%;
    }
</style>


<div class="container">

    <nav>
        <a class="navbar-brand" href="/index.php/user"><img src="/img/FVUSD.png" alt="" height="70" width="200"></a>


        <p><b>Re-LabS System for Practical
                Learning of Mechatronics Application</b></p>

        <div class="button">
            <a href="Auth/logout" type="button" class="btn btn-danger btn-sm">Logout</a>
        </div>



    </nav>
</div>


<div class="featured-items">

    <div class="container">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <!-- modal -->
        <div class="container">

            <!-- Trigger the modal with a button -->


            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">


                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Form Reservasi</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <form method="post" style="padding:20px;" action="<?= base_url(); ?>/berkas/save" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <?php $session = session() ?>
                            <input type="hidden" class="form-control" name="nama_user" placeholder="" value="<?php echo $session->get('username') ?>">
                            <div class="form-group">
                                <div class="form-row">

                                    <label for="formGroupExampleInput" style="margin-top: 20px;">Nama Anda / Kelompok</label>
                                    <input type="text" class="form-control" name="nama" placeholder="">


                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="formGroupExampleInput" style="margin-top: 20px;">Software</label>
                                            <select class="form-control" name="software" id="exampleFormControlSelect1">
                                                <option>--Pilih Software--</option>
                                                <option value="Anydesk">Anydesk</option>
                                                <option value="Ruskdesk">Ruskdesk</option>

                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput" style="margin-top: 20px;">Station</label>
                                            <select class="form-control" name="station" id="exampleFormControlSelect1">
                                                <option>--Pilih Station--</option>
                                                <option value="Processing">Station Procesing</option>
                                                <option value="Handling">Station Handling</option>
                                                <option value="Distribusi">Station Distribusi</option>
                                                <option value="Testing">Station Testing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label for="formGroupExampleInput" style="margin-top: 20px;">Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal" placeholder="" required>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="formGroupExampleInput" style="margin-top: 20px;">Waktu Mulai</label>
                                            <input type="time" class="form-control" name="w_awal" placeholder="" required>
                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput" style="margin-top: 20px;">Waktu Selesai</label>
                                            <input type="time" class="form-control" required name="w_akhir" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label for="formGroupExampleInput" style="margin-top: 20px;">file project</label>
                                        <input type="file" class="form-control" name="berkas" id="form-control-file" placeholder="Example input">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success float-right ml-2">Booking Sekarang</button>
                        </form>

                    </div>

                </div>
            </div>

        </div>



        <div class="row">
            <div class="container">


            </div>
            <div class="col-md-12">
                <div class="" style="margin-top: 5%;">
                    <div class="line-dec"></div>
                    <h2>Schedule<span> <button style="float: right; margin-bottom: 10px; " type="button" style="text-align: center;" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Create Reservation</button></span></h2>
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                            <th>Station</th>
                            <th>Status</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($berkas as $row) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row->tanggal; ?></td>
                                <td><?= $row->w_awal; ?></td>
                                <td><?= $row->w_akhir; ?></td>
                                <td><?= $row->station; ?></td>
                                <td>Sudah Diboking</td>



                            </tr>
                        <?php
                        }
                        ?>


                    </table>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- About Page Ends Here -->

<!-- Subscribe Form Starts Here -->


<?= $this->endSection(''); ?>