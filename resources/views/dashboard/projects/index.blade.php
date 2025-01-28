<x-dashboard-layout>
    @php($name = 'Projects')

    <x-slot:title>{{ $name }}</x-slot:title>
    <x-slot:pagename>{{ $name }}</x-slot:pagename>

    <div class="p-[30px]">
        <!-- ====== Projects List Start -->
        <section class="relative z-10 overflow-hidden">
            <div>
                <div class="w-full">
                    <a href="{{ route('dashboard.projects.create') }}"
                       class="mb-5 bg-primary border-primary border rounded-md inline-flex items-center justify-center py-3 px-7 text-center text-base font-medium text-white hover:bg-[#1B44C8] hover:border-[#1B44C8] disabled:bg-gray-3 disabled:border-gray-3 disabled:text-dark-5 active:bg-[#1B44C8] active:border-[#1B44C8]">
                        <span class="pr-[10px]">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                <g clip-path="url(#clip0_906_8052)">
                                    <path
                                        d="M13.1875 9.28125H10.6875V6.8125C10.6875 6.4375 10.375 6.125 9.96875 6.125C9.59375 6.125 9.28125 6.4375 9.28125 6.84375V9.3125H6.8125C6.4375 9.3125 6.125 9.625 6.125 10.0312C6.125 10.4062 6.4375 10.7187 6.84375 10.7187H9.3125V13.1875C9.3125 13.5625 9.625 13.875 10.0312 13.875C10.4062 13.875 10.7187 13.5625 10.7187 13.1562V10.6875H13.1875C13.5625 10.6875 13.875 10.375 13.875 9.96875C13.875 9.59375 13.5625 9.28125 13.1875 9.28125Z"/>
                                    <path
                                        d="M10 0.5625C4.78125 0.5625 0.5625 4.78125 0.5625 10C0.5625 15.2188 4.8125 19.4688 10.0312 19.4688C15.25 19.4688 19.5 15.2188 19.5 10C19.4688 4.78125 15.2188 0.5625 10 0.5625ZM10 18.0625C5.5625 18.0625 1.96875 14.4375 1.96875 10C1.96875 5.5625 5.5625 1.96875 10 1.96875C14.4375 1.96875 18.0625 5.5625 18.0625 10C18.0625 14.4375 14.4375 18.0625 10 18.0625Z"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_906_8052">
                                        <rect width="20" height="20" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        Add Project
                    </a>

                    <div class="justify-between mb-5 sm:flex">
                        <h3 class="text-2xl font-semibold text-dark md:leading-[40px] md:text-[28px]">
                            Projects Added: {{ $user_projects->count() }}/10
                        </h3>
                    </div>

                    <div class="border-stroke w-full overflow-x-auto border bg-white ">
                        <table class="table w-full">
                            <tbody>
                            @foreach ($user_projects as $project)
                                <tr class="hover:bg-gray-1 ">
                                    <td class="min-w-[250px] py-[18px] pl-6">
                                        <div class="flex items-center">
                                            <div
                                                class="mr-[18px] flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-full text-dark bg-gray-2 ">
                                                {{ $project->getFirstMedia('logo')->img()->attributes(['class' => ['w-[150px]', 'h-auto']]) }}
                                            </div>
                                            <p class="text-base font-medium text-dark ">
                                                {{ $project->name }}
                                            </p>
                                        </div>
                                    </td>
                                    <td class="min-w-[130px] py-[18px]">
                                        <p class="text-base text-body-color ">Added
                                            on: {{ date('d M, Y', strtotime($project->created_at)) }}</p>
                                    </td>
                                    <td class="min-w-[220px] py-[18px] flex flex-col gap-1 items-start">
                                            <span
                                                class="inline-block rounded-full bg-green-light-6 py-[3px] px-[10px] text-sm font-medium text-green">
                                                Safe
                                            </span>
                                        <p class="text-base text-body-color ">
                                            Last scanned on: 25 Nov, 2025
                                        </p>
                                    </td>
                                    <td class="py-[18px] pr-6 text-right">
                                        <a href="{{ route('dashboard.projects.show', $project->uuid) }}"
                                           class="bg-primary rounded-md py-3 px-7 text-base font-medium text-white hover:bg-blue-dark">
                                            View Details
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Projects List End -->
    </div>
</x-dashboard-layout>
