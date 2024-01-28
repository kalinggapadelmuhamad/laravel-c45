@extends('layouts.app')

@section('title', 'Kategori')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>All Kategori</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('kategori.index') }}">Karegori</a></div>
                    <div class="breadcrumb-item">All Kategori</div>
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
                        <div class="card">
                            <div class="card-body">
                                <div class="p-2">
                                    <div class="float-left">
                                        <div class="section-header-button">
                                            <a href="{{ route('kategori.create') }}" class="btn btn-danger">Add New</a>
                                        </div>
                                    </div>
                                    <div class="float-right">
                                        <form action="{{ route('kategori.index') }}" method="GET">
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
                                            <th>Name</th>
                                            <th>Created At</th>
                                            <th style="width: 5%" class="text-center">Action</th>
                                        </tr>
                                        @foreach ($kategoris as $index => $kategori)
                                            <tr>
                                                <td>
                                                    {{ $kategoris->firstItem() + $index }}
                                                </td>
                                                <td>
                                                    {{ $kategori->name }}
                                                </td>
                                                </td>
                                                <td>
                                                    {{ $kategori->created_at->format('d-F-Y') }}
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ route('kategori.show', $kategori) }}"
                                                            class="btn btn-sm btn-icon btn-primary m-1"><i
                                                                class="fas fa-eye"></i></a>
                                                        <form action="{{ route('kategori.destroy', $kategori) }}"
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
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <span>
                                        Showing {{ $kategoris->firstItem() }}
                                        to {{ $kategoris->lastItem() }}
                                        of {{ $kategoris->total() }} entries
                                    </span>
                                    <div class="paginate-sm">
                                        {{ $kategoris->onEachSide(0)->links() }}
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
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
