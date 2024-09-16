<!doctype html>
<html lang="en">
<?php include('inc/header.php');?>
<style>
   label.lable-new-value-app{display: inline;max-width:300px;width:100%;}
   label.lable-new-value-app select{max-width:219px;width:100%;}
</style>
  <body>
  <?php include('inc/menu.php');?>

         <div class="main--menu w-100 main-menu-overflow">
                <div class="main-content--">
                    <div class="d-flex justify-content-between new-head">
                        <div>
                            <h3>New Customer</h3>
                        </div>
                        <div class="align-self-center">
                            <div class="mr-3"><a href="#" class="tips"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Page Tips</a></div>
                        </div>
                    </div>
                    <div class="p-3 add-new-2 ">
                        <form class="" method="post"  action="<?php echo base_url()?>customer/customer_add">
                            <div class=" col-md-8">



                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label data-toggle="tooltip" data-placement="right" title="The contacts which are associated to any Accountant in CRM is of type Business and the other contacts will be of type individual" class="a-border">Customer Type</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" value="Business" name="customer_type" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">Business</label>
                                    </div>
                                    

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" value="Individual" name="customer_type" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline2">Individual</label>
                                    </div>
                                    <label class="custom-control-label1 lable-new-value-app" id='business-type' for="customRadioInline1" ></label>
                                </div>
                                
                            </div>
       
                            <div class="form-row">
                                <div class="form-group col-md-3 ">
                                    <label href="#" data-toggle="tooltip" data-placement="right" title="The name you enter here will be  for your Primary contact.You can continue to add multiple contact persons from the details page" class="a-border">Primary Contact</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select class="form-control" name="salutation" id="exampleFormControlSelect1">
                                 <option value="" hidden>Salutation</option>
                                    <option>Mr.</option>
                                    <option>Mrs.</option>
                                    <option>Miss.</option>
                                    <option>Dr.</option>
                                  </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div>
                                                <input type="text" name="first_name" class="form-control" placeholder="Name" aria-label="Frist name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-3 align-self-center mb-0">
                                        <label>Company Name</label>
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <input type="text" name="company" class="form-control" placeholder="" aria-label="Last name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3 ">
                                    <label href="#" data-toggle="tooltip" data-placement="right" title="The name you enter here will be  for your Primary contact.You can continue to add multiple contact persons from the details page" class="a-border1">Back Order</label>
                                </div>
                                <div class="form-group col-md-9">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select class="form-control" name="back_order" id="exampleFormControlSelect1">
                                 <option value="" hidden>Back Order</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                  </select>
                                        </div>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-3 align-self-center mb-0">
                                        <label>Back Order days</label>
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <input type="text" name="back_order_days" class="form-control" placeholder="" aria-label="Last name">
                                    </div>
                                </div>
                            </div>
                           
                           

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-3 align-self-center mb-0">
                                        <label>Customer Display Name</label>
                                    </div>
                                    <div class="form-group col-md-6 drop-down- mb-0">
                                        <select class="form-control" name="cust_disp_name" id="exampleFormControlSelect1" >
                                    <option></option>
                                    <option>Mr.</option>
                                    <option>Mrs.</option>
                                    <option>Miss.</option>
                                    <option>Dr.</option>
                                  </select>
                                    </div>
                                    <div class="col-md-3">
                                        <i class="fa fa-question-circle" style="color: #ddd;" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="This name will be displayed on the transactions you create for this customer"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-3 align-self-center mb-0">
                                        <label>Customer Email</label>
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <input type="text" name="cust_email" class="form-control" placeholder="" aria-label="Last name" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-3 align-self-center mb-0">
                                        <label>Customer Phone</label>
                                    </div>
                                    <div class="form-group col-md-9 mb-0">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="number" name="cust_phone" class="form-control" placeholder="Work Phone" aria-label="Last name" >
                                            </div>
                                            <div class="col-md-4 pr-2">
                                                <input type="number" name="cust_mobile"class="form-control" placeholder="Moblie" aria-label="Last name">
                                            </div>
                                            <div class="col-md-4 align-self-center input-feild-">
                                                <a href="#" class="">Add more details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group add-input d-none col-md-12 mb-0">
                                <div class="form-row">
                                    <div class="form-group col-md-9 mb-0">
                                        <div class="row">
                                            <div class="col-md-4 p-0 align-self-center">
                                                <label>Skype Name/Number</label>
                                            </div>
                                            <div class="col-md-8 p-0 pb-3 pr-2">
                                                <div class="input-group ">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-skype" aria-hidden="true" style="color:#00aff0"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-9 mb-0">
                                        <div class="row">
                                            <div class="col-md-4 p-0 align-self-center">
                                                <label>Designation</label>
                                            </div>
                                            <div class="col-md-8 p-0 pb-3 pr-2">
                                                <input type="text" class="form-control" aria-label="Last name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-9 mb-0">
                                        <div class="row">
                                            <div class="col-md-4 p-0 align-self-center">
                                                <label>Department</label>
                                            </div>
                                            <div class="col-md-8 p-0 pb-3 pr-2">
                                                <input type="text" class="form-control" aria-label="Last name" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-3 align-self-center">
                                        <p>Website</p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="website" class="form-control" placeholder="" aria-label="Last name">
                                    </div>
                                </div>
                            </div>
                        </div>

                             <div class="pt-4 pb-4 Customers-tab ">
                                <ul class="nav nav-pills mb-3 tab-main-content" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Other Details</a>
                                 </li>
                                <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Address</a>
                                </li>
                                <li class="nav-item" id="purpose" role="presentation">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact persons</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-payment-terms-tab" data-toggle="pill" href="#pills-payment-terms" role="tab" aria-controls="pills-payment-terms" aria-selected="false">Payment Terms</a>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-transport-tab" data-toggle="pill" href="#pills-transport" role="tab" aria-controls="pills-transport" aria-selected="false">Transport Information</a>
                                 </li>
                                
                            </ul>
                        <div class="tab-content mx-1100" id="pills-tabContent">
                            <div class="tab-pane fade show active add-new-2 mb-5 pb-5" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- <form class="col-md-8"> -->
                                            <div class="form-row">
                                                <div class="form-group col-md-3 align-self-center mb-0">
                                                    <label class="text-center">Currency</label>
                                                </div>
                                                <div class="form-group col-md-6 mb-0  ">
                                                    <div class="form-group  frist ">
                                                        <select name="currency" class="form-control select2-hidden-accessible  js-example-single w-100  frist " data-plugin="select2" id='select' tabindex="-1" aria-hidden="true" data-placeholder="Select a state">
                                        <optgroup label="Select Cutomer">
                                        <option value="rupees">Rupees</option>
                                        <!-- <option value="HI">Ajay</option>
                                        <option value="HI">Ajay</option>
                                        <option value="HI">Ajay</option>
                                        <option value="HI">Ajay</option>
                                        <option value="HI">Ajay</option>
                                        <option value="HI">Ajay</option> -->
                                        </optgroup>
                                    </select>
                                                        <div class="wrapper" id="wrp" style="display: none;">
                                                            <a href="#" id="type" class="font-weight-300" data-toggle="modal" data-target="#exampleModal">+ Add New Currency</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3 align-self-center mb-0">
                                                        <label class="text-center">Opening Balance</label>
                                                    </div>
                                                    <div class="form-group col-md-6 mb-0 ">
                                                        <input type="text" name="opening_balance" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3 align-self-center mb-0">
                                                        <label> <a href="#" data-toggle="tooltip" data-placement="right" title="Give your Customers access  top portal to view transitions and make online Payments." class="a-border">Enable Portal?</a></label>
                                                    </div>
                                                    <div class="form-group col-md-6 ">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="portal_access" value="1" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label align-self-center " for="customCheck1">Allow portal access for this customer</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3 align-self-center mb-0">
                                                        <label> <a href="#" data-toggle="tooltip" data-placement="right" title="This will change the contact's portal in corresponding languages" class="a-border">Portal Language</a></label>
                                                    </div>
                                                    <div class="form-group col-md-6 mb-0">
                                                        <select name="portal_lang" id="area" class="form-control  js-example-single">
                                    <option value=""></option>
                                    <option value="English">English</option>
                                    <option value="Hindi">Hindi</option>
                                    <option value="Spanish">Spanish</option>
                                </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3 align-self-center mb-0">
                                                        <label class="text-center">Facebook</label>
                                                    </div>
                                                    <div class="form-group col-md-6 mb-0 ">
                                                        <div class="input-group flex-nowrap">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-facebook-official" aria-hidden="true"></i></span>
                                                            </div>
                                                            <input type="text" name="facebook" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                                        </div>
                                                        <small class="text-muted">http://www.facebook.com/</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3 align-self-center mb-0">
                                                        <label class="text-center">Twitter</label>
                                                    </div>
                                                    <div class="form-group col-md-6 mb-0 ">
                                                        <div class="input-group ">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-twitter-square" aria-hidden="true"></i></span>
                                                            </div>
                                                            <input type="text" name="twitter" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                                        </div>
                                                        <small class="text-muted">http://www.twitter.com/</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                               <div class="last-content ">
                                                    <div class="d-flex justify-content-start content-value ">
                                                        <div>
                                                            <button class="secoundry-btn " type="submit"> Save</button>
                                                        </div>
                                                        <div class="border-a align-self-center btn">
                                                            <div>
                                                                <a href="#">Cancel</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        <!-- </form> -->
                                        <div class="pl-2 note">
                                            <p><strong>Customer Owner:</strong> Assign a user as the Customer owner to provide access only to the data of this customer.<a href="#"> Learn More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade add-new-2  mb-5 pb-5 " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div>
                                    <form class="p-3 tab-2-content">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <h6 class="mb-3">BILLING ADDRESS</h6>
                                                <div class="row">
                                                    <div class="col-md-3 align-self-center"> <label for="inputPassword4" class="mb-0">Attention</label></div>
                                                    <div class="col-md-7"><input type="password" class="form-control" id="inputPassword4"></div>
                                                    <div class="col-md-3 align-self-center"> <label for="inputPassword4" class="mb-0">Country/Region</label></div>
                                                    <div class="col-md-7 frist">
                                                        <select name="country" id="area" class="form-control  js-example-single w-100">
                                                <!-- <option></option> -->
                                                <option value="India">India</option>
                                                <option value="Shreelanka">Shreelanka</option>
                                                <option value="England">England</option>
                                            </select>
                                                    </div>
                                                    <div class="col-md-3"> <label for="inputPassword4" class="mb-0">Address</label></div>
                                                    <div class="col-md-7"> <textarea name="street1" class="form-control mb-3" id="exampleFormControlTextarea1" rows="3" placeholder="Street 1"></textarea>
                                                        <textarea name="street2" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Street 1"></textarea></div>
                                                    <div class="col-md-3 align-self-center"> <label for="inputPassword4" class="mb-0">City</label></div>
                                                    <div class="col-md-7"><input type="text" name="city" class="form-control" id="inputPassword4"></div>
                                                    <div class="col-md-3 align-self-center"> <label for="inputPassword4" class="mb-0">State</label></div>
                                                    <div class="col-md-7"><input type="text" name="state" class="form-control" id="inputPassword4"></div>
                                                    <div class="col-md-3 align-self-center"> <label for="inputPassword4" class="mb-0">Zip Code</label></div>
                                                    <div class="col-md-7"><input type="number" name="zipcode" class="form-control" id="inputPassword4"></div>
                                                    <div class="col-md-3 align-self-center"> <label for="inputPassword4" class="mb-0">Phone1</label></div>
                                                    <div class="col-md-7"><input type="number" name="phone1" class="form-control" id="inputPassword4"></div>
                                                    <div class="col-md-3 align-self-center"> <label for="inputPassword4" class="mb-0">Phone2</label></div>
                                                    <div class="col-md-7"><input type="number" name="phone2" class="form-control" id="inputPassword4"></div>
                                                
                                                    <div class="col-md-3 align-self-center"> <label for="inputPassword4" class="mb-0">Fax</label></div>
                                                    <div class="col-md-7"><input type="text" name="fax" class="form-control" id="inputPassword4"></div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 tab-content-2">
                                                <div class="row">
                                                    <div class="col-md-6 align-self-center">
                                                        <h6 class="mb-3">SHIPPING ADDRESS</h6>
                                                    </div>
                                                    <div class="col-md-6 mb-3 pr-0"><a href="#"><span class=""><i class="fa fa-arrow-circle-down mr-2" aria-hidden="true"></i><span>Copy billing address</a> </div>
                                                    <div class="col-md-3 align-self-center"> <label for="inputPassword4" class="mb-0">Attention</label></div>
                                                    <div class="col-md-7"><input type="password"name="attention2" class="form-control" id="inputPassword4"></div>
                                                    <div class="col-md-3 align-self-center"> <label for="inputPassword4" class="mb-0">Country/Region</label></div>
                                                    <div class="col-md-7 frist">
                                                        <select name="area" id="area" class="form-control  js-example-single w-100 ">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                                    </div>
                                                    <div class="col-md-3"> <label for="inputPassword4" class="mb-0">Address</label></div>
                                                    <div class="col-md-7"> <textarea name="street3" class="form-control mb-3" id="exampleFormControlTextarea1" rows="3" placeholder="Street 1"></textarea>
                                                        <textarea name="street4" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Street 1"></textarea></div>
                                                    <div class="col-md-3 align-self-center"> <label for="inputPassword4" class="mb-0">City</label></div>
                                                    <div class="col-md-7"><input type="text" name="city1" class="form-control" id="inputPassword4" ></div>
                                                    <div class="col-md-3 align-self-center"> <label for="inputPassword4" class="mb-0">State</label></div>
                                                    <div class="col-md-7"><input type="text" name="state1" class="form-control" id="inputPassword4" ></div>
                                                    <div class="col-md-3 align-self-center"> <label for="inputPassword4" class="mb-0">Zip Code</label></div>
                                                    <div class="col-md-7"><input type="number" name="zipcode2"class="form-control" id="inputPassword4" ></div>
                                                    <div class="col-md-3 align-self-center"> <label for="inputPassword4" class="mb-0">Phone1</label></div>
                                                    <div class="col-md-7"><input type="number" name="phone4"class="form-control" id="inputPassword4" ></div>
                                                    <div class="col-md-3 align-self-center"> <label for="inputPassword4" class="mb-0">Phone2</label></div>
                                                    <div class="col-md-7"><input type="number" name="phone3"class="form-control" id="inputPassword4" ></div>
                                                    <div class="col-md-3 align-self-center"> <label for="inputPassword4" class="mb-0">Fax</label></div>
                                                    <div class="col-md-7"><input type="text" name="fax1" class="form-control" id="inputPassword4" ></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-yellow">
                                            <div class="ml-3">
                                                <p><strong>Note:</strong></p>
                                                <ul class="pl-3">
                                                    <li>You can add and manage additional addresses from contact details section.</li>
                                                    <li>View and edit the address format of your transactions under Settings > Preferences > Customers and Vendors.</li>
                                                </ul>
                                            </div>
                                        </div>

                                         <div class="last-content ">
                                                    <div class="d-flex justify-content-start content-value ">
                                                        <div>
                                                            <button class="secoundry-btn " type="submit"> Save</button>
                                                        </div>
                                                        <div class="border-a align-self-center btn">
                                                            <div>
                                                                <a href="#">Cancel</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="p-3 mb-5">
                                    <div class="col-md-12">
                                        <div class="table-responsive  data-tabele-1">
                                            <table id="test-table" class="table table-condensed">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Salutation</th>
                                                        <th>Name</th>
                                                        <th>Email Address</th>
                                                        <th>Work Phone</th>
                                                        <th>Mobile</th>
                                                        <th>Purpose</th>
                                                        <th class="hidden-column d-none">Skype Name/Number</th>
                                                        <th class="hidden-column d-none">Designation</th>
                                                        <th class="hidden-column d-none">Department</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="test-body" class="table-td">
                                                    <tr id="row0">
                                                        <td>

                                                            <select name="Salutation1" class="form-control" id="exampleFormControlSelect1">
                                            <option></option>
                                            <option>Mr.</option>
                                            <option>Mrs.</option>
                                            <option>Miss.</option>
                                            <option>Dr.</option>
                                          </select>

                                                        </td>
                                                        <td>
                                                            <input name='first_name2' type='text' class='form-control input-md'  />
                                                        </td>
                                                        <!-- <td>
                                                            <input name='last_name2' type='text' class='form-control input-md' />
                                                        </td> -->
                                                        <td>
                                                            <input name='email' type='text' class='form-control input-md'  />
                                                        </td>
                                                        <td>
                                                            <input name='work_phone' type='text' class='form-control input-md'  />
                                                        </td>
                                                        <td>
                                                            <input name='mobile' type='text' class='form-control input-md'  />
                                                        </td>
                                                        <td>
                                                          <select class="select-td-value" name="purpose" id="purpose1">
                                                                                                                     </select>  
                                                        </td>
                                                        
                                                        <td class="hidden-column d-none">
                                                            <input name='to_value0' type='text' class='form-control input-md'  />
                                                        </td>
                                                        <td class="hidden-column d-none">
                                                            <input name='to_value0' type='text' class='form-control input-md' />
                                                        </td>
                                                        <td class="hidden-column d-none">
                                                            <input name='to_value0' type='text' class='form-control input-md' />
                                                        </td>
                                                        <td>
                                                            <div class="d-flex mt-2">
                                                                <div class="mr-2 ml-2 more-border more">
                                                                    <i class="fa fa-ellipsis-h " data-toggle="tooltip" data-placement="top" title="Show More details" class="a-border" aria-hidden="true"></i>
                                                                </div>
                                                                <i class="fa fa-times delete-row align-self-center" data-toggle="tooltip" data-placement="top" title="delete" class="a-border" aria-hidden="true"></i>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <a href="#" id='add-row' class='btn ' type='button' value='Add' />
                                            <Span class=" mr-2">+</Span>Add Contact Person </a>
                                        </div>
                                    </div>
                                     <div class="last-content ">
                                        <div class="d-flex justify-content-start content-value ">
                                            <div>
                                                <button class="secoundry-btn " type="submit"> Save</button>
                                            </div>
                                            <div class="border-a align-self-center btn">
                                                <div>
                                                    <a href="#">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>

                            <div class="tab-pane fade show  add-new-2 mb-5 pb-5" id="pills-payment-terms" role="tabpanel" aria-labelledby="pills-payment-terms-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- <form class="col-md-8"> -->
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3 align-self-center mb-0">
                                                        <label class="text-center">Order Cancellation Frequency</label>
                                                    </div>
                                                    <div class="form-group col-md-6 mb-0 ">
                                                        <input type="text" name="order_cancellation" value="0" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3 align-self-center mb-0">
                                                        <label class="text-center">Due Days</label>
                                                    </div>
                                                    <div class="form-group col-md-6 mb-0 ">
                                                        <input type="text" name="due_days" value="0" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3 align-self-center mb-0">
                                                        <label class="text-center">Limit Amount</label>
                                                    </div>
                                                    <div class="form-group col-md-6 mb-0 ">
                                                        <input type="text" name="limit_amount" value="0" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3 align-self-center mb-0">
                                                        <label class="text-center">Interest Rate</label>
                                                    </div>
                                                    <div class="form-group col-md-6 mb-0 ">
                                                        <input type="text" name="interest_rate" value="0" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3 align-self-center mb-0">
                                                        <label class="text-center">Payment Terms</label>
                                                    </div>
                                                    <div class="form-group col-md-6 mb-0 ">
                                                        <input type="text" name="payment_terms" value="0" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                               <div class="last-content ">
                                                    <div class="d-flex justify-content-start content-value ">
                                                        <div>
                                                            <button class="secoundry-btn " type="submit"> Save</button>
                                                        </div>
                                                        <div class="border-a align-self-center btn">
                                                            <div>
                                                                <a href="#">Cancel</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        <!-- </form> -->
                                    </div>
                                </div>
                                <div class="tab-pane fade show  add-new-2 mb-5 pb-5" id="pills-transport" role="tabpanel" aria-labelledby="pills-transport-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- <form class="col-md-8"> -->
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3 align-self-center mb-0">
                                                        <label class="text-center">Transporter Name</label>
                                                    </div>
                                                    <div class="form-group col-md-6 mb-0 ">
                                                        <input type="text" name="transporter_name" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3 align-self-center mb-0">
                                                        <label class="text-center">Contact Number</label>
                                                    </div>
                                                    <div class="form-group col-md-6 mb-0 ">
                                                        <input type="text" name="contact_number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3 align-self-center mb-0">
                                                        <label class="text-center">Address</label>
                                                    </div>
                                                    <div class="form-group col-md-6 mb-0 ">
                                                        <input type="text" name="address6" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                               <div class="last-content ">
                                                    <div class="d-flex justify-content-start content-value ">
                                                        <div>
                                                            <button class="secoundry-btn " type="submit"> Save</button>
                                                        </div>
                                                        <div class="border-a align-self-center btn">
                                                            <div>
                                                                <a href="#">Cancel</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        <!-- </form> -->
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                            
                            

                        </div>
                    </div>
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
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Currency Code*</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                  <option></option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Currency Symbol*</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Currency Name*</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Decimal Places</label>
                            <select class="form-control" id="exampleFormControlSelect1" required>
                  <option></option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Format</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                  <option></option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="secoundry-btn">Save and Select</button>
                            <div class="border-a second">
                                <button type="button" data-dismiss="modal"><a href="#" >Cancel</a></button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
     <!-- modaul -->
     <!-- Modal -->
