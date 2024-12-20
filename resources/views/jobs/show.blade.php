<x-layout>
    <x-slot:heading>
        Job details
    </x-slot:heading>

        <h2 class="font-bold">{{ $job->title }}:</h2>
        <p>This job pays {{ $job->salary}} per year.</p>

        @can('edit', $job)
            <div class="mt-10">
                <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
            </div>
        @endcan

</x-layout>
