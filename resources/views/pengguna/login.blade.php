@extends('default')
@section('content')
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
      <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left pt-4 pb-5 pl-4 pr-4 px-sm-5">
            <div class="brand-logo d-flex justify-content-center">
              <img src="{{asset('assets/images/logo tb1.png')}}" alt="logo">
            </div>
            <h4>Admin Area</h4>
            <h6 class="font-weight-light">Log In here</h6>
            <form action="{{route('postlogin')}}" method="POST" class="pt-3">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="mt-3">
                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
              </div>
              <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="form-check"> -->
                  
                </div>
                
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
@endsection