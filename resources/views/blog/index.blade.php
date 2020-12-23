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
          {{-- display if the search is null --}}
            @if(request()->search == null)
            @forelse($posts as $post)
            <div class="card my-2 shadow-sm">
              <div class="card-body d-flex flex-column flex-md-row p-0">
                  @if($post->topic == "technology")
                    <div class="bg-blue d-flex justify-content-center align-items-center">
                      <img src="/img/logo/technology.svg" class="h-75 w-75 d-block d-md-none mx-auto mb-1 mb-md-0 img-custom" alt="A picture of a drone.">
                    </div>  
                  @elseif($post->topic == "science")
                    <div class="bg-danger d-flex justify-content-center align-items-center">
                      <img src="/img/logo/science.svg" class="h-75 w-75 d-block d-md-none mx-auto mb-1 mb-md-0 img-custom" alt="A girl testing her experiment.">
                    </div>
                  @elseif($post->topic == "society")
                    <div class="bg-dark-green d-flex justify-content-center align-items-center">
                      <img src="/img/logo/society.svg" class="h-75 w-75 d-block d-md-none mx-auto mb-1 mb-md-0 img-custom" alt="A girl looking in his window.">
                    </div>
                  @elseif($post->topic == "health")
                    <div class="bg-selective-yellow d-flex justify-content-center align-items-center">
                      <img src="/img/logo/health.svg" class="h-75 w-75 d-block d-md-none mx-auto mb-1 mb-md-0 img-custom" alt="A boy holding a dumbell.">
                    </div>
                  @else
                    <div class="bg-makara d-flex justify-content-center align-items-center">
                    <img src="/img/logo/public_article.svg" class="h-75 w-75 d-block d-md-none mx-auto mb-1 mb-md-0 img-custom" alt="A boy writing to a white board.">
                    </div>
                  @endif
                  <div class="overflow-hidden p-3">
                    <p class="card-name-date text-black font-weight-bold"><small class="card-name-date">Published on {{  \Carbon\Carbon::parse ($post->created_at)->format('F d, Y') }} by<span class="card-name-date text-primary ml-2">{{$post->name}}</span></small></p>
                    <p class="badge badge-dark">{{$post->topic}}</p>
                    <h3 class="card-title font-weight-bold">{{$post->title}}</h3>
                    <p class="card-text text-truncate">{{$post->body}}</p>
                    <a href="/blog/{{$post->post_id}}" class="btn btn-outline-blue d-block d-md-inline stretched-link">Read content</a>
                  </div>

              </div>
            </div>
            @empty
            <div class="row my-3">
              <div class="col-sm-12">
                  <div class="card shadow-sm">
                    <div class="card-body d-flex flex-column flex-md-row justify-content-center align-items-center">
                      <img class="d-block banner h-25 w-25 mr-5" src="{{ asset('img/logo/no_data.svg ') }}" alt="Products Banner">
                      <div class="p-2 p-sm-0">
                          <h3 class="card-title font-weight-bold text-center text-md-left card-name-date">No post has been created</h3>
                          <p class="card-text text-muted">Would you like to share your knowledge to everyone?</p>
                          @if (Auth::guest())
                            <a href="/login" class="btn btn-dark-green d-block d-sm-inline">Write a post</a>
                          @else
                            <a href="#" class="btn btn-dark-green d-block d-sm-inline" data-toggle="modal" data-target="#Write">Write a post</a>
                          @endif
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            @endforelse

            {{-- search else --}}
            @else 

            @forelse($searches as $search)
            <div class="card my-2 shadow-sm">
              <div class="card-body d-flex flex-column flex-md-row p-0">
                  @if($search->topic == "technology")
                    <div class="bg-blue d-flex justify-content-center align-items-center">
                      <img src="/img/logo/technology.svg" class="h-75 w-75 d-block d-md-none mx-auto mb-1 mb-md-0 img-custom" alt="A picture of a drone.">
                    </div>  
                  @elseif($search->topic == "science")
                    <div class="bg-danger d-flex justify-content-center align-items-center">
                      <img src="/img/logo/science.svg" class="h-75 w-75 d-block d-md-none mx-auto mb-1 mb-md-0 img-custom" alt="A girl testing her experiment.">
                    </div>
                  @elseif($search->topic == "society")
                    <div class="bg-dark-green d-flex justify-content-center align-items-center">
                      <img src="/img/logo/society.svg" class="h-75 w-75 d-block d-md-none mx-auto mb-1 mb-md-0 img-custom" alt="A girl looking in his window.">
                    </div>
                  @elseif($search->topic == "health")
                    <div class="bg-selective-yellow d-flex justify-content-center align-items-center">
                      <img src="/img/logo/health.svg" class="h-75 w-75 d-block d-md-none mx-auto mb-1 mb-md-0 img-custom" alt="A boy holding a dumbell.">
                    </div>
                  @else
                    <div class="bg-makara d-flex justify-content-center align-items-center">
                    <img src="/img/logo/public_article.svg" class="h-75 w-75 d-block d-md-none mx-auto mb-1 mb-md-0 img-custom" alt="A boy writing to a white board.">
                    </div>
                  @endif
                  <div class="overflow-hidden p-3">
                    <p class="card-name-date text-black font-weight-bold"><small class="card-name-date">Published on {{  \Carbon\Carbon::parse ($search->created_at)->format('F d, Y') }} by<span class="card-name-date text-primary ml-2">{{$search->name}}</span></small></p>
                    <p class="badge badge-dark">{{$search->topic}}</p>
                    <h3 class="card-title font-weight-bold">{{$search->title}}</h3>
                    <p class="card-text text-truncate">{{$search->body}}</p>
                    <a href="/blog/{{$search->post_id}}" class="btn btn-outline-blue d-block d-md-inline stretched-link">Read content</a>
                  </div>

              </div>
            </div>
            @empty
            <div class="row my-3">
              <div class="col-sm-12">
                  <div class="card shadow-sm">
                    <div class="card-body d-flex flex-column flex-md-row justify-content-center align-items-center">
                      <img class="d-block banner h-25 w-25 mr-5" src="{{ asset('img/logo/no_data.svg ') }}" alt="Products Banner">
                      <div class="p-2 p-sm-0">
                          <h3 class="card-title font-weight-bold text-center text-md-left">No post found</h3>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            @endforelse
            @endif
        </div>
      </div>
   </div>

<!-- Create post - Modal -->
<div class="modal fade" id="Write" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="WriteLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-bokara-grey text-light border-bottom-0">
        Create a post
        <a href="#" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </a>
      </div>
      <div class="modal-body bg-lighty">
        <form action="/blog" method="POST">
          @csrf
          <div class="form-group">
              <label for="topic"><span class="badge badge-dark mx-1">technology, health, science, society</span></label>
              
              <input type="text" class="form-control rounded-0 border-bottom-0 @error('topic') is-invalid @enderror" id="topic" placeholder="Topic" name="topic">

              @error('topic')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror

              <input type="text" class="form-control rounded-0 border-top-0 border-bottom-0 @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title">

              @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
              
              <textarea class="form-control rounded-0 border-top-0 @error('body') is-invalid @enderror" id="text-area"  rows="5" placeholder="Your text here" name="body"></textarea>
                
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