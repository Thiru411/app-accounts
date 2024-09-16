<!doctype html>
<html lang="en">
<?php include('inc/header.php');?>
<style>
.content-value{
  z-index:-1;
}
</style>
  <body>
  <?php include('inc/menu.php');?>

            <div class="main--menu w-100">
              <div class="d-flex justify-content-between content-value ">
               <div>
                   <div class="dropdown Customer-content--">
                      <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        All Vendors
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
               </div>
               <div class="align-self-center">
                 <div class="d-flex">
                   <div class="align-self-center mr-3">
                   <a href="<?php echo base_url()?>Vendor/add_new_vendor" class="secoundry-btn">+ New</a>
                   </div>
                    <div class="mr-3" ><a href="javascript:void(0)" class="settings"><i class="fa fa-cog fa-lg" aria-hidden="true"></i></a></div>
                    <div class="mr-3" ><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></div>
                  <div class="mr-3 "><a href="#" class="tips"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Page Tips</a></div>

                 </div>
               </div>
              </div>
              <section class="Customer-content text-center mt-5 mb-5">
                <div class="customercontent-">
                   <h2 class="mb-3">Business is no fun without people.</h2> 
                   <p class="mb-4">Create and manage your contacts, all in one place.</p>
                   <div class="a-button mb-3">
                     <a href="<?php echo base_url()?>Vendor/add_new_Vendor"class="secoundry-btn">CREATE NEW CUSTOMER</a>
                   </div>
                   
                   <div class="mb-3">
                       <a href="#">Click here to import customers from file</a>
                   </div>
                   <div class="d-flex justify-content-center">
                     <p>or using</p>
                     <img class="link-img ml-2" src="<?php base_url()?>assets/images/link-1.PNG">
                     <img class="link-img ml-2" src="<?php base_url()?>assets/images/link-2.png">
                     <img class="link-img ml-2" src="<?php base_url()?>assets/images/link-3.PNG">
                   </div>

                </div>
              </section>
              <section class="Customer-content-2 mx-auto ">
                <div class="content-2-frist text-center">
                  <!-- <h6>Types of contacts</h6>   -->
                </div>
                 <div class="Customer-contt-2  mb-5 mx-auto mt-5 ">
                    <h4 class="mb-4 mt-5">In the Contacts section, you can:</h4>
                    <div class="text-center my-auto">
                      <ul>
                        <li class="d-flex "><img src="<?php base_url()?>assets/images/tick.png " class="mr-2"><p> Invite your customers to the Client Portal</p></li>
                        <li class="d-flex "><img src="<?php base_url()?>assets/images/tick.png " class="mr-2"><p> Run customer statement report</p></li>
                        <li class="d-flex"><img src="<?php base_url()?>assets/images/tick.png " class="mr-2"><p>  Set a currency to invoice your customers.<span class="pl-1"><a href="#">Learn More</a></span></p></li>
                        <li class="d-flex"><img src="<?php base_url()?>assets/images/tick.png " class="mr-2"><p> View transaction history for each customer</p></li>
                        <li class="d-flex"><img src="<?php base_url()?>assets/images/tick.png " class="mr-2"><p>Request feedback for your service</p></li>
                      </ul>
                    </div>
                </div>
              </section>
            </div>
        </div>
    </div>


    <?php include('inc/footer.php');?>




  </body>
</html>