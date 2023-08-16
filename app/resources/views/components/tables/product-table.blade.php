<div class="bg-white mb-3 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 mb-2 font-bold text-gray-900 dark:text-gray-100">
        {{ __("List Product") }}
    </div>

    {{-- Table --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
                        Selling Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Purchase Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stock
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                </tr>
            </thead>
            <tbody>
                <span hidden>{{ $i = 1 }}</span>
                @foreach ($product as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $i++ }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->product_code }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->selling_price }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->purchase_price }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->stock }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->category }}
                        </td>
                        <td class="px-6 py-4">
                            {{ date("M d, Y", strtotime($item->created_at)) }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>