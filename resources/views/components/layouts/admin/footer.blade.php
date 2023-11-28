@stack('footer_start11')
    <footer class="footer container">
        <div class="flex flex-col sm:flex-row items-center justify-between lg:mt-20 py-7 text-sm font-light">
            <div>
                {{ trans('Powered by CODYAS') }}:
                <x-link href="{{ trans('https://www.codyas.com') }}" target="_blank" override="class">{{ trans('Software de Contabilidad') }}</x-link>
                &nbsp;<span class="material-icons align-middle text-black-300">code</span>&nbsp;
                {{ trans('footer.version') }} {{ version('short') }}
            </div>
        </div>
    </footer>
@stack('footer_end111')
