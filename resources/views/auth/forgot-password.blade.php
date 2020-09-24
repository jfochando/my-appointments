@section('title','Recordar Contraseña')
No problem. Just let us know your email address and we will email you a password reset link that will allow you to
choose a new one.
@section('subtitle','¿Olvido su contraseña? No hay problema. Diganos su correo y le mandarenos un correo para que ponga uno nuevo.')

<x-guest-layout>
    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" method="POST" action="{{ route('password.email') }}"">
                                @csrf

                                @if ($errors->any())
                                    <div class=" alert alert-danger" role="alert">
                                        <strong>Error! </strong> {{ $errors->first() }}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input id="email" name="email" class="form-control" placeholder="{{ __('Email') }}" type="email"
                                            value="{{ old('email') }}" required autofocus>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4">{{ __('Cambiar Password') }}</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-guest-layout>

{{-- <x-jet-authentication-card>
    <x-slot name="logo">
        <x-jet-authentication-card-logo />
    </x-slot>

    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
    @endif

    <x-jet-validation-errors class="mb-4" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="block">
            <x-jet-label value="{{ __('Email') }}" />
            <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-jet-button>
                {{ __('Email Password Reset Link') }}
            </x-jet-button>
        </div>
    </form>
</x-jet-authentication-card> --}}
