@extends ('admin.master')

@section ('content')

<div class="container">
    <form method="POST" action="{{url('auth_register')}}" enctype="multipart/form-data">
    @csrf

    <div class="form-floating mb-3">
        <label for="floatingInput">Nama</label>
        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Nama">
    </div>
    <div class="form-floating mb-3">
        <label for="floatingInput">Email</label>
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email">
    </div>
    <div class="form-floating mb-3">
        <label for="floatingInput">Password</label>
        <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Password">
    </div>
    <label for="floatingInput">Status</label>
    <select name="status" class="form-control">
        <option selected>Pilih Status</option>
        <option value="Admin">Admin</option>
        <option value="Kreator">Kreator</option>
    </select>
    <br>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection ('content')