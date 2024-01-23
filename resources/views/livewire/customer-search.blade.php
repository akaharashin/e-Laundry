<!-- resources/views/livewire/customer-search.blade.php -->

<div>
    <input wire:model="searchTerm" type="text" placeholder="Cari pelanggan...">

    <ul class="">
        @forelse($results as $customer)
            <li>{{ $customer->nama }} - {{ $customer->idCustomer }}</li>
        @empty
            <li>Tidak ada hasil ditemukan.</li>
        @endforelse
    </ul>
</div>
