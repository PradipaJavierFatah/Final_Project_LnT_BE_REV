<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/">View</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="/create-barang">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/create-invoice">Invoice</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/create-category">Create Category</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>

    <div class="m-5">
        <h1 class="text-center">Edit Items</h1>
        <form action="{{route('update', $barang->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div class="mb-3">
                <label for="exampleInputNama" class="form-label">Items Name/label>
                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="exampleInputNama" name="nama_barang" value="{{$barang->nama_barang}}">
            </div>

            @error('nama_barang')
                <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror

            <div class="mb-3">
                <label for="exampleInputHarga" class="form-label">Items Price</label>
                <div class="input-group">
                    <span class="input-group-text">Rp.</span>
                    <input type="text" value="{{ old('harga_barang') }}" class="form-control @error('harga_barang') is-invalid @enderror" id="exampleInputHarga" name="harga_barang" aria-label="Harga Barang" aria-describedby="basic-addon2">
                </div>
            </div>

            @error('harga_barang')
                <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror

            <div class="mb-3">
                <label for="exampleInputJumlah" class="form-label">Total Items</label>
                <input type="number" class="form-control @error('jumlah_barang') is-invalid @enderror" id="exampleInputJumlah" name="jumlah_barang" value="{{$barang->jumlah_barang}}">
            </div>

            @error('jumlah_barang')
                <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror

            <div class="mb-3">
                <label for="formFile" class="form-label">Items Photo</label>
                <input class="form-control @error('foto_barang') is-invalid @enderror" type="file" id="formFile" name="foto_barang" value="{{$barang->foto_barang}}">
            </div>

            @error('foto_barang')
                <div class="alert alert-danger" role="alert">{{$message}}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
