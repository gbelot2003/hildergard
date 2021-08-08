<div>
    <div class="card">
        <div class="card-header">
            <input type="text" wire:model.debounce.800="search" class="form-control" placeholder="Ingrese el nombre o correo de usuario">
        </div>
        <div class="card-body"> 
            <table class="table table-hover table-strep">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Grado</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <th>
                                <ul>
                                    @foreach ($user->roles as $role)
                                        <li>{{ $role->name }}</li>
                                    @endforeach
                                </ul>
                                
                            </th>
                            <td>
                                @if ($user->status == true)
                                <span class="badge badge-primary">Activo</span>
                                @else
                                <span class="badge badge-danger">Suspendido</span>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('admin.alumnos.edit', $user->id) }}">Editar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <div class="text-center">
                                    <strong> No se encontraron registros!!!</strong>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $users->links() }}
        </div>
    </div>
</div>
