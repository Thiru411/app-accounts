<!-- <!doctype html>-->
<html lang="en">
<?php include('inc/header.php');?>

    <style>
        .modal-backdrop{background-color: transparent;}
         /**invoice css starts below**/
@media only screen and (max-width: 425px){
.wd-5{width:0;}
.wd-11{width:0;}
.wd-13{width:0;}
}
.invoice-text{font-weight: 500;color: #222;}
body{line-height: 1.6;}
.invoice-header{background-color:#fbfafa;padding: 16px 12px;}
.attach-btn, .attach-btn:hover{color: #212529;font-size:13px;background-color: transparent;border-color: transparent;}
.attach-btn{}
.comm{color: #212529;font-size:13px;display: inline;margin-right: 12px;}
.comm-bor{border-right: 1px solid #e0e0e0;border-left: 1px solid #e0e0e0;border-radius:0;display: inline;padding-right:10px;padding-left:10px;}
.mx-334{margin-left: auto;max-width: 334px;}
.mt-5-close{margin-top: 5px;}
.upload-text{font-size: 12px;color: #777;font-weight:300;word-wrap: break-word;}
.drag{color: #2485e8;font-size: 12px;font-weight: 300;display: block;}
.upload-bor{border: 1px solid #ddd!important;border-radius: 5px;background-color: #f5f5f5;vertical-align: middle;    max-width: 97px;}
.padd-card{padding: 0 0 0 0;}
.padd-card-row{padding: 0px 40px 0 58px;}
.crd-before::before{content:"";height: 15px;width: 15px;background-color: #fff;position: absolute;top: -8px;right: 62px;transform: rotate(45deg);border: 0;border-top: 1px solid #dfdfdf;border-left: 1px solid #dfdfdf;}
.attach-popover{position: absolute;top: 37px;right: 241px;z-index: 1;}
.attach-inil{display:initial;}
button{background-color: transparent;box-sizing: border-box;margin: 0em;font: 400 13.3333px Arial;padding: 1px 6px;border-width: 2px;border-style: outset;border-color: transparent;border-image: initial;}
.invoice-sec-header {border-bottom: 1px solid #eee;border-top: 1px solid #eee;background-color: #f7f7f7;}
.edit{border-right: 1px solid #eee;}
.dots .dropdown-toggle::after {display:none;}
.dots button{font-weight:900;}
.void-line{border-bottom:1px solid #e9ecef;}
.edit a{font-size:16px;font-weight:400;}
.fs-13{font-size:13px!important;}
.img-bg{background-color:#eee;height:42px;width:42px;}
.paid-img{margin:11px;}
.paid-text{font-size:15px;font-weight:600;    color: #212529;}
.set-up-link{color: #2098ff!important;}
.set-up{font-size:13px;color:#555;}
.offline{color: #fff;background-color: #d64830;border-color: #a53421;font-size: 13px;border-radius: 3px;border: 1px solid transparent;padding: .375rem .75rem;}
.get-paid {border: 1px solid #dee2e6!important;border-left-width:4px!important;border-radius: .3rem!important; }
.tax-invoice{border: 1px solid #dee2e6!important;border-radius: .3rem!important;box-shadow: 0 0 6px #ccc;padding:0 0 80px 0;}
.tax-invoice-sec{border: 1px solid #ccc;}
.google-meet{width:150.0px;height:84.375px;}
.td-class{width:10%;padding: 2px 10px;vertical-align: middle;}
.td-class2{width:50%;padding: 2px 10px;vertical-align: middle;}
.tax{width:40%;padding: 5px;vertical-align: bottom;}
.birds-eye{font-weight: bold;font-size: 12pt;color: #000000;}
.kar{font-size: 8pt;color: #000000;}
.pcs-entity-title{font-size: 22pt;color: #000000;float:right;}
.right-bor{border-right:1px solid #9e9e9e;}
.invoice-details{border-top:1px solid #9e9e9e;border-bottom:1px solid #9e9e9e;}
.invoice-details th , .invoice-details td{padding: 0;}
.details-text{font-size:8pt;color: #333333;padding: 1px 5px;}
.details-text-side{font-weight: 600;}
.bill-det{color: #333333;font-weight: 600;    font-size: 8pt;    padding: 1px 5px;background-color: #f2f3f4;border-bottom:1px solid #9e9e9e;}
.bill-name{color: #2485e8;font-size: 9pt;    font-weight: 600;line-height: 15px;padding: 10px 5px 15px 5px;}
.items-desc .table th , .items-desc .table td{padding: 0;}
.items-desc  .table-bordered td, .items-desc  .table-bordered th {border: 1px solid #9e9e9e;}
.items-desc  .table-bordered th{font-size: 8pt;color: #000000;background-color: #f2f3f4;    font-weight: 600;padding: 5px 7px 2px 7px;}
.rem-bor{border-right:0!important;}
.rem-bor-left{border-left:0!important;font-weight:400!important;}
.rem-bg{background-color:transparent!important;}
.items-desc  .table-bordered td{font-size:8pt;padding: 5px 7px 15px 7px;}
.wd-11{width:11%;text-align: right;}
.wd-13{width:13%;text-align: right;}
.wd-5{width:5%;}
.total-words{border-right:1px solid #9e9e9e;}
.total-text{font-size:8pt!important;padding:4px 0 0 7px;}
.indian{font-style: italic;font-weight: 600;font-size:8pt!important;max-width:291px; margin-bottom:15px;padding-left: 7px;}
.sub-text{padding: 4px 7px 0px 0px;text-align: right;font-size: 8pt;}
.fw-600{font-weight:600;}
.bor{border-bottom: 1px solid #9e9e9e;}
.auth{font-size: 8pt;}
.template{font-size: 13px;}
.change{color:#2485e8;}
.journal{border-bottom:4px solid #c53e27;color: #333;font-weight: 500;font-size:13px;    padding: .72rem 1.08rem;}
.journal-invoice{border-bottom: 1px solid #dee2e6;padding-bottom: 11px;}
.amount{    color: #777!important;    font-size: 80%;font-weight: 400;}
.badge-inr{border-radius:0;    background-color: #388a10;}
.invoice-text-head{font-size: 16px;    margin-bottom: 1rem;font-weight: 600;margin-top:10px;}
.invoice-table .table th {padding: .3rem!important;}
.invoice-table .table td {padding: .3rem!important;}
.invoice-heading{color: #777;text-transform: uppercase;font-size: 12px;border-bottom: 1px solid #eee;font-weight: 600;padding: .3rem!important;}
.tr-border{border-bottom: 1px solid #eee;}
.invoice-text{font-size: 14px;color: #212529;font-weight: 400;}
.fw-600{font-weight:600;}
.tax-invoice-header{height: 80px}
.btn-cust {box-shadow: inset 0 3px 5px rgba(0,0,0,.125)!important;color: #fff;background-color: #b03723;border-color: #a53421;border-radius: 0 0 0 5px;    padding: .375rem .75rem;font-size: 1rem;font-weight: 400;}
.btn-cust:hover, .btn-cust:focus{ background-color: #b03723;}
.show>.btn-cust.dropdown-toggle{color: #fff;background-color: #b03723;border-color: #a53421;}
.spread-sheet{font-size: 13px;color: #999;padding: 2px 15px 3px 10px;font-weight: 600;}
.spreed-sheet-titles{    font-size: 13px;font-weight: 400;color: #212529;}
.tax-invoice-header .dropdown-item:hover{background-color: #2485e8;color:#fff;}
.edit-bor-bot{    border-bottom: 1px solid #e9ecef;margin:5px 0;} 
/*overdue css */
.overdue-box {overflow: hidden;}
.overdue-box  {text-overflow: ellipsis;white-space: nowrap;}
.overdue{position: absolute!important;top: -5px;left: -5px;overflow: hidden;width: 96px;height: 94px;font-size: 13px;}
.overdue .overdue-styles {background-color: #f59d00;border-color: #c27c00;}
.overdue .overdue-text{text-align: center;color: #fff;top: 24px;left: -31px;width: 135px;padding: 3px;position: relative;transform: rotate(-45deg);}
.ribbon .overdue-text:after {content: "";border-top: 5px solid transparent;border-left: 5px solid;border-left-color: inherit;border-right: 5px solid transparent;border-bottom: 5px solid;border-bottom-color: inherit;position: absolute;top: 20px;transform: rotate(-45deg);}
.overdue .overdue-text:after {right: -2px;border-bottom: 3px solid transparent;}
.overdue .overdue-text:before {content: "";border-top: 5px solid transparent;border-left: 5px solid;border-left-color: inherit;border-right: 5px solid transparent;border-bottom: 5px solid;border-bottom-color: inherit;position: absolute;top: 20px;left: 0px;transform: rotate(-45deg);}
/*overdue css ^*/
.d-nonee{display:none!important;}
.all-btn button{font-size: 16px;}
.all-btn .dropdown-item {padding: .25rem 1.5rem;font-size:13px;}
.all-btn .dropdown-item:hover {color: #fff;background-color: #2485e8!important;}
.default{color: #999;font-size: 12px;text-transform: uppercase; padding: 2px 15px 3px 10px;font-weight: 600;}
.bor-left{border-left:1px solid #c7c6c7;}
.lines{border-color: #ddd;color: #212529;background-color: #f5f5f5;border: 1px solid #ddd;border-radius: 4px;}
.rem-arr .dropdown-toggle::after {content: none;}
.new-btn{color: #fff;background-color: #d64830;border-color: #d64830;font-size:1rem;border-left: 1px solid #fff;}
.new-btn:hover{color: #fff;background-color: #bb3b25;border-color: #b03723;font-size:1rem;border-left: 1px solid #fff;}
.bor-new{border-left: 1px solid #fff;}
.show>.new-btn .dropdown-toggle {color: #fff;background-color: #d64830!important;border-color: #d64830!important;border-left: 1px solid #fff;}
.split-btn .dropdown-item:hover {color: #fff;background-color: #2485e8!important;}
.all-btn{display:inline;}
.check-name{    font-size: 14px;}
.new-btn{display:flex;}
.dropdown-toggle-split{padding-top: 15px!important;}
.split-btn .btn{padding: 5px 19px 5px 7px;}
.checkbox-row{border-top:1px solid #e4e4e4;border-bottom:1px solid #e4e4e4;padding: 10px;}
.check-rs{font-size: 13px;line-height: 1.6;}
.inv{padding-right:5px;font-weight: 400;color: #2485e8;font-size: 13px;white-space: nowrap;}
.separationline{border-left: 1px solid #e0e0e0;padding-left: 8px;font-size: 13px;word-wrap: break-word;}
.overdue-by{color:#ff7264;text-transform: capitalize;}
.checkbox-row:hover{background-color:#f5f5f5;}
.check-row{border-top:0;background-color:#fafafa;}
.mark-btn{border-color: #ddd;color: #212529;background-color: #f5f5f5;border-radius: 3px;    padding: .375rem .75rem;font-size: 1rem;line-height: 1.6;font-weight: 400;white-space: nowrap;}
.mark-btn:hover{background-color:#fafafa; color: #212529;border-color: #ddd; }
.show>.more-btn.dropdown-toggle {background-color: #f5f5f5; color: #212529;border-color: #ddd; }
.show>.more-btn.dropdown-toggle:focus{box-shadow: 0 0 0 0.2rem transparent;}
.dropdown-item:hover {color: #fff;background-color: #2485e8;}
.more-dropdown .dropdown-item{font-size:13px;}
.selected{font-size: 13px;white-space: nowrap;margin-top: 10px;}
.mark-row{background-color: #f8f7f7;padding: 16px 10px;}
.check-close{color:#777;}
.x-close{font-size: 28px;}
.dis-none{display:none;}
.comm:hover {color: #2485e8!important;}
.edits:hover{color: #2485e8!important;}
.edits{border-right: 1px solid #eee;padding: 12px;}
.mt-12{    margin-top: 12px;}
.dropdown-toggle::after:hover{color: #2485e8;}
.mail:hover{color: #2485e8;}
.frist-drop:hover{color: #2485e8;}
.attach-icon{transform: rotate(45deg);}
.edit-hover:hover{color: #2485e8!important;}
/* .edit button{padding:0!important;} */
.p-12{padding:12px;}
.mt-9{margin-top: 9px;}
.dropdown-toggle-split{padding-top:0!important;}
.dropdown-toggle-split::after{margin-top:7px!important;}
.fs-12{font-size:12px;}
.fs-12:hover{font-size:12px;}
.p2-9{padding: 2px 9px!important;}
.pr-20{padding-right: 20px!important;}
.line-btn{border-color: #ddd!important;color: #212529!important;background-color: #f5f5f5!important;border: 1px solid #ddd!important;border-radius: 4px!important;padding: 0px 9px!important;}
.invoice-top-row .content-value {border-bottom:0;}
.split-btn .btn-secondary:not(:disabled):not(.disabled):active{background-color: #d64830;border-color: #d64830;}
.btn-secondary:not(:disabled):not(.disabled):active:focus{box-shadow: 0 0 0 0.2rem transparent;}
.split-btn .dropdown-item {font-size: 13px!important;}
.show>.new-btn.dropdown-toggle:focus {box-shadow: 0 0 0 0.2rem transparent;}
.show>.new-btn.dropdown-toggle {color: #fff;background-color: #bb3b25;border-color: #b03723;}
.change:hover{color: #2a74be;}
.bill-name:hover{color: #2a74be;}
.offline:hover{color:#fff;background-color: #bb3b25;}
.all-invoice-row{    padding: 16px 27px 8px 27px;}
.mt-12{margin-top:12px;}
.edit a{color:#000!important;}
.invoice-scroll{overflow: auto;height: calc(100vh - 160px);overflow-x: hidden;}  
/**invoice css ends above**/
.new-voice-foot-1.main textarea{width: 200px;height: 38px;}

 
    
    </style>
  
  <body>
  <?php include('inc/menu.php');?>

            
            <div class="main--menu">
                <!--invoices section starts below-->
                    <div class="row show-invoice-row">
                       <div class="col-md-4">
  
                             <!--side row-->
                             <div class="side-row">
                                <div class="row all-invoice-row " id="all-inv">
                                   <div class="col-md-6 m-0 p-0">

                                        <div class="dropdown Customer-content-- show all-btn">
                                          <button class="btn  dropdown-toggle  " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            All Invoice
                                          </button>
                                          <div class="dropdown-menu " aria-labelledby="dropdownMenuButton" style="position: absolute; transform: translate3d(0px, 42px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-start">
                                            <div class="default">Default Filters</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                          </div>
                                        </div>

                                   </div>

                                   <div class="col-md-6 m-0 p-0 text-right">
                                     <div class="row float-right">
                                         <div class="col-md-7 text-right p-0">
                                          <div class="btn-group split-btn">
                                            <button type="button" class="btn btn-secondary new-btn p2-9 m-0 pr-20 fs-12" data-toggle="tooltip" data-placement="bottom" title="Create invoice"><img src="<?php echo base_url()?>assets/images/plus-white.png" height="10px" width="10px" class="img-fluid m-1">New</button>
                                            
                                            <button type="button" class="btn btn-secondary new-btn bor-new dropdown-toggle dropdown-toggle-split p2-9  m-0" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                              <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                              <a class="dropdown-item" href="#">Action</a>
                                              <a class="dropdown-item" href="#">Another action</a>
                                              <a class="dropdown-item" href="#">Something else here</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                          </div> 
                                         </div>
                                         <div class="col-md-5 p-0 text-right">
                                          <div class="dropdown rem-arr Customer-content-- show all-btn ">
                                            <button class="btn  dropdown-toggle p-0 line-btn" type="button" id="dropdownMenuButtonall" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <img src="<?php echo base_url()?>assets/images/lines.png" class="img-fluid " height="14px" width="14px">
                                            </button>
                                            <div class="dropdown-menu " aria-labelledby="dropdownMenuButton" style="position: absolute; transform: translate3d(0px, 42px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-start">
                                              <div class="default">Default Filters</div>
                                              <a class="dropdown-item" href="#">Action</a>
                                              <a class="dropdown-item" href="#">Another action</a>
                                              <a class="dropdown-item" href="#">Something else here</a>
                                              <a class="dropdown-item" href="#">Action</a>
                                              <a class="dropdown-item" href="#">Another action</a>
                                              <a class="dropdown-item" href="#">Something else here</a>
                                              <a class="dropdown-item" href="#">Action</a>
                                              <a class="dropdown-item" href="#">Another action</a>
                                              <a class="dropdown-item" href="#">Something else here</a>
                                              <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                          </div>
                                        </div>
                                     </div>

                                   </div>
                               </div> 

                                <!--checked-display-->
                                  <div class="row mark-row mark-row1 dis-none">
                                      <div class="col-md-2 pr-0 text-center">
                                        <!-- <div class="form-check">
                                          <input class="form-check-input position-static selectall" data-group="1"  type="checkbox" id="blankCheckbox0"   value="option1" aria-label="..." onchange="valueChanged()"/>
                                        </div> -->

                                        <input type="checkbox" id="blankCheckbox0"   class="selectall checkbox_check one mt-12" name="ch[]" data-group="1" />
                                        <!-- <input type="checkbox" id="selectall" onclick="selectAll();"></input> -->
                                      </div>

                                      <div class="col-md-4 pl-0">
                                        <button type="button" class="btn btn-outline-secondary mark-btn">Mark as Sent</button>
                                      </div>

                                      <div class="col-md-3">
                                        <div class="dropdown more-dropdown">
                                          <button class="btn btn-secondary dropdown-toggle mark-btn more-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            More
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Bulk Update</a>
                                            <a class="dropdown-item" href="#">Send Emails</a>
                                            <a class="dropdown-item" href="#">Print</a>
                                            <a class="dropdown-item" href="#">Export as PDF</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-2 d-flex">
                                         <p class="selected one-sel text-muted"> 1 Selected</p>
                                         <p class="selected two-sel text-muted d-none"> 2 Selected</p>
                                         <button type="button" class="close check-close float-right ml-2" aria-label="Close"data-toggle="tooltip" data-placement="bottom" title="Remove selection">
                                          <span aria-hidden="true" class="x-close">×</span>
                                        </button>
                                      
                                      </div>

                                  </div>
                                  
                                 <!--checked-display ^-->
                  
                                 <?php if($getdetails){
                                       foreach($getdetails as $info){?>
                               <div class="row checkbox-row ">
                                    <div class="col-md-2 pr-0 text-center">
                                    
                                      <!-- <div class="form-check">
                                        <input class="form-check-input position-static check1 mark-click child" data-group="1" type="checkbox" id="blankCheckbox" value="option1" aria-label="..." onchange="valueChanged()"/>
                                      </div> -->
                                     
                                      <input type="checkbox" class="child check1 mark-click one " id="blankCheckbox" name="ch[]" data-group="1" />
                                      <!-- <input type="checkbox" class="selectedId" name="selectedId" value="AF7F1FC4-A03B-11E2-A620-080027D207FA" onclick="resetSelectAll();" /> -->
                                    </div>
                                     <div class="col-md-5 p-0">
                                                                      
                                        <div class="check-name"><?=$info->primary_contact?></div>
                                        <div class="d-flex">
                                       
 
                                            <p class="inv"><?=$info->invoice_no?></p>
                                            <p class="text-muted separationline"><?=$info->due_date?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 p-0 text-right">
                                        <p class="check-rs"><?=$info->grand_total?></p>
                                        <p class="check-rs overdue-by">Over Due By <?=$info->due_date?></p>
                                    </div>
                                   
                               </div>
                               
                               <?php }}?>
                                       </div>
                                      
                             <!--side row ^-->
                       </div>
                        
                       <div class="col-md-8 bor-left">
                          <div class=" row invoice-header">
                            <div class="col-md-6">
                            <?php  if($client_details){
                          foreach($client_details as $row){?>
                              <h5 class="invoice-text"><?=$row->invoice_no?></h5>
                          <?php }}?>

                            </div>
                            
                            <div class="col-md-6 mx-334 ">
                            
                                <a href="#">
                                 
                                      <p class="comm comm1">
                                        <i class="fa fa-paperclip attach-icon mr-1" aria-hidden="true"></i>Attach File(s)</p> 
                                  </a>
                                  <!-- <img src="images/paperclip.png" class="img-fluid position-relative paper-clip" > -->
                        
                                     <div class="attach-popover d-none">
                                      <div class="card position-relative crd-before" style="width: 383px; height:170px;">
                                            <div class="text-right">
                                              <button type="button" class="close pop-close mr-4 mt-4" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
          
                                            <div class="card-body padd-card">
                                              <h5 class="card-title upload-text text-center">
                                                You can upload a maximum of 10 files, 5MB each
                                              </h5>
          
                                              <div class="row text-center padd-card-row mt-4">
                                                  <div class="col-md-4 p-0 mr-1 upload-bor">
                                                      <img src="<?php echo base_url()?>assets/images/upload.png" class="img-fluid">
                                                      <a href="#" class="drag mt-2">Drag & drop</a>
                                                  </div>
          
                                                  <div class="col-md-4 p-0 mr-1 upload-bor">
                                                    <img src="<?php echo base_url()?>assets/images/cloud-computing.png" class="img-fluid" height="16px" width="16px">
                                                    <a href="#" class="drag mt-2">Cloud</a>
                                                </div>
          
                                                <div class="col-md-4 p-0 upload-bor">
                                                  <img src="<?php echo base_url()?>assets/images/docum.png" class="img-fluid" height="16px" width="16px">
                                                  <a href="#" class="drag mt-2">Documents</a>
                                              </div>
                                              </div>
                                            </div>
                                      </div>
                            </div>
                             <a href="#" class="hover-an">
                             <div class="comm-bor">
                                <img src="<?php echo base_url()?>assets/images/message.png" class="img-fluid">
                                <p class="comm">Comments & History</p>

                              </a>
                                <a href="invoice-dashboard.html" class="close" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </a>
                            </div>

                            </div> 
                          </div>
                          
                          <div class="invoice-sec-header row d-flex">
                               <div class=" edit ">
                                    <!-- <a href="#" class="fs-13 edit-hover p-12"><i class="fa fa-pencil mr-2" aria-hidden="true"></i>Edit</a> -->
                                     <div class="mt-9">
                                           <a href="#" class="fs-13 edit-hover p-12"><i class="fa fa-pencil mr-2" aria-hidden="true"></i>Edit</a> 
                                     </div>
                               </div>
                                
                               <div class="edit">
                                <div class="dropdown">
                                  <button class="text-left p-12 dropdown-toggle frist-drop w-100" type="button" id="dropdownMenuButtonmail" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!-- <img src="images/envelope.png" class="img-fluid mr-2" height="12px" width="12px">  -->
                                    <i class="fa fa-envelope-o mr-2" aria-hidden="true"></i>Mail / SMS
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                    <a class="dropdown-item" href="#">Send Mail</a>
                                    <a class="dropdown-item" href="#">Send SMS</a>
                                    <a class="dropdown-item" href="#">Send Snail Mail</a>
                                  </div>
                                </div>
                               </div>

                               <div class="mail edit">
                            
                               </div>
                                
                               <div class="mail edit">
                                <div class="dropdown">
                                  <button class="text-left p-12 dropdown-toggle frist-drop w-100" type="button" id="dropdownMenuButtonmail" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!-- <img src="images/bell.png" class="img-fluid mr-2" height="12px" width="12px"> -->
                                    <i class="fa fa-bell-o" aria-hidden="true"></i> Reminders
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                    <a class="dropdown-item" href="#">Send Now</a>
                                    <a class="dropdown-item" href="#">Stop Reminders</a>
                                    <a class="dropdown-item" href="#">Expected Payment Date</a>
                                  </div>
                                </div>
                               </div>

                               <div class="mail edit">
                                <div class="dropdown">
                                  <button class="text-left p-12 dropdown-toggle frist-drop w-100" type="button" id="dropdownMenuButtonmail" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!-- <img src="images/logotype.png" class="img-fluid mr-2" height="12px" width="12px"> -->
                                    <i class="fa fa-file-pdf-o mr-2" aria-hidden="true"></i> PDF / Print
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                    <a class="dropdown-item" href="#">PDF</a>
                                    <a class="dropdown-item" href="#">Print</a>
                                    <a class="dropdown-item" href="#">Print Delivery Note</a>
                                    <a class="dropdown-item" href="#">Print Packing Slip</a>
                                  </div>
                                </div>
                               </div>

                               <div class="mail edit">
                                <div class="dropdown">
                                  <button class="text-left p-12 dropdown-toggle frist-drop w-100" type="button" id="dropdownMenuButtonmail" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!-- <img src="images/receive.png" class="img-fluid mr-2" height="12px" width="12px"> -->
                                    <i class="fa fa-usd mr-2" aria-hidden="true"></i> Record Payment
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                    <a class="dropdown-item" href="#"> Record Payment</a>
                                    <a class="dropdown-item" href="#">Write Off</a>
                                  </div>
                                </div>
                               </div>

                               <div class="mail edit dots">
                                <div class="dropdown">
                                  <button class="text-left p-12 dropdown-toggle frist-drop w-100" type="button" id="dropdownMenuButtonmail" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     ...
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                    <a class="dropdown-item" href="#"> Make Recurring</a>
                                    <a class="dropdown-item" href="#">Create Credit Note</a>
                                    <a class="dropdown-item" href="#">Create Debit Note </a>
                                    <a class="dropdown-item" href="#">Clone </a>
                                    <a class="dropdown-item void-line" href="#"> Void</a>
                                    <a class="dropdown-item" href="#">View Journal </a>
                                    <a class="dropdown-item void-line" href="#"> Delete</a>
                                    <a class="dropdown-item" href="#"><img src="<?php echo base_url()?>assets/images/settings-black.png" class="mr-1">Invoice Preferences </a>
                                    <a class="dropdown-item" href="#"> <img src="<?php echo base_url()?>assets/images/light-bulb.png" class="mr-1">Page Tips</a>
                                  </div>
                                </div>
                               </div>
                          </div>
                  
                      <div class="invoice-scroll">
                           <div class="get-paid p-4 m-5">
                                <div class="row">
                                     <div class="col-md-1">

                                       <div class="img-bg">
                                           <img src="<?php echo base_url()?>assets/images/dollar.png" class="img-fluid paid-img" height="20px" width="20px">
                                       </div>
                                       
                                     </div>
                                     <div class="col-md-8 pl-0">
                                         <div class="pl-3">
                                             <h4 class="paid-text">Get paid faster with online payment gateways</h4>
                                             <p class="set-up">Set up a payment gateway and start accepting payments online.<a href="#" class="set-up-link">Set up Now</a></p>
                                         </div>
                                     </div>
                                     <div class="col-md-3">
                                        <a href="#" class="offline float-right">Offline Payments</a>
                                    </div>
                                </div>
                           </div>

                           <div class="get-paid tax-invoice m-5">
                            <div class="tax-invoice-header position-relative">
                                
                              <div class="overdue overdue-box tooltip-container" data-toggle="tooltip" data-placement="right" title=" An invoice that has not been 
                              paid on time will be Overdue 
                              status">
                                <div class="overdue-text overdue-styles">Overdue</div>
                              </div>
 
                                <div class="dropdown float-right btn-cust1 d-none">
                                  <button class="btn btn-secondary  btn-cust dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?php echo base_url()?>assets/images/setting-white.png" class="img-fluid mr-1">Customize
                                  </button>
                                  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                                    <h6 class="spread-sheet">Spreadsheet Template</h6>
                                    <a class="dropdown-item spreed-sheet-titles" href="#">Change Template</a>
                                    <a class="dropdown-item spreed-sheet-titles edit-bor-bot" href="#">Edit Template</a>
                                    <a class="dropdown-item spreed-sheet-titles" href="#">Update Logo & Address</a>
                                    <a class="dropdown-item spreed-sheet-titles" href="#">Manage Custom Fields</a>
                                    <a class="dropdown-item spreed-sheet-titles" href="#">Terms & Conditions</a>
                                    <a class="dropdown-item spreed-sheet-titles" href="#">Something else here</a>
                                  </div>
                                </div>


                            </div>
                           <?php $i=1; if($client_details){
                             if($customer_address){
                               if($customer_contact){
                                 if($customer_other_details){
                                   if($cust_bill_sales_details){
                                   foreach($client_details as $row1){
                                     foreach($customer_address as $row2){
                                       foreach($customer_contact as $row3){
                                         foreach($customer_other_details as $row4){
                                         foreach($cust_bill_sales_details as $row5){?>
                                                                                    
                             <div class="container">
                            
                              <div class="tax-invoice-sec">
                             
                                      <table style="width: 100%;">
                                        <tbody>
                                       
                                          <tr>
                                              <td class="td1-class">
                                                <img src="<?php echo base_url()?>assets/images/google-meet.png" class="google-meet">
                                              </td>
                                              <td class="td2-class">
                                                <div>
                                                  <p class="birds-eye"></p>
                                                  <p class="kar"><?=$row2->state?></p>
                                                  <p class="kar"><?=$row2->country_id?></p>
                              
                                                </div>
                                              </td>
                                              <td class="tax">
                                                
                                                <div class="pcs-entity-title">TAX INVOICE</div>
                                              </td>
                                         </tr>
                                       </tbody>
                                  </table>

                                <div class="invoice-details">
                                    <div class="row">
                                         <div class="col-md-6 right-bor">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="details-text">#</p>
                                                    <p class="details-text">Invoice Date</p>
                                                    <p class="details-text">Terms</p>
                                                    <p class="details-text mb-2">Due Date</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="details-text details-text-side">: <?=$row1->invoice_no?></p>
                                                    <p class="details-text details-text-side">: <?=$row1->invoice_date?></p>
                                                    <p class="details-text details-text-side">: <?=$row1->terms_conditions?></p>
                                                    <p class="details-text details-text-side mb-2">: <?=$row1->due_date?></p>
                                                </div>
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                          
                                        </div>
                                    </div>
                                </div>
                                <p class="bill-det">Bill To</p>
                                <a href="#" class="bill-name"><?=$row1->primary_contact?></a>
                                <div class="items-desc">
                                      
                                  
                                      <table class="table  m-0 table-bordered">
                                        <thead>
                                          <tr>
                                            <th scope="col" class="rem-bor-left wd-5">#</th>
                                            <th scope="col">Item & Description</th>
                                            <th scope="col" class="wd-11">Qty</th>
                                            <th scope="col" class="wd-11">Rate</th>
                                            <th scope="col" class="rem-bor wd-13">Amount</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row" class="rem-bor-left rem-bg wd-5" ><?=$i++?></th>
                                            <td><?=$row5->item_id?><?=$row5->item_description?></td>
                                            <td class="text-right"><?=$row5->qty?></td>
                                            <td class="text-right"><?=$row5->rate?></td>
                                            <td class="rem-bor text-right"><?=$row5->amount?></td>
                                          </tr>
                                          
                                          
                                        </tbody>
                                      </table>
                              </div>

                              <div class="total-words">
                                  <div class="row m-0">
                                       <div class="col-md-7 p-0 total-words">
                                            <p class="total-text"> Total In Words</p>
                                            <p class="indian"> Indian Rupee Two Lakh Thirty-Two Thousand Three Hundred Twenty-Three Only</p>
                                            <p class="total-text pt-0 mb-5"> Thanks for your business.</p>
                                       </div>
                                       <div class="col-md-5 p-0">
                                             <div class="sub-total">

                                              <table   cellspacing="0"  width="100%">
                                                <tbody class="bor">
                                                      <tr>
                                                            <td class="sub-text">Sub Total</td>
                                                            <td class="sub-text"><?=$row5->amount?></td>
                                                      </tr>
      
                                                      <tr>
                                                        <td class="sub-text fw-600">Total</td>
                                                        <td class="sub-text fw-600"><?=$row5->amount?></td>
                                                      </tr>
                                            
                                            
                                            
                                                      <tr>
                                                        <td class="sub-text fw-600">Balance Due</td>
                                                        <td class="sub-text fw-600"><?=$row5->amount?></td>
                                                      </tr>

                                                      <tr>
                                                        <td colspan="2"></td>
                                                      </tr>

                                                </tbody>
                                              </table>
                                              
                                                <tbody>
                                                      <tr>
                                                        <td style="text-align: center;padding-top: 5px;" colspan="2">
                                                            <div style="min-height: 75px;">
                                                              
                                                            </div>
                                                        </td>
                                                      </tr>

                                                      <tr>
                                                        <td style="text-align: center;" colspan="2">
                                                          <div class="text-center auth">
                                                            Authorized Signature
                                                          </div>
                                                        </td>
                                                      </tr>

                                                </tbody>
                                             
                                             </div>
                                           
                                       </div>
                                  </div>
                              </div>

                            </div>
                          </div>

                          </div>
                          <div class="p-117">
                             <div class="align-self-center new-voice-foot-1 main ">
                            <p class="temp d-flex justify-content-end"><b class="align-self-center mr-2">Template:</b> <textarea class="form-control  bx-shadow select-cat" id="recipients" readonly="">Spreadsheet Template</textarea> <a href="javascript:void(0)" class="changetemplet align-self-center ml-2"> Change</a></p>
                            </div>
                          </div>
                         
                          <div class="journal-invoice mr-5 ml-5">
                           
                               <a href="#" class="journal">Journal</a>
                              
                          </div>

                          <div class="amount ml-5 mt-1">Amount is displayed in your base currency<span class="badge badge-success badge-inr ml-2">INR</span></div>
                           <div class="invoice-text-head ml-5">Invoice</div>

                           <div class="invoice-table pr-5 pl-5">
                           <table class="table table-borderless ">
                            <thead>
                              <tr class="tr-border">
                                <th scope="col" class="invoice-heading"> ACCOUNT</th>
                                <th scope="col" class="invoice-heading text-right">DEBIT  </th>
                                <th scope="col" class="invoice-heading text-right">CREDIT</th>
                               
                              
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row" class="invoice-text">Sales</th>
                                <td  class="invoice-text-table text-right"><?=$row5->rate?> </td>
                                <td  class="invoice-text text-right"><?=$row5->amount?></td>
                                
                              </tr>
                              <tr class="tr-border">
                                <th scope="row" class="invoice-text">Accounts Receivable</th>
                                <td  class="invoice-text text-right"><?=$row5->amount?>    </td>
                                <td  class="invoice-text text-right"><?=$row5->rate?></td>
                                
                              </tr>
                              <tr>
                                <th scope="row" class="invoice-text"></th>
                                <td  class="invoice-text fw-600 text-right"><?=$row5->amount?> </td>
                                <td  class="invoice-text fw-600 text-right"><?=$row5->amount?></td>
                                
                              </tr>
                           
                            </tbody>
                          </table>
                        </div>

                     </div>

                      </div>
                    </div>
                            
                    <!-- <table id="notificationsTableId" style="width: 1744px;">
                      <thead>
                          <tr role="row">
                              <th rowspan="1" colspan="1" style="width: 30px;" aria-label="">
                                  <input type="checkbox" id="selectall" onclick="selectAll();">Select all</input>
                              </th>
                              <th tabindex="0" rowspan="1" colspan="1" style="width: 203px;">Type</th>
                              <th tabindex="0" rowspan="1" colspan="1" style="width: 354px;">Status</th>
                          </tr>
                      </thead>
                      <tbody role="alert">
                          <tr class="results-table-row odd">
                              <td align="center">
                                  <input type="checkbox" class="selectedId" name="selectedId" value="AF7F1FC4-A03B-11E2-A620-080027D207FA" onclick="resetSelectAll();" />
                              </td>
                              <td>Stop Noted Record</td>
                              <td>Closed (No investigation required)</td>
                          </tr>
                          <tr class="results-table-row even">
                              <td align="center">
                                  <input type="checkbox" class="selectedId" name="selectedId" value="C6BA50E6-A03B-11E2-B3F6-080027D207FA" onclick="resetSelectAll();" />
                              </td>
                              <td>Stop Noted Record</td>
                              <td>Open (New)</td>
                          </tr>
                          <tr class="results-table-row even odd">
                              <td align="center" class=" ">
                                  <input type="checkbox" class="selectedId" name="selectedId" value="C8EDD662-A03B-11E2-ABB2-080027D207FA" onclick="resetSelectAll();" />
                              </td>
                              <td class=" ">Stop Noted Record</td>
                              <td class="  sorting_1">Open (New)</td>
                          </tr>
                      </tbody>
                  </table> -->
                   
                
                      <!--  Sel
                         
                              Child 1
                             <input type="checkbox" class="child" data-group="1" /> Child 2
                             <input type="checkbox" class="child" data-group="1" /> Child 3 -->
                         
                      
                 
                 
                  

                <!--invoices section ends above-->

            <!-- </div>
    </div> -->
        </div>
    </div>
<?php }}}}}}}}}}?>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- start modal -->
    <div class="modal-card" id="changetemplet">
    <div class="notify-head">
        <div class="d-flex">
            <h6 class="mr-auto">Choose Template</h6>
            <div class="close-modal-card">
                <img src="<?php echo base_url()?>assets/images/close.png">
            </div>
        </div>
        <div class="form-group mb-0 mt-3 position-relative">
            <input type="text" class="form-control" name="" placeholder="Search Settings">
            <img class="search" src="<?php echo base_url()?>assets/images/search.png">
        </div>
    </div> 
    <div class="p-117">
        <div>
              <div class="custom-control custom-radio boxed mb-2">
          <input type="radio" id="customRadio1" name="templet" value="Spreadsheet Template" class="custom-control-input" checked>
          <label class="custom-control-label" for="customRadio1" name=""><img src="<?php echo base_url()?>assets/images/account.png"></label>
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
<?php include('inc/footer.php');?>

    <script>
        $(function () {
        $('[data-toggle="popover"]').popover()
        })
    </script>


    <script>
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
    
    <script>
      $(document).ready(function(){
        $(".tax-invoice").hover(function(){
          $(".btn-cust1").toggleClass("d-block");
        });
      });
    </script>

<script>
  $(document).ready(function(){
    $(".comm1").click(function(){
      $(".attach-popover").toggleClass("d-block");
    });
  });

    $(document).ready(function() {
    $('.close').click(function() { 
    $('.attach-popover').removeClass("d-block");
    });
  });

  $(document).ready(function(){
    $(".check-close ").click(function(){
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
$(document).ready(function(){
    $(".check-close").click(function(){
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
  } else {
  }
});

$('#blankCheckbox2').change(function() {
  if ($(this).is(':checked')) {
    $(".mark-row").removeClass("d-none");
    $(".all-invoice-row").addClass("d-none");
  } else {
  }
});

$('#blankCheckbox0').change(function() {
  if ($(this).is(':checked')) {
  } else {

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
<script>
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
 
</script>
<!-- <script>
  $('#blankCheckbox0').click(function () {    
     $('input:checkbox').prop('checked', this.checked);    
 });
</script> -->

<!-- checkbox script -->
<script>
  $(document).ready(function () {
    $('#blankCheckbox0').click(function () {
        $('.mark-click').prop('checked', this.checked);
    });

 

    $('.mark-click').change(function () {
        var check = ($('.mark-click').filter(":checked").length == $('.mark-click').length);
        $('#blankCheckbox0').prop("checked", check);
    });
})
</script>
<script>
  $(document).ready(function () {
    $('#customCheck1').click(function () {
        $('.mark-clicked').prop('checked', this.checked);
    });

 

    $('.mark-clicked').change(function () {
        var check = ($('.mark-clicked').filter(":checked").length == $('.mark-clicked').length);
        $('#customCheck1').prop("checked", check);
    });
})
</script>

<script>
$('input[name="ch[]"]').on('change', function () {
if($('input[name="ch[]"]').is(':checked')){
    $(".mark-row").show();  // checked 
  } else{
    $(".mark-row").hide();  // unchecked
    $(".all-invoice-row").removeClass("d-none");
  }
})
</script>

<script>
$(function () {
 

    $("input[name=templet]:radio").click(function () {

        if ($('input[name=templet]:checked').val() == "Spreadsheet Template") {
            $('.modal-card').css({"display":"none"});
           

        } else if ($('input[name=templet]:checked').val() == "Standard Template") {
           
            $('.modal-card').css({"display":"none"});

        }
    });
});
</script>
  </body>
</html>