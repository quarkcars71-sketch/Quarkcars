<!-- End sidebar widget content -->
@php
    $whatsappNumber = '919694004477';

    $smartMsg = rawurlencode("Hi QuarkCars,\n\nI want to purchase SMART PACK Membership.\n\nPrice: ₹4,999/year\n\nPlease share payment details and activation process.");
    $goldMsg = rawurlencode("Hi QuarkCars,\n\nI want to purchase GOLD PACK Membership.\n\nPrice: ₹9,999/year\n\nPlease share payment details and activation process.");
    $premiumMsg = rawurlencode("Hi QuarkCars,\n\nI want to purchase PREMIUM PACK Membership.\n\nPrice: ₹14,999/year\n\nPlease share payment details and activation process.");
    $generalMsg = rawurlencode("Hi QuarkCars,\n\nI would like more information about your car rental services, self-drive cars, memberships, and current offers.\n\nPlease contact me.");
@endphp
<div class="chat-icon"><a href="https://wa.me/{{ $whatsappNumber }}?text={{ $generalMsg }}" target="_blank" rel="noopener noreferrer"><button type="button" class="chat-toggler"><i class="fab fa-whatsapp"></i></button></a></div>
<!--Chat Popup-->
<!-- <div id="chat-popup" class="chat-popup">
    <div class="popup-inner">
        <div class="close-chat"><i class="fa fa-times"></i></div>
        <div class="chat-form">
            <p>Please fill out the form below and we will get back to you as soon as possible.</p>
            <form action="assets/inc/sendemail.php" method="POST" class="contact-form-validated">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Your Text" required></textarea>
                </div>
                <div class="form-group message-btn">
                    <button type="submit" class="thm-btn">
                        Submit Now
                    </button>
                </div>
                <div class="result"></div>
            </form>
        </div>
    </div>
</div> -->



