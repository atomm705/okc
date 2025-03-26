<x-guest-layout>
    <!-- Session Status -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">


            <div>
                <div class="card-body">


                    <x-auth-session-status class="mb-4" :status="session('status')" />




                    <h4 class="mb-1">Welcome to sneat! 👋</h4>
                    <p class="mb-6">Please sign-in to your account and start the adventure</p>

                    <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                        <div >
                            <x-input-label for="email" :value="__('Email')"   />
                            <x-text-input id="email" class="block mt-1 w-full form-control   "  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full form-control"
                                          type="password"
                                          name="password"
                                          required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="d-flex justify-content-between mt-8">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                <span class="ms-2 text-sm text-gray-600 form-check-label mt-1">{{ __('Remember me') }}</span>
                            </label>



                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                        </div>

                        <x-primary-button class="ms-3">
                            {{ __('Log in') }}
                        </x-primary-button>



                    </form>


                </div>























            </div>














        </div>
    </div>

</x-guest-layout>
