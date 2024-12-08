<x-dashboard-layout>
    @php($name = 'Dashboard')

	<x-slot:title>{{ $name }}</x-slot:title>
	<x-slot:pagename>{{ $name }}</x-slot:pagename>

    <div class="p-[30px]">
        <div class="w-full">
            <div class="flex flex-wrap gap-y-4 mb-8 -mx-4 xl:-mx-3 2xl:-mx-4">
                <div class="w-full px-4 md:w-1/2 lg:w-1/3 xl:px-3 2xl:px-4">
                    <div
                        class="relative flex items-center rounded-[10px] bg-white py-8 px-6 shadow-1 h-full sm:px-10 md:px-6 xl:px-10">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-full bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px] md:mr-4 md:h-[50px] md:max-w-[50px] xl:mr-6 xl:h-[60px] xl:max-w-[60px]">
                            <svg width="30" height="30" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                <path
                                    d="M17.1875 3.3125H15.875V2.625C15.875 2.25 15.5625 1.90625 15.1562 1.90625C14.75 1.90625 14.4375 2.21875 14.4375 2.625V3.3125H5.53125V2.625C5.53125 2.25 5.21875 1.90625 4.8125 1.90625C4.40625 1.90625 4.09375 2.21875 4.09375 2.625V3.3125H2.8125C1.5625 3.3125 0.53125 4.34375 0.53125 5.59375V15.8438C0.53125 17.0938 1.5625 18.125 2.8125 18.125H17.1875C18.4375 18.125 19.4687 17.0938 19.4687 15.8438V5.5625C19.4687 4.3125 18.4375 3.3125 17.1875 3.3125ZM2.8125 4.71875H4.125V5C4.125 5.375 4.4375 5.71875 4.84375 5.71875C5.25 5.71875 5.5625 5.40625 5.5625 5V4.71875H14.5V5C14.5 5.375 14.8125 5.71875 15.2187 5.71875C15.625 5.71875 15.9375 5.40625 15.9375 5V4.71875H17.1875C17.6562 4.71875 18.0625 5.09375 18.0625 5.59375V7.34375H1.96875V5.59375C1.96875 5.09375 2.34375 4.71875 2.8125 4.71875ZM17.1875 16.6875H2.8125C2.34375 16.6875 1.9375 16.3125 1.9375 15.8125V8.75H18.0312V15.8438C18.0625 16.3125 17.6562 16.6875 17.1875 16.6875Z" />
                                <path
                                    d="M12.125 10.4688L9.40625 13.1875L8.53125 12.3125C8.25 12.0313 7.8125 12.0313 7.53125 12.3125C7.25 12.5938 7.25 13.0312 7.53125 13.3125L8.90625 14.6875C9.03125 14.8125 9.21875 14.9063 9.40625 14.9063C9.59375 14.9063 9.78125 14.8438 9.90625 14.6875L13.125 11.4688C13.4062 11.1875 13.4062 10.75 13.125 10.4688C12.8437 10.1875 12.4062 10.1875 12.125 10.4688Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-dark text-2xl xl:leading-[35px] xl:text-[28px]">
                                10
                            </p>
                            <p class="mt-1 text-base text-body-color">
                                Total Projects
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/3 xl:px-3 2xl:px-4">
                    <div
                        class="relative flex items-center rounded-[10px] bg-white py-8 px-6 shadow-1 h-full sm:px-10 md:px-6 xl:px-10">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-full bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px] md:mr-4 md:h-[50px] md:max-w-[50px] xl:mr-6 xl:h-[60px] xl:max-w-[60px]">
                            <svg width="30" height="30" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.16666 3.33268C5.94499 3.33268 3.33332 5.94435 3.33332 9.16602C3.33332 12.3877 5.94499 14.9993 9.16666 14.9993C12.3883 14.9993 15 12.3877 15 9.16602C15 5.94435 12.3883 3.33268 9.16666 3.33268ZM1.66666 9.16602C1.66666 5.02388 5.02452 1.66602 9.16666 1.66602C13.3088 1.66602 16.6667 5.02388 16.6667 9.16602C16.6667 13.3082 13.3088 16.666 9.16666 16.666C5.02452 16.666 1.66666 13.3082 1.66666 9.16602Z"
                                    fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13.2857 13.2851C13.6112 12.9597 14.1388 12.9597 14.4642 13.2851L18.0892 16.9101C18.4147 17.2355 18.4147 17.7632 18.0892 18.0886C17.7638 18.414 17.2362 18.414 16.9107 18.0886L13.2857 14.4636C12.9603 14.1382 12.9603 13.6105 13.2857 13.2851Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-dark text-2xl xl:leading-[35px] xl:text-[28px]">
                                1003
                            </p>
                            <p class="mt-1 text-base text-body-color">
                                Total Packages Scanned
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/3 xl:px-3 2xl:px-4">
                    <div
                        class="relative flex items-center rounded-[10px] bg-white py-8 px-6 shadow-1 h-full sm:px-10 md:px-6 xl:px-10">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-full bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px] md:mr-4 md:h-[50px] md:max-w-[50px] xl:mr-6 xl:h-[60px] xl:max-w-[60px]">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="currentColor" height="30" width="30" version="1.1" id="Layer_1"
                                viewBox="0 0 512 512" xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M505.403,406.394L295.389,58.102c-8.274-13.721-23.367-22.245-39.39-22.245c-16.023,0-31.116,8.524-39.391,22.246    L6.595,406.394c-8.551,14.182-8.804,31.95-0.661,46.37c8.145,14.42,23.491,23.378,40.051,23.378h420.028    c16.56,0,31.907-8.958,40.052-23.379C514.208,438.342,513.955,420.574,505.403,406.394z M477.039,436.372    c-2.242,3.969-6.467,6.436-11.026,6.436H45.985c-4.559,0-8.784-2.466-11.025-6.435c-2.242-3.97-2.172-8.862,0.181-12.765    L245.156,75.316c2.278-3.777,6.433-6.124,10.844-6.124c4.41,0,8.565,2.347,10.843,6.124l210.013,348.292    C479.211,427.512,479.281,432.403,477.039,436.372z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M256.154,173.005c-12.68,0-22.576,6.804-22.576,18.866c0,36.802,4.329,89.686,4.329,126.489    c0.001,9.587,8.352,13.607,18.248,13.607c7.422,0,17.937-4.02,17.937-13.607c0-36.802,4.329-89.686,4.329-126.489    C278.421,179.81,268.216,173.005,256.154,173.005z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path
                                            d="M256.465,353.306c-13.607,0-23.814,10.824-23.814,23.814c0,12.68,10.206,23.814,23.814,23.814    c12.68,0,23.505-11.134,23.505-23.814C279.97,364.13,269.144,353.306,256.465,353.306z" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-dark text-2xl xl:leading-[35px] xl:text-[28px]">
                                1289
                            </p>
                            <p class="mt-1 text-base text-body-color">
                                Total Vulnerabilities Found
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="mb-8 w-full rounded-lg border border-stroke bg-white px-5 pt-[30px] pb-5 sm:px-[30px]">
                        <div class="flex flex-wrap items-start justify-between sm:flex-nowrap">
                            <div class="flex flex-wrap w-full mb-3 sm:mb-0">
                                <div class="mr-8 flex min-w-[190px]">
                                    <span
                                        class="mt-[5px] mr-[10px] flex h-4 w-full max-w-[16px] rounded-full border border-primary">
                                        <span
                                            class="flex m-auto w-full max-w-[10px] h-[10px] rounded-full bg-primary"></span>
                                    </span>
                                    <div class="w-full">
                                        <p class="text-base font-semibold text-primary">
                                            Total Packages Scanned
                                        </p>
                                    </div>
                                </div>
                                <div class="flex min-w-[190px]">
                                    <span
                                        class="mt-[5px] mr-[10px] flex h-4 w-full max-w-[16px] rounded-full border border-danger-500">
                                        <span
                                            class="flex m-auto w-full max-w-[10px] h-[10px] rounded-full bg-danger-500"></span>
                                    </span>
                                    <div class="w-full">
                                        <p class="text-base font-semibold text-danger-500">
                                            Total Vulnerabilities Found
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div id="chartOne" class="-ml-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full 2xl:w-1/2 mb-6 2xl:mb-0">
                    <!-- ====== Chart Section Start -->
                    <section class="bg-gray-2">
                        <div class="px-4">
                            <div
                                class="mx-auto w-full rounded-lg border border-stroke bg-white px-5 pt-[30px] pb-5 sm:px-[30px]">
                                <div class="mb-3 justify-between sm:flex">
                                    <div class="mb-4 sm:mb-0">
                                        <h5 class="text-xl font-semibold text-dark">
                                            Total Vulnerabilities Analysis
                                        </h5>
                                        <p class="text-sm text-body-color">From your past scans</p>
                                    </div>
                                </div>
                                <div class="mb-7">
                                    <div id="chartTwo" class="chart-10 mx-auto flex justify-center"></div>
                                </div>
                                <div class="-mx-8 flex flex-wrap items-center justify-center">
                                    <div class="mb-3 w-full px-8 sm:w-1/2">
                                        <div class="flex w-full items-center">
                                            <span
                                                class="mr-2 block h-3 w-full max-w-[12px] rounded-full bg-danger-600"></span>
                                            <p class="flex w-full justify-between text-sm text-dark">
                                                <span>Critical</span>
                                                <span>65%</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mb-3 w-full px-8 sm:w-1/2">
                                        <div class="flex w-full items-center">
                                            <span
                                                class="mr-2 block h-3 w-full max-w-[12px] rounded-full bg-danger-400"></span>
                                            <p class="flex w-full justify-between text-sm text-dark">
                                                <span>High</span>
                                                <span>34%</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mb-3 w-full px-8 sm:w-1/2">
                                        <div class="flex w-full items-center">
                                            <span
                                                class="mr-2 block h-3 w-full max-w-[12px] rounded-full bg-warning-500"></span>
                                            <p class="flex w-full justify-between text-sm text-dark">
                                                <span>Medium</span>
                                                <span>45%</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mb-3 w-full px-8 sm:w-1/2">
                                        <div class="flex w-full items-center">
                                            <span
                                                class="mr-2 block h-3 w-full max-w-[12px] rounded-full bg-warning-300"></span>
                                            <p class="flex w-full justify-between text-sm text-dark">
                                                <span>Low</span>
                                                <span>12%</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ====== Chart Section End -->
                </div>
                <div class="w-full px-4 2xl:w-1/2">
                    <div class="w-full bg-white border rounded-lg :border-dark-3 border-stroke py-7">
                        <div class="justify-between px-7 sm:flex">
                            <h3 class="mb-8 text-2xl font-medium text-dark md:text-[28px]">
                                Projects List
                            </h3>
                        </div>
                        <div class="w-full overflow-x-auto">
                            <table class="table w-full">
                                <tbody>
                                    <tr>
                                        <td class="min-w-[375px] py-[15px] pl-7 pr-3">
                                            <div class="flex items-center">
                                                <div class="mr-[18px] h-[70px] w-full max-w-[70px] rounded">
                                                    <img src="https://pbs.twimg.com/profile_images/1785867863191932928/EpOqfO6d_400x400.png"
                                                        alt="product" />
                                                </div>
                                                <div>
                                                    <h3 class="text-lg font-semibold text-dark">
                                                        Example Project Name
                                                    </h3>
                                                    <p class="text-base text-body-color">
                                                        JavaScript
                                                    </p>
                                                </div>
                                            </div>
                                        </td>

                                        <td
                                            class="min-w-[150px] py-[18px] pr-7 text-left flex flex-col gap-1 items-end">
                                            <span
                                                class="rounded-full bg-[#D7F8E4] py-1 px-4 text-sm font-medium text-success">
                                                Safe
                                            </span>

                                            <p class="text-xs text-dark">
                                                Last scanned 10 minutes ago
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('body-scripts')
        <!-- ====== ApexCharts JS ========== -->
        <script src="./assets/js/apexcharts.min.js"></script>
        <script>
            // ===== chartOne
            const chartOneOptions = {
                series: [{
                        name: "Total Packages Scanned",
                        data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30, 45],
                    },

                    {
                        name: "Total Vulnerabilities Found",
                        data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39, 51],
                    },
                ],
                legend: {
                    show: false,
                    position: "top",
                    horizontalAlign: "left",
                },
                colors: ["#3056D3", "#ef4444"],
                chart: {
                    height: 450,
                    type: "area",
                    dropShadow: {
                        enabled: true,
                        color: "#623CEA14",
                        top: 10,
                        blur: 4,
                        left: 0,
                        opacity: 0.1,
                    },

                    toolbar: {
                        show: false,
                    },
                },
                responsive: [{
                        breakpoint: 1024,
                        options: {
                            chart: {
                                height: 300,
                            },
                        },
                    },
                    {
                        breakpoint: 1366,
                        options: {
                            chart: {
                                height: 350,
                            },
                        },
                    },
                ],
                stroke: {
                    width: [2, 2],
                    curve: "straight",
                },

                markers: {
                    size: 0,
                },
                labels: {
                    show: false,
                    position: "top",
                },
                grid: {
                    xaxis: {
                        lines: {
                            show: true,
                        },
                    },
                    yaxis: {
                        lines: {
                            show: true,
                        },
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                markers: {
                    size: 4,
                    colors: "#fff",
                    strokeColors: ["#3056D3", "#ef4444"],
                    strokeWidth: 3,
                    strokeOpacity: 0.9,
                    strokeDashArray: 0,
                    fillOpacity: 1,
                    discrete: [],
                    hover: {
                        size: undefined,
                        sizeOffset: 5,
                    },
                },
                xaxis: {
                    type: "category",
                    categories: [
                        "Nov 28",
                        "Nov 29",
                        "Nov 30",
                        "Dec 1",
                        "Dec 2",
                        "Dec 3",
                        "Dec 4",
                        "Dec 5",
                        "Dec 6",
                        "Dec 7",
                        "Dec 8",
                        "Dec 9",
                    ],
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                },
                yaxis: {
                    title: {
                        style: {
                            fontSize: "0px",
                        },
                    },
                    min: 0,
                    max: 100,
                },
            };

            const chartOne = new ApexCharts(
                document.querySelector("#chartOne"),
                chartOneOptions
            );
            chartOne.render();

            // ===== chartTwo
            const chartTwoOptions = {
                series: [65, 34, 45, 12],
                chart: {
                    fontFamily: "Inter, sans-serif",
                    type: "donut",
                    width: 380,
                },
                colors: ["#dc2626", "#f87171", "#eab308", "#fde047"],
                labels: ["Critical", "High", "Medium", "Low"],
                legend: {
                    show: false,
                    position: "bottom",
                },

                plotOptions: {
                    pie: {
                        donut: {
                            size: "65%",
                            background: "transparent",
                        },
                    },
                },

                dataLabels: {
                    enabled: false,
                },
            };

            const chartTwo = new ApexCharts(
                document.querySelector("#chartTwo"),
                chartTwoOptions
            );
            chartTwo.render();
        </script>
    @endpush
</x-dashboard-layout>
