@extends('backend.admin.master')
@section('content')
    <!--start page content -->
    <div class="page-content">
        <!--breadcrumb-->
        @include('backend.section.breadcrumb')
        <!--end breadcrumb-->
        
        <div class="card col-md-8">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="mb-4">Add SubCategory</h5>
                    <a href="{{ route('admin.subCategory.index') }}" class="btn btn-primary">Back</a>
                </div>
                <form class="row g-3" method="post" enctype="multipart/form-data" action="{{ route('admin.subCategory.store') }}" >
                    @csrf
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
                        <label for="name" class="form-label">SubCategory Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="SUbCategory Name">
                    </div>
                    <div class="col-md-6">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" name="slug" id="slug" placeholder="Unique Slug" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="category" class="form-label">Category</label>
                        <select name="category_id" id="" class="form-control">
                            <option selected disabled>Select Category</option>
                            @foreach ($all_categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    
                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Submit</button>
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