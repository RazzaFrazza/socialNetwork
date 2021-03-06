       <div class="col-md-6">
       <h3>Sign Up</h3>
       <form action={{ route('signup') }} method="post">
         <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
          <label form="email">Your Email</label>
          <input class="form-control type="text" name="email" id="email" value="{{ Request::old('email') }}">
         </div>
                  <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}"">
          <label form="first_name">Your First Name</label>
          <input class="form-control" type="text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}">
         </div>
                  <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}"">
          <label form="password">Your Password</label>
          <input class="form-control" type="password" name="password" value="{{ Request::old('password') }}"id="password">
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
         <input type="hidden" name="_token" value="{{ Session::token() }}">
       </form>
       </div>