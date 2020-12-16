@extends('layouts.app')

@section('content')
   <div class="container p-3 mt-3">
        {{-- Alerts --}}
      @if (\Session::has('danger'))
      <div id="element" class="container alert alert-danger alert-dismissible fade show" role="alert">
        <h6>{{ \Session::get('danger') }}</h6>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif

      @if (\Session::has('success'))
      <div id="element" class="container alert alert-light alert-dismissible fade show" role="alert">
        <h6><i class="mr-1 fas fa-check-circle text-success"></i>{{ \Session::get('success') }}</h6>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      @endif
      {{-- end of alerts --}}
      <div class="row d-flex flex-row justify-content-center align-items-center">
        <div class="col-12">
            @forelse($posts as $post)
            <div class="card my-2 shadow-sm">
              <div class="card-body d-flex flex-column flex-md-row">
                  @if($post->topic == "#Technology")
                    <img src="/img/logo/blogging.svg" class="h-25 w-25 d-block mx-auto" alt="...">
                  @else
                    <img src="/img/logo/add_notes.svg" class="h-25 w-25 d-block mx-auto" alt="...">
                  @endif
                  <div class="overflow-hidden">
                    <p class="card-name-date text-black font-weight-bold"><small class="card-name-date">Published on {{  \Carbon\Carbon::parse ($post->created_at)->format('F d, Y') }} by<span class="card-name-date text-primary ml-2">{{$post->name}}</span></small></p>
                    <p class="badge badge-dark">{{$post->topic}}</p>
                    <h3 class="card-title font-weight-bold">{{$post->title}}</h3>
                    <p class="card-text text-truncate">{{$post->body}}</p>
                    <a href="/blog/{{$post->post_id}}" class="btn btn-outline-blue">Read content</a>
                  </div>

              </div>
            </div>
            @empty
            <h1 class="text-center font-weight-bold">Wow! Such empty.</h1>
            @endforelse
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


{{-- Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis quos, mollitia quidem sit dolore optio quibusdam beatae odio nostrum ad et alias aut quae laboriosam aliquam repudiandae. Corrupti, architecto facilis? --}}