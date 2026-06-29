<div class="navbar mt-10 max-w-400 w-[90%] mx-auto shadow-md px-5">
    <div class="md:hidden flex-1 dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-15 w-15" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
        </div>
        <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a>Collections</a></li>
            <li><a>New</a></li>
        </ul>
    </div>
    <div class="hidden md:flex flex-1">
        <a href="{{ route("home") }}" class="btn btn-ghost text-xl">Home</a>
        <a href="#" class="btn btn-ghost text-xl">Collections</a>
        <a href="#" class="btn btn-ghost text-xl">New</a>
    </div>
    <div class="logo flex-1"></div>
    <div class="flex-none flex gap-4">
        <button type="button"
            class="hidden rounded-full px-4 py-1 bg-black text-white md:inline-flex items-center gap-2 cursor-pointer">
            Cart
            <x-icons.cart fill="rgb(255, 255, 255)" />
        </button>
        <button type="button" class="md:hidden w-10 rounded-full p-1 bg-white border-3 border-black cursor-pointer">
            <x-icons.cart />
        </button>
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full p-1 bg-black">
                    <x-icons.user />
                </div>
            </div>
            <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                <li>
                    <a class="justify-between">
                        Profile
                        <span class="badge">New</span>
                    </a>
                </li>
                <li><a>Settings</a></li>
                <li><a>Logout</a></li>
            </ul>
        </div>
    </div>
</div>