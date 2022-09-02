@extends ('admin.master')

@section ('content')
<div class="container">
    @foreach($user as $users)
    <form method="POST" action="/update_user/{{$users->id}}" enctype="multipart/form-data">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Nama" value="{{$users-> name}}">
        <label for="floatingInput">Nama</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email" value="{{$users-> email}}">
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Password">
        <label for="floatingInput">Password</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endforeach
</div>
@endsection