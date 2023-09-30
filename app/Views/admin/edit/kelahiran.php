<?php $this->extend('layouts/sbadmin'); ?>
<?php $this->section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Data</h1>

            <!-- form edit data -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Edit Data Kelahiran
                </div>
                <div class="card-body">
                    <form action="/kelahiran/update/<?= $kelahiran['id']; ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $kelahiran['id']; ?>">
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= (old('nama')) ? old('nama') : $kelahiran['nama']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" name="nik" value="<?= (old('nik')) ? old('nik') : $kelahiran['nik']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nik'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : ''; ?>" id="tanggal_lahir" name="tanggal_lahir" value="<?= (old('tanggal_lahir')) ? old('tanggal_lahir') : $kelahiran['tanggal_lahir']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tanggal_lahir'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select class="form-select <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="Laki-laki" id="jenis_kelamin" <?= ($kelahiran['jenis_kelamin'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                    <option value="Perempuan" id="jenis_kelamin" <?= ($kelahiran['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('jenis_kelamin'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama_ibu" class="col-sm-2 col-form-label">Nama Ibu</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('nama_ibu')) ? 'is-invalid' : ''; ?>" id="nama_ibu" name="nama_ibu" value="<?= (old('nama_ibu')) ? old('nama_ibu') : $kelahiran['nama_ibu']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_ibu'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama_ayah" class="col-sm-2 col-form-label">Nama Ayah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('nama_ayah')) ? 'is-invalid' : ''; ?>" id="nama_ayah" name="nama_ayah" value="<?= (old('nama_ayah')) ? old('nama_ayah') : $kelahiran['nama_ayah']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_ayah'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" rows="3"><?= (old('alamat')) ? old('alamat') : $kelahiran['alamat']; ?></textarea>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('alamat'); ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                    </form>
                </div>
            </div>
            <!-- end form edit data -->
    </main>

    <?php $this->endSection(); ?>