<x-dashboard-layout>
    @php($name = 'Past Scans')

    <x-slot:title>{{ $name }}</x-slot:title>
    <x-slot:pagename>{{ $name }}</x-slot:pagename>

    <div class="p-[30px]">
        <x-scans-history :scans="$scans"/>
    </div>
</x-dashboard-layout>
