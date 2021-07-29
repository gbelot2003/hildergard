<div>
    <div class="card">
        <div class="card-header">
            <input type="text" wire:model.debounce.800="search" class="form-control"
                placeholder="Ingrese el nombre o correo de usuario">
        </div>
        <div class="card-body">
            <table class="table table-hover table-strep">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Maestra</th>
                    <th>Año</th>
                </thead>
                <tbody>
                    @foreach ($grades as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->teacher->name }}</td>
                            <td>{{ $row->year }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

