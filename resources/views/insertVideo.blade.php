@extends('layouts.navbar')

@section('style')
    <link rel="stylesheet" type="text/css" href="styles/insert.css">
@endsection

@section('content')
<div class="insertbody">
  <?php
  if($wrong_url) echo "<h1 style='margin-top: 100px; color: white;'> please use correct url</h1>"
  
  ?>
  <div class="space"></div>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Insert My Video</div>

                  <div class="card-body">
                      <form method="POST" action="/insertVideo">
                          @csrf

                          <div class="form-group row">
                              <div class="col-md-6">
                                  <input id="v" type="" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="v"/>
                              </div>
                          </div>
                          <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      Submit
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
