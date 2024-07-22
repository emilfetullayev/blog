<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column pt-3" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('category.home')}}" class="nav-link" style="display: flex;align-items: center;">
                        <img src="{{asset('assets\images\folder-regular.svg')}}" style="width: 20px;height: 20px;margin-right: 5px">
                        <p>
                            Category
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('tag.home')}}" class="nav-link" style="display: flex;align-items: center;">
                        <img src="{{asset('assets\images\tag-svgrepo-com.svg')}}" style="width: 20px;height: 20px;margin-right: 5px">
                        <p>
                            Tag
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('post.home')}}" class="nav-link" style="display: flex;align-items: center;">
                        <img src="{{asset('assets\images\post-sign-message-svgrepo-com.svg')}}" style="width: 20px;height: 20px;margin-right: 5px">
                        <p>
                            Post
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
