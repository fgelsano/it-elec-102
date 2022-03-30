@extends('layouts.app')
        
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content container">
        <div class="row">
            @foreach ($blogs as $blog)
              <div class="col-sm-4 mt-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">{{ $blog['title'] }}</h5>
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($blog['body'], $limit = 150, $end = '...') }}</p> 
                    <a href="#" class="btn btn-primary">Read More</a>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
