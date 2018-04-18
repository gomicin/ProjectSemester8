@extends('layouts.layoutadmin')
@section('title')
  Admin Profile
@endsection
@section('body')
  {{-- <div class="col-lg-4 col-md-6">
      <div class="card">
          <div class="card-header">
              <strong class="card-title mb-3">Profile Card</strong>
          </div>
          <div class="card-body">
              <div class="mx-auto d-block">
                  <img class="rounded-circle mx-auto d-block" src="images/admin.jpg" alt="Card image cap">
                  <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                  <div class="location text-sm-center"><i class="fa fa-map-marker"></i> California, United States</div>
              </div>
              <hr>
              <div class="card-text text-sm-center">
                  <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                  <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                  <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                  <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
              </div>
          </div>
      </div>
  </div> --}}
  {{$admin->name}}
@endsection
