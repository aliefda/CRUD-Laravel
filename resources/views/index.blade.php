
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
  <title>Data</title>
</head>
<div align="left">
   <a href="{{route('buku.create')}}" class="btn btn-success">Add Data</a>
   <br />
   <br />
  </div>
<table class="table table-bordered">
   <tr>
    <th>Id</th>
    <th>Judul</th>
    <th>Pengarang</th>
    <th>Kategori</th>
    <th>Tahun Terbit</th>
    <th>Penerbit</th>
    <th>Edit</th>
    <th>Delete</th>
   </tr>
@foreach($buku as $buku)
    <tr>
    <td>{{$buku['id']}}</td>
    <td>{{$buku['judul']}}</td>
    <td>{{$buku['pengarang']}}</td>
    <td>{{$buku['kategory']}}</td>
    <td>{{$buku['tahun_terbit']}}</td>
    <td>{{$buku['penerbit']}}</td>
    <td><a href="{{action('BukuController@edit', $buku['id'])}}" class="btn btn-info">Edit</a></td>
    <td>
    <form action="{{route('buku.destroy', $buku->id)}}" method="post">
        @csrf
        @method ('DELETE')
        <button class="btn btn-warning" type="submit" >Delete</button>
    </form>
    </td>
    </tr>
@endforeach
</table>