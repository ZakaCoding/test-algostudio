<section>
    <header class="mb-5">
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Detail Products') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("List all product data from sales") }}
        </p>
    </header>

    @include('components.tables.penjualan-table-detail')

</section>