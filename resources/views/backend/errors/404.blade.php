@extends('backend.layouts.base')

@push('all_css')

  <!-- Backend Page Extra CSS -->
  @stack('css')
@endpush

@section('body')

<body class="app flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="clearfix">
          <h1 class="float-left display-3 mr-4">404</h1>
          <h4 class="pt-3">Oops! You're lost.</h4>
          <p class="text-muted">The page you are looking for was not found.</p>
        </div>
        <div class="input-prepend input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="fa fa-search"></i>
            </span>
          </div>
          <input class="form-control" id="prependedInput" size="16" type="text" placeholder="What are you looking for?">
          <span class="input-group-append">
            <button class="btn btn-info" type="button">Search</button>
          </span>
        </div>
      </div>
    </div>
  </div>


  @push('all_scripts')

    <!-- Backend Page Extra Scripts -->
    @stack('scripts')
  @endpush

@endsection