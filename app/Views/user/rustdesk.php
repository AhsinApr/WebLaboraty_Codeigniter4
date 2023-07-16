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
        <a class="navbar-brand" href="/index.php/user"><img src="/img/FVUSD.png" alt="" height="70" width="200"></a>


        <p><b>Re-Lab System for Practical
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
                    <h1>Remote Dekstop RustDesk ( Station Distribution)</h1>
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
                                <a href="https://github.com/rustdesk/rustdesk/releases/download/1.1.9/rustdesk-1.1.9-windows_x64-portable.zip">
                                    <button type="button" class="btn btn-success">Download Rust Desk</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Id Akses</td>
                            <?php
                            foreach ($akses as $row) { ?>
                                <td style="text-align: center;">
                                    <?= $row->akses_ruskdesk; ?>
                                <?php
                            }
                                ?>
                                </td>

                        <tr>
                            <td>Password Akses</td>
                            <?php
                            foreach ($akses as $row) { ?>
                                <td style="text-align: center;">
                                    <?= $row->ruskfullacc_distribusi ?>
                                <?php
                            }
                                ?>
                                </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="featured-items">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>Remote Dekstop RustDesk (Station Testing)</h1>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Id Akses</td>
                            <?php
                            foreach ($akses as $row) { ?>
                                <td style="text-align: center;">
                                    <?= $row->ruskdesk_testing ?>
                                <?php
                            }
                                ?>
                                </td>

                        </tr>
                        <tr>
                            <td>Password Akses</td>
                            <?php
                            foreach ($akses as $row) { ?>
                                <td style="text-align: center;">
                                    <?= $row->fullaccrusk_testing ?>
                                <?php
                            }
                                ?>
                                </td>


                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="featured-items">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>Remote Dekstop RustDesk (Station Processing)</h1>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Id Akses</td>
                            <?php
                            foreach ($akses as $row) { ?>
                                <td style="text-align: center;">
                                    <?= $row->idruskdesk_proccesing ?>
                                <?php
                            }
                                ?>
                                </td>

                        </tr>
                        <tr>
                            <td>Password Akses</td>
                            <?php
                            foreach ($akses as $row) { ?>
                                <td style="text-align: center;">
                                    <?= $row->fullaccrusk_proccesing ?>
                                <?php
                            }
                                ?>
                                </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="featured-items">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>Remote Dekstop RustDesk (Station Handling)</h1>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Id Akses</td>
                            <?php
                            foreach ($akses as $row) { ?>
                                <td style="text-align: center;">
                                    <?= $row->idruskdesk_handling ?>
                                <?php
                            }
                                ?>
                                </td>

                        </tr>
                        <tr>
                            <td>Password Akses</td>
                            <?php
                            foreach ($akses as $row) { ?>
                                <td style="text-align: center;">
                                    <?= $row->fullaccrusk_handling ?>
                                <?php
                            }
                                ?>
                                </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- About Page Ends Here -->

<!-- Subscribe Form Starts Here -->


<?= $this->endSection(''); ?>