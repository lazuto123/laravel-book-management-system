<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Buku') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <!-- Form Edit Buku -->
                    <form action="{{ route('books.update', $book) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Judul Buku -->
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">
                                Judul Buku <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="title" id="title" value="{{ old('title', $book->title) }}" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('title') border-red-500 @enderror" 
                                placeholder="Masukkan judul buku">
                            @error('title')
                                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Pengarang -->
                        <div class="mb-4">
                            <label for="author" class="block text-gray-700 text-sm font-bold mb-2">
                                Pengarang <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="author" id="author" value="{{ old('author', $book->author) }}" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('author') border-red-500 @enderror" 
                                placeholder="Masukkan nama pengarang">
                            @error('author')
                                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- ISBN -->
                        <div class="mb-4">
                            <label for="isbn" class="block text-gray-700 text-sm font-bold mb-2">
                                ISBN <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="isbn" id="isbn" value="{{ old('isbn', $book->isbn) }}" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('isbn') border-red-500 @enderror" 
                                placeholder="Contoh: 978-3-16-148410-0">
                            @error('isbn')
                                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Tahun -->
                        <div class="mb-4">
                            <label for="year" class="block text-gray-700 text-sm font-bold mb-2">
                                Tahun Terbit <span class="text-red-500">*</span>
                            </label>
                            <input type="number" name="year" id="year" value="{{ old('year', $book->year) }}" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('year') border-red-500 @enderror" 
                                placeholder="Contoh: 2024" min="1900" max="{{ date('Y') }}">
                            @error('year')
                                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Stok -->
                        <div class="mb-4">
                            <label for="stock" class="block text-gray-700 text-sm font-bold mb-2">
                                Stok <span class="text-red-500">*</span>
                            </label>
                            <input type="number" name="stock" id="stock" value="{{ old('stock', $book->stock) }}" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('stock') border-red-500 @enderror" 
                                placeholder="Jumlah stok buku" min="0">
                            @error('stock')
                                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-6">
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">
                                Deskripsi (Opsional)
                            </label>
                            <textarea name="description" id="description" rows="4" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror" 
                                placeholder="Deskripsi singkat tentang buku ini...">{{ old('description', $book->description) }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="flex items-center justify-between">
                            <a href="{{ route('books.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Batal
                            </a>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Update Buku
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>