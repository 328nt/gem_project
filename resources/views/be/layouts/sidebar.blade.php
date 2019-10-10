<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="upload/users/{{Auth::User()->image}}" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">{{Auth::User()->name}}</div><small></small>
            </div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="javascript:;"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">FEATURES</li>
            
            @if (Auth::User()->role == 2)
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-smile-o"></i>
                    <span class="nav-label">Users</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="admin/users/list">List</a>
                    </li>
                    <li>
                        <a href="admin/users/add">add</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Contestant</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="admin/contestants/list">List</a>
                    </li>
                    <li>
                        <a href="admin/contestants/add">add</a>
                    </li>
                </ul>
            </li>
            @endif
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-map"></i>
                    <span class="nav-label">News</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="admin/news/list">List</a>
                    </li>
                    <li>
                        <a href="admin/news/add">add</a>
                    </li>
                </ul>
            </li>
            <li class="heading">PAGES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
                    <span class="nav-label">Mailbox</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="javascript:;">Inbox</a>
                    </li>
                    <li>
                        <a href="javascript:;">Mail view</a>
                    </li>
                    <li>
                        <a href="javascript:;">Compose mail</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-calendar"></i>
                    <span class="nav-label">Calendar</span>
                </a>
            </li>
        </ul>
    </div>
</nav>