<?= $this->extend('Layout/templates'); ?>
<?= $this->section('konten'); ?>
<?php
if (empty($user['status'])) { ?>
    <style>
        .kbw-signature {
            width: 100%;
            height: 200px;
        }

        #sig canvas {
            width: 100% !important;
            height: auto;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-areas header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">E - <em> Presensi</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="<?php if ($alamat == 'Home') { ?> active <?php } ?>">Home</a></li>
                            <li class="scroll-to-section"><a href="/matakuliah" class="<?php if ($alamat == 'matkul') { ?> active <?php } ?>">Riwayat Presensi Mata Kuliah</a></li>
                            <li class="scroll-to-section"><a href="/logout">Logout</a></li>
                            <li class="main-button"><a href="#"><?= $nama; ?></a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->



    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div autoplay muted loop id="bg-video">

        </div>


        <div class="captions">

            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="valid">
                    <div class="alert alert-danger" role="alert">
                        <h4>Periksa Form Tambah Data</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                </div>
            <?php endif; ?>


            <h2 style="text-align: center;"><em>Presensi<em></h2>
            <hr>

            <p style="font-size: 18px;font-style: normal;">Mata Kuliah :<strong> <?= $matkuls['nama_matakuliah']; ?> </strong></p>
            <p style="font-size: 18px;font-style: normal;">Dosen :<strong> <?= $matkuls['nama_dosen']; ?> </strong></p>
            <p style="font-size: 18px;font-style: normal;">Tanggal Kuliah :<strong> <?= $matkul['created_at']; ?> </strong></p>
            <form method="POST" action="/Presensi/save" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="" for="">
                        <p style="font-size: 18px;font-style: normal;">Silahkan <strong>Tanda Tangan : </strong></p>
                    </label>
                    <input type="hidden" name="tanggal" value="<?php echo date('y/m/d'); ?>" />
                    <br />
                    <hr>
                    <div id="sig"></div>
                    <button id="clear" class="btn btn-outline-danger">Clear Signature</button>
                    <hr>
                    <br><br>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" href="/Home/index">Kembali</a>
                    <textarea id="signature" name="signature" style="display: none"></textarea>

                </div>

                <div class="mb-3">
                    <label for="status" class="form-label"></label>
                    <input type="hidden" class="form-control" id="status" name="status" value="Hadir" autofocus>
                    <input type="hidden" class="form-control" id="status" name="matkul" value="<?= $matkul['mata_kuliah']; ?>" autofocus>
                    <input type="hidden" class="form-control" id="status" name="pertemuan" value="<?= $matkul['pertemuan']; ?>" autofocus>
                </div>



            </form>




        </div>
    </div>

    </div>
    <!-- ***** Main Banner Area End ***** -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>

    <script type="text/javascript">
        var sig = $('#sig').signature({
            syncField: '#signature',
            syncFormat: 'PNG'
        });
        $('#clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature").val('');
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php } else { ?>
    <div class="main-banner" id="top">
        <div autoplay muted loop id="bg-video">

        </div>


        <div class="caption">
            <style>
                .pp:hover {

                    color: gray;
                    transition: 1s;
                }

                .pp {
                    color: #B2B2B2;
                    transition: 1s;
                }
            </style>

            <p style="text-align: center; font-size:60px">Anda Sudah Presensi, silahkan <a class="pp" href="/">kembali</a></p>


        </div>
    </div>
<?php } ?>

<?= $this->endsection(); ?>