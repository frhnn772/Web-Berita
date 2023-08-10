@extends ('master')

@section ('content')
<div class="container">
    @foreach($berita as $beritas)
    <div class="card mb-3">
        <img src="/{{$beritas -> gambar_berita}}" class="card-img-top" height="500px">
        <div class="card-body">
            <h5 class="card-titlte">{{$beritas -> judul_berita}}</h5>
            <p class="card-text">{!!($beritas -> isi_berita)!!}</p>
            <p class="card-text"><small class="text-muted">{{$beritas -> created_at}}</small></p>
        </div>
    </div>
    @endforeach
</div>
@endsection