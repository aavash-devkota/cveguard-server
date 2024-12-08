<x-landing-layout>
    <!-- ====== Hero Section Start -->
    <div id="home" class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4">
                    <div class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center" data-wow-delay=".2s">
                        <h1
                            class="mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]">
                            Open-Source Web Template for SaaS, Startup, Apps, and More
                        </h1>
                        <p
                            class="mx-auto mb-9 max-w-[600px] text-base font-medium text-white sm:text-lg sm:leading-[1.44]">
                            Multidisciplinary Web Template Built with Your Favourite
                            Technology - HTML Bootstrap, Tailwind and React NextJS.
                        </p>
                        <ul class="mb-10 flex flex-wrap items-center justify-center gap-5">
                            <li>
                                <a href="{{ route('dashboard.index') }}"
                                    class="inline-flex items-center justify-center rounded-md bg-white px-7 py-[14px] text-center text-base font-medium text-dark shadow-1 transition duration-300 ease-in-out hover:bg-gray-2 hover:text-body-color">
                                    Open Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/tailgrids/play-tailwind" target="_blank"
                                    class="flex items-center gap-4 rounded-md bg-white/[0.12] px-6 py-[14px] text-base font-medium text-white transition duration-300 ease-in-out hover:bg-white hover:text-primary">
                                    <svg width="24" height="24" viewBox="0 0 10 10" version="1.1" id="svg1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                                        <defs id="defs1" />
                                        <g id="layer1"
                                            transform="matrix(0.45097842,0,0,0.45097842,-22.631554,-8.1946545)">
                                            <g id="SvgjsG1084" featurekey="S6ay6y-0"
                                                transform="matrix(0.10578526,0,0,0.10578526,46.214599,16.67154)"
                                                fill="currentColor">
                                                <path fill="currentColor"
                                                    d="m 208.891,95.529 c -1.762,-6.868 -6.13,-11.175 -11.467,-11.414 1.466,-3.359 2.933,-6.716 4.398,-10.074 -38.919,-12.799 -80.925,-12.704 -119.785,0.266 1.332,3.27 2.666,6.539 3.998,9.808 -5.333,0.241 -9.705,4.548 -11.463,11.414 -1.756,6.856 -0.632,14.005 0.194,17.659 1.191,5.271 2.956,9.556 5.551,13.489 1.942,2.943 5.848,7.69 11.25,8.568 9.988,21.376 29.342,34.997 50.164,34.997 20.823,0 40.178,-13.621 50.163,-34.997 5.403,-0.881 9.31,-5.629 11.253,-8.571 2.589,-3.922 4.353,-8.208 5.549,-13.486 0.825,-3.654 1.95,-10.802 0.195,-17.659 z m -10.271,15.376 c -0.916,4.026 -2.216,7.225 -4.099,10.075 -1.821,2.759 -3.677,4.054 -4.477,4.054 -0.005,0 -0.01,0 -0.015,0 -1.499,-0.447 -2.993,-0.895 -4.492,-1.341 -0.59,1.448 -1.181,2.898 -1.771,4.347 -6.271,15.405 -20.606,31.868 -42.035,31.868 -21.427,0 -35.763,-16.463 -42.034,-31.868 -0.626,-1.442 -1.251,-2.883 -1.876,-4.325 -1.498,0.446 -2.996,0.892 -4.493,1.338 -0.686,0 -2.552,-1.292 -4.384,-4.068 -1.886,-2.857 -3.186,-6.059 -4.096,-10.075 -1.056,-4.672 -1.151,-9.342 -0.264,-12.814 0.637,-2.478 1.652,-3.573 1.911,-3.686 0.002,0 0.399,0.009 1.24,0.559 2.223,1.463 4.446,2.928 6.669,4.392 0.426,-2.628 0.85,-5.255 1.274,-7.883 0.081,-0.5 0.167,-0.997 0.256,-1.489 28.721,14.864 62.869,14.863 91.591,-0.003 0.091,0.495 0.177,0.992 0.258,1.494 0.424,2.627 0.853,5.254 1.277,7.881 2.22,-1.464 4.446,-2.929 6.667,-4.392 0.81,-0.535 1.206,-0.559 1.201,-0.567 0.297,0.125 1.314,1.223 1.947,3.696 0.894,3.47 0.797,8.139 -0.255,12.807 z"
                                                    id="path1" />
                                                <path fill="currentColor"
                                                    d="m 221.525,203.185 c -12.703,-12.703 -25.406,-25.406 -38.109,-38.109 -6.947,34.738 -13.894,69.477 -20.841,104.214 27.788,0 55.579,0 83.369,0 0,-2.385 0,-4.77 0,-7.151 0,-22.117 -8.781,-43.319 -24.419,-58.954 z m -9.528,29.948 c -3.632,1.343 -7.23,1.825 -11.068,1.825 -3.833,0 -7.429,-0.482 -11.061,-1.822 -2.967,-1.098 -7.542,-3.417 -7.542,-7.479 0,-4.061 4.569,-6.38 7.537,-7.478 3.632,-1.342 7.228,-1.824 11.065,-1.824 3.836,0 7.432,0.479 11.061,1.822 2.968,1.098 7.545,3.417 7.545,7.479 0,4.061 -4.572,6.379 -7.537,7.477 z"
                                                    id="path2" />
                                                <path fill="currentColor"
                                                    d="m 165.148,133.517 c 0,1.273 0,2.546 0,3.821 -6.57,-1.974 -13.091,-2.57 -19.886,-2.57 -1.652,-1.653 -2.861,-3.168 -2.931,-5.704 -0.07,2.536 -1.278,4.051 -2.933,5.704 -6.793,0 -13.314,0.597 -19.886,2.57 0,-1.274 0,-2.547 0,-3.821 0,-2.618 1.781,-4.899 4.321,-5.534 3.859,-0.965 7.72,-1.931 11.579,-2.896 4.737,-1.184 9.098,-1.184 13.835,0 3.86,0.965 7.719,1.93 11.58,2.896 2.54,0.635 4.321,2.916 4.321,5.534 z"
                                                    id="path3" />
                                                <path fill="currentColor"
                                                    d="m 188.637,23.434 c 6.597,7.366 14.309,11.729 23.254,15.348 2.163,0.875 4.348,1.666 6.563,2.393 1.161,0.381 2.327,0.743 3.5,1.087 0.301,0.087 0.599,0.174 0.898,0.26 0.558,0.161 -0.401,0.42 -0.615,0.615 -0.462,0.42 -0.922,0.845 -1.378,1.273 -3.344,3.152 -6.42,6.473 -9.147,10.184 -1.438,1.956 -2.746,3.976 -3.901,6.113 -0.54,1 -1.04,2.016 -1.499,3.057 -0.182,0.41 -0.475,0.034 -0.717,-0.045 -0.272,-0.092 -0.548,-0.182 -0.822,-0.271 -0.551,-0.179 -1.101,-0.356 -1.653,-0.531 -4.443,-1.407 -8.923,-2.655 -13.452,-3.75 -9.15,-2.213 -18.343,-3.766 -27.713,-4.684 -18.945,-1.854 -37.255,-1.085 -55.981,2.351 -9.248,1.698 -18.27,4.014 -27.192,6.98 -0.466,0.155 -0.881,0.334 -1.132,-0.255 -0.2,-0.472 -0.409,-0.938 -0.627,-1.402 -0.447,-0.953 -0.926,-1.884 -1.438,-2.802 -1.088,-1.951 -2.299,-3.807 -3.619,-5.606 -3.022,-4.118 -6.457,-7.762 -10.204,-11.21 13.229,-3.78 24.616,-8.327 34.267,-19.103 1.782,-1.991 3.539,-2.671 6.198,-2.401 13.183,1.341 24.678,0.226 36.777,-5.95 2.387,-1.216 4.273,-1.216 6.661,0 12.097,6.176 23.594,7.292 36.776,5.95 2.656,-0.272 4.414,0.408 6.196,2.399 z"
                                                    id="path4" />
                                                <path fill="currentColor"
                                                    d="m 120.889,269.289 c 13.895,0 27.787,0 41.687,0 -4.585,-27.511 -9.176,-55.026 -13.758,-82.537 2.192,-1.499 4.017,-3.18 5.501,-5.415 0.908,-1.363 1.564,-2.746 1.867,-4.381 0.187,-1.02 0.29,-1.908 -0.252,-2.892 -2.211,-4.022 -10.725,-4.817 -14.202,-4.817 -3.479,0 -11.99,0.797 -14.202,4.817 -0.542,0.983 -0.438,1.875 -0.254,2.892 0.298,1.635 0.957,3.013 1.864,4.381 1.486,2.233 3.311,3.916 5.504,5.415 -4.584,27.511 -9.171,55.026 -13.755,82.537 z"
                                                    id="path5" />
                                                <path fill="currentColor"
                                                    d="m 100.047,165.075 c -12.706,12.703 -25.409,25.406 -38.112,38.109 -15.634,15.636 -24.419,36.84 -24.419,58.953 0,2.382 0,4.767 0,7.151 27.791,0 55.58,0 83.371,0 -6.944,-34.736 -13.892,-69.475 -20.84,-104.213 z"
                                                    id="path6" />
                                            </g>
                                        </g>
                                    </svg>
                                    Download Client
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="w-full px-4">
                    <div class="wow fadeInUp relative z-10 mx-auto max-w-[845px]" data-wow-delay=".25s">
                        <div class="mt-16">
                            <img src="assets/images/hero/hero-image.jpg" alt="hero"
                                class="mx-auto max-w-full rounded-t-xl rounded-tr-xl" />
                        </div>
                        <div class="absolute -left-9 bottom-0 z-[-1]">
                            <svg width="134" height="106" viewBox="0 0 134 106" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)"
                                    fill="white" />
                                <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)"
                                    fill="white" />
                                <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)"
                                    fill="white" />
                                <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)"
                                    fill="white" />
                                <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)"
                                    fill="white" />
                                <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)"
                                    fill="white" />
                                <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)"
                                    fill="white" />
                                <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)"
                                    fill="white" />
                                <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)"
                                    fill="white" />
                                <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)"
                                    fill="white" />
                                <circle cx="1.66667" cy="89.3333" r="1.66667"
                                    transform="rotate(-90 1.66667 89.3333)" fill="white" />
                                <circle cx="16.3333" cy="89.3333" r="1.66667"
                                    transform="rotate(-90 16.3333 89.3333)" fill="white" />
                                <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)"
                                    fill="white" />
                                <circle cx="45.6667" cy="89.3333" r="1.66667"
                                    transform="rotate(-90 45.6667 89.3333)" fill="white" />
                                <circle cx="60.3333" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 60.3333 89.3338)" fill="white" />
                                <circle cx="88.6667" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 88.6667 89.3338)" fill="white" />
                                <circle cx="117.667" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 117.667 89.3338)" fill="white" />
                                <circle cx="74.6667" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 74.6667 89.3338)" fill="white" />
                                <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)"
                                    fill="white" />
                                <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)"
                                    fill="white" />
                                <circle cx="1.66667" cy="74.6673" r="1.66667"
                                    transform="rotate(-90 1.66667 74.6673)" fill="white" />
                                <circle cx="1.66667" cy="31.0003" r="1.66667"
                                    transform="rotate(-90 1.66667 31.0003)" fill="white" />
                                <circle cx="16.3333" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 16.3333 74.6668)" fill="white" />
                                <circle cx="16.3333" cy="31.0003" r="1.66667"
                                    transform="rotate(-90 16.3333 31.0003)" fill="white" />
                                <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)"
                                    fill="white" />
                                <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)"
                                    fill="white" />
                                <circle cx="45.6667" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 45.6667 74.6668)" fill="white" />
                                <circle cx="45.6667" cy="31.0003" r="1.66667"
                                    transform="rotate(-90 45.6667 31.0003)" fill="white" />
                                <circle cx="60.3333" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 60.3333 74.6668)" fill="white" />
                                <circle cx="60.3333" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 60.3333 31.0001)" fill="white" />
                                <circle cx="88.6667" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 88.6667 74.6668)" fill="white" />
                                <circle cx="88.6667" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 88.6667 31.0001)" fill="white" />
                                <circle cx="117.667" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 117.667 74.6668)" fill="white" />
                                <circle cx="117.667" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 117.667 31.0001)" fill="white" />
                                <circle cx="74.6667" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 74.6667 74.6668)" fill="white" />
                                <circle cx="74.6667" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 74.6667 31.0001)" fill="white" />
                                <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)"
                                    fill="white" />
                                <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)"
                                    fill="white" />
                                <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)"
                                    fill="white" />
                                <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)"
                                    fill="white" />
                                <circle cx="1.66667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 1.66667 60.0003)" fill="white" />
                                <circle cx="1.66667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 1.66667 16.3336)" fill="white" />
                                <circle cx="16.3333" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 16.3333 60.0003)" fill="white" />
                                <circle cx="16.3333" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 16.3333 16.3336)" fill="white" />
                                <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)"
                                    fill="white" />
                                <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)"
                                    fill="white" />
                                <circle cx="45.6667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 45.6667 60.0003)" fill="white" />
                                <circle cx="45.6667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 45.6667 16.3336)" fill="white" />
                                <circle cx="60.3333" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 60.3333 60.0003)" fill="white" />
                                <circle cx="60.3333" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 60.3333 16.3336)" fill="white" />
                                <circle cx="88.6667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 88.6667 60.0003)" fill="white" />
                                <circle cx="88.6667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 88.6667 16.3336)" fill="white" />
                                <circle cx="117.667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 117.667 60.0003)" fill="white" />
                                <circle cx="117.667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 117.667 16.3336)" fill="white" />
                                <circle cx="74.6667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 74.6667 60.0003)" fill="white" />
                                <circle cx="74.6667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 74.6667 16.3336)" fill="white" />
                                <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)"
                                    fill="white" />
                                <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)"
                                    fill="white" />
                                <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)"
                                    fill="white" />
                                <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)"
                                    fill="white" />
                                <circle cx="1.66667" cy="45.3336" r="1.66667"
                                    transform="rotate(-90 1.66667 45.3336)" fill="white" />
                                <circle cx="1.66667" cy="1.66683" r="1.66667"
                                    transform="rotate(-90 1.66667 1.66683)" fill="white" />
                                <circle cx="16.3333" cy="45.3336" r="1.66667"
                                    transform="rotate(-90 16.3333 45.3336)" fill="white" />
                                <circle cx="16.3333" cy="1.66683" r="1.66667"
                                    transform="rotate(-90 16.3333 1.66683)" fill="white" />
                                <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)"
                                    fill="white" />
                                <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)"
                                    fill="white" />
                                <circle cx="45.6667" cy="45.3336" r="1.66667"
                                    transform="rotate(-90 45.6667 45.3336)" fill="white" />
                                <circle cx="45.6667" cy="1.66683" r="1.66667"
                                    transform="rotate(-90 45.6667 1.66683)" fill="white" />
                                <circle cx="60.3333" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 60.3333 45.3338)" fill="white" />
                                <circle cx="60.3333" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 60.3333 1.66707)" fill="white" />
                                <circle cx="88.6667" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 88.6667 45.3338)" fill="white" />
                                <circle cx="88.6667" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 88.6667 1.66707)" fill="white" />
                                <circle cx="117.667" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 117.667 45.3338)" fill="white" />
                                <circle cx="117.667" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 117.667 1.66707)" fill="white" />
                                <circle cx="74.6667" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 74.6667 45.3338)" fill="white" />
                                <circle cx="74.6667" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 74.6667 1.66707)" fill="white" />
                                <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)"
                                    fill="white" />
                                <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)"
                                    fill="white" />
                                <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)"
                                    fill="white" />
                                <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="absolute -right-6 -top-6 z-[-1]">
                            <svg width="134" height="106" viewBox="0 0 134 106" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)"
                                    fill="white" />
                                <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)"
                                    fill="white" />
                                <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)"
                                    fill="white" />
                                <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)"
                                    fill="white" />
                                <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)"
                                    fill="white" />
                                <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)"
                                    fill="white" />
                                <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)"
                                    fill="white" />
                                <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)"
                                    fill="white" />
                                <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)"
                                    fill="white" />
                                <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)"
                                    fill="white" />
                                <circle cx="1.66667" cy="89.3333" r="1.66667"
                                    transform="rotate(-90 1.66667 89.3333)" fill="white" />
                                <circle cx="16.3333" cy="89.3333" r="1.66667"
                                    transform="rotate(-90 16.3333 89.3333)" fill="white" />
                                <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)"
                                    fill="white" />
                                <circle cx="45.6667" cy="89.3333" r="1.66667"
                                    transform="rotate(-90 45.6667 89.3333)" fill="white" />
                                <circle cx="60.3333" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 60.3333 89.3338)" fill="white" />
                                <circle cx="88.6667" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 88.6667 89.3338)" fill="white" />
                                <circle cx="117.667" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 117.667 89.3338)" fill="white" />
                                <circle cx="74.6667" cy="89.3338" r="1.66667"
                                    transform="rotate(-90 74.6667 89.3338)" fill="white" />
                                <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)"
                                    fill="white" />
                                <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)"
                                    fill="white" />
                                <circle cx="1.66667" cy="74.6673" r="1.66667"
                                    transform="rotate(-90 1.66667 74.6673)" fill="white" />
                                <circle cx="1.66667" cy="31.0003" r="1.66667"
                                    transform="rotate(-90 1.66667 31.0003)" fill="white" />
                                <circle cx="16.3333" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 16.3333 74.6668)" fill="white" />
                                <circle cx="16.3333" cy="31.0003" r="1.66667"
                                    transform="rotate(-90 16.3333 31.0003)" fill="white" />
                                <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)"
                                    fill="white" />
                                <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)"
                                    fill="white" />
                                <circle cx="45.6667" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 45.6667 74.6668)" fill="white" />
                                <circle cx="45.6667" cy="31.0003" r="1.66667"
                                    transform="rotate(-90 45.6667 31.0003)" fill="white" />
                                <circle cx="60.3333" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 60.3333 74.6668)" fill="white" />
                                <circle cx="60.3333" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 60.3333 31.0001)" fill="white" />
                                <circle cx="88.6667" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 88.6667 74.6668)" fill="white" />
                                <circle cx="88.6667" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 88.6667 31.0001)" fill="white" />
                                <circle cx="117.667" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 117.667 74.6668)" fill="white" />
                                <circle cx="117.667" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 117.667 31.0001)" fill="white" />
                                <circle cx="74.6667" cy="74.6668" r="1.66667"
                                    transform="rotate(-90 74.6667 74.6668)" fill="white" />
                                <circle cx="74.6667" cy="31.0001" r="1.66667"
                                    transform="rotate(-90 74.6667 31.0001)" fill="white" />
                                <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)"
                                    fill="white" />
                                <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)"
                                    fill="white" />
                                <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)"
                                    fill="white" />
                                <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)"
                                    fill="white" />
                                <circle cx="1.66667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 1.66667 60.0003)" fill="white" />
                                <circle cx="1.66667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 1.66667 16.3336)" fill="white" />
                                <circle cx="16.3333" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 16.3333 60.0003)" fill="white" />
                                <circle cx="16.3333" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 16.3333 16.3336)" fill="white" />
                                <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)"
                                    fill="white" />
                                <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)"
                                    fill="white" />
                                <circle cx="45.6667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 45.6667 60.0003)" fill="white" />
                                <circle cx="45.6667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 45.6667 16.3336)" fill="white" />
                                <circle cx="60.3333" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 60.3333 60.0003)" fill="white" />
                                <circle cx="60.3333" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 60.3333 16.3336)" fill="white" />
                                <circle cx="88.6667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 88.6667 60.0003)" fill="white" />
                                <circle cx="88.6667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 88.6667 16.3336)" fill="white" />
                                <circle cx="117.667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 117.667 60.0003)" fill="white" />
                                <circle cx="117.667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 117.667 16.3336)" fill="white" />
                                <circle cx="74.6667" cy="60.0003" r="1.66667"
                                    transform="rotate(-90 74.6667 60.0003)" fill="white" />
                                <circle cx="74.6667" cy="16.3336" r="1.66667"
                                    transform="rotate(-90 74.6667 16.3336)" fill="white" />
                                <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)"
                                    fill="white" />
                                <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)"
                                    fill="white" />
                                <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)"
                                    fill="white" />
                                <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)"
                                    fill="white" />
                                <circle cx="1.66667" cy="45.3336" r="1.66667"
                                    transform="rotate(-90 1.66667 45.3336)" fill="white" />
                                <circle cx="1.66667" cy="1.66683" r="1.66667"
                                    transform="rotate(-90 1.66667 1.66683)" fill="white" />
                                <circle cx="16.3333" cy="45.3336" r="1.66667"
                                    transform="rotate(-90 16.3333 45.3336)" fill="white" />
                                <circle cx="16.3333" cy="1.66683" r="1.66667"
                                    transform="rotate(-90 16.3333 1.66683)" fill="white" />
                                <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)"
                                    fill="white" />
                                <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)"
                                    fill="white" />
                                <circle cx="45.6667" cy="45.3336" r="1.66667"
                                    transform="rotate(-90 45.6667 45.3336)" fill="white" />
                                <circle cx="45.6667" cy="1.66683" r="1.66667"
                                    transform="rotate(-90 45.6667 1.66683)" fill="white" />
                                <circle cx="60.3333" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 60.3333 45.3338)" fill="white" />
                                <circle cx="60.3333" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 60.3333 1.66707)" fill="white" />
                                <circle cx="88.6667" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 88.6667 45.3338)" fill="white" />
                                <circle cx="88.6667" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 88.6667 1.66707)" fill="white" />
                                <circle cx="117.667" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 117.667 45.3338)" fill="white" />
                                <circle cx="117.667" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 117.667 1.66707)" fill="white" />
                                <circle cx="74.6667" cy="45.3338" r="1.66667"
                                    transform="rotate(-90 74.6667 45.3338)" fill="white" />
                                <circle cx="74.6667" cy="1.66707" r="1.66667"
                                    transform="rotate(-90 74.6667 1.66707)" fill="white" />
                                <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)"
                                    fill="white" />
                                <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)"
                                    fill="white" />
                                <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)"
                                    fill="white" />
                                <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)"
                                    fill="white" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Hero Section End -->

    <!-- ====== Features Section Start -->
    <section class="pb-8 pt-20 bg-white lg:pb-[70px] lg:pt-[120px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-12 max-w-[485px] text-center lg:mb-[70px]">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            Features
                        </span>
                        <h2 class="mb-3 text-3xl font-bold text-dark sm:text-4xl md:text-[40px] md:leading-[1.2]">
                            Main Features Of Play
                        </h2>
                        <p class="text-base text-body-color">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="wow fadeInUp group mb-12" data-wow-delay=".1s">
                        <div
                            class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                            <span
                                class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30.5801 8.30514H27.9926C28.6113 7.85514 29.1176 7.34889 29.3426 6.73014C29.6801 5.88639 29.6801 4.48014 27.9363 2.84889C26.0801 1.04889 24.3926 1.04889 23.3238 1.33014C20.9051 1.94889 19.2738 4.76139 18.3738 6.78639C17.4738 4.76139 15.8426 2.00514 13.4238 1.33014C12.3551 1.04889 10.6676 1.10514 8.81133 2.84889C7.06758 4.53639 7.12383 5.88639 7.40508 6.73014C7.63008 7.34889 8.13633 7.85514 8.75508 8.30514H5.71758C4.08633 8.30514 2.73633 9.65514 2.73633 11.2864V14.9989C2.73633 16.5739 4.03008 17.8676 5.60508 17.9239V31.6489C5.60508 33.5614 7.18008 35.1926 9.14883 35.1926H27.5426C29.4551 35.1926 31.0863 33.6176 31.0863 31.6489V17.8676C32.4926 17.6426 33.5613 16.4051 33.5613 14.9426V11.2301C33.5613 9.59889 32.2113 8.30514 30.5801 8.30514ZM23.9426 3.69264C23.9988 3.69264 24.1676 3.63639 24.3363 3.63639C24.7301 3.63639 25.3488 3.80514 26.1926 4.59264C26.8676 5.21139 27.0363 5.66139 26.9801 5.77389C26.6988 6.56139 23.8863 7.40514 20.6801 7.74264C21.4676 5.99889 22.6488 4.03014 23.9426 3.69264ZM10.4988 4.64889C11.3426 3.86139 11.9613 3.69264 12.3551 3.69264C12.5238 3.69264 12.6363 3.74889 12.7488 3.74889C14.0426 4.08639 15.2801 5.99889 16.0676 7.79889C12.8613 7.46139 10.0488 6.61764 9.76758 5.83014C9.71133 5.66139 9.88008 5.26764 10.4988 4.64889ZM5.26758 14.9426V11.2301C5.26758 11.0051 5.43633 10.7801 5.71758 10.7801H30.5801C30.8051 10.7801 31.0301 10.9489 31.0301 11.2301V14.9426C31.0301 15.1676 30.8613 15.3926 30.5801 15.3926H5.71758C5.49258 15.3926 5.26758 15.2239 5.26758 14.9426ZM27.5426 32.6614H9.14883C8.58633 32.6614 8.13633 32.2114 8.13633 31.6489V17.9239H28.4988V31.6489C28.5551 32.2114 28.1051 32.6614 27.5426 32.6614Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4 class="mb-3 text-xl font-bold text-dark">
                            Free and Open-Source
                        </h4>
                        <p class="mb-8 text-body-color lg:mb-9">
                            Lorem Ipsum is simply dummy text of the printing and industry.
                        </p>
                        <a href="javascript:void(0)" class="text-base font-medium text-dark hover:text-primary">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="wow fadeInUp group mb-12" data-wow-delay=".15s">
                        <div
                            class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                            <span
                                class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30.5998 1.01245H5.39981C2.98105 1.01245 0.956055 2.9812 0.956055 5.4562V30.6562C0.956055 33.075 2.9248 35.0437 5.39981 35.0437H30.5998C33.0186 35.0437 34.9873 33.075 34.9873 30.6562V5.39995C34.9873 2.9812 33.0186 1.01245 30.5998 1.01245ZM5.39981 3.48745H30.5998C31.6123 3.48745 32.4561 4.3312 32.4561 5.39995V11.1937H3.4873V5.39995C3.4873 4.38745 4.38731 3.48745 5.39981 3.48745ZM3.4873 30.6V13.725H23.0623V32.5125H5.39981C4.38731 32.5125 3.4873 31.6125 3.4873 30.6ZM30.5998 32.5125H25.5373V13.725H32.4561V30.6C32.5123 31.6125 31.6123 32.5125 30.5998 32.5125Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4 class="mb-3 text-xl font-bold text-dark">
                            Multipurpose Template
                        </h4>
                        <p class="mb-8 text-body-color lg:mb-9">
                            Lorem Ipsum is simply dummy text of the printing and industry.
                        </p>
                        <a href="javascript:void(0)" class="text-base font-medium text-dark hover:text-primary">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="wow fadeInUp group mb-12" data-wow-delay=".2s">
                        <div
                            class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                            <span
                                class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M33.5613 21.4677L31.3675 20.1177C30.805 19.7239 30.0175 19.9489 29.6238 20.5114C29.23 21.1302 29.455 21.8614 30.0175 22.2552L31.48 23.2114L18.1488 31.5927L4.76127 23.2114L6.22377 22.2552C6.84252 21.8614 7.01127 21.0739 6.61752 20.5114C6.22377 19.8927 5.43627 19.7239 4.87377 20.1177L2.68002 21.4677C2.11752 21.8614 1.72377 22.4802 1.72377 23.1552C1.72377 23.8302 2.06127 24.5052 2.68002 24.8427L17.08 33.8989C17.4175 34.1239 17.755 34.1802 18.1488 34.1802C18.5425 34.1802 18.88 34.0677 19.2175 33.8989L33.5613 24.8989C34.1238 24.5052 34.5175 23.8864 34.5175 23.2114C34.5175 22.5364 34.18 21.8614 33.5613 21.4677Z"
                                    fill="white" />
                                <path
                                    d="M20.1175 20.4552L18.1488 21.6364L16.18 20.3989C15.5613 20.0052 14.83 20.2302 14.4363 20.7927C14.0425 21.4114 14.2675 22.1427 14.83 22.5364L17.4738 24.1677C17.6988 24.2802 17.9238 24.3364 18.1488 24.3364C18.3738 24.3364 18.5988 24.2802 18.8238 24.1677L21.4675 22.5364C22.0863 22.1427 22.255 21.3552 21.8613 20.7927C21.4675 20.2302 20.68 20.0614 20.1175 20.4552Z"
                                    fill="white" />
                                <path
                                    d="M7.74252 18.0927L11.455 20.4552C11.68 20.5677 11.905 20.6239 12.13 20.6239C12.5238 20.6239 12.9738 20.3989 13.1988 20.0052C13.5925 19.3864 13.3675 18.6552 12.805 18.2614L9.09252 15.8989C8.47377 15.5052 7.74252 15.7302 7.34877 16.2927C6.95502 16.9677 7.12377 17.7552 7.74252 18.0927Z"
                                    fill="white" />
                                <path
                                    d="M5.04252 16.1802C5.43627 16.1802 5.88627 15.9552 6.11127 15.5614C6.50502 14.9427 6.28002 14.2114 5.71752 13.8177L4.81752 13.2552L5.71752 12.6927C6.33627 12.2989 6.50502 11.5114 6.11127 10.9489C5.71752 10.3302 4.93002 10.1614 4.36752 10.5552L1.72377 12.1864C1.33002 12.4114 1.10502 12.8052 1.10502 13.2552C1.10502 13.7052 1.33002 14.0989 1.72377 14.3239L4.36752 15.9552C4.53627 16.1239 4.76127 16.1802 5.04252 16.1802Z"
                                    fill="white" />
                                <path
                                    d="M8.41752 10.7239C8.64252 10.7239 8.86752 10.6677 9.09252 10.5552L12.805 8.1927C13.4238 7.79895 13.5925 7.01145 13.1988 6.44895C12.805 5.8302 12.0175 5.66145 11.455 6.0552L7.74252 8.4177C7.12377 8.81145 6.95502 9.59895 7.34877 10.1614C7.57377 10.4989 7.96752 10.7239 8.41752 10.7239Z"
                                    fill="white" />
                                <path
                                    d="M16.18 6.05522L18.1488 4.81772L20.1175 6.05522C20.3425 6.16772 20.5675 6.22397 20.7925 6.22397C21.1863 6.22397 21.6363 5.99897 21.8613 5.60522C22.255 4.98647 22.03 4.25522 21.4675 3.86147L18.8238 2.23022C18.43 1.94897 17.8675 1.94897 17.4738 2.23022L14.83 3.86147C14.2113 4.25522 14.0425 5.04272 14.4363 5.60522C14.83 6.16772 15.6175 6.44897 16.18 6.05522Z"
                                    fill="white" />
                                <path
                                    d="M23.4925 8.19267L27.205 10.5552C27.43 10.6677 27.655 10.7239 27.88 10.7239C28.2738 10.7239 28.7238 10.4989 28.9488 10.1052C29.3425 9.48642 29.1175 8.75517 28.555 8.36142L24.8425 5.99892C24.28 5.60517 23.4925 5.83017 23.0988 6.39267C22.705 7.01142 22.8738 7.79892 23.4925 8.19267Z"
                                    fill="white" />
                                <path
                                    d="M34.5738 12.1864L31.93 10.5552C31.3675 10.1614 30.58 10.3864 30.1863 10.9489C29.7925 11.5677 30.0175 12.2989 30.58 12.6927L31.48 13.2552L30.58 13.8177C29.9613 14.2114 29.7925 14.9989 30.1863 15.5614C30.4113 15.9552 30.8613 16.1802 31.255 16.1802C31.48 16.1802 31.705 16.1239 31.93 16.0114L34.5738 14.3802C34.9675 14.1552 35.1925 13.7614 35.1925 13.3114C35.1925 12.8614 34.9675 12.4114 34.5738 12.1864Z"
                                    fill="white" />
                                <path
                                    d="M24.1675 20.624C24.3925 20.624 24.6175 20.5677 24.8425 20.4552L28.555 18.0927C29.1738 17.699 29.3425 16.9115 28.9488 16.349C28.555 15.7302 27.7675 15.5615 27.205 15.9552L23.4925 18.3177C22.8738 18.7115 22.705 19.499 23.0988 20.0615C23.3238 20.4552 23.7175 20.624 24.1675 20.624Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4 class="mb-3 text-xl font-bold text-dark">
                            High-quality Design
                        </h4>
                        <p class="mb-8 text-body-color lg:mb-9">
                            Lorem Ipsum is simply dummy text of the printing and industry.
                        </p>
                        <a href="javascript:void(0)" class="text-base font-medium text-dark hover:text-primary">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="wow fadeInUp group mb-12" data-wow-delay=".25s">
                        <div
                            class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                            <span
                                class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.355 2.0614H5.21129C3.29879 2.0614 1.72379 3.6364 1.72379 5.5489V12.6927C1.72379 14.6052 3.29879 16.1802 5.21129 16.1802H12.355C14.2675 16.1802 15.8425 14.6052 15.8425 12.6927V5.60515C15.8988 3.6364 14.3238 2.0614 12.355 2.0614ZM13.3675 12.7489C13.3675 13.3114 12.9175 13.7614 12.355 13.7614H5.21129C4.64879 13.7614 4.19879 13.3114 4.19879 12.7489V5.60515C4.19879 5.04265 4.64879 4.59265 5.21129 4.59265H12.355C12.9175 4.59265 13.3675 5.04265 13.3675 5.60515V12.7489Z"
                                    fill="white" />
                                <path
                                    d="M31.0863 2.0614H23.9425C22.03 2.0614 20.455 3.6364 20.455 5.5489V12.6927C20.455 14.6052 22.03 16.1802 23.9425 16.1802H31.0863C32.9988 16.1802 34.5738 14.6052 34.5738 12.6927V5.60515C34.5738 3.6364 32.9988 2.0614 31.0863 2.0614ZM32.0988 12.7489C32.0988 13.3114 31.6488 13.7614 31.0863 13.7614H23.9425C23.38 13.7614 22.93 13.3114 22.93 12.7489V5.60515C22.93 5.04265 23.38 4.59265 23.9425 4.59265H31.0863C31.6488 4.59265 32.0988 5.04265 32.0988 5.60515V12.7489Z"
                                    fill="white" />
                                <path
                                    d="M12.355 20.0051H5.21129C3.29879 20.0051 1.72379 21.5801 1.72379 23.4926V30.6364C1.72379 32.5489 3.29879 34.1239 5.21129 34.1239H12.355C14.2675 34.1239 15.8425 32.5489 15.8425 30.6364V23.5489C15.8988 21.5801 14.3238 20.0051 12.355 20.0051ZM13.3675 30.6926C13.3675 31.2551 12.9175 31.7051 12.355 31.7051H5.21129C4.64879 31.7051 4.19879 31.2551 4.19879 30.6926V23.5489C4.19879 22.9864 4.64879 22.5364 5.21129 22.5364H12.355C12.9175 22.5364 13.3675 22.9864 13.3675 23.5489V30.6926Z"
                                    fill="white" />
                                <path
                                    d="M31.0863 20.0051H23.9425C22.03 20.0051 20.455 21.5801 20.455 23.4926V30.6364C20.455 32.5489 22.03 34.1239 23.9425 34.1239H31.0863C32.9988 34.1239 34.5738 32.5489 34.5738 30.6364V23.5489C34.5738 21.5801 32.9988 20.0051 31.0863 20.0051ZM32.0988 30.6926C32.0988 31.2551 31.6488 31.7051 31.0863 31.7051H23.9425C23.38 31.7051 22.93 31.2551 22.93 30.6926V23.5489C22.93 22.9864 23.38 22.5364 23.9425 22.5364H31.0863C31.6488 22.5364 32.0988 22.9864 32.0988 23.5489V30.6926Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h4 class="mb-3 text-xl font-bold text-dark">
                            All Essential Elements
                        </h4>
                        <p class="mb-8 text-body-color lg:mb-9">
                            Lorem Ipsum is simply dummy text of the printing and industry.
                        </p>
                        <a href="javascript:void(0)" class="text-base font-medium text-dark hover:text-primary">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Features Section End -->

    <!-- ====== About Section Start -->
    <section id="about" class="bg-gray-1 pb-8 pt-20 lg:pb-[70px] lg:pt-[120px]">
        <div class="container">
            <div class="wow fadeInUp" data-wow-delay=".2s">
                <div class="-mx-4 flex flex-wrap items-center">
                    <div class="w-full px-4 lg:w-1/2">
                        <div class="mb-12 max-w-[540px] lg:mb-0">
                            <h2
                                class="mb-5 text-3xl font-bold leading-tight text-dark sm:text-[40px] sm:leading-[1.2]">
                                Brilliant Toolkit to Build Nextgen Website Faster.
                            </h2>
                            <p class="mb-10 text-base leading-relaxed text-body-color">
                                The main ‘thrust' is to focus on educating attendees on how to
                                best protect highly vulnerable business applications with
                                interactive panel discussions and roundtables led by subject
                                matter experts.
                                <br />
                                <br />
                                The main ‘thrust' is to focus on educating attendees on how to
                                best protect highly vulnerable business applications with
                                interactive panel.
                            </p>
                        </div>
                    </div>

                    <div class="w-full px-4 lg:w-1/2">
                        <div class="-mx-2 flex flex-wrap sm:-mx-4 lg:-mx-2 xl:-mx-4">
                            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                                <div class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]">
                                    <img src="./assets/images/about/about-image-01.jpg" alt="about image"
                                        class="h-full w-full object-cover object-center" />
                                </div>
                            </div>

                            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                                <div
                                    class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]">
                                    <img src="./assets/images/about/about-image-02.jpg" alt="about image"
                                        class="h-full w-full object-cover object-center" />
                                </div>

                                <div
                                    class="relative z-10 mb-4 flex items-center justify-center overflow-hidden bg-primary px-6 py-12 sm:mb-8 sm:h-[160px] sm:p-5 lg:mb-4 xl:mb-8">
                                    <div>
                                        <span class="block text-5xl font-extrabold text-white">
                                            09
                                        </span>
                                        <span class="block text-base font-semibold text-white">
                                            We have
                                        </span>
                                        <span class="block text-base font-medium text-white text-opacity-70">
                                            Years of experience
                                        </span>
                                    </div>
                                    <div>
                                        <span class="absolute left-0 top-0 -z-10">
                                            <svg width="106" height="144" viewBox="0 0 106 144" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.1" x="-67" y="47.127" width="113.378"
                                                    height="131.304" transform="rotate(-42.8643 -67 47.127)"
                                                    fill="url(#paint0_linear_1416_214)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1416_214" x1="-10.3111"
                                                        y1="47.127" x2="-10.3111" y2="178.431"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="white" />
                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="absolute right-0 top-0 -z-10">
                                            <svg width="130" height="97" viewBox="0 0 130 97" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.1" x="0.86792" y="-6.67725" width="155.563"
                                                    height="140.614" transform="rotate(-42.8643 0.86792 -6.67725)"
                                                    fill="url(#paint0_linear_1416_215)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1416_215" x1="78.6495"
                                                        y1="-6.67725" x2="78.6495" y2="133.937"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="white" />
                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="absolute bottom-0 right-0 -z-10">
                                            <svg width="175" height="104" viewBox="0 0 175 104" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.1" x="175.011" y="108.611" width="101.246"
                                                    height="148.179" transform="rotate(137.136 175.011 108.611)"
                                                    fill="url(#paint0_linear_1416_216)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1416_216" x1="225.634"
                                                        y1="108.611" x2="225.634" y2="256.79"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="white" />
                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== About Section End -->

    <!-- ====== CTA Section Start -->
    <section class="relative z-10 overflow-hidden bg-primary py-20 lg:py-[115px]">
        <div class="container mx-auto">
            <div class="relative overflow-hidden">
                <div class="-mx-4 flex flex-wrap items-stretch">
                    <div class="w-full px-4">
                        <div class="mx-auto max-w-[570px] text-center">
                            <h2 class="mb-2.5 text-3xl font-bold text-white md:text-[38px] md:leading-[1.44]">
                                <span>What Are You Looking For?</span>
                                <span class="text-3xl font-normal md:text-[40px]">
                                    Get Started Now
                                </span>
                            </h2>
                            <p class="mx-auto mb-6 max-w-[515px] text-base leading-[1.5] text-white">
                                There are many variations of passages of Lorem Ipsum but the
                                majority have suffered in some form.
                            </p>
                            <a href="javascript:void(0)"
                                class="inline-block rounded-md border border-transparent bg-secondary px-7 py-3 text-base font-medium text-white transition hover:bg-[#0BB489]">
                                Start using Play
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <span class="absolute left-0 top-0">
                <svg width="495" height="470" viewBox="0 0 495 470" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="55" cy="442" r="138" stroke="white" stroke-opacity="0.04"
                        stroke-width="50" />
                    <circle cx="446" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
                    <path d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z" stroke="white"
                        stroke-opacity="0.08" stroke-width="12" />
                </svg>
            </span>
            <span class="absolute bottom-0 right-0">
                <svg width="493" height="470" viewBox="0 0 493 470" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="462" cy="5" r="138" stroke="white" stroke-opacity="0.04"
                        stroke-width="50" />
                    <circle cx="49" cy="470" r="39" stroke="white" stroke-opacity="0.04"
                        stroke-width="20" />
                    <path d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z" stroke="white"
                        stroke-opacity="0.06" stroke-width="13" />
                </svg>
            </span>
        </div>
    </section>
    <!-- ====== CTA Section End -->

    <!-- ====== Pricing Section Start -->
    <section id="pricing" class="relative z-20 overflow-hidden bg-white pb-12 pt-20 lg:pb-[90px] lg:pt-[120px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            Pricing Table
                        </span>
                        <h2 class="mb-3 text-3xl font-bold text-dark sm:text-4xl md:text-[40px] md:leading-[1.2]">
                            Awesome Pricing Plan
                        </h2>
                        <p class="text-base text-body-color">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="relative z-10 mb-10 overflow-hidden rounded-xl bg-white px-8 py-10 shadow-pricing sm:p-12 lg:px-6 lg:py-10 xl:p-14">
                        <span class="mb-5 block text-xl font-medium text-dark">
                            Starter
                        </span>
                        <h2 class="mb-11 text-4xl font-semibold text-dark xl:text-[42px] xl:leading-[1.21]">
                            <span class="text-xl font-medium">$</span>
                            <span class="-ml-1 -tracking-[2px]">25.00</span>
                            <span class="text-base font-normal text-body-color">
                                Per Month
                            </span>
                        </h2>
                        <div class="mb-[50px]">
                            <h5 class="mb-5 text-lg font-medium text-dark">
                                Features
                            </h5>
                            <div class="flex flex-col gap-[14px]">
                                <p class="text-base text-body-color">
                                    Up to 1 User
                                </p>
                                <p class="text-base text-body-color">
                                    All UI components
                                </p>
                                <p class="text-base text-body-color">
                                    Lifetime access
                                </p>
                                <p class="text-base text-body-color">
                                    Free updates
                                </p>
                            </div>
                        </div>
                        <a href="javascript:void(0)"
                            class="inline-block rounded-md bg-primary px-7 py-3 text-center text-base font-medium text-white transition hover:bg-blue-dark">
                            Purchase Now
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="relative z-10 mb-10 overflow-hidden rounded-xl bg-white px-8 py-10 shadow-pricing sm:p-12 lg:px-6 lg:py-10 xl:p-14">
                        <p
                            class="absolute right-[-50px] top-[60px] inline-block -rotate-90 rounded-bl-md rounded-tl-md bg-primary px-5 py-2 text-base font-medium text-white">
                            Recommended
                        </p>
                        <span class="mb-5 block text-xl font-medium text-dark">
                            Basic
                        </span>
                        <h2 class="mb-11 text-4xl font-semibold text-dark xl:text-[42px] xl:leading-[1.21]">
                            <span class="text-xl font-medium">$</span>
                            <span class="-ml-1 -tracking-[2px]">59.00</span>
                            <span class="text-base font-normal text-body-color">
                                Per Month
                            </span>
                        </h2>
                        <div class="mb-[50px]">
                            <h5 class="mb-5 text-lg font-medium text-dark">
                                Features
                            </h5>
                            <div class="flex flex-col gap-[14px]">
                                <p class="text-base text-body-color">
                                    Up to 1 User
                                </p>
                                <p class="text-base text-body-color">
                                    All UI components
                                </p>
                                <p class="text-base text-body-color">
                                    Lifetime access
                                </p>
                                <p class="text-base text-body-color">
                                    Free updates
                                </p>
                            </div>
                        </div>
                        <a href="javascript:void(0)"
                            class="inline-block rounded-md bg-primary px-7 py-3 text-center text-base font-medium text-white transition hover:bg-blue-dark">
                            Purchase Now
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="relative z-10 mb-10 overflow-hidden rounded-xl bg-white px-8 py-10 shadow-pricing sm:p-12 lg:px-6 lg:py-10 xl:p-14">
                        <span class="mb-5 block text-xl font-medium text-dark">
                            Premium
                        </span>
                        <h2 class="mb-11 text-4xl font-semibold text-dark xl:text-[42px] xl:leading-[1.21]">
                            <span class="text-xl font-medium">$</span>
                            <span class="-ml-1 -tracking-[2px]">99.00</span>
                            <span class="text-base font-normal text-body-color">
                                Per Month
                            </span>
                        </h2>
                        <div class="mb-[50px]">
                            <h5 class="mb-5 text-lg font-medium text-dark">
                                Features
                            </h5>
                            <div class="flex flex-col gap-[14px]">
                                <p class="text-base text-body-color">
                                    Up to 1 User
                                </p>
                                <p class="text-base text-body-color">
                                    All UI components
                                </p>
                                <p class="text-base text-body-color">
                                    Lifetime access
                                </p>
                                <p class="text-base text-body-color">
                                    Free updates
                                </p>
                            </div>
                        </div>
                        <a href="javascript:void(0)"
                            class="inline-block rounded-md bg-primary px-7 py-3 text-center text-base font-medium text-white transition hover:bg-blue-dark">
                            Purchase Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Pricing Section End -->

    <!-- ====== Testimonial Section Start -->
    <section id="testimonials" class="overflow-hidden bg-gray-1 py-20 md:py-[120px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            Testimonials
                        </span>
                        <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-dark sm:text-4xl md:text-[40px]">
                            What our Clients Say
                        </h2>
                        <p class="text-base text-body-color">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>

            <div class="-m-5">
                <div class="swiper testimonial-carousel common-carousel p-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                </div>

                                <p class="mb-6 text-base text-body-color">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-01.jpg" alt="author"
                                            class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark">
                                            Sabo Masties
                                        </h3>
                                        <p class="text-xs text-body-secondary">Founder @ Rolex</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                </div>

                                <p class="mb-6 text-base text-body-color">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-02.jpg" alt="author"
                                            class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark">
                                            Musharof Chowdhury
                                        </h3>
                                        <p class="text-xs text-body-secondary">
                                            Founder @ Ayro UI
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                </div>

                                <p class="mb-6 text-base text-body-color">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-03.jpg" alt="author"
                                            class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark">
                                            William Smith
                                        </h3>
                                        <p class="text-xs text-body-secondary">
                                            Founder @ Trorex
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                </div>

                                <p class="mb-6 text-base text-body-color">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-01.jpg" alt="author"
                                            class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark">
                                            Sabo Masties
                                        </h3>
                                        <p class="text-xs text-body-secondary">Founder @ Rolex</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                </div>

                                <p class="mb-6 text-base text-body-color">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-02.jpg" alt="author"
                                            class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark">
                                            Musharof Chowdhury
                                        </h3>
                                        <p class="text-xs text-body-secondary">
                                            Founder @ Ayro UI
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon" />
                                </div>

                                <p class="mb-6 text-base text-body-color">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-03.jpg" alt="author"
                                            class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark">
                                            William Smith
                                        </h3>
                                        <p class="text-xs text-body-secondary">
                                            Founder @ Trorex
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-[60px] flex items-center justify-center gap-1">
                        <div class="swiper-button-prev">
                            <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.25 10.2437H4.57187L10.4156 4.29687C10.725 3.9875 10.725 3.50625 10.4156 3.19687C10.1062 2.8875 9.625 2.8875 9.31562 3.19687L2.2 10.4156C1.89062 10.725 1.89062 11.2063 2.2 11.5156L9.31562 18.7344C9.45312 18.8719 9.65937 18.975 9.86562 18.975C10.0719 18.975 10.2437 18.9062 10.4156 18.7687C10.725 18.4594 10.725 17.9781 10.4156 17.6688L4.60625 11.7906H19.25C19.6625 11.7906 20.0063 11.4469 20.0063 11.0344C20.0063 10.5875 19.6625 10.2437 19.25 10.2437Z" />
                            </svg>
                        </div>

                        <div class="swiper-button-next">
                            <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.8 10.45L12.6844 3.2313C12.375 2.92192 11.8938 2.92192 11.5844 3.2313C11.275 3.54067 11.275 4.02192 11.5844 4.3313L17.3594 10.2094H2.75C2.3375 10.2094 1.99375 10.5532 1.99375 10.9657C1.99375 11.3782 2.3375 11.7563 2.75 11.7563H17.4281L11.5844 17.7032C11.275 18.0126 11.275 18.4938 11.5844 18.8032C11.7219 18.9407 11.9281 19.0094 12.1344 19.0094C12.3406 19.0094 12.5469 18.9407 12.6844 18.7688L19.8 11.55C20.1094 11.2407 20.1094 10.7594 19.8 10.45Z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Testimonial Section End -->

    <!-- ====== FAQ Section Start -->
    <section id="faq" class="relative z-20 overflow-hidden bg-white pb-8 pt-20 lg:pb-[50px] lg:pt-[120px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[520px] text-center">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            FAQ
                        </span>
                        <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-dark sm:text-4xl md:text-[40px]">
                            Any Questions? Look Here
                        </h2>
                        <p class="mx-auto max-w-[485px] text-base text-body-color">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2">
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                            <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3 class="mb-6 text-xl font-semibold text-dark sm:text-2xl lg:text-xl xl:text-2xl">
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                            <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3 class="mb-6 text-xl font-semibold text-dark sm:text-2xl lg:text-xl xl:text-2xl">
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                            <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3 class="mb-6 text-xl font-semibold text-dark sm:text-2xl lg:text-xl xl:text-2xl">
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                            <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3 class="mb-6 text-xl font-semibold text-dark sm:text-2xl lg:text-xl xl:text-2xl">
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <span class="absolute left-4 top-4 -z-[1]">
                <svg width="48" height="134" viewBox="0 0 48 134" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="73.3335" r="1.66667" transform="rotate(180 45.6673 73.3335)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)"
                        fill="#13C296" />
                    <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="132" r="1.66667" transform="rotate(180 31.0013 132)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="117.333" r="1.66667" transform="rotate(180 31.0013 117.333)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="102.667" r="1.66667" transform="rotate(180 31.0013 102.667)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="88.0001" r="1.66667" transform="rotate(180 31.0013 88.0001)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="73.3335" r="1.66667" transform="rotate(180 31.0013 73.3335)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="45.0001" r="1.66667" transform="rotate(180 31.0013 45.0001)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="16.0001" r="1.66667" transform="rotate(180 31.0013 16.0001)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="59.0001" r="1.66667" transform="rotate(180 31.0013 59.0001)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="30.6668" r="1.66667" transform="rotate(180 31.0013 30.6668)"
                        fill="#13C296" />
                    <circle cx="31.0013" cy="1.66683" r="1.66667" transform="rotate(180 31.0013 1.66683)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="132" r="1.66667" transform="rotate(180 16.3333 132)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="117.333" r="1.66667" transform="rotate(180 16.3333 117.333)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="102.667" r="1.66667" transform="rotate(180 16.3333 102.667)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="88.0001" r="1.66667" transform="rotate(180 16.3333 88.0001)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="73.3335" r="1.66667" transform="rotate(180 16.3333 73.3335)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="45.0001" r="1.66667" transform="rotate(180 16.3333 45.0001)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="16.0001" r="1.66667" transform="rotate(180 16.3333 16.0001)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="59.0001" r="1.66667" transform="rotate(180 16.3333 59.0001)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="30.6668" r="1.66667" transform="rotate(180 16.3333 30.6668)"
                        fill="#13C296" />
                    <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(180 16.3333 1.66683)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="73.3335" r="1.66667" transform="rotate(180 1.66732 73.3335)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)"
                        fill="#13C296" />
                    <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)"
                        fill="#13C296" />
                </svg>
            </span>
            <span class="absolute bottom-4 right-4 -z-[1]">
                <svg width="48" height="134" viewBox="0 0 48 134" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="73.3333" r="1.66667" transform="rotate(180 45.6673 73.3333)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)"
                        fill="#3758F9" />
                    <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)"
                        fill="#3758F9" />
                    <circle cx="31.0006" cy="132" r="1.66667" transform="rotate(180 31.0006 132)"
                        fill="#3758F9" />
                    <circle cx="31.0006" cy="117.333" r="1.66667" transform="rotate(180 31.0006 117.333)"
                        fill="#3758F9" />
                    <circle cx="31.0006" cy="102.667" r="1.66667" transform="rotate(180 31.0006 102.667)"
                        fill="#3758F9" />
                    <circle cx="31.0006" cy="88.0001" r="1.66667" transform="rotate(180 31.0006 88.0001)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="73.3333" r="1.66667" transform="rotate(180 31.0008 73.3333)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="45.0001" r="1.66667" transform="rotate(180 31.0008 45.0001)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="16.0001" r="1.66667" transform="rotate(180 31.0008 16.0001)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="59.0001" r="1.66667" transform="rotate(180 31.0008 59.0001)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="30.6668" r="1.66667" transform="rotate(180 31.0008 30.6668)"
                        fill="#3758F9" />
                    <circle cx="31.0008" cy="1.66683" r="1.66667" transform="rotate(180 31.0008 1.66683)"
                        fill="#3758F9" />
                    <circle cx="16.3341" cy="132" r="1.66667" transform="rotate(180 16.3341 132)"
                        fill="#3758F9" />
                    <circle cx="16.3341" cy="117.333" r="1.66667" transform="rotate(180 16.3341 117.333)"
                        fill="#3758F9" />
                    <circle cx="16.3341" cy="102.667" r="1.66667" transform="rotate(180 16.3341 102.667)"
                        fill="#3758F9" />
                    <circle cx="16.3341" cy="88.0001" r="1.66667" transform="rotate(180 16.3341 88.0001)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="73.3333" r="1.66667" transform="rotate(180 16.3338 73.3333)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="45.0001" r="1.66667" transform="rotate(180 16.3338 45.0001)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="16.0001" r="1.66667" transform="rotate(180 16.3338 16.0001)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="59.0001" r="1.66667" transform="rotate(180 16.3338 59.0001)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="30.6668" r="1.66667" transform="rotate(180 16.3338 30.6668)"
                        fill="#3758F9" />
                    <circle cx="16.3338" cy="1.66683" r="1.66667" transform="rotate(180 16.3338 1.66683)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="73.3333" r="1.66667" transform="rotate(180 1.66732 73.3333)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)"
                        fill="#3758F9" />
                    <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)"
                        fill="#3758F9" />
                </svg>
            </span>
        </div>
    </section>
    <!-- ====== FAQ Section End -->
</x-landing-layout>
