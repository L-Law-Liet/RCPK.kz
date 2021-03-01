
<!-- Footer -->

<footer class="footer" style="background: #073759; padding-bottom: 1rem;">
    <div class="mx-md-5 px-md-5 mx-3 pb-3 d-flex justify-content-between">
        <div>{{setting((app()->getLocale() == 'ru')?'site.footer_text':'site.footer_text_'.app()->getLocale())}}</div>
        <div>{{setting((app()->getLocale() == 'ru')?'site.footer_address':'site.footer_address_'.app()->getLocale())}}</div>
    </div>
</footer>
