@extends('layouts.app')

@section('title', 'Penilaian')

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
                                <h4>Penilaiana</h4>
                            </div>
                            <div class="card-body">
                                <div class="p-2">
                                    <div class="float-left">
                                        {{-- <div class="section-header-button">
                                            <a href="{{ route('.create') }}" class="btn btn-danger">Tambah</a>
                                        </div> --}}
                                    </div>
                                    <div class="float-right">
                                        <form action="{{ route('penilaian.index') }}" method="GET">
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
                                    <table class="table table-hover table-bordered table-lg" id="table-1">
                                        <tr>
                                            <th style="width: 3%">No</th>
                                            <th>NISN</th>
                                            <th>Nama Siswa</th>
                                            <th>Jurusan</th>
                                            <th>Berkas</th>
                                            <th style="width: 5%" class="text-center">Action</th>
                                        </tr>
                                        @foreach ($alternatifs as $index => $alternatif)
                                            <tr>
                                                <td>
                                                    {{ $alternatifs->firstItem() + $index }}
                                                </td>
                                                <td>
                                                    {{ $alternatif->nisn }}
                                                </td>
                                                <td>
                                                    {{ $alternatif->nama_siswa }}
                                                </td>
                                                <td>
                                                    {{ $alternatif->jurusaan_pendaftaran }}
                                                </td>
                                                <td>
                                                    <a href="{{ asset('berkas/' . $alternatif->berkas_Pendaftaran) }}"
                                                        target="_blank">Download</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        @if ($alternatif->penilaian()->count())
                                                            <p class="text-success"><i class="fas fa-check"></i></p>
                                                        @else
                                                            <a href="{{ route('penilaian.show', $alternatif) }}"
                                                                class="btn btn-sm btn-icon btn-primary m-1"><i
                                                                    class="fas fa-plus"></i></a>
                                                        @endif
                                                        {{-- <a href="{{ route('alternatif.show', $alternatif) }}"
                                                            class="btn btn-sm btn-icon btn-primary m-1"><i
                                                                class="fas fa-eye"></i></a>
                                                        <form action="{{ route('alternatif.destroy', $alternatif) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-sm btn-warning btn-icon m-1">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form> --}}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <div class="card-footer d-flex justify-content-between">
                                        <span>
                                            Showing {{ $alternatifs->firstItem() }}
                                            to {{ $alternatifs->lastItem() }}
                                            of {{ $alternatifs->total() }} entries
                                        </span>
                                        <div class="paginate-sm">
                                            {{ $alternatifs->onEachSide(0)->links() }}
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
