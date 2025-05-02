<!-- services.blade.php or any route pointing to /services -->

<div class="max-w-6xl mx-auto px-4 py-[8rem]">
    <!-- Services Heading -->
    <div class="text-center mb-12">
        <h3 class="text-green-600 font-semibold text-sm">Our services</h3>
        <h2 class="text-2xl sm:text-3xl font-bold mt-2">At E-Cycleables we offer a range of junk removal<br>services tailored to meet your needs.</h2>
    </div>

    <!-- Banner Image -->
    <div class="mb-12">
        <img src="{{ asset('images/junk-guy-banner.jpg') }}" alt="Junk Removal Team" class="rounded-lg w-full object-cover">
    </div>

    <!-- Description -->
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h3 class="font-semibold text-lg mb-4">Who are we?</h3>
        <p class="text-gray-600 mb-2">
            From old furniture to unwanted appliances, we help you declutter your home quickly and responsibly.
            Our team ensures that all items are removed safely and disposed of in an eco-friendly manner.
        </p>
        <p class="text-gray-600">
            Efficient and discreet junk removal for offices, retail spaces, and other commercial properties. We handle everything from office furniture to electronics, ensuring minimal disruption to your business operations.
        </p>
    </div>

    <!-- Services Grid -->
    <!-- <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-12 mb-20"> -->
        <!-- Residential Junk Removal -->
        <div class="flex mb-[4rem] items-center  gap-[5rem]">
            <img src="{{ asset('images/residential-junk.jpg') }}" alt="Residential Junk Removal" class="w-full object-cover rounded-md">
            <div class="text-[2rem] w-[50%]>
                <h4 class="font-semibold text-lg">Residential Junk Removal</h4>
                <p class="text-sm text-gray-600">From old furniture to unwanted appliances, we help you declutter your home quickly and responsibly. Our team ensures that all items are removed safely and disposed of in an eco-friendly manner.</p>
            </div>
        </div>

        <!-- Commercial Junk Removal -->
        <div class="flex mb-[4rem] items-center gap-[5rem]">
            <div class="text-[2rem] w-[50%]">
                <h4 class="font-semibold text-lg">Commercial Junk Removal</h4>
                <p class="text-sm text-gray-600">Efficient and discreet junk removal for offices, retail spaces, and other commercial properties. We handle everything from office furniture to electronics, ensuring minimal disruption to your business operations.</p>
            </div>
            <img src="{{ asset('images/commercial-junk.jpg') }}" alt="Commercial Junk Removal" class="w-fullobject-cover rounded-md">
        </div>

        <!-- Construction Debris Removal -->
        <div class="flex items-center gap-[5rem]">
            <img src="{{ asset('images/construction-junk.jpg') }}" alt="Construction Debris Removal" class="full object-cover rounded-md">
            <div class="text-[2rem] w-[50%]">
                <h4 class="font-semibold text-lg">Construction Debris Removal</h4>
                <p class="text-sm text-gray-600">Safe and thorough removal of construction and renovation debris. We handle materials like wood, concrete, and metal, ensuring proper disposal and recycling.</p>
            </div>
        </div>

    <!-- Testimonials Section -->
    <div class="text-center mt-[10rem] mb-8">
        <h3 class="text-green-600 font-semibold text-sm">Testimonials</h3>
        <h2 class="text-2xl sm:text-3xl font-bold mt-2">Here are some of our customer’s latest testimonies.</h2>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Testimonial 1 -->
        <div class="bg-white shadow-md rounded-lg p-4 text-sm">
            <p class="text-gray-800">I appreciate the eco-friendly approach. They were punctual and professional, and the whole process was smooth and hassle-free. Excellent service!</p>
            <div class="mt-2 font-semibold">Chinwe O. <span class="block text-green-600 text-xs">Lagos State, Nigeria</span></div>
        </div>
        <!-- Testimonial 2 -->
        <div class="bg-white shadow-md rounded-lg p-4 text-sm">
            <p class="text-gray-800">I was stressed at how efficiently they cleared out my apartment. The team was respectful and handled everything with care. Will definitely use them again.</p>
            <div class="mt-2 font-semibold">Emeka N. <span class="block text-green-600 text-xs">Abuja State, Nigeria</span></div>
        </div>
        <!-- Testimonial 3 -->
        <div class="bg-white shadow-md rounded-lg p-4 text-sm">
            <p class="text-gray-800">The team did a fantastic job with our construction site cleanup. They were prompt, professional, and ensured all debris was removed safely. Great value for money.</p>
            <div class="mt-2 font-semibold">Abdul S. <span class="block text-green-600 text-xs">Enugu State, Nigeria</span></div>
        </div>
        <!-- Testimonial 4 -->
        <div class="bg-white shadow-md rounded-lg p-4 text-sm">
            <p class="text-gray-800">I was shocked at how efficiently they cleaned our warehouse. The whole experience was smooth and professional. Will definitely use them again.</p>
            <div class="mt-2 font-semibold">Femi K. <span class="block text-green-600 text-xs">Kaduna State, Nigeria</span></div>
        </div>
    </div>
</div>
