<?= $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>
<!-- Page header -->
<div class="page-header page-header-light">

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="<?= base_url(); ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <a href="<?= base_url('pegawai'); ?>" class="breadcrumb-item">Data Pegawai</a>
                <span class="breadcrumb-item active">Detail Pegawai</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">

    <div class="d-md-flex align-items-md-start">
        <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left wmin-300 border-0 shadow-0 sidebar-expand-md">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Navigation -->
                <div class="card">
                    <div class="card-body bg-indigo-400 text-center card-img-top" style="background-image: url(/assets/images/backgrounds/panel_bg.png); background-size: contain;">
                        <h6 class="font-weight-semibold mb-0"><?= $data['nama_pegawai']; ?></h6>
                        <span class="d-block opacity-75"><?= $data['nama_unit_kerja']; ?></span>
                    </div>

                    <div class="card-body p-0">
                        <ul class="nav nav-sidebar mb-2">
                            <li class="nav-item-header">Profil</li>
                            <li class="nav-item">
                                <a href="#data-diri" class="nav-link active" data-toggle="tab">
                                    <i class="icon-user-tie"></i>
                                    Data Diri
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#data-keluarga" class="nav-link" data-toggle="tab">
                                    <i class="icon-users"></i>
                                    Data Keluarga
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#data-pendidikan" class="nav-link" data-toggle="tab">
                                    <i class="icon-books"></i>
                                    Data Pendidikan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#data-kepegawaian" class="nav-link" data-toggle="tab">
                                    <i class="icon-profile"></i>
                                    Data Kepegawaian
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /navigation -->

            </div>
            <!-- /sidebar content -->

        </div>

        <div class="tab-content w-100">

            <div class="tab-pane fade active show" id="data-diri">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Data Diri</h6>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-lg-4 col-md-6 col-12">
                                <label>NIS</label>
                                <input type="number" name="nis" class="form-control no-spinner" placeholder="411700000" value="<?= $data['nis']; ?>" readonly>
                            </div>
                            <div class="form-group col-lg-4 col-md-6 col-12">
                                <label>Nama Pegawai</label>
                                <input type="text" name="nama_pegawai" class="form-control" placeholder="John Doe" value="<?= $data['nama_pegawai']; ?>" readonly>
                            </div>
                            <div class="form-group col-lg-4 col-md-6 col-12">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Karawang" value="<?= $data['tempat_lahir']; ?>" readonly>
                            </div>
                            <div class="form-group col-lg-4 col-md-6 col-12">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" value="<?= $data['tgl_lahir']; ?>" readonly>
                            </div>
                            <div class="form-group col-lg-8 col-md-6 col-12">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Jl. HS. Ronggo Waluyo, Puseurjaya, Kec. Telukjambe Timur, Kab. Karawang" readonly><?= $data['alamat']; ?></textarea>
                            </div>
                            <div class="form-group col-lg-4 col-md-6 col-12">
                                <label>Nomor Telepon</label>
                                <input type="text" data-mask="9999-9999-9999" class="form-control" name="no_telepon" placeholder="0811-2233-4455" value="<?= $data['no_telepon']; ?>" readonly>
                            </div>
                            <div class="form-group col-lg-4 col-md-6 col-12">
                                <label>Jenis Kelamin</label>
                                <select name="sex" class="form-control" readonly>
                                    <option value="L" <?= $data['sex'] == 'L' ? 'selected' : ''; ?>>Laki-laki</option>
                                    <option value="P" <?= $data['sex'] == 'P' ? 'selected' : ''; ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4 col-md-6 col-12">
                                <label>Agama</label>
                                <select name="agama" class="form-control" readonly>
                                    <option <?= $data['agama'] == 'Islam' ? 'selected' : ''; ?>>Islam</option>
                                    <option <?= $data['agama'] == 'Protestan' ? 'selected' : ''; ?>>Protestan</option>
                                    <option <?= $data['agama'] == 'Katolik' ? 'selected' : ''; ?>>Katolik</option>
                                    <option <?= $data['agama'] == 'Hindu' ? 'selected' : ''; ?>>Hindu</option>
                                    <option <?= $data['agama'] == 'Buddha' ? 'selected' : ''; ?>>Buddha</option>
                                    <option <?= $data['agama'] == 'Khonghucu' ? 'selected' : ''; ?>>Khonghucu</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4 col-md-6 col-12">
                                <label>Status Perkawinan</label>
                                <select name="status_perkawinan" class="form-control" readonly>
                                    <option <?= $data['status_perkawinan'] == 'Kawin' ? 'selected' : ''; ?>>Kawin</option>
                                    <option <?= $data['status_perkawinan'] == 'Belum Kawin' ? 'selected' : ''; ?>>Belum Kawin</option>
                                    <option <?= $data['status_perkawinan'] == 'Cerai Hidup' ? 'selected' : ''; ?>>Cerai Hidup</option>
                                    <option <?= $data['status_perkawinan'] == 'Cerai Mati' ? 'selected' : ''; ?>>Cerai Mati</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="data-keluarga">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Data Anggota Keluarga</h6>
                        <div class="header-elements">
                            <a class="btn btn-outline bg-teal text-teal border-teal btn-sm" href="#" data-toggle="modal" data-target="#modal-add-keluarga">
                                <i class="icon-plus22"></i>
                                Tambah Data Anggota Keluarga
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover datatable-basic">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Anggota Keluarga</th>
                                        <th>Status</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($dataKeluarga as $row) { ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $row['nama_anggota_keluarga']; ?></td>
                                            <td><?= $row['status']; ?></td>
                                            <td><?= format_date($row['tgl_lahir']) ?? '-'; ?></td>
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

            <div class="tab-pane fade" id="data-pendidikan">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Data Pendidikan</h6>
                        <div class="header-elements">
                            <a class="btn btn-outline bg-teal text-teal border-teal btn-sm" href="#" data-toggle="modal" data-target="#modal-add-pendidikan">
                                <i class="icon-plus22"></i>
                                Tambah Data Pendidikan
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover datatable-basic">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Jenjang</th>
                                        <th>Institusi</th>
                                        <th>Tanggal Ijazah</th>
                                        <th>Nomor Ijazah</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($dataPendidikan as $row) { ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $row['jenjang']; ?></td>
                                            <td><?= $row['institusi']; ?></td>
                                            <td><?= format_date($row['tgl_ijazah']) ?? '-'; ?></td>
                                            <td><?= $row['nomor_ijazah'] ?? '-'; ?></td>
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

            <div class="tab-pane fade" id="data-kepegawaian">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Data Kepegawaian</h6>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-lg-4 col-md-6 col-12">
                                <label>Tanggal SK/SP</label>
                                <input type="date" name="tgl_sk_sp" class="form-control" value="<?= $data['tgl_sk_sp']; ?>" readonly>
                            </div>
                            <div class="form-group col-lg-4 col-md-6 col-12">
                                <label>Status Keaktifan</label>
                                <select name="status_aktif" class="form-control">
                                    <?php foreach ($dataStatusAktif as $row) { ?>
                                        <option value="<?= $row['id']; ?>" <?= $data['status_aktif'] == $row['id'] ? 'selected' : ''; ?> disabled>
                                            <?= $row['nama_status_aktif']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-lg-4 col-md-6 col-12">
                                <label>Status Pegawai</label>
                                <select name="status_pegawai" class="form-control">
                                    <?php foreach ($dataStatusPegawai as $row) { ?>
                                        <option value="<?= $row['id']; ?>" <?= $data['status_pegawai'] == $row['id'] ? 'selected' : ''; ?> disabled>
                                            <?= $row['nama_status_pegawai']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-lg-4 col-md-6 col-12">
                                <label>Jenis Pegawai</label>
                                <select name="jenis_pegawai" class="form-control">
                                    <?php foreach ($dataJenisPegawai as $row) { ?>
                                        <option value="<?= $row['id']; ?>" <?= $data['jenis_pegawai'] == $row['id'] ? 'selected' : ''; ?> disabled>
                                            <?= $row['nama_jenis_pegawai']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-lg-4 col-md-6 col-12">
                                <label>Jabatan Pegawai</label>
                                <select name="jabatan_pegawai" class="form-control">
                                    <?php foreach ($dataJabatanPegawai as $row) { ?>
                                        <option value="<?= $row['id']; ?>" <?= $data['jabatan_pegawai'] == $row['id'] ? 'selected' : ''; ?> disabled>
                                            <?= $row['nama_jabatan_pegawai']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-lg-4 col-md-6 col-12">
                                <label>Jabatan Fungsional</label>
                                <select name="jabatan_fungsional" class="form-control">
                                    <?php foreach ($dataJabatanFungsional as $row) { ?>
                                        <option value="<?= $row['id']; ?>" <?= $data['jabatan_fungsional'] == $row['id'] ? 'selected' : ''; ?> disabled>
                                            <?= $row['nama_jabatan_fungsional']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-lg-4 col-md-6 col-12">
                                <label>Unit Kerja</label>
                                <select name="unit_kerja" class="form-control">
                                    <?php foreach ($dataUnitKerja as $row) { ?>
                                        <option value="<?= $row['id']; ?>" <?= $data['unit_kerja'] == $row['id'] ? 'selected' : ''; ?> disabled>
                                            <?= $row['nama_unit_kerja']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!-- <div class="form-group col-lg-4 col-md-6 col-12">
                                        <label>Unit Pelaksana</label>
                                        <input type="text" class="form-control" name="unit_pelaksana" placeholder="" >
                                    </div> -->
                            <div class="form-group col-lg-4 col-md-6 col-12">
                                <label>Golongan</label>
                                <select name="golongan" class="form-control">
                                    <?php foreach ($dataGolongan as $row) { ?>
                                        <option value="<?= $row['gol_ruang']; ?>" <?= $data['golongan'] == $row['gol_ruang'] ? 'selected' : ''; ?> disabled>
                                            <?= $row['gol_ruang'] . ' - ' . $row['pangkat']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>
<?= $this->endSection(); ?>

<?= $this->section('modalSection'); ?>
<div class="modal fade" id="modal-add-keluarga">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Anggota Keluarga</h5>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('keluarga-pegawai'); ?>" method="POST">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label>Nama Anggota Keluarga</label>
                        <input type="text" class="form-control" name="nama_anggota">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option selected disabled value>--- Pilih Status ---</option>
                            <option>Suami/Istri</option>
                            <option>Anak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="nis" value="<?= $uri->getSegment(2); ?>">
                        <button class="btn btn-success float-right">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-add-pendidikan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Pendidikan</h5>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('pendidikan-pegawai'); ?>" method="POST">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label>Jenjang</label>
                        <select name="jenjang" class="form-control">
                            <option selected disabled value>--- Pilih Jenjang ---</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP Sederajat</option>
                            <option value="SMA">SMA Sederajat</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Institusi</label>
                        <input type="text" class="form-control" name="institusi">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Ijazah</label>
                        <input type="date" class="form-control" name="tgl_ijazah">
                    </div>
                    <div class="form-group">
                        <label>Nomor Ijazah</label>
                        <input type="text" class="form-control" name="no_ijazah">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="nis" value="<?= $uri->getSegment(2); ?>">
                        <button class="btn btn-success float-right">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>