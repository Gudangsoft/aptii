<script src="{{ asset('assets') }}/vendors/js/vendors.min.js"></script>
@stack('page-vendor')

@stack('custom-scripts')


<script src="{{ asset('assets') }}/js/core/app-menu.js"></script>
<script src="{{ asset('assets') }}/js/core/app.js"></script>

@stack('page-js')

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
