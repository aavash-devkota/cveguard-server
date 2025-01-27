@props(['project', 'packages_vulnerable', 'packages_version', 'total_packages_count', 'scans' => null])

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
            @isset($scans)
                <div class="px-5">
                    <button class="-mb-[1px] w-full border-b-2 py-2 text-base font-medium"
                            @click="openTab = 3" :class="openTab === 3 ? activeClasses : inactiveClasses">
                        Logs
                    </button>
                </div>
            @endisset
        </div>
    </div>
    <div x-show="openTab === 1">
        <div class="px-2 pt-5 pb-3 flex flex-col">
            @if (count($packages_vulnerable) == 0)
                <p class="text-center text-gray-500">No vulnerabilities found.</p>
            @endif
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
    @isset($scans)
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
                                <a href="{{ route('dashboard.projects.scans.show', [$project->uuid, $scan->id]) }}"
                                   class="text-sm hover:underline">Found <span
                                        class="font-medium">{{ $scan->vulnerabilities->count() }}</span>
                                    vulnerabilities through client <span
                                        class="font-medium">{{ $scan->project_client->client_id }}</span>
                                </a>
                                <p class="text-xs text-gray-500">{{ $scan->created_at->setTimezone('Asia/Kathmandu')->format('j F Y, h:i A') }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endisset
</div>
