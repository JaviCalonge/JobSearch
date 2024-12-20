<x-layout>
    <x-slot:heading>
        Edit job: {{ $job->title }}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">

        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Name of the job</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                            <input
                            value="{{ $job->title }}"
                            required
                            type="text"
                            name="title"
                            id="title"
                            class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6">
                        </div>
                    </div>

                    <div class="text-sm mt-2 text-red-500 italic">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>

                </div>

                {{-- <div class="col-span-full">
                    <label for="description" class="block text-sm/6 font-medium text-gray-900">Job Description</label>
                    <div class="mt-2">
                    <textarea required name="description" id="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                    </div>
                </div> --}}


                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>

                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline outline-1    outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                <input
                                value="{{ $job->salary }}"
                                required
                                type="text"
                                name="salary"
                                id="salary"
                                class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" placeholder="Salary per year">
                            </div>
                        </div>

                        <div class="text-sm mt-2 text-red-500 italic">
                            @error('salary')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">

            <div>
                <button form="delete-form" type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
            </div>

            <div>
                <x-button href="/jobs/{{ $job->id }}">Cancel</x-button>
                <button type="submit" class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Update</button>
            </div>

        </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id}}" id="delete-form">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
