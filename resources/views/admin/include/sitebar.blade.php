<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('admin.home')}}" class="nav-link">
                    <i class="nav-icon fas fa-columns"></i>
                    <p>
                        Главная
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.products.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-columns"></i>
                    <p>
                        Продукты
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.users.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-columns"></i>
                    <p>
                        Пользователи
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.categories.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-columns"></i>
                    <p>
                        Категории
                    </p>
                </a>
            </li>
        </ul>
    </div>
</aside>
