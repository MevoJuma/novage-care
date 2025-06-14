<x-guest-layout>



    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <div class="login-card card-block auth-body mr-auto ml-auto">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="auth-box">
                <div class="row m-b-20">
                    <div class="col-md-12">
                        <h3 class="text-left txt-primary">Sign In</h3>
                    </div>
                </div>
                <div class="input-group">
                    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                        required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="input-group">
                    <input id="password" class="form-control" type="password" name="password" placeholder="*******" required
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="row m-t-25 text-left">
                    <div class="col-sm-7 col-xs-12">
                        <div class="checkbox-fade fade-in-primary">
                            <label>
                                <input type="checkbox" value="">
                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                <span class="text-inverse">Remember me</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-12 forgot-phone text-right">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </div>
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <button type="submit"
                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-10">
                        <p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
                        <p class="text-inverse text-left"><b>Your Authentication Team</b></p>
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('images/logo0.png') }}" style="height: 40px;" alt="small-logo.png">
                    </div>
                </div>

            </div>
        </form>
    </div>


</x-guest-layout>
