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
                                        d="M13.1875 9.28125H10.6875V6.8125C10.6875 6.4375 10.375 6.125 9.96875 6.125C9.59375 6.125 9.28125 6.4375 9.28125 6.84375V9.3125H6.8125C6.4375 9.3125 6.125 9.625 6.125 10.0312C6.125 10.4062 6.4375 10.7187 6.84375 10.7187H9.3125V13.1875C9.3125 13.5625 9.625 13.875 10.0312 13.875C10.4062 13.875 10.7187 13.5625 10.7187 13.1562V10.6875H13.1875C13.5625 10.6875 13.875 10.375 13.875 9.96875C13.875 9.59375 13.5625 9.28125 13.1875 9.28125Z" />
                                    <path
                                        d="M10 0.5625C4.78125 0.5625 0.5625 4.78125 0.5625 10C0.5625 15.2188 4.8125 19.4688 10.0312 19.4688C15.25 19.4688 19.5 15.2188 19.5 10C19.4688 4.78125 15.2188 0.5625 10 0.5625ZM10 18.0625C5.5625 18.0625 1.96875 14.4375 1.96875 10C1.96875 5.5625 5.5625 1.96875 10 1.96875C14.4375 1.96875 18.0625 5.5625 18.0625 10C18.0625 14.4375 14.4375 18.0625 10 18.0625Z" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_906_8052">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        Add Project
                    </a>

                    <div class="justify-between mb-5 sm:flex">
                        <h3 class="text-2xl font-semibold text-dark md:leading-[40px] md:text-[28px]">
                            Projects Added: 4/10
                        </h3>
                        <div>
                            <div class="flex items-center sm:justify-end">
                                <label for="sorting" class="mr-4 text-base font-medium text-dark">
                                    Filter by:
                                </label>
                                <div class="relative z-20 bg-white">
                                    <select name="sorting" id="sorting"
                                        class="relative z-20 inline-block appearance-none text-base font-medium text-dark rounded-md border border-stroke bg-transparent py-2 pl-5 pr-12 outline-none">
                                        <option value="">Last Added First</option>
                                        <option value="">Severity (High to Low)</option>
                                        <option value="">Severity (Low to High)</option>
                                    </select>
                                    <span class="absolute right-5 top-1/2 z-10 -translate-y-1/2 text-body-color">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="fill-current stroke-current">
                                            <path
                                                d="M2.41428 5.03569L2.41426 5.03571L2.41708 5.03846L7.76708 10.2635L8.00109 10.492L8.23401 10.2623L13.584 4.98735L13.584 4.98735L13.5857 4.98569C13.6805 4.89086 13.8195 4.89087 13.9143 4.98569C14.0088 5.08024 14.0091 5.21864 13.9151 5.31345C13.9148 5.31373 13.9146 5.31401 13.9143 5.31429L8.16635 10.9622L8.16634 10.9622L8.16428 10.9643C8.06797 11.0606 8.02311 11.0667 7.99998 11.0667C7.94106 11.0667 7.89001 11.0522 7.82023 10.9991L2.08485 5.36345C1.99086 5.26865 1.99113 5.13024 2.08568 5.03569C2.18051 4.94086 2.31945 4.94086 2.41428 5.03569Z"
                                                stroke-width="0.666667" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-stroke w-full overflow-x-auto border bg-white ">
                        <table class="table w-full">
                            <tbody>
                                <tr class="hover:bg-gray-1 ">
                                    <td class="min-w-[250px] py-[18px] pl-6">
                                        <div class="flex items-center">
                                            <div
                                                class="mr-[18px] flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-full text-dark bg-gray-2 ">
                                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                    <path
                                                        d="M6.4625 9.65938H13.0625C13.475 9.65938 13.8531 9.31562 13.8531 8.86875C13.8531 8.42187 13.5094 8.07812 13.0625 8.07812H6.4625C6.05 8.07812 5.67188 8.42187 5.67188 8.86875C5.67188 9.31562 6.01562 9.65938 6.4625 9.65938Z" />
                                                    <path
                                                        d="M6.4625 13.3032H13.0625C13.475 13.3032 13.8531 12.9594 13.8531 12.5126C13.8531 12.0657 13.5094 11.7219 13.0625 11.7219H6.4625C6.05 11.7219 5.67188 12.0657 5.67188 12.5126C5.67188 12.9594 6.01562 13.3032 6.4625 13.3032Z" />
                                                    <path
                                                        d="M15.5375 15.4H6.4625C6.05 15.4 5.67188 15.7438 5.67188 16.1906C5.67188 16.6375 6.01562 16.9813 6.4625 16.9813H15.5719C15.9844 16.9813 16.3625 16.6375 16.3625 16.1906C16.3625 15.7438 15.9844 15.4 15.5375 15.4Z" />
                                                    <path
                                                        d="M19.2844 3.81565H11.3438L10.6219 2.44065C10.2438 1.75315 9.55627 1.30627 8.76565 1.30627H2.71565C1.5469 1.30627 0.618774 2.2344 0.618774 3.40315V18.5969C0.618774 19.7657 1.5469 20.6938 2.71565 20.6938H19.3188C20.4875 20.6938 21.4156 19.7657 21.4156 18.5969V5.91253C21.4156 4.74377 20.4531 3.81565 19.2844 3.81565ZM19.8688 18.5969C19.8688 18.9063 19.6281 19.1469 19.3188 19.1469H2.71565C2.40627 19.1469 2.16565 18.9063 2.16565 18.5969V3.40315C2.16565 3.09377 2.40627 2.85315 2.71565 2.85315H8.76565C8.9719 2.85315 9.14377 2.95627 9.2469 3.16252L10.2094 4.95002C10.3469 5.19065 10.6219 5.36252 10.8969 5.36252H19.3188C19.6281 5.36252 19.8688 5.60315 19.8688 5.91253V18.5969Z" />
                                                </svg>
                                            </div>
                                            <p class="text-base font-medium text-dark ">
                                                Test Project 1
                                            </p>
                                        </div>
                                    </td>
                                    <td class="min-w-[130px] py-[18px]">
                                        <p class="text-base text-body-color ">Added on: 25 Nov, 2025</p>
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
                                        <a href="{{ route('dashboard.projects.show', 1) }}"
                                            class="bg-primary rounded-md py-3 px-7 text-base font-medium text-white hover:bg-blue-dark">
                                            View Details
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Projects List End -->
    </div>
</x-dashboard-layout>
