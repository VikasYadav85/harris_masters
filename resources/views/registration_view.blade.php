@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header" style="background-color:rgb(100 93 93 / 20%);">Register</div>
                  <div class="card-body" style="background-color: #90e193;">
  
                      <form action="{{ route('register.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="name" class="form-control" name="name" readonly value="{{ request()->route('id') ? $fd->name : '' }}" required autofocus>
                                  @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name')  }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" readonly value="{{ request()->route('id') ? $fd->email : '' }}" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
                            <div class="col-md-12 mt-3">                          
                            <label class="mb-3 mr-1" for="gender" style="margin-left:200px;">Gender:</label>
                            <label class="radio-inline" style="margin-left:18px;" >
                                <input type="radio" id="smt-fld-1-2" {{ ($fd->gender) == 'male' ? 'checked' : '' }}  {{ ($fd->gender) == 'male' ? '' : 'disabled' }}  / >Male</label> <label class="radio-inline" >
                                <input type="radio" id="smt-fld-1-2" {{ ($fd->gender) == 'Female' ? 'checked' : '' }}  {{ ($fd->gender) == 'Female' ? '' : 'disabled' }}  / >Female</label> <label class="radio-inline" >
                                <input type="radio" id="smt-fld-1-2" {{ ($fd->gender) == 'other' ? 'checked' : '' }}  {{ ($fd->gender) == 'other' ? '' : 'disabled' }}  / >Other</label>
                                
                            </div>
                                    <div>
   
                                    <div class="col-md-12">
                                    <label class="mb-3 mr-1" for="gender" style="margin-left:170px;">Qualification:</label> 
   
                           <input class="form-control" type="text" name="qualification" value="{{ request()->route('id') ? $fd->qualification : '' }}" readonly style="margin-left: 283px;
    width: 377px;    margin-top: -46px">                              
                           </div>
                          <div class="form-group row" style="margin-top:10px;">
                              <label for="phone" class="col-md-4 col-form-label text-md-right">phone</label>
                              <div class="col-md-6">
                                  <input type="text" id="phone" class="form-control" name="phone" readonly required value="{{ request()->route('id') ? $fd->phone : '' }}" autofocus>
                                  @if ($errors->has('phone'))
                                      <span class="text-danger">{{ $errors->first('phone') }}</span>
                                  @endif
                              </div>
                          </div>  <div class="form-group row">
                              <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="address" class="form-control" name="address"readonly value="{{ request()->route('id') ? $fd->address : '' }}" required autofocus>
                                  @if ($errors->has('address'))
                                      <span class="text-danger">{{ $errors->first('address') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right" >Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" readonly value="{{ request()->route('id') ? $fd->password : '' }}" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
<!--   
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Register
                              </button> -->
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection