<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <h5 ><i class="fa fa-table"></i> {{ $title }}</h5>
                <Link href="{{ $url_create }}" class="btn btn-md btn-primary border-0 shadow">
                    <span class="fa fa-plus-circle"></span>
                Tambah</Link>
            </div>
            <div class="mt-4">
                <x-splade-table :for="$models" striped>
                    <x-splade-cell number use="$number">
                        <span>{{ $number++ }}</span>
                    </x-splade-cell>
                    <x-splade-cell action use="$url_index">
                        <Link class="btn btn-sm btn-info mr-2" href="{{ $url_index }}/{{ $item->id }}/edit"> <i class="fa fa-pencil-alt"></i></Link>
                        <Link method="DELETE" confirm="Yakin ingin menghapus?"
                        cancel-button="Tidak!"
                        confirm-button="Iya!"
                        preserve-scroll
                        class="btn btn-sm btn-danger" href="{{ $url_index }}/{{ $item->id }}"><i class="fa fa-trash"></i></Link>
                    </x-splade-cell>
                    <x-slot:empty-state>
                        <p>No data!</p>
                    </x-slot>
                </x-splade-table>
            </div>
        </div>
    </div>
</x-app-layout>
