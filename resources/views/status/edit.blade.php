@extends('admin.layout')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Status </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Status</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">

                        <div class="card card-primary">
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <div class="card-header">
                                <h3 class="card-title">Update Status</h3>
                            </div>


                            <form action="{{ route('status.update', $status->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-3">
                                            <label>Title</label>
                                            <input type="text" name="title" value="{{ old('title', $status->title) }}"
                                                class="form-control" placeholder="Enter Title">

                                            @error('title')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-3">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" cols="30" rows="10">{{ old('description', $status->description) }}</textarea>
                                            @error('description')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-3">
                                            <label>No Of Client</label>
                                            <input type="number" value="{{ old('no_of_client', $status->no_of_client) }}"
                                                name="no_of_client" class="form-control" placeholder="No Of Client">

                                            @error('no_of_client')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-3">
                                            <label>Client Title</label>
                                            <input type="text" value="{{ old('client_title', $status->client_title) }}"
                                                name="client_title" class="form-control" placeholder="Enter Client Title">

                                            @error('client_title')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-3">
                                            <label>Client Detail</label>
                                            <input type="text" value="{{ old('client_desc', $status->client_desc) }}"
                                                name="client_desc" class="form-control" placeholder="Enter Client Desc">

                                            @error('client_desc')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-3">
                                            <label>No Of Project</label>
                                            <input type="number" value="{{ old('no_of_project', $status->no_of_project) }}"
                                                name="no_of_project" class="form-control" placeholder="No Of Project">

                                            @error('no_of_project')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-3">
                                            <label>Project Title</label>
                                            <input type="text" value="{{ old('project_title', $status->project_title) }}"
                                                name="project_title" class="form-control" placeholder="Enter Project Title">

                                            @error('project_title')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-3">
                                            <label>Project Detail</label>
                                            <input type="text" value="{{ old('project_desc', $status->project_desc) }}"
                                                name="project_desc" class="form-control" placeholder="Enter Project Desc">

                                            @error('project_desc')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-3">
                                            <label>No Of Hours</label>
                                            <input type="number" value="{{ old('no_of_hours', $status->no_of_hours) }}"
                                                name="no_of_hours" class="form-control" placeholder="No Of Hours">

                                            @error('no_of_hours')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-3">
                                            <label>Hours Title</label>
                                            <input type="text" value="{{ old('hours_title', $status->hours_title) }}"
                                                name="hours_title" class="form-control" placeholder="Enter Hours Title">

                                            @error('hours_title')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-3">
                                            <label>Hours Detail</label>
                                            <input type="text" value="{{ old('hours_desc', $status->hours_desc) }}"
                                                name="hours_desc" class="form-control" placeholder="Enter Hours Desc">

                                            @error('hours_desc')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group col-3">
                                            <label>No Of Workers</label>
                                            <input type="number"
                                                value="{{ old('no_of_workers', $status->no_of_workers) }}"
                                                name="no_of_workers" class="form-control" placeholder="No Of Workers">

                                            @error('no_of_workers')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-3">
                                            <label>Worker Title</label>
                                            <input type="text" value="{{ old('worker_title', $status->worker_title) }}"
                                                name="worker_title" class="form-control"
                                                placeholder="Enter Worker Title">

                                            @error('worker_title')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-3">
                                            <label>Worker Detail</label>
                                            <input type="text" value="{{ old('worker_desc', $status->worker_desc) }}"
                                                name="worker_desc" class="form-control" placeholder="Enter worker Desc">

                                            @error('worker_desc')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group col-3">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control">
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </section>

    </div>
@endsection
@section('customJs')
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>/
@endsection
