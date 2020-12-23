@extends('layouts.app')

@section('content')
   <div class="container p-3 mt-3">
      <div class="row d-flex flex-row justify-content-center align-items-center">
        <div class="col-12">
            <div class="card my-2 shadow-sm">
              <div class="card-body p-0">
                @foreach($posts as $post)
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
                        <p class="card-text">{{$post->body}}</p>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
      </div>
   </div>
@endsection