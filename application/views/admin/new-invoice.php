<html>
<?php include('inc/header.php');?>
  <body>
  <?php include('inc/menu.php');?>

            <div class="main--menu">
                
                <div class="d-flex new--">
                    <div class="d-flex mr-auto">
                        <div class="mr-2"><img src="<?php echo base_url()?>assets/images/document.png"></div>
                        <h2>New Invoice</h2>
                    </div>
                    <div class="mr-3"><a href="#" class="tips"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Page Tips</a></div>
                    <div><img src="<?php echo base_url()?>assets/images/close.png"></div>
                </div>
                <form class="custom-field mt-3 page-buttom" action="<?php echo base_url()?>Invoice/add_invoice" method="post">
                    <div class=" new--invoice">
                        <div class="form-group d-flex mx-500">
                            <label class="align-self-center mb-0">Customer Name</label>
                            <select name="customer_id" id="area" class="form-control  js-example-single"required>
                              <?php foreach($getdetails as $row){?>
                                <option value="<?=$row->sk_client_id;?>"><?=$row->primary_contact;?></option><?php }?>

                            </select>
                        </div>  
                        <div class="form-group d-flex mx-500">
                            <label class=" align-self-center mb-0">Invoice</label>
                            <input type="text" name="invoice_no" class="form-control" id=""required>
                        </div>
                        <div class="form-group  d-flex mx-500">
                            <label class=" align-self-center mb-0">Order Number</label> 
                            <input type="number" name="order_no" class="form-control" id=""required>
                        </div>
                        <div class="d-flex">
                            <div class="form-group d-flex mx-500">
                                <label class=" align-self-center mb-0">Invoice Date</label>
                                <input type='date' name="invoice_date" class='datepicker-here form-control' data-language='en' required/>
                            </div>
                            <div class="d-flex  ml-4">
                                <div class="form-group d-flex mr-4 mx-350">
                                    <label class=" align-self-center mb-0">Terms</label>
                                    <select data-bv-notempty-message="Please select area" name="terms" id="area" class="form-control  js-example-single" required>
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="form-group d-flex">
                                    <label class=" align-self-center mb-0">Due Date</label>
                                    <input type='date' name="due_date" class='datepicker-here form-control' data-language='en'required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group d-flex mx-500">
                            <label class="align-self-center mb-0">Salespersone</label>
                            <select name="slesperson" id="area" class="form-control  js-example-single" required>
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div> 
                        <div class="form-group d-flex mx-500">
                            <label class="align-self-center mb-0">Subject</label>
                            <textarea name="subject" class="form-control"required></textarea>
                        </div> 
                         <div>
                         <div class=" mb-5 new-invoice-table">
                          <div class="col-md-12 pl-0">
                            <div class="table-responsive  data-tabele-1 mb-3">
                              <table id="test-table" class="table table-condensed">
                                <thead  class="thead-light">
                                  <tr>
                                    <th class="frist-feild">ITEM DETAILS</th>
                                    <th>QUANTITY</th> 
                                     <th>RATE</th>
                                      <th>AMOUNT</th>
                                      <th><div class="mr-2  more-border- ">
                                            <i class="fa fa-ellipsis-h pt-1" data-toggle="tooltip" data-placement="top" title="Show More details" class="a-border" aria-hidden="true"></i> 
                                          </div></th>
                                  </tr>
                                </thead>
                                 <tbody id="test-body" class="table-td new-invoice">
                                  <tr id="row0">
                                    <td>
                                         <div class="form-group  frist mb-0 ">
                                    <select name="select_item"class="form-control select2-hidden-accessible  js-example-single w-100  frist selectpicker form-control " data-plugin="select2" id='select' tabindex="-1" aria-hidden="true" data-placeholder="Select a Item"required>
                                         <option data-foo="We dare to defend our rights" value="Alabama">Alabama</option>
                                        <option data-foo="North to the Future" value="Alaska">Alaska</option>
                                        <option data-foo="Eureka" value="California">California</option>
                                        <option data-foo="Liberty and Independence" value="Delaware">Delaware</option>
                                        <option data-foo="Agriculture and Commerce" value="Tennessee">Tennessee</option>
                                        <option data-foo="Friendship"  value="Texas">Texas</option>
                                        <option data-foo="Bye and bye" value="Washington">Washington</option>
                                    </select>
                                    <div class="wrapper" id="wrp" style="display: none;">
                                     <a href="#" id="type" class="font-weight-300" data-toggle="modal" data-target="#new-invoice">+ Add New Currency</a>
                                    </div>
                                     </div>
                                    </td>
                                     <td>
                                      <input name='quantity' type='number' class='form-control input-md text-right' value="1.00"required />
                                    </td>
                                    <td>
                                      <input name='rate' type='number' class='form-control input-md text-right' value="0.00" required/>
                                    </td>
                                    <td>
                                      <input  id="amount" value="0.00" type='number' class='form-control input-md text-right'  readonly="readonly"required/>
                                    </td>
                                    <td class="border-new" style="border:1px solid #dee2e6 !important;">
                                      <div class="d-flex mt-2 ml-1">
                                          <div class="mr-2 ml-2 more-border more">
                                            <i class="fa fa-ellipsis-h pt-1" data-toggle="tooltip" data-placement="top" title="Show More details" class="a-border" aria-hidden="true"></i> 
                                          </div>
                                          <i class="fa fa-times delete-row align-self-center"  data-toggle="tooltip" data-placement="top" title="delete" class="a-border" aria-hidden="true"></i>   
                                      </div>
                                    
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                             
                            </div>
                             <div class="btn-group change-btn">
                                  <a href="#" id='add-row-1' class='btn ' type='button' value='Add' /><i class="fa fa-plus-circle mr-1" aria-hidden="true"></i>Add Contact Person </a>
                                  <button type="button" class="btn-1  change-btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Add items in Bulk</a>
                                    <a class="dropdown-item" href="#">Add item Header</a>
                                  </div>
                                </div>
                          </div>
                        </div>
                         </div>
                        <div class="row">
                            <div class="col-md-6 align-self-flex-end">
                                <div class="form-group cust--notes">
                                    <label>Customer Notes</label>
                                    <textarea value="" name="customer_notes" id="item" class="zform-control "required>Thanks for your business.</textarea>
                                    <p>Will be displayed on the invoice</p>
                                </div>
                            </div>
                            <div class="col-md-6 sub-total">
                                <div class="bg-clr">
                                    <div class="row mb-4">
                                        <div class="col-10"><p>Sub Total</p></div>
                                        <div class="col-2 align-self-center"><p></p></div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-10 d-flex">
                                            <p class="col-4 pl-0 align-self-center">Discount</p>
                                            <div class="d-flex col-8">
                                                <div class="form-group mb-0">
                                                    <input type="text" class="form-control" name="discount"required>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <select name="currency_type" class="form-control" id=""required>
                                                      <option>₹</option>
                                                      <option>%</option>
                                                    </select>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-2 align-self-center"><p>0.00</p></div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-10 d-flex">
                                            <div class="form-group mb-0 pl-0 col-4">
                                                <input type="text" class="form-control adjust" value="Adjustment" name="adjustment"required>
                                            </div>
                                            <div class="form-group mb-0 col-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-2 align-self-center"><p>0.00</p></div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-10 d-flex">
                                            <p class="col-4 pl-0">TCS</p>
                                            <div class="form-group mb-0 col-8 select-tax">
                                                <select name="select_tax" id="tax" class="form-control  js-example-single" required>
                                                    <option value="">Select a tax</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                                   
                                            </div>
                                        </div>
                                        <div class="col-2 align-self-center"><p>0</p></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-10 d-flex">
                                            <h6 class="">Total ( ₹ )</h6>
                                        </div>
                                        <div class="col-2 align-self-center"><h6>0.00</h6></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="terms--conditions new--invoice">
                        <div class="row mt-3">
                            <div class="col-md-7">
                                <div class="form-group cust--notes-1">
                                    <label>Terms & Conditions</label>
                                    <textarea name="conditions" id="item" class="form-control" placeholder="Enter the terms and conditions of your business to be displayed in your transaction"required></textarea>
                                </div>
                            </div>
                            <div class="col-md-5 my-auto">
                             
                             
                                <input type="file"  name="upload_file" id="file-upload" class="d-none" multiple/>
                                <div class="d-flex file-1">
                                    <label for="file-upload" class="mr-3"><i class="fa fa-upload " aria-hidden="true"></i>Upload file</label>
                                     <div id="file-upload-filename" class="align-self-center"></div>
                                </div>
                            
                            </div>
                        </div>
                        <h6 class="paid-fast pt-3">Want to get paid faster?</h6>
                        <div class="than position-relative">
                          <p class="paid-fast-p pb-4">Configure payment gateways and receive payments online.
                         <span class="payment ">Set up Payment Gateway</span>
                          <div class="order-card d-none ">
                              <div class="card" >
                                 <div class="card-body">
                                     <p class="card-title text-center">Configure and add more gateways from here!</p>
                                     <div class="d-flex mb-3"><div class="align-self-center mr-2"><img src="<?php echo base_url()?>assets/images/razpay.png"></div>
                                        <div class="align-self-center">
                                            <img src="<?php echo base_url()?>assets/images/eazypay.png">
                                        </div>
                                     </div>
                                     <div class="d-flex justify-content-between">
                                        <div><a href="#"><img src="<?php echo base_url()?>assets/images/paytem.png"></a></div>
                                        <div><a href="#"><img src="<?php echo base_url()?>assets/images/paypal.png"></a></div>
                                        <div><a href="#"><img src="<?php echo base_url()?>assets/images/check-out.PNG"></a></div>
                                      </div>
                                 </div>
                              </div>
                            </div>
                        </p> 
                        </div>
                    
                        <p class="pb-5 pt-4"><b>Additional Fields:</b> Start adding custom fields for your invoices by going to Settings <b class="px-2">></b>  Preferences <b class="px-2">></b> Invoices. You can add as many as <b>Ten</b> extra fields.</p>
                           <!-- <img class="input-img2" src="images/settings.png"> -->
                               
                    </div>

                    <div class="new-voice-foot d-flex">
                        <div class="mr-auto">
                            <button type="submit" class="grey-btn mr-2">Save as Draft</button>
                            <button type="submit" class="secoundry-btn mr-2">Save and Send</button>
                            <button type="submit" class="grey-btn mr-2">Cancel</button>
                        </div>
                        </form>
                        <div class="align-self-center new-voice-foot-1 ">
                            <p class="temp d-flex"><b class="align-self-center">Template:</b> <textarea class="form-control  bx-shadow select-cat" id="recipients" readonly="">Spreadsheet Template</textarea> <a href="javascript:void(0)" class="changetemplet align-self-center"> Change</a></p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
