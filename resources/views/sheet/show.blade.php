<x-app-layout>
    <!-- component -->
<div class="flex flex-col justify-center h-screen">
	<div
		class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 w-1/2 mx-auto border border-white bg-white">
		<div class="w-full md:w-full bg-white grid place-items-center">
			<img src="https://images.pexels.com/photos/4381392/pexels-photo-4381392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="tailwind logo" class="rounded-xl" />
        </div>
		<div class="w-full md:w-2/5 bg-white flex flex-col space-y-2 p-3">
			<h3 class="font-black text-gray-800 md:text-3xl text-xl">{{$sheet->title}}</h3>
			<p class="md:text-lg text-gray-500 text-base">{{$sheet->description}}</p>
            <div class="text-xs font-bold uppercase text-pink-700 mt-1 mb-2">{{$sheet->category->name}}</div>
			<p class="text-sm font-black text-gray-800">Updated at: {{$sheet->updated_at}}</p>
            <p class="text-sm font-black text-gray-800">Sheet by: {{$sheet->user->name}}</p>
		</div>
		</div>
	</div>
</x-app-layout>