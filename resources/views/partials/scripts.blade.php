    </div>
</div>

<!-- Scripts -->
@routes
{!! HTML::script(asset('https://use.fontawesome.com/ffe4b59639.js'), array('type' => 'text/javascript')) !!}
{!! HTML::script(asset('/js/manifest.js'), array('type' => 'text/javascript')) !!}
{!! HTML::script(asset('/js/vendor.js'), array('type' => 'text/javascript')) !!}
{!! HTML::script(asset('/js/app.js'), array('type' => 'text/javascript')) !!}
@yield('addScripts')
</body>
</html>
