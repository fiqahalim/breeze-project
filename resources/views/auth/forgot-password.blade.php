<x-guest-layout>
    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl text-center">{{ __('global.mainTitle') }}</h3>
            <p class="text-gray-600 pt-2 text-center">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </p>
        </section>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <section class="mt-10">
            <form class="flex flex-col" method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email -->
                <div>
                    <x-label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email" :value="__('Email')" />
                    <x-input id="email" type="email" name="email" :value="old('email')" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" required autofocus />
                </div>

                <x-button class="justify-center bg-purple-600 hover:bg-purple-700 text-white text-xl font-bold mt-4 py-2 rounded shadow-lg hover:shadow-xl transition duration-200">
                    {{ __('global.send_password') }}
                </x-button>
            </form>
        </section>
    </main>
    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-white">
            Already have an account? <a href="{{ route('login') }}" class="font-bold hover:underline">{{ __('global.signin') }}</a>.
        </p>
    </div>
</x-guest-layout>
