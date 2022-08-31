@extends ('admin.master')

@section ('content')
<div class="container">
    <form method="POST" action="{{url('store_berita')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Kreator</label>
        <input type="text" name="kreator" class="form-control" id="exampleFormControlInput1" placeholder="Nama Anda">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
        <input type="text" name="judul_berita" id="" class="form-control" id="exampleFormControlInput1" placeholder="Judul Berita">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Isi Berita</label>
        <textarea name="isi_berita" id="exampleFormControlTextarea1" class="form-control ckeditor" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Gambar Berita</label>
        <input type="file" name="gambar_berita" id="inputGroupFile" class="form-control" placeholder="Judul Berita">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Slug</label>
        <input type="text" name="slug" class="form-control" id="exampleFormControlInput1" placeholder="Slug">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection ('content')