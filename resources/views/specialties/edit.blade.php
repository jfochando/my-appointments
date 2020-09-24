<x-app-layout>
    <div class="row justify-content-center">
        <div class=" col ">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">{{ __('Editar Especialidad') }}</h3>
                        </div>
                        <div class="col text-right">
                            <a href="{{ route('specialties.index')}}"
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
                <form method="POST" action="{{ route('specialties.update', $specialty->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">{{ __('Nombre de la especialidad') }}</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="{{ __('Nombre de la Especialidad')}}" value="{{ old('name', $specialty->name) }}">
                        </div>
                        <div class="form-group">
                            <label for="description">{{ __('Descripción') }}</label>
                            <input type="text" name="description" id="description" class="form-control"
                                placeholder="{{ __('Descripción')}}" value="{{ old('description', $specialty->description) }}">
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Guardar')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
