<x-layout>
    <x-slot:header>Contacts</x-slot>
    @foreach ($contacts as $kontak)
      <div class=" my-10">
      <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
          <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://picsum.photos/200/300?random={{ rand() }}" alt="">
          <div class="flex flex-col justify-between p-4 leading-normal">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$kontak['name']}}</h5>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$kontak['address']['street']}}, {{$kontak['address']['suite']}}, {{$kontak['address']['city']}}</p>
              <div>
                <div class="inline-flex rounded-md shadow-sm" role="group">
                  <button onclick="location.href='{{ route('kontaks.edit',$kontak['id']) }}'" type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                    Edit
                  </button>
                  <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                    Delete
                  </button>
                  <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                    Details
                  </button>
                </div>
              </div>
            </div>
      </a>
      </div>
    @endforeach
</x-layout>