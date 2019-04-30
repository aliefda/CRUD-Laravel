@foreach($buku as $buku)

<p>{{$buku->judul}}</p>
<p>{{$buku->pengarang}}</p>
<p>{{$buku->kategory}}</p>
<p>{{$buku->tahun_terbit}}</p>
<p>{{$buku->penerbit}}</p>

@endforeach