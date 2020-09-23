@section('title','Inicio de Sesión')

@section('subtitle','Escribe tus datos para iniciar sesión')

<x-guest-layout>
    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" method="POST" action="{{ route('login') }}"">
                            @csrf

                            @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <strong>Error! </strong> {{ $errors->first() }}
                            </div>
                            @endif

                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input id="email" name="email" class="form-control" placeholder="{{ __('Email') }}" type="email" value="{{ old('email') }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input id="password" name="password" class="form-control" placeholder="{{ __('Password') }}" type="password" value="{{ old('password') }}">
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col-12">
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input name="remember" class="custom-control-input" id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="remember">
                                            <span class="text-muted">{{ __('Recordar Sesión') }}</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Entrar') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <a href="{{ route('password.request') }}" class="text-light">
                            <small>{{ __('¿Olvidaste tu contraseña?') }}</small>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('register') }}" class="text-right">
                            <small>{{ __('¿Aún no te has registrado?') }}</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>




            </div>
        </form>
    </x-jet-authentication-card> --}}
</x-guest-layout>
