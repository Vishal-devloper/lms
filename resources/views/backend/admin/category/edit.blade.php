@extends('backend.admin.master')
@section('content')
    <!--start page content -->
    <div class="page-content">
        <!--breadcrumb-->
        @include('backend.section.breadcrumb')
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="mb-4">Update Category</h5>
                    <a href="{{ route('admin.category.index') }}" class="btn btn-primary">Back</a>
                </div>
                <form class="row g-3" method="post" enctype="multipart/form-data"
                    action="{{ route('admin.category.update', $category->id) }}">
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Category Name"
                            value="{{ $category->name }}">
                    </div>
                    <div class="col-md-6">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" name="slug" id="slug" placeholder="Unique Slug"
                            value="{{ $category->slug }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="photo" id="photo" />
                    </div>

                    <div class="col-md-6">
                        <img src="{{ $category->photo ? asset($category->photo) :'' }}" id="photoPreview" height="60" width="60"
                            style="margin-top: 15px;" alt="Image">
                    </div>

                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('customjs/admin/category.js') }}"></script>
@endpush