<x-filament::page>

    {{-- DATE SECTION --}}
    <div class="flex justify-end mb-6">
        <div class="bg-white rounded-xl shadow px-4 py-2 flex items-center gap-2">
            <span>{{ now()->format('d / m / Y') }}</span>
            <x-heroicon-o-calendar class="w-5 h-5 text-gray-500"/>
        </div>
    </div>


    {{-- HERO SECTION --}}
<div class="bg-white rounded-2xl shadow px-20 py-16 mb-16">
    <div class="grid md:grid-cols-2 items-center">

        {{-- TEXT (benar-benar ke tengah kanan) --}}
        <div class="flex justify-center md:justify-end">
            <div class="max-w-md text-left">
                <h1 class="text-3xl font-bold mb-4">
                    Selamat Datang, Admin!!
                </h1>

                <p class="text-gray-600 mb-6 leading-relaxed">
                    Admin bertanggung jawab untuk meninjau dan menyetujui 
                    pengajuan content creator yang masuk.
                </p>

                <x-filament::button size="lg">
                    Pengajuan Content Creator
                </x-filament::button>
            </div>
        </div>

        {{-- IMAGE (custom & responsive) --}}
        <div class="flex justify-center mt-8 md:mt-0">
            <img 
                src="{{ asset('images/dashboard-admin.png') }}" 
                style="width: 60%; height: auto;"
                class="object-contain"
            >
        </div>

    </div>
</div>




    {{-- STATISTIC CARDS --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">

        <div class="bg-white rounded-2xl shadow p-6 text-center">
            <x-heroicon-o-user class="w-8 h-8 mx-auto mb-3 text-gray-600"/>
            <p class="text-gray-600 mb-2">Total Akun Pelanggan</p>
            <h2 class="text-3xl font-bold">60</h2>
        </div>

        <div class="bg-white rounded-2xl shadow p-6 text-center">
            <x-heroicon-o-rectangle-group class="w-8 h-8 mx-auto mb-3 text-gray-600"/>
            <p class="text-gray-600 mb-2">Total Misi</p>
            <h2 class="text-3xl font-bold">60</h2>
        </div>

        <div class="bg-white rounded-2xl shadow p-6 text-center">
            <x-heroicon-o-bookmark class="w-8 h-8 mx-auto mb-3 text-gray-600"/>
            <p class="text-gray-600 mb-2">Total Voucher</p>
            <h2 class="text-3xl font-bold">60</h2>
        </div>

    </div>

</x-filament::page>
