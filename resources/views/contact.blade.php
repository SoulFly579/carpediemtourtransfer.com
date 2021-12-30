@extends("layouts.master")
@section("content")
<img class="banner" src="{{asset("/img")}}/contact_title_image.jpg" alt="">
<div class="container content corporate_file">
    <div class="row">
        <div class="col-md-3 sidebar">
            <h4>{{__("contact.contact")}}</h4>
            <ul>
                <li>
                    <a href="#contact_section">{{__("contact.contact")}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                      </svg></a>
                </li>
            </ul>
        </div>
        <div class="posts col-md-9">
            <div class="mini_url"><a href="{{url("/".app()->getLocale())}}">{{__("home.home")}}</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;<a href="{{url("/".app()->getLocale()."/contact")}}">{{__("contact.contact")}}</a></div>
            <section class="contact" id="contact_section">
                <h2>{{__("contact.contact")}}</h2>
                <p><strong>CARPEDIEM</strong></p>
                <p>Küçük Ayasofya caddesi no:30 kat:3 Sultanahmet / Fatih İstanbul</p>
                <p>+90 542 231 24 46</p>
                <p>info@carpediemtourtransfer.com</p>
                <p>www.<strong>carpediemtourtransfer</strong>.com</p>
                <h2>{{__("home.map")}}</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.979173949761!2d28.97308931570484!3d41.00382902764688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab998105c8c63%3A0x28a970c77849a472!2zS8O8w6fDvGsgQXlhc29meWEgTWFoYWxsZXNpLCBLw7zDp8O8ayBBeWFzb2Z5YSBDZC4gTm86MzAsIDM0MTIyIEZhdGloL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1640023416657!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </section>
        </div>
    </div>
</div>
@endsection
