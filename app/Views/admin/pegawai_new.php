<?= $this->extend('layouts/base'); ?>

<?= $this->section('content'); ?>
<!-- Page header -->
<div class="page-header page-header-light">

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="<?= base_url(); ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <a href="<?= base_url('pegawai'); ?>" class="breadcrumb-item">Data Pegawai</a>
                <span class="breadcrumb-item active">Tambah Data Pegawai</span>
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
                    <h5 class="card-title">Tambah Data Pegawai</h5>
                    <?= $validation->listErrors(); ?>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('pegawai/create'); ?>" method="POST">
                        <?= csrf_field(); ?>
                        <fieldset class="row">
                            <div class="col">
                                <legend class="font-weight-semibold text-uppercase font-size-sm">
                                    Data Diri
                                    <a href="#" class="float-right text-default" data-toggle="collapse" data-target="#data-diri" aria-expanded="true">
                                        <i class="icon-circle-down2"></i>
                                    </a>
                                </legend>
                                <div class="row collapse show" id="data-diri">
                                    <div class="form-group col-lg-3 col-md-6 col-12">
                                        <label>NIS</label>
                                        <input type="number" name="nis" class="form-control no-spinner" placeholder="411700000" autofocus>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-12">
                                        <label>Nama Pegawai</label>
                                        <input type="text" name="nama_pegawai" class="form-control" placeholder="John Doe">
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-12">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Karawang">
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-12">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tgl_lahir">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-12">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat" placeholder="Jl. HS. Ronggo Waluyo, Puseurjaya, Kec. Telukjambe Timur, Kab. Karawang"></textarea>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-12">
                                        <label>Nomor Telepon</label>
                                        <input type="text" data-mask="9999-9999-9999" class="form-control" name="no_telepon" placeholder="0811-2233-4455">
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-12">
                                        <label>Jenis Kelamin</label>
                                        <select name="sex" class="form-control">
                                            <option selected disabled value>--- Pilih Jenis Kelamin ---</option>
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-12">
                                        <label>Agama</label>
                                        <select name="agama" class="form-control">
                                            <option selected disabled value>--- Pilih Agama ---</option>
                                            <option>Islam</option>
                                            <option>Protestan</option>
                                            <option>Katolik</option>
                                            <option>Hindu</option>
                                            <option>Buddha</option>
                                            <option>Khonghucu</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-12">
                                        <label>Status Perkawinan</label>
                                        <select name="status_perkawinan" class="form-control">
                                            <option selected disabled value>--- Pilih Status Perkawinan ---</option>
                                            <option>Kawin</option>
                                            <option>Belum Kawin</option>
                                            <option>Cerai Hidup</option>
                                            <option>Cerai Mati</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="row">
                            <div class="col">
                                <legend class="font-weight-semibold text-uppercase font-size-sm">
                                    Data Kepegawaian
                                    <a href="#" class="float-right text-default" data-toggle="collapse" data-target="#data-kepegawaian" aria-expanded="true">
                                        <i class="icon-circle-down2"></i>
                                    </a>
                                </legend>
                                <div class="row collapse show" id="data-kepegawaian">
                                    <div class="form-group col-lg-3 col-md-6 col-12">
                                        <label>Tanggal SK/SP</label>
                                        <input type="date" name="tgl_sk_sp" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-12">
                                        <label>Status Keaktifan</label>
                                        <select name="status_aktif" class="form-control">
                                            <option selected disabled value>--- Pilih Status Keaktifan ---</option>
                                            <?php foreach ($dataStatusAktif as $row) { ?>
                                                <option value="<?= $row['id']; ?>"><?= $row['nama_status_aktif']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-12">
                                        <label>Status Pegawai</label>
                                        <select name="status_pegawai" class="form-control">
                                            <option selected disabled value>--- Pilih Status Pegawai ---</option>
                                            <?php foreach ($dataStatusPegawai as $row) { ?>
                                                <option value="<?= $row['id']; ?>"><?= $row['nama_status_pegawai']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-12">
                                        <label>Jenis Pegawai</label>
                                        <select name="jenis_pegawai" class="form-control">
                                            <option selected disabled value>--- Pilih Jenis Pegawai ---</option>
                                            <?php foreach ($dataJenisPegawai as $row) { ?>
                                                <option value="<?= $row['id']; ?>"><?= $row['nama_jenis_pegawai']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-12">
                                        <label>Jabatan Pegawai</label>
                                        <select name="jabatan_pegawai" class="form-control">
                                            <option selected disabled value>--- Pilih Jabatan Pegawai ---</option>
                                            <?php foreach ($dataJabatanPegawai as $row) { ?>
                                                <option value="<?= $row['id']; ?>"><?= $row['nama_jabatan_pegawai']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-12">
                                        <label>Jabatan Fungsional</label>
                                        <select name="jabatan_fungsional" class="form-control">
                                            <option selected disabled value>--- Pilih Jabatan Fungsional ---</option>
                                            <?php foreach ($dataJabatanFungsional as $row) { ?>
                                                <option value="<?= $row['id']; ?>"><?= $row['nama_jabatan_fungsional']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-12">
                                        <label>Unit Kerja</label>
                                        <select name="unit_kerja" class="form-control">
                                            <option selected disabled value>--- Pilih Unit Kerja ---</option>
                                            <?php foreach ($dataUnitKerja as $row) { ?>
                                                <option value="<?= $row['id']; ?>"><?= $row['nama_unit_kerja']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group col-lg-3 col-md-6 col-12">
                                        <label>Unit Pelaksana</label>
                                        <input type="text" class="form-control" name="unit_pelaksana" placeholder="">
                                    </div> -->
                                    <div class="form-group col-lg-3 col-md-6 col-12">
                                        <label>Golongan</label>
                                        <select name="golongan" class="form-control">
                                            <option selected disabled value>--- Pilih Golongan ---</option>
                                            <?php foreach ($dataGolongan as $row) { ?>
                                                <option value="<?= $row['gol_ruang']; ?>"><?= $row['gol_ruang'] . ' - ' . $row['pangkat']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                        </fieldset>
                        <button class="btn btn-success float-right mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>

<?= $this->section('customJs'); ?>
<script src="<?= base_url('assets/js/plugins/forms/inputs/inputmask.js'); ?>"></script>
<script src="<?= base_url('assets/js/plugins/forms/selects/select2.min.js'); ?>"></script>
<?= $this->endSection(); ?>