$(document).ready(function () {
        $(document).on("click", "[data-toggle='modal']", function () {
            $('#modal-delete').modal();
            $('#timelog_adminbundle_delete_id').val($(this).attr("data-content"));
        });


        $('#printBtn').on("click", function () {
            $('#timelog_adminbundle_log_week_printing').val('letsprint');
        });

        $('#week-listing').on("click", function () {
            $('#timelog_adminbundle_log_week_printing').val('');
        });

        $('#timelog_adminbundle_timeoff_timeOffDate').datepicker({
            controlType: 'select',
            dateFormat: 'yy-mm-dd',
        });

        $('#timelog_adminbundle_time_off_search_timeOffDate').datepicker({
            controlType: 'select',
            dateFormat: 'yy-mm-dd',
        });

        $('#timelog_adminbundle_workorders_workOrderDate').datepicker({
            controlType: 'select',
            dateFormat: 'yy-mm-dd',
        });

        $('#timelog_adminbundle_work_orders_search_workOrdersDate').datepicker({
            controlType: 'select',
            dateFormat: 'yy-mm-dd',
        });

        $('#timelog_adminbundle_log_arrived').datetimepicker({
            controlType: 'select',
            dateFormat: 'yy-mm-dd',
            timeFormat: 'H:mm'
        });

        $('#timelog_adminbundle_log_departured').datetimepicker({
            controlType: 'select',
            dateFormat: 'yy-mm-dd',
            timeFormat: 'H:mm'
        });

        $('#timelog_adminbundle_log_search_arrived').datetimepicker({
            controlType: 'select',
            dateFormat: 'yy-mm-dd',
            timeFormat: 'H:mm'
        });

        $('#timelog_adminbundle_log_search_departured').datetimepicker({
            controlType: 'select',
            dateFormat: 'yy-mm-dd',
            timeFormat: 'H:mm'
        });
    }
);


$.timepicker.regional['hu'] = {
    timeText: 'Idő',
    hourText: 'Óra',
    minuteText: 'Perc',
    currentText: 'Most',
    closeText: 'Bezárás',
};

$.timepicker.setDefaults($.timepicker.regional['hu']);



