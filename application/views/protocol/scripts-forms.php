    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url(); ?>xyassets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>xyassets/app-assets/vendors/js/forms/wizard/bs-stepper.min.js"></script>
    <script src="<?php echo base_url(); ?>xyassets/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>xyassets/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>xyassets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>xyassets/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url(); ?>xyassets/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>xyassets/app-assets/js/scripts/forms/form-wizard.js"></script>
    <script src="<?php echo base_url(); ?>xyassets/app-assets/js/scripts/forms/form-repeater.js"></script>
    <!-- END: Page JS-->

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
</body>
<!-- END: Body-->

</html>