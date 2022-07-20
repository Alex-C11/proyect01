<div class="py-6 row sales layout-top-spacing border-gray-200 dark:border-gray-700">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <button wire:click="create()"
            class="bg-purple-600 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded my-3">
            Crear Nueva </button>
            @if($isOpen)
                @include('livewire.stand_create')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">ID</th>
                        <th class="px-4 py-2">Nombre</th>
                        <th class="px-4 py-2">fila</th>
                        <th class="px-4 py-2">columna</th>

                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stands as $stand)
                    <tr>
                        <td class="border px-4 py-2">{{ $stand->id }}</td>
                        <td class="border px-4 py-2">{{ $stand->name }}</td>
                        <td class="border px-4 py-2">{{ $stand->row}}</td>
                        <td class="border px-4 py-2">{{ $stand->column }}</td>
                        <td class="border px-4 py-2">
                        <button wire:click="edit({{ $stand }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                        <button wire:click="delete({{ $stand }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
