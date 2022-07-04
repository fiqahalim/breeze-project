<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl text-center">Welcome to Startup</h3>
            <p class="text-gray-600 pt-2 text-center">Sign in to your account.</p>
        </section>

        <section class="mt-10">
            <form class="flex flex-col" method="POST" action="{{ route('login') }}">
                @csrf

                {{-- Email --}}
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <x-label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email" :value="__('Email')" />
                    <x-input id="email" type="email" name="email" :value="old('email')" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" required autofocus />
                </div>

                {{-- Password --}}
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <x-label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password" :value="__('Password')" />
                    <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                                required autocomplete="current-password" />
                </div>

                {{-- Remember Me --}}
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex justify-end">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-purple-600 hover:text-purple-700 hover:underline mb-6" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <x-button class="justify-center bg-purple-600 hover:bg-purple-700 text-white text-xl font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">
                    {{ __('Log in') }}
                </x-button>
            </form>
        </section>
    </main>
    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-white">Don't have an account? <a href="#" class="font-bold hover:underline">Sign up</a>.</p>
    </div>
</x-guest-layout>
