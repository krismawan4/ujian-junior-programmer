<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div>Ujian <b class="font-black">Online</b></div>
    </div>
    <div class="menu is-menu-main">
        <p class="menu-label">General</p>
        <ul class="menu-list">
            <li class="{{ (request()->is('admin/nasabah*')) ? 'active' : '' }}">
                <Link href="{{ url('admin/nasabah') }}">
                    <span class="icon"
                        ><i class="mdi mdi-desktop-mac"></i
                    ></span>
                    <span class="menu-item-label">Nasabah</span>
                </Link>
            </li>
        </ul>
    </div>
</aside>
