<x-dashboard-layout>
    @php($name = 'Project Details') {{-- TODO: Add project name here --}}

    <x-slot:title>{{ $name }}</x-slot:title>
    <x-slot:pagename>{{ $name }}</x-slot:pagename>

    <div class="p-[30px]">
    </div>
</x-dashboard-layout>
