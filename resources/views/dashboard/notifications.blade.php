<x-dashboard-layout>
    @php($name = 'Notifications')

    <x-slot:title>Notifications</x-slot:title>
    <x-slot:pagename>Notifications</x-slot:pagename>

    <div class="p-[30px]">
        @foreach($notifications as $notification)
            <div class="flex justify-between items-center border-b border-gray-200 py-4">
                <a href="{{ route('dashboard.notifications.view', ['notification' => $notification]) }}" class="group">
                    <h2 class="text-lg font-semibold group-hover:underline">{{ $notification->title }}</h2>
                    <p class="text-gray-500">{{ $notification->body }}</p>
                </a>
                <div>
                    <a href="{{ route('dashboard.notifications.view', ['notification' => $notification]) }}"
                       class="text-blue-500">View Details</a>
                </div>
            </div>
        @endforeach
    </div>
</x-dashboard-layout>
