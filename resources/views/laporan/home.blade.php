@extends('layouts.template')

@section('title', 'Laporan Anggaran | Emonev')
@section('location', 'Laporan')

@section('content')

	<div class="bg-white rounded-lg shadow p-4">

		<div class="flex text-sm items-center">
			<h2 class="text-gray-500 font-semibold">DAFTAR LAPORAN <span class="bg-pink-500 font-normal rounded-lg py-0.5 px-1.5 text-white">ANGGARAN</span></h2>
		</div>

		<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
		    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
		        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400 text-center">
		            <tr>
		                <th scope="col" class="px-6 py-3">
		                    Tahun
		                </th>
		                <th scope="cpol" class="px-6 py-3">
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
			                  <a href="/laporan-detail" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-xs p-2 dark:focus:ring-yellow-900 shadow-md">LIHAT</a>
		                </td>
		            </tr>
		        </tbody>
		    </table>
		</div>

	</div>

@endsection