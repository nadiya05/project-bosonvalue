<x-filament::page>

    <div class="max-w-7xl mx-auto px-6 py-14 space-y-16">

        {{-- DATE --}}
        <div class="flex justify-end">
            <input type="date"
                class="border border-gray-300 rounded-l px-4 py-2 text-sm bg-white shadow-sm focus:ring-2 focus:ring-orange-400 focus:border-orange-400 transition">
        </div>

        {{-- HERO --}}
        <div class="bg-white rounded-3xl border border-gray-200 px-12 py-14 shadow-sm">

            <div class="flex items-center justify-between gap-16">

                {{-- LEFT TEXT --}}
                <div class="flex-1 pl-6">

                    <h2 class="text-2xl font-semibold mb-4">
                        Selamat Datang, {{ filament()->auth()->user()->name }}!!
                    </h2>

                    <p class="text-gray-600 text-base mb-8 leading-relaxed max-w-md">
                        Admin bertanggung jawab untuk meninjau dan menyetujui
                        pengajuan content creator yang masuk serta memastikan
                        sistem berjalan dengan aman dan terstruktur.
                    </p>

                    <x-filament::button
                        size="md"
                        class="px-6 py-2 text-sm bg-orange-500 hover:bg-orange-600 transition">
                        Pengajuan Content Creator
                    </x-filament::button>

                </div>

                {{-- RIGHT IMAGE --}}
                <div class="flex-1 flex justify-end">
                    <img src="{{ asset('images/dashboard-admin.png') }}"
                        class="max-w-[340px] w-full object-contain">
                </div>

            </div>

        </div>

        {{-- STATS --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">


            {{-- CARD 1 --}}
            <div class="bg-white border border-gray-200 rounded-3xl px-10 py-12 shadow-sm hover:shadow-md transition">

                <div class="flex items-center gap-3 mb-6">
                    <x-heroicon-o-user class="w-7 h-7 text-gray-700"/>
                    <p class="text-base font-medium">Total Akun Pelanggan</p>
                </div>

                <h2 class="text-4xl font-semibold text-center">60</h2>
            </div>

            {{-- CARD 2 --}}
            <div class="bg-white border border-gray-200 rounded-3xl px-10 py-12 shadow-sm hover:shadow-md transition">

                <div class="flex items-center gap-3 mb-6">
                    <x-heroicon-o-clipboard-document-list class="w-7 h-7 text-gray-700"/>
                    <p class="text-base font-medium">Total Misi</p>
                </div>

                <h2 class="text-4xl font-semibold text-center">60</h2>
            </div>

            {{-- CARD 3 --}}
            <div class="bg-white border border-gray-200 rounded-3xl px-10 py-12 shadow-sm hover:shadow-md transition">

                <div class="flex items-center gap-3 mb-6">
                    <x-heroicon-o-ticket class="w-7 h-7 text-gray-700"/>
                    <p class="text-base font-medium">Total Voucher</p>
                </div>

                <h2 class="text-4xl font-semibold text-center">60</h2>
            </div>

        </div>

    </div>

</x-filament::page>
