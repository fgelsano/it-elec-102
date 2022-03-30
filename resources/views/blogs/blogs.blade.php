@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h4>My Blogs</h4>
                </div>
                <div class="col-6">
                    <a href="" class="btn btn-danger btn-sm float-right">Bulk Delete</a>
                    <a href="/blogs" class="btn btn-primary btn-sm float-right mr-3">Add New Blog</a>
                </div>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col" width="5%">
                    <input type="checkbox" name="id" id="">
                </th>
                <th scope="col" width="50%">Title</th>
                <th scope="col" width="20%">Date Posted</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($blogs as $blogItem)
                <tr>
                    <th scope="row">
                        <input type="checkbox" name="id" id="blog-id-{{ $blogItem['id'] }}">
                    </th>
                    <td>{{ $blogItem['title'] }}</td>
                    <td>{{ $blogItem['created_at'] }}</td>
                    <td>
                        <a href="/blog/{{ $blogItem['id'] }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/blog/{{ $blogItem['id'] }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
