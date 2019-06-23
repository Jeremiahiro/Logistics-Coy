@extends('layouts.app')

@section('content')
<div class="privacy bg-cover">
    @include('partials.header')
    <div class="pt-12">
        <div class="w-full my-24 h-50">
            <div class="container max-w-4xl mx-auto break-normal">
                <p class="text-white font-extrabold text-2xl lg:text-4xl">
                    {{--  TERMS & CONDITIONS  --}}
                </p>
            </div>
        </div>
        @include('svg.wave_bottom')
    </div>
</div>

<div class="">
    <div class="max-w-6xl mx-auto w-full text-gray-700 p-8">
        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-one" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-one">Overview</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">Officia in irure commodo et Lorem minim duis irure sit qui dolor. Incididunt nulla
                    dolore do velit sunt irure nostrud. Esse enim dolore dolore et. Officia anim minim esse quis
                    incididunt consectetur Lorem. Eu deserunt aute culpa do ullamco cillum consequat duis.
                    Cupidatat aliqua est dolore mollit eiusmod laboris labore esse. Ullamco reprehenderit ex anim in do
                    dolore. Qui pariatur ea quis sint quis excepteur elit. Fugiat sit magna sint et voluptate nisi
                    veniam occaecat amet. Duis in adipisicing ut duis nostrud reprehenderit.

                    <br><br>
                    Adipisicing exercitation veniam occaecat id cupidatat eu irure ex exercitation deserunt. Dolore
                    cillum voluptate Lorem pariatur nostrud velit cillum velit eu ea ea. Commodo consectetur nulla
                    officia cillum Lorem.

                    <br><br>
                    Quis officia do pariatur magna est labore amet Lorem commodo culpa ullamco
                    elit enim sit. Ipsum voluptate culpa nulla ad et duis laborum elit culpa cupidatat Lorem occaecat.
                    Aliquip magna culpa consectetur enim proident laboris dolore ea ea. Labore enim laboris quis enim
                    cillum ut cupidatat ad ad ex magna.

                    <br><br>
                    Sunt quis excepteur occaecat culpa consequat do cillum ea mollit dolor laboris. Ea reprehenderit
                    nostrud commodo irure qui laborum quis cillum commodo quis minim. Consequat incididunt magna
                    adipisicing irure elit velit officia amet irure enim cillum pariatur voluptate. Commodo in veniam eu
                    ex enim sint cupidatat Lorem aliquip est deserunt anim. Id nisi minim laboris non.</p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-two" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-two">Definitions</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">Officia in irure commodo et Lorem minim duis irure sit qui dolor. Incididunt nulla
                    dolore do velit sunt irure nostrud. Esse enim dolore dolore et. Officia anim minim esse quis
                    incididunt consectetur Lorem. Eu deserunt aute culpa do ullamco cillum consequat duis.

                    Cupidatat aliqua est dolore mollit eiusmod laboris labore esse. Ullamco reprehenderit ex anim in do
                    dolore. Qui pariatur ea quis sint quis excepteur elit. Fugiat sit magna sint et voluptate nisi
                    veniam occaecat amet. Duis in adipisicing ut duis nostrud reprehenderit.

                    <br><br>
                    Adipisicing exercitation veniam occaecat id cupidatat eu irure ex exercitation deserunt. Dolore
                    cillum voluptate Lorem pariatur nostrud velit cillum velit eu ea ea. Commodo consectetur nulla
                    officia cillum Lorem. Quis officia do pariatur magna est labore amet Lorem commodo culpa ullamco
                    elit enim sit. Ipsum voluptate culpa nulla ad et duis laborum elit culpa cupidatat Lorem occaecat.
                    Aliquip magna culpa consectetur enim proident laboris dolore ea ea. Labore enim laboris quis enim
                    cillum ut cupidatat ad ad ex magna.

                    Sunt quis excepteur occaecat culpa consequat do cillum ea mollit dolor laboris. Ea reprehenderit
                    nostrud commodo irure qui laborum quis cillum commodo quis minim. Consequat incididunt magna
                    adipisicing irure elit velit officia amet irure enim cillum pariatur voluptate. Commodo in veniam eu
                    ex enim sint cupidatat Lorem aliquip est deserunt anim. Id nisi minim laboris non.

                    Et est sit magna commodo do elit ea nisi tempor cillum esse ex duis. Dolore mollit velit elit duis
                    nulla fugiat Lorem reprehenderit adipisicing laborum laboris pariatur. Consectetur consequat
                    adipisicing ex nostrud sunt excepteur ea ipsum exercitation eiusmod consectetur incididunt minim.
                    Esse exercitation qui tempor cupidatat labore sint. Culpa aliqua quis voluptate sunt.</p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-three" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-three">Information Collection, Uses and Sharing</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">Officia in irure commodo et Lorem minim duis irure sit qui dolor. Incididunt nulla
                    dolore do velit sunt irure nostrud. Esse enim dolore dolore et. Officia anim minim esse quis
                    incididunt consectetur Lorem. Eu deserunt aute culpa do ullamco cillum consequat duis.

                    Cupidatat aliqua est dolore mollit eiusmod laboris labore esse. Ullamco reprehenderit ex anim in do
                    dolore. Qui pariatur ea quis sint quis excepteur elit. Fugiat sit magna sint et voluptate nisi
                    veniam occaecat amet. Duis in adipisicing ut duis nostrud reprehenderit.

                    <br><br>
                    Adipisicing exercitation veniam occaecat id cupidatat eu irure ex exercitation deserunt. Dolore
                    cillum voluptate Lorem pariatur nostrud velit cillum velit eu ea ea. Commodo consectetur nulla
                    officia cillum Lorem. Quis officia do pariatur magna est labore amet Lorem commodo culpa ullamco
                    elit enim sit. Ipsum voluptate culpa nulla ad et duis laborum elit culpa cupidatat Lorem occaecat.
                    Aliquip magna culpa consectetur enim proident laboris dolore ea ea. Labore enim laboris quis enim
                    cillum ut cupidatat ad ad ex magna.

                    Sunt quis excepteur occaecat culpa consequat do cillum ea mollit dolor laboris. Ea reprehenderit
                    nostrud commodo irure qui laborum quis cillum commodo quis minim. Consequat incididunt magna
                    adipisicing irure elit velit officia amet irure enim cillum pariatur voluptate. Commodo in veniam eu
                    ex enim sint cupidatat Lorem aliquip est deserunt anim. Id nisi minim laboris non.

                    Et est sit magna commodo do elit ea nisi tempor cillum esse ex duis. Dolore mollit velit elit duis
                    nulla fugiat Lorem reprehenderit adipisicing laborum laboris pariatur. Consectetur consequat
                    adipisicing ex nostrud sunt excepteur ea ipsum exercitation eiusmod consectetur incididunt minim.
                    Esse exercitation qui tempor cupidatat labore sint. Culpa aliqua quis voluptate sunt.</p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-four" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-four">Registration</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">Officia in irure commodo et Lorem minim duis irure sit qui dolor. Incididunt nulla
                    dolore do velit sunt irure nostrud. Esse enim dolore dolore et. Officia anim minim esse quis
                    incididunt consectetur Lorem. Eu deserunt aute culpa do ullamco cillum consequat duis.

                    Cupidatat aliqua est dolore mollit eiusmod laboris labore esse. Ullamco reprehenderit ex anim in do
                    dolore. Qui pariatur ea quis sint quis excepteur elit. Fugiat sit magna sint et voluptate nisi
                    veniam occaecat amet. Duis in adipisicing ut duis nostrud reprehenderit.

                    <br><br>
                    Adipisicing exercitation veniam occaecat id cupidatat eu irure ex exercitation deserunt. Dolore
                    cillum voluptate Lorem pariatur nostrud velit cillum velit eu ea ea. Commodo consectetur nulla
                    officia cillum Lorem. Quis officia do pariatur magna est labore amet Lorem commodo culpa ullamco
                    elit enim sit. Ipsum voluptate culpa nulla ad et duis laborum elit culpa cupidatat Lorem occaecat.
                    Aliquip magna culpa consectetur enim proident laboris dolore ea ea. Labore enim laboris quis enim
                    cillum ut cupidatat ad ad ex magna.

                    Sunt quis excepteur occaecat culpa consequat do cillum ea mollit dolor laboris. Ea reprehenderit
                    nostrud commodo irure qui laborum quis cillum commodo quis minim. Consequat incididunt magna
                    adipisicing irure elit velit officia amet irure enim cillum pariatur voluptate. Commodo in veniam eu
                    ex enim sint cupidatat Lorem aliquip est deserunt anim. Id nisi minim laboris non.

                    Et est sit magna commodo do elit ea nisi tempor cillum esse ex duis. Dolore mollit velit elit duis
                    nulla fugiat Lorem reprehenderit adipisicing laborum laboris pariatur. Consectetur consequat
                    adipisicing ex nostrud sunt excepteur ea ipsum exercitation eiusmod consectetur incididunt minim.
                    Esse exercitation qui tempor cupidatat labore sint. Culpa aliqua quis voluptate sunt.</p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-five" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-five">Cookies</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">Officia in irure commodo et Lorem minim duis irure sit qui dolor. Incididunt nulla
                    dolore do velit sunt irure nostrud. Esse enim dolore dolore et. Officia anim minim esse quis
                    incididunt consectetur Lorem. Eu deserunt aute culpa do ullamco cillum consequat duis.

                    Cupidatat aliqua est dolore mollit eiusmod laboris labore esse. Ullamco reprehenderit ex anim in do
                    dolore. Qui pariatur ea quis sint quis excepteur elit. Fugiat sit magna sint et voluptate nisi
                    veniam occaecat amet. Duis in adipisicing ut duis nostrud reprehenderit.

                    <br><br>
                    Adipisicing exercitation veniam occaecat id cupidatat eu irure ex exercitation deserunt. Dolore
                    cillum voluptate Lorem pariatur nostrud velit cillum velit eu ea ea. Commodo consectetur nulla
                    officia cillum Lorem. Quis officia do pariatur magna est labore amet Lorem commodo culpa ullamco
                    elit enim sit. Ipsum voluptate culpa nulla ad et duis laborum elit culpa cupidatat Lorem occaecat.
                    Aliquip magna culpa consectetur enim proident laboris dolore ea ea. Labore enim laboris quis enim
                    cillum ut cupidatat ad ad ex magna.

                    Sunt quis excepteur occaecat culpa consequat do cillum ea mollit dolor laboris. Ea reprehenderit
                    nostrud commodo irure qui laborum quis cillum commodo quis minim. Consequat incididunt magna
                    adipisicing irure elit velit officia amet irure enim cillum pariatur voluptate. Commodo in veniam eu
                    ex enim sint cupidatat Lorem aliquip est deserunt anim. Id nisi minim laboris non.

                    Et est sit magna commodo do elit ea nisi tempor cillum esse ex duis. Dolore mollit velit elit duis
                    nulla fugiat Lorem reprehenderit adipisicing laborum laboris pariatur. Consectetur consequat
                    adipisicing ex nostrud sunt excepteur ea ipsum exercitation eiusmod consectetur incididunt minim.
                    Esse exercitation qui tempor cupidatat labore sint. Culpa aliqua quis voluptate sunt.</p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-six" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-six">Sharing</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">Officia in irure commodo et Lorem minim duis irure sit qui dolor. Incididunt nulla
                    dolore do velit sunt irure nostrud. Esse enim dolore dolore et. Officia anim minim esse quis
                    incididunt consectetur Lorem. Eu deserunt aute culpa do ullamco cillum consequat duis.

                    Cupidatat aliqua est dolore mollit eiusmod laboris labore esse. Ullamco reprehenderit ex anim in do
                    dolore. Qui pariatur ea quis sint quis excepteur elit. Fugiat sit magna sint et voluptate nisi
                    veniam occaecat amet. Duis in adipisicing ut duis nostrud reprehenderit.

                    <br><br>
                    Adipisicing exercitation veniam occaecat id cupidatat eu irure ex exercitation deserunt. Dolore
                    cillum voluptate Lorem pariatur nostrud velit cillum velit eu ea ea. Commodo consectetur nulla
                    officia cillum Lorem. Quis officia do pariatur magna est labore amet Lorem commodo culpa ullamco
                    elit enim sit. Ipsum voluptate culpa nulla ad et duis laborum elit culpa cupidatat Lorem occaecat.
                    Aliquip magna culpa consectetur enim proident laboris dolore ea ea. Labore enim laboris quis enim
                    cillum ut cupidatat ad ad ex magna.

                    Sunt quis excepteur occaecat culpa consequat do cillum ea mollit dolor laboris. Ea reprehenderit
                    nostrud commodo irure qui laborum quis cillum commodo quis minim. Consequat incididunt magna
                    adipisicing irure elit velit officia amet irure enim cillum pariatur voluptate. Commodo in veniam eu
                    ex enim sint cupidatat Lorem aliquip est deserunt anim. Id nisi minim laboris non.

                    Et est sit magna commodo do elit ea nisi tempor cillum esse ex duis. Dolore mollit velit elit duis
                    nulla fugiat Lorem reprehenderit adipisicing laborum laboris pariatur. Consectetur consequat
                    adipisicing ex nostrud sunt excepteur ea ipsum exercitation eiusmod consectetur incididunt minim.
                    Esse exercitation qui tempor cupidatat labore sint. Culpa aliqua quis voluptate sunt.</p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-seven" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-seven">Links</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">Officia in irure commodo et Lorem minim duis irure sit qui dolor. Incididunt nulla
                    dolore do velit sunt irure nostrud. Esse enim dolore dolore et. Officia anim minim esse quis
                    incididunt consectetur Lorem. Eu deserunt aute culpa do ullamco cillum consequat duis.

                    Cupidatat aliqua est dolore mollit eiusmod laboris labore esse. Ullamco reprehenderit ex anim in do
                    dolore. Qui pariatur ea quis sint quis excepteur elit. Fugiat sit magna sint et voluptate nisi
                    veniam occaecat amet. Duis in adipisicing ut duis nostrud reprehenderit.

                    <br><br>
                    Adipisicing exercitation veniam occaecat id cupidatat eu irure ex exercitation deserunt. Dolore
                    cillum voluptate Lorem pariatur nostrud velit cillum velit eu ea ea. Commodo consectetur nulla
                    officia cillum Lorem. Quis officia do pariatur magna est labore amet Lorem commodo culpa ullamco
                    elit enim sit. Ipsum voluptate culpa nulla ad et duis laborum elit culpa cupidatat Lorem occaecat.
                    Aliquip magna culpa consectetur enim proident laboris dolore ea ea. Labore enim laboris quis enim
                    cillum ut cupidatat ad ad ex magna.

                    Sunt quis excepteur occaecat culpa consequat do cillum ea mollit dolor laboris. Ea reprehenderit
                    nostrud commodo irure qui laborum quis cillum commodo quis minim. Consequat incididunt magna
                    adipisicing irure elit velit officia amet irure enim cillum pariatur voluptate. Commodo in veniam eu
                    ex enim sint cupidatat Lorem aliquip est deserunt anim. Id nisi minim laboris non.

                    Et est sit magna commodo do elit ea nisi tempor cillum esse ex duis. Dolore mollit velit elit duis
                    nulla fugiat Lorem reprehenderit adipisicing laborum laboris pariatur. Consectetur consequat
                    adipisicing ex nostrud sunt excepteur ea ipsum exercitation eiusmod consectetur incididunt minim.
                    Esse exercitation qui tempor cupidatat labore sint. Culpa aliqua quis voluptate sunt.</p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-eight" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-eight">Terms and Conditions</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">Officia in irure commodo et Lorem minim duis irure sit qui dolor. Incididunt nulla
                    dolore do velit sunt irure nostrud. Esse enim dolore dolore et. Officia anim minim esse quis
                    incididunt consectetur Lorem. Eu deserunt aute culpa do ullamco cillum consequat duis.

                    Cupidatat aliqua est dolore mollit eiusmod laboris labore esse. Ullamco reprehenderit ex anim in do
                    dolore. Qui pariatur ea quis sint quis excepteur elit. Fugiat sit magna sint et voluptate nisi
                    veniam occaecat amet. Duis in adipisicing ut duis nostrud reprehenderit.

                    <br><br>
                    Adipisicing exercitation veniam occaecat id cupidatat eu irure ex exercitation deserunt. Dolore
                    cillum voluptate Lorem pariatur nostrud velit cillum velit eu ea ea. Commodo consectetur nulla
                    officia cillum Lorem. Quis officia do pariatur magna est labore amet Lorem commodo culpa ullamco
                    elit enim sit. Ipsum voluptate culpa nulla ad et duis laborum elit culpa cupidatat Lorem occaecat.
                    Aliquip magna culpa consectetur enim proident laboris dolore ea ea. Labore enim laboris quis enim
                    cillum ut cupidatat ad ad ex magna.

                    Sunt quis excepteur occaecat culpa consequat do cillum ea mollit dolor laboris. Ea reprehenderit
                    nostrud commodo irure qui laborum quis cillum commodo quis minim. Consequat incididunt magna
                    adipisicing irure elit velit officia amet irure enim cillum pariatur voluptate. Commodo in veniam eu
                    ex enim sint cupidatat Lorem aliquip est deserunt anim. Id nisi minim laboris non.

                    Et est sit magna commodo do elit ea nisi tempor cillum esse ex duis. Dolore mollit velit elit duis
                    nulla fugiat Lorem reprehenderit adipisicing laborum laboris pariatur. Consectetur consequat
                    adipisicing ex nostrud sunt excepteur ea ipsum exercitation eiusmod consectetur incididunt minim.
                    Esse exercitation qui tempor cupidatat labore sint. Culpa aliqua quis voluptate sunt.</p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
                <input class="absolute opacity-0 " id="tab-privacy-nine" type="checkbox" name="tabs">
                <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600" for="tab-privacy-nine">Contact Us</label>
                <div class="tab-content overflow-hidden leading-normal">
                    <p class="p-5">Officia in irure commodo et Lorem minim duis irure sit qui dolor. Incididunt nulla
                        dolore do velit sunt irure nostrud. Esse enim dolore dolore et. Officia anim minim esse quis
                        incididunt consectetur Lorem. Eu deserunt aute culpa do ullamco cillum consequat duis.
    
                        Cupidatat aliqua est dolore mollit eiusmod laboris labore esse. Ullamco reprehenderit ex anim in do
                        dolore. Qui pariatur ea quis sint quis excepteur elit. Fugiat sit magna sint et voluptate nisi
                        veniam occaecat amet. Duis in adipisicing ut duis nostrud reprehenderit.
    
                        <br><br>
                        Adipisicing exercitation veniam occaecat id cupidatat eu irure ex exercitation deserunt. Dolore
                        cillum voluptate Lorem pariatur nostrud velit cillum velit eu ea ea. Commodo consectetur nulla
                        officia cillum Lorem. Quis officia do pariatur magna est labore amet Lorem commodo culpa ullamco
                        elit enim sit. Ipsum voluptate culpa nulla ad et duis laborum elit culpa cupidatat Lorem occaecat.
                        Aliquip magna culpa consectetur enim proident laboris dolore ea ea. Labore enim laboris quis enim.</p>
                </div>
            </div>

    </div>
</div>

@include('partials.footer')

@endsection
