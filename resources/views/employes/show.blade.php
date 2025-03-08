<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detalle del Empleado</title>
    @vite('resources/css/app.css')
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
</head>
<body>
    <div class="bg-neutral-900 text-white p-6 rounded-2xl shadow-2xl max-w-md w-full text-center shadow-md">
        <h1 class="text-3xl font-bold text-red-400 mb-4">
            {{ $employe->first_name }} {{ $employe->last_name }}
        </h1>

        <div class="mb-4">
            <strong class="text-red-500">Email:</strong>
            <p class="text-red-300">{{ $employe->email }}</p>
        </div>

        <div class="mb-4">
            <strong class="text-red-500">Puesto:</strong>
            <p class="text-red-300">{{ $employe->position }}</p>
        </div>

        <div class="mb-4">
            <strong class="text-red-500">Salario:</strong>
            <p class="text-red-300">${{ number_format($employe->salary, 2) }}</p>
        </div>

        <a href="{{ route('employes.index') }}" 
           class="bg-red-600 text-white py-2 px-6 rounded-full shadow-lg hover:bg-red-700 transition duration-300">
            Volver
        </a>
    </div>
</body>
</html>
