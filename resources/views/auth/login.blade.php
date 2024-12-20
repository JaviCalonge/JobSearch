<x-layout>
    <x-slot:heading>
        Log In Page
    </x-slot:heading>

    <form method="POST" action="/login">

        @csrf

        <div class="space-y-12 flex items-center justify-center">
            <div class="border-b border-gray-900/10 pb-12 w-full max-w-md">
                <div class="mt-4 space-y-8">

                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email" :value="old('email')" required/>
                            <x-form-error name="email"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password" required/>
                            <x-form-error name="password"/>
                        </div>
                    </x-form-field>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-center gap-x-6">
          <x-form-button>Log In</x-form-button>
        </div>

    </form>
</x-layout>
