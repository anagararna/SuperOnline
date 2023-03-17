<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de productos</title>
    @vite (['resources/js/app.js','resources/css/app.css'])
    
</head>
    
<body class="bg-cover h-screen " style="background-image: url('images/bglimones.png')">
    <header>
        @include('layouts.navigation')
    </header>
    <div class="grid grid-cols-12 gap-4">
        <aside class="col-span-5 lg:col-span-2">
            @include('layouts.sidebarHome') 
        </aside>
        <main class="col-span-7 lg:col-span-10">
            <div class="flex mt-5 mr-5 justify-center items-center">
                <img src="images/nombre-blanco.png.png" alt="Logo super acido" class="w-40 h-30">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($productos as $producto)
                <!-- component -->
                <div class="mx-auto mt-11 mr-15 w-25 md:w-50 lg:w-60 transform overflow-hidden rounded-lg  bg-00c6bb shadow-md duration-300 hover:scale-105 hover:shadow-lg">
                    <img class="h-48 w-full object-cover object-center" src="{{ $producto->photo }}" alt="{{ $producto->name }}" />
                    <div class="p-4">
                    <h2 class="mb-2 text-lg font-medium dark:text-white text-gray-900">{{ $producto->name }}</h2>
                    <p class="mb-2 text-base dark:text-gray-300 text-gray-700">{{ $producto->description }}</p>
                    <div class="flex items-center">
                        <p class="mr-2 text-lg font-semibold text-gray-900 dark:text-white">€{{ $producto->price }}</p>
                        <p class="text-base  font-medium text-gray-500 line-through dark:text-gray-300">€{{ $producto->price }}</p>
                        <p class="ml-auto text-base font-medium text-green-500">20% off</p>
                    </div>
                    </div>
                </div>
            @endforeach
            </div>
        </main>
        <div class="pagination-links">
            {{ $productos->links() }}
        </div>
    </div>
    
    <footer>   
       @include('layouts.footer')
    </footer> 
    <script type="module">

        Alpine.data('productList', () => ({
            openProduct: null,
            abrirProducto() {
                console.log('abrirProducto');
            }
        }));
        window.Alpine = Alpine;
        Alpine.start();
    </script>
      
</body>
</html>

