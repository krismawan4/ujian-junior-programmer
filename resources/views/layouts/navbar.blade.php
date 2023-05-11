<nav id="navbar-main" class="navbar is-fixed-top">
    <div class="navbar-brand">
        <a class="navbar-item mobile-aside-button">
            <span class="icon"
                ><i class="mdi mdi-forwardburger mdi-24px"></i
            ></span>
        </a>
    </div>
    <div class="navbar-brand is-right">
        <a
            class="navbar-item --jb-navbar-menu-toggle"
            data-target="navbar-menu"
        >
            <span class="icon"
                ><i class="mdi mdi-dots-vertical mdi-24px"></i
            ></span>
        </a>
    </div>
    <div class="navbar-menu" id="navbar-menu">
        <div class="navbar-end">
            <div class="navbar-item dropdown has-divider has-user-avatar">
                <x-dropdown placement="bottom-end">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <Link href="{{ route('profile.edit') }}" class="navbar-item">
                            <span class="icon"
                                ><i class="mdi mdi-account"></i
                            ></span>
                            <span>My Profile</span>
                        </Link>
                        <hr class="navbar-divider" />
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link as="a" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</nav>