<!-- Change templet -->
<div class="modal-card" id="changetemplet">
    <div class="notify-head">
        <div class="d-flex">
            <h6 class="mr-auto">Choose Template</h6>
            <div class="close-modal-card">
                <img src="<?php echo base_url()?>assets/images/close.png">
            </div>
        </div>
        <div class="form-group mb-0 mt-3 position-relative">
            <input type="text" class="form-control" name="search" placeholder="Search Settings">
            <img class="search" src="<?php echo base_url()?>assets/images/search.png">
        </div>
    </div> 
    <div class="p-117">
        <div>
              <div class="custom-control custom-radio boxed mb-2">
          <input type="radio" id="customRadio1" name="templet" value="Spreadsheet Template" class="custom-control-input" checked>
          <label class="custom-control-label" for="customRadio1"><img src="<?php echo base_url()?>assets/images/account.png"></label>
           <div class="hide"><span  class="custom-control-label"  for="customRadio1">Choose Template</span></div>
        </div>
      <!--   <p> Spreadsheet Template</p> -->
        <div class="custom-control custom-radio boxed mb-2">
          <input type="radio" id="customRadio2" name="templet" value="Standard Template" class="custom-control-input">
          <label class="custom-control-label" for="customRadio2"><img src="<?php echo base_url()?>assets/images/account.png"></label>
           <div class="hide"><span   class="custom-control-label" for="customRadio2">Choose Template</span></div>
        </div>
           
        </div>
      
        <div class="row ml-3">
          <div class="col-md-6">
            <p>Spreadsheet Template</p>  
          </div> 
          <div  class="col-md-6">
              <p>Standard Template</p>   
          </div> 
        </div>
    </div> 
