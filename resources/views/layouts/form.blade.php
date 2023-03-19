<!-- component -->
<title>formulario</title>
@vite (['resources/js/app.js','resources/css/app.css'])

    @include('layouts.dashmenu')
    <div class="flex-1 px-2">
        <div class="h-16 flex items-center">
            <h4 class="text-lg font-bold">Nuevo producto</h4>
        </div>
        <form class="form-items" method="POST" action="{{ url('dashboard') }}" enctype="multipart/form-data">
            @csrf
        <div class="mb-6 pt-4">
            
            <div>
                <input type="text" name="name" id="nombre" class="w-full text-gray-700 py-1 border-b border-b-gray-300 focus:outline-none focus:ring-0 focus:border-transparent focus:border-b-gray-300" placeholder="Nombre" required>
            </div>
            <div>
                <input type="text" name="description" id="descripcion" class="w-full text-gray-700 py-1 border-b border-b-gray-300 focus:outline-none focus:ring-0 focus:border-transparent focus:border-b-gray-300" placeholder="Descripción" required>
            </div>
            <div>
                <input type="text" name="price" id="precio" class="w-full text-gray-700 py-1 border-b border-b-gray-300 focus:outline-none focus:ring-0 focus:border-transparent focus:border-b-gray-300" placeholder="Precio" required>
            </div>

            <div>
                <input type="text" class="form-control" name="photo" id="imagenurl" class="w-full text-gray-700 py-1 border-b border-b-gray-300 focus:outline-none focus:ring-0 focus:border-transparent focus:border-b-gray-300" placeholder="Imagen" required>
            </div>

            {{-- <div>
                <select name="subcategoria_id" id="subcategoria_id" class="w-full text-gray-700 py-1 border-b border-b-gray-300 focus:outline-none focus:ring-0 focus:border-transparent focus:border-b-gray-300">
                    <option value="" disabled selected>Selecciona una subcategoría</option>
                    @foreach($subcategories as $subcategoria)
                        <option value="{{ $subcategories->id }}">{{ $subcategories->nombre }}</option>
                    @endforeach
                </select>
            </div> --}}
            

            <div>
                <input type="text" name="subcategory_id" id="subid" class="w-full text-gray-700 py-1 border-b border-b-gray-300 focus:outline-none focus:ring-0 focus:border-transparent focus:border-b-gray-300" placeholder="subcategoria" required>
            </div>

            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center space-x-2">
                    <button type="submit" class="bg-00c6bb hover:bg-fbd800 rounded-lg px-12 py-1.5 text-gray-100 hover:shadow-xl transition duration-150">Send</button>
                </div>
            </div>
        </div>
        </form>

    </div>
</div>