@extends ('admin.master')

@section ('content')
<div class="container">
    @foreach($user as $users)
    <form method="POST" action="/update_user/{{$users->id}}" enctype="multipart/form-data">
    @csrf
    <div class="form-floating mb-3">
        <label for="floatingInput">Nama</label>
        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Nama" value="{{$users-> name}}">
    </div>
    <div class="form-floating mb-3">
        <label for="floatingInput">Email</label>
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email" value="{{$users-> email}}">
    </div>
    <div class="form-floating mb-3">
        <label for="floatingInput">Password</label>
        <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Password">
    </div>
    <label for="floatingInput">Status</label>
    <select name="status" class="form-control">
        <option selected>Pilih Status</option>
        <option value="Admin">Admin</option>
        <option value="User">Kreator</option>
    </select>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endforeach
</div>
@endsection