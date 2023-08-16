<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Customer Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Data information from customer.") }}
        </p>
    </header>

    <form class="mt-6 space-y-6">
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="$penjualan->name" required autofocus autocomplete="name" readonly />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="$penjualan->address" required autofocus autocomplete="name" readonly />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
    </form>
</section>