@extends('layouts.app')

@section('content')

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

            <div class="card">
                <div class="card-header">
                    <h4>Detail Pengaduan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tbody>
                                <tr>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>No Hp</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                </tr>
                                @foreach ($item->details as $ite)
                                    <tr>
                                        <td>{{ $ite->name }}</td>
                                        <td>{{ $ite->user_nik }}</td>
                                        <td>{{ $item->user->phone }}</td>
                                        <td>{{ $ite->created_at->format('l, d F Y - H:i:s') }}</td>
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
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                <h4>Foto</h4>
                </div>
                <div class="card-body">
                <div class="mb-2 text-muted">Click the picture below to see the magic!</div>
                <div class="chocolat-parent">
                    <a href="{{ asset('assets/images/pengaduan/'.$item->image) }}" class="chocolat-image" title="Just an example">
                    <div data-crop-image="285" style="overflow: hidden; position: relative; height: 285px;">
                        <img alt="image" src="{{ asset('assets/images/pengaduan/'.$item->image) }}" class="img-fluid">
                    </div>
                    </a>
                </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                <h4>Tanggapan</h4>
                <div class="card-header-action">
                    <a class="btn btn-icon icon-left btn-success"
                        href="{{ route('tanggapan.show', $ite->id)}} "> Beri Tanggapan </a>
                </div>
                </div>
                <div class="card-body">
                @if (empty($tangap->tanggapan))
                    Belum ada tanggapan
                @else
                    {{ $tangap->tanggapan}}
                @endif
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
