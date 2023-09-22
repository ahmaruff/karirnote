@props(['icon', 'iconcolor', 'iconcolorhover'])

<div x-data="{ isOpen: false }" class="relative flex justify-center">

    <button @click="isOpen = true" class="">
        <i {{ $attributes->merge(['class' => 'text-lg bi '.$icon.' '.$iconcolor.' hover:'.$iconcolorhover]) }}></i>
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
            <span class="hidden sm:inline-block sm:h-screen sm:align-middle" aria-hidden="true">&#8203;</span>

            <div class="relative inline-block p-3 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:w-full sm:max-w-sm sm:p-6 sm:align-middle">
                <div class="flex flex-row justify-end">
                    <button type="button" @click="isOpen = false" class="p-3 text-sm font-medium text-gray-700 ">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
