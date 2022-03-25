<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-8 h-20 text-gray-500 fill-current" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="text-base center mb-7"><span class="font-bold">Account Login
                </span></div>
            <!-- Email Address -->
            <div>
                <label class="text-sm text-gray-600 hover:text-gray-900" for="email">{{ __('lang.email') }} </label>

                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
            <label class="text-sm text-gray-600 hover:text-gray-900" for="password">{{ __('lang.password') }} </label>

                <x-input id="password" class="block w-full mt-1"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('lang.remember_me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('lang.forget_password') }}
                    </a>
                @endif

                <x-button class="ml-3">
                {{ __('lang.login')}}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
