<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/assets/images/favicon.png" />
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
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tickets tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
        
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Tickets Table</h4>
                    <form action="" > 
                      <div class="form-group">
                          <input type="search" name="search" class="form-control" id="exampleInputEmail3" placeholder="Search">
                          <div>
                              <br>
                              <button button type="submit" class="btn btn-primary mr-2 w-100">Search</button>
                              <br>
                              <br>

                              <a href="/My-Tickets"   class="btn btn-warning mr-2 w-100">Clear</a>

                          </div>
                        </div>
                </form>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Id</th>
                            <th> Client Name </th>
                            <th> Client Email </th>
                            <th>Ticket Type</th>
                            <th>Ticket Description</th>
                            <th>Ticket Status</th>
                            <th>Update</th>
                            <th>Delete</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($ticket as $tickets)
                                
                          <tr>
                            <td> {{$tickets->id}} </td>
                            <td> {{$tickets->name}} </td>
                            <td> {{$tickets->email}} </td>
                            <td> {{$tickets->type}} </td>
                            <td> {{$tickets->description}} </td>
                            <td> {{$tickets->status}} </td>
                         
                            <td><a href="{{url('Edit-Ticket',$tickets->id)}}" class="btn btn-outline-warning">Edit </a></td>
                            <td><a href="{{url('Delete-Ticket',$tickets->id)}}" class="btn btn-outline-danger">Delete </a></td>
                            
    
                          @endforeach
                     
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer" style="margin-top: 100%">
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
    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets/js/off-canvas.js"></script>
    <script src="/assets/js/hoverable-collapse.js"></script>
    <script src="/assets/js/misc.js"></script>
    <script src="/assets/js/settings.js"></script>
    <script src="/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>