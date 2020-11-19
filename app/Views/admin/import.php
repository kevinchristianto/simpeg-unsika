<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Pegawai</title>
</head>

<body>
    <form method="POST" action="<?= base_url('import-pegawai'); ?>" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <label>File</label>
        <input type="file" name="file">
        <button name="submit">Submit</button>
    </form>
</body>

</html>