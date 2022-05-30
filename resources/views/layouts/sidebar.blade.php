<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark logo-dark">
    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="app-brand demo bg-primary">
        <span class="app-brand-logo demo">
            {{--<img src="{{ asset('assets/img/partner/11.png')}}" alt="Brand Logo"style="width:40px; height:40px;" class="img-fluid">--}}
        </span>
        <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Joome Support Organization</a>
        <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
        </a>
    </div>
    <div class="sidenav-divider mt-0"></div>

    <!-- Links -->
    <ul class="sidenav-inner py-1">

        <!-- Dashboards -->
        <li  @if(\Request::route()->getName() == "Dashboard") class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/dashboard" class="sidenav-link">
                <i class="sidenav-icon feather icon-home"></i>
                <div>Admin Dashboards</div>
            </a>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="/targetgroup/" class="sidenav-link">
                <i class="sidenav-icon feather icon-users"></i>
                <div>Target Groups</div>
                <div class="pl-1 ml-auto">
                    <div class="badge badge-primary">10+</div>
                </div>
            </a>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li  @if(\Request::route()->getName() == "Projects") class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/projects/other-projects" class="sidenav-link">
                <i class="sidenav-icon feather icon-grid"></i>
                <div>Projects</div>
                <div class="pl-1 ml-auto">
                    <div class="badge badge-danger">30+</div>
                </div>
            </a>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="/admin/blog" class="sidenav-link">
                <i class="sidenav-icon feather icon-layout"></i>
                <div>Blog</div>
            </a>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li @if(\Request::route()->getName() == "interests") class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/admin/donations" class="sidenav-link">
                <i class="sidenav-icon ion ion-md-wallet"></i>
                <div>Donations</div>
            </a>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="/admin/messages" class="sidenav-link">
                <i class="sidenav-icon feather icon-mail"></i>
                <div>Messages</div>
            </a>
        </li>
        <!-- Layouts -->
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="/admin/subscribers" class="sidenav-link">
                <i class="sidenav-icon feather icon-user"></i>
                <div>Subscribers</div>
            </a>
        </li>
    </ul>
</div>