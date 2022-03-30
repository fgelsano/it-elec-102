@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Add New Blog
            </div>
            <form action="/blogs/add" method="POST">
                <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label for="blog-title">Blog Title</label>
                            <input type="text" class="form-control" id="blog-title" name="blog-title" required>
                            <small id="titleHelp" class="form-text text-muted">Type whatever you feel is the best title that describes the content of this blog.</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="blog-body">Blog Content</label>
                            <textarea name="blog-body" id="blog-body" class="form-control" cols="30" rows="10" placeholder="Type the contents of your blog here..." required></textarea>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="blog-image-label">Upload</span>
                            </div>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="blog-image" aria-describedby="inputGroupFileAddon01" name="blog-image">
                              <label class="custom-file-label" for="blog-image">Choose file</label>
                            </div>
                        </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save-fill"></i>
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection