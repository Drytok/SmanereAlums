<div class="sidebar">
    <div class="logo-details">
        <i class="bx bx-category"></i>
        <span class="logo_name">Study Circle</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="#">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/category" class="{{ request()->Is('category*') ? 'active' : '' }}">
                <i class="bx bx-box"></i>
                <span class="links_name">Categories</span>
            </a>
        </li>
        <li>
            <a href="/yearbook" class="{{ request()->Is('yearbook*') ? 'active' : '' }}">
                <i class="bx bx-list-ul"></i>
                <span class="links_name">Yearbook</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bx bx-log-out"></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>
