<script>
    var scrollpos = window.scrollY;
    var header = document.getElementById("header");
    var navcontent = document.getElementById("main_menu");
    var navaction = document.getElementById("button_like");
    var toToggle = document.querySelectorAll(".toggleColour");

    document.addEventListener('scroll', function () {

        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 100) {
            header.classList.remove("py-4");
            header.classList.add("py-1");
            header.classList.add("bg-orange-50");
            navcontent.classList.remove("text-white");
            navcontent.classList.remove("bg-gray-900");
            navcontent.classList.add("text-gray-900");
            navaction.classList.remove("bg-gray-300");
            navaction.classList.add("bg-gray-900");
            navaction.classList.remove("text-gray-900");
            navaction.classList.add("text-white");
        } else {
            header.classList.add("py-4");
            header.classList.remove("py-1");
            header.classList.remove("bg-orange-50");
            navcontent.classList.add("bg-gray-900");
            navcontent.classList.add("text-white");
            navcontent.classList.remove("text-gray-900");
            navaction.classList.add("bg-gray-300");
            navaction.classList.remove("bg-gray-900");
            navaction.classList.add("text-gray-900");
            navaction.classList.remove("text-white");;
        }
    });

    function topFunction() {
        document.documentElement.scrollTop = 0;
    }

    /*Toggle list*/
    var navMenuDiv = document.getElementById("main_menu");
    var navMenu = document.getElementById("nav-toggle");
    var searchField = document.getElementById("search-content");
    var searchIcon = document.getElementById("search-toggle");
    var map1 = document.getElementById("map1");
    var map2 = document.getElementById("map2");
    var map3 = document.getElementById("map3");
    var openMap1 = document.getElementById("openMap1");
    var openMap2 = document.getElementById("openMap2");
    var openMap3 = document.getElementById("openMap3");
    var closeMap1 = document.getElementById("closeMap1");
    var closeMap2 = document.getElementById("closeMap2");
    var closeMap3 = document.getElementById("closeMap3");
    var roundtrip = document.getElementById("radio1");
    var oneway = document.getElementById("radio2");
    var multicity = document.getElementById("radio3");
    var return_date = document.getElementById("return_date");
    var flight_class = document.getElementById("flight_class");
    var bookFlight = document.getElementById("flight_booking");
    var bookHotel = document.getElementById("hotel_reservation");
    var bookVisa = document.getElementById("visa_application");
    var bookStudy = document.getElementById("study_abroad");
    var bookDelivery = document.getElementById("delivery_services");
    var flight = document.getElementById("flight");
    var hotel = document.getElementById("hotel");
    var visa = document.getElementById("visa");
    var study = document.getElementById("study");
    var delivery = document.getElementById("delivery");


    document.onclick = check;

    function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                    navMenuDiv.classList.remove("hidden");
                } else {
                    navMenuDiv.classList.add("hidden");
                }
            } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
            }
        }

        //Search Field
        if (!checkParent(target, searchField)) {
            // click NOT on the menu
            if (checkParent(target, searchIcon)) {
                // click on the link
                if (searchField.classList.contains("hidden")) {
                    searchField.classList.remove("hidden");
                } else {
                    searchField.classList.add("hidden");
                }
            } else {
                // click both outside link and outside menu, hide menu
                searchField.classList.add("hidden");
            }
        }

        //Map1
        if (checkParent(target, openMap1)) {
            // click on the link
            if (map1.classList.contains("hidden")) {
                map1.classList.remove("hidden");
                openMap1.classList.add("hidden");
                closeMap1.classList.remove("hidden");
                closeMap2.classList.add("hidden");
                closeMap3.classList.add("hidden");
                openMap2.classList.remove("hidden");
                openMap3.classList.remove("hidden");
                map3.classList.add("hidden");
                map2.classList.add("hidden");
            } else {
                map1.classList.add("hidden");
                openMap1.classList.remove("hidden");
                closeMap2.classList.add("hidden");
                closeMap2.classList.remove("hidden");
                closeMap3.classList.remove("hidden");
                openMap2.classList.add("hidden");
                openMap3.classList.add("hidden");
                map3.classList.remove("hidden");
                map2.classList.remove("hidden");

            }
        }

        if (checkParent(target, closeMap1)) {
            map1.classList.add("hidden");
            openMap3.classList.remove("hidden");
            openMap2.classList.remove("hidden");
            openMap1.classList.remove("hidden");
            closeMap3.classList.add("hidden");
            closeMap2.classList.add("hidden");
            closeMap1.classList.add("hidden");
        }

        //Map2
        if (checkParent(target, openMap2)) {
            // click on the link
            if (map2.classList.contains("hidden")) {
                map2.classList.remove("hidden");
                openMap2.classList.add("hidden");
                closeMap2.classList.remove("hidden");
                closeMap1.classList.add("hidden");
                closeMap3.classList.add("hidden");
                openMap1.classList.remove("hidden");
                openMap3.classList.remove("hidden");
                map3.classList.add("hidden");
                map1.classList.add("hidden");
            } else {
                map2.classList.add("hidden");
                openMap2.classList.remove("hidden");
                closeMap2.classList.add("hidden");
                closeMap1.classList.remove("hidden");
                closeMap3.classList.remove("hidden");
                openMap1.classList.add("hidden");
                openMap3.classList.add("hidden");
                map3.classList.remove("hidden");
                map1.classList.remove("hidden");

            }
        }

        if (checkParent(target, closeMap2)) {
            map2.classList.add("hidden");
            openMap3.classList.remove("hidden");
            openMap2.classList.remove("hidden");
            openMap1.classList.remove("hidden");
            closeMap3.classList.add("hidden");
            closeMap2.classList.add("hidden");
            closeMap1.classList.add("hidden");
        }

        //Map3
        if (checkParent(target, openMap3)) {
            // click on the link
            if (map3.classList.contains("hidden")) {
                map3.classList.remove("hidden");
                openMap3.classList.add("hidden");
                closeMap3.classList.remove("hidden");
                closeMap1.classList.add("hidden");
                closeMap2.classList.add("hidden");
                openMap1.classList.remove("hidden");
                openMap2.classList.remove("hidden");
                map2.classList.add("hidden");
                map1.classList.add("hidden");
            } else {
                map3.classList.add("hidden");
                openMap3.classList.remove("hidden");
                closeMap3.classList.add("hidden");
                closeMap1.classList.remove("hidden");
                closeMap2.classList.remove("hidden");
                openMap1.classList.add("hidden");
                openMap2.classList.add("hidden");
                map2.classList.remove("hidden");
                map1.classList.remove("hidden");

            }
        }

        if (checkParent(target, closeMap3)) {
            map3.classList.add("hidden");
            openMap3.classList.remove("hidden");
            openMap2.classList.remove("hidden");
            openMap1.classList.remove("hidden");
            closeMap3.classList.add("hidden");
            closeMap2.classList.add("hidden");
            closeMap1.classList.add("hidden");
        }

        //flight booking
        if (checkParent(target, bookFlight)) {
            // click on the link
            if (flight.classList.contains("hidden")) {
                flight.classList.remove("hidden");
                hotel.classList.add("hidden");
                visa.classList.add("hidden");
                study.classList.add("hidden");
                delivery.classList.add("hidden");
                bookFlight.classList.add("bg-gray-400")
                bookHotel.classList.remove("bg-gray-400")
                bookVisa.classList.remove("bg-gray-400")
                bookStudy.classList.remove("bg-gray-400")
                bookDelivery.classList.remove("bg-gray-400")
            }
        }

        //hotel booking
        if (checkParent(target, bookHotel)) {
            // click on the link
            if (hotel.classList.contains("hidden")) {
                hotel.classList.remove("hidden");
                flight.classList.add("hidden");
                visa.classList.add("hidden");
                study.classList.add("hidden");
                delivery.classList.add("hidden");
                bookFlight.classList.remove("bg-gray-400")
                bookHotel.classList.add("bg-gray-400")
                bookVisa.classList.remove("bg-gray-400")
                bookStudy.classList.remove("bg-gray-400")
                bookDelivery.classList.remove("bg-gray-400")
            }
        }

        //visa booking
        if (checkParent(target, bookVisa)) {
            // click on the link
            if (visa.classList.contains("hidden")) {
                visa.classList.remove("hidden");
                flight.classList.add("hidden");
                hotel.classList.add("hidden");
                study.classList.add("hidden");
                delivery.classList.add("hidden");
                bookFlight.classList.remove("bg-gray-400")
                bookHotel.classList.remove("bg-gray-400")
                bookVisa.classList.add("bg-gray-400")
                bookStudy.classList.remove("bg-gray-400")
                bookDelivery.classList.remove("bg-gray-400")
            }
        }

        //study booking
        if (checkParent(target, bookStudy)) {
            // click on the link
            if (study.classList.contains("hidden")) {
                study.classList.remove("hidden");
                flight.classList.add("hidden");
                hotel.classList.add("hidden");
                visa.classList.add("hidden");
                delivery.classList.add("hidden");
                bookFlight.classList.remove("bg-gray-400")
                bookHotel.classList.remove("bg-gray-400")
                bookVisa.classList.remove("bg-gray-400")
                bookStudy.classList.add("bg-gray-400")
                bookDelivery.classList.remove("bg-gray-400")
            }
        }

        //delivery booking
        if (checkParent(target, bookDelivery)) {
            // click on the link
            if (delivery.classList.contains("hidden")) {
                delivery.classList.remove("hidden");
                flight.classList.add("hidden");
                hotel.classList.add("hidden");
                visa.classList.add("hidden");
                study.classList.add("hidden");
                bookFlight.classList.remove("bg-gray-400")
                bookHotel.classList.remove("bg-gray-400")
                bookVisa.classList.remove("bg-gray-400")
                bookStudy.classList.remove("bg-gray-400")
                bookDelivery.classList.add("bg-gray-400")
            }
        }

        //Round Trip
        if (checkParent(target, roundtrip)) {
            return_date.classList.remove("hidden");
            flight_class.classList.add("hidden");
        }

        //One Way
        if (checkParent(target, oneway)) {
            // click on the link
            return_date.classList.add("hidden");
            flight_class.classList.add("hidden");
        }

        //Round Trip
        if (checkParent(target, multicity)) {
            // click on the link
            return_date.classList.add("hidden");
            if (flight_class.classList.contains("hidden")) {
                flight_class.classList.remove("hidden");
            }
        }
    }

    function checkParent(t, elm) {
        while (t.parentNode) {
            if (t == elm) {
                return true;
            }
            t = t.parentNode;
        }
        return false;
    }

    // modal 
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
        openmodal[i].addEventListener('click', function (event) {
            event.preventDefault()
            toggleModal()
        })
    }

    {
        {{-- const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal) --}}
    }

    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', toggleModal)
    }

    document.onkeydown = function (evt) {
        evt = evt || window.event
        var isEscape = false
        if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc")
        } else {
            isEscape = (evt.keyCode === 27)
        }
        if (isEscape && document.body.classList.contains('modal-active')) {
            toggleModal()
        }
    };

    function toggleModal() {
        const body = document.querySelector('body')
        const modal = document.querySelector('.modal')
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
    }

    // slide show
    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
    }

    /* Optional Javascript to close the radio button version by clicking it again */
    var myRadios = document.getElementsByName('tabs2');
    var setCheck;
    var x = 0;
    for (x = 0; x < myRadios.length; x++) {
        myRadios[x].onclick = function () {
            if (setCheck != this) {
                setCheck = this;
            } else {
                this.checked = false;
                setCheck = null;
            }
        };
    }
</script>
