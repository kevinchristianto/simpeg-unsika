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
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">

    <div class="row">
        <div class="col-12 mx-md-auto">
            <div class="card border-left-teal border-left-2 rounded-left-0">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Data Pegawai</h5>
                    <div class="header-elements">
                        <a class="btn btn-outline bg-teal text-teal border-teal btn-sm" href="<?= base_url('pegawai/new'); ?>">
                            <i class="icon-plus22"></i>
                            Tambah Data Pegawai
                        </a>
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