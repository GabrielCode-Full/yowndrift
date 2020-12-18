@extends('layouts.app')

@section('content')
  
 
   <div class="container-fluid p-3 mt-1 mt-sm-3 d-flex flex-column justify-content-center align-items-center">
      <div class="row my-3 d-flex flex-row justify-content-center align-items-center">
         <div class="d-none d-sm-block col-6">
            <img class="h-75 w-75 d-block mx-auto" src="{{ asset('img/logo/blogging.svg') }}" alt="A girl with a laptop posting something to social media.">
         </div>
         <div class="col-10 col-sm-6 mb-5 text-center text-sm-left">
            <div class="px-2 px-md-5">
               <h2 class="font-weight-bold card-name-date">Built for anyone</h2>
               <h5 class="text-muted my-3">Yowndrift is a blogging web application. Where anyone can share their ideas or knowledge to a specific topic.</h5>
               @if (Auth::guest())
               <a href="/login" class="btn btn-blue d-block d-sm-inline">Get Started</a>
               @else
               <a href="/blog" class="btn btn-blue d-block d-sm-inline">Write a post</a>
               @endif
            </div>
         </div>
      </div>

      <div class="row my-3 d-flex flex-row justify-content-center align-items-center">
         <div class="col-10 col-sm-6 text-center">
            <div class="px-2 px-md-5">
               <h2 class="font-weight-bold card-name-date">Choose your topic</h2>
               <h5 class="text-muted my-3">There are many topics that might find your interest.</h5>
               <a href="#" class="btn btn-dark-green d-block d-sm-inline">Find a topic</a>
            </div>
         </div>
         <div class="d-none d-sm-block col-6">
            <img class="h-75 w-75 d-block mx-auto" src="{{ asset('img/logo/content_creator.svg') }}" alt="A girl looking for a paper.">
         </div>
      </div>
   </div>
@endsection
