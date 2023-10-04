<?= $this->extend('layouts/user'); ?>
<?= $this->section('content'); ?>

<?php
$pesan = session()->getFlashdata('pesan');
?>


<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    <style>
        .background-radial-gradient {
            background-image: url(/assets/img/hero-bg.png);
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#5766ee, #0018ed);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#5766ee, #0018ed);
            overflow: hidden;
        }

        .teks-color {
            /* make a gradient text color */
            background: linear-gradient(180deg, #7a73ee, #2f00ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.8) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }
    </style>

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 w-75" data-aos="fade-up">
        <div class="row gx-lg-5 align-items-center mb-5 mt-5">

            <div class="col-lg-12 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass" data-aos="flip-down">
                    <div class="card-body px-4 py-5 px-md-5">
                        <form method="post" action="/kelahiran/save">
                            <?= csrf_field(); ?>

                            <div>
                                <?php if ($pesan) { ?>
                                    <p style="color:blue"><?php echo $pesan ?></p>
                                <?php } ?>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="nama">Nama :</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap Anda" value="<?= old('nama'); ?>" required />
                                <?= $validation->getError('nama'); ?>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="nik">Nik :</label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Nik Anda" value="<?= old('nik'); ?>" required />
                                <?= $validation->getError('nik'); ?>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="tanggal_lahir">Tanggal Lahir :</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?= old('tanggal_lahir'); ?>" required />
                                <?= $validation->getError('tanggal_lahir'); ?>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="jenis_kelamin">Jenis Kelamin :</label>
                                <select name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="Laki-laki" id="jenis_kelamin">Laki-laki</option>
                                    <option value="Perempuan" id="jenis_kelamin">Perempuan</option>
                                </select>
                                <?= $validation->getError('jenis_kelamin'); ?>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="nama_ibu">Nama Ibu :</label>
                                <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" placeholder="Nama Lengkap Ibu Anda" value="<?= old('nama_ibu'); ?>" required />
                                <?= $validation->getError('nama_ibu'); ?>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="nama_ayah">Nama Ayah :</label>
                                <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" placeholder="Nama Lengkap Ayah Anda" value="<?= old('nama_ayah'); ?>" required />
                                <?= $validation->getError('nama_ayah'); ?>
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="alamat">Alamat :</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Rumah Anda" value="<?= old('alamat'); ?>" required />
                                <?= $validation->getError('alamat'); ?>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block btn-lg mb-4">
                                Tambah Data
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->

<?= $this->endSection(); ?>