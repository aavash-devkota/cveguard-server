<x-dashboard-layout>
    @php($name = 'Add Project')

    <x-slot:title>{{ $name }}</x-slot:title>
    <x-slot:pagename>{{ $name }}</x-slot:pagename>

    <div class="p-[30px]">
        @if(!$can_create_project)
            <p class="text-center">You have to update your subscription to create more projects!</p>

            <div class="mt-8 flex flex-wrap justify-center">
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="relative z-10 mb-10 overflow-hidden rounded-xl bg-white px-8 py-10 shadow-pricing sm:p-12 lg:px-6 lg:py-10 xl:p-14">
                        <span class="mb-5 block text-xl font-medium text-dark">
                           Personal
                        </span>
                        <h2 class="mb-11 text-4xl font-semibold text-dark xl:text-[42px] xl:leading-[1.21]">
                            <span class="text-xl font-medium">Rs</span>
                            <span class="-ml-1 -tracking-[2px]">5,000</span>
                        </h2>
                        <div class="mb-[50px]">
                            <h5 class="mb-5 text-lg font-medium text-dark">
                                Features
                            </h5>
                            <div class="flex flex-col gap-[14px]">
                                <p class="text-base text-body-color">
                                    Up to 10 Projects
                                </p>
                                <p class="text-base text-body-color">
                                    Help and Support within 1 day
                                </p>
                            </div>
                        </div>
                        @if(auth()->user()->subscription_type === 'personal')
                            <p class="text-center font-semibold mb-6">Your current plan</p>
                        @else
                            <a href="{{ route('esewa.initialize', ['plan' => 'personal']) }}"
                               class="inline-block rounded-md bg-primary px-7 py-3 text-center text-base font-medium text-white transition hover:bg-blue-dark">
                                Purchase Now
                            </a>
                        @endif
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="relative z-10 mb-10 overflow-hidden rounded-xl bg-white px-8 py-10 shadow-pricing sm:p-12 lg:px-6 lg:py-10 xl:p-14">
                        <span class="mb-5 block text-xl font-medium text-dark">
                            Pro
                        </span>
                        <h2 class="mb-11 text-4xl font-semibold text-dark xl:text-[42px] xl:leading-[1.21]">
                            <span class="text-xl font-medium">Rs</span>
                            <span class="-ml-1 -tracking-[2px]">10,000</span>
                        </h2>
                        <div class="mb-[50px]">
                            <h5 class="mb-5 text-lg font-medium text-dark">
                                Features
                            </h5>
                            <div class="flex flex-col gap-[14px]">
                                <p class="text-base text-body-color">
                                    Unlimited Projects
                                </p>
                                <p class="text-base text-body-color">
                                    Help and Support within 1 hour
                                </p>
                            </div>
                        </div>
                        <a href="{{ route('esewa.initialize', ['plan' => 'pro']) }}"
                           class="inline-block rounded-md bg-primary px-7 py-3 text-center text-base font-medium text-white transition hover:bg-blue-dark">
                            Purchase Now
                        </a>
                    </div>
                </div>
            </div>
        @else
            <form method="post" action="{{ route('dashboard.projects.store') }}" class="flex flex-col gap-8"
                  enctype="multipart/form-data">
                @csrf
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <div>
                        <label for="name" class="mb-[10px] block text-base font-medium text-dark">
                            Project name
                        </label>
                        <input type="text" placeholder="Enter your project name" autofocus name="name" id="name"
                               required value="{{ old('name') }}"
                               class="w-full bg-transparent rounded-md border border-stroke py-[10px] px-5 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2 disabled:border-gray-2"/>
                        @error('name')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <div>
                        <label for="logo" class="mb-[10px] block text-base font-medium text-dark">
                            Project logo
                        </label>
                        <input type="file" name="logo" id="logo" accept="image/png, image/gif, image/jpeg"
                               required value="{{ old('file') }}"
                               class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke font-medium text-body-color outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-[#F5F7FD] file:py-3 file:px-5 file:text-body-color file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"/>
                        @error('logo')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <div>
                        <label for="ecosystem" class="mb-[10px] block text-base font-medium text-dark">
                            Ecosystem / Package manager
                        </label>
                        <div class="relative z-20">
                            <select name="ecosystem" id="ecosystem" required
                                    class="relative z-20 w-full appearance-none rounded-lg border border-stroke bg-transparent py-[10px] px-5 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2">
                                <option value="" selected disabled>Select the package used in your project</option>
                                <option value="npm" @if (old('ecosystem') == 'npm') selected @endif>NPM
                                    (JavaScript/TypeScript)
                                </option>
                            </select>
                            <span
                                class="absolute right-4 top-1/2 z-10 mt-[-2px] h-[10px] w-[10px] -translate-y-1/2 rotate-45 border-r-2 border-b-2 border-body-color">
                        </span>
                        </div>
                        @error('ecosystem')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <div>
                        <label for="description" class="mb-[10px] block text-base font-medium text-dark">
                            Project description
                        </label>
                        <textarea rows="5" placeholder="Please enter a short description about your project"
                                  id="description"
                                  name="description" required
                                  class="w-full bg-transparent rounded-md border border-stroke p-5 text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2"> {{ old('description') }}</textarea>
                        @error('description')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
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
                    </button>
                </div>
            </form>
        @endif
    </div>
</x-dashboard-layout>
