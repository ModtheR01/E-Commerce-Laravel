<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard.home') }}">
                <i class="fa-solid fa-gauge-high"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link " href="{{ route('front.index') }}">
                <i class="fa-solid fa-earth-africa"></i>
                <span>Website</span>
            </a>
        </li>
        <!-- End Website Nav -->
        {{-- Users  --}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#users" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-users"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="users" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="components-alerts.html">
                        <i class="fa-solid fa-user-tie fs-5"></i><span>Admin</span>
                    </a>
                </li>
                <li>
                    <a href="components-alerts.html">
                        <i class="fa-solid fa-m fs-5"></i><span>Moderator</span>
                    </a>
                </li>
                <li>
                    <a href="components-alerts.html">
                        <i class="fa-solid fa-c fs-5"></i><span>Customer</span>
                    </a>
                </li>
                <li>
                    <a href="components-alerts.html">
                        <i class="fa-solid fa-user fs-5"></i><span>Index</span>
                    </a>
                </li>
                <li>
                    <a href="components-alerts.html">
                        <i class="fa-solid fa-plus fs-5"></i><span>Create</span>
                    </a>
                </li>
            </ul>
        </li>
        {{-- Products  --}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#products" data-bs-toggle="collapse" href="#">
                <i class="fa-brands fa-product-hunt"></i>Products</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="products" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('dashboard.products.index') }}">
                        <i class="fa-solid fa-user fs-5"></i><span>Index</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.products.create') }}">
                        <i class="fa-solid fa-plus fs-5"></i><span>Create</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.products.delete') }}">
                        <i class="fa-solid fa-trash fs-5"></i><span>Trash</span>
                    </a>
                </li>
            </ul>
        </li>
        {{-- Categories  --}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#categories" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-layer-group"></i>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="categories" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('dashboard.categories.index')}}">
                        <i class="fa-solid fa-user fs-5"></i><span>Index</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.categories.create') }}">
                        <i class="fa-solid fa-plus fs-5"></i><span>Create</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.categories.delete') }}">
                        <i class="fa-solid fa-trash fs-5"></i><span>Trash</span>
                    </a>
                </li>
            </ul>
        </li>
        {{-- Sub-Categories  --}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#sub-categories" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-list"></i>Sub-Categories</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="sub-categories" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('dashboard.sub-categories.index') }}">
                        <i class="fa-solid fa-user fs-5"></i><span>Index</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.sub-categories.create') }}">
                        <i class="fa-solid fa-plus fs-5"></i><span>Create</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.sub-categories.delete') }}">
                        <i class="fa-solid fa-trash fs-5"></i><span>Trash</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
