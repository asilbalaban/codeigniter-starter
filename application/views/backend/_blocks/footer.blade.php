


    <!-- Core Scripts - Include with every page -->
    <script src="{{base_url('public/assets/sbadmin/js/jquery-1.10.2.js')}}"></script>
    <script src="{{base_url('public/assets/sbadmin/js/bootstrap.min.js')}}"></script>
    <script src="{{base_url('public/assets/sbadmin/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="{{base_url('public/assets/sbadmin/js/plugins/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{base_url('public/assets/sbadmin/js/plugins/morris/morris.js')}}"></script>


    @yield('scripts')

    <!-- SB Admin Scripts - Include with every page -->
    <script src="{{base_url('public/assets/sbadmin/js/sb-admin.js')}}"></script>


    @yield('beforeBodyClose')
</body>

</html>