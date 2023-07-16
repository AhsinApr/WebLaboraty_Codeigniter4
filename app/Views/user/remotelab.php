<?= $this->extend('template/templateuser'); ?>
<?= $this->section('konten'); ?>


<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
<style>
    .thumbnail {
        margin: 0px;
        padding: 60px;
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
</style>


<div class="container">
    <nav>
        <a class="navbar-brand" href="/index.php/user"><img src="/img/FVUSD.png" alt="" height="70" width="275"></a>


        <p><b>Re-Lab System for
                Learning of Mechatronics Application</b></p>

        <div class="button">
            <a href="Auth/logout" type="button" class="btn btn-danger btn-sm">Logout</a>
        </div>



    </nav>
</div>






<?php foreach ($anydesk as $index => $value) : ?>
    <div class="featured-items">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Remote Dekstop AnyDesk</h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Application</td>
                                <td style="text-align:center;">
                                    <a href="https://anydesk.com/en/downloads/thank-you?dv=win_exe" rel="noopener" target="_blank">
                                        <button type="button" class="btn btn-success">Download AnyDesk</button>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>Nama Kelompok / Mahasiswa</td>


                                <td style="text-align: center;">
                                    <?= $value->nama_kelompok; ?>
                                </td>

                            </tr>
                            <tr>
                                <td>Tanggal</td>


                                <td style="text-align: center;">
                                    <?= $value->tanggal; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Station</td>


                                <td style="text-align: center;">
                                    <?= $value->station; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Waktu</td>


                                <td style="text-align: center;">
                                    <?= $value->w_awal; ?> Sampai <?= $value->w_akhir; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>ID Anydesk</td>


                                <td style="text-align: center;">
                                    <?= $value->akses_anydesk; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Password full Access</td>


                                <td style="text-align: center;">
                                    <?= $value->fullaccess; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Password Screensharing</td>


                                <td style="text-align: center;">
                                    <?= $value->screensharing; ?>
                                </td>
                            </tr>
                        </tbody>

                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php foreach ($ruskdesk as $index => $value) : ?>

    <div class="col-md-12">

        <table class="table table-bordered">
            <h4>Remote Dekstop Ruskdesk</h4>
            <thead>
            </thead>
            <tbody>
                <tr>
                    <td>Application</td>
                    <td style="text-align:center;">
                        <a href="https://anydesk.com/en/downloads/thank-you?dv=win_exe" rel="noopener" target="_blank">
                            <button type="button" class="btn btn-success">Download AnyDesk</button>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>Nama Kelompok / Mahasiswa</td>


                    <td style="text-align: center;">
                        <?= $value->nama_kelompok; ?>
                    </td>

                </tr>
                <tr>
                    <td>Tanggal</td>


                    <td style="text-align: center;">
                        <?= $value->tanggal; ?>
                    </td>
                </tr>
                <tr>
                    <td>Station</td>


                    <td style="text-align: center;">
                        <?= $value->station; ?>
                    </td>
                </tr>
                <tr>
                    <td>Waktu</td>


                    <td style="text-align: center;">
                        <?= $value->w_awal; ?> Sampai <?= $value->w_akhir; ?>
                    </td>
                </tr>
                <tr>
                    <td>ID Ruskdesk</td>


                    <td style="text-align: center;">
                        <?= $value->akses_ruskdesk; ?>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>


                    <td style="text-align: center;">
                        <?= $value->password; ?>
                    </td>
                </tr>

            </tbody>

    </div>

<?php endforeach; ?>


<!-- About Page Ends Here -->

<!-- Subscribe Form Starts Here -->


<?= $this->endSection(''); ?>