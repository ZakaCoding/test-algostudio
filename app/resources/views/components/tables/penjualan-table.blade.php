<div class="bg-white mb-3 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 mb-2 font-bold text-gray-900 dark:text-gray-100">
        {{ __("Daftar 10 Penjualan Terakhir") }}
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
                        Customer Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total Sales
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <span hidden>{{ $i = 1 }}</span>
                @foreach ($penjualan as $data)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $i++ }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $data->address }}
                        </td>
                        <td class="px-6 py-4">
                            {{ 'Rp.' . number_format($data->total_sales, 2) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ date("M d, Y", strtotime($data->created_at)) }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('penjualan.detail', ['id' => $data->id]) }}" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-3">
            {{ $penjualan->links() }}
        </div>
    </div>

</div>