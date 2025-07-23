@extends('admin.layout')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Our Team</h1>
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
                                <h3 class="card-title">Edit Team</h3>
                            </div>

                            <form action="{{ route('team.update', $team->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>LIsting Squence</label>
                                        <input type="number" name="listing_sequence" class="form-control"
                                            placeholder="Listing Sequence"
                                            value="{{ old('listing_sequence', $team->listing_sequence) }}">

                                        @error('listing_sequence')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name"
                                            value="{{ old('name', $team->name) }}">

                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Desigination</label>
                                        <input type="text" name="desigination" class="form-control"
                                            placeholder="Enter desigination"
                                            value="{{ old('desigination', $team->desigination) }}">
                                        @error('desigination')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{ asset('images/' . $team->image) }}" alt="Current Image"
                                            style="width: 80px; margin-top: 10px;">
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div id="social-media-accounts">
                                        @php
                                            $socialAccounts = json_decode($team->social_accounts, true) ?: [];
                                            $socialPlatforms = old('platform', array_keys($socialAccounts) ?: ['twitter']);
                                            $socialLinks = old('social_accounts', array_values($socialAccounts) ?: ['']);
                                        @endphp
                                        @foreach ($socialLinks as $social)
                                            <div class="social-media-field row mb-3" data-index="">
                                                <div class="col-md-5">
                                                    <label for="platform_" class="form-label">Platform</label>
                                                    <select name="platform[]" id="platform_" class="form-select form-control" required>
                                                        <option value="twitter" {{ $social['platform'] === 'twitter' ? 'selected' : '' }}>Twitter</option>
                                                        <option value="facebook" {{ $social['platform']=== 'facebook' ? 'selected' : '' }}>Facebook</option>
                                                        <option value="instagram" {{ $social['platform'] === 'instagram' ? 'selected' : '' }}>Instagram</option>
                                                        <option value="linkedin" {{ $social['platform'] === 'linkedin' ? 'selected' : '' }}>LinkedIn</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-5">
                                                    <label for="social_accounts_" class="form-label">Social Account URL</label>
                                                   
                                                    <input type="url" name="social_accounts[]" class="form-control"
                                                        required placeholder="Enter the link" 
                                                        value="{{ is_string($social['account'] ?? '') ? $social['account'] : '' }}">      
                                                </div>
                                                <div class="col-md-2 d-flex align-items-end">
                                                    <button type="button" class="btn btn-danger remove-social-media">Remove</button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <button type="button" id="add-social-media" class="btn btn-primary">Add Another Social
                                        Media</button>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
        document.addEventListener('DOMContentLoaded', function() {
            let socialMediaContainer = document.getElementById('social-media-accounts');
            let addButton = document.getElementById('add-social-media');

            addButton.addEventListener('click', function() {
                let index = socialMediaContainer.children.length;
                let newField = document.createElement('div');
                newField.classList.add('social-media-field', 'row', 'mb-3');
                newField.setAttribute('data-index', index);
                newField.innerHTML = `
                    <div class="col-md-5">
                        <label for="platform_${index}" class="form-label">Platform</label>
                        <select name="platform[]" id="platform_${index}" class="form-select form-control" required>
                            <option value="">Select Platform</option>
                            <option value="twitter">Twitter</option>
                            <option value="facebook">Facebook</option>
                            <option value="instagram">Instagram</option>
                            <option value="linkedin">LinkedIn</option>
                            <!-- Add more platforms as needed -->
                        </select>
                    </div>
                    <div class="col-md-5">
                        <label for="social_accounts_${index}" class="form-label">Social Account URL</label>
                        <input type="url" name="social_accounts[]" id="social_accounts_${index}" class="form-control" required placeholder="Enter the link">
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button type="button" class="btn btn-danger remove-social-media">Remove</button>
                    </div>
                `;
                socialMediaContainer.appendChild(newField);
            });

            socialMediaContainer.addEventListener('click', function(e) {
                if (e.target && e.target.matches('button.remove-social-media')) {
                    e.target.closest('.social-media-field').remove();
                }
            });
        });
    </script>
@endsection
