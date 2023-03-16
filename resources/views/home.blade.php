<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Compra Online</title>
        @vite (['resources/js/app.js','resources/css/app.css'])
        
    </head>
        
    <body>
        <header>
            @include('layouts.navigation')
        </header>
            <div class="grid grid-cols-12 gap-4">
                <aside class="col-span-5 lg:col-span-2">
                @include('layouts.sidebarHome') 
                </aside>
                <main class="col-span-7 lg:col-span-10 hidden sm:block">
                @include('layouts.carrusel')
                </main>
            </div> 
        <footer>   
           @include('layouts.footer')
        </footer>  
    </body>

</html>