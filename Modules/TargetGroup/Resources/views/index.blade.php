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
                                 @livewire('target-groups')
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
            <form  action="/targetgroup/create-target-group" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="heading">Title</label>
                                    <input type="text" class="form-control" name="heading"  id="Heading" data-toggle="tooltip" data-placement="bottom" title="Enter Your title" placeholder="" required>
                                    @error('heading') <span style="color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group fill">
                                    <label class="floating-label" for="type">Group</label>
                                    <select type="text" class="form-control" name="type" id="type" data-toggle="tooltip" data-placement="bottom" title="Enter Number"  required>
                                        <option value="orphans">Orphans</option>
                                        <option value="dropouts">School Dropouts</option>
                                        <option value="poor">Poor</option>
                                        <option value="polygamy">Polygamy</option>
                                        <option value="divorced">Divorced</option>
                                        <option value="talented">Talented</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group fill">
                                    <label class="floating-label" for="body">Body</label>
                                    <textarea type="text" class="form-control" name="body" id="Body" data-toggle="tooltip" data-placement="bottom" title="Body Content" required></textarea>
                                    @error('body') <span style="color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group fill">
                                    <label class="floating-label" for="photo">Photo</label>
                                    <input type="file" class="form-control" name="photo" id="Photo" data-toggle="tooltip" data-placement="bottom" title="Image" required>
                                    @error('photo') <span style="color:red;">{{ $message }}</span> @enderror
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
