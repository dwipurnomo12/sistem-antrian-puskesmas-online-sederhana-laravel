<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Laporan</title>
</head>
<body>
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-bordered" id="table_id">
                    <thead>
                      <tr style="text-align: center">
                        <th scope="col">No Antrian</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Nomor KTP</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($laporan as $list)
                            <tr style="text-align: center">
                                <td>{{ $list->no_antrian }}</td>
                                <td>{{ $list->nama }}</td>
                                <td>{{ $list->alamat }}</td>
                                <td>{{ $list->jenis_kelamin }}</td>
                                <td>{{ $list->no_hp }}</td>
                                <td>{{ $list->no_ktp }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>