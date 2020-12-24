@extends('layouts.app')

@section('content')
  
 
   <div class="container-fluid d-flex flex-column justify-content-center align-items-center">

      {{-- first content --}}
      <div class="row py-3 py-sm-5 mb-3 d-flex flex-row justify-content-center align-items-center bg-gradient">
         <div class="col-6 my-3">
            <img class="h-75 w-75 d-block mx-auto home-image" src="{{ asset('img/logo/fashion_blogging.svg') }}" alt="A girl with a laptop posting something to social media.">
         </div>
         <div class="col-11 col-sm-6 mb-0 mb-sm-5 text-left">
            <div class="px-2 px-md-5 text-light">
               <h1 class="display-4 font-weight-bold">Built for Bloggers</h1>
               <p class="my-3 text-muted-light">Yowndrift is a blogging web application, where anyone can share their ideas or knowledge on a specific topic.</p>
               @if (Auth::guest())
               <a href="/login" class="btn btn-dark-green d-block d-sm-inline">Get Started</a>
               @else
               <a href="/blog" class="btn btn-dark-green d-block d-sm-inline">Write a post</a>
               @endif
            </div>
         </div>
      </div>

      {{-- second content --}}
      <div class="row py-3 py-sm-5 mt-3 d-flex flex-row justify-content-center align-items-center">
         <div class="col-11 col-sm-6 ml-0 ml-sm-5 text-left order-2 order-sm-1">
            <div class="px-2 px-md-5">
               <h1 class="display-4 font-weight-bold">Choose your topic</h1>
               <p class="text-muted my-3">There are many topics that might find your interest.</p>
               <a href="/explore" class="btn btn-blue d-block d-sm-inline">Find a topic</a>
            </div>
         </div>
         <div class="col-5 order-1 order-sm-2">
            <img class="h-75 w-75 d-block mx-auto home-image" src="{{ asset('img/logo/content_creator.svg') }}" alt="A girl looking to a paper.">
         </div>
      </div>
      
   </div>
@endsection