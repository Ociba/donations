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
                        <div class="col-xl-12 col-md-12">
                            @include('layouts.message')
                        </div>
                              <!-- customar project  start -->
                            <div class="col-xl-12 col-md-12">
                                 @livewire('projects')
                            </div>
                            <!-- Staustic card 8 end -->
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
   <div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Target Group Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form  action="/projects/create-projects" method="post" enctype="multipart/form-data">
                @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="floating-label" for="title">Title</label>
                                    <input type="text" class="form-control" name="title"  id="Title" data-toggle="tooltip" data-placement="bottom" title="Enter Your title" placeholder="">
                                    @error('title') <span style="color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group fill">
                                    <label class="floating-label" for="content">Body</label>
                                    <textarea type="text" class="form-control" name="content" id="Content" data-toggle="tooltip" data-placement="bottom" title="Body Content"></textarea>
                                    @error('content') <span style="color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group fill">
                                    <label class="floating-label" for="image">Photo</label>
                                    <input type="file" class="form-control" name="image" id="Image" data-toggle="tooltip" data-placement="bottom" title="Image">
                                    @error('image') <span style="color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
