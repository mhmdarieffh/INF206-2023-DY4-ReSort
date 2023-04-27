<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Masuk -->
        <div>
        <span class="mb-8 text-5xl text-blue-950 flex justify-center" >{{ __('Masuk') }}</span>
        </div>

        <!-- Welcome -->
        <div>
        <span class="mb-8 text-sm text-blue-950 flex justify-center" >{{ __('Selamat datang di layanan Bank Sampah') }}</span>
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me / Lupa password -->
        <div class="block mt-4 flex justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="shadow-sm italic" name="remember">
                <span class="ml-2 text-sm text-blue-950">{{ __('Ingat Saya') }}</span>
            </label>
            @if (Route::has('password.request'))
                <a class="italic underline text-sm text-right text-gray-600 hover:text-gray-900 " href="{{ route('password.request') }}">
                    {{ __('Lupa Password?') }}
                </a>
            @endif
        </div>


        <div class="grid justify-items-center mt-3">
            <x-primary-button class="bg-green-500 px-4 py-2 hover:bg-green-600 text-blue-900 sm:px-8 sm:py-3">
                {{ __('Login') }}
            </x-primary-button>
        </div>

        <!-- Register -->
        <div class="grid justify-items-center mt-3">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                {{ __('Belum punya akun? Daftar sekarang!') }}
            </a>
        </div>
    </form>
</x-guest-layout>
