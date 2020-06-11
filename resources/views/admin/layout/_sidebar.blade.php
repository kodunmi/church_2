<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src={{ "https://ui-avatars.com/api/?name=".auth()->user()->lastname."+".auth()->user()->firstname."&background=9a55ff&color=fff&size=50" }}
                        alt="image">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span
                        class="font-weight-bold mb-2">{{auth()->user()->firstname.' '.auth()->user()->lastname}}</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item {{ Route::currentRouteName() == 'admin.dashboard'? 'active' : ''}}">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item  {{ Route::currentRouteName() == 'event.index'? 'active' : '' }}">
            <a class="nav-link" href="{{ route('event.index')}}">
                <span class="menu-title">Event</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        <li class="nav-item  {{ Route::currentRouteName() == 'post.index'? 'active' : '' }}">
            <a class="nav-link" href="{{ route('post.index')}}">
                <span class="menu-title">Blog</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        <li class="nav-item sidebar-actions">
            <span class="nav-link">
                <div class="border-bottom">
                    <h6 class="font-weight-normal mb-3">Administrator</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4" type="button" data-toggle="modal"
                    data-target="#add-admin">+ Add Admin</button>
            </span>
        </li>
    </ul>
</nav>
