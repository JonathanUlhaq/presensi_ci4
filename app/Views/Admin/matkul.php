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
                <a href="/tambah" class="btn btn-primary">Tambah Data</a>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Matakuliah</th>
                                <th class="border-top-0">Nama Dosen</th>
                                <th class="border-top-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($matkul as $m) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $m['nama_matakuliah']; ?></td>
                                    <td><?= $m['nama_dosen']; ?></td>
                                    <td><a class="text-primary" href="/editmk/<?= $m['id_matakuliah']; ?>">Edit | </a> <a onclick="return confirm(' Apakah anda yakin ?')" class="text-danger" href="/hapusmk/<?= $m['id_matakuliah']; ?>">Hapus </a> </td>

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