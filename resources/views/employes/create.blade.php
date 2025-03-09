<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>
<body class="bg-neutral-950 text-white"> <!-- Fondo oscuro para toda la página -->
    <div class="container mx-auto px-4 py-6">

        <style>
            body {
                background-color: #1a0c0c;
                background-image: linear-gradient(to bottom, #1b1010, #0e0707);
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
        </style>

        <div class="flex mx-auto mt-3 w-full justify-center items-center rounded-md">
            <h1 class="text-center text-2xl font-bold text-red-500 mb-10">Agregar Empleado</h1>
        </div>
        
        <form action="{{ route('employes.store') }}" method="POST" class="bg-neutral-800 p-6 rounded-lg shadow-md">
            @csrf
            
            <div class="mb-4">
                <label for="first_name" class="block text-sm font-medium text-red-300">Nombre</label>
                <input type="text" id="first_name" name="first_name" class="mt-1 block w-full px-4 py-2 shadow-md shadow-neutral-900 rounded-md bg-neutral-700 text-white" required>
            </div>
            
            <div class="mb-4">
                <label for="last_name" class="block text-sm font-medium text-red-300">Apellido</label>
                <input type="text" id="last_name" name="last_name" class="mt-1 block w-full px-4 py-2 shadow-md shadow-neutral-900 rounded-md bg-neutral-700 text-white" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-red-300">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 shadow-md shadow-neutral-900 rounded-md bg-neutral-700 text-white" required>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-red-300">Teléfono</label>
                <input type="text" id="phone" name="phone" class="mt-1 block w-full px-4 py-2 shadow-md shadow-neutral-900 rounded-md bg-neutral-700 text-white">
            </div>

            <div class="mb-4">
                <label for="position" class="block text-sm font-medium text-red-300">Puesto</label>
                <input type="text" id="position" name="position" class="mt-1 block w-full px-4 py-2 shadow-md shadow-neutral-900 rounded-md bg-neutral-700 text-white" required>
            </div>

            <div class="mb-4">
                <label for="salary" class="block text-sm font-medium text-red-300">Salario</label>
                <input type="number" id="salary" name="salary" class="mt-1 block w-full px-4 py-2 shadow-md shadow-neutral-900 rounded-md bg-neutral-700 text-white" required>
            </div>

            <div class="mb-4">
                <label for="hire_date" class="block text-sm font-medium text-red-300">Fecha de Contratación</label>
                <input type="date" id="hire_date" name="hire_date" class="mt-1 block w-full px-4 py-2 shadow-md shadow-neutral-900 rounded-md bg-neutral-700 text-white" required>
            </div>

            <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600">Guardar Empleado</button>
            <a href="{{ route('employes.index') }}" 
            class="bg-red-600 text-white py-2 px-6 rounded-lg ml-2 shadow-lg hover:bg-red-700 transition duration-300">
             Volver
         </a>
        </form>
    </div>
</body>
</html>
