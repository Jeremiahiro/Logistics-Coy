<form class="w-full mx-auto py-8 px-4 relative">

    <div class="flex flex-wrap mb-5 text-sm">
        <div class="w-full md:w-1/5 px-1 mb-6 md:mb-0">
            <label class="block text-gray-700 font-bold mb-2 text-sm tracking-wide uppercase ml-5"
                for="destination_hotel">
                Destination
            </label>
            <div class="flex flex-row">
                <div class="inline-block relative w-full">
                    <input
                        class="shadow appearance-none border rounded w-full py-4 px-3 pl-12 bg-gray-200 text-lg text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="destination_hotel" type="text" placeholder="e.g City or Hotel Name">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-2 text-gray-700">
                        <img src="images/icon/destination.svg" alt="" class="inline-block h-6">
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/5 px-1 mb-6 md:mb-0">
            <label class="block text-gray-700 font-bold mb-2 text-sm tracking-wide uppercase ml-5" for="room">
                Rooms
            </label>
            <div class="flex flex-row">
                <div class="inline-block relative w-full">
                    <input
                        class="shadow appearance-none border rounded w-full py-4 px-3 pl-12 bg-gray-200 text-lg text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="room" type="number" placeholder="Select Number of Rooms">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-2 text-gray-700">
                        <img src="images/icon/bed.svg" alt="" class="inline-block h-6">
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/5 px-1 mb-6 md:mb-0">
            <label class="block text-gray-700 font-bold mb-2 text-sm tracking-wide uppercase ml-5" for="check_in">
                Check In
            </label>
            <div class="inline-block relative w-full">
                <input
                    class="shadow appearance-none border rounded w-full py-3 px-4 pl-12 bg-gray-200 text-lg text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="check_in" type="date" placeholder="" value="2019-07-01" name="check_in_date">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-2 text-gray-700">
                    <img src="images/icon/calendar.svg" alt="" class="inline-block h-6">
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/5 px-1 mb-6 md:mb-0" id="return_date">
            <label class="block text-gray-700 font-bold mb-2 text-sm tracking-wide uppercase ml-5" for="check_out">
                Check Out
            </label>
            <div class="inline-block relative w-full">
                <input
                    class="shadow appearance-none border rounded w-full py-3 px-4 pl-12 bg-gray-200 text-lg text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="check_out" type="date" value="2019-07-01" placeholder="" name="check_out_date">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-2 text-gray-700">
                    <img src="images/icon/calendar.svg" alt="" class="inline-block h-6">
                </div>
            </div>
        </div>

        <div class="flex-1">
            <div class="w-full mx-auto px-3 my-4 md:mb-0 text-center max-w-xs">
                <button
                    class="w-full lg:mt-4 bg-orange-50 text-white py-2 px-4 border-solid border-4 font-bold text-xl rounded-lg leading-tight border-orange-50 shadow-lg hover:bg-transparent hover:text-gray-900 hover:text-2xl">
                    Search
                </button>
            </div>
        </div>
    </div>
</form>
