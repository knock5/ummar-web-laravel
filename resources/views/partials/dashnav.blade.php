<div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
    <div class="offcanvas-header text-bg-dark">
        <h5 class="offcanvas-title" id="staticBackdropLabel">Menu Dashboard</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body bg-secondary">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ ($title === 'Dashboard') ? 'active' : '' }}" aria-current="page" href="/ummar/admin">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === 'Data Account Users') ? 'active' : '' }}" href="/ummar/accusers">Data Account Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === 'Data Customers') ? 'active' : '' }}" href="/ummar/custummar">Data Customers</a>
            </li>
        </ul>
    </div>
</div>
