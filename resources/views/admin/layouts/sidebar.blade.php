<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">AdminHub</span>
    </a>
    <ul class="side-menu top">
        <li class="@yield('dashboard')">
            <a href="#">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('admin.categories.index') }}">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">Categories</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('admin.messages.index') }}">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">Messsages</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('admin.covidInfos.index') }}">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">CovidInfo</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('admin.advertisements.index') }}">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">Advertisements</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('admin.users.index') }}">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">User</span>
            </a>
        </li>


        <li>
            <a href="{{ route('admin.comments.index') }}">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">Comments</span>
            </a>
        </li>


        <li>
            <a href="{{ route('admin.blogs.index') }}">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">Blogs</span>
            </a>
        </li>

    </ul>
    <ul class="side-menu">
        <li>
            <a href="#">
                <i class='bx bxs-cog' ></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
            <a href="#" class="logout">
                <i class='bx bxs-log-out-circle' ></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
