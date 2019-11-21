@extends('layouts.guest')

@section('content')

	<div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('website_template/images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <h1 class="mb-3 text-primary">About Us</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
              <p><a href="#" class="btn btn-primary">Contact Me</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('inc.guest.about_me')
    @include('inc.guest.video')
@stop

