@extends('layouts.app')

@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Laporan Masyarakat</h1>
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
            <div class="card">
                <div class="card-header">
                    <h4>Silahkan Ajukan Pengaduan Anda</h4>
                </div>
                    <div class="card-body">
                        <form action="{{ route('laporan-masyarakat.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Pengaduan Anda</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" rows="8" type="text" placeholder="Isi laporan Anda" id="description" name="description" value="{{ old('description') }}"></textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>File</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image') }}">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
