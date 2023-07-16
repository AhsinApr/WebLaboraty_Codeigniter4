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
                    <h1>Remote Dekstop AnyDesk (Station Distribusi)</h1>
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
                            <td>ID Anydesk</td>
                            <?php
                            foreach ($akses as $row) { ?>
                                <td style="text-align: center;">
                                    <?= $row->akses_anydesk; ?>
                                <?php
                            }
                                ?>
                                </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Password Full Access</td>
                            <?php
                            foreach ($akses as $row) { ?>
                                <td style="text-align: center;">
                                    <?= $row->distribusi_fullacc; ?>
                                <?php
                            }
                                ?>
                                </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Password Screensharing</td>
                            <?php
                            foreach ($akses as $row) { ?>
                                <td style="text-align: center;">
                                    <?= $row->distribusi_ss; ?>
                                <?php
                            }
                                ?>
                                </td>
                        </tr>
                    </tbody>
            </div>
        </div>
    </div>
</div>



<div class="col-md-12">
    <table class="table table-bordered">
        <div class="section-heading">
            <div class="line-dec"></div>
            <h1>Remote Dekstop AnyDesk (Station Testing)</h1>
        </div>
</div>
<thead>
</thead>
<tbody>
    <tr>
        <td>ID Anydesk</td>
        <?php
        foreach ($akses as $row) { ?>
            <td style="text-align: center;">
                <?= $row->idanydesk_testing; ?>
            <?php
        }
            ?>
            </td>
    </tr>
    <tr>
        <td>Password Full Access</td>
        <?php
        foreach ($akses as $row) { ?>
            <td style="text-align: center;">
                <?= $row->anydeskfullacc_testing; ?>
            <?php
        }
            ?>
            </td>
    </tr>
</tbody>
<tbody>
    <tr>
        <td>Password Screensharing</td>
        <?php
        foreach ($akses as $row) { ?>
            <td style="text-align: center;">
                <?= $row->anydeskss_testing; ?>
            <?php
        }
            ?>
            </td>
    </tr>
</tbody>
</table>
</div>

<div class="col-md-12">
    <table class="table table-bordered">
        <div class="section-heading">
            <div class="line-dec"></div>
            <h1>Remote Dekstop AnyDesk (Station Processing)</h1>
        </div>
</div>
<thead>
</thead>
<tbody>
    <tr>
        <td>ID Anydesk</td>
        <?php
        foreach ($akses as $row) { ?>
            <td style="text-align: center;">
                <?= $row->idanydesk_proccesing; ?>
            <?php
        }
            ?>
            </td>
    </tr>
    <tr>
        <td>Password Full Access</td>
        <?php
        foreach ($akses as $row) { ?>
            <td style="text-align: center;">
                <?= $row->fullacc_proccesing; ?>
            <?php
        }
            ?>
            </td>
    </tr>
</tbody>
<tbody>
    <tr>
        <td>Password Screensharing</td>
        <?php
        foreach ($akses as $row) { ?>
            <td style="text-align: center;">
                <?= $row->anydeskss_proccesing; ?>
            <?php
        }
            ?>
            </td>
    </tr>
</tbody>
</table>
</div>

<div class="col-md-12">
    <table class="table table-bordered">
        <div class="section-heading">
            <div class="line-dec"></div>
            <h1>Remote Dekstop AnyDesk (Station Handling)</h1>
        </div>
</div>
<thead>
</thead>
<tbody>
    <tr>
        <td>ID Anydesk</td>
        <?php
        foreach ($akses as $row) { ?>
            <td style="text-align: center;">
                <?= $row->idanydesk_handling; ?>
            <?php
        }
            ?>
            </td>
    </tr>
    <tr>
        <td>Password Full Access</td>
        <?php
        foreach ($akses as $row) { ?>
            <td style="text-align: center;">
                <?= $row->fullacc_handling; ?>
            <?php
        }
            ?>
            </td>
    </tr>
</tbody>
<tbody>
    <tr>
        <td>Password Screensharing</td>
        <?php
        foreach ($akses as $row) { ?>
            <td style="text-align: center;">
                <?= $row->anydeskss_handling; ?>
            <?php
        }
            ?>
            </td>
    </tr>
</tbody>
</table>
</div>

<!-- About Page Ends Here -->

<!-- Subscribe Form Starts Here -->


<?= $this->endSection(''); ?>