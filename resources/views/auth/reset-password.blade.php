<x-guest-layout>
    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl text-center">{{ __('global.mainTitle') }}</h3>
            <p class="text-gray-600 pt-2 text-center">{{ __('global.reset_password') }}</p>
        </section>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <section class="mt-10">
            <form class="flex flex-col" method="POST" action="{{ route('password.update') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div>
                    <x-label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email" :value="__('Email')" />
                    <x-input id="email" type="email" name="email" :value="old('email', $request->email)" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password" :value="__('global.login_password')" />
                    <x-input id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" type="password" name="password" required />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password_confirmation" :value="__('global.login_password_confirmation')" />
                    <x-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation"
                        class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                        required />
                </div>

                <x-button class="justify-center bg-purple-600 hover:bg-purple-700 text-white text-xl font-bold mt-4 py-2 rounded shadow-lg hover:shadow-xl transition duration-200">
                    {{ __('global.reset_password') }}
                </x-button>
            </form>
        </section>
    </main>
</x-guest-layout>
