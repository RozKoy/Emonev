@extends('layouts.template')

@section('title', 'DPA | Emonev')
@section('location', 'DPA \\ Tambah Sub DPA')

@section('content')

	<div class="bg-white rounded-lg shadow p-4">

		<div class="flex items-center mb-6">
			<a href="/dpa" class="flex items-center shadow-md focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-xs w-fit p-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
			<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /> </svg>
			Kembali
			</a>
			<h2 class="text-gray-500 font-semibold ml-auto">TAMBAH <span class="bg-pink-500 font-normal rounded-lg py-0.5 px-1.5 text-white">DPA</span></h2>
		</div>

		<form>
		
			<div class="flex flex-wrap text-sm w-full">
				<div class="rounded-lg shadow p-2.5 w-full sm:max-w-md mx-auto">

					<h2 class="font-semibold my-2">SUB - KEGIATAN</h2>

					<div class="relative w-full my-3">
						<div class="flex">
						  <span class="w-1/4 justify-center bg-gray-50 inline-flex items-center px-2 text-xs text-gray-500 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
						    DPA
						  </span>
						  <select name="subKegiatanId" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
							  <option selected>Pilih DPA</option>
							  <option value="US">United States</option>
							  <option value="CA">Canada</option>
							  <option value="FR">France</option>
							  <option value="DE">Germany</option>
							</select>
						</div>
					</div>
<hr>
					<div class="relative w-full my-3">
						<div class="flex">
						  <span class="w-1/4 justify-center bg-gray-50 inline-flex items-center px-2 text-xs text-gray-500 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
						    SUB - KEGIATAN
						  </span>
						  <select name="subKegiatanId" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
							  <option selected>Pilih Sub - Kegiatan</option>
							  <option value="US">United States</option>
							  <option value="CA">Canada</option>
							  <option value="FR">France</option>
							  <option value="DE">Germany</option>
							</select>
						</div>
					</div>

					<div class="relative w-full my-3">
						<div class="flex">
						  <span class="w-1/4 justify-center bg-gray-50 inline-flex items-center px-2 text-xs text-gray-500 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
						    SUMBER DANA
						  </span>
						  <select name="sumberDanaId" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
							  <option selected>Pilih Sumber Dana</option>
							  <option value="US">United States</option>
							  <option value="CA">Canada</option>
							  <option value="FR">France</option>
							  <option value="DE">Germany</option>
							</select>
						</div>
					</div>

					<div class="relative w-full my-3">
						<input type="text" id="lokasi" name="lokasi" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" "/>
						<label for="lokasi" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Masukkan Lokasi</label>
					</div>

<hr>
					<div class="flex justify-center my-3">
						<div class="relative m-auto">
							<input type="text" id="" name="" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
							<label for="" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Masukkan Indikator</label>
						</div>
						<div class="relative m-auto">
							<input type="text" id="target" name="target" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
							<label for="target" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Masukkan Target</label>
						</div>
					</div>
<hr>
					<div class="relative w-full my-3">
						<input type="text" id="waktuPelaksanaan" name="waktuPelaksanaan" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" "/>
						<label for="waktuPelaksanaan" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Masukkan Waktu Pelaksanaan</label>
					</div>

					<div class="relative w-full my-3">
						<input type="text" id="keterangan" name="keterangan" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" "/>
						<label for="keterangan" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Masukkan Keterangan</label>
					</div>

				</div>
			</div>
		
			<div class="text-right">
				<button type="submit" class="my-5 shadow-md focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
			</div>

		</form>

	</div>

@endsection