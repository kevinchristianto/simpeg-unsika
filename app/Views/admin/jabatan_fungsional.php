<?= $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>

<!-- Page header -->
<div class="page-header page-header-light">

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <span class="breadcrumb-item active">Master Data Jabatan Fungsional</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <a href="#" class="breadcrumb-elements-item" data-toggle="modal" data-target="#add-jabatan-fungsional">
                    <i class="icon-plus22"></i>
                    Tambah Data Jabatan Fung.
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">

    <div class="row">
        <div class="col-md-8 col-12 mx-md-auto">
            <div class="card border-left-teal border-left-2 rounded-left-0">
                <div class="card-header">
                    <h5 class="card-title font-weight-bold text-teal">Data Jabatan Fungsional</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover datatable-basic">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Jabatan Fungsional</th>
                                <th>Nama Jabatan Fungsional</th>
                                <th>Keterangan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data as $row) {
                            ?>
                                <tr>
                                    <td class="font-weight-bold"><?= $no++; ?>.</td>
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['nama_jabatan_fungsional']; ?></td>
                                    <td><?= $row['keterangan'] ?? '-'; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Choose</button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item"><i class="icon-pencil"></i>Ubah</a>
                                                <a href="#" class="dropdown-item"><i class="icon-trash"></i>Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /content area -->

<?= $this->endSection(); ?>

<?= $this->section('modalSection'); ?>
<div class="modal fade" id="add-jabatan-fungsional">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Jabatan Fungsional</h5>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('jabatan-fungsional/insert/'); ?>" method="POST">
                    <div class="form-group">
                        <label>Kode Jabatan Fungsional</label>
                        <input type="text" class="form-control" name="id">
                    </div>
                    <div class="form-group">
                        <label>Nama Jabatan Fungsional</label>
                        <input type="text" class="form-control" name="nama_jabatan-fungsional">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" class="form-control"></textarea>
                    </div>
                    <div class="form-group float-right">
                        <button class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>