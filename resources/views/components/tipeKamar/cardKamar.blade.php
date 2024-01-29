<div
    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-10 scale-90 flex-1">
    <a href="#">
        <img class="rounded-t-lg" src="{{$url}}" alt="" />
    </a>
    <div class="p-5 flex flex-col justify-between">
        <div class="w-full h-auto">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$tipe}}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 h-20 w-200 w-max-20 overflow-clip">
                {{$desc}}
            </p>
            <p class="mb-3">Tersedia 10 kamar</p>
        </div>
        <div class="">
            <h3 class="text-lg font-bold tracking-tight text-gray-900 dark:text-white -mt-2">{{$harga}}</h3>
            <a href="#"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
</div>