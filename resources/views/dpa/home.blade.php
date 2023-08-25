@extends('layouts.template')

@section('title', 'DPA | Emonev')
@section('location', 'DPA')

@section('content')

	<div class="bg-white rounded-lg shadow p-4">

		<div class="flex text-sm items-center">
			<h2 class="text-gray-500 font-semibold">DAFTAR <span class="bg-pink-500 font-normal rounded-lg py-0.5 px-1.5 text-white">DPA</span></h2>
			<button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-3 py-1.5 ml-auto dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 shadow-md" type="button">Tambah <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
			    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
			  </svg></button>
			<!-- Dropdown menu -->
			<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
			    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
			      <li>
			        <a href="/dpa-tambah" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tambah Dpa</a>
			      </li>
			      <li>
			        <a href="/dpa-tambah-sub-dpa" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tambah Sub Dpa</a>
			      </li>
			      <li>
			        <a href="/dpa-tambah-rencana-penarikan" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tambah Rencana Penarikan</a>
			      </li>
			      <li>
			        <a href="/dpa-tambah-tim" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tambah Tim</a>
			      </li>
			    </ul>
			</div>
		</div>

		<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
		    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
		        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400 text-center">
		            <tr>
		                <th scope="col" class="px-6 py-3">
		                    Nomor DPA
		                </th>
		                <th scope="col" class="px-6 py-3">
		                    Urusan
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
		                <td class="whitespace-nowrap">
		                    deserunt mollit anim id est laborum.
		                </td>
		                <td class="flex flex-row items-center justify-center">
			                  <a href="#" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-xs p-2 m-1 dark:focus:ring-yellow-900 shadow-md">Ubah</a>
		                		<a href="#" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs p-2 m-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 shadow-md">Hapus</a>
		                </td>
		            </tr>
		            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
		                <th scope="row" class="p-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
		                    121731366
		                </th>
		                <td class="whitespace-nowrap">
		                    deserunt mollit anim id est laborum.
		                </td>
		                <td class="flex flex-row items-center justify-center">
			                  <a href="#" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-xs p-2 m-1 dark:focus:ring-yellow-900 shadow-md">Ubah</a>
		                		<a href="#" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs p-2 m-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 shadow-md">Hapus</a>
		                </td>
		            </tr>
		            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
		                <th scope="row" class="p-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
		                    121731366
		                </th>
		                <td class="whitespace-nowrap">
		                    deserunt mollit anim id est laborum.
		                </td>
		                <td class="flex flex-row items-center justify-center">
			                  <a href="#" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-xs p-2 m-1 dark:focus:ring-yellow-900 shadow-md">Ubah</a>
		                		<a href="#" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs p-2 m-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 shadow-md">Hapus</a>
		                </td>
		            </tr>
		            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
		                <th scope="row" class="p-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
		                    121731366
		                </th>
		                <td class="whitespace-nowrap">
		                    deserunt mollit anim id est laborum.
		                </td>
		                <td class="flex flex-row items-center justify-center">
			                  <a href="#" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-xs p-2 m-1 dark:focus:ring-yellow-900 shadow-md">Ubah</a>
		                		<a href="#" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs p-2 m-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 shadow-md">Hapus</a>
		                </td>
		            </tr>
		            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
		                <th scope="row" class="p-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
		                    121731366
		                </th>
		                <td class="whitespace-nowrap">
		                    deserunt mollit anim id est laborum.
		                </td>
		                <td class="flex flex-row items-center justify-center">
			                  <a href="#" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-xs p-2 m-1 dark:focus:ring-yellow-900 shadow-md">Ubah</a>
		                		<a href="#" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs p-2 m-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 shadow-md">Hapus</a>
		                </td>
		            </tr>
		            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
		                <th scope="row" class="p-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
		                    121731366
		                </th>
		                <td class="whitespace-nowrap">
		                    deserunt mollit anim id est laborum.
		                </td>
		                <td class="flex flex-row items-center justify-center">
			                  <a href="#" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-xs p-2 m-1 dark:focus:ring-yellow-900 shadow-md">Ubah</a>
		                		<a href="#" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs p-2 m-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 shadow-md">Hapus</a>
		                </td>
		            </tr>
		        </tbody>
		    </table>
		</div>

	</div>

@endsection