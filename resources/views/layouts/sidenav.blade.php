<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
                @if(Auth::user())
                @if(Auth::user()->hasVerifiedEmail())
                @if(is_admin())
                @if(is_admin() || is_registrar())
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link text-white">
                        <i class="fas fa-fw fa-chart-bar nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('account.profile') }}" class="nav-link text-white">
                        <i class="fas fa-fw fa-user nav-icon"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('account.create') }}" class="nav-link text-white">
                        <i class="fas fa-fw fa-users nav-icon"></i>
                        <p>Accounts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('declare.enrollment') }}" class="nav-link text-white">
                        <i class="fas fa-fw fa-school nav-icon"></i>
                        <p>Enrollment</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('post.create') }}" class="nav-link text-white">
                        <i class="fas fa-fw fa-sticky-note nav-icon"></i>
                        <p>Posts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('subject.create') }}" class="nav-link text-white">
                        <i class="fas fa-fw fa-book nav-icon"></i>
                        <p>Subjects</p>
                    </a>
                </li>
                @endif
                @endif
                @else
                <li class="nav-item">
                    <a href="{{ route('admin.login') }}" class="nav-link text-white">
                        <i class="fas fa-fw fa-user-lock nav-icon"></i>
                        <p>Admin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('headTeacher.login') }}" class="nav-link text-white">
                        <i class="fas fa-fw fa-chalkboard-teacher nav-icon"></i>
                        <p>Head Teacher</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('faculty.login') }}" class="nav-link text-white">
                        <i class="fas fa-fw fa-chalkboard nav-icon"></i>
                        <p>Faculty</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('registrar.login') }}" class="nav-link text-white">
                        <i class="fas fa-fw fa-user nav-icon"></i>
                        <p>Registrar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cashier.login') }}" class="nav-link text-white">
                        <i class="fas fa-fw fa-cash-register nav-icon"></i>
                        <p>Cashier</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('student.login') }}" class="nav-link text-white">
                        <i class="fas fa-fw fa-users nav-icon"></i>
                        <p>Student</p>
                    </a>
                </li>
                @endif
            </ul>
        </li>
    </ul>
</nav>