<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @if (Auth::user()->role_as == '1')
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/dashboard') }}">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/books') }}">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Books</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/category') }}">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Category</span>
                </a>
            </li>
        @endif
        @if (Auth::user()->role_as == '2')
            <li class="nav-item">
                <a class="nav-link" href="{{ url('operator/dashboard') }}">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('operator/rentlog') }}">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Peminjamaan </span>
                </a>
            </li>
        @endif
    </ul>
</nav>
