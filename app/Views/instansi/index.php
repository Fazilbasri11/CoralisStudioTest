<!DOCTYPE html>
<html>
<head>
    <title>Daftar Instansi</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container px-5">
            <a class="navbar-brand" href="https://coralisstudio.com/"><span class="fw-bolder text-primary">Ecampuz
                </span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>

                    <li class="nav-item"><a class="nav-link" href="<?= site_url('instansi') ?>">Data Instansi</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('changepassword') ?>">Change
                            Password</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= site_url('logout') ?>">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-6 pt-5">
        <h1>Daftar Instansi</h1>

        <a href="<?= base_url('/instansi/create') ?>" class="btn btn-primary mb-3">Tambah Instansi</a>

        <table id="instansiTable" class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($instansi as $item) : ?>
                <tr>
                    <td><?= $item['nama'] ?></td>
                    <td><?= $item['alamat'] ?></td>
                    <td><?= $item['telepon'] ?></td>
                    <td>
                        <a href="<?= base_url('/instansi/edit/' . $item['id']) ?>" class="btn btn-primary">Edit</a>
                        <a href="<?= base_url('/instansi/delete/' . $item['id']) ?>"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus?')"
                            class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="javascript:history.go(-1)" class="btn btn-secondary">Kembali</a>
    </div>

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#instansiTable').DataTable();
    });
    </script>
</body>
</html>