<div class="modal fade add-new-footer  " id="example-Modal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f5f5f5;">
        <h5 class="modal-title" id="exampleModalLabel">Configure Payment Terms</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-0">
        <div class="p-3">
          <div class="row col-md-9">
         <div class="col-md-6 text-center pl-0">
           <p class="pl-0" style="color: #ff5858;">Term Name<sup>*</sup></p>
         </div> 
          <div class="col-md-6 text-center pl-0">
            <p class="pl-0" style="color: #ff5858;">Number of Days<sup>*</sup></p>
         </div> 
       </div>
         <div class="">
              <div id="table" class="table-editable">
               
              
                <table class="table content total-td col-md-6">
                  <tr>
                    
                    
                    <th data-attr-ignore></th>
                  </tr>
                  <tr >
             
                    <td class="p-1"><input type="text" name="Required"  placeholder="Net 15"></td>
                    <td class="p-1"><input type="text" name="Unique"    placeholder=" 15"></td>
                   <td class="table-rem p-1 align-self-center"><small>Mark as Default
                     <i class="fa fa-times table-remove p-1 " aria-hidden="true"></i></small>
                    </td>
                  </tr>
                      <tr >
             
                    <td class="p-1"><input type="text" name="Required"  placeholder="Net 30"></td>
                    <td class="p-1"><input type="text" name="Unique"    placeholder=" 30"></td>
                    <td class="table-rem p-1 align-self-center"><small>Mark as Default
                     <i class="fa fa-times table-remove  p-1 " aria-hidden="true"></i></small>
                    </td>
                  </tr>
                      <tr >
             
                    <td class="p-1"><input type="text" name="Required"  placeholder="Net 45"></td>
                    <td class="p-1"><input type="text" name="Unique"    placeholder=" 45"></td>
                    <td class="table-rem p-1 align-self-center"><small>Mark as Default
                     <i class="fa fa-times table-remove p-1 " aria-hidden="true"></i></small>
                    </td>
                  </tr>
                  <tr class="hide">
             
                    <td class="p-1"><input type="text" name="Required"  class="myDIV"  placeholder="Net 0"></td>
                    <td class="p-1"><input type="text" name="Unique"  class="myDIV" placeholder="Net 0"></td>
                  <td class="table-rem p-1 align-self-center"><small>Mark as Default
                     <i class="fa fa-times table-remove p-1 " aria-hidden="true"></i></small>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="table-main mb-4 ml-2">
                <a href="#" class="fa fa-plus table-add" aria-hidden="true"aria-hidden="true"> Add New</a>
              </div>
                 <div class="modal-footer pl-0 pr-0">
          <button type="button" class="secoundry-btn">Save and Select</button>
          <div  class="border-a second">
            <button type="button" data-dismiss="modal" ><a href="#" >Cancel</a></button>
          </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
     <!-- modaul -->
     <?php include('inc/footer.php');?>
     <script>
$('#customRadioInline1').click(function() { 
    $.ajax({  
                     url:"<?php echo base_url()?>customer/businesstype",  
                   //  data: {id:id},  
                     type: "POST",  
                     success:function(data){
                        $("#business-type").html(data);  
                        $("#business-type").show();  

                     }
            });
       });

       $('#customRadioInline2').click(function() { 
        $("#business-type").hide();  
       });
    $('#purpose').click(function() { 
    $.ajax({  
                     url:"<?php echo base_url()?>customer/purpose",  
                   //  data: {id:id},  
                     type: "POST",  
                     success:function(data){
                        $("#purpose1").html(data);  
                       // $("#business-type").show();  

                     }
            });
       });

    </script>
 
  </body>
</html>