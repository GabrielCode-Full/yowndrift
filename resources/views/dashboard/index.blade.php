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
              <div class="card-body d-flex flex-column flex-md-row p-0">
                  <div class="overflow-hidden p-3">
                    <p class="card-name-date text-black font-weight-bold"><small class="card-name-date"><span class="text-primary">You</span> published this post on {{  \Carbon\Carbon::parse ($post->created_at)->format('F d, Y') }}</small></p>
                    <p class="badge badge-dark">{{$post->topic}}</p>
                    <h3 class="card-title font-weight-bold">{{$post->title}}</h3>
                    <div class="text-truncate card-custom-body">
                      <p class="card-text">{!!$post->body!!}</p>
                    </div>
                    <hr>
                      <div class="d-flex flex-row justify-content-around align-items-center p-0 m-0">
                        <a href="/blog/{{$post->post_id}}" class="btn btn-white d-block d-md-inline"><i class="fas fa-chalkboard mr-0 mr-sm-2 text-primary"></i><span class="d-none d-sm-inline">Read content</span></a>
                        <a href="dashboard/{{$post->post_id}}/edit" class="btn btn-white d-block d-md-inline"><i class="fas fa-pen mr-0 mr-sm-2 text-success"></i><span class="d-none d-sm-inline">Edit post</span></a>
                        <form class="" action="/dashboard/{{$post->post_id}}" method="POST">
                          @method('DELETE')
                              <button type="submit" class="btn btn-white d-block d-md-inline"><i class="fas fa-trash-alt mr-0 mr-sm-2 text-danger"></i><span class="d-none d-sm-inline">Delete post</span></button>
                          @csrf
                        </form>
                    </div>
                  </div>

              </div>
              <div class="modal fade" id="Delete" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="DeleteLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                    <div class="modal-header bg-lighty border-bottom-0">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body bg-lighty">
                      <form class="" action="/dashboard/{{$post->post_id}}" method="POST">
                        @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger d-block d-md-inline mt-3">Delete post</button>
                        @csrf
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @empty
            <div class="row my-3">
              <div class="col-sm-12">
                  <div class="card shadow-sm">
                    <div class="card-body d-flex flex-column flex-md-row justify-content-center align-items-center">
                      <img class="d-block banner h-50 w-50 mr-5" src="{{ asset('img/logo/typewritter.svg ') }}" alt="Products Banner">
                      <div class="p-2 p-sm-0">
                          <h3 class="card-title font-weight-bold text-center text-md-left">You haven't created any post yet.</h3>
                          <a href="/blog" class="btn btn-selective-yellow d-block d-md-inline mt-3">Write a post</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            @endforelse
        </div>
      </div>
   </div>
@endsection