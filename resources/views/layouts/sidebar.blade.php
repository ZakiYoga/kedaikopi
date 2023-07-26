<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">Roast 'n Roll</div>
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3 {{ $title === 'Dashboard' ? 'active' : '' }}"
            href="/dashboard">Dashboard</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3 {{ $title === 'Menu' ? 'active' : '' }}"
            href="/menus">Menu</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3 {{ $title === 'Order' ? 'active' : '' }}"
            href="/order">Order</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3 {{ $title === 'About' ? 'active' : '' }}"
            href="/about">About</a>
    </div>
</div>
