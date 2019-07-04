<form class="w-full mx-auto py-8 px-4 relative">

    <div class="flex flex-wrap mb-5 text-sm">
        <div class="w-full md:w-1/4 px-1 mb-6 md:mb-0">
            <label class="block text-gray-700 font-bold mb-2 text-sm tracking-wide uppercase ml-5" for="pickup-address">
                Pickup Address
            </label>
            <div class="flex flex-row">
                <div class="inline-block relative w-full">
                    <input
                        class="shadow appearance-none border rounded w-full py-4 px-3 pl-12 bg-gray-200 text-lg text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="pickup-address" type="text" placeholder="Pickup Address">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-2 text-gray-700">
                        <img src="images/icon/pick.svg" alt="" class="inline-block h-6">
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/4 px-1 mb-6 md:mb-0">
            <label class="block text-gray-700 font-bold mb-2 text-sm tracking-wide uppercase ml-5"
                for="delivery-address">
                Delivery Address
            </label>
            <div class="flex flex-row">
                <div class="inline-block relative w-full">
                    <input
                        class="shadow appearance-none border rounded w-full py-4 px-3 pl-12 bg-gray-200 text-lg text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="delivery-address" type="text" placeholder="Delivery Address">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-2 text-gray-700">
                        <img src="images/icon/delivery.svg" alt="" class="inline-block h-6">
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/4 px-1 mb-6 md:mb-0">
            <label class="block text-gray-700 font-bold mb-2 text-sm tracking-wide uppercase ml-5" for="carrier">
                Select Carrier
            </label>
            <div class="inline-block relative w-full">
                <select
                    class="shadow appearance-none border rounded w-full py-4 px-3 pl-12 bg-gray-200 text-lg text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="carrier">
                    <option value="bike">Bike (up to 50kg)</option>
                    <option value="tricycle">Tricycle (up to 300kg)</option>
                    <option value="van">Mini Van (up to 1000kg)</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0  flex items-center px-2 text-gray-700">
                    <img src="images/icon/arrow-down-sign-to-navigate.svg" alt="" class="inline-block h-4">
                </div>
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-2 text-gray-700">
                    <img src="images/icon/carrier.svg" alt="" class="inline-block h-6">
                </div>
            </div>
        </div>

        <div class="flex-1">
            <div class="w-full mx-auto px-3 my-4 md:mb-0 text-center max-w-xs">
                <button
                    class="w-full lg:mt-4 bg-orange-50 text-white py-2 px-4 border-solid border-4 font-bold text-xl rounded-lg leading-tight border-orange-50 shadow-lg hover:bg-transparent hover:text-gray-900 hover:text-2xl">
                    Get Estimate
                </button>
            </div>
        </div>
    </div>
</form>
