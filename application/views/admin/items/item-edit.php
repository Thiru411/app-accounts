<!doctype html>
<html lang="en">
<?php $this->load->view('admin/inc/header'); ?>
  <body>
  <?php $this->load->view('admin/inc/menu'); ?>

         <div class="main--menu w-100 main-menu-overflow">
                <div class="main-content--">
                    <div class="d-flex justify-content-between new-head">
                        <div>
                            <h3>Edit Item</h3>
                        </div>
                        <div class="align-self-center">
                            <div class="mr-3"><a href="#" class="tips"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Page Tips</a></div>
                        </div>
                    </div>
                    <div class="p-3 add-new-2 ">
                        <form class="" method="post"  action="<?php echo base_url()?>item/itemupdate/update/<?=base64_encode($sk_item_id)?>">
                           
                                                    <div class="select-main- pl-0">
                                <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Select Category</label>
                                </div>

                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio">
                                    <select name="category" id="category" onchange="getSubcategory()">
                                    <option>Select Category</option>
                                    <?php $categoryDetails=$this->im->getCategory('mst_category');
                    
                    foreach($categoryDetails as $inf){?>
                        <!-- <option value="<?=$inf->sk_category_id?>" <?php if($inf->sk_category_id==$category_id){echo $selected="selected";}else{echo "";}?>><?=$inf->zone?></option> -->
    
                        <?php   if($inf->sk_category_id==$category_id){$slected="selected";}else{$selected="";} ?>
                        <option value="<?=$inf->sk_category_id?>" <?php echo $selected;?>><?=$inf->categoryName?></option>
                        <?php }?>
                    </select>
                    </div>
                    </div>
                    </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Sub Category Name</label>
                                    <?php $showsubcategory=$this->im->getsubcategorybyid('mst_subcategory',$subCategory_id);?>
                    
                                                 </div>
                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio ">
                                <select name="subcategory"  id="subcategory">  
                               <?php  foreach($showsubcategory as $inf){?>
                    
                    <option value="<?php echo $inf->sk_subCategory_id ?>"><?php echo $inf->subCategoryName ?></option>
                    <?php } ?>	
                               </select>  
                                </div>

                                </div>
                    
                            </div><div class="form-row">
                            <div class="form-group col-md-3">
                                    <label for="part_no">Enter Part No</label>
                                </div>
                                <div class="form-group col-md-9">
                                <div class="custom-control custom-radio custom-control-inline">
                                <input type="text" name="part_no" value="<?=$part_no?>" id="part_no"required>
                                </div>   
                                
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <label>Enter Item Name</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                <input type="text" name="item_name" value="<?=$item_name?>" id="item_name"required>
                                </div>

                                </div>
                            </div> <div class="form-row">
                                <div class="col-md-3">
                                    <label>Enter MRP</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                <input type="text" name="mrp" value="<?=$mrp?>" id="mrp"required>
                                </div>

                                </div>
                            </div> <div class="form-row">
                                <div class="col-md-3">
                                    <label>Enter Count Rate</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                <input type="text" name="count_rate" value="<?=$count_rate?>" id="count_rate"required>
                                </div>

                                </div>
                            </div> <div class="form-row">
                                <div class="col-md-3">
                                    <label>Enter L-Dealer Rate</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                <input type="text" name="l_dealer" value="<?=$l_dealer_rate?>" id="part_no"required>
                                </div>

                                </div>
                            </div> <div class="form-row">
                                <div class="col-md-3">
                                    <label>Enter S-Dealer Rate</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                <input type="text" name="s_dealer"<?=$s_dealer_rate?> id="part_no"required>
                                </div>

                                </div>
                            </div> <div class="form-row">
                                <div class="col-md-3">
                                    <label>Enter Opening Quantity</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                <input type="text" name="open_qty"value="<?=$opening_qty?>" id="part_no"required>
                                </div>

                                </div>
                            </div> <div class="form-row">
                                <div class="col-md-3">
                                    <label>Enter Tax Percentage</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                <input type="text" name="tax" value="<?=$tax_percent?>" id="part_no"required>
                                </div>

                                </div>
                            </div> <div class="form-row">
                                <div class="col-md-3">
                                    <label>Enter MIN.Order LVL</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                <input type="text" name="min_order" value="<?=$min_order_lvl?>" id="part_no"required>
                                </div>

                                </div>
                            </div> <div class="form-row">
                                <div class="col-md-3">
                                    <label>Enter Re-order LVL</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                <input type="text" name="re_order"value="<?=$re_order_lvl?>" id="part_no"required>
                                </div>

                                </div>
                            </div> <div class="form-row">
                                <div class="col-md-3">
                                    <label>Enter Max.Order LVL</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                <input type="text" name="max_order"value="<?=$max_order_lvl?>" id="part_no"required>
                                </div>

                                </div>
                            </div> <div class="form-row">
                                <div class="col-md-3">
                                    <label>Enter Location</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                <input type="text" name="location"value="<?=$location?>" id="part_no"required>
                                </div>

                                </div>
                            </div> <div class="form-row">
                                <div class="col-md-3">
                                    <label>Enter Discount Cat</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                <input type="text" name="discount"value="<?=$discount_cat?>" id="part_no"required>
                                </div>

                                </div>
                            </div> <div class="form-row">
                                <div class="col-md-3">
                                    <label>Enter Purchase Rate</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                <input type="text" name="purchase_rate" value="<?=$purchase_rate?>"id="part_no"required>
                                </div>

                                </div>
                            </div> <div class="form-row">
                                <div class="col-md-3">
                                    <label>Enter HSN Code</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                <input type="text" name="hsn"value="<?=$hsn_code?>" id="part_no"required>
                                </div>

                                </div>
                            </div>

                                              <input type="submit" name="submit"value="Update">

