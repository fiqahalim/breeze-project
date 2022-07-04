<x-guest-layout>
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl text-center">{{ __('global.mainTitle') }}</h3>
            <p class="text-gray-600 pt-2 text-center">Sign up here!</p>
        </section>

        <section class="mt-10">
            <form class="flex flex-col" method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-6 pt-3">
                    <x-label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="name" :value="__('global.register.full_name')" />
                    <x-input id="name" type="text" name="name" :value="old('name')" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mb-6 pt-3">
                    <x-label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email" :value="__('global.login_email')" />
                    <x-input id="email" type="email" name="email" :value="old('email')" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" required />
                </div>

                <!-- Password -->
                <div class="mb-6 pt-3">
                    <x-label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password" :value="__('global.login_password')" />
                    <x-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                        required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-6 pt-3">
                    <x-label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password_confirmation" :value="__('global.confirm_password')" />
                    <x-input id="password_confirmation"
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                        type="password"
                        name="password_confirmation" required />
                </div>

                <x-button class="justify-center bg-purple-600 hover:bg-purple-700 text-white text-xl font-bold mt-4 py-2 rounded shadow-lg hover:shadow-xl transition duration-200">
                    {{ __('global.signUp') }}
                </x-button>
            </form>
        </section>
    </main>
    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-white">
            Already have an account? <a href="{{ route('login') }}" class="font-bold hover:underline">Sign in</a>.
        </p>
    </div>
</x-guest-layout>
