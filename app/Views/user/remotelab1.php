<?= $this->extend('template/templateuser'); ?>
<?= $this->section('konten'); ?>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="/img/FVUSD.png" alt="" height="90" width="300"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


    </div>
</nav>


<div class="featured-items">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>Remote Code</h1>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>

                    </thead>
                    <tbody>
                        <tr>
                            <td>Password Akses</td>

                            <?php

                            foreach ($akses as $row) { ?>
                                <td style="text-align: center;">
                                    <?= $row->kode_akses; ?>
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