</form>            
                    </div>

                </div>
         </div>

<!-- The Birds Eye -->
<div class="modal-card" id="thebirdseye">
        <div class="close-modal-card">
            <img src="images/close.png">
        </div>
        <div class="modal-card-head text-center">
            <img class="dp" src="images/dp.png">
            <h6 class="pt-2">accounts</h6>
            <p class="user-id pt-1">User ID: 60003651303</p>
            <p class="user-mail pt-1">accounts@thebirdseye.in</p>
            <div class="d-flex account-signout justify-content-center pt-2">
                <p><a class="my--account" href="#">My Account</a></p>
                <span class="straight-line">|</span>
                <p><a class="sign--out" href="#">Sign Out</a></p>
            </div>
        </div>
        <div class="d-flex py-3 px-3 bdr-btm">
            <p class="mr-auto text-grey">MY ORGANIZATIONS</p>
            <p class="text-blue"><i class="fa fa-cog text-blue" aria-hidden="true"></i> Manage</p>
        </div>
        <div class="d-flex px-3 mt-2 py-2">
            <div class="list-details">
                <p>The Birds Eye</p>
                <p class="org-id">Organization ID: 60008466374</p>
                <p class="trail">TRIAL</p>
            </div>
            <div>
                <img src="">
            </div>
        </div>
    </div>
<!-- The Birds Eye -->
<!-- Refer and Earn -->

<!-- Refer and Earn -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- modal -->

<!-- Modal -->
<div class="modal fade add-new-footer modal-1 " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Currency</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                </div>

            </div>
        </div>
    </div>
     <!-- modaul -->
     <!-- Modal -->

  </div>
</div>
     <!-- modaul -->
     <?php $this->load->view('admin/inc/footer'); ?>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <script>  
            function getSubcategory()
            {
                 var category=$('#category').val();
                // console.log(category)
                  $.ajax({  
                     url:"<?php echo base_url()?>item/getcategory",  
                     data: {category:category},  
                     type: "POST",  
                     success:function(data){  
                        // console.log(data);
                       $("#subcategory").html(data);  
                  }  
               });  
            
       }  
      </script>

    </body>
</html>