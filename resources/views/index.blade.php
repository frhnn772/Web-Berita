@extends ('master')

@section ('content')

<!-- Main content -->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
        @foreach($data as $item)
        <div class="post-preview">
            <a href="/daftarBerita">
                <h2 class="post-title"></h2>
                <h3 class="post-subtitle">
                    {!!\Illuminate\Support\Str::limit(htmlspecialchars_decode($item->isi_berita),35,"...")!!}
                </h3>
                <img src="/{{$item->gambar_berita}}" width="100px" alt="">
            </a>
            <p class="post-meta">Posted By {{$item->kreator}}
                <a href="#!"></a>
            </p>
        </div>
        @endforeach
        <!-- Divider -->
        <hr class="my-4">
        <!-- Pager -->
        <div class="d-flex justify-content-end mb-4"><a href="/daftarBerita" class="btn-btn-primary text-uppercase">Older Posts</a></div>
        </div>
    </div>
</div>

@endsection
