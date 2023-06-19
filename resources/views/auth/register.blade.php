{{--<x-guest-layout>--}}
{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--            <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password_confirmation" required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ml-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}

<x-app-layout>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Главная</a>
                    <span></span> Регистрация
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Создать аккаунт</h3>
                                        </div>
                                        <form method="post" action="{{ route('register') }}">
@csrf
<div class="form-group">
    <input type="text" required="" id="name" name="name"  placeholder="Name" :value="old('name')" required autofocus autocomplete="name">
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>
<div class="form-group">
    <input type="text" required="" id="email" name="email" placeholder="Email" :value="old('email')" required>
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>
<div class="form-group">
    <input required="" type="password" id="password" name="password" placeholder="Пароль" required autocomplete="new-password">
    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>
<div class="form-group">
    <input required="" id="password_confirmation" type="password" name="password_confirmation" placeholder="Подтвердить пароль" required autocomplete="new-password">
    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>
<div class="form-group">
    <x-primary-button class="ml-4">
        {{ __('Зарегестрироваться') }}
    </x-primary-button>
{{--    <button type="submit" class="btn btn-fill-out btn-block hover-up" >Зарегестрироваться</button>--}}
</div>
</form>
<div class="text-muted text-center">Уже есть аккаунт?
<a href="{{ route('login') }}">
{{ __('Войти') }}
</a></div>
</div>
</div>
</div>
<div class="col-lg-6">
    <img src="assets/imgs/login.png">
</div>
</div>
</div>
</div>
</div>
</section>
</main>
</x-app-layout>

