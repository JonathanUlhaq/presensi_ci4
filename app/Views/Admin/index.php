<?= $this->extend('LayoutAdmin/template'); ?>
<?= $this->section('konten'); ?>

<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->

</div>
<!-- /.col-lg-12 -->
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Three charts -->
    <!-- ============================================================== -->
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Mata Kuliah</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-success"><?= $jumlahs; ?></span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Mahasiswa</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash2"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-purple"><?= $jumlah; ?></span></li>
                </ul>
            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- PRODUCTS YEARLY SALES -->
    <!-- ============================================================== -->
    <!-- <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Products Yearly Sales</h3>
                <div class="d-md-flex">
                    <ul class="list-inline d-flex ms-auto">
                        <li class="ps-3">
                            <h5><i class="fa fa-circle me-1 text-info"></i>Mac</h5>
                        </li>
                        <li class="ps-3">
                            <h5><i class="fa fa-circle me-1 text-inverse"></i>Windows</h5>
                        </li>
                    </ul>
                </div>
                <div id="ct-visits" style="height: 405px;">
                    <div class="chartist-tooltip" style="top: -17px; left: -12px;"><span class="chartist-tooltip-value">6</span>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- RECENT SALES -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <h3 class="box-title mb-0">Mahasiswa Terdaftar</h3>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Username</th>
                                <th class="border-top-0">Nama</th>
                                <th class="border-top-0">Tanggal Daftar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($matkul as $u) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td class="txt-oflo"><?= $u['username']; ?></td>
                                    <td><?= $u['name']; ?></td>
                                    <td class="txt-oflo"><?= $u['created_at']; ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>