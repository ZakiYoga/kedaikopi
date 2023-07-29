<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">Roast 'n Roll</div>
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3 {{ Request::is('dashboard-admin') ? 'active' : '' }}"
            href="/dashboard-admin">Dashboard</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3 {{ Request::is('dashboard-menu') ? 'active' : '' }}"
            href="/dashboard-admin/menu">Menu</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3 {{ Request::is('dashboard-order') ? 'active' : '' }}"
            href="/dashboard-order">Order</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3 {{ Request::is('dashboard-penjualan') ? 'active' : '' }}"
            href="/dashboard-about">Laporan Penjualan</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3 {{ Request::is('dashboard-about') ? 'active' : '' }}"
            href="/dashboard-about">About</a>
    </div>
</div>
