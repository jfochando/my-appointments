<x-app-layout>
    <div class="row justify-content-center">
        <div class=" col ">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">{{ __('Especialidades') }}</h3>
                        </div>
                        <div class="col text-right">
                            <a href="{{ route('specialties.create')}}" class="btn btn-sm btn-success">{{ __('Nueva Especialidad')}}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    @if ( session('notification') )
                        <div class="alert alert-success" role="alert">
                            <strong>Success! </strong> {{ session('notification') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Nombre') }}</th>
                                    <th scope="col">{{ __('Descripción') }}</th>
                                    <th scope="col">{{ __('Acciones') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($specialties as $specialty)
                                    <tr>
                                        <th scope="row">
                                            {{ $specialty->name }}
                                        </th>
                                        <td>
                                            {{ $specialty->description }}
                                        </td>
                                        <td>

                                            <form class="" action="{{ route('specialties.destroy', $specialty->id )}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('specialties.edit', $specialty->id )}}" class="btn btn-sm btn-primary">{{ __('Editar') }}</a>
                                                <button type="submit" href="" class="btn btn-sm btn-danger">{{ __('Eliminar') }}</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
