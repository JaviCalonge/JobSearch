<x-layout>
    <x-slot:heading>
        Create a new job
    </x-slot:heading>

    <form method="POST" action="/jobs">

        @csrf

        <div class="space-y-12 flex items-center justify-center">
            <div class="border-b border-gray-900/10 pb-12 w-full max-w-md">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>

                        <x-form-label for="title">Name of the job</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="title" id="title" required/>
                            <x-form-error name="title"/>
                        </div>
                    </x-form-field>

                    <x-form-field>

                        <x-form-label for="salary">Salary</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="Salary per year" required/>
                            <x-form-error name="salary"/>
                        </div>
                    </x-form-field>


                    {{-- <div class="col-span-full">
                        <label for="description" class="block text-sm/6 font-medium text-gray-900">Job Description</label>
                        <div class="mt-2">
                        <textarea required name="description" id="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                        </div>
                    </div> --}}

                    {{-- @if ($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif --}}
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-center gap-x-6">
          <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
          <x-form-button>Save</x-form-button>
        </div>

    </form>
</x-layout>
