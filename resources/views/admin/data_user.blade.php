@extends ('admin.master')

@section ('content')

<div class="container">
        @if ($message = session('success'))
            <div class="alert alert-success">
                <p class="text-center">{{ $message }}</p>
            </div>
        @endif
    <table id="berita" class="table table-sm table-hover mb-0 table-dark">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama User</th>
                <th scope="col">Username</th>
                <th scope="col">Waktu Dibuat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $data_user)
            <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td>{{$data_user -> name}}</td>
                <td>{{$data_user -> email}}</td>
                <td>{{$data_user -> created_at}}</td>
                <td><a href="/edit_user/{{$data_user->id}}" class="btn btn-sm btn-warning">Edit</a>|<a class="btn btn-sm btn-danger" href="/hapus_user/{{$data_user->id}}" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Akun {{$data_user -> name}}')">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection