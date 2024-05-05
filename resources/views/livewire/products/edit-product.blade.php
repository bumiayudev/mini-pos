<section>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Masukkan data produk baru dengan benar") }}
                    <form wire:submit="update" class="mt-6 space-y-6">
                        <div>
                            <x-input-label for="nama" :value="__('Nama Produk')" />
                            <x-text-input wire:model="nama" id="nama" name="nama" type="text" class="mt-1 block w-full" value="{{ $product->nama }}"/>
                            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="jenis" :value="__('Jenis Produk')" />
                            <x-text-input wire:model="jenis" id="jenis" name="jenis" type="text" class="mt-1 block w-full" value="{{ $product->jenis }}"/>
                            <x-input-error :messages="$errors->get('jenis')" class="mt-2" />
                        </div>
                
                        <div>
                            <x-input-label for="stok" :value="__('Stok')" />
                            <x-text-input wire:model="stok" id="stok" name="stok" type="text" class="mt-1 block w-full" value="{{ $product->stok }}" />
                            <x-input-error :messages="$errors->get('stok')" class="mt-2" />
                        </div>
                        <div>
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

