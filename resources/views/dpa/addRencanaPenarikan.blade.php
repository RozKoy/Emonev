@extends('layouts.template')

@section('title', 'DPA | Emonev')
@section('location', 'DPA \\ Tambah Rencana Penarikan')

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

					<h2 class="font-semibold my-2">RENCANA PENARIKAN</h2>

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
						    JANUARI
						  </span>
						  <input type="text" name="januari" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
						</div>
					</div>

					<div class="relative w-full my-3">
						<div class="flex">
						  <span class="w-1/4 justify-center bg-gray-50 inline-flex items-center px-2 text-xs text-gray-500 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
						    FEBRUARI
						  </span>
						  <input type="text" name="februari" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
						</div>
					</div>

					<div class="relative w-full my-3">
						<div class="flex">
						  <span class="w-1/4 justify-center bg-gray-50 inline-flex items-center px-2 text-xs text-gray-500 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
						    MARET
						  </span>
						  <input type="text" name="maret" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
						</div>
					</div>

					<div class="relative w-full my-3">
						<div class="flex">
						  <span class="w-1/4 justify-center bg-gray-50 inline-flex items-center px-2 text-xs text-gray-500 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
						    APRIL
						  </span>
						  <input type="text" name="april" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
						</div>
					</div>

					<div class="relative w-full my-3">
						<div class="flex">
						  <span class="w-1/4 justify-center bg-gray-50 inline-flex items-center px-2 text-xs text-gray-500 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
						    MEI
						  </span>
						  <input type="text" name="mei" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
						</div>
					</div>

					<div class="relative w-full my-3">
						<div class="flex">
						  <span class="w-1/4 justify-center bg-gray-50 inline-flex items-center px-2 text-xs text-gray-500 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
						    JUNI
						  </span>
						  <input type="text" name="juni" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
						</div>
					</div>

					<div class="relative w-full my-3">
						<div class="flex">
						  <span class="w-1/4 justify-center bg-gray-50 inline-flex items-center px-2 text-xs text-gray-500 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
						    JULI
						  </span>
						  <input type="text" name="juli" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
						</div>
					</div>

					<div class="relative w-full my-3">
						<div class="flex">
						  <span class="w-1/4 justify-center bg-gray-50 inline-flex items-center px-2 text-xs text-gray-500 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
						    AGUSTUS
						  </span>
						  <input type="text" name="agustus" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
						</div>
					</div>

					<div class="relative w-full my-3">
						<div class="flex">
						  <span class="w-1/4 justify-center bg-gray-50 inline-flex items-center px-2 text-xs text-gray-500 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
						    SEPTEMBER
						  </span>
						  <input type="text" name="september" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
						</div>
					</div>

					<div class="relative w-full my-3">
						<div class="flex">
						  <span class="w-1/4 justify-center bg-gray-50 inline-flex items-center px-2 text-xs text-gray-500 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
						    OKTOBER
						  </span>
						  <input type="text" name="oktober" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
						</div>
					</div>

					<div class="relative w-full my-3">
						<div class="flex">
						  <span class="w-1/4 justify-center bg-gray-50 inline-flex items-center px-2 text-xs text-gray-500 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
						    NOVEMBER
						  </span>
						  <input type="text" name="november" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
						</div>
					</div>

					<div class="relative w-full my-3">
						<div class="flex">
						  <span class="w-1/4 justify-center bg-gray-50 inline-flex items-center px-2 text-xs text-gray-500 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
						    DESEMBER
						  </span>
						  <input type="text" name="desember" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
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