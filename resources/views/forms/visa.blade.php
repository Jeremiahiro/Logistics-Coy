<div class="w-full m-8 lg:flex flex-wrap lg:justify-center mx-auto">

    <div class="md:w-3/5 w-full">
        <form class="">
            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block text-gray-700 font-bold mb-2 text-sm tracking-wide uppercase ml-5"
                        for="grid-first-name">
                        First Name
                    </label>
                    <div class="flex flex-row">
                        <input
                            class="appearance-none border rounded w-full py-3 px-4 bg-gray-200 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-first-name" type="text" placeholder="Jeremiah">
                    </div>
                </div>

                <div class="w-full md:w-1/2 px-3">
                    <label class="block text-gray-700 font-bold mb-2 text-sm tracking-wide uppercase ml-5"
                        for="grid-last-name">
                        Last Name
                    </label>
                    <input
                        class="appearance-none border rounded w-full py-3 px-4 bg-gray-200 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="text" placeholder="Iro">
                </div>
            </div>

            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-2/3 px-3 mb-6 md:mb-0">
                    <label class="block text-gray-700 font-bold mb-2 text-sm tracking-wide uppercase ml-5"
                        for="grid-email">
                        Email
                    </label>
                    <input
                        class="appearance-none border rounded w-full py-3 px-4 bg-gray-200 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-email" type="email" placeholder="iro@example.com">
                </div>

                <div class="w-full md:w-1/3 px-3">
                    <label class="block text-gray-700 font-bold mb-2 text-sm tracking-wide uppercase ml-5"
                        for="grid-phone-number">
                        Phone Number
                    </label>
                    <input
                        class="appearance-none border rounded w-full py-3 px-4 bg-gray-200 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-phone-number" type="phone" placeholder="+2348136478020">
                </div>
            </div>

            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-1/2 px-3">
                    <div class="flex flex-wrap mb-8">
                        <div class="w-full">
                            <label class="block text-gray-700 font-bold mb-2 text-sm tracking-wide uppercase ml-5"
                                for="grid-country-of-residence">
                                Country of Residence
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none border rounded w-full py-3 px-4 bg-gray-200 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-country-of-residence">
                                    @include('forms.country_list')
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0  flex items-center px-2 text-gray-700">
                                    <img src="images/icon/arrow-down-sign-to-navigate.svg" alt=""
                                        class="inline-block h-4">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap mt-8">
                        <div class="w-full">
                            <label class="block text-gray-700 font-bold mb-2 text-sm tracking-wide uppercase ml-5"
                                for="grid-destination-country">
                                Destination Country
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none border rounded w-full py-3 px-4 bg-gray-200 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-destination-country">
                                    @include('forms.country_list')
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0  flex items-center px-2 text-gray-700">
                                    <img src="images/icon/arrow-down-sign-to-navigate.svg" alt=""
                                        class="inline-block h-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/2 px-3">
                    <label class="block text-gray-700 font-bold mb-2 text-sm tracking-wide uppercase ml-5"
                        for="grid-info">
                        Additional Information
                    </label>
                    <textarea
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        autocomplete="off" placeholder="Anything you would want us to know? Please specify" rows="5"
                        id="info"></textarea>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="w-full mx-auto px-3 md:mb-0 text-center max-w-xs">
                    <button
                        class="w-full bg-yellow-600 text-white py-2 px-4 border-solid border-4 font-bold text-xl rounded-lg leading-tight border-yellow-600 shadow-lg hover:bg-transparent hover:text-orange-600 hover:text-2xl">
                        Search
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="md:w-2/5 w-full px-4">
        <div class="mb-3">
            <h1 class="font-semibold text-lg italic text-gray-800 leading-loose">We Offer Visa Assistance for:</h1>
        </div>
        <div class="bg-white shadow-md rounded text-gray-600 text-base">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th scope="col" class="px-2">#</th>
                        <th scope="col" class="text-left px-2">Country</th>
                        <th scope="col" class="px-5 text-center">Flag</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td class="px-2">United States</td>
                        <td class="text-center px-5 py-2">
                            <img src="images/cities/usa-flag.png" alt="" class="w-10 h-6 mx-auto">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td class="px-2">Dubai</td>
                        <td class="text-center px-5 py-2">
                            <img src="images/cities/dubai-flag.jpg" alt="" class="w-10 h-6 mx-auto">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td class="px-2">South Africa</td>
                        <td class="text-center px-5 py-2">
                            <img src="images/cities/south-africa-flag.png" alt="" class="w-10 h-6 mx-auto">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">4</th>
                        <td class="px-2">Canada</td>
                        <td class="text-center px-5 py-2">
                            <img src="images/cities/canada-flag.jpg" alt="" class="w-10 h-6 mx-auto">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">5</th>
                        <td class="px-2">United Kingdom</td>
                        <td class="text-center px-5 py-2">
                            <img src="images/cities/england-flag.jpg" alt="" class="w-10 h-6 mx-auto">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td class="px-2">India</td>
                        <td class="text-center px-5 py-2">
                            <img src="images/cities/india-flag.png" alt="" class="w-10 h-6 mx-auto">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">7</th>
                        <td class="px-2">South Africa</td>
                        <td class="text-center px-5 py-2">
                            <img src="images/cities/south-africa-flag.png" alt="" class="w-10 h-6 mx-auto">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">8</th>
                        <td class="px-2">United States</td>
                        <td class="text-center px-5 py-2">
                            <img src="images/cities/usa-flag.png" alt="" class="w-10 h-6 mx-auto">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">9</th>
                        <td class="px-2">Dubai</td>
                        <td class="text-center px-5 py-2">
                            <img src="images/cities/dubai-flag.jpg" alt="" class="w-10 h-6 mx-auto">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">10</th>
                        <td class="px-2">Canada</td>
                        <td class="text-center px-5 py-2">
                            <img src="images/cities/canada-flag.jpg" alt="" class="w-10 h-6 mx-auto">
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