</div>
<!-- Change templet -->
<!-- Modal -->
<div class="modal fade" id="additem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>

    </div>
  </div>
</div>
<!-- modual -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal-main">
  <div class="modal fade" id="new-invoice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-0">
          <div class="frist-md-1 p-3">
               <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="inputPassword4">Type</label>
                </div>
                 <div class="form-group col-md-4">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input">
                        <label class="custom-control-label pt-1" for="customRadioInline1">Good</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="customRadioInline" class="custom-control-input">
                        <label class="custom-control-label pt-1" for="customRadioInline2">Service</label>
                      </div>
                  </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-3">
                   <label for="inputAddress">Name<sup>*</sup></label>
                </div>
                 <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="inputAddress" >
                  </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-3">
                   <label for="inputAddress">Unit</label>
                </div>
                 <div class="form-group col-md-6 last-select">
                   <select name="area" id="area" class="form-control  js-example-single" >
                        <option value=""></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">3</option>
                        <option value="5">3</option>
                        <option value="6">3</option>
                    </select>
                  </div>
              </div> 
            </div>
            <div class="p-3">
               <div class="form-row">
                <div class="form-group col-md-6">
                    <div class="form-check form-check-inline mb-3">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
                      <label class="form-check-label pt-1" for="inlineCheckbox3">Sales Information</label>
                    </div> 
                    <div class="form-row">
                      <div class="form-group col-md-4 align-self-center">
                        <label class="changeme1 a-border">Selling Price<sup>*</sup></label> 
                      </div>
                    <div class="form-group col-md-8">
                     <div class="col-auto">
                        <div class="input-group mb-2 input-disable">
                          <div class="input-group-prepend">
                            <div class="input-group-text">INR</div>
                            </div>
                             <input type="text" class="form-control ll" id="yourText" placeholder="Cost of Goods Sold"   />
                       </div>
                      </div>
                    </div>
                  </div>
                    <div class="form-row">
                      <div class="form-group col-md-4 align-self-center">
                        <label class="changeme1 a-border">Account<sup>*</sup></label> 
                      </div>
                    <div class="form-group col-md-8">
                     <div class="col-auto">
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text">INR</div>
                            </div>
                             <input type="text" class="form-control ll" id="yourText" placeholder="Cost of Goods Sold"   />
                       </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="exampleFormControlTextarea1">Description</label>
                    </div>
                    <div class="form-group col-md-8">
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div> 
                  </div>
                </div>
                 <div class="form-group col-md-6 ">
                  <div class="form32">
                    <div class="ml-3 mb-3">
                       <input class="form-check-input toggle" type="checkbox" id="toggleElement" onchange="toggleStatus()" />
                      <label class="form-check-label pt-1" for="toggleElement"> Remember me</label>
                    </div>
                     
                     <div class="form-row elementsToOperateOn " >
                        <div class="form-group col-md-3 align-self-center">
                         <label class="changeme a-border">Cost Price<sup>*</sup></label> 
                        </div>
                        <div class="form-group col-md-8">
                           <div class="col-auto">
                              <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">INR</div>
                                </div>
                                <input type="text" class="form-control ll" id="yourText" placeholder="Cost of Goods Sold"  disabled="disabled" />
                              </div>
                            </div>
                        </div>
                      </div>
                       <div class="form-row elementsToOperateOn " >
                        <div class="form-group col-md-3">
                         <label class="changeme a-border">Account<sup>*</sup></label> 
                        </div>
                        <div class="form-group col-md-8">
                           <div class="col-auto">
                              <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">INR</div>
                                </div>
                                <input type="text" class="form-control ll" id="yourText" placeholder="Cost of Goods Sold"  disabled="disabled" />
                              </div>
                            </div>
                        </div>
                      </div>
                       <div class="form-row elementsToOperateOn " >
                        <div class="form-group col-md-3">
                         <label>Description</label> 
                        </div>
                        <div class="form-group col-md-8">
                           <div class="col-auto">
                              <div class="input-group mb-2">
                                <textarea type="text" class="form-control ll" id="yourText" placeholder="Cost of Goods Sold"  disabled="disabled" size='4'/></textarea> 
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
  
                  </div>
              </div> 
            </div>
              
        </div>
        <div class="modal-footer justify-content-start">
          <button type="submit" class="secoundry-btn mr-2">Save </button>
          <button type="submit" class="grey-btn mr-2"data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
   

  </div>
