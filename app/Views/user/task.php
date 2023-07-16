<?= $this->extend('template/templateuser'); ?>
<?= $this->section('konten'); ?>



<style>
    .container nav {
        margin-top: 2%;
    }

    .container p {

        margin-left: 1%;
        display: inline-block;
        font-size: 25px;

    }

    .banner p {
        font-size: 14px;

    }

    .container .button {
        display: inline-block;
        margin-left: 3%;
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

<div class="featured-items">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>Module / Jobsheet</h1>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Keterangan Modul / Jobsheet</th>
                            <th>Nama Dosen</th>
                            <th>Kelas</th>
                            <th>Download</th>

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
                                <td><?= $row->kelas; ?></td>
                                <td>
                                    <a href="/User/download/<?= $row->id_task; ?>" class="button icon solid fa-download">Download</a>

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


<!-- About Page Ends Here -->

<!-- Subscribe Form Starts Here -->


<?= $this->endSection(''); ?>