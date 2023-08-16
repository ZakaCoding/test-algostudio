<div class="w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
    <div class="flex justify-between border-gray-200 border-b dark:border-gray-700 pb-3">
    <dl>
        <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Profit</dt>
        <dd id="data-profit" class="leading-none text-3xl font-bold text-gray-900 dark:text-white">
            Rp. 0
        </dd>
    </dl>
    <div>
        <span class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
        <svg class="w-2.5 h-2.5 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
        </svg>
        Profit rate&nbsp;<span id="profit-rate">0%</span>
        </span>
    </div>
    </div>

    <div class="grid grid-cols-2 py-3">
    <dl>
        <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Income</dt>
        <dd id="data-income" class="leading-none text-xl font-bold text-green-500 dark:text-green-400">
            Rp. 0
        </dd>
    </dl>
    <dl>
        <dt class="text-base font-normal text-gray-500 dark:text-gray-400 pb-1">Expense</dt>
        <dd id="data-expense" class="leading-none text-xl font-bold text-red-600 dark:text-red-500">
            -Rp. 0
        </dd>
    </dl>
    </div>

    <div id="bar-chart"></div>
    <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
        <div class="flex justify-between items-center pt-5">
        <!-- Button -->
        <button
            id="dropdownDefaultButton"
            data-dropdown-toggle="lastDaysdropdown"
            data-dropdown-placement="bottom"
            class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
            type="button">
            This month
            <svg class="w-2.5 m-2.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                </li>
                <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                </li>
                <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
                </li>
                <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
                </li>
                <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
                </li>
                <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 6 months</a>
                </li>
                <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last year</a>
                </li>
            </ul>
        </div>
        <a
            href="#"
            class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
            Revenue Report
            <svg class="w-2.5 h-2.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
        </a>
        </div>
    </div>
</div>

<script>
    // ApexCharts options and config
    window.addEventListener("load", function() {

        // Data from API
        fetch('/api/product/statistics', {
            method : 'GET',
            headers : {
                'Content-Type' : 'application/json'
            },
        })
        .then(response => response.json())
        .then(data => {
            // Handle response from laravel api
            let rest = barData(data.data)
            let profit = parseInt(data.data.sales.income[0].total_sales) - parseInt(data.data.sales.expense[0].total_expense)
            const income = data.data.sales.income[0].total_sales;
            const expense = data.data.sales.expense[0].total_expense;
            const profitRate = ((income - expense) / income) * 100;

            // change income and expense
            document.querySelector('#data-income').innerText = formatIDR(income)
            document.querySelector('#data-expense').innerText = "-" + formatIDR(expense)
            document.querySelector('#data-profit').innerText = formatIDR(profit)
            document.querySelector('#profit-rate').innerText = profitRate.toFixed(2) + '%'

            let options = {
                series: [
                {
                    name: "Income",
                    color: "#31C48D",
                    data: rest.total,
                },
                ],
                chart: {
                sparkline: {
                    enabled: false,
                },
                type: "bar",
                width: "100%",
                height: 400,
                toolbar: {
                    show: false,
                }
                },
                fill: {
                opacity: 1,
                },
                plotOptions: {
                    bar: {
                        horizontal: true,
                        columnWidth: "100%",
                        borderRadiusApplication: "end",
                        borderRadius: 6,
                        dataLabels: {
                            position: "top",
                        },
                    },
                },
                legend: {
                    show: true,
                    position: "bottom",
                },
                dataLabels: {
                    enabled: false,
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    formatter: function (value) {
                        return value
                    }
                },
                xaxis: {
                    labels: {
                        show: true,
                        style: {
                            fontFamily: "Inter, sans-serif",
                            cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                        },
                        formatter: function(value) {
                            return value
                        }
                    },
                    categories: rest.category,
                    axisTicks: {
                        show: false,
                    },
                    axisBorder: {
                        show: false,
                    },
                },
                yaxis: {
                    labels: {
                        show: true,
                        style: {
                            fontFamily: "Inter, sans-serif",
                            cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                        }
                    }
                },
                grid: {
                    show: true,
                    strokeDashArray: 4,
                    padding: {
                        left: 2,
                        right: 2,
                        top: -20
                    },
                },
                fill: {
                    opacity: 1,
                }
            }
    
            if(document.getElementById("bar-chart") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("bar-chart"), options);
                chart.render();
            }
        })
        .catch(error => {
            console.error(error)
        });
    });

    function barData(data)
    {
        let totals = [];
        let categories = [];

        for(let i = 0; i < data.statistics.length; i++)
        {
            totals.push(data.statistics[i].total);
        }

        for(let i = 0; i < data.statistics.length; i++)
        {
            categories.push(data.statistics[i].categories);
        }

        return {
            'total' : totals,
            'category' : categories
        };
    }

    function formatIDR(number) {
        const formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        });

        return formatter.format(number);
    }
</script>