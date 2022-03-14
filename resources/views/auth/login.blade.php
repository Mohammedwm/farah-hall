<x-guest-layout>
        <!-- Session Status -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
                <div class="container">
                    <div class="loginbox">
                        <div class="login-left"> <img class="img-fluid" src="" alt="Logo">
                        </div>
                        <div class="login-right">
                            <div class="login-right-wrap">
                                <h1>Login</h1>
                                <p class="account-subtitle">Access to our dashboard</p>
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <input id="email" class="form-control" type="email" placeholder="Email" name="email" :value="old('email')" required
                                            autofocus />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="password" type="password" placeholder="Password" name="password" required
                                            autocomplete="current-password"/>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                                    </div>
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox"
                                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
                                </form>
                                @if (Route::has('password.request'))
                                <div class="text-center forgotpass">
                                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                                </div>
                                @endif

                                <div class="login-or"> <span class="or-line"></span> <span
                                        class="span-or">or</span> </div>

                                <div class="text-center dont-have">Don’t have an account? <a
                                        href="{{ route('register') }}">Register</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>
