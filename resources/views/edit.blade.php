<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
  <title>Data</title>
</head>
<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Data</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('BukuController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="judul" class="form-control" value="{{$buku->judul}}"/>
   </div>
   <div class="form-group">
    <input type="text" name="pengarang" class="form-control" value="{{$buku->pengarang}}"/>
   </div>
   <div class="form-group">
    <input type="text" name="kategory" class="form-control" value="{{$buku->kategory}}"/>
   </div>
   <div class="form-group">
    <input type="text" name="tahun_terbit" class="form-control" value="{{$buku->tahun_terbit}}"/>
   </div>
   <div class="form-group">
    <input type="text" name="penerbit" class="form-control" value="{{$buku->penerbit}}"/>
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>
</html>