<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Detail Penjualan') }}
            </h2>

            <h3 class="font-semibold text-lg text-right text-gray-400 dark:text-gray-200 leading-tight">
                Transaction date 
                <br>
                <span class="text-blue-600">
                    {{ date('M d, Y', strtotime($penjualan->created_at)) }}
                </span>
            </h3>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('penjualan.partials.customer')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="">
                    @include('penjualan.partials.penjualan')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>