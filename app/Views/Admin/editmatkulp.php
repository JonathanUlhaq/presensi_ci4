<?= $this->extend('LayoutAdmin/template'); ?>
<?= $this->section('konten'); ?>
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-sm-12">
            <br>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="/Admin/proses4/<?= $matkul['id_presensi']; ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Matakuliah</label>
                    <select name="mata_kuliah" class="form-control">
                        <?php foreach ($matkuls as $m) : ?>
                            <option value="<?= $m['nama_matakuliah']; ?>"><?= $m['nama_matakuliah']; ?></option>
                        <?php endforeach ?>
                    </select>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Pertemuan Ke</label>
                    <input type="number" class="form-control" name="pertemuan" value="<?= $matkul['pertemuan']; ?>" placeholder="Masukkan nama dosen pengajar">

                </div>
                <div style="display: flex;" class="buton">
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                    <a style="color:white;margin: 6px;" href="/presensiMatkul" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
    <?= $this->endSection(); ?>