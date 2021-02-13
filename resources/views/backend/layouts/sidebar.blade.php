@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{('/home')}}" class="brand-link">
        <img src="{{asset('backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{(!empty(Auth::user()->image))?url(Auth::user()->image):url('backend/upload/02.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('home')}}" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <ul class="nav nav-treeview">
                        @if(Auth::user()->usertype == 'Admin')
                        <li class="nav-item has-treeview {{($prefix=='/user')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Manage User
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('users_view')}}" class="nav-link {{($route=='users_view')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View User</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        {{-- <li class="nav-item has-treeview {{($prefix=='/personal')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Manage Info
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview {{($prefix=='/personal')?'menu-open':''}}">
                                <li class="nav-item">
                                    <a href="{{route('view.info')}}" class="nav-link {{($route=='view.info')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Your Profile</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview {{($prefix=='/profile')?'menu-open':''}}">
                                <li class="nav-item">
                                    <a href="{{route('change.password')}}" class="nav-link {{($route=='change.password')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Change Password</p>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="nav-item has-treeview {{($prefix=='/menu')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Manage Menu
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview {{($prefix=='/menu')?'menu-open':''}}">
                                <li class="nav-item">
                                    <a href="{{route('view.menu')}}" class="nav-link {{($route=='view.menu')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Menu</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview {{($prefix=='/logo')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Manage Logo
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview {{($prefix=='/logo')?'menu-open':''}}">
                                <li class="nav-item">
                                    <a href="{{route('view.logo')}}" class="nav-link {{($route=='view.logo')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Logo</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview {{($prefix=='/slider')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Manage Slider
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview {{($prefix=='/slider')?'menu-open':''}}">
                                <li class="nav-item">
                                    <a href="{{route('slider.index')}}" class="nav-link {{($route=='slider.index')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Slider</p>
                                    </a>
                                </li>
                            </ul>
                        </li>     
                        <li class="nav-item has-treeview {{($prefix=='/about')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Manage About
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview {{($prefix=='/about')?'menu-open':''}}">
                                <li class="nav-item">
                                    <a href="{{route('about.index')}}" class="nav-link {{($route=='about.index')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View About</p>
                                    </a>
                                </li>
                            </ul>
                        </li> 
                        <li class="nav-item has-treeview {{($prefix=='/services')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Manage Services
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview {{($prefix=='/services')?'menu-open':''}}">
                                <li class="nav-item">
                                    <a href="{{route('services.index')}}" class="nav-link {{($route=='services.index')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Services</p>
                                    </a>
                                </li>
                            </ul>
                        </li> 
                        <li class="nav-item has-treeview {{($prefix=='/project')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Manage Project
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview {{($prefix=='/project')?'menu-open':''}}">
                                <li class="nav-item">
                                    <a href="{{route('project.index')}}" class="nav-link {{($route=='project.index')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Project</p>
                                    </a>
                                </li>
                            </ul>
                        </li> 
                        <li class="nav-item has-treeview {{($prefix=='/contact')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Communicate
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview {{($prefix=='/contact')?'menu-open':''}}">
                                <li class="nav-item">
                                    <a href="{{route('contact.index')}}" class="nav-link {{($route=='contact.index')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Communicate</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('contact.all')}}" class="nav-link {{($route=='contact.all')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Contact</p>
                                    </a>
                                </li>
                            </ul>
                        </li> 
                        <li class="nav-item has-treeview {{($prefix=='/protfolio')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Manage Protfolio
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview {{($prefix=='/protfolio')?'menu-open':''}}">
                                <li class="nav-item">
                                    <a href="{{route('protfolio.index')}}" class="nav-link {{($route=='protfolio.index')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Protfolio</p>
                                    </a>
                                </li>
                            </ul>
                        </li> 
                        <li class="nav-item has-treeview {{($prefix=='/comments')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Manage Comments
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview {{($prefix=='/comments')?'menu-open':''}}">
                                <li class="nav-item">
                                    <a href="{{route('comments.index')}}" class="nav-link {{($route=='comments.index')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Comments</p>
                                    </a>
                                </li>
                            </ul>
                        </li> 
                    </ul>
            </ul>
        </nav>
    </div>
</aside>
