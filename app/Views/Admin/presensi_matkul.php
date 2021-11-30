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
                <a href="/tambahP" class="btn btn-primary">Tambah Data</a>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Matakuliah</th>
                                <th class="border-top-0">Pertemuan</th>
                                <th class="border-top-0">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($matkul as $m) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $m['mata_kuliah']; ?></td>
                                    <td><?= $m['pertemuan']; ?></td>
                                    <td><?= $m['created_at']; ?></td>
                                    <td><a class="text-primary" href="/editmkp/<?= $m['id_presensi']; ?>">Edit | </a> <a onclick="return confirm(' Apakah anda yakin ?')" class="text-danger" href="/hapusmkp/<?= $m['id_presensi']; ?>">Hapus </a> </td>

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