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
<x-client-side></x-client-side>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <x-client-nav></x-client-nav>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Project tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
        
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Project Table</h4>
                    <form action="" > 
                        <div class="form-group">
                            <input type="search" name="search" class="form-control" id="exampleInputEmail3" placeholder="Search">
                            <div>
                                <br>
                                <button button type="submit" class="btn btn-primary mr-2 w-100">Search</button>
                                <br>
                                <br>

                                <a href="/My-Projects"   class="btn btn-warning mr-2 w-100">Clear</a>

                            </div>
                          </div>
                    </form>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Project Name </th>
                            <th> Client Name </th>
                            <th> Client Email </th>
                            <th>Project Type</th>
                            <th>Project Description</th>
                            <th>Remarks</th>
                            <th>Project Progress</th>

                            <th>Amount </th>
                            <th>Payment Method</th>
                            <th>See Images </th>
                            <th>Remarks</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($project_details as $project_detail)
                                
                          <tr>
                            <td> {{$project_detail->name}} </td>
                         
                            <td> {{Auth::user()->name}} </td>
                            <td> {{Auth::user()->email}}  </td>
                            <td> {{$project_detail->type}} </td>
                            <td> {{$project_detail->description}} </td>
                            @if ($project_detail->remarks!= Null)
                            <td>Done  </td>
                                @else
                            <td>Give Remarks  </td>

                            @endif
                            @php
                                // $pro="90%" ;
                                $pro=$project_detail->progress ;

                            @endphp
                               <td>  <div class="progress">
                                <div class="progress-bar bg-success" style="width:{{$pro}}" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                
                                
                              </div></td>
                            <td><span class="btn btn-outline-info">${{$project_detail->amount}} </span></td>
                            <td> {{$project_detail->payment_method}} </td>
                            <td><a href="{{url('My-Project-Images',$project_detail->id)}}" class="btn btn-outline-warning">See Images </a></td>
                            <td><a href="{{url('My-Project-Remarks',$project_detail->id)}}" class="btn btn-outline-success w-100" >Give Remarks </a></td>
                            
    
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
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-client-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
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