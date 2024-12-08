<x-dashboard-layout>
    @php($name = 'Add Project')

    <x-slot:title>{{ $name }}</x-slot:title>
    <x-slot:pagename>{{ $name }}</x-slot:pagename>

    <div class="p-[30px]">
        <form method="post" action="{{ route('dashboard.projects.store') }}" class="flex flex-col gap-8">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <div>
                    <label for="name" class="mb-[10px] block text-base font-medium text-dark">
                        Project name
                    </label>
                    <input type="text" placeholder="Enter your project name" autofocus name="name" id="name"
                        required
                        class="w-full bg-transparent rounded-md border border-stroke py-[10px] px-5 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2 disabled:border-gray-2" />
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3">
                <div>
                    <label for="logo" class="mb-[10px] block text-base font-medium text-dark">
                        Project logo
                    </label>
                    <input type="file" name="logo" id="logo" accept="image/png, image/gif, image/jpeg"
                        required
                        class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke font-medium text-body-color outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-[#F5F7FD] file:py-3 file:px-5 file:text-body-color file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]" />
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3">
                <div>
                    <label for="package-manager" class="mb-[10px] block text-base font-medium text-dark">
                        Package manager
                    </label>
                    <div class="relative z-20">
                        <select name="package-manager" id="package-manager" required
                            class="relative z-20 w-full appearance-none rounded-lg border border-stroke bg-transparent py-[10px] px-5 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2">
                            <option value="" selected disabled>Select the package used in your project</option>
                            <option value="npm">NPM (JavaScript/TypeScript)</option>
                        </select>
                        <span
                            class="absolute right-4 top-1/2 z-10 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2 border-body-color">
                        </span>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3">
                <div>
                    <label for="desc" class="mb-[10px] block text-base font-medium text-dark">
                        Project description
                    </label>
                    <textarea rows="5" placeholder="Please enter a short description about your project" id="desc" name="desc"
                        required
                        class="w-full bg-transparent rounded-md border border-stroke p-5 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2"></textarea>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3">
                <button
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
                </button>
            </div>
        </form>
    </div>
</x-dashboard-layout>
