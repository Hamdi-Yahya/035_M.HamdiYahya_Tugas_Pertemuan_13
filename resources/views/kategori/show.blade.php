<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kategori - {{ $kategori['nama'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/kategori">Kategori</a></li>
                <li class="breadcrumb-item active">{{ $kategori['nama'] }}</li>
            </ol>
        </nav>

        <div class="card mb-4">
            <div class="card-header">
                <h3 class="mb-0">{{ $kategori['nama'] }}</h3>
            </div>
            <div class="card-body">
                <p><strong>Deskripsi:</strong> {{ $kategori['deskripsi'] }}</p>
                <p><strong>Jumlah Buku:</strong> {{ $kategori['jumlah_buku'] }}</p>
            </div>
        </div>

        <h4 class="mb-3">Daftar Buku dalam Kategori Ini</h4>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku_list as $index => $buku)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $buku['judul'] }}</td>
                    <td>{{ $buku['penulis'] }}</td>
                    <td>{{ $buku['tahun'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="/kategori" class="btn btn-secondary">Kembali ke Daftar Kategori</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
