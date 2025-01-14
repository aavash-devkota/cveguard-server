<x-dashboard-layout>
    @php($name = $project->name)

    <x-slot:title>{{ $name }}</x-slot:title>
    <x-slot:pagename>{{ $name }}</x-slot:pagename>

    <div class="p-[30px] flex flex-col gap-8">
        @if (!$is_atleast_one_client_connected)
            <p class="text-4xl font-medium">One more step...</p>
            <div class="flex flex-col gap-1">
                <p>Complete the project setup through the client application.</p>
                <p>If you do not have the client installed, <a href="#" class="underline">download here</a>.</p>
            </div>
            <div>
                <!-- ====== Clipboard Start -->
                <section class="bg-white py-10" x-data="clipboardComponent()">
                    <div class="container">
                        <div class="mx-auto w-full max-w-[580px] flex flex-col gap-4">
                            <p>First cd into your project directory and enter the following command in your terminal:
                            </p>
                            <div class="relative">
                                <input type="text" x-model="inputValue" x-ref="inputField" readonly
                                       class="h-12 w-full rounded-lg border border-stroke bg-transparent py-3 pl-5 pr-5 text-dark outline-none duration-200 selection:bg-transparent focus:border-primary"/>
                                <button @click="copyToClipboard"
                                        class="absolute right-0 top-0 flex h-12 w-8 items-center text-body-color duration-200 hover:text-primary">
                                    <span x-show="copySuccess">
                                        <svg width="20" height="20" viewBox="0 0 21 21" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.0394 6.0293L8.03936 15.0293L3.68359 10.6736"
                                                  stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    <span x-show="!copySuccess">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.6875 4.125L14.4062 0.875C14.1875 0.65625 13.875 0.53125 13.5625 0.53125H7.875C6.96875 0.53125 6.21875 1.28125 6.21875 2.1875V13.5937C6.21875 14.5 6.96875 15.25 7.875 15.25H16.375C17.2812 15.25 18.0312 14.5 18.0312 13.5937V4.96875C18.0312 4.65625 17.9062 4.34375 17.6875 4.125ZM14.4687 2.9375L15.6562 4.125H14.4687V2.9375ZM16.375 13.8437H7.875C7.75 13.8437 7.625 13.7187 7.625 13.5937V2.1875C7.625 2.0625 7.75 1.9375 7.875 1.9375H13.0625V4.8125C13.0625 5.1875 13.375 5.53125 13.7812 5.53125H16.625V13.625C16.625 13.75 16.5 13.8437 16.375 13.8437Z"
                                                fill="currentColor"/>
                                            <path
                                                d="M13.7812 7.03125H9.65625C9.28125 7.03125 8.9375 7.34375 8.9375 7.75C8.9375 8.15625 9.25 8.46875 9.65625 8.46875H13.7812C14.1562 8.46875 14.5 8.15625 14.5 7.75C14.5 7.34375 14.1562 7.03125 13.7812 7.03125Z"
                                                fill="currentColor"/>
                                            <path
                                                d="M13.7812 9.65625H9.65625C9.28125 9.65625 8.9375 9.96875 8.9375 10.375C8.9375 10.75 9.25 11.0937 9.65625 11.0937H13.7812C14.1562 11.0937 14.5 10.7813 14.5 10.375C14.4687 9.96875 14.1562 9.65625 13.7812 9.65625Z"
                                                fill="currentColor"/>
                                            <path
                                                d="M13.0625 16.25C12.6875 16.25 12.3437 16.5625 12.3437 16.9687V17.8125C12.3437 17.9375 12.2187 18.0625 12.0937 18.0625H3.625C3.5 18.0625 3.375 17.9375 3.375 17.8125V6.375C3.375 6.25 3.5 6.125 3.625 6.125H4.6875C5.0625 6.125 5.40625 5.8125 5.40625 5.40625C5.40625 5 5.09375 4.6875 4.6875 4.6875H3.625C2.71875 4.6875 1.96875 5.4375 1.96875 6.34375V17.8125C1.96875 18.7188 2.71875 19.4687 3.625 19.4687H12.125C13.0312 19.4687 13.7812 18.7188 13.7812 17.8125V16.9687C13.7812 16.5625 13.4687 16.25 13.0625 16.25Z"
                                                fill="currentColor"/>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>

                <script>
                    function clipboardComponent() {
                        return {
                            inputValue: "cveguard-client add {{ $project->uuid }} .",
                            copySuccess: false,
                            copyToClipboard() {
                                const inputField = this.$refs.inputField;
                                inputField.select();
                                document.execCommand("copy");
                                this.copySuccess = true;
                                setTimeout(() => {
                                    this.copySuccess = false;
                                }, 2000);
                            },
                        };
                    }

                    document.addEventListener("alpine:init", () => {
                        Alpine.data("clipboardComponent", clipboardComponent);
                    });
                </script>
                <!-- ====== Clipboard End -->
            </div>
        @else
            <div class="flex gap-8">
                <!-- ====== Packages Severity Section Start -->
                @if ($has_atleast_one_scan)
                    <section class="bg-white max-w-fit p-6 rounded-lg">
                        <div id="chartOne" class="chart-10 mx-auto flex justify-center"></div>
                        <p class="text-center mt-2">Packages Severity Chart</p>
                    </section>
                @endif
                <!-- ====== Packages Severity Section End -->

                <!-- ====== Project Details Section Start -->
                <section class="bg-white flex-grow rounded-lg py-6 px-10 flex flex-col gap-10">
                    @if ($has_atleast_one_scan)
                        <div class="w-full flex justify-between items-center">
                            @if ($total_affected_count == 0)
                                <p class="text-green-600 font-semibold flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor" viewBox="0 0 512 512">
                                        <path
                                            d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                                    </svg>
                                    No packages are flagged as vulnerable.
                                </p>
                            @else
                                <p class="text-red-600 font-semibold flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor" viewBox="0 0 512 512">
                                        <path
                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24l0 112c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-112c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/>
                                    </svg>
                                    Known security vulnerabilities are detected in the project!
                                </p>
                            @endif
                        </div>
                    @endif

                    <div class="flex gap-14 items-center flex-wrap justify-between">
                        {{ $project->getFirstMedia('logo')->img()->attributes(['class' => ['w-[150px]', 'h-auto']]) }}

                        <div class="flex gap-6 justify-between flex-grow">
                            <div class="flex flex-col gap-1">
                                <p class="text-gray-700 font-semibold text-xl">Project name</p>
                                <p>{{ $project->name }}</p>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-gray-700 font-semibold text-xl">Ecosystem</p>
                                <p>{{ $project->ecosystem }}</p>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-gray-700 font-semibold text-xl">Added on</p>
                                <p>{{ $project->created_at->format('j F, Y') }}</p>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-gray-700 font-semibold text-xl">Last scanned on</p>
                                @if ($has_atleast_one_scan)
                                    <p>{{ $scans->last()->created_at->setTimezone('Asia/Kathmandu')->format('Y-m-d h:i A') }}
                                        ({{ $project->created_at->diffForHumans() }})</p>
                                @else
                                    <p>Never</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ====== Project Details Section End -->
            </div>

            @if ($has_atleast_one_scan)
                <div x-cloak x-data="{
                    openTab: 1,
                    activeClasses: 'text-primary border-primary',
                    inactiveClasses: 'text-dark border-stroke md:border-transparent hover:border-primary hover:text-primary',
                }" class="rounded-[10px] bg-white p-6 shadow-1">
                    <div class="border-b border-stroke">
                        <div class="flex flex-col -mx-5 md:flex-row">
                            <div class="px-5">
                                <button class="-mb-[1px] w-full border-b-2 py-2 text-base font-medium"
                                        @click="openTab = 1" :class="openTab === 1 ? activeClasses : inactiveClasses">
                                    Vulnerabilities
                                </button>
                            </div>
                            <div class="px-5">
                                <button class="-mb-[1px] w-full border-b-2 py-2 text-base font-medium"
                                        @click="openTab = 2" :class="openTab === 2 ? activeClasses : inactiveClasses">
                                    All Packages ({{ $total_packages_count }})
                                </button>
                            </div>
                            <div class="px-5">
                                <button class="-mb-[1px] w-full border-b-2 py-2 text-base font-medium"
                                        @click="openTab = 3" :class="openTab === 3 ? activeClasses : inactiveClasses">
                                    Logs
                                </button>
                            </div>
                        </div>
                    </div>
                    <div x-show="openTab === 1">
                        <div class="px-2 pt-5 pb-3 flex flex-col">
                            @foreach($packages_vulnerable as $package_vulnerabilities)
                                @php($package_name = $package_vulnerabilities[0]['package']['name'])
                                <details>
                                    <summary
                                        class="cursor-pointer pb-1">{{ $package_name }} <span
                                            class="text-gray-500">{{ $packages_version[$package_name] }}</span>
                                        <span class="text-gray-400">({{ count($package_vulnerabilities) }})</span>
                                    </summary>
                                    <div class="my-3">
                                        <table class="table-auto border-separate">
                                            <tr>
                                                <th class="border px-2 py-1 font-semibold">CVE ID</th>
                                                <th class="border px-2 py-1 font-semibold">GHSA ID</th>
                                                <th class="border px-2 py-1 font-semibold">Introduced Version</th>
                                                <th class="border px-2 py-1 font-semibold">Fixed Version</th>
                                                <th class="border px-2 py-1 font-semibold">Severity</th>
                                                <th class="border px-2 py-1 font-semibold">Action</th>
                                            </tr>
                                            @foreach($package_vulnerabilities as $package_vulnerability)
                                                <tr>
                                                    <td class="border px-2">{{ $package_vulnerability['cve_id'] }}</td>
                                                    <td class="border px-2">{{ $package_vulnerability['ghsa_id'] }}</td>
                                                    <td class="border px-2">{{ $package_vulnerability['introduced_version'] }}</td>
                                                    <td class="border px-2">{{ $package_vulnerability['fixed_version'] }}</td>
                                                    <td class="border px-2">
                                                        @switch($package_vulnerability['severity'])
                                                            @case(\App\Enums\Severity::LOW->value)
                                                            @case(\App\Enums\Severity::MODERATE->value)
                                                                <span
                                                                    class="bg-yellow-dark/10 text-yellow-dark m-2 inline-block rounded-full border border-transparent px-2.5 text-xs font-medium"
                                                                >
                                                                    {{ Str::title(\App\Enums\Severity::from($package_vulnerability['severity'])->name) }}
                                                                </span>
                                                                @break

                                                            @case(\App\Enums\Severity::HIGH->value)
                                                            @case(\App\Enums\Severity::CRITICAL->value)
                                                                <span
                                                                    class="bg-red-dark/10 text-red-dark m-2 inline-block rounded-full border border-transparent px-2.5 text-xs font-medium"
                                                                >
                                                                    {{ Str::title(\App\Enums\Severity::from($package_vulnerability['severity'])->name) }}
                                                                </span>
                                                                @break
                                                        @endswitch
                                                    </td>
                                                    <td class="border px-4">
                                                        <a target="_blank" rel="noopener noreferrer"
                                                           href="@if($package_vulnerability['cve_id'] != '') https://nvd.nist.gov/vuln/detail/{{ $package_vulnerability['cve_id'] }} @else https://github.com/advisories/{{ $package_vulnerability['ghsa_id'] }} @endif"
                                                           class="hover:underline">
                                                            View Details
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </details>
                            @endforeach
                        </div>
                    </div>
                    <div x-show="openTab === 2">
                        <div class="px-2 pt-5 pb-3 flex flex-col gap-1 ml-4">
                            <ul class="list-disc">
                                @foreach($packages_version as $package_name => $package_version)
                                    <li>
                                        <a target="_blank" rel="noopener noreferrer" class="hover:underline"
                                           href="https://www.npmjs.com/package/{{ $package_name }}">
                                            {{ $package_name }}
                                            <span class="text-gray-500">{{ $package_version }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div x-show="openTab === 3">
                        <div class="px-2 py-3 flex flex-col gap-1 ml-4">
                            <div class="relative px-4">
                                <div
                                    class="absolute h-full border border-dashed border-opacity-20 border-secondary"></div>

                                @foreach($scans as $scan)
                                    <div class="flex items-center w-full my-6 -ml-1.5">
                                        <div class="w-1/12 z-10">
                                            <div
                                                class="w-3.5 h-3.5 @if($scan->vulnerabilities->count() == 0) bg-[#22ad5c] @else bg-[#f13426] @endif rounded-full"></div>
                                        </div>
                                        <div class="w-11/12">
                                            <p class="text-sm">Found <span
                                                    class="font-medium">{{ $scan->vulnerabilities->count() }}</span>
                                                vulnerabilities through client <span
                                                    class="font-medium">{{ $scan->project_client->client_id }}</span>
                                            </p>
                                            <p class="text-xs text-gray-500">{{ $scan->created_at->setTimezone('Asia/Kathmandu')->format('j F Y, h:i A') }}</p>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            @else
                <p class="text-4xl font-medium text-center mt-6">Project setup is complete!</p>
                <div>
                    <!-- ====== Clipboard Start -->
                    <section x-data="clipboardComponent()">
                        <div class="container">
                            <div class="mx-auto w-full max-w-max flex flex-col gap-4">
                                <p>Run your first project scan by entering the following command in your terminal:</p>
                                <div class="relative">
                                    <input type="text" x-model="inputValue" x-ref="inputField" readonly
                                           class="h-12 w-full rounded-lg border border-stroke bg-transparent py-3 pl-5 pr-5 text-dark outline-none duration-200 selection:bg-transparent focus:border-primary"/>
                                    <button @click="copyToClipboard"
                                            class="absolute right-0 top-0 flex h-12 w-8 items-center text-body-color duration-200 hover:text-primary">
                                        <span x-show="copySuccess">
                                            <svg width="20" height="20" viewBox="0 0 21 21" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.0394 6.0293L8.03936 15.0293L3.68359 10.6736"
                                                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span x-show="!copySuccess">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.6875 4.125L14.4062 0.875C14.1875 0.65625 13.875 0.53125 13.5625 0.53125H7.875C6.96875 0.53125 6.21875 1.28125 6.21875 2.1875V13.5937C6.21875 14.5 6.96875 15.25 7.875 15.25H16.375C17.2812 15.25 18.0312 14.5 18.0312 13.5937V4.96875C18.0312 4.65625 17.9062 4.34375 17.6875 4.125ZM14.4687 2.9375L15.6562 4.125H14.4687V2.9375ZM16.375 13.8437H7.875C7.75 13.8437 7.625 13.7187 7.625 13.5937V2.1875C7.625 2.0625 7.75 1.9375 7.875 1.9375H13.0625V4.8125C13.0625 5.1875 13.375 5.53125 13.7812 5.53125H16.625V13.625C16.625 13.75 16.5 13.8437 16.375 13.8437Z"
                                                    fill="currentColor"/>
                                                <path
                                                    d="M13.7812 7.03125H9.65625C9.28125 7.03125 8.9375 7.34375 8.9375 7.75C8.9375 8.15625 9.25 8.46875 9.65625 8.46875H13.7812C14.1562 8.46875 14.5 8.15625 14.5 7.75C14.5 7.34375 14.1562 7.03125 13.7812 7.03125Z"
                                                    fill="currentColor"/>
                                                <path
                                                    d="M13.7812 9.65625H9.65625C9.28125 9.65625 8.9375 9.96875 8.9375 10.375C8.9375 10.75 9.25 11.0937 9.65625 11.0937H13.7812C14.1562 11.0937 14.5 10.7813 14.5 10.375C14.4687 9.96875 14.1562 9.65625 13.7812 9.65625Z"
                                                    fill="currentColor"/>
                                                <path
                                                    d="M13.0625 16.25C12.6875 16.25 12.3437 16.5625 12.3437 16.9687V17.8125C12.3437 17.9375 12.2187 18.0625 12.0937 18.0625H3.625C3.5 18.0625 3.375 17.9375 3.375 17.8125V6.375C3.375 6.25 3.5 6.125 3.625 6.125H4.6875C5.0625 6.125 5.40625 5.8125 5.40625 5.40625C5.40625 5 5.09375 4.6875 4.6875 4.6875H3.625C2.71875 4.6875 1.96875 5.4375 1.96875 6.34375V17.8125C1.96875 18.7188 2.71875 19.4687 3.625 19.4687H12.125C13.0312 19.4687 13.7812 18.7188 13.7812 17.8125V16.9687C13.7812 16.5625 13.4687 16.25 13.0625 16.25Z"
                                                    fill="currentColor"/>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>

                    <script>
                        function clipboardComponent() {
                            return {
                                inputValue: "cveguard-client scan {{ $project->uuid }}",
                                copySuccess: false,
                                copyToClipboard() {
                                    const inputField = this.$refs.inputField;
                                    inputField.select();
                                    document.execCommand("copy");
                                    this.copySuccess = true;
                                    setTimeout(() => {
                                        this.copySuccess = false;
                                    }, 2000);
                                },
                            };
                        }

                        document.addEventListener("alpine:init", () => {
                            Alpine.data("clipboardComponent", clipboardComponent);
                        });
                    </script>
                    <!-- ====== Clipboard End -->
                </div>
            @endif

            @push('body-scripts')
                <script src="{{ asset('assets/js/apexcharts.min.js') }}"></script>
                <script>
                    // ===== chartOne
                    const chartOneOptions = {
                        series: [{{ $packages_severity_count[4] }}, {{ $packages_severity_count[3] }}, {{ $packages_severity_count[2] }}, {{ $packages_severity_count[1] }}],
                        chart: {
                            fontFamily: "Inter, sans-serif",
                            type: "donut",
                            width: 270,
                        },
                        colors: ["#dc2626", "#f87171", "#eab308", "#fde047"],
                        labels: ["Critical", "High", "Moderate", "Low"],
                        legend: {
                            show: false,
                            position: "bottom",
                        },

                        plotOptions: {
                            pie: {
                                donut: {
                                    size: "75%",
                                    background: "transparent",
                                    labels: {
                                        show: true,
                                        total: {
                                            showAlways: true,
                                            show: true,
                                            label: '{{ $total_affected_count }}',
                                            fontSize: 42,
                                            fontWeight: 'semibold',
                                            color: '#dc2626',
                                            formatter: () => '/ {{ $total_packages_count }}',
                                        }
                                    }
                                },
                            },
                        },

                        dataLabels: {
                            enabled: false,
                        },
                    };

                    const chartOne = new ApexCharts(
                        document.querySelector("#chartOne"),
                        chartOneOptions
                    );
                    chartOne.render();
                </script>
            @endpush
        @endif
    </div>
</x-dashboard-layout>
