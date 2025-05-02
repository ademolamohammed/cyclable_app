<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body>
<!-- ========== MAIN CONTENT ========== -->
<!-- Breadcrumb -->
<div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 lg:px-8 lg:hidden">
  <div class="flex items-center py-2">
    <!-- Navigation Toggle -->
    <button type="button" class="size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar" aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
      <span class="sr-only">Toggle Navigation</span>
      <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M15 3v18"/><path d="m8 9 3 3-3 3"/></svg>
    </button>
    <!-- End Navigation Toggle -->

    <!-- Breadcrumb -->
    <ol class="ms-3 flex items-center whitespace-nowrap">
      <li class="flex items-center text-sm text-gray-800">
        Application Layout
        <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
      </li>
      <li class="text-sm font-semibold text-gray-800 truncate" aria-current="page">
        Dashboard
      </li>
    </ol>
    <!-- End Breadcrumb -->
  </div>
</div>
<!-- End Breadcrumb -->

<!-- Sidebar -->
<div id="hs-application-sidebar" class="hs-overlay  [--auto-close:lg]
  hs-overlay-open:translate-x-0
  -translate-x-full transition-all duration-300 transform
  w-[260px] h-full
  hidden
  fixed inset-y-0 start-0 z-[60]
  bg-white border-e border-gray-200
  lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
 " role="dialog" tabindex="-1" aria-label="Sidebar">
  <div class="relative flex flex-col h-full max-h-full mt-[2rem]">
    <div class="px-6 pt-4 ">
      <!-- Logo -->
      <a wire:navigate class="flex-none rounded-xl text-xl text-blue-600   inline-block font-semibold focus:outline-none focus:opacity-80" href="#" aria-label="E-commerce">
      <svg width="150" height="30" viewBox="0 0 216 36" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.5725 27H0.2285V0.684H16.5725V4.932H4.8365V11.7H15.3485V15.768H4.8365V22.752H16.5725V27ZM20.8843 19.332V15.444H32.4763V19.332H20.8843ZM48.7236 27.432C41.0556 27.432 36.0876 22.104 36.0876 13.86C36.0876 5.688 41.2356 0.251999 48.9396 0.251999C55.1676 0.251999 59.8116 3.888 60.7116 9.54H55.8516C54.9516 6.48 52.3236 4.68 48.8316 4.68C43.9716 4.68 40.9116 8.208 40.9116 13.824C40.9116 19.404 44.0076 23.004 48.8316 23.004C52.3956 23.004 55.1316 21.132 55.9956 18.216H60.7836C59.7756 23.76 54.9516 27.432 48.7236 27.432ZM62.72 35.244V31.572H65.348C67.076 31.572 68.156 31.176 68.912 29.088L69.416 27.756L62.252 9.216H66.896L71.468 22.176L76.292 9.216H80.828L72.116 30.96C70.784 34.272 68.912 35.64 65.996 35.64C64.772 35.64 63.692 35.496 62.72 35.244ZM81.4701 18.072C81.4701 12.564 85.1061 8.676 90.3621 8.676C95.2221 8.676 98.5341 11.376 99.0021 15.66H94.6101C94.1061 13.644 92.6301 12.6 90.5421 12.6C87.7341 12.6 85.8621 14.724 85.8621 18.072C85.8621 21.42 87.5901 23.508 90.3981 23.508C92.5941 23.508 94.1421 22.428 94.6101 20.484H99.0381C98.4981 24.624 95.0421 27.468 90.3981 27.468C84.9981 27.468 81.4701 23.724 81.4701 18.072ZM106.735 27H102.379V0.215999H106.735V27ZM119.298 27.468C114.006 27.468 110.298 23.616 110.298 18.108C110.298 12.528 113.934 8.676 119.154 8.676C124.482 8.676 127.866 12.24 127.866 17.784V19.116L114.474 19.152C114.798 22.284 116.454 23.868 119.37 23.868C121.782 23.868 123.366 22.932 123.87 21.24H127.938C127.182 25.128 123.942 27.468 119.298 27.468ZM119.19 12.276C116.598 12.276 115.014 13.68 114.582 16.344H123.51C123.51 13.896 121.818 12.276 119.19 12.276ZM136.498 27.468C132.718 27.468 130.414 25.272 130.414 21.924C130.414 18.648 132.79 16.596 137.002 16.272L142.33 15.876V15.48C142.33 13.068 140.89 12.096 138.658 12.096C136.066 12.096 134.626 13.176 134.626 15.048H130.882C130.882 11.196 134.05 8.676 138.874 8.676C143.662 8.676 146.614 11.268 146.614 16.2V27H142.762L142.438 24.372C141.682 26.208 139.27 27.468 136.498 27.468ZM137.938 24.156C140.638 24.156 142.366 22.536 142.366 19.8V18.864L138.658 19.152C135.922 19.404 134.878 20.304 134.878 21.744C134.878 23.364 135.958 24.156 137.938 24.156ZM154.996 27H150.928V0.215999H155.32V11.808C156.472 9.828 158.848 8.64 161.548 8.64C166.624 8.64 169.72 12.6 169.72 18.216C169.72 23.688 166.372 27.468 161.26 27.468C158.596 27.468 156.328 26.28 155.284 24.228L154.996 27ZM155.356 18.036C155.356 21.24 157.336 23.436 160.36 23.436C163.456 23.436 165.292 21.204 165.292 18.036C165.292 14.868 163.456 12.6 160.36 12.6C157.336 12.6 155.356 14.832 155.356 18.036ZM177.645 27H173.289V0.215999H177.645V27ZM190.208 27.468C184.916 27.468 181.208 23.616 181.208 18.108C181.208 12.528 184.844 8.676 190.064 8.676C195.392 8.676 198.776 12.24 198.776 17.784V19.116L185.384 19.152C185.708 22.284 187.364 23.868 190.28 23.868C192.692 23.868 194.276 22.932 194.78 21.24H198.848C198.092 25.128 194.852 27.468 190.208 27.468ZM190.1 12.276C187.508 12.276 185.924 13.68 185.492 16.344H194.42C194.42 13.896 192.728 12.276 190.1 12.276ZM200.923 21.6H205.099C205.135 23.148 206.287 24.12 208.303 24.12C210.355 24.12 211.471 23.292 211.471 21.996C211.471 21.096 211.003 20.448 209.419 20.088L206.215 19.332C203.011 18.612 201.463 17.1 201.463 14.256C201.463 10.764 204.415 8.676 208.519 8.676C212.515 8.676 215.215 10.98 215.251 14.436H211.075C211.039 12.924 210.031 11.952 208.339 11.952C206.611 11.952 205.603 12.744 205.603 14.076C205.603 15.084 206.395 15.732 207.907 16.092L211.111 16.848C214.099 17.532 215.611 18.9 215.611 21.636C215.611 25.236 212.551 27.468 208.159 27.468C203.731 27.468 200.923 25.092 200.923 21.6Z" fill="#000C38"/>
      </svg>
       
      </a>
      <!-- End Logo -->
    </div>

    <!-- Content -->
    <div class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
      <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
        <ul class="flex flex-col space-y-1">
          <li>
            <a wire:navigate class="flex items-center gap-x-3.5 py-2 px-2.5 {{Request::is('admin/dashboard') ? 'bg-[#039B00]' : ''}} text-sm text-gray-800 rounded-lg hover:bg-[#C8F6A5] focus:outline-none focus:bg-gray-100" href="/admin/dashboard">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              Dashboard
            </a>
          </li>

          <li><a wire:navigate class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm {{Request::is('handle-products') ? 'bg-[#039B00]' : ''}} text-gray-800 rounded-lg hover:bg-[#C8F6A5]" href="/handle-products">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/></svg>
            Products
          </a></li>

          <li><a wire:navigate class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm {{Request::is('orders') ? 'bg-[#039B00]' : ''}} text-gray-800 rounded-lg hover:bg-[#C8F6A5]" href="/orders">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
            Orders
          </a></li>

          <li>
              <a wire:navigate class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm {{Request::is('manage/categories') ? 'bg-gray-100' : ''}} text-gray-800 rounded-lg hover:bg-[#C8F6A5]" href="/manage/categories">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                </svg>

                Categories
              </a>
          </li>
          <li><a wire:navigate class="w-full mt-[15rem] flex items-center gap-x-3.5 py-2 px-2.5 text-sm {{Request::is('orders') ? 'bg-[#039B00]' : ''}} text-gray-800 rounded-lg hover:bg-[#C8F6A5]" href="/auth/logout">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 hover:text-red-700">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
            </svg>            Logout
          </a></li>
        </ul>
      </nav>
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Sidebar -->

<!-- Content -->
<div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:ps-72">
    {{ $slot }}
</div>
<!-- End Content -->
<!-- ========== END MAIN CONTENT ========== -->
</body>
</html>
