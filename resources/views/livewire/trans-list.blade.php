<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Produk') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('trans.create') }}" class="text-indigo-400"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>Tambah</a>
                    <table class="table-auto border-collapse border border-slate-400 w-full">
                        <thead class="bg-grey-400 text-black">
                            <tr>
                                <th class="border border-slate-300">No</th>
                                <th class="border border-slate-300">Nama Barang</th>
                                <th class="border border-slate-300">Stok</th>
                                <th class="border border-slate-300">Jumlah Yang Terjual</th>
                                <th class="border border-slate-300">Tanggal</th>
                                <th class="border border-slate-300">Jenis Barang</th>
                                <th class="border border-slate-300">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($transactions)
                            @foreach ($transactions as $trans)
                            <tr>
                                <td class="border border-slate-300 text-center">{{ $loop->iteration }}</td>
                                <td class="border border-slate-300 text-center">{{ $trans->nama }}</td>
                                <td class="border border-slate-300 text-center">{{ $trans->stok }}</td>
                                <td class="border border-slate-300 text-center">{{ $trans->jml }}</td>
                                <td class="border border-slate-300 text-center">{{ $trans->tgl }}</td>
                                <td class="border border-slate-300 text-center">{{ $trans->jenis }}</td>
                                <td class="border border-slate-300 text-center"><a href="{{ route('trans.edit', $trans->id) }}" class="decoration-blue-500">Edit</a> | <button
                type="button"
                wire:click="destroy({{ $trans->id }})"
                wire:confirm="Are you sure you want to delete this post?"
            >
                Hapus
            </button></td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="4">Data masih kosong...</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
