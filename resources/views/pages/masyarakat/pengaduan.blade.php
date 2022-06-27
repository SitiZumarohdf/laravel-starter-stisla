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
                        </div>
                        <div class="card-body">
                            {{-- <div class="show-import" style="display: none">
                                <div class="custom-file">
                                    <form action="{{ route('menu-group.import') }}" method="post"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <label class="custom-file-label" for="file-upload">Choose File</label>
                                        <input type="file" id="file-upload" class="custom-file-input" name="import_file">
                                        <br /> <br />
                                        <div class="footer text-right">
                                            <button class="btn btn-primary">Import File</button>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                            <div class="show-search mb-3" style="display: none">
                                <form id="search" method="GET" action="{{ route('menu-group.index') }}">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="role">Group</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Group Name">
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                        <a class="btn btn-secondary" href="{{ route('menu-group.index') }}">Reset</a>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                        </tr>
                                        @foreach ($items as $key => $item)
                                            <tr>
                                                <td></td>
                                                <td>{{ $item->name }}</td>
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
