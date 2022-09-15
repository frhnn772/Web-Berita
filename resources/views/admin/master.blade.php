<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita SMKN 4 Tanjungpinang</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <!-- Site Wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link">Website Berita</a>
                </li>
            </ul>
            <!-- Right Navbar Links -->
        </nav>
        <!-- Main Sidebar Content -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/dashboard_admin" class="brand-link">
                <img src="../../dist/img/logo-dmt3.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Web Berita</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                        
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header">Register</li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">
                                <i class="nav-icon fas fa-user-plus"></i>
                                <p>Tambah Akun</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/data_user" class="nav-link">
                                <i class="nav-icon fas fa-user-edit"></i>
                                <p>Data Akun</p>
                            </a>
                        </li>
                        <li class="nav-header">Berita</li>
                        <li class="nav-item">
                            <a href="/dashboard_admin" class="nav-link">
                                <i class="nav-icon fas fa-plus-circle"></i>
                                <p>Buat Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/data" class="nav-link">
                                <i class="nav-icon fas fa-folder-open"></i>
                                <p>Data Berita</p>
                            </a>
                        </li>
                        <li class="nav-header">Logout</li>
                        <li class="nav-item">
                            <form id="logout" action="/logout" method="POST">
                                @csrf
                                <a onclick="myFunction()" class="nav-link">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p>Logout</p>
                                </a>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- <h1>Collapsed Sidebar</h1> -->
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main Content -->
            @yield ('content')
        </div>
        <!-- <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer> -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>
    <script type="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
         $(document).ready(function() {
                $('.ckeditor').ckeditor();
            });
    </script>
    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="https://code.jquery.com/jquery-3.6.0slime.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-betal/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#berita').DataTable();
        });
    </script>
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.ckeditor').ckeditor();
            });
        </script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        var para = document.getElementsByClassName("long-text")[0];
        var text = para.innerHTML;
        para.innerHTML = "";
        var words = text.split(" ");
        for (i = 0; i < 2; i++) {
            para.innerHTML += words[i] + " ";
        }
        para.innerHTML += "...";
    </script>

    <script>
        function myFunction() {
            document.getElementById("logout").submit();
        }
    </script>
</body>

</html>