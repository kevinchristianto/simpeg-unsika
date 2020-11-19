<?= $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>

<!-- Page header -->
<div class="page-header page-header-light">

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <span class="breadcrumb-item active">Data Pegawai</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <a href="#" class="breadcrumb-elements-item" data-toggle="modal" data-target="#add-pegawai">
                    <i class="icon-plus22"></i>
                    Tambah Data Pegawai
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">

    <div class="row">
        <div class="col-12 mx-md-auto">
            <div class="card border-left-teal border-left-2 rounded-left-0">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title font-weight-bold text-teal">Data Pegawai</h5>
                    <div class="header-elements">
                        <button class="btn btn-primary btn-sm">Tambah Data Pegawai</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover datatable-pegawai">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>NIS</th>
                                    <th>Nama Pegawai</th>
                                    <th>TTL</th>
                                    <th>No Telp</th>
                                    <th>Jabatan</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /content area -->

<?= $this->endSection(); ?>

<?= $this->section('modalSection'); ?>
<div class="modal fade" id="add-pegawai">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Pegawai</h5>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('jenis-pegawai/insert/'); ?>" method="POST">
                    <div class="form-group">
                        <label>Kode Jenis Pegawai</label>
                        <input type="text" class="form-control" name="id">
                    </div>
                    <div class="form-group">
                        <label>Nama Jenis Pegawai</label>
                        <input type="text" class="form-control" name="nama_jenis-pegawai">
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