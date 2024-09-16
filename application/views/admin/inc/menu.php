<div class="wrapper">
        <div class="d-flex">
            <div class="side--menu bg-grey ">
                <ul class="list-unstyled accordion" id="accordionExample">
                    <li class=" menuli">
                        <a href="#"><i class="fa fa-tachometer"></i>Dashboard</a>
                    </li>
                    <li class="menuli">
                        <a href="#" class="d-flex collapse--" id="headingOne1" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1"><i class="fa fa-shopping-cart"></i>Items <img src="<?=base_url()?>assets/images/arrow.png"></a>
                        <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <ul class="list-unstyled submenu">
                                <li><a href="<?php echo base_url()?>item/category">Categories<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="<?php echo base_url()?>Item/subcategory">Sub Category<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="<?php echo base_url()?>Item/itemsdetails">Items<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                               
                            </ul>
                        </div>
                    </li>
                    </li>
                    <li class=" menuli">
                        <a href="#"><i class="fa fa-university"></i>Banking</a>
                    </li>
                    <li class="menuli">
                        <a href="#" class="d-flex collapse--" id="headingOne" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa fa-shopping-cart"></i>Sales <img src="<?=base_url()?>assets/images/arrow.png"></a>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <ul class="list-unstyled submenu">
                                <li><a href="<?php echo base_url()?>customer/customer-view">Customers<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#">Estimates<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#">Sales Orders<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#">Delivery Challans<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="<?php echo base_url()?>Invoice/getInvoices">Invoices<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="menuli">
                        <a href="#" class="d-flex collapse--" id="headingTwo" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-shopping-bag"></i>Purchases<img src="<?=base_url()?>assets/images/arrow.png"></a>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <ul class="list-unstyled submenu">
                                <li><a href="<?php echo base_url()?>vendor/vendor">Vendors<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#">Estimates<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#">Sales Orders<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#">Delivery Challans<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="<?php echo base_url()?>Invoice/getInvoices">Invoices<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="menuli">
                        <a href="#" class="d-flex collapse--" id="headingThree" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>Time Tracking <img src="<?=base_url()?>assets/images/arrow.png"></a>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <ul class="list-unstyled submenu">
                                <li><a href="<?=base_url('customer/organization')?>">Customers<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#">Estimates<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#">Sales Orders<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#">Delivery Challans<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#">Invoices<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="menuli">
                        <a href="#" class="d-flex collapse--" id="headingFour" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><i class="fa fa-user"></i></i>Accountant<img src="<?=base_url()?>assets/images/arrow.png"></a>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <ul class="list-unstyled submenu">
                                <li><a href="#">Customers<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#">Estimates<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#">Sales Orders<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#">Delivery Challans<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#">Invoices<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class=" menuli">
                        <a href="#"><i class="fa fa-line-chart" aria-hidden="true"></i> Reports</a>
                    </li>
                    <li class=" menuli">
                        <a href="#"><i class="fa fa-folder-open"></i> Documents</a>
                    </li>
                    <li class=" menuli">
                        <a href="#"><i class="fa fa-money" aria-hidden="true"></i> Payroll</a>
                    </li>


                    <li class="menuli">
                        <a href="#" class="d-flex collapse--" id="headingOne2" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2"><i class="fa fa-gear"></i>Settings <img src="<?=base_url()?>assets/images/arrow.png"></a>
                        <div id="collapseOne2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <ul class="list-unstyled submenu">
                                <li><a href="<?php echo base_url()?>settings/businesstype">Business Type<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="<?php echo base_url()?>settings/purpose">Purpose<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="<?php echo base_url()?>settings/customertype">Type Of Customer<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="<?php echo base_url()?>settings/category1">Category 1<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="<?php echo base_url()?>settings/category2">Category 2<span class=""><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>

                               
                            </ul>
                        </div>
                    </li>
                    </li>
                   
                </ul>
                <div class="close-menu">
                    <i class="fa fa-chevron-left"></i>
                </div>
            </div>
            
        </div>
    </div>