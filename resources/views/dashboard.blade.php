<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold mb-4">Selamat Datang di Sistem Manajemen Buku!</h3>
                    <p class="mb-4">Anda berhasil login ke sistem.</p>
                    
                    <div class="mt-6">
                        <a href="{{ route('books.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Kelola Buku
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>