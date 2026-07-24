<!-- End sidebar widget content -->
@php
    $whatsappNumber = '919694004477';

    $smartMsg = rawurlencode("Hi QuarkCars,\n\nI want to purchase SMART PACK Membership.\n\nPrice: ₹4,999/year\n\nPlease share payment details and activation process.");
    $goldMsg = rawurlencode("Hi QuarkCars,\n\nI want to purchase GOLD PACK Membership.\n\nPrice: ₹9,999/year\n\nPlease share payment details and activation process.");
    $premiumMsg = rawurlencode("Hi QuarkCars,\n\nI want to purchase PREMIUM PACK Membership.\n\nPrice: ₹14,999/year\n\nPlease share payment details and activation process.");
    $generalMsg = rawurlencode("Hi QuarkCars,\n\nI would like more information about your car rental services, self-drive cars, memberships, and current offers.\n\nPlease contact me.");
@endphp
<div class="chat-icon"><a onclick="return gtag_report_conversion('https://wa.me/{{ $whatsappNumber }}?text={{ $generalMsg }}');" href="https://wa.me/{{ $whatsappNumber }}?text={{ $generalMsg }}" target="_blank" rel="noopener noreferrer"><button type="button" class="chat-toggler"><i class="fab fa-whatsapp"></i></button></a></div>




