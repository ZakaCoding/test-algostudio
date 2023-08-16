<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Charts penjualan --}}
            <div class="mb-3 dark:bg-gray-800 overflow-hidden">
                <div class="p-6 mb-2 text-lg font-bold text-gray-900 dark:text-gray-100">
                    {{ __("Grafik Penjualan Bulan ini") }}
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        @include('components.charts.penjualan-chart-bar')
                    </div>
                    <div>
                        @include('components.charts.penjualan-chart-pie')
                    </div>
                </div>
            </div>

            <span class="my-5 p-5 w-max"></span>

            {{-- Table penjualan --}}
            @include('components.tables.penjualan-table')
        </div>
    </div>
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>