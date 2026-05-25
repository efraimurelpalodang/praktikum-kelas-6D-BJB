@extends('layouts.admin')
@section('content_header')
    <h1>Daftar Kategori</h1>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="btn-group">
                <a href="{{ route('kategori.create') }}" class="btn btn-success btn-sm">
                    Tambah
                </a>
                <button class="btn btn-warning btn-sm">
                    Cetak PDF
                </button>
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Jumlah Barang</th>
                        <th>Operasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_kategori as $k)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $k->nama_kategori }}</td>
                            <td>{{ $k->barangs_count }}</td>
                            <td>
                                <div class="btn-group">
                                    <div class="mr-2">
                                        <a href="{{ route('kategori.edit', $k->id) }}" class="btn btn-primary btn-sm">
                                            Edit
                                        </a>
                                    </div>
                                    <form action="{{ route('kategori.destroy', $k->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            });
        });
    </script>
@endpush
