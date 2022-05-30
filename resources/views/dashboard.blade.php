<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
   @include('layouts.title')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description"
        content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
   @include('layouts.css')

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            @include('layouts.sidebar')
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                @include('layouts.navbar')
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        @include('layouts.breadcrumbs')
                        <div class="row">
                              <!-- customar project  start -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            <div class="col-auto">
                                                <i class="fas fa-user-md f-36 text-info"></i>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">Staff</h6>
                                                <h2 class="m-b-0"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            <div class="col-auto">
                                                <i class="fas fa-user-injured f-36 text-danger"></i>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">Investors</h6>
                                                <h2 class="m-b-0"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            <div class="col-auto">
                                                <i class="fas fa-user-nurse f-30 text-success"></i>
                                            </div>
                                            <div class="col-auto">
                                                <h6 class="text-muted m-b-10">Borrowers (Clients)</h6>
                                                <h2 class="m-b-0"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            <div class="col-auto">
                                            <h6 class="text-muted m-b-10">Amount Deposited</h6>
                                            </div>
                                            <div class="col-auto">
                                                
                                                <h2 class="m-b-0"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- Staustic card 8 Start -->
                             <div class="col-xl-3 col-md-6">
                                <div class="card bg-pattern-3-dark mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-mail bg-primary ui-rounded-icon"></i>
                                        <h4 class="mt-2"> Amount Borrowed</h4>
                                        <p class="mb-3 text-primary">Without Interest</p>
                                        <p class="mb-3"><h4></h4></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-pattern-3-dark mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-twitter bg-success ui-rounded-icon"></i>
                                        <h4 class="mt-2"> Amount Paid</h4>
                                        <p class="mb-3 text-primary">Without Interest</p>
                                        <p class="mb-3"><h4></h4></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-pattern-3-dark mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-briefcase bg-danger ui-rounded-icon"></i>
                                        <h4 class="mt-2">Loan Not Paid</h4>
                                        <p class="mb-3 text-primary">Without Interest</p>
                                        <p class="mb-3"><h4></h4></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-pattern-3-dark mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-shopping-cart bg-warning ui-rounded-icon"></i>
                                        <h4 class="mt-2"> Interest Amount</h4>
                                        <p class="mb-3 text-primary">For Company</p>
                                        <p class="mb-3"><h4></h4></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Staustic card 8 end -->
                        </div>
                        <div class="row">
                          <!-- Staustic card 11 Start -->
                          <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h5>Overdue Charge Amount</h5>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <label class="badge badge-pill text-white badge-warning">1,000 Per Day <i class="m-l-10 feather icon-arrow-down"></i></label>
                                            </div>
                                        </div>
                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-warning" style="width:35%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h5>No. of Overdue Clients</h5>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <label class="badge badge-pill badge-primary"> <i class="m-l-10 feather icon-arrow-up"></i></label>
                                            </div>
                                        </div>
                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-primary" style="width:35%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h5>Total Overdue Amount</h5>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <label class="badge badge-pill badge-success"><i class="m-l-10 feather icon-arrow-down"></i></label>
                                            </div>
                                        </div>
                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-success" style="width:85%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h5>Overdue + Interest</h5>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <label class="badge badge-pill badge-danger"> <i class="m-l-10 feather icon-arrow-down"></i></label>
                                            </div>
                                        </div>
                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-danger" style="width:15%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Staustic card 11 end -->
                        </div>
                    </div>
                    <!-- [ content ] End -->

                    <!-- [ Layout footer ] Start -->
                    @include('layouts.footer')
                    <!-- [ Layout footer ] End -->
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
        
    </div>
    <!-- [ Layout wrapper] End -->

    <!-- Modal -->
    
    <!-- Core scripts -->
   @include('layouts.javascript')  
</body>
</html>
