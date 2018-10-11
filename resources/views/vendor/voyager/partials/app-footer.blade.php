<link rel="stylesheet" href="/css/app.css">

<footer class="app-footer">
    <div style="padding: 1.5em;">
        Desenvolvido por <a href="https://github.com/denisakira">Denis Akira</a>
    </div>
    <div class="site-footer-right">
        @if (rand(1,100) == 100)
            <i class="voyager-rum-1"></i> {{ __('voyager.theme.footer_copyright2') }}
        @else
            {!! __('voyager.theme.footer_copyright') !!} <a href="http://thecontrolgroup.com" target="_blank">The Control Group</a>
        @endif
        @php $version = Voyager::getVersion(); @endphp
        @if (!empty($version))
            - {{ $version }}
        @endif
    </div>
</footer>
