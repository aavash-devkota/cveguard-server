@props([
    /** @var \App\Models\Scan */
    'scans',
])

<div {{ $attributes->class(['px-2 py-3 flex flex-col gap-1 ml-4']) }}>
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
                    <a href="{{ route('dashboard.projects.scans.show', [$scan->project->uuid, $scan->id]) }}"
                       class="text-sm hover:underline">
                        <span class="font-semibold">{{ $scan->project->name }}</span>:
                        Found <span class="font-medium">{{ $scan->vulnerabilities->count() }}</span>
                        vulnerabilities through client <span
                            class="font-medium">{{ $scan->project_client->client_id }}</span>
                    </a>
                    <p class="text-xs text-gray-500">{{ $scan->created_at->setTimezone('Asia/Kathmandu')->format('j F Y, h:i A') }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
