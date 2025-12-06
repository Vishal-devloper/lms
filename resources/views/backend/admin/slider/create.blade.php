@extends('backend.admin.master')
@section('content')
    <!--start page content -->
    <div class="page-content">
        <!--breadcrumb-->
        @include('backend.section.breadcrumb')
        <!--end breadcrumb-->

        <div class="card col-md-12">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="mb-4">Add Slider</h5>
                    <a href="{{ route('admin.slider.index') }}" class="btn btn-primary">Back</a>
                </div>
                <form class="row g-3" method="post" enctype="multipart/form-data"
                    action="{{ route('admin.slider.store') }}">
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
                    <div class="col-md-12">
                        <label for="title" class="form-label">Slider Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Slider Title"
                            value="{{ old('title') }}">
                    </div>
                    <div class="col-md-12">
                        <label for="short_description" class="form-label">Short Description</label>
                        <textarea class="form-control" name="short_description" id="short_description"
                            placeholder="Enter Short Description">{{ old('short_description') }}</textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="video_url" class="form-label">Video Url</label>
                        <input type="text" class="form-control" name="video_url" id="video_url"
                            placeholder="Enter Video Url" value="{{ old('video_url') }}">
                    </div>
                    <div class="col-md-12">
                        <iframe id="videoPreview" style="margin-top: 15px; display: none; width: 50%; height: 400px;" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="col-md-12">
                        <label for="image" class="form-label">Thumbnail</label>
                        <input type="file" class="form-control" name="photo" id="photo" />
                    </div>
                    <div class="col-md-12">
                        <img src="" id="photoPreview" height="400px" width="50%" style="margin-top: 15px; display: none;"
                            alt="">
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
    <script src="{{ asset('customjs/admin/slider.js') }}"></script>
@endpush