<x-modal.modal-button label="Hapus Akun" color="bg-red-600" hover="bg-red-500">
    <div>
        <div class="flex items-center justify-center">
            <i class="text-2xl text-rose-500 bi bi-trash"></i>
        </div>

        <div class="mt-2 text-center">
            <h3 class="text-lg font-medium leading-6 text-gray-800 capitalize" id="modal-title">
                Yakin mau menghapus akun?
            </h3>
            <p class="mt-2 text-sm text-gray-500">
                Ketika akunmu dihapus, seluruh data yang berkaitan dengan akunmu akan terhapus selamanya. Tolong isi password anda untuk mengonfirmasi bahwa kamu memang ingin menghapus akun
            </p>
        </div>
    </div>
    <form action="{{route('profile.destroy')}}" method="post">
        <div class="w-full my-3">
            <label class="text-gray-700" name="password">Masukkan Password</label>
            <input type="password" name="password" value="" required class="block w-full px-4 py-2 mt-2 text-gray-700 bg-gray-100 border border-gray-100 rounded-md md: focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:bg-white">
        </div>
        <div class="mt-4 sm:flex sm:items-center sm:-mx-2">
            <button type="button" @click="isOpen = false" class="w-full px-4 py-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:w-1/2 sm:mx-2 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                Batal
            </button>
            @csrf
            @method('delete')
            <button type="submit" class="w-full px-4 py-2 mt-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform rounded-md bg-rose-600 sm:mt-0 sm:w-1/2 sm:mx-2 hover:bg-rose-500 focus:outline-none focus:ring focus:ring-rose-300 focus:ring-opacity-40">
                Hapus
            </button>
        </div>
    </form>
</x-modal.modal-button>
