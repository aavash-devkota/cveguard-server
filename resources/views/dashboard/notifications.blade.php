<x-dashboard-layout>
    @php($name = 'Notifications')

    <x-slot:title>{{ $name }}</x-slot:title>
    <x-slot:pagename>{{ $name }}</x-slot:pagename>

    <div class="p-[30px]">
        @foreach($notifications as $notification)
            <div class="flex justify-between items-center border-b border-gray-200 py-4">
                <a href="{{ route('dashboard.notifications.view', ['notification' => $notification]) }}" class="group">
                    <h2 class="text-lg @if(!$notification->is_read) font-semibold @endif group-hover:underline">{{ $notification->title }}</h2>
                    <p class="text-gray-500">{{ $notification->body }}</p>
                    <p class="text-xs text-gray-500 mt-2">{{ $notification->created_at }}</p>
                </a>
                <div>
                    <a href="{{ route('dashboard.notifications.view', ['notification' => $notification]) }}"
                       class="text-blue-500">View Details</a>
                </div>
            </div>
        @endforeach
    </div>
</x-dashboard-layout>
