@extends('layouts.master')
@section('title', 'Home')
@section('content')
<div class="container-fluid">
    @if(count($posts))
    @foreach($posts as $post)
    <div class="card">
        <h2 class="card-header">{{ $post->title }}</h2>
        <div class="card-body">
            <blockquote class="mb-0">
                <p>
                    {{ $post->description }}
                </p>
                <footer class="blockquote-footer text-right">
                    {{ $post->admin->firstname.' '.$post->admin->lastname }}
                </footer>
            </blockquote>
        </div>
        <div class="card-footer text-right">
            <small class="text-muted">Posted {{ ($post->created_at)->diffForHumans() }}</small>
        </div>
    </div>
    @endforeach
    @else
    <div class="d-flex align-items-center text-center justify-content-center" style="height: 100vh;">
        <h1 class="p-2 text-muted" style="font-size: 86px">No posts yet!</h1>
  </div>
  @endif
</div>
@endsection