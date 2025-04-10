<nav class="border-gray-200 p-5 bg-black shadow-sm dark:bg-slate-800  block print:hidden">

    <div class="container mx-0 flex max-w-full flex-wrap items-center lg:mx-auto">

        <div class="flex items-center">
            <a href="#" class="flex items-center outline-none">
                <img src="{{ asset('ui-kit/dist/assets/images/un.png') }}" alt="" class="h-9" />
                <img src="{{ asset('ui-kit/dist/assets/images/s.png') }}" alt=""
                    class="ml-2 hidden xl:block mt-1" />
            </a>
        </div>

        <div class="order-2 hidden w-full items-center justify-center md:order-1 md:flex md:w-auto mx-auto"
            id="mobile-menu-2">

            <ul
                class="font-body mt-4 text flex flex-col font-medium md:mt-0 md:flex-row md:text-sm md:font-medium space-x-0 md:space-x-4 lg:space-x-6 xl:space-x-8 navbar">
                <li class="dropdown">
                    <a href="{{ route('home') }}">
                        <button id="navDashboardLink" data-dropdown-toggle="navDashboard"
                            class="dropdown-toggle text-base flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0 ">
                            Home
                        </button>
                    </a>
                </li>
                <li class="dropdown">
                    <button id="navAppsLink" data-dropdown-toggle="navApps"
                        class="dropdown-toggle text-base flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0">
                        Curriculum vitae
                        <i class="ti ti-chevron-down ml-auto lg:ml-1"></i>
                    </button>
                    <div id="navApps"
                        class="dropdown-menu z-10 my-1 hidden w-full list-none divide-y divide-gray-100 rounded bg-gray-800 md:bg-white text-base shadow dark:divide-gray-600 border border-slate-700 md:border-white dark:border-slate-700/50 dark:bg-gray-900 md:w-44 dropdown-menu">
                        <ul class="py-1">
                            <li>
                                <a href="inbox.html" class="nav-link  dark:hover:bg-slate-800/70">Arabic version</a>
                            </li>
                            <li>
                                <a href="email-read.html" class="nav-link  dark:hover:bg-slate-800/70">English
                                    version</a>
                            </li>
                            <li>
                                <a href="chat.html" class="nav-link  dark:hover:bg-slate-800/70">Spanish version</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <button id="navUIkitLink" data-dropdown-toggle="navUIkit"
                        class="dropdown-toggle text-base flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0">
                        Chronology of Art
                    </button>
                </li>
                <li class="dropdown">
                    <button id="navPagesLink" data-dropdown-toggle="navPages"
                        class="dropdown-toggle text-base flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0">
                        Articles
                    </button>
                </li>
                <li class="dropdown">
                    <button id="navAuthLink" data-dropdown-toggle="navAuth"
                        class="dropdown-toggle text-base flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0">
                        Expos
                        <i class="ti ti-chevron-down ml-auto lg:ml-1"></i>
                    </button>
                    <div id="navAuth"
                        class="dropdown-menu z-10 my-1 hidden w-full list-none divide-y divide-gray-100 rounded bg-gray-800 md:bg-white text-base shadow dark:divide-gray-600 border border-slate-700 md:border-white dark:border-slate-700/50 dark:bg-gray-900 md:w-44 dropdown-menu">
                        <ul class="py-1">
                            <li>
                                <a href="login.html" class="nav-link  dark:hover:bg-slate-800/70">Tunisia</a>
                            </li>
                            <li>
                                <a href="register.html" class="nav-link  dark:hover:bg-slate-800/70">Qatar</a>
                            </li>
                            <li>
                                <a href="re-password.html" class="nav-link  dark:hover:bg-slate-800/70">Dubai</a>
                            </li>
                            <li>
                                <a href="lock-screen.html" class="nav-link  dark:hover:bg-slate-800/70">
                                    Rabat</a>
                            </li>
                            <li>
                                <a href="404.html" class="nav-link  dark:hover:bg-slate-800/70">Casablanca</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <div class="order-1 ml-auto flex items-center md:order-2 md:hidden">
            <button data-collapse-toggle="mobile-menu-2" type="button" id="toggle-menu"
                class="ml-1 inline-flex items-center rounded-lg text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-0 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <i class="ti ti-menu-2 h-6 w-6 text-lg leading-6"></i>
                <i class="ti ti-X hidden h-6 w-6 text-lg leading-6"></i>
            </button>
        </div>
    </div>
</nav>
