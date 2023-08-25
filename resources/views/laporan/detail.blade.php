@extends('layouts.template')

@section('title', 'Laporan Anggaran | Emonev')
@section('location', 'Laporan \\ Detail')

@section('content')

	<div class="bg-white rounded-lg shadow p-4 w-full">

		<div class="flex text-sm items-center">
			<a href="/laporan" class="flex items-center shadow-md focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-xs w-fit p-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
			<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /> </svg>
			Kembali
			</a>
			<h2 class="text-gray-500 font-semibold ml-auto">LAPORAN ANGGARAN TAHUN <span class="bg-pink-500 font-normal rounded-lg py-0.5 px-1.5 text-white">2023</span></h2>
		</div>

		<div class="w-full h-fit max-h-screen overflow-auto py-2.5 px-1 my-1.5">

		</div>

	</div>

@endsection