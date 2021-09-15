<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Surname -->
            <div>
                <x-label for="surname" :value="__('Surname')" />

                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus />
            </div>

            <!-- VAT / OIB -->
            <div>
                <x-label for="vat" :value="__('VAT')" />

                <x-input id="vat" class="block mt-1 w-full" type="text" name="vat" :value="old('vat')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Telephone -->
            <div class="mt-4">
                <x-label for="telephone" :value="__('Telephone')" />

                <x-input id="telephone" class="block mt-1 w-full" type="tel" name="telephone" :value="old('telephone')" required autofocus />
            </div>

            <!-- Address -->
            <div>
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
            </div>

            <!-- Postal code -->
            <div>
                <x-label for="postal_code" :value="__('Postal code')" />

                <x-input id="postal_code" class="block mt-1 w-full" type="text" name="postal_code" :value="old('postal_code')" required autofocus />
            </div>

            <!-- Town -->
            <div>
                <x-label for="town" :value="__('Town')" />

                <x-input id="town" class="block mt-1 w-full" type="text" name="town" :value="old('town')" required autofocus />
            </div>

            <!-- Country -->
            <div>
                <x-label for="country" :value="__('Country')" />

                <x-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
