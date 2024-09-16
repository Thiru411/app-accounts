<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="<?=base_url()?>assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet"/>
   <link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css">
   
    <title>new-invoice-Dashboard</title>
    <title>Orgnization</title>
   
    <title>invoice-Dashboard</title>
    <title>Customer</title>

    <title>invoice-Dashboard</title>
    <title>Dashboard</title>
    <style>
        .modal-backdrop{background-color: transparent;}
        .admin-card{position: absolute;right:0px;top: 40px;width: 400px !important;box-shadow: -2px 5px 10px 1px rgb(0 0 0 / 18%);}
.admin-card .card.h-100{height: 100vh !important;}
.admin-card .card .card-header{background-color: #f3f8fe!important;}
.admin-card .card img{border-radius: 50% !important;}
.user-sign-in .val1{padding-right: 10px;}
.user-sign-in .val1:after{content: "|"; padding-left: 10px;}
 a.val2{color: #e4585a!important;}
 .close-img-1 img{position: absolute;top: 0px;right: 0px;padding:10px 10px;}
 .border-body {border-bottom: 1px solid #eee;}
 p.f-12{font-size: 12px;}
 .border-body-2{color: #fff;font-size: 14px;background-color: #268ddd;}
 .add-input input{padding-bottom: 10px;}
 .table.table-condensed{margin: unset !important;}
 
    </style>
  </head>
  <header class=" bg-grey">
        <nav class="navbar navbar-expand-lg p-0">
          <a class="navbar-brand nav-logo" href="#"><img class="logo" src="<?=base_url()?>assets/images/logo.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a href="javascript:viod(0)"><i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i></a>
              </li>
              <li class="nav-item">
                <a href="javascript:viod(0)"><i class="fa fa-history fa-lg" aria-hidden="true"></i></a>
              </li>
              <li class="nav-item position-relative search-field">
                <div class="form-group">
                    <input type="text" class="form-control" name="">
                </div>
                <img class="search" src="<?=base_url()?>assets/images/search.png">
              </li>
            </ul>
            <ul class="navbar-nav position-relative">
              <li class="nav-item">
                <span>Trial expires in 13 days</span> <a href="javascript:void(0)" class="clr-blue">Upgrade</a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="thebirdseye">The Birds Eye</a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="referearn"><i class="fa fa-users fa-lg" aria-hidden="true"></i></a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="notification"><i class="fa fa-bell fa-lg" aria-hidden="true"></i> </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="settings"><i class="fa fa-cog fa-lg" aria-hidden="true"></i></a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i></a>
              </li>
              <li class="nav-item">
                        <a href="javascript:void(0)"><i class="fa fa-user-circle-o fa-2x input-img2" aria-hidden="true"></i></a>
                    </li>
              <div class="admin-card d-none ">
                        <div class="card h-100 position-relative">
                            <div class="close-img-1">
                                <a href="#"><img src="<?php echo base_url()?>assets/images/close.png"></a>
                            </div>
                            <div class="card-header text-center">
                                <div class="mb-2">
                                    <img src="<?php echo base_url()?>assets/images/user-img.png">
                                </div>
                                <div class="pb-3">
                                    <h6>ACCOUNTS</h6>
                                    <p>User ID: 60003651303</p>
                                    <p class="f-12">accounts@thebirdseye.in</p>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-center">
                                        <div class="user-sign-in">
                                            <a class="val1" href="#">My Account</a>
                                        </div>
                                        <div>
                                            <a class="val2" href="<?php echo base_url()?>Admin/logout">Sign Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0 ">
                                <div class="d-flex justify-content-between border-body p-3">
                                    <div class="text-muted">
                                        <p>MY ORGANIZATIONS</p>
                                    </div>
                                    <div>
                                        <a href="#"><i class="fa fa-cog fa-lg" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <div class="d-flex justify-content-between border-body-2 p-2">
                                        <div>
                                            <p>The Birds Eye</p>
                                            <p>organization ID: 60003651303</p>
                                            <p>TRIAL</p>
                                        </div>
                                        <div>
                                            <a href="#"><i class="fa fa-check-circle" aria-hidden="true" style="color:green;"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
                <div class="modal-card" id="thebirdseye">
        <div class="close-modal-card">
            <img src="<?php echo base_url()?>assets/images/close.png">
        </div>
        <div class="modal-card-head text-center">
            <img class="dp" src="<?php echo base_url()?>assets/images/dp.png">
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
    <div class="modal-card" id="referearn">
        <div class="close-modal-card">
            <img src="<?php echo base_url()?>assets/images/close.png">
        </div>
        <div class="modal-card-head text-center">
            <img src="<?php echo base_url()?>assets/images/referral.svg">
            <h2 class="pt-3 text-dark-blue">Know people who would love Zoho Books?</h2>
            <p class="red-refer text-red my-2">Refer now and earn 15% of the subscription payment as Zoho wallet credits</p>
            <div class="mt-4">
                <a href="#" class="primary-btn ">Refer and Earn</a>
            </div>
        </div>
        <div class="referearn-body">
            <h6>HOW DO YOU REFER & EARN?</h6>
            <p class="pt-4">Refer your friends and once they start using Zoho Books, you will get <b class="text-red">15%</b> of their subscription payment to Zoho as your wallet credit. Also, your friend will earn <b class="text-red">$100</b> as wallet credit for subscribing
                through referral. You can refer as many friends as you wish.</p>
            <p class="pt-3">The amount will be credited to your wallet after 90 days, if the friend you referred continues to stay as a paying customer.</p>
            <p class="pt-3">*Terms and Conditions apply</p>
        </div>

    </div>
    <!-- Refer and Earn -->
    <!-- Notification -->
    <div class="modal-card" id="notification">
        <div class="d-flex">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">.1..</div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">.2..</div>
        </div>
    </div>
    <!-- Notification -->
    <!-- Settings -->
    <div class="modal-card" id="settings">
        <div class="notify-head">
            <div class="d-flex">
                <h6 class="mr-auto">Settings</h6>
                <div class="close-modal-card">
                    <img src="<?php echo base_url()?>assets/images/close.png">
                </div>
            </div>
            <div class="form-group mb-0 mt-3 position-relative">
                <input type="text" class="form-control" name="" placeholder="Search Settings">
                <img class="search" src="<?php echo base_url()?>assets/images/search.png">
            </div>
        </div>
        <ul class="list-unstyled search__list my-3">
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                   <a href="<?php echo base_url()?>Organization/add_organization"><p>Organization Profile</p></a>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="<?php echo base_url()?>assets/images/"></div>
                    <p>Opening Balances</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>Users & Roles</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>Branches</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>Preferences</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>Currencies</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>Taxes</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>Reporting Tags</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>Templates</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>Emails</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>SMS Notifications</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>Reminders</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>Automation</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>Developer Space</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>Online Payments</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>Web Tabs</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>Integrations</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>Data Backup</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>Subscription</p>
                </a>
            </li>
        </ul>
    </div>
    <!-- Settings -->
    <!-- Help and Support -->
    <div class="modal-card" id="helpsupport">
        <div class="notify-head helpsupport-head">
            <div class="d-flex">
                <h6 class="mr-auto">Help & Support</h6>
                <div class="close-modal-card">
                    <img src="<?php echo base_url()?>assets/images/close.png">
                </div>
            </div>
            <div class="form-group mb-0 mt-3 position-relative">
                <input type="text" class="form-control" name="" placeholder="Search Settings">
                <img class="search" src="<?php echo base_url()?>assets/images/search.png">
            </div>
        </div>
        <ul class="list-unstyled search__list my-3">
            <li>
                <a href="#" class="d-flex">
                    <div><img class="mr-2" src="images/"></div>
                    <p>Organization Profile</p>
                </a>
            </li>

        </ul>
    </div>

        </nav>
       
   
    </header>
    