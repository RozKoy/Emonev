@extends('layouts.template')

@section('title', 'Urusan | Emonev')
@section('location', 'Urusan \\ Tambah')

@section('content')

	<div class="bg-white rounded-lg shadow p-4">

		<div class="flex items-center mb-6">
			<a href="/urusan" class="flex items-center shadow-md focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-xs w-fit p-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
			<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /> </svg>
			Kembali
			</a>
			<h2 class="text-gray-500 font-semibold ml-auto">TAMBAH <span class="bg-pink-500 font-normal rounded-lg py-0.5 px-1.5 text-white">URUSAN</span></h2>
		</div>

		<form>
		
			<div class="flex flex-wrap text-sm w-full">
				<div class="rounded-lg shadow p-2.5 w-full">

					<div class="flex justify-center my-3">
						<div class="relative w-1/4">
							<input type="text" id="tolakukurCapaianKegiatan" name="tolakukurCapaianKegiatan" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-l-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
							<label for="tolakukurCapaianKegiatan" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Masukkan Kode</label>
						</div>
						<div class="relative w-3/4">
							<input type="text" id="kinerjaCapaianKegiatan" name="kinerjaCapaianKegiatan" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-r-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
							<label for="kinerjaCapaianKegiatan" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Masukkan Nomenklatur</label>
						</div>
					</div>

				</div>

			</div>
		
			<div class="text-right">
				<button type="submit" class="my-5 shadow-md focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
			</div>

		</form>

	</div>

@endsection