<div class="flex flex-col space-y-8 px-6 py-10">
    <!-- Top Banner -->
    <div class="rounded-xl mt-[5rem] bg-gradient-to-r from-green-200 via-green-300 to-green-400 p-8 flex justify-between items-center shadow-md relative">
        <div class="max-w-xl">
            <h2 class="text-2xl md:text-4xl font-bold text-gray-900 mb-2">Shop Quality Reusable Items</h2>
            <p class="text-gray-700 text-sm md:text-base">All products are thoroughly inspected and in excellent condition.</p>
            <div class="mt-6">
                <div class="flex rounded-lg shadow-md overflow-hidden w-full max-w-md">
                    <input type="text" class="w-full px-4 py-2 focus:outline-none" placeholder="What are you looking for?">
                    <button class="bg-white px-4 py-2 text-green-600 font-semibold hover:bg-green-100">
                        🔍
                    </button>
                </div>
            </div>
        </div>
        <img src="{{ asset('images/delivery.png') }}" alt="Delivery Guy" class="hidden md:block h-52 lg:h-64 object-contain">
    </div>

    <!-- Main Section -->
    <div class="flex gap-6">
        <!-- Sidebar -->
        <aside class="w-64 hidden md:block">
            <h3 class="text-lg font-semibold mb-4">Categories</h3>
            <ul class="space-y-2 text-sm">
                @foreach(['General Appliances', 'Mobile Phones & tablets', 'Exercise & Gym', 'Vehicles', 'Clothing', 'Shoes', 'Air conditioners', 'Furniture'] as $category)
                    <li class="hover:text-green-700 cursor-pointer">{{ $category }}</li>
                @endforeach
            </ul>
        </aside>

        <!-- Products Grid -->
        <main class="flex-1">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-3 gap-6">
                <livewire:product-listing />
            </div>
        </main>
    </div>
</div>
