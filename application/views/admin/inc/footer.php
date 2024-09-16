<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src='<?php echo base_url()?>assets/js/jquery.dataTables.min.js'></script>
    <script src="<?php echo base_url()?>assets/js/select2.min.js"></script>
 <script src="<?php echo base_url()?>assets/js/custom.js"></script>
   
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
                    <script src="<?=base_url()?>assets/js/select2.min.js"></script>
                    <!--chart script starts below-->
                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    <script src="https://code.highcharts.com/modules/pareto.js"></script>
                    <script src="https://code.highcharts.com/modules/exporting.js"></script>
                    <script src="https://code.highcharts.com/modules/export-data.js"></script>
                    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                    <!--chart script ends above-->


    
   <!-- modual -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
   

    
    
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
   
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    
   
    
  
                    <script>
        $(document).ready(function() {
            $(".input-img2").click(function() {
                
                $('.admin-card').removeClass("d-none");
            });
        });
    </script>
    <script>

 

        $(".input-img2").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    $(".admin-card").toggle();
}); 
$('.admin-card').click( function(e) {
    e.stopPropagation();
});
$('body').click( function() {
    $('.admin-card').hide();
});
$(".close-img-1").click(function(){
  $(".admin-card").hide();
}); 
    </script>

<script>
        $(document).ready(function() {

            var flg = 0;

            $('#select').on("select2:open", function() {
                flg++;
                if (flg == 1) {
                    $this_html = jQuery('#wrp').html();
                    $(".select2-results").append("<div class='select2-results__option'>" +
                        $this_html + "</div>");
                }
            });

        });
    </script>

    <script>
        $(document).ready(function() {

            var flg = 0;

            $('#select1').on("select2:open", function() {
                flg++;
                if (flg == 1) {
                    $this_html = jQuery('#wrp1').html();
                    $(".select2-results").append("<div class='select2-results__option'>" +
                        $this_html + "</div>");
                }
            });

        });
    </script>

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script>
        var $TABLE = $('#table');
        var $BTN = $('#export-btn');
        var $EXPORT = $('#export');

        $('.table-add').click(function() {
            var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
            $TABLE.find('table').append($clone);
        });

        $('.table-remove').click(function() {
            $(this).parents('tr').detach();
        });

        $('.table-up').click(function() {
            var $row = $(this).parents('tr');
            if ($row.index() === 1) return; // Don't go above the header
            $row.prev().before($row.get(0));
        });

        $('.table-down').click(function() {
            var $row = $(this).parents('tr');
            $row.next().after($row.get(0));
        });

        // A few jQuery helpers for exporting only
        jQuery.fn.pop = [].pop;
        jQuery.fn.shift = [].shift;

        $BTN.click(function() {
            var $rows = $TABLE.find('tr:not(:hidden)');
            var headers = [];
            var data = [];

            // Get the headers (add special header logic here)
            $($rows.shift()).find('th:not(:empty):not([data-attr-ignore])').each(function() {
                headers.push($(this).text().toLowerCase());
            });

            // Turn all existing rows into a loopable array
            $rows.each(function() {
                var $td = $(this).find('td');
                var h = {};

                // Use the headers from earlier to name our hash keys
                headers.forEach(function(header, i) {
                    h[header] = $td.eq(i).text(); // will adapt for inputs if text is empty
                });

                data.push(h);
            });

            // Output the result
            $EXPORT.text(JSON.stringify(data));
        });
    </script>
    <!-- data table -->
    <script>
        // Add row
        var row = 1;
        $(document).on("click", "#add-row", function() {

            if ($(".hidden-column").hasClass("d-none")) {
                var new_row = '<tr id="row' + row + '">  <td><select class="form-control" id="exampleFormControlSelect1"><option></option><option>Mr.</option><option>Mrs.</option><option>Miss.</option><option>Dr.</option></select></td> <td><input name="from_value' + row + '" type="text" class="form-control" /></td> <td><input name="from_value' + row + '" type="text" class="form-control" /></td><td><input name="from_value' + row + '" type="text" class="form-control" /></td><td><input name="from_value' + row + '" type="text" class="form-control" /></td><td><input name="from_value' + row + '" type="text" class="form-control" /></td><td class="hidden-column d-none"><input name="from_value' + row + '" type="text" class="form-control" /></td><td class="hidden-column d-none"><input name="from_value' + row + '" type="text" class="form-control" /></td><td class="hidden-column d-none"><input name="to_value' + row + '" type="text" class="form-control" /></td><td><div class="d-flex mt-2"><div class="mr-2 ml-2 more-border more"><i class="fa fa-ellipsis-h " data-toggle="tooltip" data-placement="top" title="Show More details" class="a-border" aria-hidden="true"></i> </div><i class="fa fa-times delete-row align-self-center"  data-toggle="tooltip" data-placement="top" title="delete" class="a-border" aria-hidden="true"></i></div></td></tr>';
            } else {

                var new_row = '<tr id="row' + row + '">  <td><select class="form-control" id="exampleFormControlSelect1"><option></option><option>Mr.</option><option>Mrs.</option><option>Miss.</option><option>Dr.</option></select></td> <td><input name="from_value' + row + '" type="text" class="form-control" /></td> <td><input name="from_value' + row + '" type="text" class="form-control" /></td><td><input name="from_value' + row + '" type="text" class="form-control" /></td><td><input name="from_value' + row + '" type="text" class="form-control" /></td><td><input name="from_value' + row + '" type="text" class="form-control" /></td><td class="hidden-column "><input name="from_value' + row + '" type="text" class="form-control" /></td><td class="hidden-column "><input name="from_value' + row + '" type="text" class="form-control" /></td><td class="hidden-column "><input name="to_value' + row + '" type="text" class="form-control" /></td> <td> <div class="d-flex mt-2"><i class="fa fa-times delete-row align-self-center" aria-hidden="true"></i>   </div></td></tr>';
            }

            $('#test-body').append(new_row);
            row++;
            return false;

        });

        // Remove criterion
        $(document).on("click", ".delete-row", function() {
            //  alert("deleting row#"+row);
            if (row > 1) {
                $(this).closest('tr').remove();
                row--;
            }
            return false;
        });
        // more criterion
        $(document).on("click", ".more", function() {

            $('.hidden-column').removeClass("d-none");
            $(".more").addClass("d-none");


        });
    </script>
    <script>
        $(document).ready(function() {
            $(".close-img-1").click(function() {
                $('.admin-card').addClass("d-none");
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".input-feild-").click(function() {
                $('.input-feild-').addClass("d-none");
                $('.add-input').removeClass("d-none");
            });
        });
    </script>