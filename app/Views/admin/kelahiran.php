<?php $this->extend('layouts/sbadmin'); ?>
<?php $this->section('content'); ?>

<?php
$pesan = session()->getFlashdata('pesan');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Kelahiran</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Data Kelahiran Penduduk Sleman 2023</li>
            </ol>
            <!-- button tambah data -->
            <div class="row mb-3">
                <div class="col-sm-10">
                    <a href="/admin/tambah/kelahiran" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kelahiran as $k) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td>
                                        <?= $k['nama']; ?>
                                    </td>
                                    <td><?= $k['nik']; ?></td>
                                    <td><?= $k['tanggal_lahir']; ?></td>
                                    <td><?= $k['jenis_kelamin']; ?></td>
                                    <td><?= $k['alamat']; ?></td>
                                    <td>
                                        <a href="/kelahiran/edit/<?= $k['id']; ?>" class="btn btn-primary" >Edit</a>
                                        <form action="/kelahiran/<?= $k['id']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">Delete</button>
                                        </form>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Modal<?= $k['id']; ?>">Detail</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php if ($pesan) { ?>
                                <h5 style="color:green"><?php echo $pesan ?><h5>
                                    <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php foreach ($kelahiran as $k) : ?>
            <div class="modal fade" id="Modal<?= $k['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h6>Id : <?= $k['id']; ?></h6>
                            <h6>Nama : <?= $k['nama']; ?></h6>
                            <h6>NIK : <?= $k['nik']; ?></h6>
                            <h6>Tanggal Lahir : <?= $k['tanggal_lahir']; ?></h6>
                            <h6>Jenis Kelamin : <?= $k['jenis_kelamin']; ?></h6>
                            <h6>Alamat : <?= $k['alamat']; ?></h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </main>

    <?php $this->endSection(); ?>