<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">

        <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>

        <!-- LogOut -->
        <li class="nav-item" style="margin-top: 10px">

            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">

                <i class="nav-icon fa fa-sign-out" style="color: #cc2010"></i>
                <p>
                    {{ __('Logout') }}
                </p>

            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </li>


    </ul>
</nav>
