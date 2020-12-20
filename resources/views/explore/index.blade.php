@extends('layouts.app')


@section('content')

    <div class="container p-3 my-3">
        <div class="row my-0 m-sm-3 d-flex flex-column flex-sm-row justify-content-center align-items-center">
            <div class="col-12 col-sm-6 my-3 my-sm-0">
                <div class="card card-explore" style="height: 355px;">
                    <div class="bg-blue d-flex justify-content-center align-items-center">
                        <img class="card-img-top h-50 w-50 d-block mx-auto" src="{{ asset('img/logo/technology.svg ') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title card-name-date font-weight-bold">Technology</h5>
                      <p class="card-text">Technology is the sum of techniques, skills, methods, and processes used in the production of goods or services or in the accomplishment of objectives, such as scientific investigation.</p>
                      <a href="/blog?search=technology" class="btn btn-blue d-block d-sm-inline">Explore</a>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 my-3 my-sm-0">
                <div class="card card-explore" style="height: 355px;">
                    <div class="bg-selective-yellow d-flex justify-content-center align-items-center">
                        <img class="card-img-top h-50 w-50 d-block mx-auto" src="{{ asset('img/logo/health.svg ') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title card-name-date font-weight-bold">Health</h5>
                      <p class="card-text">Health is a state of physical, mental and social well-being in which disease and infirmity are absent. The meaning of health has evolved over time.</p>
                      <a href="/blog?search=health" class="btn btn-blue d-block d-sm-inline">Explore</a>
                    </div>
                  </div>
            </div>
        </div>

        <div class="row my-0 m-sm-3 d-flex flex-column flex-sm-row justify-content-center align-items-center">
            <div class="col-12 col-sm-6 my-3 my-sm-0">
                <div class="card card-explore" style="height: 410px;">
                    <div class="bg-danger d-flex justify-content-center align-items-center">
                        <img class="card-img-top h-50 w-50 d-block mx-auto" src="{{ asset('img/logo/science.svg ') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title card-name-date font-weight-bold">Science</h5>
                      <p class="card-text">Science, any system of knowledge that is concerned with the physical world and its phenomena and that entails unbiased observations and systematic experimentation.</p>
                      <a href="/blog?search=science" class="btn btn-blue d-block d-sm-inline">Explore</a>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 my-3 my-sm-0">
                <div class="card card-explore" style="height: 410px;">
                    <div class="bg-dark-green d-flex justify-content-center align-items-center">
                         <img class="card-img-top h-50 w-50 d-block mx-auto" src="{{ asset('img/logo/society.svg ') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title card-name-date font-weight-bold">Society</h5>
                      <p class="card-text">Society is a group of individuals involved in persistent social interaction sharing the same  social territory, typically subject to the same political authority and dominant cultural expectations.</p>
                      <a href="/blog?search=society" class="btn btn-blue d-block d-sm-inline">Explore</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>

@endsection