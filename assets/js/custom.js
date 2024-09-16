$(".close-menu").click(function(){
	$(".side--menu").toggleClass("close--side--menu");
	$(".main--menu").toggleClass("close--main--menu");
	$(".close-menu").toggleClass("open-menu");
	$(".content-value").toggleClass("close-content-value");
	$(".new-voice-foot").toggleClass("open-new-voice-foot");  
});

$("input[name=templet]").change(function() {
  updateAllChecked();
});

function updateAllChecked() {
  $('#recipients').text('');
  $("input[name=templet]").each(function() {
    if (this.checked) {
      let old_text = $('#recipients').text() ? $('#recipients').text() + ', ' : '';
      $('#recipients').text(old_text + $(this).val());
    }
  })
}

$(".thebirdseye").click(function(e){
	e.preventDefault();
    e.stopPropagation();
  	$("#thebirdseye").toggle();
}); 
$('#thebirdseye').click( function(e) {
    e.stopPropagation();
});
$('body').click( function() {
    $('#thebirdseye').hide();
});
$(".close-modal-card").click(function(){
  $("#thebirdseye").hide();
}); 

$(".thebirdseye").click(function(e){
	$("#referearn").hide();
	$("#thebirdseye").show();
	$("#notification").hide();
	$("#settings").hide();
	$("#helpsupport").hide();
});




$(".referearn").click(function(e){
	e.preventDefault();
    e.stopPropagation();
  	$("#referearn").toggle();
}); 
$('#referearn').click( function(e) {
    e.stopPropagation();
});
$('body').click( function() {
    $('#referearn').hide();
});
$(".close-modal-card").click(function(){
  $("#referearn").hide();
}); 
$(".referearn").click(function(e){
	$("#referearn").show();
	$("#thebirdseye").hide();
	$("#notification").hide();
	$("#settings").hide();
	$("#helpsupport").hide();
});


$(".notification").click(function(e){
	e.preventDefault();
    e.stopPropagation();
  	$("#referearn").toggle();
}); 
$('#notification').click( function(e) {
    e.stopPropagation();
});
$('body').click( function() {
    $('#notification').hide();
});
$(".close-modal-card").click(function(){
  $("#notification").hide();
}); 
$(".notification").click(function(e){
	$("#referearn").hide();
	$("#thebirdseye").hide();
	$("#notification").show();
	$("#settings").hide();
	$("#helpsupport").hide();
});

$(".settings").click(function(e){
	e.preventDefault();
    e.stopPropagation();
  	$("#referearn").toggle();
}); 
$('#settings').click( function(e) {
    e.stopPropagation();
});
$('body').click( function() {
    $('#settings').hide();
});
$(".close-modal-card").click(function(){
  $("#settings").hide();
}); 
$(".settings").click(function(e){
	$("#referearn").hide();
	$("#thebirdseye").hide();
	$("#notification").hide();
	$("#settings").show();
	$("#helpsupport").hide();
});


$(".helpsupport").click(function(e){
	e.preventDefault();
    e.stopPropagation();
  	$("#referearn").toggle();
}); 
$('#helpsupport').click( function(e) {
    e.stopPropagation();
});
$('body').click( function() {
    $('#helpsupport').hide();
});
$(".close-modal-card").click(function(){
  $("#helpsupport").hide();
}); 
$(".helpsupport").click(function(e){
	$("#referearn").hide();
	$("#thebirdseye").hide();
	$("#notification").hide();
	$("#settings").hide();
	$("#helpsupport").show();
});


$(".changetemplet").click(function(e){
	e.preventDefault();
    e.stopPropagation();
  	$("#changetemplet").toggle();
}); 
$('#changetemplet').click( function(e) {
    e.stopPropagation();
});
$('body').click( function() {
    $('#changetemplet').hide();
});
$(".close-modal-card").click(function(){
  $("#changetemplet").hide();
});

// $('#myTable').DataTable();
$('#myTable').DataTable( {
  "columnDefs": [
  	{ "width": "1%", "targets": 0 },
    { "width": "11%", "targets": 1 },
    { "width": "12%", "targets": 2 },
    { "width": "15%", "targets": 3 },
    { "width": "15%", "targets": 4 },
    { "width": "10%", "targets": 5 },
    { "width": "10%", "targets": 6 },
    { "width": "11%", "targets": 7 },
    { "width": "11%", "targets": 8 },
    { "width": "4%", "targets": 9},
  ]
});

let s=1;
$(".add-line").click(function () {
  $('.order-body').append('<tr><td><textarea placeholder="Type or click to select an item." name="item'+s+' "  id="item'+s+' " class="zform-control"></textarea></td><td><input type="number" placeholder="1" name="quantity'+s+'" id="quantity'+s+'" autocomplete="off"></td><td><input type="number" placeholder="10" name="rate'+s+'" id="rate'+s+'" autocomplete="off"></td><td class="text-right"><b>0.00</b></td><td></td></tr>');
s++;
});

$(".focus-field").focus(function(){
   $('.focus-modal').addClass("d-block");
})
$('.js-example-single').select2();



$('.table-check input:checkbox').change(function(){
    if($(this).is(":checked")) {
        $(this).closest('.test').find('.order-body tr').addClass("menuitemshow");
    } else {
        $('.order-body tr').removeClass("menuitemshow");
    }
});
  //side menu script starts below
  $(document).ready(function(){
    $(".close-menu").click(function(){
      $(".sales-coll").removeClass("show");
      $(".rem-col").removeClass("col-arrow");  
    });
  });
  
  $(document).ready(function(){
    $(".sales-trans").click(function(){
      $(".side--menu").removeClass("close--side--menu ");
      $(".content-value").removeClass("close-content-value");
      $(".accor-close").removeClass("open-menu");
      $(".main--menu").removeClass("close--main--menu");
      $(".rem-col").addClass("col-arrow");
    });
  });
    //side menu script ends above


