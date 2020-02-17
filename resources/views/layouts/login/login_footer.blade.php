<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{{ asset('public/global/plugins/respond.min.js') }}"></script>
<script src="{{ asset('public/global/plugins/excanvas.min.js') }}"></script> 
<![endif]-->
<script src="{{ asset('public/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/global/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/global/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('public/global/plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('public/global/plugins/select2/select2.min.js') }}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('public/global/scripts/metronic.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/admin/layout/scripts/layout.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/admin/layout/scripts/demo.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/admin/pages/scripts/login-soft.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
Layout.init(); // init current layout
  Login.init();
  Demo.init();
       // init background slide images
       $.backstretch([
        "{{ asset('public/admin/pages/media/bg/1.jpg') }}",
        "{{ asset('public/admin/pages/media/bg/2.jpg') }}",
        "{{ asset('public/admin/pages/media/bg/3.jpg') }}",
        "{{ asset('public/admin/pages/media/bg/4.jpg') }}"
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>