<section class="mx-auto max-w-6xl">
    <div class="flex flex-col">
        <div class="flex flex-col md:flex-row justify-center items-center h-28">
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center"></div>
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center"></div>
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center"></div>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center">
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center">
                <div slot="middle-left" class="max-w-2xl">
                    <div class="flex flex-row">
                        <div class="w-2/3 bg-yellow-600 p-5 text-green-100 flex justify-center items-center h-48 text-2xl font-black uppercase">{{ucwords("share your music sheets")}}</div>
                        <div class="w-1/3 bg-green-600 text-yellow-100 px-5 flex justify-center items-center">
                            Filter with popular instruments...
                            <div class="">
                                <div 
                                    x-cloak 
                                    x-data="{ dropdownOpen: false }" 
                                    class="relative"
                                >
                                <select wire:model="category" class="absolute right-0 mt-10 py-2 w-48 bg-white text-black rounded-md shadow-xl z-20">
                                    <option value="All" class="block px-4 py-2 text-sm capitalize text-black hover:bg-blue-500 hover:text-white">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->name}}" class="block px-4 py-2 text-sm capitalize text-black hover:bg-blue-500 hover:text-white">
                                            {{$category->name}}
                                        </option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center"></div>
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center">
                <div slot="middle-right" class="max-w-xs">
                    <div class="flex flex-col justify-center h-48 p-3">
                        <div class="font-black text-green-700 flex relative mx-auto">
                            <input wire:model="search" class="border-2 border-primary bg-red transition h-12 px-5 pr-16 rounded-md focus:outline-none w-full text-black text-sm " type="search" name="search" placeholder="Search for some experience" />
                            <button type="submit" class="absolute right-2 top-3 mr-4">
                                <svg class="text-black h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="items-center grid grid-cols-4 ">
            @foreach ($sheets as $sheet)
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center mr-0 md:mr-2">
                <div slot="bottom-left" class="max-w-xs">
                    <div class="p-5 shadow-md m-2 mt-4"><img class="object-scale-down h-30" src="{{ asset('storage/' . $sheet->thumbnail)  }}" alt="step3">
                        <div class="text-xs font-bold uppercase text-green-700 mt-1 mb-2">{{$sheet->user->name}}</div>
                        <div class="text-xs font-bold uppercase text-pink-700 mt-1 mb-2">{{$sheet->category->name}}</div>
                        <a href="{{ route('sheet.show', $sheet)}}"><div class="text-xl font-bold mb-2">{{$sheet->title}}</div></a>
                        <div class="truncate">{{$sheet->description}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> 
</section>