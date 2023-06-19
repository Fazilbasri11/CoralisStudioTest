<!DOCTYPE html>
<html>
<head>
    <title>Tambah Instansi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Instansi</h1>

        <form action="<?= base_url('/instansi/store') ?>" method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea name="alamat" id="alamat" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="telepon">Telepon:</label>
                <input type="text" name="telepon" id="telepon" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <a href="javascript:history.go(-1)" class="btn btn-secondary">Kembali</a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>