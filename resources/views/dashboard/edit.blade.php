@extends('layouts.app')

@section('content')

<div class="container p-3">
    <div class="row">
        <div class="col-12 col-sm-10 mx-auto">
            <div class="card">
                <div class="card-header bg-bokara-grey text-light">
                    Update your post
                </div>
                <div class="card-body">
                    <form action="/dashboard/{{$post->post_id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
        
                            <input type="text" class="form-control rounded-0 border-bottom-0 @error('topic') is-invalid @enderror" id="topic" placeholder="Topic" name="topic" value="{{$post->topic}}">
        
                            @error('topic')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
        
                            <input type="text" class="form-control rounded-0 border-top-0 border-bottom-0 @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title" value="{{$post->title}}">
        
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            
                            <textarea class="form-control rounded-0 border-top-0 @error('body') is-invalid @enderror" id="text-area"  rows="5" placeholder="Your text here" name="editor1" value="{!!$post->body!!}"></textarea>
                            
                            @error('body')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
        
                        </div>
                        <div class="form-group d-flex justify-content-end align-items-end">
                            <button type="submit" class="btn btn-dark-green rounded-circle"><i class="far fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection