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
                <x-label for="name" :value="__('Ime')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Unesite ime" required autofocus />
            </div>

            <!-- Surname -->
            <div>
                <x-label for="surname" :value="__('Prezime')" />

                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" placeholder="Unesite prezime" required autofocus />
            </div>

            <!-- VAT / OIB -->
            <div>
                <x-label for="vat" :value="__('OIB')" />

                <x-input id="vat" class="block mt-1 w-full" type="text" name="vat" :value="old('vat')" placeholder="Unesite OIB" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('E-pošta')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Unesite e-poštu" required />
            </div>

            <!-- Telephone -->
            <div class="mt-4">
                <x-label for="telephone" :value="__('Broj telefona')" />

                <x-input id="telephone" class="block mt-1 w-full" type="tel" name="telephone" :value="old('telephone')" placeholder="Unesite broj telefona" required autofocus />
            </div>

            <!-- Address -->
            <div>
                <x-label for="address" :value="__('Adresa')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" placeholder="Unesite adresu" required autofocus />
            </div>

            <!-- Postal code -->
            <div>
                <x-label for="postal_code" :value="__('Poštanski broj')" />

                <x-input id="postal_code" class="block mt-1 w-full" type="text" name="postal_code" :value="old('postal_code')" placeholder="Unesite poštanski broj" required autofocus />
            </div>

            <!-- Town -->
            <div>
                <x-label for="town" :value="__('Mjesto')" />

                <x-input id="town" class="block mt-1 w-full" type="text" name="town" :value="old('town')" placeholder="Unesite mjesto" required autofocus />
            </div>

            <!-- Country -->
            <div>
                <x-label for="country" :value="__('Država')" />

                <x-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" placeholder="Unesite državu" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Zaporka')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                placeholder="Unesite zaporku"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Potvrdite zaporku')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                placeholder="Ponovno unesite zaporku"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Već ste registrirani?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registriraj se') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
