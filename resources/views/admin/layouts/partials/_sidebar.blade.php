<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="{{asset('images/sos-logo.png')}}" height="30px" />
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">{{Auth::user()->name ?? 'Developer'}}</span>
                        <!-- <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> -->
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <!-- <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                        <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                        <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li> -->
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    SOS
                </div>
            </li>
            <li>
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Cadastros</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('condominius.index')}}">Condominios</a></li>
                    <!-- <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                    <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                    <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                    <li><a href="dashboard_5.html">Dashboard v.5 </a></li> -->
                </ul>
            </li>
            <li>
                <a href="{{route('contracts.index')}}"><i class="fa fa-file-o"></i> <span class="nav-label">Solicitações</span> </a>
            </li>
        </ul>
    </div>
</nav>
