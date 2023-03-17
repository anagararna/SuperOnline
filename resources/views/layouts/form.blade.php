<!-- component -->
@vite (['resources/js/app.js','resources/css/app.css'])

    @include('layouts.dashmenu')
    <div class="flex-1 px-2">
        <div class="h-16 flex items-center">
            <h4 class="text-lg font-bold">Nuevo producto</h4>
        </div>
        <div class="mb-6 pt-4">
            <div>
                <input type="text" name="to" id="to" class="w-full text-gray-700 py-1 border-b border-b-gray-300 focus:outline-none focus:ring-0 focus:border-transparent focus:border-b-gray-300" placeholder="Nombre">
            </div>
            <div>
                <input type="text" name="cc" id="cc" class="w-full text-gray-700 py-1 border-b border-b-gray-300 focus:outline-none focus:ring-0 focus:border-transparent focus:border-b-gray-300" placeholder="Descripción">
            </div>
            <div>
                <input type="text" name="bcc" id="bcc" class="w-full text-gray-700 py-1 border-b border-b-gray-300 focus:outline-none focus:ring-0 focus:border-transparent focus:border-b-gray-300" placeholder="Subcategoria">
            </div>
            <div>
                <input type="text" name="bcc" id="bcc" class="w-full text-gray-700 py-1 border-b border-b-gray-300 focus:outline-none focus:ring-0 focus:border-transparent focus:border-b-gray-300" placeholder="Imagen">
            </div>

            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center space-x-2">
                    <button class="bg-blue-500 hover:bg-blue-700 rounded-lg px-12 py-1.5 text-gray-100 hover:shadow-xl transition duration-150">Send</button>
                </div>
                <button class="mr-4 text-gray-700 hover:text-gray-900" title="Delete">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>