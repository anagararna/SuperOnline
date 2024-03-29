  <!-- Código HTML para mostrar categorías y subcategorías -->
  <div @click.away="open = false" class="flex flex-col text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
    <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
          <h2 class="text-sm lg:text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline mr-1">Productos</h2>
          <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline mr-1" @click="open = !open">
              <svg fill="currentColor" viewBox="0 0 20 20" class="w-4 h-4">
              <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
          </button>
    </div>
    <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-2 pb-2 md:pb-0 md:overflow-y-auto">
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <div x-data="{ openCategory: null }">
               @foreach ($categorias as $categoria)
                <button @click="openCategory === '{{ $categoria->name }}' ? openCategory = null : openCategory = '{{ $categoria->name }}'" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">{{ $categoria->name }}
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div x-show="openCategory === '{{ $categoria->name }}'" class="...">
                @foreach ($categoria->subcategories as $subcategoria)
                    <a href="{{url('productList?subcategory=' . $subcategoria->id)}}" class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"">{{ $subcategoria->name }}</a>
                @endforeach
                </div>
               @endforeach
            </div>
        </div>
    </nav>
</div> 
