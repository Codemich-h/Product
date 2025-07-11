<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--
              Icon when menu is closed.
  
              Menu open: "hidden", Menu closed: "block"
            -->
                    <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
              Icon when menu is open.
  
              Menu open: "block", Menu closed: "hidden"
            -->
                    <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex shrink-0 items-center">
                    <img class="h-8 w-auto"
                        src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Your Company">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{ route('home.index') }}"
                            class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                            aria-current="page">Home</a>
                        <a href="{{ route('show.product') }}"
                            class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Product</a>
                        <a href="{{ route('cart.index') }}"
                            class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Cart</a>
                        <a href="{{ route('orders.order') }}"
                            class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">My
                            Order</a>
                        <a href="{{ route('home.about') }}"
                            class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                        <a href="{{ route('home.contact') }}"
                            class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">contact</a>
                        <a href="{{ route('home.add.product') }}"
                            class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                            Add
                        </a>
                        {{-- <a href="route('product/1')" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 ml-90">Add Product</a>
               --}}
                        {{-- <a href="{{ route('login') }}"
                            class="rounded-md px-8 py-2 ml-70 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
                        <a href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Register</a> --}}
                    </div>
                </div>
            </div>
            <div
                class="absolute inset-y-0 mr-30 space-x-3 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button type="button"
                    class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                </button>
                <!-- Profile dropdown -->
                <div class="relative text-black text-lg px-3 py-1 rounded cursor-pointer" onclick="toggleDropdown()"
                    id="dropdownButton" data-dropdown-toggle="dropdown">
                    <img class="size-8 rounded-full"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                    <div id="dropdown"
                        class="absolute hidden top-full right-0 rounded-lg p-3 mt-0 ml-4 shadow-md group-focus:scale-y-100 origin-top duration-200">
                        <hr class="h-px my-1 bg-gray-200 border-0 dark:bg-gray-700">
                        <a href="{{ route('home.profile') }}" class="active block px-4 py-2 text-sm text-gray-700" role="menuitem"
                            tabindex="-1" id="user-menu-item-0">Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="user-menu-item-1">Settings</a>
                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                            tabindex="-1" id="user-menu-item-2">Sign out</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleDropdown() {
            let dropdown = document.querySelector('#dropdownButton #dropdown');
            dropdown.classList.toggle("hidden");
        }
    </script>
</nav>
