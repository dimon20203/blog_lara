<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
<ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-vidget="treeview"
    role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="{{route('admin.main.index')}}" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
                Main page
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin.user.index')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
                Users
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin.post.index')}}" class="nav-link">
            <i class="nav-icon far fa-clipboard"></i>
            <p>
                Posts
            </p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{route('admin.category.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th-list"></i>
            <p>
              Categories
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin.tag.index')}}" class="nav-link">
            <i class="nav-icon fas fa-tags"></i>
            <p>
                Tags
            </p>
        </a>
    </li>
</ul>
    </div>
    <!-- /.sidebar -->
</aside>