@extends('layouts.app')

@section('content')
<div class="bg-gray-900">
    @include('partials.header')
    <div class="pt-12">
        <div class="w-full mt-16 pb-10">
            <div class="container max-w-4xl mx-auto text-center break-normal">
                <p class="text-white font-extrabold text-2xl lg:text-4xl">
                    Privacy Policy
                </p>
                <p class="text-xl text-gray-500 italic">Stay Updated With Us</p>
                <div class="h-1 bg-yellow-600 w-24 opacity-75 my-0 py-0 rounded-t mx-auto"></div>
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
                for="tab-privacy-one">Privacy Policy for Sevenstar Logistics Limited</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">
                    At sevenstarlog, accessible from www.sevenstarlog.com, one of our main priorities is the privacy of
                    our visitors. This Privacy Policy document contains types of information that is collected and
                    recorded by sevenstarlog and how we use it.

                    If you have additional questions or require more information about our Privacy Policy, do not
                    hesitate to contact us through email at jeremiahiro@gmail.com
                </p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-two" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-two">General Data Protection Regulation (GDPR)</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">
                    We are a Data Controller of your information.
                    Sevenstar Logistics Limited legal basis for collecting and using the personal information described
                    in this Privacy Policy depends on the Personal Information we collect and the specific context in
                    which we collect the information:

                    <ul class="px-10">
                        <li class="list-inside list-disc">Sevenstar Logistics Limited needs to perform a contract
                            with you</li>
                        <li class="list-inside list-disc">You have given Sevenstar Logistics Limited permission to do
                            so</li>
                        <li class="list-inside list-disc">Processing your personal information is in Sevenstar
                            Logistics Limited legitimate interests
                        </li>
                        <li class="list-inside list-disc">Sevenstar Logistics Limited needs to comply with the law
                        </li>
                    </ul>
                </p>
                <p class="p-5">

                    Sevenstar Logistics Limited will retain your personal information only for as long as is necessary
                    for the purposes set out in this Privacy Policy. We will retain and use your information to the
                    extent necessary to comply with our legal obligations, resolve disputes, and enforce our policies.

                    If you are a resident of the European Economic Area (EEA), you have certain data protection rights.
                    If you wish to be informed what Personal Information we hold about you and if you want it to be
                    removed from our systems, please contact us. Our Privacy Policy was generated with the help of GDPR
                    Privacy Policy Generator.
                    In certain circumstances, you have the following data protection rights:

                    <ul class="px-10">
                        <li class="list-inside list-disc">The right to access, update or to delete the information we
                            have on you.</li>
                        <li class="list-inside list-disc">The right of rectification.</li>
                        <li class="list-inside list-disc">The right to object.</li>
                        <li class="list-inside list-disc">The right of restriction.</li>
                        <li class="list-inside list-disc">The right to data portability</li>
                        <li class="list-inside list-disc">The right to withdraw consent</li>
                    </ul>
                </p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-three" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-three">Log Files</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">
                    sevenstarlog follows a standard procedure of using log files. These files log visitors when they
                    visit websites. All hosting companies do this and a part of hosting services' analytics. The
                    information collected by log files include internet protocol (IP) addresses, browser type, Internet
                    Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of
                    clicks. These are not linked to any information that is personally identifiable. The purpose of the
                    information is for analyzing trends, administering the site, tracking users' movement on the
                    website, and gathering demographic information.
                </p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-four" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-four">Cookies and Web Beacons</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">
                    Like any other website, sevenstarlog uses 'cookies'. These cookies are used to store information
                    including visitors' preferences, and the pages on the website that the visitor accessed or visited.
                    The information is used to optimize the users' experience by customizing our web page content based
                    on visitors' browser type and/or other information.

                </p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-five" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-five">Google DoubleClick DART Cookie</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">
                    Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to
                    serve ads to our site visitors based upon their visit to www.website.com and other sites on the
                    internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad
                    and content network Privacy Policy at the following URL –
                    https://policies.google.com/technologies/ads
                </p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-six" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-six">Our Advertising Partners</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">
                    Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed
                    below. Each of our advertising partners has their own Privacy Policy for their policies on user
                    data. For easier access, we hyperlinked to their Privacy Policies below.

                    <ul class="px-10">
                        <li class="list-inside list-disc">Google</li>
                        https://policies.google.com/technologies/ads
                    </ul>

                </p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-seven" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-seven">Privacy Policies</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">
                    You may consult this list to find the Privacy Policy for each of the advertising partners of
                    sevenstarlog.

                    Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons
                    that are used in their respective advertisements and links that appear on sevenstarlog, which are
                    sent directly to users' browser. They automatically receive your IP address when this occurs. These
                    technologies are used to measure the effectiveness of their advertising campaigns and/or to
                    personalize the advertising content that you see on websites that you visit.

                    Note that sevenstarlog has no access to or control over these cookies that are used by third-party
                    advertisers.
                </p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-eight" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-eight">Third Party Privacy Policies</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">
                    sevenstarlog's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising
                    you to consult the respective Privacy Policies of these third-party ad servers for more detailed
                    information. It may include their practices and instructions about how to opt-out of certain
                    options. You may find a complete list of these Privacy Policies and their links here: Privacy Policy
                    Links.

                    You can choose to disable cookies through your individual browser options. To know more detailed
                    information about cookie management with specific web browsers, it can be found at the browsers'
                    respective websites. What Are Cookies?
                </p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-nine" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-nine">Children's Information</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">
                    Another part of our priority is adding protection for children while using the internet. We
                    encourage parents and guardians to observe, participate in, and/or monitor and guide their online
                    activity.

                    sevenstarlog does not knowingly collect any Personal Identifiable Information from children under
                    the age of 13. If you think that your child provided this kind of information on our website, we
                    strongly encourage you to contact us immediately and we will do our best efforts to promptly remove
                    such information from our records.
                </p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-ten" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-ten">Online Privacy Policy Only</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">
                    Our Privacy Policy created at GDPRPrivacyPolicy.net applies only to our online activities and is
                    valid for visitors to our website with regards to the information that they shared and/or collect in
                    sevenstarlog. This policy is not applicable to any information collected offline or via channels
                    other than this website. Our GDPR Privacy Policy was generated from the GDPR Privacy Policy
                    Generator.
                </p>
            </div>
        </div>

        <div class="tab w-full overflow-hidden ">
            <input class="absolute opacity-0 " id="tab-privacy-eleven" type="checkbox" name="tabs">
            <label class="block p-5 leading-normal cursor-pointer text-2xl border-b-2 border-yellow-600"
                for="tab-privacy-eleven">Consent</label>
            <div class="tab-content overflow-hidden leading-normal">
                <p class="p-5">
                    By using our website, you hereby consent to our Privacy Policy and agree to its terms.
                </p>
            </div>
        </div>

    </div>
</div>

@include('partials.footer')

@endsection
