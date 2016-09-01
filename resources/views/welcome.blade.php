@extends('layouts.master')


@section('title')
    Welcome!
@endsection


@section('content')
  <body class="welcome">
    @include('includes.header')
      <div class="container">
        <div class="presentation">
          <h3> Get Your Badges </h3> 
        @include('includes.message-block')
        <div class="row">
          <img src="./images/pokemonBadge.svg" alt="pokemon badge">
        </div>
        <div class="row">
           <div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#signUpModal">
              Sign Up
            </button>

            <!-- Modal -->
            <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
             <div class="modal-dialog" role="document">
              <div class="modal-content">
                @include('includes.signup')
              </div>
             </div>
             </div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#signInModal">
            Sign In
          </button>

          <!-- Modal -->
          <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                @include('includes.signin')
              </div>
            </div>
          </div>
      </div>
    </div>
    </div>
</div>
</body>

@endsection