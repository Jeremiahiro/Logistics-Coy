<form class="w-full mx-auto py-8 px-4">

    <div class="flex flex-wrap justify-around max-w-md text-sm text-gray-900">
        <div class="flex item-center mb-5">
            <input type="radio" name="radio" id="radio2" class="hidden">
            <label for="radio2" class="flex item-center cursor-pointer">
                <span class="w-4 h-4 mr-2 rounded-full border border-gray-700 flex-no-shrink"></span>One Way
            </label>
        </div>

        <div class="flex item-center mb-5">
            <input type="radio" name="radio" id="radio1" class="hidden" checked>
            <label for="radio1" class="flex item-center cursor-pointer">
                <span class="w-4 h-4 mr-2 rounded-full border border-gray-700 flex-no-shrink"></span>Round Trip
            </label>
        </div>

        <div class="flex item-center mb-5">
            <input type="radio" name="radio" id="radio3" class="hidden">
            <label for="radio3" class="flex item-center cursor-pointer">
                <span class="w-4 h-4 mr-2 rounded-full border border-gray-700 flex-no-shrink"></span>Multi City
            </label>
        </div>
    </div>

    <div class="flex flex-wrap mb-5 text-gray-900">
        <div class="w-full md:w-1/5 px-1 mb-6 md:mb-0">
            <label class="block font-bold mb-2 tracking-wide text-sm uppercase ml-5" for="departure_city">
                From
            </label>
            <div class="flex flex-row">
                <div class="inline-block relative w-full">
                    <input
                        class="shadow appearance-none border rounded w-full py-4 px-3 pl-12 bg-gray-200 text-lg text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="from" type="text" placeholder="Select City">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-2 text-gray-700">
                        <img src="images/icon/departure.svg" alt="" class="inline-block h-6">
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/5 px-1 mb-6 md:mb-0">
            <label class="block font-bold mb-2 tracking-wide text-sm uppercase ml-5" for="destination">
                To
            </label>
            <div class="inline-block relative w-full">
                <input
                    class="shadow appearance-none border rounded w-full py-4 px-3 pl-12 bg-gray-200 text-lg text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="to" type="text" placeholder="Select City">
                <div class="pointer-events-none absolute inset-y-0 left-0   flex items-center px-2 text-gray-700">
                    <img src="images/icon/arrival.svg" alt="" class="inline-block h-8">
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/5 px-1 mb-6 md:mb-0">
                <label class="block font-bold mb-2 tracking-wide text-sm uppercase ml-5" for="passenger">
                        Passengers
                    </label>

                <div class="inline-block relative w-full">
                    <select
                        class="shadow appearance-none border rounded w-full py-4 px-3 pl-12 bg-gray-200 text-lg text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="passenger">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0  flex items-center px-2 text-gray-700">
                        <img src="images/icon/arrow-down-sign-to-navigate.svg" alt="" class="inline-block h-4">
                    </div>
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-2 text-gray-700">
                            <img src="images/icon/users.svg" alt="" class="inline-block h-6">
                        </div>
                </div>
        </div>

        <div class="w-full md:w-1/5 px-1 mb-6 md:mb-0 hidden" id="flight_class">
            <label class="block font-bold mb-2 tracking-wide text-sm uppercase" for="flight_class">
                Class
            </label>
            <div class="inline-block relative w-full">
                <select
                    class="shadow appearance-none border rounded w-full py-4 px-3 pl-12 bg-gray-200 text-lg text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-state">
                    <option>Economy</option>
                    <option>Business</option>
                    <option>First</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0  flex items-center px-2 text-gray-700">
                    <img src="images/icon/arrow-down-sign-to-navigate.svg" alt="" class="inline-block h-4">
                </div>
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-2 text-gray-700">
                    <img src="images/icon/business-class.svg" alt="" class="inline-block h-6">
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/5 px-1 mb-6 md:mb-0">
            <label class="block font-bold mb-2 tracking-wide text-sm uppercase ml-5" for="departure_date">
                Depart
            </label>
            <div class="inline-block relative w-full">
                <input
                    class="shadow appearance-none border rounded w-full py-3 px-4 pl-8 bg-gray-200 text-lg text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="depart" type="date" placeholder="" value="2019-07-01" name="departure_date">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-2 text-gray-700">
                    <img src="images/icon/calendar.svg" alt="" class="inline-block h-6">
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/5 px-1 mb-6 md:mb-0" id="return_date">
            <label class="block font-bold mb-2 tracking-wide text-sm uppercase ml-5" for="return">
                Return
            </label>
            <div class="inline-block relative w-full">
                    <input
                        class="shadow appearance-none border rounded w-full py-3 px-4 pl-8 bg-gray-200 text-lg text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="depart" type="date" placeholder="" value="2019-08-01" name="departure_date">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-2 text-gray-700">
                        <img src="images/icon/calendar.svg" alt="" class="inline-block h-6">
                    </div>
                </div>
        </div>
    </div>

    <div class="flex justify-center">
        <div class="w-full mx-auto px-3 my-4 md:mb-0 text-center max-w-xs">
            <button
                class="w-full bg-orange-50 text-white py-2 px-4 border-solid border-4 font-bold text-xl rounded-lg leading-tight border-orange-50 shadow-lg hover:bg-transparent hover:text-gray-900 hover:text-2xl">
                Search
            </button>
        </div>
    </div>
</form>
