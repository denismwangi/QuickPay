<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <h3>Trustywalletexpress</h3>
<!--                         <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
 -->                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">


                    <li class="sidebar-item active ">
                        <a href="{{url('/dashboard')}}" class='sidebar-link'>
                            <i class="fa fa-hashtag" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                     @if(Auth::user()->role !=1)
                        <li class="sidebar-item ">
                            <a href="{{url('transactions')}}" class='sidebar-link'>
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <span>Transactions</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="{{url('update-profile')}}" class='sidebar-link'>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span>Update Profile</span>
                            </a>
                        </li>
                     @endif


                        @if(Auth::user()->role ==1)
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span>Users</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item ">
                                <a href="{{url('admin/users')}}">All Users</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{url('admin/users/paxful')}}">Paxful Logins</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{url('admin/users/noones')}}">Noones Logins</a>
                            </li>

                        </ul>
                    </li>

                        <li class="sidebar-item ">
                            <a href="{{url('admin/transactions')}}" class='sidebar-link'>
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <span>Transactions</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="{{url('admin/settings')}}" class='sidebar-link'>
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span>Settings</span>
                            </a>
                        </li>
                    @endif
                    <li class="sidebar-item ">
                        <a href="{{url('auth/logout')}}" class='sidebar-link'>
                            <i class="fa fa-sign-out" aria-hidden="true" style="color: #d1342c;"></i>

                            <span>Logout</span>
                        </a>
                    </li>


                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
