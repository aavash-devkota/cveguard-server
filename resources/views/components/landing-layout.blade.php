<x-main-layout>
    @push('scripts')
        <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}"/>

        <!-- ==== WOW JS ==== -->
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script>
            new WOW().init();
        </script>
    @endpush

    <!-- ====== Navbar Section Start -->
    <div class="ud-header absolute left-0 top-0 z-40 flex w-full items-center bg-transparent">
        <div class="container">
            <div class="relative -mx-4 flex items-center justify-between">
                <div class="w-60 max-w-full px-4">
                    <a href="index.html" class="navbar-logo block w-full py-5">
                        <img src="{{ asset('assets/images/logo/logo-white.svg') }}" alt="logo"
                             class="header-logo w-full"/>
                    </a>
                </div>
                <div class="flex w-full items-center justify-between px-4">
                    <div>
                        <button id="navbarToggler"
                                class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                            <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                        </button>
                        <nav id="navbarCollapse"
                             class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:px-4 lg:py-0 lg:shadow-none xl:px-6">
                            <ul class="blcok lg:flex 2xl:ml-60">
                                <li class="group relative">
                                    <a href="#home"
                                       class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70">
                                        Home
                                    </a>
                                </li>
                                <li class="group relative">
                                    <a href="#about"
                                       class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                                        About
                                    </a>
                                </li>
                                <li class="group relative">
                                    <a href="#pricing"
                                       class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                                        Pricing
                                    </a>
                                </li>
                                <li class="group relative">
                                    <a href="#faq"
                                       class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                                        FAQ
                                    </a>
                                </li>
                        </nav>
                    </div>
                    <div class="flex items-center justify-end pr-16 lg:pr-0">
                        <div class="hidden sm:flex">
                            @auth
                                <a href="{{ route('dashboard.index') }}"
                                   class="loginBtn px-[11px] py-2 text-base font-medium text-white hover:opacity-70">
                                    {{ auth()->user()->name }} @if (auth()->user()->email_verified_at == null)
                                        <a href="{{ route('verification.notice') }}"><span
                                                class="bg-yellow-dark ml-0 m-2 inline-block rounded border border-transparent py-1 px-2.5 text-xs font-medium text-white">
                                                Unverified Email
                                            </span></a>
                                    @endif
                                </a>
                                <form method="post" action="{{ route('auth.logout') }}">
                                    @csrf
                                    <button
                                        class="loginBtn px-[11px] py-2 text-base font-medium text-white hover:opacity-70">
                                        Log out
                                    </button>
                                </form>
                            @else
                                <a href="{{ route('auth.signin') }}"
                                   class="loginBtn px-[22px] py-2 text-base font-medium text-white hover:opacity-70">
                                    Sign In
                                </a>
                                <a href="{{ route('auth.signup') }}"
                                   class="signUpBtn rounded-md bg-white bg-opacity-20 px-6 py-2 text-base font-medium text-white duration-300 ease-in-out hover:bg-opacity-100 hover:text-dark">
                                    Sign Up
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Navbar Section End -->

    {{ $slot }}

    <!-- ====== Footer Section Start -->
    <footer class="wow fadeInUp relative z-10 bg-[#090E34] pt-20 lg:pt-[100px]" data-wow-delay=".15s">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-4/12 xl:w-3/12">
                    <div class="mb-10 w-full">
                        <a href="javascript:void(0)" class="mb-6 inline-block max-w-[160px]">
                            <img src="{{ asset('assets/images/logo/logo-white.svg') }}" alt="logo"
                                 class="max-w-full"/>
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-2/12 xl:w-2/12">
                    <div class="mt-3 w-full">
                        <ul class="flex gap-12">
                            <li>
                                <a href="#home"
                                   class="mb-3 inline-block text-base text-gray-7 hover:text-primary">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#about"
                                   class="mb-3 inline-block text-base text-gray-7 hover:text-primary">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="#pricing"
                                   class="mb-3 inline-block text-base text-gray-7 hover:text-primary">
                                    Pricing
                                </a>
                            </li>
                            <li>
                                <a href="#faq"
                                   class="mb-3 inline-block text-base text-gray-7 hover:text-primary">
                                    FAQ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== Footer Section End -->

    <!-- ====== Back To Top Start -->
    <a href="javascript:void(0)"
       class="back-to-top fixed bottom-8 left-auto right-8 z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md transition duration-300 ease-in-out hover:bg-dark">
        <span class="mt-[6px] h-3 w-3 rotate-45 border-l border-t border-white"></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== All Scripts -->

    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        // ==== for menu scroll
        const pageLink = document.querySelectorAll(".ud-menu-scroll");

        pageLink.forEach((elem) => {
            elem.addEventListener("click", (e) => {
                e.preventDefault();
                document.querySelector(elem.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                    offsetTop: 1 - 60,
                });
            });
        });

        // section menu active
        function onScroll(event) {
            const sections = document.querySelectorAll(".ud-menu-scroll");
            const scrollPos =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop;

            for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                if (
                    refElement != null &&
                    refElement.offsetTop <= scrollTopMinus &&
                    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                ) {
                    document
                        .querySelector(".ud-menu-scroll")
                        .classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
            }
        }

        window.document.addEventListener("scroll", onScroll);

        // Testimonial
        const testimonialSwiper = new Swiper(".testimonial-carousel", {
            slidesPerView: 1,
            spaceBetween: 30,

            // Navigation arrows
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    </script>
</x-main-layout>
