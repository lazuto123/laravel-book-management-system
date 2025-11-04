<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Detail Buku') }}
            </h2>
            <div class="flex space-x-2">
                <a href="{{ route('books.edit', $book) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                    Edit
                </a>
                <a href="{{ route('books.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Kembali
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <!-- Kolom Kiri -->
                        <div>
                            <div class="mb-4">
                                <label class="block text-gray-600 text-sm font-bold mb-2">
                                    Judul Buku
                                </label>
                                <p class="text-gray-800 text-lg font-semibold">{{ $book->title }}</p>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-600 text-sm font-bold mb-2">
                                    Pengarang
                                </label>
                                <p class="text-gray-800">{{ $book->author }}</p>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-600 text-sm font-bold mb-2">
                                    ISBN
                                </label>
                                <p class="text-gray-800 font-mono">{{ $book->isbn }}</p>
                            </div>
                        </div>

                        <!-- Kolom Kanan -->
                        <div>
                            <div class="mb-4">
                                <label class="block text-gray-600 text-sm font-bold mb-2">
                                    Tahun Terbit
                                </label>
                                <p class="text-gray-800">{{ $book->year }}</p>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-600 text-sm font-bold mb-2">
                                    Stok
                                </label>
                                <p class="text-gray-800">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full font-semibold">
                                        {{ $book->stock }} unit
                                    </span>
                                </p>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-600 text-sm font-bold mb-2">
                                    Ditambahkan
                                </label>
                                <p class="text-gray-800">{{ $book->created_at->format('d M Y, H:i') }}</p>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-600 text-sm font-bold mb-2">
                                    Terakhir Diupdate
                                </label>
                                <p class="text-gray-800">{{ $book->updated_at->format('d M Y, H:i') }}</p>
                            </div>
                        </div>

                    </div>

                    <!-- Deskripsi Full Width -->
                    @if($book->description)
                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <label class="block text-gray-600 text-sm font-bold mb-2">
                                Deskripsi
                            </label>
                            <p class="text-gray-800 leading-relaxed">{{ $book->description }}</p>
                        </div>
                    @endif

                    <!-- Tombol Aksi -->
                    <div class="mt-6 pt-6 border-t border-gray-200 flex justify-between">
                        <form action="{{ route('books.destroy', $book) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus buku ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Hapus Buku
                            </button>
                        </form>

                        <a href="{{ route('books.edit', $book) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                            Edit Buku
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>