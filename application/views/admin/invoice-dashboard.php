<!doctype html>
<html lang="en">
<?php include('inc/header.php');?>

    <style>
        .modal-backdrop {
            background-color: transparent;
        }
        /**invoice css starts below**/
       
        @media only screen and (max-width: 425px) {
            .wd-5 {
                width: 0;
            }
            .wd-11 {
                width: 0;
            }
            .wd-13 {
                width: 0;
            }
        }
        
        .invoice-text {
            font-weight: 500;
            color: #222;
        }
        
        body {
            line-height: 1.6;
        }
        
        .invoice-header {
            background-color: #fbfafa;
            padding: 16px 12px;
        }
        
        .attach-btn,
        .attach-btn:hover {
            color: #212529;
            font-size: 13px;
            background-color: transparent;
            border-color: transparent;
        }
        
        .attach-btn {}
        
        .comm {
            color: #212529;
            font-size: 13px;
            display: inline;
            margin-right: 12px;
        }
        
        .comm-bor {
            border-right: 1px solid #e0e0e0;
            border-left: 1px solid #e0e0e0;
            border-radius: 0;
            display: inline;
            padding-right: 10px;
            padding-left: 10px;
        }
        
        .mx-334 {
            margin-left: auto;
            max-width: 334px;
        }
        
        .mt-5-close {
            margin-top: 5px;
        }
        
        .upload-text {
            font-size: 12px;
            color: #777;
            font-weight: 300;
            word-wrap: break-word;
        }
        
        .drag {
            color: #2485e8;
            font-size: 12px;
            font-weight: 300;
            display: block;
        }
        
        .upload-bor {
            border: 1px solid #ddd!important;
            border-radius: 5px;
            background-color: #f5f5f5;
            vertical-align: middle;
            max-width: 97px;
        }
        
        .padd-card {
            padding: 0 0 0 0;
        }
        
        .padd-card-row {
            padding: 0px 40px 0 58px;
        }
        
        .crd-before::before {
            content: "";
            height: 15px;
            width: 15px;
            background-color: #fff;
            position: absolute;
            top: -8px;
            right: 62px;
            transform: rotate(45deg);
            border: 0;
            border-top: 1px solid #dfdfdf;
            border-left: 1px solid #dfdfdf;
        }
        
        .attach-popover {
            position: absolute;
            top: 37px;
            right: 241px;
            z-index: 1;
        }
        
        .attach-inil {
            display: initial;
        }
        
        button {
            background-color: transparent;
            box-sizing: border-box;
            margin: 0em;
            font: 400 13.3333px Arial;
            padding: 1px 6px;
            border-width: 2px;
            border-style: outset;
            border-color: transparent;
            border-image: initial;
        }
        
        .invoice-sec-header {
            border-bottom: 1px solid #eee;
            border-top: 1px solid #eee;
            background-color: #f7f7f7;
        }
        
        .edit {
            border-right: 1px solid #eee;
        }
        
        .dots .dropdown-toggle::after {
            display: none;
        }
        
        .dots button {
            font-weight: 900;
        }
        
        .void-line {
            border-bottom: 1px solid #e9ecef;
        }
        
        .edit a {
            font-size: 16px;
            font-weight: 400;
        }
        
        .fs-13 {
            font-size: 13px!important;
        }
        
        .img-bg {
            background-color: #eee;
            height: 42px;
            width: 42px;
        }
        
        .paid-img {
            margin: 11px;
        }
        
        .paid-text {
            font-size: 15px;
            font-weight: 600;
            color: #212529;
        }
        
        .set-up-link {
            color: #2098ff!important;
        }
        
        .set-up {
            font-size: 13px;
            color: #555;
        }
        
        .offline {
            color: #fff;
            background-color: #d64830;
            border-color: #a53421;
            font-size: 13px;
            border-radius: 3px;
            border: 1px solid transparent;
            padding: .375rem .75rem;
        }
        
        .get-paid {
            border: 1px solid #dee2e6!important;
            border-left-width: 4px!important;
            border-radius: .3rem!important;
        }
        
        .tax-invoice {
            border: 1px solid #dee2e6!important;
            border-radius: .3rem!important;
            box-shadow: 0 0 6px #ccc;
            padding: 0 0 80px 0;
        }
        
        .tax-invoice-sec {
            border: 1px solid #ccc;
        }
        
        .google-meet {
            width: 150.0px;
            height: 84.375px;
        }
        
        .td-class {
            width: 10%;
            padding: 2px 10px;
            vertical-align: middle;
        }
        
        .td-class2 {
            width: 50%;
            padding: 2px 10px;
            vertical-align: middle;
        }
        
        .tax {
            width: 40%;
            padding: 5px;
            vertical-align: bottom;
        }
        
        .birds-eye {
            font-weight: bold;
            font-size: 12pt;
            color: #000000;
        }
        
        .kar {
            font-size: 8pt;
            color: #000000;
        }
        
        .pcs-entity-title {
            font-size: 22pt;
            color: #000000;
            float: right;
        }
        
        .right-bor {
            border-right: 1px solid #9e9e9e;
        }
        
        .invoice-details {
            border-top: 1px solid #9e9e9e;
            border-bottom: 1px solid #9e9e9e;
        }
        
        .invoice-details th,
        .invoice-details td {
            padding: 0;
        }
        
        .details-text {
            font-size: 8pt;
            color: #333333;
            padding: 1px 5px;
        }
        
        .details-text-side {
            font-weight: 600;
        }
        
        .bill-det {
            color: #333333;
            font-weight: 600;
            font-size: 8pt;
            padding: 1px 5px;
            background-color: #f2f3f4;
            border-bottom: 1px solid #9e9e9e;
        }
        
        .bill-name {
            color: #2485e8;
            font-size: 9pt;
            font-weight: 600;
            line-height: 15px;
            padding: 10px 5px 15px 5px;
        }
        
        .items-desc .table th,
        .items-desc .table td {
            padding: 0;
        }
        
        .items-desc .table-bordered td,
        .items-desc .table-bordered th {
            border: 1px solid #9e9e9e;
        }
        
        .items-desc .table-bordered th {
            font-size: 8pt;
            color: #000000;
            background-color: #f2f3f4;
            font-weight: 600;
            padding: 5px 7px 2px 7px;
        }
        
        .rem-bor {
            border-right: 0!important;
        }
        
        .rem-bor-left {
            border-left: 0!important;
            font-weight: 400!important;
        }
        
        .rem-bg {
            background-color: transparent!important;
        }
        
        .items-desc .table-bordered td {
            font-size: 8pt;
            padding: 5px 7px 15px 7px;
        }
        
        .wd-11 {
            width: 11%;
            text-align: right;
        }
        
        .wd-13 {
            width: 13%;
            text-align: right;
        }
        
        .wd-5 {
            width: 5%;
        }
        
        .total-words {
            border-right: 1px solid #9e9e9e;
        }
        
        .total-text {
            font-size: 8pt!important;
            padding: 4px 0 0 7px;
        }
        
        .indian {
            font-style: italic;
            font-weight: 600;
            font-size: 8pt!important;
            max-width: 291px;
            margin-bottom: 15px;
            padding-left: 7px;
        }
        
        .sub-text {
            padding: 4px 7px 0px 0px;
            text-align: right;
            font-size: 8pt;
        }
        
        .fw-600 {
            font-weight: 600;
        }
        
        .bor {
            border-bottom: 1px solid #9e9e9e;
        }
        
        .auth {
            font-size: 8pt;
        }
        
        .template {
            font-size: 13px;
        }
        
        .change {
            color: #2485e8;
        }
        
        .journal {
            border-bottom: 4px solid #c53e27;
            color: #333;
            font-weight: 500;
            font-size: 13px;
            padding: .72rem 1.08rem;
        }
        
        .journal-invoice {
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 11px;
        }
        
        .amount {
            color: #777!important;
            font-size: 80%;
            font-weight: 400;
        }
        
        .badge-inr {
            border-radius: 0;
            background-color: #388a10;
        }
        
        .invoice-text-head {
            font-size: 16px;
            margin-bottom: 1rem;
            font-weight: 600;
            margin-top: 10px;
        }
        
        .invoice-table .table th {
            padding: .3rem!important;
        }
        
        .invoice-table .table td {
            padding: .3rem!important;
        }
        
        .invoice-heading {
            color: #777;
            text-transform: uppercase;
            font-size: 12px;
            border-bottom: 1px solid #eee;
            font-weight: 600;
            padding: .3rem!important;
        }
        
        .tr-border {
            border-bottom: 1px solid #eee;
        }
        
        .invoice-text {
            font-size: 14px;
            color: #212529;
            font-weight: 400;
        }
        
        .fw-600 {
            font-weight: 600;
        }
        
        .tax-invoice-header {
            height: 80px
        }
        
        .btn-cust {
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)!important;
            color: #fff;
            background-color: #b03723;
            border-color: #a53421;
            border-radius: 0 0 0 5px;
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
        }
        
        .btn-cust:hover,
        .btn-cust:focus {
            background-color: #b03723;
        }
        
        .show>.btn-cust.dropdown-toggle {
            color: #fff;
            background-color: #b03723;
            border-color: #a53421;
        }
        
        .spread-sheet {
            font-size: 13px;
            color: #999;
            padding: 2px 15px 3px 10px;
            font-weight: 600;
        }
        
        .spreed-sheet-titles {
            font-size: 13px;
            font-weight: 400;
            color: #212529;
        }
        
        .tax-invoice-header .dropdown-item:hover {
            background-color: #2485e8;
            color: #fff;
        }
        
        .edit-bor-bot {
            border-bottom: 1px solid #e9ecef;
            margin: 5px 0;
        }
        /*overdue css */
        
        .overdue-box {
            overflow: hidden;
        }
        
        .overdue-box {
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        
        .overdue {
            position: absolute!important;
            top: -5px;
            left: -5px;
            overflow: hidden;
            width: 96px;
            height: 94px;
            font-size: 13px;
        }
        
        .overdue .overdue-styles {
            background-color: #f59d00;
            border-color: #c27c00;
        }
        
        .overdue .overdue-text {
            text-align: center;
            color: #fff;
            top: 24px;
            left: -31px;
            width: 135px;
            padding: 3px;
            position: relative;
            transform: rotate(-45deg);
        }
        
        .ribbon .overdue-text:after {
            content: "";
            border-top: 5px solid transparent;
            border-left: 5px solid;
            border-left-color: inherit;
            border-right: 5px solid transparent;
            border-bottom: 5px solid;
            border-bottom-color: inherit;
            position: absolute;
            top: 20px;
            transform: rotate(-45deg);
        }
        
        .overdue .overdue-text:after {
            right: -2px;
            border-bottom: 3px solid transparent;
        }
        
        .overdue .overdue-text:before {
            content: "";
            border-top: 5px solid transparent;
            border-left: 5px solid;
            border-left-color: inherit;
            border-right: 5px solid transparent;
            border-bottom: 5px solid;
            border-bottom-color: inherit;
            position: absolute;
            top: 20px;
            left: 0px;
            transform: rotate(-45deg);
        }
        /*overdue css ^*/
        
        .d-nonee {
            display: none!important;
        }
        
        .all-btn button {
            font-size: 16px;
        }
        
        .all-btn .dropdown-item {
            padding: .25rem 1.5rem;
            font-size: 13px;
        }
        
        .all-btn .dropdown-item:hover {
            color: #fff;
            background-color: #2485e8!important;
        }
        
        .default {
            color: #999;
            font-size: 12px;
            text-transform: uppercase;
            padding: 2px 15px 3px 10px;
            font-weight: 600;
        }
        
        .bor-left {
            border-left: 1px solid #c7c6c7;
        }
        
        .lines {
            border-color: #ddd;
            color: #212529;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        .rem-arr .dropdown-toggle::after {
            content: none;
        }
        
        .new-btn {
            color: #fff;
            background-color: #d64830;
            border-color: #d64830;
            font-size: 1rem;
            border-left: 1px solid #fff;
        }
        
        .new-btn:hover {
            color: #fff;
            background-color: #bb3b25;
            border-color: #b03723;
            font-size: 1rem;
            border-left: 1px solid #fff;
        }
        
        .bor-new {
            border-left: 1px solid #fff;
        }
        
        .show>.new-btn .dropdown-toggle {
            color: #fff;
            background-color: #d64830!important;
            border-color: #d64830!important;
            border-left: 1px solid #fff;
        }
        
        .split-btn .dropdown-item:hover {
            color: #fff;
            background-color: #2485e8!important;
        }
        
        .all-btn {
            display: inline;
        }
        
        .check-name {
            font-size: 14px;
        }
        
        .new-btn {
            display: flex;
        }
        
        .dropdown-toggle-split {
            padding-top: 15px!important;
        }
        
        .split-btn .btn {
            padding: 5px 19px 5px 7px;
        }
        
        .checkbox-row {
            border-top: 1px solid #e4e4e4;
            border-bottom: 1px solid #e4e4e4;
            padding: 10px;
        }
        
        .check-rs {
            font-size: 13px;
            line-height: 1.6;
        }
        
        .inv {
            padding-right: 5px;
            font-weight: 400;
            color: #2485e8;
            font-size: 13px;
            white-space: nowrap;
        }
        
        .separationline {
            border-left: 1px solid #e0e0e0;
            padding-left: 8px;
            font-size: 13px;
            word-wrap: break-word;
        }
        
        .overdue-by {
            color: #ff7264;
            text-transform: capitalize;
        }
        
        .checkbox-row:hover {
            background-color: #f5f5f5;
        }
        
        .check-row {
            border-top: 0;
            background-color: #fafafa;
        }
        
        .mark-btn {
            border-color: #ddd;
            color: #212529;
            background-color: #f5f5f5;
            border-radius: 3px;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.6;
            font-weight: 400;
            white-space: nowrap;
        }
        
        .mark-btn:hover {
            background-color: #fafafa;
            color: #212529;
            border-color: #ddd;
        }
        
        .show>.more-btn.dropdown-toggle {
            background-color: #f5f5f5;
            color: #212529;
            border-color: #ddd;
        }
        
        .show>.more-btn.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem transparent;
        }
        
        .dropdown-item:hover {
            color: #fff;
            background-color: #2485e8;
        }
        
        .more-dropdown .dropdown-item {
            font-size: 13px;
        }
        
        .selected {
            font-size: 13px;
            white-space: nowrap;
            margin-top: 10px;
        }
        
        .mark-row {
            background-color: #f8f7f7;
            padding: 16px 10px;
        }
        
        .check-close {
            color: #777;
        }
        
        .x-close {
            font-size: 28px;
        }
        
        .dis-none {
            display: none;
        }
        
        .comm:hover {
            color: #2485e8!important;
        }
        
        .edits:hover {
            color: #2485e8!important;
        }
        
        .edits {
            border-right: 1px solid #eee;
            padding: 12px;
        }
        
        .mt-12 {
            margin-top: 12px;
        }
        
        .dropdown-toggle::after:hover {
            color: #2485e8;
        }
        
        .mail:hover {
            color: #2485e8;
        }
        
        .frist-drop:hover {
            color: #2485e8;
        }
        
        .attach-icon {
            transform: rotate(45deg);
        }
        
        .edit-hover:hover {
            color: #2485e8!important;
        }
        /* .edit button{padding:0!important;} */
        
        .p-12 {
            padding: 12px;
        }
        
        .mt-9 {
            margin-top: 9px;
        }
        
        .dropdown-toggle-split {
            padding-top: 0!important;
        }
        
        .dropdown-toggle-split::after {
            margin-top: 7px!important;
        }
        
        .fs-12 {
            font-size: 12px;
        }
        
        .fs-12:hover {
            font-size: 12px;
        }
        
        .p2-9 {
            padding: 2px 9px!important;
        }
        
        .pr-20 {
            padding-right: 20px!important;
        }
        
        .line-btn {
            border-color: #ddd!important;
            color: #212529!important;
            background-color: #f5f5f5!important;
            border: 1px solid #ddd!important;
            border-radius: 4px!important;
            padding: 0px 9px!important;
        }
        
        .invoice-top-row {
            height: 100vh !important;
        }
        
        .invoice-top-row .content-value {
            border-bottom: 0;
        }
        
        .split-btn .btn-secondary:not(:disabled):not(.disabled):active {
            background-color: #d64830;
            border-color: #d64830;
        }
        
        .btn-secondary:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 0.2rem transparent;
        }
        
        .split-btn .dropdown-item {
            font-size: 13px!important;
        }
        
        .show>.new-btn.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem transparent;
        }
        
        .show>.new-btn.dropdown-toggle {
            color: #fff;
            background-color: #bb3b25;
            border-color: #b03723;
        }
        
        .change:hover {
            color: #2a74be;
        }
        
        .bill-name:hover {
            color: #2a74be;
        }
        
        .offline:hover {
            color: #fff;
            background-color: #bb3b25;
        }
        
        .all-invoice-row {
            padding: 16px 27px 8px 27px;
        }
        
        .mt-12 {
            margin-top: 12px;
        }
        
        .edit a {
            color: #000!important;
        }
        
        .invoice-top-row .table-responsive {
            overflow-x: visible;
        }
        /**invoice css ends above**/
        
        .new-voice-foot-1.main textarea {
            width: 200px;
            height: 38px;
        }
        /* .collapsed .rot-img-back{transform: rotate(90deg)!important;}     */
        
        .collapse .rot-img-back {
            transform: rotate(0deg)!important;
        }
        
        .sales-open {
            position: fixed;
            padding: 71px 0 0 0;
            top: 0;
            z-index: 10;
            height: 100vh;
            width: 210px;
            overflow-x: hidden;
            transition: width .3s ease-in-out;
            border-right: 1px solid #e4e4e4;
        }
        .content-value{
            z-index: -1;
        }
    </style>
