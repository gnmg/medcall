<aside class="fixed top-0 w-full bg-white border-r-2 border-gray-300 md:w-64 md:min-h-screen" x-data="{ isOpen: false }">
    <div class="flex items-center justify-between h-16 p-4 bg-white">
        <a href="/" class="flex items-center">
            <span class="mx-2 mt-2 text-xl font-semibold text-center text-gray-900 md:mt-8"><img src="{{url('/img/logo-small.png')}}" alt="Image"/></span>
        </a>
        <div class="flex md:hidden">
            <button type="button" @click="isOpen = !isOpen"
                class="text-black hover:text-gray-500 focus:outline-none focus:text-gray-500">
                <svg class="w-8 fill-current" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
    <div class="px-2 py-6 mt-8 md:block" :class="isOpen? 'block': 'hidden'">
        <ul>
            <li class="px-2 py-3 rounded hover:bg-gray-200">
                <a href="{{ URL::route('dashboard') }}" class="flex items-center">
                    <svg class="w-6 text-black" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="#63b3ed">
                        <path
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    <span class="mx-2 text-sm font-bold text-gray-700">{{ __('lang.myreminders')}}</span>
                </a>
            </li>
            <!-- <li class="px-2 py-3 mt-2 rounded hover:bg-gray-200">
                <a href="{{ URL::route('call.create') }}" class="flex items-center">
                    <svg class="w-6 text-black" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="#63b3ed">
                        <path
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                        </path>
                    </svg>
                    <span class="mx-2 text-sm font-bold text-gray-700">{{ __('lang.addreminder')}}</span>
                </a>
            </li> -->
            
            <li class="px-2 py-3 mt-2 rounded hover:bg-gray-200">
                <a href="billing" class="flex items-center">
                    <svg class="w-6 text-black" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="#63b3ed">
                        <path d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                    </svg>
                    <span class="mx-2 text-sm font-bold text-gray-700">{{ __('lang.subscription')}}</span>
                </a>
            </li>
            <li class="px-2 py-3 mt-2 rounded hover:bg-gray-200">
                <a  href="{{ route('logout') }}" class="flex items-center" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <svg class="w-6 text-black" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="#63b3ed">
                        <path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    <span class="mx-2 text-sm font-bold text-gray-700">{{ __('lang.logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
            </li>
        </ul>
        <div class="mt-2 -mx-2 border-t border-gray-700 md:hidden"></div>
        <ul class="mt-6 md:hidden">
            
            <li class="px-2 py-3 mt-2 rounded hover:bg-gray-900">
                <button class="mx-2 text-gray-300" @click="logout">{{ __('lang.logout')}}</button>
            </li>
        </ul>
    </div>
</aside>

