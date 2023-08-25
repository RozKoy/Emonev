@extends('layouts.template')

@section('title', 'DPA | Emonev')
@section('location', 'DPA \\ Tambah Dokumen Pelaksanaan Anggaran')

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

					<h2 class="font-semibold my-3">INFORMASI DPA</h2>

					<div class="relative w-full my-3">
						<input type="text" id="noDpa" name="noDpa" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
						<label for="noDpa" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Masukkan Nomor DPA</label>
					</div>

					<div class="relative w-full my-3">
						<div class="flex">
						  <span class="w-1/4 justify-center bg-gray-50 inline-flex items-center px-2 text-xs text-gray-500 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
						    DINAS
						  </span>
						  <select name="dinas" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
							  <option selected>Pilih Dinas</option>
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
						    TAHUN
						  </span>
						  <select name="tahun" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
							  <option selected>Pilih Tahun</option>
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
						    URUSAN
						  </span>
						  <select name="urusan" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
							  <option selected>Pilihan Urusan</option>
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
						    BIDANG
						  </span>
						  <select name="bidang" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
							  <option selected>Pilih Bidang Urusan</option>
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
						    PROGRAM
						  </span>
						  <select name="program" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
							  <option selected>Pilih Program</option>
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
						    KEGIATAN
						  </span>
						  <select name="kegiatan" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
							  <option selected>Pilih Kegiatan</option>
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
						    ORGANISASI
						  </span>
						  <select name="organisasi" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
							  <option selected>Pilih Organisasi</option>
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
						    UNIT
						  </span>
						  <select name="unit" class="border border-gray-300 text-gray-500 text-sm rounded-r-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
							  <option selected>Pilih Unit</option>
							  <option value="US">United States</option>
							  <option value="CA">Canada</option>
							  <option value="FR">France</option>
							  <option value="DE">Germany</option>
							</select>
						</div>
					</div>
<hr>
					<div class="flex justify-center my-3">
						<div class="relative m-auto">
							<input type="text" id="indikator" name="indikator" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
							<label for="indikator" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Masukkan Indikator</label>
						</div>
						<div class="relative m-auto">
							<input type="text" id="" name="" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
							<label for="" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Masukkan Target</label>
						</div>
					</div>
<hr>
					<div class="flex justify-center my-3">
						<div class="relative w-1/2">
							<input type="text" id="tolakukurCapaianKegiatan" name="tolakukurCapaianKegiatan" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-l-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
							<label for="tolakukurCapaianKegiatan" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Tolak Ukur Capaian Kegiatan</label>
						</div>
						<div class="relative w-1/2">
							<input type="text" id="kinerjaCapaianKegiatan" name="kinerjaCapaianKegiatan" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-r-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
							<label for="kinerjaCapaianKegiatan" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Kinerja Capaian Kegiatan</label>
						</div>
					</div>

					<div class="flex justify-center my-3">
						<div class="relative w-1/2">
							<input type="text" id="tolakukurMasukan" name="tolakukurMasukan" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-l-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
							<label for="tolakukurMasukan" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Tolak Ukur Masukan</label>
						</div>
						<div class="relative w-1/2">
							<input type="text" id="kinerjaMasukan" name="kinerjaMasukan" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-r-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
							<label for="kinerjaMasukan" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Kinerja Masukan</label>
						</div>
					</div>

					<div class="flex justify-center my-3">
						<div class="relative w-1/2">
							<input type="text" id="tolakukurKeluaran" name="tolakukurKeluaran" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-l-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
							<label for="tolakukurKeluaran" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Tolak Ukur Keluaran</label>
						</div>
						<div class="relative w-1/2">
							<input type="text" id="kinerjaKeluaran" name="kinerjaKeluaran" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-r-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
							<label for="kinerjaKeluaran" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Kinerja Keluaran</label>
						</div>
					</div>

					<div class="flex justify-center my-3">
						<div class="relative w-1/2">
							<input type="text" id="tolakukurHasil" name="tolakukurHasil" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-l-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
							<label for="tolakukurHasil" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Tolak Ukur Hasil</label>
						</div>
						<div class="relative w-1/2">
							<input type="text" id="kinerjaHasil" name="kinerjaHasil" class="block p-2.5 w-full text-sm text-gray-900 bg-transparent rounded-r-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
							<label for="kinerjaHasil" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Kinerja Hasil</label>
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