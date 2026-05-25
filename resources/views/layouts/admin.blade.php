<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory App</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">

    @stack('styles')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">Inventory App</span>
            </a>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

                        <li class="nav-item">
                            <a href="{{ route('barang.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>Data Barang</p>
                            </a>
                            <a href="/kategori" class="nav-link">
                                <i class="nav-icon fas fa-tags"></i>
                                <p>Data Kategori</p>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>

        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">

            <section class="content-header">
                <div class="container-fluid">
                    @yield('content_header')
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>

        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <strong>
                Copyright &copy; {{ date('Y') }}
                <a href="#">Nama Institusi</a>.
            </strong>
        </footer>

    </div>

    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- AdminLTE -->
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
