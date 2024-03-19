<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth forget-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                @if (session('success'))
                <div class="alert alert-danger" role="alert" style="color: red">
                    {{ session('success') }}
                </div>
            @endif

               @if (session('warning'))
                <div class="alert alert-danger" role="alert" style="color: red">
                    {{ session('warning') }}
                </div>
            @endif
            
            @if($errors->has('email'))
            <div class="alert alert-danger" role="alert" style="color: red">
            {{ $errors->first('email') }}
                </div>
        @endif
            
                <h3 class="card-title text-left mb-3">Change Password</h3>
            
                <form   action="{{ route('reset.password.post') }}" method="POST">
                
                    @csrf
                    <div class="mb-3">
                        <input type="hidden" name="token" value="{{$token}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                        @if ($errors->has('email'))
     <span class="text-danger">{{ $errors->first('email') }}</span>
    @endif
                       <label class="form-label fs-6">Email address</label>
                       <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                   </div>
                   <div class="mb-3">
                   @if ($errors->has('password'))
     <span class="text-danger">{{ $errors->first('password') }}</span>
    @endif
                       <label class="form-label fs-6">Password</label>
                       <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
                   </div>
    
                   <div class="mb-3">
                   @if ($errors->has('password_confirmation'))
     <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
    @endif
                       <label class="form-label fs-6">Confirm Password</label>
                       <input type="password" name="password_confirmation" class="form-control" id="Password" placeholder="Password">
                   </div>
                
               
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  {{-- <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div> --}}
                  <p class="sign-up">Getting Error <a href="/contact"> Contact Now </a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>