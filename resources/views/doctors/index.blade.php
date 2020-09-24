<x-app-layout>
    <div class="row justify-content-center">
        <div class=" col ">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">{{ __('Médicos') }}</h3>
                        </div>
                        <div class="col text-right">
                            <a href="{{ route('doctors.create')}}"
                                class="btn btn-sm btn-success">{{ __('Nuevo Médico')}}</a>
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
                                    <th scope="col">{{ __('E-Mail') }}</th>
                                    <th scope="col">{{ __('DNI') }}</th>
                                    <th scope="col">{{ __('Acciones') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($doctors as $doctor)
                                <tr>
                                    <th scope="row">
                                        {{ $doctor->name }}
                                    </th>
                                    <td>
                                        {{ $doctor->email }}
                                    </td>
                                    <td>
                                        {{ $doctor->dni }}
                                    </td>
                                    <td>

                                        <form class="" action="{{ route('doctors.destroy', $doctor->id )}}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('doctors.edit', $doctor->id )}}"
                                                class="btn btn-sm btn-primary">{{ __('Editar') }}</a>
                                            <button type="submit" href=""
                                                class="btn btn-sm btn-danger">{{ __('Eliminar') }}</button>
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
