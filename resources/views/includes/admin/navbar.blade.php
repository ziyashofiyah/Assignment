<!-- Header-->
<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="./"><img src="{{ asset('backend/images/logoziya.png')}}" alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{ asset('backend/images/ziya.png')}}" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <form action="{{ url('logout') }}" method="post">
                        @csrf
                     <button type="submit" class="dropdown-item nav-link"><i class="fa fa-power -off"></i> Logout</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- /#header -->