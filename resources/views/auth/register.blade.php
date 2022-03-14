<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}"
            onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('{{ __('lang.terms-agree')}}'); return false; }">
            @csrf
            <div class="mb-2 text-3xl text-center">無料お試し申し込み</div>
            <div class="text-base mb-7"><span class="font-bold">
                </span> 登録して、14日間の無料体験を開始しましょう。クーポンコードをお持ちの方は、決済画面に入力すると、さらに追加16日間、合計30日間の無料体験をご利用いただけます。体験期間が終了するまで、クレジットカードには課金されません。</div>
            <!-- Name -->
            <div>
                <x-label for="name" />{{ __('lang.name')}}

                <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" />{{ __('lang.email')}}

                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" />{{ __('lang.password') }}

                <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" />{{ __('lang.password_confirm') }}

                <x-input id=" password_confirmation" class="block w-full mt-1" type="password"
                    name="password_confirmation" required />
            </div>

            <!-- Telephone -->
            <div class="mt-4">
                <x-label for="user_telephone" />{{ __('lang.user_telephone')}}

                <x-input id="user_telephone" class="block w-full mt-1" type="text"
                    placeholder="{{ __('lang.user_telephone_placeholder')}}" name="user_telephone" required autofocus />
            </div>
            <div class="pt-3"><input class="mr-1" type="checkbox" name="checkbox" value="check" id="agree" /><a
                    href="{{ url('/terms') }}" class="ml-2 text-indigo-600">利用規約</a>・<a href="{{ url('/privacy') }}"
                    target="_blank" class="text-indigo-600">プライバシーポリシー</a>に同意の上でお進みください。</div>


            <div class="flex items-center justify-end mt-4">
                <!-- <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> -->

                <x-button class="ml-4">
                    {{ __('lang.register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>