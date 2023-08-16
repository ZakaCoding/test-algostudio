{{-- Table --}}
<div class="relative overflow-x-auto sm:rounded-lg">
    <table class="w-full text-sm text-left mb-5 text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3" rowspan="1">
                    <strong>#</strong>
                </th>
                <th scope="col" class="px-6 py-3">
                    Product Code
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Product Total
                </th>
                <th scope="col" class="px-6 py-3">
                    Total Price
                </th>
            </tr>
        </thead>
        <tbody>
            <span hidden>{{ $i = 1 }}</span>
            @foreach ($detail as $data)
                <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $i++ }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $data->product_code }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $data->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $data->category }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $data->product_total }}
                    </td>
                    <td class="px-6 py-4">
                        {{ 'Rp.' . number_format($data->total_price, 2) }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <div class="block">
            <h2 class="font-normal text-lg text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Total Sales') }}
            </h2>

            <strong>
                {{ 'Rp.' . number_format($penjualan->total_sales, 2) }}
            </strong>
        </div>
    </div>
</div>