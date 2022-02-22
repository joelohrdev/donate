<div>
    <form class="space-y-8 divide-y divide-gray-200 mt-5 pt-5 border-t border-gray-300" method="POST" wire:submit.prevent="createDonation">
        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
            <div class="sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700"> First name </label>
                <div class="mt-1">
                    <input wire:model.defer="first_name" type="text" name="first-name" id="first-name" autocomplete="given-name" class="shadow-sm focus:ring-orange-500 focus:border-orange-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
                @error('first_name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700"> Last name </label>
                <div class="mt-1">
                    <input wire:model.defer="last_name" type="text" name="last-name" id="last-name" autocomplete="family-name" class="shadow-sm focus:ring-orange-500 focus:border-orange-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
                @error('last_name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="sm:col-span-6">
                <label for="email" class="block text-sm font-medium text-gray-700"> Email address </label>
                <div class="mt-1">
                    <input wire:model.defer="email" id="email" name="email" type="email" autocomplete="email" class="shadow-sm focus:ring-orange-500 focus:border-orange-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="sm:col-span-6">
                <label for="location" class="block text-sm font-medium text-gray-700">Player</label>
                <select wire:model.defer="player" id="location" name="location" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm rounded-md">
                    <option></option>
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                </select>
                @error('player')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="sm:col-span-6">
                <label for="price" class="block text-sm font-medium text-gray-700">Donation Amount</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm"> $ </span>
                    </div>
                    <input wire:model.defer="amount" type="text" name="price" id="price" class="focus:ring-orange-500 focus:border-orange-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0.00" aria-describedby="price-currency">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm" id="price-currency"> USD </span>
                    </div>
                </div>
                @error('amount')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="sm:col-span-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">Submit</button>
            </div>

        </div>
    </form>
</div>
