@extends('layouts.dashboard.bayarKos')

@section('navbar')
<x-navbar.navbar></x-navbar.navbar>
@endsection

@section('stepBar')
<ol
    class="flex items-center justify-center w-1/2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
    <li
        class="flex md:w-full items-center text-blue-600 dark:text-blue-500 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
        <span
            class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            Personal <span class="hidden sm:inline-flex sm:ms-2">Info</span>
        </span>
    </li>
    <li
        class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
        <span
            class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
            <span class="me-2">2</span>
            Account <span class="hidden sm:inline-flex sm:ms-2">Info</span>
        </span>
    </li>
    <li class="flex items-center">
        <span class="me-2">3</span>
        Confirmation
    </li>
</ol>
@endsection

@section('containerPayment')
<!-- Personal Info -->
<div class="w-3/4 h-screen bg-red-300 rounded-lg">
    <div class="mx-10 pt-10">
        <div class="border rounded-lg p-5 flex justify-center items-center">
            <div class="w-5/12">
                <img src="https://www.99.co/id/panduan/wp-content/uploads/2023/08/10202553/Desain-Kamar-Kost-Minimalis-Ukuran-3x4-untuk-Mahasiswa.jpg"
                    class=" rounded-lg">
            </div>
            <div class=" w-7/12">
                <div class="ms-5 mb-10">
                    <p class="text-green-400 font-bold">Kamar VIP</p>
                    <h5 class="font-bold">Kamar Tipe Kecil </h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis fuga voluptas nam nesciunt
                        suscipit quis ipsum saepe porro, ad aperiam cumque amet delectus sit dolores distinctio non
                        beatae, cum est?</p>
                </div>

                <div class="flex justify-between ms-5">
                    <div class="kasur">
                        <p>Beds</p>
                        <div class="flex">
                            <h5>3</h5>
                            <i class="fas fa-bed mx-auto mt-1"></i>
                        </div>
                    </div>
                    <div class="kasur">
                        <p>Beds</p>
                        <div class="flex">
                            <h5>3</h5>
                            <i class="fas fa-bed mx-auto mt-1"></i>
                        </div>
                    </div>
                    <div class="kasur">
                        <p>Beds</p>
                        <div class="flex">
                            <h5>3</h5>
                            <i class="fas fa-bed mx-auto mt-1"></i>
                        </div>
                    </div>
                    <div class="kasur">
                        <p>Beds</p>
                        <div class="flex">
                            <h5>3</h5>
                            <i class="fas fa-bed mx-auto mt-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>

    </div>
</div>
<!-- Summary Payment -->
<div class="w-1/4">
    Test2
</div>

@endsection
