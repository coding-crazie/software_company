<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>New Project</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
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
      <!-- partial:../../partials/_sidebar.html -->
 <x-admin-side></x-admin-side>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <x-admin-nav></x-admin-nav>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
        
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">     Compose New Email  </h4>
                    <p class="card-description text-center" style="color:red"> Must Type All Important Fields </p>
                    <form role="form" class="form-horizontal"action="{{route('MakeMail')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->has('name'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                          {{ $errors->first('name') }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                          <div class="form-group">
                            
                              <label class="col-lg-2 control-label">To</label>
                              <div class="col-lg-10">
                                  <input type="text" placeholder=""name="name" id="inputEmail1" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                            @if ($errors->has('subject'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                              {{ $errors->first('subject') }}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                              <label class="col-lg-2 control-label">Subject </label>
                              <div class="col-lg-10">
                                  <input type="text" name="subject" placeholder="Enter Cool Subject" id="cc" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                               @if ($errors->has('email'))
<div class="alert alert-danger alert-dismissible" role="alert">
{{ $errors->first('email') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
                              <label class="col-lg-2 control-label">Email Address </label>




                              <div class="col-lg-10">
                                  <input type="email" name="email" placeholder="Enter Email" id="inputPassword1" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              @if ($errors->has('message'))
<div class="alert alert-danger alert-dismissible" role="alert">
{{ $errors->first('message') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
                              <label class="col-lg-2 control-label">Message</label>
                              <div class="col-lg-10">
                                  <textarea rows="10" cols="30" class="form-control" id="" name="message"></textarea>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10">
                                  <span class="btn green fileinput-button">
                                    <i class="fa fa-plus fa fa-white"></i>
                                    <span>Attachment</span>
                                    <input type="file" name="files[]" multiple >
                                  </span>
                              
                              </div>
                          </div>
                  <button type="submit" class="btn btn-outline-success">Send Mail</button>

                      </form>
                  </div>
                </div>
              </div>
         
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/select2/select2.min.js"></script>
    <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <script src="../../assets/js/typeahead.js"></script>
    <script src="../../assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>