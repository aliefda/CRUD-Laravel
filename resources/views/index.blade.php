@foreach($buku as $buku)

<p>{{$buku->judul}}</p>
<p>{{$buku->pengarang}}</p>
<p>{{$buku->kategory}}</p>
<p>{{$buku->tahun_terbit}}</p>
<p>{{$buku->penerbit}}</p>
<form action="{{route('buku.destroy', $buku->id)}}" method="post">
                        @csrf
                        @method ('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
@endforeach