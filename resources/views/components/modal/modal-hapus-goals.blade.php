<div x-data="{ isOpen: false }" class="relative flex justify-center">
    <button @click="isOpen = true" class="">
        <i class="text-lg text-rose-400 bi bi-trash hover:text-rose-500"></i>
    </button>

    <div x-show="isOpen"
        x-transition:enter="transition duration-300 ease-out"
        x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100"
        x-transition:leave="transition duration-150 ease-in"
        x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
        x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
        class="fixed inset-0 z-10 overflow-y-auto"
        aria-labelledby="modal-title" role="dialog" aria-modal="true"
    >
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl rtl:text-right sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
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
            </div>
        </div>
    </div>
</div>
