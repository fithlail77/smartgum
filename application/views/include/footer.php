<!-- Custom template | don't include it in your project! -->
<div class="custom-template">
    <div class="title">Kustomisasi</div>
    <div class="custom-content">
        <div class="switcher">
            <div class="switch-block">
                <h4>Topbar</h4>
                <div class="btnSwitch">
                    <button type="button" class="changeMainHeaderColor" data-color="blue"></button>
                    <button type="button" class="changeMainHeaderColor" data-color="purple"></button>
                    <button type="button" class="changeMainHeaderColor" data-color="light-blue"></button>
                    <button type="button" class="selected changeMainHeaderColor" data-color="green"></button>
                    <button type="button" class="changeMainHeaderColor" data-color="orange"></button>
                    <button type="button" class="changeMainHeaderColor" data-color="red"></button>
                    <button type="button" class="changeMainHeaderColor" data-color="pink"></button>
                </div>
            </div>
            <div class="switch-block">
                <h4>Background</h4>
                <div class="btnSwitch">
                    <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                    <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                    <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                </div>
            </div>
        </div>
    </div>
    <div class="custom-toggle">
        <i class="flaticon-settings"></i>
    </div>
</div>
<!-- End Custom template -->
</div>
</div>
<!--   Core JS Files   -->
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/core/popper.min.js"></script>
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Moment JS -->
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/plugin/moment/moment.min.js"></script>

<!-- Chart JS -->
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Bootstrap Toggle -->
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Google Maps Plugin -->
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/plugin/gmaps/gmaps.js"></script>

<!-- Sweet Alert -->
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Azzara JS -->
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/ready.min.js"></script>

<!-- Azzara DEMO methods, don't include it in your project! -->
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/setting-demo.js"></script>
<script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/demo.js"></script>
<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>
<script>
    $(document).ready(function() {
        $('#basic-datatables').DataTable({
            scrollX: true,
        });

        $('#multi-filter-select').DataTable({
            "pageLength": 5,
            initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var select = $('<select class="form-control"><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>')
                    });
                });
            }
        });

        // Add Row
        $('#add-row').DataTable({
            "pageLength": 5,
        });

        var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $('#addRowButton').click(function() {
            $('#add-row').dataTable().fnAddData([
                $("#addName").val(),
                $("#addPosition").val(),
                $("#addOffice").val(),
                action
            ]);
            $('#addRowModal').modal('hide');

        });
    });
</script>
</body>

</html>