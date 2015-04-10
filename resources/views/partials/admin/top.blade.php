<header class="main-header">
    <a href="{{ route('admin.root') }}" class="logo"> {{ trans('admin.title')  }}</a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img class="user-image img-circle" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="{{ Auth::user()->name  }}" />
                        <span class="hidden-xs">{{ Auth::user()->name  }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img class="img-circle" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="{{ Auth::user()->name  }}" />
                            <p>{{ Auth::user()->name  }}</p>
                            <p><small>{{ trans('admin.last_login') }}</small></p>
                            <!-- TODO: ADD USER LAST LOGIN -->
                            <small>date("d-m-Y ~ H:i:s", $current_user->last_login)</small>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ route('admin.user.edit', ['id' => Auth::user()->id])  }}" class="btn btn-default btn-flat">{{ trans('admin.profile') }}</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('auth.logout') }}" class="btn btn-default btn-flat">{{ trans('auth.logout') }}</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>