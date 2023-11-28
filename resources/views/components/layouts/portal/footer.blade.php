@stack('footer_start')
    <footer class="footer container">
        <div class="flex flex-col sm:flex-row items-center justify-between lg:mt-20 py-7 text-sm font-light">
            <div>
                {{ trans('Powered by CODYAS') }}:
                <a href="{{ trans('https://www.codyas.com') }}" target="_blank">{{ trans('Software de Contabilidad') }}</a> |
                {{ trans('footer.version') }} {{ version('short') }}
            </div>
        </div>
    </footer>
@stack('footer_end')