</head>

<body>
<?php include('inc/menu.php');?>


            <div class="main--menu">
                <div class="invoice-top-row">
                    <div class="d-flex justify-content-between content-value ">
                        <div>
                            <div class="dropdown Customer-content--">
                                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            All Invoice
                          </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div class="align-self-center">
                            <div class="d-flex">
                                <div class="align-self-center mr-3">

                                    <a href="<?php echo base_url()?>Invoice/new_invoice" class="secoundry-btn">+ New</a>



                                </div>
                                <div class="mr-3 header-a"><a href="javascript:void(0)" class="settings"><i class="fa fa-cog fa-lg" aria-hidden="true"></i></a></div>
                                <div class="mr-3 header-a"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></div>
                                <div class="mr-3 header-a"><a href="#" class="tips"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Page Tips</a></div>

                            </div>
                        </div>
                    </div>
                    <div class="table-responsive  pt-4">
                        <table class="w-100 table-list mt-5 " id="myTable">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="custom-control custom-checkbox table-check">
                                            <input type="checkbox" class="custom-control-input checkbox_check" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </th>
                                    <th>Date</th>
                                    <th>Invoice#</th>
                                    <th>Order Number</th>
                                    <th>Customer Name</th>
                                    <th>Status</th>
                                    <th>Due Date</th>
                                    <th>Amount</th>
                                    <th>Balance Due</th>
                                    <th><img class="search" src="<?php echo base_url()?>assets/images/search.png"></th>
                                </tr>
                           
                            </thead>    
                            <tbody class="order-body">
                            <?php if($getdetails){
                                    foreach($getdetails as $info){?>
                                <tr>
                               
                                    <td>
                                        <div class="custom-control custom-checkbox table-check">
                                            <input type="checkbox" class="custom-control-input mark-clicked" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2"></label>
                                        </div>
                                    </td>

                                    <td><a href="<?php echo base_url()?>Invoice/getInvoice/<?php echo $info->sk_bill_id?>" class="clr-black"><?=$info->invoice_date?></a></td>
                                    <td><a href="<?php echo base_url()?>Invoice/getInvoice/<?php echo $info->sk_bill_id?>"><?=$info->invoice_no?></a></td>
                                    <td><a href="<?php echo base_url()?>Invoice/getInvoice/<?php echo $info->sk_bill_id?>" class="clr-black"><?=$info->order_no?></a></td>
                                    <td> <a href="<?php echo base_url()?>Invoice/getInvoice/<?php echo $info->sk_bill_id?>" class="clr-black"><?=$info->primary_contact?></a></td>
                                    <td><a href="<?php echo base_url()?>Invoice/getInvoice/<?php echo $info->sk_bill_id?>" class="clr-black"><?=$info->payment_status?></a> </td>
                                    <td> <a href="<?php echo base_url()?>Invoice/getInvoice/<?php echo $info->sk_bill_id?>" class="clr-black"><?=$info->due_date?></a> </td>
                                    <td><a href="<?php echo base_url()?>Invoice/getInvoice/<?php echo $info->sk_bill_id?>" class="clr-black"> <?=$info->grand_total?></a> </td>
                                    <td> <a href="<?php echo base_url()?>Invoice/getInvoice/<?php echo $info->sk_bill_id?>" class="clr-black"><?=$info->grand_total?></a> </td>



                                    <td>
                                        <div class="dropdown link-dropdown">
                                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="black-down-arrow" src="<?php echo base_url()?>assets/images/down-arrow-black.png">
                              </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class="fa fa-pencil mr-2" aria-hidden="true"></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-file-pdf-o mr-2" aria-hidden="true"></i> Download the PDF</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-print mr-2" aria-hidden="true"></i> Print Transaction</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-envelope-o mr-2" aria-hidden="true"></i> Send Email</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-money mr-2" aria-hidden="true"></i> Record Payment</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-link mr-2" aria-hidden="true"></i>Share Invoice Link</a>
                                            </div>
                                        </div>
                                    </td>
                                    <?php }}?>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->

    <?php include('inc/footer.php');?>

    <script>
        $(function() {
            $('[data-toggle="popover"]').popover()
        })
    </script>


    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <script>
        $(document).ready(function() {
            $(".tax-invoice").hover(function() {
                $(".btn-cust1").toggleClass("d-block");
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".comm1").click(function() {
                $(".attach-popover").toggleClass("d-block");
            });
        });

        $(document).ready(function() {
            $('.close').click(function() {
                $('.attach-popover').removeClass("d-block");
            });
        });

        $(document).ready(function() {
            $(".check-close ").click(function() {
                $(".mark-row").addClass("d-none");
                $(".all-invoice-row").removeClass("d-none");
            });
        });
    </script>


    <script>
        $('#blankCheckbox0').change(function() {
            if ($(this).is(':checked')) {
                $(".two-sel").removeClass("d-none");
                $(".one-sel").addClass("d-none");
            } else {
                $(".two-sel").addClass("d-none");
                $(".one-sel").removeClass("d-none");
            }
        });
        $('#blankCheckbox').change(function() {
            if ($(this).is(':checked')) {
                $(".mark-row").removeClass("dis-none");
                $(".two-sel").removeClass("d-none");
                $(".one-sel").addClass("d-none");
            } else {
                $(".two-sel").addClass("d-none");
                $(".one-sel").removeClass("d-none");
            }
        });
        $('#blankCheckbox2').change(function() {
            if ($(this).is(':checked')) {
                $(".mark-row").removeClass("dis-none");
                $(".two-sel").removeClass("d-none");
                $(".one-sel").addClass("d-none");
            } else {
                $(".two-sel").addClass("d-none");
                $(".one-sel").removeClass("d-none");
            }
        });
        $(document).ready(function() {
            $(".check-close").click(function() {
                $("#blankCheckbox0").prop("checked", false);
                $("#blankCheckbox").prop("checked", false);
                $("#blankCheckbox2").prop("checked", false);
            });
        });
    </script>

    <script>
        $('#blankCheckbox').change(function() {
            if ($(this).is(':checked')) {
                $(".mark-row").removeClass("d-none");
                $(".all-invoice-row").addClass("d-none");
            } else {}
        });

        $('#blankCheckbox2').change(function() {
            if ($(this).is(':checked')) {
                $(".mark-row").removeClass("d-none");
                $(".all-invoice-row").addClass("d-none");
            } else {}
        });

        $('#blankCheckbox0').change(function() {
            if ($(this).is(':checked')) {} else {

            }
        });
    </script>

    <!-- <script>
    (function($){
        $('.child').change(function(){
        // create var for parent .checkall and group
        var group = $(this).data('group'),
            checkall = $('.selectall[data-group="'+group+'"]');
    
        // do we have some checked? Some unchecked? Store as boolean variables
        var someChecked = $('.child[data-group="'+group+'"]:checkbox:checked').length > 0;
        var someUnchecked = $('.child[data-group="'+group+'"]:checkbox:not(:checked)').length > 0;
    
        // if we have some checked and unchecked, set .checkall, of the correct group, to indeterminate. 
        // If all are checked, set .checkall to checked
        // checkall.prop("indeterminate", someChecked && someUnchecked);
        checkall.prop("indeterminate", someChecked && someUnchecked);
      
        // checkall.prop("checked", someChecked || !someUnchecked);
        checkall.prop("checked", someChecked || !someUnchecked);
    // fire change() when this loads to ensure states are updated on page load
    }).change();
    
    // clicking .checkall will check all children in the same group.
    $('.selectall').click(function() {
        var group = $(this).data('group');
        $('.child[data-group="'+group+'"]').prop('checked', this.checked).change(); 
    });
}(window.jQuery));
  </script> -->



    <!-- <script>
  function selectAll() {
    $('.selectedId').attr('checked', isChecked('selectall'));
}

function isChecked(checkboxId) {
    var id = '#' + checkboxId;
    return $(id).is(":checked");
}


function resetSelectAll() {
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    if ($(".selectedId").length == $(".selectedId:checked").length) {
        $("#selectall").attr("checked", "checked");
    } else {
        $("#selectall").removeAttr("checked");
    }
}
</script> -->
    <!-- <script>
  $(document).ready(function () {
    $('.paper-clip')
        .mouseover(function () {
        $(this).attr("src", "images/attachment.png");
    })
        .mouseout(function () {
        $(this).attr("src", "images/paperclip.png");
    });
});
</script> -->
    <script>
        $(".comm-bor").hover(function() {
            $(this).find("img").attr("src", "images/mes-blue.png")
        }, function() {
            $(this).find("img").attr("src", "images/message.png")

        })
    </script>
    <!-- <script>
  $(document).ready(function(){
    $(".onclick-row").click(function(){
      $(".show-invoice-row").removeClass("d-none");
      $(".invoice-top-row").addClass("d-none");
    });
  });
  $(document).ready(function(){
    $(".mt-5-close").click(function(){
      $(".show-invoice-row").addClass("d-none");
      $(".invoice-top-row").removeClass("d-none");
    });
  });
 
</script> -->
    <!-- <script>
  $('#blankCheckbox0').click(function () {    
     $('input:checkbox').prop('checked', this.checked);    
 });
</script> -->

    <!-- checkbox script -->
    <script>
        $(document).ready(function() {
            $('#blankCheckbox0').click(function() {
                $('.mark-click').prop('checked', this.checked);
            });



            $('.mark-click').change(function() {
                var check = ($('.mark-click').filter(":checked").length == $('.mark-click').length);
                $('#blankCheckbox0').prop("checked", check);
            });
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#customCheck1').click(function() {
                $('.mark-clicked').prop('checked', this.checked);
            });



            $('.mark-clicked').change(function() {
                var check = ($('.mark-clicked').filter(":checked").length == $('.mark-clicked').length);
                $('#customCheck1').prop("checked", check);
            });
        })
    </script>

    <script>
        $('input[name="ch[]"]').on('change', function() {
            if ($('input[name="ch[]"]').is(':checked')) {
                $(".mark-row").show(); // checked 
            } else {
                $(".mark-row").hide(); // unchecked
                $(".all-invoice-row").removeClass("d-none");
            }
        })
    </script>

    <script>
        $(function() {


            $("input[name=templet]:radio").click(function() {

                if ($('input[name=templet]:checked').val() == "Spreadsheet Template") {
                    $('.modal-card').css({
                        "display": "none"
                    });


                } else if ($('input[name=templet]:checked').val() == "Standard Template") {

                    $('.modal-card').css({
                        "display": "none"
                    });

                }
            });
        });
    </script>
    <script>
        //side menu script starts below
        $(document).ready(function() {
            $(".close-menu").click(function() {
                $(".sales-coll").removeClass("show");
                $(".rem-col").removeClass("col-arrow");
            });
        });
        $(document).ready(function() {
            $(".sales-trans").click(function() {
                $(".side--menu").removeClass("close--side--menu ");
                $(".content-value").removeClass("close-content-value");
                $(".accor-close").removeClass("open-menu");
                $(".main--menu").removeClass("close--main--menu");
                $(".rem-col").addClass("col-arrow");
            });
        });

        //   $('#headingOne').click(function() {
        // 	var isSomethingTrue = true;

        //     if(isSomethingTrue){
        //       $(".side--menu").removeClass("close--side--menu ");
        //      $(".content-value").removeClass("close-content-value");
        //      $(".accor-close").removeClass("open-menu");
        //      $(".main--menu").removeClass("close--main--menu");

        //     }else{
        //        $(".side--menu").addClass("close--side--menu ");
        //      $(".content-value").addClass("close-content-value");
        //      $(".accor-close").addClass("open-menu");
        //      $(".main--menu").addClass("close--main--menu");
        //     }
        // });
        //side menu script ends above
    </script>


</body>

</html>
<script>
   function check(id){
        
        //console.log($admin_url);
        // alert(id);
         $.ajax({  
                      url:"<?php echo base_url()?>Item/getItem",  
                      data: {id:id},  
                      type: "POST",  
                      success:function(data){  
                  console.log(data);
                         let resp = JSON.parse(data);
                         if(resp.status==true){
                             let primary_contact='';
                             let item_details =resp.data.item_details;
                         
                         //console.log(address_1);
                       //  $(".item_type").html(item_details[0].item_type);
                             $(".invoice-text").html(item_details[0].item_name);
                             $(".cost_price").html(item_details[0].cost_price);
                             $(".purchase_account").html(item_details[0].purchase_account);
                             $(".selling_price").html(item_details[0].selling_price);
                             $(".sales_account").html(item_details[0].sales_account);
                            
                         }
                   }  
                });  
    // return false;
 }
  </script>