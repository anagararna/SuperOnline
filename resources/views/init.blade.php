<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi sitio web</title>
    @vite(['resources/js/app.js','resources/css/app.css'])

</head>
<body class="bg-cover bg-no-repeat h-screen " style="background-image: url('images/bglimones.png')">
    <header>
        <div class="container mx-auto">
            <nav class="flex items-right justify-end flex-wrap p-2">
                <div class="w-full block flex-grow lg:flex lg:items-right lg:w-auto">
                    <div>
                        @auth
                            <a href="{{ route('dashboard') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-gray-800 hover:bg-white mt-4 lg:mt-0 ml-2">Espacio personal</a>
                        @else
                            <a href="{{ route('register') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-black border-black hover:border-transparent hover:text-gray-800 hover:bg-white mt-4 lg:mt-0 ml-2">Registrarse</a>
                            <a href="{{ route('login') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-black border-black hover:border-transparent hover:text-gray-800 hover:bg-white mt-4 lg:mt-0 ml-2">Iniciar sesión</a>
                        @endauth
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="container mx-auto py-4">
        <div class="flex s flex-col items-center">
             <img src="images/nombre-negro-amarillo.png" alt="Logo de mi sitio web" class="w-1/3 md:w-1/5 lg:w-1/6 mb-0">  
        </div>
    </div>  

    <div class="container mx-auto py-2">
        @yield('content')

    </div>
    <div class="container mx-auto py-4">
        <div class="flex s flex-col items-center">
          <a href="url1" class="bg-00c6bb hover:bg-d6a329 text-white font-BebasNeue-Regular py-4 px-4 rounded mb-10">Compra<br>online</a>
          <a href="url2" class="bg-00c6bb hover:bg-d6a329 text-white font-BebasNeue-Regular py-4 px-4 rounded mb-10">Sobre<br>Nosotros</a>
          <a href="url3" class="bg-00c6bb hover:bg-d6a329 text-white font-BebasNeue-Regular py-4 px-4 rounded mb-10">Espacio<br>Coop</a>
        </div>
      </div>
      

</body>
</html>
