@extends('layouts.admin')
@section('title', $posts)
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        @foreach ($posts as $post)
          <div class="card mx-4 my-5" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->content}}</p>
                <p class="card-text">Aggiunto il: {{date('d-m-Y', strtotime($post->created_at))}}</p>
                <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary">Apri</a>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection

