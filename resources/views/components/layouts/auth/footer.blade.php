@stack('footer_start')
<footer class="footer">
    <div class="lg:absolute bottom-10 right-6 lg:right-24 flex flex-col sm:flex-row items-center justify-end text-sm font-light">
        {{ trans('Powered by Codyas') }}:&nbsp;<x-link href="{{ trans('https://www.Codyas.com') }}" target="_blank" override="class">{{ trans('Software de Contabilidad') }}</x-link>
    </div>
</footer>
@stack('footer_end')
