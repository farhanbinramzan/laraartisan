@extends('admin.layout')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Team </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Team</li>
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
                            <h3 class="card-title">Add Team</h3>
                            </div>


                            <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label >LIsting Squence</label>
                                        <input type="number" name="listing_sequence" class="form-control"
                                            placeholder="Listing Sequence">

                                        @error('listing_sequence')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label >Name</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter Name">

                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label >Desigination</label>
                                        <input type="text" name="desigination" class="form-control"
                                            placeholder="Enter desigination">

                                        @error('desigination')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label >Image</label>
                                        <input type="file" name="image" class="form-control">
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    
                                    <div id="social-media-container">
                                        <div class="social-media-field row mb-3">
                                            <div class="col-md-5 ">
                                                <label for="platform-0" class="form-label">Platform</label>
                                                <select name="platform[]" id="platform-0" class="form-select form-control" required>
                                                    <option value="">Select Platform</option>
                                                    <option value="twitter">Twitter</option>
                                                    <option value="facebook">Facebook</option>
                                                    <option value="instagram">Instagram</option>
                                                    <option value="linkedin">LinkedIn</option>
                                                </select>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="social-account-0" class="form-label">Social Account</label>
                                                <input type="url" name="social_accounts[]" id="social-account-0" class="form-control" required placeholder="Enter the link">
                                            </div>
                                            <div class="col-md-2 d-flex align-items-end">
                                                <button type="button" class="btn btn-danger remove-social-media">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary mt-3" onclick="addSocialMediaField()">Add Social Media</button>
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
    </script>
    <script>
        const container = document.getElementById('social-media-container');
    
        function addSocialMediaField() {
            const fieldCount = container.children.length;
            const newField = document.createElement('div');
            newField.classList.add('social-media-field', 'row', 'mb-3');
            newField.innerHTML = `
                <div class="col-md-5">
                    <label for="platform-${fieldCount}" class="form-label">Platform</label>
                    <select name="platform[]" id="platform-${fieldCount}" class="form-select form-control" required>
                        <option value="">Select Platform</option>
                        <option value="twitter">Twitter</option>
                        <option value="facebook">Facebook</option>
                        <option value="instagram">Instagram</option>
                        <option value="linkedin">LinkedIn</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <label for="social-account-${fieldCount}" class="form-label">Social Account</label>
                    <input type="url" name="social_accounts[]" id="social-account-${fieldCount}" class="form-control" required placeholder="Enter the link">
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="button" class="btn btn-danger remove-social-media">Remove</button>
                </div>
            `;
            container.appendChild(newField);
        }
    
        container.addEventListener('click', function (e) {
            if (e.target && e.target.matches('button.remove-social-media')) {
                e.target.closest('.social-media-field').remove();
            }
        });
    </script>
@endsection
