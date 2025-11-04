<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Daftar Buku') }}
            </h2>
            <a href="{{ route('books.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Tambah Buku Baru
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Notifikasi Success -->
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    @if($books->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full table-auto">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="px-4 py-2 text-left">No</th>
                                        <th class="px-4 py-2 text-left">Judul Buku</th>
                                        <th class="px-4 py-2 text-left">Pengarang</th>
                                        <th class="px-4 py-2 text-left">ISBN</th>
                                        <th class="px-4 py-2 text-left">Tahun</th>
                                        <th class="px-4 py-2 text-left">Stok</th>
                                        <th class="px-4 py-2 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($books as $index => $book)
                                        <tr class="border-b hover:bg-gray-50">
                                            <td class="px-4 py-3">{{ $books->firstItem() + $index }}</td>
                                            <td class="px-4 py-3 font-medium">{{ $book->title }}</td>
                                            <td class="px-4 py-3">{{ $book->author }}</td>
                                            <td class="px-4 py-3">{{ $book->isbn }}</td>
                                            <td class="px-4 py-3">{{ $book->year }}</td>
                                            <td class="px-4 py-3">
                                                <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded">
                                                    {{ $book->stock }}
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 text-center">
                                                <div class="flex justify-center space-x-2">
                                                    <!-- Tombol Detail -->
                                                    <a href="{{ route('books.show', $book) }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-3 rounded text-sm">
                                                        Detail
                                                    </a>
                                                    
                                                    <!-- Tombol Edit -->
                                                    <a href="{{ route('books.edit', $book) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded text-sm">
                                                        Edit
                                                    </a>
                                                    
                                                    <!-- Tombol Delete -->
                                                    <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus buku ini?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded text-sm">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="mt-4">
                            {{ $books->links() }}
                        </div>
                    @else
                        <div class="text-center py-8">
                            <p class="text-gray-500 text-lg mb-4">Belum ada data buku.</p>
                            <a href="{{ route('books.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Tambah Buku Pertama
                            </a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>