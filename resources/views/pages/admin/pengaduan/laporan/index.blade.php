@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>Menu Pengaduan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>List Pengaduan</h4>
                            <div class="card-header-action">
                                <a class="btn btn-icon icon-left btn-primary"
                                    href="{{ route('pengaduan.export') }} ">Export as Excel</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Pengaduan</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                        </tr>
                                        @foreach ($pengaduan as $key => $item)
                                            <tr>
                                                <td>{{ $pengaduan->firstItem() + $key }}</td>
                                                <td>{{ $item->user_nik }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    @if($item->status =='Belum di Proses')
                                                    <span class="badge badge-danger">{{ $item->status }}</span>
                                                    @elseif ($item->status =='Sedang di Proses')
                                                    <span class="badge badge-warning">{{ $item->status }}</span>
                                                    @else
                                                    <span class="badge badge-success">{{ $item->status }}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('customScript')
    <script>
        $(document).ready(function() {
            $('.import').click(function(event) {
                event.stopPropagation();
                $(".show-import").slideToggle("fast");
                $(".show-search").hide();
            });
            $('.search').click(function(event) {
                event.stopPropagation();
                $(".show-search").slideToggle("fast");
                $(".show-import").hide();
            });
            //ganti label berdasarkan nama file
            $('#file-upload').change(function() {
                var i = $(this).prev('label').clone();
                var file = $('#file-upload')[0].files[0].name;
                $(this).prev('label').text(file);
            });
        });
    </script>
@endpush

@push('customStyle')
@endpush
