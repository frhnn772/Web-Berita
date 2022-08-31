@extends ('master')

@section ('content')

<div class="container">
    @foreach($data as $datas)
    <div class="card mb-3">
        <img src="{{$datas -> gambar_berita}}" height="500px" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"><a href="berita/{{$datas -> slug}}">{{$datas -> judul_berita}}</a></h5>
                <p class="card-text">{!!\Illuminate\Support\Str::limit(htmlspecialchars_decode($datas -> isi_berita),100,"...")!!}</p>
                
                <p class="card-text">Posted By
                    <a href="#!">{{$datas -> kreator}}</a>
                    on {{$datas -> created_at}}
                </p>
        </div>
    </div>
    
    @endforeach
    
    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
        {!! $data->links() !!}
    </div>
    
</div>
@endsection