@extends('layouts.app')

@section('content')
   <div class="container p-3 mt-3">
      <div class="row d-flex flex-row justify-content-center align-items-center">
        <div class="col-12">
            <div class="card my-2 shadow-sm">
              <div class="card-body p-0">
                @foreach($posts as $post)
                    @if(strtoupper($post->topic) == "#TECHNOLOGY")
                        <div class="bg-blue d-flex justify-content-center align-items-center">
                            <img src="/img/logo/technology.svg" class="h-75 w-75 d-block d-md-none mx-auto mb-1 mb-md-0 img-custom" alt="...">
                        </div>  
                    @elseif(strtoupper($post->topic) == "#SCIENCE")
                        <div class="bg-danger d-flex justify-content-center align-items-center">
                            <img src="/img/logo/science.svg" class="h-75 w-75 d-block d-md-none mx-auto mb-1 mb-md-0 img-custom" alt="...">
                        </div>
                    @elseif(strtoupper($post->topic) == "#SOCIETY")
                        <div class="bg-dark-green d-flex justify-content-center align-items-center">
                            <img src="/img/logo/society.svg" class="h-75 w-75 d-block d-md-none mx-auto mb-1 mb-md-0 img-custom" alt="...">
                        </div>
                    @elseif(strtoupper($post->topic) == "#HEALTH")
                        <div class="bg-lighty d-flex justify-content-center align-items-center">
                            <img src="/img/logo/health.svg" class="h-75 w-75 d-block d-md-none mx-auto mb-1 mb-md-0 img-custom" alt="...">
                        </div>
                    @else
                        <div class="bg-selective-yellow d-flex justify-content-center align-items-center">
                            <img src="/img/logo/public_article.svg" class="h-75 w-75 d-block d-md-none mx-auto mb-1 mb-md-0 img-custom" alt="...">
                        </div>
                    @endif
                    <div class="overflow-hidden p-3">
                        <p class="card-name-date text-black font-weight-bold"><small class="card-name-date">Published on {{  \Carbon\Carbon::parse ($post->created_at)->format('F d, Y') }} by<span class="card-name-date text-primary ml-2">{{$post->name}}</span></small></p>
                        <p class="badge badge-dark">{{$post->topic}}</p>
                        <h3 class="card-title font-weight-bold">{{$post->title}}</h3>
                        <p class="card-text">{{$post->body}}</p>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
      </div>
   </div>

    <!-- Modal -->
    <div class="modal fade" id="Write" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="WriteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            <div class="modal-header bg-lighty border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-lighty">
                <form action="/blog" method="POST">
                @csrf
                <div class="form-group">
                    <label for="topic"><span class="badge badge-dark mx-1">#Technology</span><span class="badge badge-dark mx-1">#Science</span><span class="badge badge-dark mx-1">#Health</span><span class="badge badge-dark mx-1">#Society</span></label>
                    <input type="text" class="form-control rounded-0 @error('topic') is-invalid @enderror" id="topic" placeholder="#Topic" name="topic" autofocus style="border-top:none;">

                    @error('topic')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input type="text" class="form-control rounded-0 @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title" autofocus style="border-bottom:none;">

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <textarea class="form-control rounded-0 @error('body') is-invalid @enderror" id="text-area" rows="5" placeholder="Your text here" name="body" autofocus style="border-top:none; border-bottom:none;"></textarea>

                    @error('body')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group d-flex justify-content-end align-items-end">
                    <button type="submit" class="btn btn-blue rounded-circle"><i class="far fa-paper-plane"></i></button>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection