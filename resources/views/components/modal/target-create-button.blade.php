<x-modal.modal-button label="Tambah" color="bg-blue-600" hover="bg-blue-500">
    <h3 class="text-lg font-medium leading-6 text-gray-800 capitalize" id="modal-title">
        Tambah target pencapaian kamu
    </h3>
    <form class="mt-4" action="{{route('user.target.store')}}" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <label class="block mt-3" for="target">
            <input type="text" name="target" id="target" placeholder="target kamu di masa depan" value="" class="block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" />
        </label>
        <div class="mt-4 sm:flex sm:items-center sm:-mx-2">
            <button type="button" @click="isOpen = false" class="w-full px-4 py-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:w-1/2 sm:mx-2 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                Batal
            </button>

            <button type="submit" class="w-full px-4 py-2 mt-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md sm:mt-0 sm:w-1/2 sm:mx-2 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                Simpan
            </button>
        </div>
    </form>
</x-modal.modal-icon>
