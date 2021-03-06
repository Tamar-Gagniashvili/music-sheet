<div slot="middle-left" class="max-w-2xl">
    <div class="flex flex-row">
        <div class="w-2/3 bg-yellow-600 p-5 text-green-100 flex justify-center items-center h-48 text-3xl font-black uppercase">{{ucwords("share your music sheets")}}</div>
        <div class="w-1/3 bg-green-600 text-yellow-100 px-5 flex justify-center items-center">
            Filter with popular instruments...
            <div class="">
                <div x-data="{ dropdownOpen: false }" class="relative">
                  <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-white p-2 focus:outline-none">
                    <svg class="h-5 w-5 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                  </button>
                
                  <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                
                  <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                    <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                      piano
                    </a>
                    <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                      violin
                    </a>
                    <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                      guitar
                    </a>
                    <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                      trumpet
                    </a>
                    <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                      sax
                    </a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
