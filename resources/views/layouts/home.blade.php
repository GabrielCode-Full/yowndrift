@extends('layouts.app')

@section('content')
  
 
   <div class="container-fluid d-flex flex-column justify-content-center align-items-center">

      {{-- first content --}}
      <div class="row my-3 d-flex flex-row justify-content-center align-items-center">
         <div class="col-6">
            <img class="h-75 w-75 d-block mx-auto" src="{{ asset('img/logo/blogging.svg') }}" alt="A girl with a laptop posting something to social media.">
         </div>
         <div class="col-10 col-sm-6 mb-5 text-left">
            <div class="px-2 px-md-5">
               <h2 class="font-weight-bold">Built for anyone</h2>
               <p class="text-muted my-3">Yowndrift is a blogging web application, where anyone can share their ideas or knowledge to a specific topic.</p>
               @if (Auth::guest())
               <a href="/login" class="btn btn-blue d-block d-sm-inline">Get Started</a>
               @else
               <a href="/blog" class="btn btn-blue d-block d-sm-inline">Write a post</a>
               @endif
            </div>
         </div>
      </div>

      {{-- second content --}}
      <div class="row mt-3 d-flex flex-row justify-content-center align-items-center">
         <div class="col-10 col-sm-6 ml-0 ml-sm-5 text-left order-2 order-sm-1">
            <div class="px-2 px-md-5">
               <h2 class="font-weight-bold">Choose your topic</h2>
               <p class="text-muted my-3">There are many topics that might find your interest.</p>
               <a href="/explore" class="text-success">Find a topic</a>
            </div>
         </div>
         <div class="col-5 order-1 order-sm-2">
            <img class="h-75 w-75 d-block mx-auto" src="{{ asset('img/logo/content_creator.svg') }}" alt="A girl looking to a paper.">
         </div>
      </div>
      
   </div>
@endsection