@extends('layouts.template')

@section('title', 'Tahun | Emonev')
@section('location', 'Tahun')

@section('content')

    <div class="bg-white rounded-lg shadow p-4">
        <div class="flex text-sm items-center">
            <h2 class="text-gray-500 font-semibold">DAFTAR <span
                    class="bg-pink-500 font-normal rounded-lg py-0.5 px-1.5 text-white">TAHUN</span></h2>
            <a href="/tahun-tambah"
                class="flex items-center focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg px-3 py-1.5 ml-auto dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 shadow-md">+
                Tambah</a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400 text-center">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            TAHUN
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="p-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                            2020
                        </th>
                        <td class="flex flex-row items-center justify-center">
                            <a href="#"
                                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-xs p-2 m-1 dark:focus:ring-yellow-900 shadow-md">Ubah</a>
                            <a href="#"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs p-2 m-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 shadow-md">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

@endsection
