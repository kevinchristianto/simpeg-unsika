<?= $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>
<!-- Page header -->
<div class="page-header page-header-light">

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <span class="breadcrumb-item active">Kenaikan Gaji Berkala</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content">

    <div class="row">
        <div class="col-12">
            <div class="card border-left-teal border-left-2 rounded-left-0">
                <div class="card-header">
                    <h5 class="card-title">Data Kenaikan Gaji Berkala Pegawai</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover datatable-basic">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>NIS</th>
                                    <th>Nama Pegawai</th>
                                    <th>No Telp</th>
                                    <th>Unit Kerja</th>
                                    <th>Masa Kerja</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $today = new DateTime();
                                foreach ($data as $row) {
                                    $tgl_sk_sp = new DateTime($row['tgl_sk_sp']);
                                    $interval = $tgl_sk_sp->diff($today);
                                ?>
                                    <tr>
                                        <td><?= $no++; ?>.</td>
                                        <td><?= $row['nis']; ?></td>
                                        <td><?= $row['nama_pegawai']; ?></td>
                                        <td><?= $row['no_telepon']; ?></td>
                                        <td><?= $row['nama_unit_kerja']; ?></td>
                                        <td><?= $interval->y . ' tahun ' . $interval->m . ' bulan ' . $interval->d . ' hari'; ?></td>
                                        <td></td>
                                    </tr>
                                <?php } ?>
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