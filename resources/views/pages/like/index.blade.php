@extends('layouts.app')

@section('title', 'Like')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>All Like</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('like.index') }}">Like</a></div>
                    <div class="breadcrumb-item">All Like</div>
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
                                            <h6 class="text-primary">Like Destinsi By User</h6>
                                            {{-- <a href="{{ route('like.create') }}" class="btn btn-danger">Add New</a> --}}
                                        </div>
                                    </div>
                                    <div class="float-right">
                                        <form action="{{ route('like.index') }}" method="GET">
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
                                            <th>User</th>
                                            <th>Destinasi</th>
                                            <th>Lokasi</th>
                                            <th>Created At</th>
                                            {{-- <th style="width: 5%" class="text-center">Action</th> --}}
                                        </tr>
                                        @foreach ($likes as $index => $like)
                                            <tr>
                                                <td>
                                                    {{ $likes->firstItem() + $index }}
                                                </td>
                                                <td>
                                                    {{ $like->user->name }}
                                                </td>
                                                <td>
                                                    {{ $like->destinasi->nama }}
                                                </td>
                                                <td>
                                                    {{ $like->destinasi->lokasi->name }}
                                                </td>
                                                </td>
                                                <td>
                                                    {{ $like->created_at->format('d-F-Y') }}
                                                </td>
                                                {{-- <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ route('like.show', $like) }}"
                                                            class="btn btn-sm btn-icon btn-primary m-1"><i
                                                                class="fas fa-eye"></i></a>
                                                        <form action="{{ route('like.destroy', $like) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-sm btn-warning btn-icon m-1">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <span>
                                        Showing {{ $likes->firstItem() }}
                                        to {{ $likes->lastItem() }}
                                        of {{ $likes->total() }} entries
                                    </span>
                                    <div class="paginate-sm">
                                        {{ $likes->onEachSide(0)->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="p-2">
                                    <div class="float-left">
                                        <div class="section-header-button">
                                            <h6 class="text-primary">Destinasi Populer</h6>
                                            {{-- <a href="{{ route('like.create') }}" class="btn btn-danger">Add New</a> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="float-right">
                                        <form action="{{ route('like.index') }}" method="GET">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search"
                                                    name="name" value="{{ request('name') }}">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> --}}
                                </div>

                                <div class="clearfix  divider mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered table-lg">
                                        <tr>
                                            <th style="width: 3%">No</th>
                                            <th>Destinasi</th>
                                            <th>Lokasi</th>
                                            <th>Kategori</th>
                                            <th>Total Like</th>
                                            {{-- <th style="width: 5%" class="text-center">Action</th> --}}
                                        </tr>
                                        @foreach ($populars as $index => $popular)
                                            <tr>
                                                <td>
                                                    {{ $populars->firstItem() + $index }}
                                                </td>
                                                <td>
                                                    {{ $popular->nama }}
                                                </td>
                                                <td>
                                                    {{ $popular->lokasi->name }}
                                                </td>
                                                <td>
                                                    {{ $popular->kategori->name }}
                                                </td>
                                                <td>
                                                    {{ $popular->like_count }}
                                                </td>
                                                </td>
                                                <td>
                                                </td>
                                                {{-- <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ route('like.show', $like) }}"
                                                            class="btn btn-sm btn-icon btn-primary m-1"><i
                                                                class="fas fa-eye"></i></a>
                                                        <form action="{{ route('like.destroy', $like) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-sm btn-warning btn-icon m-1">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <span>
                                        Showing {{ $likes->firstItem() }}
                                        to {{ $likes->lastItem() }}
                                        of {{ $likes->total() }} entries
                                    </span>
                                    <div class="paginate-sm">
                                        {{ $likes->onEachSide(0)->links() }}
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
