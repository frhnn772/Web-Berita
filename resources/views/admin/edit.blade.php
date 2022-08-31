@extends ('admin.master')

@section ('content')
<div class="container">
    @foreach($berita as $berita)
    <form method="POST" action="/update_berita/{{$berita->id}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Kreator</label>
        <input type="text" name="kreator" class="form-control" id="exampleFormControlInput1" placeholder="Nama Anda" value="{{$berita->kreator}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
        <input type="text" name="judul_berita" id="" class="form-control" id="exampleFormControlInput1" placeholder="Judul Berita" value="{{$berita->judul_berita}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label ckeditor">Isi Berita</label>
        <textarea name="isi_berita" id="exampleFormControlTextarea1" class="form-control ckeditor" rows="3">{{$berita->isi_berita}}</textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Gambar Berita</label>
        <input type="file" name="gambar_berita" id="inputGroupFile" class="form-control" >
        <img class="mt-2" src="/{{$berita->gambar_berita}}" width="300px">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Slug</label>
        <input type="text" name="slug" class="form-control" id="exampleFormControlInput1" placeholder="Slug" value="{{$berita->slug}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endforeach
</div>
@endsection