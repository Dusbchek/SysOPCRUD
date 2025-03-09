<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body class="bg-neutral-900 text-white"> 
    <div class="container mx-auto px-4 py-6">

    

        <script>
            window.onload = function() {
                var successMessage = document.getElementById('success-message');
                if (successMessage) {
                    setTimeout(function() {
                        successMessage.classList.remove('opacity-100');
                        successMessage.classList.add('opacity-0');
                    }, 5000); 
                    setTimeout(function() {
                        successMessage.style.display = 'none';
                    }, 6000); 
                }
            }
        </script>
        
        <div class="flex mx-auto mt-20 w-full justify-center items-center rounded-md">
            <h1 class="text-center text-3xl font-bold text-red-500">Employees</h1>
            <h1 class="text-center text-3xl font-bold ml-2 text-red-700">SysOp</h1> 
        </div>

        <h1 class="text-2xl font-bold text-red-400 mt-3 text-center">
            Bievenido
        </h1>

        <h1 class="text-2xl font-bold text-red-400 mb-4 text-center">
            {{ Auth::user()->name }}
        </h1>
        
        <div class="flex mb-4">
            <a href="{{ route('employes.create') }}" class="inline-block mb-4 font-semibold border-1 hover:border-1 text-red-200 py-2 px-4 rounded-3xl hover:bg-red-400/60"> 
                Agregar Empleado
            </a>
        
            <form class="ml-auto" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="inline-block mb-4 font-semibold border-1 hover:border-1 text-red-200 py-2 px-4 rounded-3xl hover:bg-red-400/60">
                    Cerrar Sesión
                </button>
            </form>
        </div>
        
        <form action="{{ route('employes.index') }}" method="GET" class="mb-6 flex ">
            <input type="text" name="search" placeholder="Buscar por nombre, apellido o puesto" class="px-4 py-2 rounded-lg text-red-200 bg-stone-900 border-1 hover:boder-red-300" value="{{ request('search') }}">
            <button type="submit" class="ml-2 px-4 py-2 bg-red-400 rounded-lg hover:bg-red-500 text-white">Buscar</button>
        </form>

        @if(session('success'))
        <div id="success-message" class="mb-4 text-red-300 p-4 transition-opacity duration-1000 opacity-100">
            {{ session('success') }}
        </div>
        @endif
        
        <table class="min-w-full bg-neutral-800 shadow-md shadow-stone-900 rounded-md shadow-md">
            <thead>
                <tr>
                    <th class="py-3 px-4  shadow-md shadow-stone-900 text-left text-red-400">Nombre</th> 
                    <th class="py-3 px-4  shadow-md shadow-stone-900 text-left text-red-400">Apellido</th>
                    <th class="py-3 px-4  shadow-md shadow-stone-900 text-left text-red-400">Email</th>
                    <th class="py-3 px-4  shadow-md shadow-stone-900 text-left text-red-400">Puesto</th>
                    <th class="py-3 px-4  shadow-md shadow-stone-900 text-left text-red-400">Salario</th>
                    <th class="py-3 px-4  shadow-md shadow-stone-900 text-left text-red-400">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employes as $employe)
                    <tr>
                        <td class="py-3 px-4  shadow-md shadow-stone-900 text-red-300">{{ $employe->first_name }}</td> 
                        <td class="py-3 px-4  shadow-md shadow-stone-900 text-red-300">{{ $employe->last_name }}</td>
                        <td class="py-3 px-4  shadow-md shadow-stone-900 text-red-300">{{ $employe->email }}</td>
                        <td class="py-3 px-4  shadow-md shadow-stone-900 text-red-300">{{ $employe->position }}</td>
                        <td class="py-3 px-4  shadow-md shadow-stone-900 text-red-300">${{ number_format($employe->salary, 2) }}</td>
                        <td class="py-3 px-4  shadow-md shadow-stone-900">
                            <a href="{{ route('employes.show', $employe) }}" class="mt-2 inline-block text-green-200 py-2 px-4 rounded-3xl hover:bg-green-300/60">Ver</a>
                            <a href="{{ route('employes.edit', $employe) }}" class="mt-2 inline-block text-yellow-100 py-2 px-4 rounded-3xl hover:bg-yellow-300/60">Editar</a>
                            
                            <form action="{{ route('employes.destroy', $employe) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-block mt-2 border-1 hover:border-1 text-red-200 py-2 px-4 rounded-3xl hover:bg-red-400/60 " onclick="return confirm('¿Estás seguro de eliminar este empleado?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </body>
</html>
