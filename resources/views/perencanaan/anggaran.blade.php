@extends('layouts.template')

@section('title', 'Realisasi Anggaran SKPD | Emonev')
@section('location', 'Realisasi \ Detail')

@section('content')

	<div class="bg-white rounded-lg shadow p-4 mb-4">

		<div class="flex text-sm items-center">
			<a href="/realisasi" class="flex items-center shadow-md focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-xs w-fit p-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
			<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /> </svg>
			Kembali
			</a>
			<h2 class="text-gray-500 font-semibold ml-auto">INFORMASI <span class="bg-pink-500 font-normal rounded-lg py-0.5 px-1.5 text-white">SKPD</span></h2>
		</div>

		<div class="relative overflow-x-auto shadow sm:rounded-lg mt-6">
		    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="p-4 font-semibold text-gray-900 whitespace-nowrap dark:text-white text-center">
                    121731366
                </th>
                <td>:</td>
                <td class="flex flex-row items-center justify-center p-2">
	                  cnjencjenjcen
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="p-4 font-semibold text-gray-900 whitespace-nowrap dark:text-white text-center">
                    121731366
                </th>
                <td>:</td>
                <td class="flex flex-row items-center justify-center p-2">
	                  cnjencjenjcen
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="p-4 font-semibold text-gray-900 whitespace-nowrap dark:text-white text-center">
                    121731366
                </th>
                <td>:</td>
                <td class="flex flex-row items-center justify-center p-2">
	                  cnjencjenjcen
                </td>
            </tr>	
		    </table>
		</div>

	</div>

	<div class="bg-white rounded-lg shadow p-4">

		<div class="flex text-sm items-center">
			<h2 class="text-gray-500 font-semibold">Daftar Realisasi Anggaran <span class="bg-pink-500 font-normal rounded-lg py-0.5 px-1.5 text-white">SKPD</span> Per Bulan Berdasarkan Rencana Pengambilan</h2>
		</div>

		<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
		    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
		        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400 text-center">
		            <tr>
		                <th scope="col" class="px-6 py-3">
		                    Bulan
		                </th>
		                <th scope="col" class="px-6 py-3">
		                    Aksi
		                </th>
		            </tr>
		        </thead>
		        <tbody>
		            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
		                <th scope="row" class="p-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
		                    121731366
		                </th>
		                <td class="flex flex-row items-center justify-center p-2">
			                  <a href="/realisasi-anggaran-tambah" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-2 focus:ring-blue-300 font-medium rounded-lg p-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 shadow text-xs">REALISASI</a>
		                </td>
		            </tr>
		        </tbody>
		    </table>
		</div>

	</div>

@endsection