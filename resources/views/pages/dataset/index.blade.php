@extends('layouts.app')

@section('title', 'Dataset')

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
                                <h4>Dataset</h4>
                            </div>
                            <div class="card-body">
                                <div class="p-2">
                                    <div class="float-left">
                                        <div class="section-header-button">
                                            <a href="{{ route('dataset.create') }}" class="btn btn-danger">Tambah</a>
                                        </div>
                                    </div>
                                    <div class="float-right">
                                        <form action="{{ route('dataset.index') }}" method="GET">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search"
                                                    name="keputusan" value="{{ request('keputusan') }}">
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
                                            <th>Ranking semester 4</th>
                                            <th>Ranking semester 5</th>
                                            <th>Ranking semester 6</th>
                                            <th>Nilai Un (Rata - Rata)</th>
                                            <th>Prestasi</th>
                                            <th>Penghasilan Ayah</th>
                                            <th>Jumlah Tanggungan</th>
                                            <th>Penghasilan Ibu</th>
                                            <th>Kepemilikan Rumah</th>
                                            <th>Daya Listrik</th>
                                            <th>Luas Tanah</th>
                                            <th>Luas Bangunan</th>
                                            <th>Bahan Atap</th>
                                            <th>Bahan Lantai</th>
                                            <th>Bahan Tembok</th>
                                            <th>Sumber Air</th>
                                            <th>Keputusan</th>
                                            <th style="width: 5%" class="text-center">Action</th>
                                        </tr>
                                        @foreach ($datasets as $index => $dataset)
                                            <tr>
                                                <td>
                                                    {{ $datasets->firstItem() + $index }}
                                                </td>
                                                <td>
                                                    {{ $dataset->rangking_semester_4 }}
                                                </td>
                                                <td>
                                                    {{ $dataset->rangking_semester_5 }}
                                                </td>
                                                <td>
                                                    {{ $dataset->rangking_semester_6 }}
                                                </td>
                                                <td>
                                                    {{ $dataset->nilai_un }}
                                                </td>
                                                <td>
                                                    {{ $dataset->prestasi }}
                                                </td>
                                                <td>
                                                    {{ $dataset->penghasilan_ayah }}
                                                </td>
                                                <td>
                                                    {{ $dataset->jumlah_tanggungan }}
                                                </td>
                                                <td>
                                                    {{ $dataset->penghasilan_ibu }}
                                                </td>
                                                <td>
                                                    {{ $dataset->kepemilikan_rumah }}
                                                </td>
                                                <td>
                                                    {{ $dataset->daya_listrik }}
                                                </td>
                                                <td>
                                                    {{ $dataset->luas_tanah }}
                                                </td>
                                                <td>
                                                    {{ $dataset->luas_bangunan }}
                                                </td>
                                                <td>
                                                    {{ $dataset->bahan_atap }}
                                                </td>
                                                <td>
                                                    {{ $dataset->bahan_lantai }}
                                                </td>
                                                <td>
                                                    {{ $dataset->bahan_tembok }}
                                                </td>
                                                <td>
                                                    {{ $dataset->sumber_air_utama }}
                                                </td>
                                                <td>
                                                    {{ $dataset->keputusan }}
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ route('dataset.show', $dataset) }}"
                                                            class="btn btn-sm btn-icon btn-primary m-1"><i
                                                                class="fas fa-eye"></i></a>
                                                        <form action="{{ route('dataset.destroy', $dataset) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-sm btn-warning btn-icon m-1">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <div class="card-footer d-flex justify-content-between">
                                        <span>
                                            Showing {{ $datasets->firstItem() }}
                                            to {{ $datasets->lastItem() }}
                                            of {{ $datasets->total() }} entries
                                        </span>
                                        <div class="paginate-sm">
                                            {{ $datasets->onEachSide(0)->links() }}
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
