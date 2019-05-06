<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
  <title>Data</title>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
</head>
<body>
<div class="card uper">
  <div class="card-header" align="center">
    Tambah Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('buku.index') }}">
          <div class="form-group">
              @csrf
              <label for="name">Judul :</label>
              <input type="text" class="form-control" name="judul"/>
          </div>
          <div class="form-group">
              <label for="price">Pengarang :</label>
              <input type="text" class="form-control" name="pengarang"/>
          </div>
          <div class="form-group">
              <label for="quantity">Kategori :</label>
              <input type="text" class="form-control" name="kategory"/>
          </div>
          <div class="form-group">
              <label for="quantity">Tahun Terbit :</label>
              <input type="text" class="form-control" name="tahun_terbit"/>
          </div>
          <div class="form-group">
              <label for="quantity">Penerbit :</label>
              <input type="text" class="form-control" name="penerbit"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
</body>
</html>