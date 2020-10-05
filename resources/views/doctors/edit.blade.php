<x-app-layout>
    <div class="row justify-content-center">
        <div class=" col ">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">{{ __('Editar Médico') }}</h3>
                        </div>
                        <div class="col text-right">
                            <a href="{{ route('doctors.index')}}"
                                class="btn btn-sm btn-default">{{ __('Cancelar y Volver')}}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if ( $errors->any() )
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('doctors.update', $doctor->id )}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">{{ __('Nombre del Médico') }}</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="{{ __('Nombre del Médico') }}" value="{{ old('name', $doctor->name) }}">
                        </div>
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail') }}</label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="{{ __('E-Mail') }}" value="{{ old('email', $doctor->email) }}">
                        </div>
                        <div class="form-group">
                            <label for="dni">{{ __('DNI') }}</label>
                            <input type="text" name="dni" id="dni" class="form-control" placeholder="{{ __('DNI') }}"
                                value="{{ old('dni', $doctor->dni) }}">
                        </div>
                        <div class="form-group">
                            <label for="address">{{ __('Dirección') }}</label>
                            <input type="text" name="address" id="address" class="form-control"
                                placeholder="{{ __('Dirección') }}" value="{{ old('address', $doctor->address) }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">{{ __('Teléfono / móvil') }}</label>
                            <input type="phone" name="phone" id="phone" class="form-control"
                                placeholder="{{ __('Telefono') }}" value="{{ old('phone', $doctor->phone) }}">
                        </div>
                        <div class="form-group">
                            <label for="password">{{ __('Contraseña') }}</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="{{ __('Contraseña')}}" value="">
                            <p>Ingrese una contraseña si desea cambiarla</p>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Guardar')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
