@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Brand</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Create Brand</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.brand.store') }}" class="row justify-content-center" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Create Brand</h3>
                        </div>
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">Brand Name <small class="text-danger">*</small></label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="e.g: Jhon" value="{{ old( 'name' ) }}" required>
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12 text-right">
                                        <input type="submit" name="save_brand" value="Save Brand" class="btn btn-primary" style="width: 200px;">
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
