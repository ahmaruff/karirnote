<x-modal.modal-icon icon="bi-trash" iconcolor="text-rose-400" iconcolorhover="text-rose-500">
    <div>
        <div class="flex items-center justify-center">
            <i class="text-2xl text-rose-500 bi bi-trash"></i>
        </div>

        <div class="mt-2 text-center">
            <h3 class="text-lg font-medium leading-6 text-gray-800 capitalize" id="modal-title">Hapus Target</h3>
            <p class="mt-2 text-sm text-gray-500">
                Yakin mau menghapus target ini?
            </p>
        </div>
    </div>
    <div class="mt-4 sm:flex sm:items-center sm:-mx-2">
        <button type="button" @click="isOpen = false" class="w-full px-4 py-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:w-1/2 sm:mx-2 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
            Batal
        </button>

        <button type="button" class="w-full px-4 py-2 mt-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform rounded-md bg-rose-600 sm:mt-0 sm:w-1/2 sm:mx-2 hover:bg-rose-500 focus:outline-none focus:ring focus:ring-rose-300 focus:ring-opacity-40">
            Hapus
        </button>
    </div>
</x-modal.modal-icon>
