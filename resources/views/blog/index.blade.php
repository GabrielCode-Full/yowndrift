@extends('layouts.app')

@section('content')
   <div class="container p-3 mt-3">
        {{-- Alerts --}}
      @if (\Session::has('danger'))
      <div id="element" class="container alert alert-danger alert-dismissible fade show mt-5" role="alert" style="width: 450px;">
        <h6>{{ \Session::get('danger') }}</h6>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif

      @if (\Session::has('success'))
      <div id="element" class="container alert alert-success alert-dismissible fade show mt-5" role="alert" style="width: 450px;">
        <h6>{{ \Session::get('success') }}</h6>
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
              <div class="card-body text-truncate">
                  <p class="text-muted font-weight-bold">{{$post->name}}<span class="ml-2">{{  \Carbon\Carbon::parse ($post->created_at)->format('F d, Y') }}</span></p>
                  <p class="badge badge-success">{{$post->topic}}</p>
                  <h3 class="card-title font-weight-bold">{{$post->title}}</h3>
                  <p class="card-text">{{$post->body}}</p>
                  <a href="#">Read more...</a>
                </div>
            </div>
            @empty
            <h1 class="text-center font-weight-bold">Wow! Such empty.</h1>
            @endforelse
        </div>
      </div>
   </div>
   {{-- <div class="container">
   <form action="/blog" method="POST">
    <div class="form-group">
        <input type="text" class="form-control" id="title" placeholder="Title" name="title" style="border-bottom:none;">
        <textarea class="form-control" id="text-area" rows="3" name="body" style="border-top:none; border-bottom:none;"></textarea>
        <input type="text" class="form-control" id="title" placeholder="#topic" name="title" style="border-top:none;">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div> --}}


<!-- Modal -->
<div class="modal fade" id="Write" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="WriteLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/blog" method="POST">
          @csrf
          <div class="form-group">

              <input type="text" class="form-control @error('topic') is-invalid @enderror" id="topic" placeholder="#topic" name="topic" autofocus style="border-top:none;">

              @error('topic')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror

              <input type="text" class="form-control font-weight-bold  @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title" autofocus style="border-bottom:none;">

              @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror

              <textarea class="form-control @error('body') is-invalid @enderror" id="text-area" rows="3" name="body" autofocus style="border-top:none; border-bottom:none;"></textarea>

              @error('body')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror

          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection


{{-- Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis quos, mollitia quidem sit dolore optio quibusdam beatae odio nostrum ad et alias aut quae laboriosam aliquam repudiandae. Corrupti, architecto facilis? --}}