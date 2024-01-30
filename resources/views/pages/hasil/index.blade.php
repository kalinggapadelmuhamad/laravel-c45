@extends('layouts.app')

@section('title', 'Hasil')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/d') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Hasil</h4>
                            </div>
                            <div class="card-body">
                                <div class="p-2">
                                    <div class="float-left">
                                        <div class="section-header-button">
                                            <a href="{{ route('hasil.create') }}" class="btn btn-danger">Print Hasil</a>
                                        </div>
                                    </div>
                                    <div class="float-right">
                                        <form action="{{ route('hasil.index') }}" method="GET">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search"
                                                    name="name" value="{{ request('name') }}">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="clearfix  divider mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered table-lg">
                                        <tr>
                                            <th style="width: 3%">No</th>
                                            <th>Nama</th>
                                            <th>Jurusan</th>
                                            <th>Keputusan</th>
                                        </tr>
                                        @foreach ($penilaians as $index => $penilaian)
                                            <tr>
                                                <td>
                                                    {{ $penilaians->firstItem() + $index }}
                                                </td>
                                                <td>
                                                    {{ $penilaian->alternatif->nama_siswa }}
                                                </td>
                                                <td>
                                                    {{ $penilaian->alternatif->jurusaan_pendaftaran }}
                                                </td>
                                                <td>
                                                    {{ $penilaian->hasil_keputusan }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <div class="card-footer d-flex justify-content-between">
                                        <span>
                                            Showing {{ $penilaians->firstItem() }}
                                            to {{ $penilaians->lastItem() }}
                                            of {{ $penilaians->total() }} entries
                                        </span>
                                        <div class="paginate-sm">
                                            {{ $penilaians->onEachSide(0)->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    {{-- <script src="{{ asset() }}"></script> --}}
    {{-- <script src="{{ asset() }}"></script> --}}
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-datatables.js') }}"></script>
@endpush
