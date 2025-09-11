        <div class="border-b" id="navbar">
            <div class="bg-gray-100 py-1">
                <div class="container">
                    <div class="flex flex-wrap">
                        <div class="md:w-1/2 w-full text-center md:text-left"><span>Minimum Order: ₹100</span>
                        </div>
                        <div class="w-1/2 text-right hidden lg:block">
                            <div class="dropdown flex justify-end">
                                <a class="dropdown-toggle text-inherit flex items-center" href="#!" data-bs-toggle="dropdown" id="dropdownMenuLink">
                                    <span class="mr-2">
                                        <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" id="languageIcon">
                                            <!-- Default SVG content for English -->
                                            <g clip-path="">
                                                <path d="M0 0.5H16V12.5H0V0.5Z" fill="#012169" />
                                                <path
                                                    d="M1.875 0.5L7.975 5.025L14.05 0.5H16V2.05L10 6.525L16 10.975V12.5H14L8 8.025L2.025 12.5H0V11L5.975 6.55L0 2.1V0.5H1.875Z"
                                                    fill="white" />
                                                <path
                                                    d="M10.6 7.525L16 11.5V12.5L9.225 7.525H10.6ZM6 8.025L6.15 8.9L1.35 12.5H0L6 8.025ZM16 0.5V0.575L9.775 5.275L9.825 4.175L14.75 0.5H16ZM0 0.5L5.975 4.9H4.475L0 1.55V0.5Z"
                                                    fill="#C8102E" />
                                                <path d="M6.025 0.5V12.5H10.025V0.5H6.025ZM0 4.5V8.5H16V4.5H0Z"
                                                    fill="white" />
                                                <path d="M0 5.325V7.725H16V5.325H0ZM6.825 0.5V12.5H9.225V0.5H6.825Z"
                                                    fill="#C8102E" />
                                            </g>
                                        </svg>
                                    </span>
                                    <span id="selectedLanguage">English</span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#!" onclick="changeLanguage('English')">
                                            <span>
                                                <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="">
                                                        <path d="M0 0.5H16V12.5H0V0.5Z" fill="#012169" />
                                                        <path
                                                            d="M1.875 0.5L7.975 5.025L14.05 0.5H16V2.05L10 6.525L16 10.975V12.5H14L8 8.025L2.025 12.5H0V11L5.975 6.55L0 2.1V0.5H1.875Z"
                                                            fill="white" />
                                                        <path
                                                            d="M10.6 7.525L16 11.5V12.5L9.225 7.525H10.6ZM6 8.025L6.15 8.9L1.35 12.5H0L6 8.025ZM16 0.5V0.575L9.775 5.275L9.825 4.175L14.75 0.5H16ZM0 0.5L5.975 4.9H4.475L0 1.55V0.5Z"
                                                            fill="#C8102E" />
                                                        <path d="M6.025 0.5V12.5H10.025V0.5H6.025ZM0 4.5V8.5H16V4.5H0Z"
                                                            fill="white" />
                                                        <path d="M0 5.325V7.725H16V5.325H0ZM6.825 0.5V12.5H9.225V0.5H6.825Z"
                                                            fill="#C8102E" />
                                                    </g>
                                                    <defs>
                                                        <clipPath>
                                                            <rect width="16" height="12" fill="white"
                                                                transform="translate(0 0.5)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            English
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#!" onclick="changeLanguage('Deutsch')">
                                            <span>
                                                <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_5543_19751)">
                                                        <path d="M0 8.5H16V12.5H0V8.5Z" fill="#FFCE00" />
                                                        <path d="M0 0.5H16V4.5H0V0.5Z" fill="black" />
                                                        <path d="M0 4.5H16V8.5H0V4.5Z" fill="#DD0000" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_5543_19751">
                                                            <rect width="16" height="12" fill="white"
                                                                transform="translate(0 0.5)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            Deutsch
                                        </a>
                                    </li>
                                    <!-- Add more languages as needed -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-5">
                <div class="container">
                    <div class="flex flex-wrap w-full items-center justify-between">
                        <div class="lg:w-1/6 md:w-1/2 w-2/5">
                            <a class="navbar-brand" href="../index.php">
                                <img src="../assets/images/logo/logo.png"
                                    alt="TailwindCSS eCommerce HTML Template" />
                            </a>
                        </div>
                        <div class="lg:w-2/5 hidden lg:block">
                            <form action="#">
                                <div class="relative">
                                    <label for="searchProducts" class="invisible hidden">Search</label>
                                    <input class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base" type="search"
                                        placeholder="Search for products" id="searchProducts" />
                                    <button class="absolute right-0 top-0 p-3" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                            width="16" height="16" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                            <path d="M21 21l-6 -6" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="lg:w-1/5 hidden lg:block">
                        </div>
                        <div class="lg:w-1/5 text-end md:w-1/2 w-3/5">
                            <div class="flex gap-7 items-center justify-end">
                                <div>
                                    <a href="#!" class="relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                        </svg>
                                        <span
                                            class="absolute top-0 -mt-1 left-full rounded-full h-5 w-5 -ml-2 bg-green-600 text-white text-center font-semibold text-sm">
                                            5
                                            <span class="invisible">unread messages</span>
                                        </span>
                                    </a>
                                </div>
                                <div>
                                    <a href="#!" class="text-gray-600" data-bs-toggle="modal" data-bs-target="#userModal">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                                            width="22" height="22" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                    </a>
                                </div>
                                <div>
                                    <button type="button" class="text-gray-600 relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" role="button" aria-controls="offcanvasRight">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-shopping-bag" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" />
                                            <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                                        </svg>
                                        <span id="cartCount"
                                            class="absolute top-0 -mt-1 left-full rounded-full h-5 w-5 -ml-3 bg-green-600 text-white text-center font-semibold text-sm">
                                            0
                                            <span class="invisible">unread messages</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="lg:hidden leading-none">
                                    <!-- Button -->
                                    <button class="collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-label="Toggle navigation">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-menu-2 text-gray-800" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 6l16 0" />
                                            <path d="M4 12l16 0" />
                                            <path d="M4 18l16 0" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar relative navbar-expand-lg lg:flex lg:flex-wrap items-center content-between text-black navbar-default" aria-label="Offcanvas navbar large">
                <div class="container max-w-7xl mx-auto w-full xl:px-4 lg:px-0">
                    <div class="offcanvas offcanvas-left lg:visible" tabindex="-1" id="navbar-default">
                        <div class="offcanvas-header pb-1">
                            <a href="./index.html"><img src="../assets/images/logo/logo.png"
                                    alt="TailwindCSS eCommerce HTML Template" /></a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x text-gray-700"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M18 6l-12 12" />
                                    <path d="M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="offcanvas-body lg:flex lg:items-center">
                            <div class="block lg:hidden mb-4">
                                <form action="#">
                                    <div class="relative">
                                        <label for="searhNavbar" class="invisible hidden">Search</label>
                                        <input class="border border-gray-300 text-gray-900 rounded-lg focus:shadow-[0_0_0_.25rem_rgba(10,173,10,.25)] focus:ring-green-600 focus:ring-0 focus:border-green-600 block p-2 px-3 disabled:opacity-50 disabled:pointer-events-none w-full text-base" type="search"
                                            placeholder="Search for products" id="searhNavbar" />
                                        <button class="absolute right-0 top-0 p-3" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-search" width="16" height="16"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                                <path d="M21 21l-6 -6" />
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="block lg:hidden mb-4">
                                <a class="btn inline-flex items-center gap-x-2 bg-green-600 text-white border-green-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 justify-center"
                                    data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <span class="mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-leaf-fill" viewBox="0 0 16 16">
                                            <path d="M1.4 1.7c.217.289.65.84 1.725 1.274 1.093.44 2.885.774 5.834.528 2.02-.168 3.431.51 4.326 1.556C14.161 6.082 14.5 7.41 14.5 8.5q0 .344-.027.734C13.387 8.252 11.877 7.76 10.39 7.5c-2.016-.288-4.188-.445-5.59-2.045-.142-.162-.402-.102-.379.112.108.985 1.104 1.82 1.844 2.308 2.37 1.566 5.772-.118 7.6 3.071.505.8 1.374 2.7 1.75 4.292.07.298-.066.611-.354.715a.7.7 0 0 1-.161.042 1 1 0 0 1-1.08-.794c-.13-.97-.396-1.913-.868-2.77C12.173 13.386 10.565 14 8 14c-1.854 0-3.32-.544-4.45-1.435-1.124-.887-1.889-2.095-2.39-3.383-1-2.562-1-5.536-.65-7.28L.73.806z" />
                                        </svg>
                                    </span>
                                    All Plants
                                </a>
                                <div class="collapse mt-2" id="collapseExample">
                                    <div class="card card-body">
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="#!">Mirabilis Jalapa</a></li>
                                            <li><a class="dropdown-item" href="#!">December Flower</a></li>
                                            <li><a class="dropdown-item" href="#!">Mari Gold Flower</a></li>
                                            <li><a class="dropdown-item" href="#!">Lotus</a></li>
                                            <li><a class="dropdown-item" href="#!">Fire Cracker Flower</a></li>
                                            <li><a class="dropdown-item" href="#!">Money Plant</a></li>
                                            <li><a class="dropdown-item" href="#!">Aloe Vera</a></li>
                                            <li><a class="dropdown-item" href="#!">Tulasi</a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="dropdown hidden lg:block">
                                <button class="mr-4 btn inline-flex items-center gap-x-2 bg-green-600 text-white border-green-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300"
                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-leaf-fill" viewBox="0 0 16 16">
                                            <path d="M1.4 1.7c.217.289.65.84 1.725 1.274 1.093.44 2.885.774 5.834.528 2.02-.168 3.431.51 4.326 1.556C14.161 6.082 14.5 7.41 14.5 8.5q0 .344-.027.734C13.387 8.252 11.877 7.76 10.39 7.5c-2.016-.288-4.188-.445-5.59-2.045-.142-.162-.402-.102-.379.112.108.985 1.104 1.82 1.844 2.308 2.37 1.566 5.772-.118 7.6 3.071.505.8 1.374 2.7 1.75 4.292.07.298-.066.611-.354.715a.7.7 0 0 1-.161.042 1 1 0 0 1-1.08-.794c-.13-.97-.396-1.913-.868-2.77C12.173 13.386 10.565 14 8 14c-1.854 0-3.32-.544-4.45-1.435-1.124-.887-1.889-2.095-2.39-3.383-1-2.562-1-5.536-.65-7.28L.73.806z" />
                                        </svg>
                                    </span>
                                    All Plants
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#!">Mirabilis Jalapa</a></li>
                                    <li><a class="dropdown-item" href="#!">December Flower</a></li>
                                    <li><a class="dropdown-item" href="#!">Mari Gold Flower</a></li>
                                    <li><a class="dropdown-item" href="#!">Lotus</a></li>
                                    <li><a class="dropdown-item" href="#!">Fire Cracker Flower</a></li>
                                    <li><a class="dropdown-item" href="#!">Money Plant</a></li>
                                    <li><a class="dropdown-item" href="#!">Aloe Vera</a></li>
                                    <li><a class="dropdown-item" href="#!">Tulasi</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="navbar-nav lg:flex gap-3 lg:items-center">
                                    <li class="nav-item dropdown w-full lg:w-auto">
                                        <a class="nav-link" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item dropdown w-full lg:w-auto dropdown-fullwidth">
                                        <a class="nav-link" href="#popular_products">Popular Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#today_trending">Today's Trending</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#seasonal">Seasonal Picks</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">Contact Us</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>