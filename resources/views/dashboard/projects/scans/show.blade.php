<x-dashboard-layout>
    @php($name = $project->name . ' Scan #' . $scan->id . ' Report')

    <x-slot:title>{{ $name }}</x-slot:title>
    <x-slot:pagename>{{ $name }}</x-slot:pagename>

    <div class="p-[30px]">
        <a href="{{ route('dashboard.projects.show', ['project' => $project]) }}" class="hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 inline-block mr-2">
                <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
            </svg>
            Back to {{ $project->name }}
        </a>

        <div class="rounded-lg bg-white p-6 my-8">
            <div class="border-b border-gray-200 pb-4 mb-4">
                <h2 class="text-xl font-semibold text-gray-800">Scan Details</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-x-16 gap-y-4">
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Project Name:</span>
                    <span class="font-medium text-gray-900">{{ $project->name }}</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Scan ID:</span>
                    <span class="font-medium text-gray-900">{{ $scan->id }}</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Total Packages:</span>
                    <span class="font-medium text-gray-900">{{ $total_packages_count }}</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Total Vulnerabilities:</span>
                    <span class="font-medium text-gray-900">{{ $total_affected_count }}</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Scanned On:</span>
                    <span class="font-medium text-gray-900">{{ $scan->created_at  }}</span>
                </div>
            </div>
        </div>

        <x-project-scan-details :packages_vulnerable="$packages_vulnerable"
                                :packages_version="$packages_version"
                                :total_packages_count="$total_packages_count"
                                :packages_severity_count="$packages_severity_count"
                                :total_affected_count="$total_affected_count"
                                :project="$project"
        />
    </div>
</x-dashboard-layout>
