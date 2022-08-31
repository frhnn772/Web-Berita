@extends ('admin.master')

@section ('content')

<div class="container">
        @if ($message = session('success'))
            <div class="alert alert-success">
                <p class="text-center">{{ $message }}</p>
            </div>
        @endif
    <table id="berita" class="table table-sm table-hover mb-0">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Berita</th>
                <th scope="col">Kreator</th>
                <th scope="col">Gambar Berita</th>
                <th scope="col">Waktu Rilis</th>
                <th scope="col">Action</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
            <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td>{{$data -> judul_berita}}</td>
                <td>{{$data -> kreator}}</td>
                <td><img alt="img" class="rounded-2" src="/{{$data -> gambar_berita}}" width="50px"></td>
                <td>{{$data -> created_at}}</td>
                <td><a href="/edit/{{$data->id}}" class="btn btn-sm btn-warning">Edit</a>|<a class="btn btn-sm btn-danger" href="/delete/{{$data->id}}" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Berita Tentang {{$data -> judul_berita}}')">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection