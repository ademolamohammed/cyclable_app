<div class="w-full bg-white shadow-sm fixed z-99999">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-3 md:py-5">
        <!-- Logo -->
        <div class="text-xl font-bold text-[#00123D]">
            E-<span class="font-normal">Cycleables</span>
        </div>

        <!-- Navigation -->
        <div class="hidden md:flex">
            <div class="items-center flex gap-[4rem] text-[#00123D] font-medium">

                <a href="/" class="text-green-600">Home</a>
                <a href="/about-us">About us</a>
                <a href="/service">Services</a>
                <a href="/products">Products</a>
            </div>
        </div>


        <!-- <div class="hidden md:flex> -->
         <div class="flex gap-[1rem]">
         @if (auth()->check())
             <livewire:shopping-cart-icon />

             <a href="/auth/logout">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 hover:text-red-700">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                </svg>
            
            </a>
            @else
            <livewire:shopping-cart-icon />

                <a href="/auth/login"
                    class="bg-green-600 text-white px-6 py-2 rounded-full hover:bg-green-700 transition duration-300">
                        Login
                </a>
            @endif
        </div>
        <!-- </div> -->



        <!-- Mobile Toggle (Optional for menu later) -->
        <div class="md:hidden">
            <!-- You can add mobile menu icon here -->
        </div>
    </div>
</div>
