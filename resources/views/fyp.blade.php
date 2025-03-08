<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Información del Usuario</title>
</head>
<body class="bg-gradient-to-b from-[#1b1010] to-[#0e0707] flex justify-center items-center h-screen m-0">
    <div class="bg-neutral-900 text-white p-6 rounded-2xl shadow-2xl max-w-md w-full text-center shadow-md">

        <img class="rounded-full shadow-md shadow-stone-700 mx-auto w-[13rem] mb-4 mt-2" src="{{ asset('images/' . Auth::user()->img) }}" alt="Imagen de {{ Auth::user()->name }}" class="rounded-lg w-[24rem] mb-4">


        <h1 class="text-2xl font-bold text-red-400 mb-4">
            {{ Auth::user()->name }}
        </h1>

        <div class="mb-4">
            <strong class="text-red-500">Email:</strong>
            <p class="text-red-300">{{ Auth::user()->email }}</p>
        </div>

       

    
        <form class="ml-auto" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class=" inline-block mb-4 font-semibold border-1 hover:border-1 text-red-200 py-2 px-4 rounded-3xl hover:bg-red-400/60">
                Cerrar Sesión
            </button>
        </form>
    </div>
</body>
</html>
