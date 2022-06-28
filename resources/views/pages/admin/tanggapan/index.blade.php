@extends('layouts.app')

@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Menu Tanggapan</h1>
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
                    <h4>Silahkan Berikan Tanggapan</h4>
                </div>
                    <div class="card-body">
                        <div class="form-gorup">
                            <label for="description">Pengaduan</label>
                            <input type="text" class="form-control" value="{{ $item->description }}" disabled>
                        </div>
                        <form action="{{ route('tanggapan.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id_pengaduan" value="{{ $item->id }} ">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Tanggapan Anda</label>
                                <textarea class="form-control @error('tanggapan') is-invalid @enderror" rows="8" type="text" placeholder="Isi Tanggapan Anda" id="tanggapan" name="tanggapan" value="{{ old('tanggapan') }}"></textarea>
                                @error('tanggapan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                            <label>Status</label>
                            <select class="form-control select2 select2-hidden-accessible" name="status" id="status" tabindex="-1" aria-hidden="true">
                                <option value="Belum di Proses">Belum di Proses</option>
                                <option value="Sedang di Proses">Sedang di Proses</option>
                                <option value="Selesai">Selesai</option>
                            </select>
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
