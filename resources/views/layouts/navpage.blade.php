<nav>
    <div class="flex my-8 py-5">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <a href="{{ route('landingpage') }}">
                    <h1 class="mr-5 text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-emerald-800 to-emerald-500">Klinik</h1>
                </a>
            </div>
            <div class="flex justify-between my-5 text-center text-lg gap-x-5">
               <x-nav-page :href="route('landingpage')" :active="request()->routeIs('landingpage')">
                    Home
               </x-nav-page>
               <x-nav-page :href="route('kb.index')" :active="request()->routeIs('kb.index')">
                    About
                </x-nav-page>
                <x-nav-page :href="route('artikel')" :active="request()->routeIs('artikel','show.artikel')">
                    Artikel
                </x-nav-page>
            </div>
            <div>
                @guest
                <div class="flex">
                    <a href="{{route('login')}}" class="bg-gradient-to-r from-emerald-500 to-emerald-600 font-semibold border-b-2 border-emerald-900 hover:text-yellow-500 my-2 rounded-2xl px-6 py-2 text-white text-2xl">Log In</a>
                </div>
                @endguest

                @Auth
                <div class="hidden sm:flex sm:items-center sm:ms-6 lg:my-4 lg:mx-4">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md dark:text-gray-400 dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div class="text-lg font-semibold">{{ Auth::user()->name }}</div>
    
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
    
                        <x-slot name="content">
                            <x-dropdown-link :href="route('dashboard')">
                                {{ __('Dashboard') }}
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
    
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @endAuth
            </div>

        </div>
    </div>

</nav>