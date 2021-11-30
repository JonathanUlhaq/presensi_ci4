<?= $this->extend('LayoutAdmin/template'); ?>
<?= $this->section('konten'); ?>

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <?php if (!empty(session()->getFlashdata('bisa'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('bisa'); ?>
                    </div>
                <?php endif; ?>
                <h3 class="box-title"><?= $alamat; ?></h3>

                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Username</th>
                                <th class="border-top-0">Tanggal</th>
                                <th class="border-top-0">Pertemuan</th>
                                <th class="border-top-0">Mata Kuliah</th>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0"> Tanda Tangan</th>
                                <th class="border-top-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($mahasiswa as $m) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $m['username']; ?></td>
                                    <td><?= $m['created_at']; ?></td>
                                    <td><?= $m['pertemuan']; ?></td>
                                    <td><?= $m['nama_matakuliah']; ?></td>
                                    <td><?= $m['status']; ?></td>
                                    <td><img width="200" src="<?= base_url(); ?>/images/<?= $m['signature']; ?>.png"> </td>
                                    <td><a class="text-primary" href="/editmhs/<?= $m['id_presensi']; ?>">Edit </td>


                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<?= $this->endSection(); ?>