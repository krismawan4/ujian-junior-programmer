<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <h5 ><i class="fa fa-file-alt"></i> Tambah {{ $title }}</h5>
                <Link href="{{ $url_index }}" class="btn btn-md btn-primary border-0 shadow" ><i class="fa fa-long-arrow-alt-left"></i> Kembali</Link>
            </div>
            <div class="">
                <x-splade-form :action="$url_index" method="post">
                    <x-splade-input name="nama" label="Nama"/>
                    <x-splade-input name="tempat_lahir" label="Tempat Lahir"/>
                    <x-splade-input name="tanggal_lahir" date label="Tanggal Lahir"/>
                    <x-splade-input name="penghasilan" type="number" label="Penghasilan"/>

                    <x-splade-submit class="btn btn-md btn-success mt-4"><span class="fa fa-save"></span> Simpan</x-splade-submit>
                </x-splade-form>
            </div>
        </div>
    </div>
</x-app-layout>
