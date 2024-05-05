<section>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Form Transaksi Penjualan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Masukkan data penjualan produk dengan benar") }}
                    <form wire:submit="save" class="mt-6 space-y-6">
                        <div>
                            <x-input-label for="tgl" :value="__('Tanggal Transaksi')" />
                            <x-text-input wire:model="tgl" id="tgl" name="tgl" type="date" class="mt-1 block w-full" autocomplete="off" />
                            <x-input-error :messages="$errors->get('tgl')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="produk" :value="__('Nama Produk')" />
                            <select wire:model="id_barang" class="mt-1 block w-full">
                                <option value="">Pilih Produk</option>
                                @foreach (\App\Models\Product::all() as $product)
                                    <option value="{{ $product->id }}">{{ $product->nama }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('id_barang')" class="mt-2" />
                        </div>
                
                        <div>
                            <x-input-label for="jml" :value="__('Jumlah yang terjual')" />
                            <x-text-input wire:model="jml" id="jml" name="jml" type="text" class="mt-1 block w-full" autocomplete="off" />
                            <x-input-error :messages="$errors->get('jml')" class="mt-2" />
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

