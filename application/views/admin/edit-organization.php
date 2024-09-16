<!doctype html>
<html lang="en">
<?php include('inc/header.php');?>
<body>
    <?php include('inc/menu.php');?>
            <div class="main--menu ">
              <div class="d-flex justify-content-between org-border p-3">
                  <div class="d-flex">
                    <div class="org-1 pr-2 align-self-center">
                      <h3>Organization Profile    |</h3>    
                    </div>
                    <div class="align-self-center">
                        ID:60008466374
                    </div>
                  </div>
                  <div>  
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Set up your organization
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Multi-currency with Zoho Books</a>
                      </div>
                    </div>
                  </div>
              </div>  
              <form action="<?php echo base_url()?>organization/save_org" method="post">
              <input type="hidden" name="method" value="<?=$form_method?>">
             
               <div class="col-md-12 position-relative org-sec-1">
               <?php if($org_details){
                   foreach($org_details as $info){?>
                                                   <input type="hidden" name="org_id" value="<?=$info->sk_organization_id?>">
                <div class="col-md-10 pt-3 pb-3">
                    <div class="row">
                        <div class="col-md-2">
                          <p>Your Logo</p>  
                        </div>
                        <div class="col-md-4">
                            <input type='file'onchange="readURL(this);" / placeholder="Upload Logo" id="html_btn"  name="upload_file" >
                            <img id="blah" class="position-relative new_Btn" height="240px" width="240px" src="<?php echo base_url()?>uploads/images/organization_logo/<?=$info->organization_logo?>" alt="your image"  onerror="this.onerror=null;this.src='<?=base_url();?>assets/images/empty-image.png';"/>
                        </div>
                        <div class="col-md-6 align-self-center">
                          <p>This logo will appear on the documents (estimates, invoices, etc.) that are created.</p>  
                          <span>Preferred Image Size: 240px x 240px @ 72 DPI Maximum size of 1MB.</span>
                          <span type="button" id="removeImage1"  class="btn-rmv1" />Remove Logo </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    
                      <div class="form-row mb-3">
                        <div class="form-group col-md-2 align-self-center mb-0">
                          <label for="inputname" class="mb-0">Organization Name*</label>
                        </div>
                        <div class="form-group col-md-6 mb-0">
                          <input type="text" class="form-control" id="inputname" name="org_name" value="<?=$info->organization_name?>">"
                        </div>
                      </div>
                      <div class="form-row mb-3">
                        <div class="form-group col-md-2 align-self-center mb-0">
                          <label for="inputname" class="mb-0"  data-toggle="tooltip" data-placement="top" title="Select your ">Industry*</label>
                        </div>
                        <div class="form-group col-md-6 mb-0">
                           <div class="form-group  mb-0">
                                <select name="industry" id="area" class="form-control  js-example-single select--" >
                                <?php foreach($industry as $inf){?>
                                    <option value="<?=$inf->sk_industry_id?>"<?php if($info->sk_industry_id==$inf->sk_industry_id){echo "selected";}else{echo "";}?>><?=$inf->industry?></option>
                                         <?php }?>                                    
                                </select>
                            </div>
                        </div>
                      </div>
                      <div class="form-row mb-3">
                        <div class="form-group col-md-2 align-self-center mb-0">
                          <label for="inputname" class="mb-0">Company Address</label>
                        </div>
                        <div class="form-group col-md-10">
                          <input type="text" name="address1" value="<?=$info->address_1?>" class="form-control" id="inputname">
                        </div>
                         <div class="form-group col-md-2 align-self-center mb-0">
                          <label for="inputname" class="mb-0"></label>
                        </div>
                        <div class="form-group col-md-10 ">
                          <input type="text" name="address2" value="<?=$info->address_2?>" class="form-control" id="inputname">
                        </div>
                         <div class="form-group col-md-2 align-self-center mb-0">
                          <label for="inputname" class="mb-0"></label>
                        </div>
                        <div class="form-group col-md-10">
                          <div class="row">
                              <div class="col-md-4">
                                  <input type="text" class="form-control" id="inputname" name="city" value="<?=$info->city?>" placeholder="City">
                              </div>
                              <div class="col-md-4">
                                  <div class="form-group  mb-0" >
                                        <select name="state" id="area" class="form-control  js-example-single " >
                                        <?php foreach($states as $inf){?>
                                             <option value="<?=$inf->sk_state_id?>"<?php if($info->sk_state_id==$inf->sk_state_id){echo "selected";}else{echo "";}?>><?=$inf->state?></option>
                                         <?php }?>  
                                        </select>
                                    </div>  
                              </div>
                              <div class="col-md-4">
                                  <div class="form-group  mb-0" >
                                        <select name="country" id="area" class="form-control  js-example-single " >
                                        <?php foreach($countries as $inf){?>
                                             <option value="<?=$inf->sk_country_id?>"<?php if($info->sk_country_id==$inf->sk_country_id){echo "selected";}else{echo "";}?>><?=$inf->country?></option>
                                         <?php }?>  
                                        </select>
                                    </div>  
                              </div>
                              <div class="col-md-4">
                                  <input type="text" value="<?=$info->postalcode?>" name="zip" class="form-control" id="inputZip"  placeholder="Zip/Postal Code">
                              </div>
                          </div>
                        </div>
                          <div class="form-group col-md-2 align-self-center mb-0">
                          <label for="inputname" class="mb-0"></label>
                        </div>
                        <div class="form-group col-md-10">
                          <div class="row">
                              <div class="col-md-4">
                                  <input type="number" name="mobile" value="<?=$info->mobile?>" class="form-control" id="inputname" placeholder="Phone">
                              </div>
                              <div class="col-md-4">
                                    <input type="text" name="fax" value="<?=$info->fax?>" class="form-control" id="" placeholder="Fax">
                              </div>
                              <div class="col-md-4">
                                  <input type="text" name="website" value="<?=$info->website?>" class="form-control" id="inputZip" placeholder="Website">
                              </div>
                          </div>
                        </div>
                         <div class="form-group col-md-2 align-self-center mb-0">
                          <label for="inputname" class="mb-0"></label>
                        </div>
                        <div class="form-group col-md-10">
                          <div class="custom-control custom-checkbox align-self-center">
                              <input type="checkbox" class="custom-control-input toggle-1" id="customCheck1">
                              <label class="custom-control-label mb-0 pb-0 align-self-center" for="customCheck1">Would you like to add a separate address for receiving payments?</label>
                            </div>
                        </div>
                      </div>
                       <div class="form-row text-box-- d-none">
                            <div class="form-group col-md-2 align-self-center mb-0">
                         <label for="exampleFormControlTextarea1">Address To Receive Payment</label>
                        </div>
                        <div class="form-group  col-md-6 ">
                            
                            <textarea name="payment_address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div> 
                        </div>
                        <div class="form-row">
                             <div class="form-group col-md-2  mb-0">
                          <label for="inputname" class="mb-0">Primary Contact</label>
                        </div>
                        <div class="form-group col-md-10">
                          <div class="row">
                            <div class="col-md-6" style="border-right: 1px solid #ddd;">
                               <p class="text-muted mb-md-3">SENDER</p> 
                               <h6>accounts</h6>
                               <p>(<?=$info->email?>)</p>
                            </div>  
                            <div class="col-md-6">
                                <p class="text-muted mb-md-3">EMAILS ARE SENT THROUGH</p>
                                  <h6>Email address of Zoho Books</h6>
                               <p>(<?=$info->email?>)</p>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-md-2  mb-0">
                          <label for="inputname" class="mb-0"></label>
                        </div>
                        <div class="form-group col-md-10">
                          <div class="bg-pink ">
                             <div class="d-flex">
                                 <div class="pr-2">
                                     <i class="fa fa-exclamation-circle fx-3" aria-hidden="true" style="color: #ffa500;"></i>
                                 </div>
                                 <div>
                                     <p>Your primary contact's email address belongs to an unauthenticated domain. So, emails will be sent from message-service@sender.zoho-books.in to prevent them from landing in the Spam folder. Authenticate the domain to send emails from your primary contact's email address.<a href="#">  Authenticate Now</a></p>
                                 </div>
                             </div> 
                          </div>
                          <div class="pt-2">
                             <a href="#">Configure Email Preferences <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> 
                          </div>
                        </div>
                        <div class="form-group col-md-2   align-self-center">
                          <label for="inputname" class="mb-0">Fiscal Year</label>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group  mb-0" >
                                <select name="fiscal" id="area" class="form-control  js-example-single " >
                                <?php foreach($fiscal_year as $inf){?>
                                             <option value="<?=$inf->sk_financial_year_id ?>"<?php if($info->sk_financial_year_id ==$inf->sk_financial_year_id ){echo "selected";}else{echo "";}?>><?=$inf->financial_year ?></option>
                                         <?php }?>  
                                </select>
                            </div> 
                        </div>
                        </div>
                        <div class="form-row">
                             <div class="form-group col-md-2">
                          <label for="inputname" class="mb-0">Report Basis</label>
                        </div>
                        <div class="form-group col-md-10">
                            <div class="form-group  mb-0" >
                            <?php if($reportBasis){
                                   foreach($reportBasis as $inf){?>
                               <div class="custom-control custom-radio">
                                  <input type="radio" id="customRadio1" name="repoer_basis" value="<?=$inf->sk_report_basis_id?>" class="custom-control-input" value="">
                                  <label class="custom-control-label" for="customRadio1"><?=$inf->report_basis?></label>
                                </div>
                            </div>
                            <?php } }?> 
                        </div>
                          <div class="form-group col-md-2 align-self-center">
                          <label for="inputname" class="mb-0">Time Zone</label>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group  mb-0" >
                               <select name="timezone" id="area" class="form-control  js-example-single">
                               <?php foreach($timezone as $inf){?>
                                    <option value="<?=$inf->sk_timezone_id ?>"<?php if($info->sk_timezone_id ==$inf->sk_timezone_id ){echo "selected";}else{echo "";}?>><?=$inf->timezone?></option>
                                         <?php }?>      
                                </select>
                            </div> 
                        </div>

                        </div>
                        <div class="form-row">
                             <div class="form-group col-md-2 align-self-center">
                          <label for="inputname" class="mb-0 ">Date Format</label>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group  mb-0" >
                               <select name="dateformat" id="area" class="form-control  js-example-single " >
                               <?php foreach($dateformat as $inf){?>
                                    <option value="<?=$inf->sk_dateformat_id ?>"<?php if($info->sk_dateformat_id ==$inf->sk_dateformat_id ){echo "selected";}else{echo "";}?>><?=$inf->dateformat?></option>
                                         <?php }?>      
                                </select>
                            </div> 
                        </div>
                        <div class="form-group col-md-4">
                           <select class="" name="dateseparator" style="height: 36px; width: 50px; border:1px solid #ddd;border-radius: 5px;">
                               <option>/</option>
                               <option>.</option>
                               <option>-</option>
                           </select> 
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-2 ">
                            <div class="mb-4">
                               <label for="inputname" class="mb-0 ">Company ID</label> 
                            </div>
                             <div class="pt-3">
                               <label for="inputname" class="mb-0 ">Tax ID</label> 
                            </div>
                          
                        </div>
                        <div class="form-group col-md-2">
                            <div class="form-group  mb-3 position-relative" >
                               <select name="area" id="area" class="form-control  js-example-single"  multiple >
                                    <option value="" active>Agency house</option>
                                    <option value="1">main root</option>
                                    <option value="2">jain</option>
                                    <option value="3">terms</option>
                                    <option value="4">unifor</option>
                                    <option value="5">unifor</option>
                                    <option value="6">unifor</option>
                                </select>
                                <img class="arrow-image" src="<?php echo base_url()?>assets/images/acc-down.png" height="10px" height="10px" >
                            </div> 
                             <div class="form-group  mb-0 position-relative" >
                               <select name="area" id="area" class="form-control  js-example-single"  multiple >
                                    <option value="" active>Agency house</option>
                                    <option value="1">main root</option>
                                    <option value="2">jain</option>
                                    <option value="3">terms</option>
                                    <option value="4">unifor</option>
                                    <option value="5">unifor</option>
                                    <option value="6">unifor</option>
                                </select>
                                <img class="arrow-image" src="<?php echo base_url()?>assets/images/acc-down.png" height="10px" height="10px" >
                            </div> 
                        </div>
                        <div class="form-group col-md-3" >
                            <div class="mb-3">
                               <input type="text" class="form-control">  
                            </div>
                          <div>
                               <input type="text" class="form-control">  
                            </div>
                        </div>
                        <div class="col-md-5">
                           <div class="bg-gray-- p-3">
                               <p class="text-muted">You can have Company ID, Tax ID and Additional Fields show up on your PDF by inserting the required placeholders in your 'Address Format' under<a href="#"> Settings -> Preferences -> General</a></p>
                           </div> 
                        </div>
                        </div>

                            <div class="col-md-8 p-0">
                              <div class="table-responsive org-td">
                                <table id="test-table" class="table table-condensed" style="border:0px;">
                                  
                                  <tbody id="test-body">
                                    <tr id="row0">
                                      <td class="th-2 align-self-center">
                                      Additional fields
                                      </td>
                                      <td>
                                        <input name='from_value0' type='text' class='form-control' placeholder="label" />
                                      </td>
                                      <td>
                                        <input name='to_value0' type='text' class='form-control input-md' placeholder="value" />
                                      </td>
                                     
                                    </tr>
                                  </tbody>
                                </table>
                                <div class=" new-row-values mb-3">
                                   <a href="#" id='add-row-1'>Add additonal fields</a> 
                                </div>
                               <!--  <input id='add-row-1' class='btn btn-primary' type='button' value='Add' /> -->
                              </div>
                            </div>
                      </div>
                      <div class="form-row border-org-down">
                       <div class="col-md-2">
                           
                       </div>
                       <div class="col-md-9 mb-5 mt-3">
                           <div class="d-flex justify-content-between">
                               <div>
                                 <button class="secoundry-btn " type="submit"> Save</button>
                               </div>
                               <div class="align-self-center">
                                  <a href="#" style="text-decoration: underline;color: #000;"> Privacy policy</a>
                               </div>
                           </div>
                       </div>
                      </div>
                    </form>
                </div>
                <?Php } }?>
            </div>
            </div>   
        </div>
    </div>
    <?php include('inc/footer.php');?>

    <script>
             function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
<script >
  $('.toggle-1').change(function(){
    if($(this).is(":checked")) {
       
        $('.text-box--').removeClass("d-none");  
    } else {
         $('.text-box--').addClass("d-none");
        
    }
});

</script>
<script >
      // Add row
  var row=1;
  $(document).on("click", "#add-row-1", function () {
  var new_row = '<tr id="row' + row + '"><td> </td><td><input name="from_value' + row + '" type="text" class="form-control"  placeholder="label"/></td><td><input name="to_value' + row + '" type="text" class="form-control" placeholder="value" /></td></tr>';
  $('#test-body').append(new_row);
  row++;
  return false;
  });
  
  // Remove criterion
  $(document).on("click", ".delete-row", function () {
  //  alert("deleting row#"+row);
    if(row>1) {
      $(this).closest('tr').remove();
      row--;
    }
  return false;
  });

</script>
<script>
$('.new_Btn').click(function() {
  $('#html_btn').click();
});
$("#removeImage1").click(function(e) {
  e.preventDefault();
  $("#html_btn").val("");
  $("#blah").attr("src", "");
    $("#blah").addClass("d-block");
});

</script>

</body>

</html>