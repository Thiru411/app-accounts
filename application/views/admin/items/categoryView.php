<!doctype html>
<html lang="en">
<?php $this->load->view('admin/inc/header'); ?>
<style>
    .content-value{
            z-index:-1;
        }
    </style>
  <body>
  <?php $this->load->view('admin/inc/menu'); ?>

         <div class="main--menu w-100 main-menu-overflow">
                <div class="main-content--">
                    <div class="d-flex justify-content-between new-head">
                        <div>
                            <h3>New Category</h3>
                        </div>
                        <div class="align-self-center">
                            <div class="mr-3"><a href="#" class="tips"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Page Tips</a></div>
                        </div>
                    </div>
                    <div class="p-3 add-new-2 ">
                        <form class="" method="post"  action="<?php echo base_url()?>item/categoryadd">
                            <div class=" col-md-8 pl-0">



                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Category Name</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                    <input type="text" name="category_name" class="form-control" placeholder="" aria-label="Last name"required>
                                    </div>

                                </div>
                            </div>
                                                    </div>
                      <button  type="submit" name="submit"value="Submit" class="secoundry-btn">Submit</button>  

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
  </body>
</html>