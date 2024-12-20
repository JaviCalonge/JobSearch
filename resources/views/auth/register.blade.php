<x-layout>
    <x-slot:heading>
        Register Page
    </x-slot:heading>

    <form method="POST" action="/register">

        @csrf

        <div class="space-y-12 flex items-center justify-center">
            <div class="border-b border-gray-900/10 pb-12 w-full max-w-md">
                <div class="mt-4 space-y-8">

                    <x-form-field>
                        <x-form-label for="first_name">First Name</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="first_name" id="first_name" :value="old('first_name')" required/>
                            <x-form-error name="first_name"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="last_name">Last Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="last_name" id="last_name" :value="old('last_name')" required/>
                            <x-form-error name="last_name"/>
                        </div>
                    </x-form-field>

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

                    <x-form-field>
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password_confirmation" id="password_confirmation" type="password" required/>
                            <x-form-error name="password_confirmation"/>
                        </div>
                    </x-form-field>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-center gap-x-6">
          <x-form-button>Register</x-form-button>
        </div>

    </form>
</x-layout>