</div>
<?php include('inc/footer.php');?>


      <script>
     // Add row
 
  var row=1;
  $(document).on("click", "#add-row-1", function () {
  
     $(".form-control").selectpicker();
      var new_row = '<tr id="row' + row + '"><td><input type="text" class="form-control test" name="name1" autocomplete="on"></td> <td><input name="to_value0' + row + '" type="number" class="form-control input-md text-right"  value="1.00"/></td> <td><input name="to_value0' + row + '" type="text" class="form-control input-md text-right"  value="0.00"/></td>  <td><input  id="0.00" value="0.00"' + row + '" type="text" class="form-control input-md text-right"  readonly="readonly"/>  </td> <td class="border-new" style="border:1px solid #dee2e6 !important;">  <div class="d-flex mt-2"><div class="mr-2 ml-2 more-border more"><i class="fa fa-ellipsis-h pt-1" data-toggle="tooltip" data-placement="top" title="Show More details" class="a-border" aria-hidden="true"></i> </div><i class="fa fa-times delete-row align-self-center"  data-toggle="tooltip" data-placement="top" title="delete" class="a-border" aria-hidden="true"></i>   </div></td></tr>';
  $('#test-body').append(new_row);
   row++;
  return false;

  });

  // Remove criterion
  $(document).on("click", ".delete-row", function () {
    if(row>1) {
      $(this).closest('tr').remove();
      row--;
    }
  return false;
  });

    </script>
     <script>
        $(document).ready(function () {

    var flg = 0;

    $('#select').on("select2:open", function () {
      flg++;
      if (flg == 1) {
        $this_html = jQuery('#wrp').html();
        $(".select2-results").append("<div class='select2-results__option'>" + 
      $this_html + "</div>");
      }
    });

});
    </script>
    <script >
  $('.toggle').change(function(){
    if($(this).is(":checked")) {
        $('.changeme').addClass('red');
       $('.elementsToOperateOn :input ').removeAttr('disabled');
        
    } else {
        $('.changeme').removeClass('red');
        $('.elementsToOperateOn :input').attr("disabled", !this.unchecked); 
        
    }
});

</script>
   

  </body>
</html>