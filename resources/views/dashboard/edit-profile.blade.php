<x-dashboard-layout>
    @php($name = 'Edit Profile')

    <x-slot:title>{{ $name }}</x-slot:title>
    <x-slot:pagename>{{ $name }}</x-slot:pagename>

    <div class="p-[30px]">
        <form action="{{ route('dashboard.edit-profile-update') }}" method="POST" class="space-y-6 -mt-6">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', auth()->user()->name) }}" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3"/>
            </div>
            <div>
                <button type="submit"
                        class="flex justify-center py-2 px-12 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update
                </button>
            </div>
        </form>

        <form action="{{ route('dashboard.edit-profile-update') }}" method="POST" class="space-y-6 mt-8">
            <p class="font-semibold text-2xl -mb-1">Change Password</p>
            @csrf
            <div>
                <label for="current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
                <input type="password" name="current_password" id="current_password" required
                       placeholder="Current Password"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3"/>
            </div>
            <div>
                <label for="new_password" class="block text-sm font-medium text-gray-700">New Password</label>
                <input type="password" name="new_password" id="new_password" required
                       placeholder="New Password"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3"/>
            </div>
            <div>
                <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700">Confirm New
                    Password</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" required
                       placeholder="Confirm New Password"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3"/>
            </div>
            <div>
                <button type="submit"
                        class="flex justify-center py-2 px-12 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-dashboard-layout>
