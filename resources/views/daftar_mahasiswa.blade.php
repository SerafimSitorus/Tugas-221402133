<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <li>
            Nama : Serafim Sitorus <br>
            Nim  : 221402133 <br>
            Gender : Laki-Laki <br>
            <form action="detail_mahasiswa" method="POST">
                <button type="submit" class="btn btn-primary">
                    Detail Mahasiswa [POST]
                </button>
                @csrf
            </form>
        </li>
        <li>
            Nama : Ahsan Kholiqin <br>
            Nim  : 231402040 <br>
            gender : Laki-Laki <br>
            <form action="detail_mahasiswa" method="GET">
                <button type="submit" class="btn btn-primary">
                    Detail Mahasiswa [GET]
                </button>
                @csrf
            </form>
        </li>
    </ul>
</body>
</html>