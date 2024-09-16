<!doctype html>
<html lang="en">


<?php
 
$this->load->view('admin/inc/header');?>
    <style>
        /**invoice css starts below**/
        .content-value{
            z-index:-1;
        }
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
        /*ribbon css */
        
        .text-ellipsis {
            overflow: hidden;
        }
        
        .document-filter-header .list-title>a,
        .folder-name,
        .text-ellipsis {
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        
        .ribbon {
            position: absolute!important;
            top: -5px;
            left: -5px;
            overflow: hidden;
            width: 96px;
            height: 94px;
            font-size: 13px;
        }
        
        .ribbon .ribbon-overdue {
            background-color: #f59d00;
            border-color: #c27c00;
        }
        
        .ribbon .ribbon-inner {
            text-align: center;
            color: #fff;
            top: 24px;
            left: -31px;
            width: 135px;
            padding: 3px;
            position: relative;
            transform: rotate(-45deg);
        }
        
        .ribbon .ribbon-inner:after {
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
        
        .ribbon .ribbon-inner:after {
            right: -2px;
            border-bottom: 3px solid transparent;
        }
        
        .ribbon .ribbon-inner:before {
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
        /*ribbon css ^*/
        
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
        
        .overdue {
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
        /* .invoice-top-row .content-value {border-bottom:0;} */
        
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
        /**invoice css ends above**/
        /**customer css starts below**/
        
        .cus-name {
            font-size: 1.7rem;
            font-weight: 500;
            line-height: 1.6;
            color: #212529;
        }
        
        .edit-btn {
            padding: .375rem .75rem!important;
            font-size: 1rem;
        }
        
        .cus-attach-popover {
            top: 48px;
            right: 228px;
        }
        
        .rem-hover:hover {
            color: #000!important;
        }
        
        .cust-new-display {
            display: inline;
        }
        
        .show>.cust-new.dropdown-toggle {
            color: #fff;
            background-color: #bb3b25;
            border-color: #bb3b25;
        }
        
        .show>.cust-new.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem transparent;
        }
        
        .show>.btn-secondary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem transparent;
        }
        
        .mr-10 {
            margin-right: 8px!important;
        }
        
        .cus-name-padd {
            padding: 20px 20px 16px 20px;
        }
        
        .faq-tabs .nav-tabs .nav-link.active {
            color: #333333;
            font-size: 13px;
            font-weight: 500;
            border-bottom: 4px solid #c53e27;
        }
        
        .faq-tabs .nav-tabs .nav-link.active:hover {
            color: #333333;
        }
        
        .faq-tabs .nav-tabs .nav-link {
            margin-bottom: -1px;
            border: 0;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            color: #2485e8;
        }
        
        .faq-tabs .nav-tabs .nav-link:hover {
            color: #2a74be;
        }
        
        .faq-tabs .nav-tabs {
            border-bottom: 1px solid #0081d9;
        }
        
        .faq-tabs .nav-item a {
            font-size: 13px;
            margin-right: 0;
        }
        
        .faq-tabs .nav-link {
            display: block;
            padding: .72rem 1.08rem;
            font-size: 13px;
        }
        
        .details-info {
            border-right: 1px solid #eee;
            background-color: #fbfbfb;
            vertical-align: top;
            padding: 10px 20px 0;
            word-wrap: break-word;
        }
        
        .group {
            margin-bottom: 10px;
            padding: 15px 0 0;
        }
        
        .codebele-text {
            border-bottom: 1px solid rgba(0, 0, 0, .1);
            padding-bottom: 10px;
        }
        
        .cp-pic {
            border: 1px solid #ddd;
            border-radius: 50%;
            float: left;
        }
        
        .mt-20 {
            margin: 20px 0 0 0;
        }
        
        .pl-15 {
            padding: 0 0 0 15px;
        }
        
        .group-name {
            font-weight: 600;
        }
        
        .mobile-mar {
            margin-right: 13px;
        }
        
        .edit-code-btn {
            padding: 0;
            color: #2485e8;
            font-size: 80%;
            padding-right: 6px;
            border-right: 1px solid #eee;
        }
        
        .edit-code-btn:hover {
            color: #2485e8;
        }
        
        .pl-3 {
            padding-left: 3px!important;
            margin-top: 2px;
        }
        
        .customer-accordian .card-header {
            padding: 0;
            margin-bottom: 0;
            background-color: transparent;
            border-bottom: 1px solid transparent;
        }
        
        .customer-accordian .card {
            background-color: transparent;
            background-clip: border-box;
            border: 1px solid transparent;
            border-radius: 0;
        }
        
        .customer-accordian .card-body {
            padding: 0;
        }
        
        .cust-acc-btn {
            text-transform: uppercase;
            font-weight: 300!important;
            color: #212529;
            padding: 10px 0 5px;
            border-bottom: 1px solid #eee;
            font-size: 13px;
        }
        
        .cust-acc-btn:hover {
            color: #212529;
            text-decoration: none;
        }
        /* .collapsed[aria-expanded="false"] img{transform: rotate(180deg);} */
        
        .acc-arrow .collapsed[aria-expanded="false"] img {
            transform: rotate(180deg);
        }
        
        .a-spn {
            white-space: nowrap;
            font-size: 12px;
        }
        
        .cus-id {
            margin-bottom: .5rem;
        }
        
        .cus-det {
            white-space: nowrap;
        }
        
        .plus-blue {
            color: #2485e8;
            border: 1px solid #2485e8;
            border-radius: 50%;
            padding: 3px;
        }
        
        .plus-blue:hover {
            color: #fff;
            background-color: #2485e8;
        }
        
        .contact {
            background-color: #f2fff0;
        }
        
        .ask-review {
            margin-top: 30px;
            border: 1px solid #cbecc6;
        }
        
        .client-portal {
            margin-bottom: 1rem;
        }
        
        .btn-enable {
            white-space: nowrap;
        }
        
        .user-green {
            font-size: 10px;
            color: #78ae54;
            border: 1px solid #78ae54;
            padding: 4px 4px 0px 4px;
            border-radius: 2px;
        }
        
        .new-blue {
            color: #2485e8;
        }
        
        .sort-drop-down .dropdown-item {
            padding: 5px 20px;
        }
        
        .page-bg {
            background-color: #f3f8fe;
            margin: -5px 0 -7px;
        }
        
        .dropdown-item.sortable.asc .sort:after {
            border-top-color: #7ab2cc;
        }
        
        .dropdown-item.sortable .sort:after {
            margin-top: 5px;
        }
        
        .sortable .sort:after {
            content: "";
            position: absolute;
            right: -4px;
            top: 2px;
            border: 4px solid transparent;
            border-top-color: #000;
        }
        
        .dropdown-item.sortable .sort {
            border-bottom-color: #fff;
        }
        
        .sortable .sort {
            position: absolute;
            border-bottom-color: #000;
            margin-left: 5px;
        }
        
        .sortable .sort {
            border: 4px solid transparent;
        }
        
        .prim-info {
            padding: 20px 20px 50px;
            vertical-align: top;
        }
        
        .out-text {
            font-size: 18px;
            font-weight: 400;
            line-height: 1.1;
            color: rgb(33, 37, 41);
        }
        
        .out-rups {
            font-size: 20px;
            font-weight: 600;
            padding-top: 12px;
            color: #ff660f;
        }
        
        .out-row-padd {
            padding: 10px 0;
        }
        
        .bor-lft {
            border-right: 1px solid #ddd;
        }
        
        .unused {
            font-weight: 400;
            font-size: 14px;
            white-space: nowrap;
        }
        
        .rs {
            font-size: 14px;
            font-weight: 600;
            margin-left: 25px;
        }
        
        .p-22 {
            padding-bottom: 22px;
        }
        
        .p-zero {
            padding: 0px 5px 0 5px!important;
        }
        
        .cust-sel {
            margin-top: 4px;
            margin-right: 14px;
        }
        
        .mt-6 {
            margin-top: 6px;
        }
        
        .notify {
            padding-left: 15px;
        }
        
        .enter-opening {
            margin: 10px 0 1rem 0;
            font-size: 13px;
        }
        
        .enter-opening-bor {
            border-bottom: 1px solid #e5e5e5;
            margin: 0 -23px 0 -22px;
        }
        
        .graph-row {
            margin-top: 30px;
            border-bottom: 1px solid #ddd;
            padding-left: 32px;
        }
        
        .income {
            font-size: 16px;
            font-weight: 300!important;
        }
        
        .last-btn {
            color: #2485e8;
            font-size: 12px;
        }
        
        .last-btn:hover {
            color: #2a74be;
        }
        
        .total-income {
            padding-top: 15px;
        }
        
        .comm-blue {
            height: 12px;
            width: 12px;
            color: #73b0f9;
            border: 1px solid #eee;
            border-radius: 50%;
            height: 25px;
            width: 25px;
            text-align: center;
            line-height: 1.7;
            background-color: #f6fbff;
            position: absolute;
            top: -5px;
            left: 95px;
        }
        
        .inv-date {
            font-weight: 400;
            font-size: 80%;
            max-width: 100px;
        }
        
        .p-20 {
            padding: 20px;
        }
        
        .ml-70 {
            margin-left: 70px;
        }
        
        .pos-abs {
            position: absolute;
            top: 2px;
            right: 2px;
        }
        
        .n {
            position: absolute;
        }
        /**comment css starts below**/
        
        .invoice-line {
            padding: 20px;
            margin: 0 0px 0 61px;
        }
        
        .inv-text {
            margin-left: 85px;
            margin-top: 50px;
        }
        
        .inv-upd {
            border-left: 1px solid #277ad8;
            margin-left: 25px;
        }
        
        .inv-upd .inv-node:first-child {
            padding-top: 0;
        }
        
        .inv-upd .inv-node {
            padding: 10px 0;
            position: relative;
            margin-left: 15px;
        }
        /* .inv-text .inv-node:before {left: -20px;}
.inv-upd .inv-node:before {content: " ";position: absolute;display: block;width: 20px;height: 20px;background-image: url(../images/comment.png);background-repeat: no-repeat;top: 30px;left: -24px;z-index: 1111;}  */
        
        .inv-text .time {}
        
        .inv-text .time,
        .comments .time {
            left: -120px;
            top: 25px;
            width: 90px;
            text-align: right;
            position: absolute;
        }
        
        .invoice-updated-row {
            line-height: 1.4;
            position: relative;
            top: 25px;
            left: -28px;
        }
        
        .invoice-line .upd-text {
            background-color: #f6fbff;
            border-color: #d3dce4;
            position: relative;
            z-index: 2;
            background-image: url(../images/comment.pn);
            background-repeat: no-repeat;
        }
        
        .message-circle {
            border: 1px solid #eee;
            border-radius: 50%;
            height: 25px;
            width: 25px;
            text-align: center;
            line-height: 1.7;
        }
        
        .inv-upd .inv-node .inv-com-upd {
            padding: 10px 20px;
            position: relative;
            margin-bottom: 10px;
            margin-left: 25px;
            border: 1px solid #eee;
            background-color: #fff;
            border-radius: 6px;
        }
        
        .inv-upd .inv-node .inv-com-upd .arrow {
            top: 15px;
            left: -11px;
            position: absolute;
            width: 0;
            height: 0;
            border-color: transparent #f3f3f3 transparent transparent;
            border-style: solid;
            border-width: 11px 11px 11px 0;
        }
        
        .inv-upd .inv-node .inv-com-upd .arrow:after {
            position: absolute;
            display: block;
            width: 0;
            height: 0;
            border-color: transparent #fff transparent transparent;
            border-style: solid;
            border-width: 10px 10px 10px 0;
            content: " ";
            left: 1px;
            bottom: -10px;
        }
        
        .text-regular {
            font-weight: 400;
        }
        /**comment css ends above**/
        /**charts css starts below**/
        
        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 320px;
            max-width: 800px;
            margin: 1em auto;
        }
        
        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #EBEBEB;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }
        
        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }
        
        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }
        
        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
            padding: 0.5em;
        }
        
        .highcharts-data-table thead tr,
        .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }
        
        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }
        
        .highcharts-axis-labels {
            transform: initial!important;
        }
        /**charts css ends above**/
        
        .rece {
            color: #d64830!important;
        }
        
        .arrow-black {
            color: #000;
        }
        
        .arrow-light {
            color: #bbb;
            position: absolute;
            bottom: 6px;
            right: 0px;
        }
        
        .arr-inline {
            display: inline;
        }
        
        .pd-cus {
            padding: .375rem .75rem;
        }
        
        .rem-bg {
            background-color: none!important;
        }
        
        .br-bt {
            border-bottom: 1px solid #e4e4e4!important;
        }
        
        .page-bg-a {
            text-decoration: none;
            color: #2485e8!important;
        }
        
        .page-bg-a:hover {
            text-decoration: none;
            color: #2a74be!important;
        }
        
        .text-area {
            padding: 50px 214px 0 50px;
        }
        
        .mt-1rem {
            margin-top: 1rem;
        }
        
        .mt-50 {
            margin-top: 50px;
        }
        
        .rel-tab-btn:hover {
            background-color: #f8f8f8!important;
            border-color: #d5d5d5!important;
        }
        
        .rel-tab-btn {
            padding: .375rem .75rem!important;
            font-size: 1rem!important;
            border-color: #ddd!important;
            color: #212529!important;
            background-color: #f5f5f5!important;
            border: 1px solid #ddd!important;
            border-radius: 3px!important;
        }
        
        .system-mails {
            padding: 20px 0 15px 15px;
        }
        
        .triangle-yellow {
            color: #ffc107;
            font-size: 1.3rem;
        }
        
        .no-mails {
            font-size: 1.3rem;
            display: inline;
        }
        
        .p-50 {
            padding: 50px 0 50px 0;
        }
        
        .month-btn {
            border: 1px solid #ced4da;
            border-radius: 2px;
            font-size: 1rem;
            line-height: 1.6;
            color: #495057;
            background-color: #fff;
            padding: 5px 8px!important;
        }
        
        .month-btn:hover {
            color: #495057;
            background-color: #fff;
            border-color: #ced4da;
        }
        
        .show>.month-btn.dropdown-toggle {
            color: #495057;
            background-color: #fff;
            border-color: #ced4da;
        }
        
        .statement-dropdown:hover {
            background-color: #f5f5f5!important;
            color: #000!important;
        }
        
        .p-20 {
            padding: 20px;
        }
        
        .from {
            font-size: 1rem;
            line-height: 1.1;
            margin: 10px 0 10px 0;
        }
        
        .cus-sec {
            padding-bottom: 9px;
            margin: 40px 0 20px;
        }
        
        .google-stat-sec {
            box-shadow: 0 0 6px #ccc;
            margin: 20px;
        }
        
        .google-sec-body {
            padding: 0 0.400000in 0 0.550000in;
        }
        
        .google-sec-header {
            height: 0.700000in;
        }
        
        .stat-google {
            width: 240px;
            height: 135px;
        }
        
        .birds-eye-stat {
            font-size: 12pt;
            color: #000000;
        }
        
        .to {
            color: #333333;
            font-weight: 600;
            font-size: 9pt;
        }
        
        .to-name {
            font-weight: 600;
            font-size: 9pt;
        }
        
        .accounts-summary {
            padding: 20px 0px 30px 0px;
        }
        
        .accounts-summary-text {
            padding: 4px 6px 4px 6px;
        }
        
        .table-bg {
            background-color: #e8e8e8;
            border-bottom: 1px solid #dcdcdc;
            font-weight: 600;
            font-size: 9pt;
        }
        
        .opening-text {
            padding-top: 6px;
            width: 50%;
        }
        
        .invoice-text {
            padding-top: 4px;
        }
        
        .opening-rs {
            padding: 6px 0px 0px 6px;
            text-align: right;
        }
        
        .amount-rs {
            padding: 4px 0px 2px 6px;
            text-align: right;
        }
        
        .balance-text {
            padding-top: 6px;
            border-top: 1px solid #000;
        }
        
        .bal-bor {
            border-top: 1px solid #000;
        }
        
        .accounts-section td {
            font-size: 9pt;
        }
        
        .stat {
            font-size: 16pt;
            color: #000000;
            font-weight: 600;
            padding-top: 6px;
        }
        
        .ml-25 {
            margin-left: 25px;
        }
        
        .stat-date {
            font-size: 12px;
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
            text-align: right;
        }
        
        .accounts-section {
            margin: 20px 0px 30px 33px;
        }
        
        .transaction-table .table td {
            padding: 0;
        }
        
        .transaction-table .table th {
            padding: 0;
        }
        
        .transaction-header {
            font-size: 9pt;
            color: #ffffff;
            background-color: #3c3d3a;
            font-weight: 600;
            padding: 4px 4px;
        }
        
        .td-pad {
            padding: 8px 4px!important;
            font-size: 9pt;
            color: #333333;
        }
        
        .tr-bor {
            border-bottom: 1px solid #ccc;
        }
        
        .bal-font {
            font-weight: 600;
        }
        
        .transaction-footer {
            height: 0.700000in;
            font-size: 6pt;
            color: #aaaaaa;
            padding: 0 0.400000in 0 0.550000in;
        }
        
        .bor-rad {
            border-radius: 0 0 0 5px;
        }
        
        .line-btn-more {
            border-color: #ddd!important;
            color: #212529!important;
            background-color: #f5f5f5!important;
            border: 1px solid #ddd!important;
            border-radius: 4px!important;
            padding: 4px 9px!important;
        }
        
        .sales-tab-btn {
            background-color: #fbfafa;
            padding: 15px;
            margin-bottom: 30px;
        }
        
        .add-new {
            font-size: .85938rem;
            font-weight: 400;
            white-space: nowrap;
        }
        
        .status {
            font-size: .85938rem;
            display: inline;
        }
        
        .bor-right {
            border-right: 1px solid #ddd;
            border-radius: 0;
        }
        
        .invoice-acc-btn {
            color: #777;
            background-color: transparent;
            border-color: transparent;
        }
        
        .invoice-acc-btn:hover {
            color: #777;
            background-color: transparent;
            border-color: transparent;
        }
        
        .invoice-acc-btn:focus {
            color: #777;
            background-color: transparent;
            border-color: transparent;
        }
        
        .acc-pad {
            padding: 0 15px 0 3px;
        }
        
        .collapsed .arr-acc {
            transform: rotate(-90deg);
        }
        
        .arr-acc {
            transition: 0.5s;
        }
        
        .table-accor .table th {
            padding: 8px;
        }
        
        .table-accor .table td {
            padding: 8px;
        }
        
        .rem-bor-acc {
            border: 0;
        }
        
        .table-accor .table thead th {
            border: 0;
            background-color: #fbfafa;
        }
        
        .table-hover tr:hover {
            background-color: #fbfafa;
        }
        
        .bor-bot {
            border-bottom: 1px solid #dee2e6;
        }
        
        .arr-pos {
            bottom: 8px!important;
        }
        
        .tr-styles {
            color: #777;
            font-weight: 400;
            font-size: 13px;
        }
        
        .overdue {
            color: #ff660f;
        }
        
        .total-arr {
            font-size: 15px!important;
            color: #999;
            margin-top: 3px;
        }
        
        .card-rem-bor {
            border: 0;
            border-radius: 0;
        }
        
        .add-bor-bot {
            border-radius: 0;
            border-bottom: 1px solid rgba(0, 0, 0, .125);
            padding-bottom: 15px;
        }
        
        .pl-50 {
            padding-right: 50px;
        }
        
        .acc-pad {
            padding: 15px 20px 0 20px;
        }
        
        .card-pad {
            padding-left: 0px!important;
            padding-right: 0!important;
        }
        
        .change-clr-up {
            color: #7777!important;
        }
        
        .change-clr-down {
            color: #000!important;
        }
        
        .sales-drop-down .dataTables_wrapper .dataTables_paginate {
            display: none;
        }
        
        .cust-datatable .dataTables_wrapper .dataTables_paginate {
            display: none;
        }
        
        .sales-drop-down table.dataTable.no-footer {
            border-bottom: 1px solid #dee2e6;
        }
        /*.sales-drop-down table.dataTable thead .sorting_desc {background-image: url(../images/bell.png);} */
        
        .sales-drop-down table.dataTable thead th {
            font-weight: normal;
        }
        
        .table-accor table.dataTable thead .sorting_asc {
            /* background-image: url(../images/close.png); */
            color: #d64830;
            /* background-position-x: 34px; */
        }
        
        .clr-black {
            color: #212529!important;
        }
        
        .clr-or-red {
            color: #ff660f!important;
        }
        
        .add-bor-bot .btn-primary:not(:disabled):not(.disabled):active:focus {
            box-shadow: 0 0 0 0.2rem transparent;
        }
        
        .add-bor-bot .btn-primary:not(:disabled):not(.disabled):active {
            color: #777;
            background-color: transparent;
            border-color: transparent;
        }
        
        .invoice-top-row .table-responsive {
            overflow-x: visible;
        }
        
        .h-392 {
            height: 100%;
        }
        
        .edit-hover:hover {
            color: #fff!important;
        }
        
        .cust-table-mar {
            margin-top: 38px!important;
        }
        /* .heigh-vh{height: calc(100vh - 189px);}
.heigh-vh-rel{height: calc(100vh - 239px);} */
        
        .customer-tab .tab-content>.active {
            display: block;
            overflow: auto;
            height: calc(100vh - 189px);
            overflow-x: hidden;
        }
        
        .acc-arrow[aria-expanded="false"] img {
            transform: rotate( 170deg);
        }
        /**customer css ends above**/
    </style>


<body>

<?php $this->load->view('admin/inc/menu'); ?>


    
            <div class="main--menu">
                <div class="invoice-top-row">
                    <!--bulk update row starts below-->
                    <div class="row mark-row mark-row11 rem-bg br-bt mark-row1 dis-none">
                        <div class="col-md-12 pr-0">
                            <div class="d-flex">
                                <button type="button" class="btn mark-btn pd-cus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send Customer Statements"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
                                <button type="button" class="btn mark-btn pd-cus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print Customer Statements"><i class="fa fa-print" aria-hidden="true"></i></button>
                                <button type="button" class="btn mark-btn pd-cus mr-3"> Bulk Update</button>
                                <div class="dropdown more-dropdown">
                                    <button class="btn btn-secondary dropdown-toggle  mark-btn more-btn mr-5 pd-cus" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More Actions
                          </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Bulk Update</a>
                                        <a class="dropdown-item" href="#">Enable Portal</a>
                                        <a class="dropdown-item" href="#">Mark as Active</a>
                                        <a class="dropdown-item" href="#">Merge</a>
                                        <a class="dropdown-item" href="#">Associate Templates</a>
                                        <a class="dropdown-item" href="#">Mark as Inactive</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                                <p class="selected one-sel text-muted d-block cust-sel d-none">1 Contact(s) Selected</p>
                                <div class="ml-auto">
                                    <button type="button" class="close check-close check-cust-close p-zero mr-2" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Remove selection">
                          <span aria-hidden="true" class="x-close">×</span>
                        </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--bulk update row ends above-->
                    <div class="d-flex justify-content-between all-invoice-row1 content-value ">

                        <div>
                            <div class="dropdown Customer-content--">
                                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            All Purposes
                          </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div class="align-self-center ">
                            <div class="d-flex">
                                <!-- <div class="align-self-center mr-3">
                      
                       </div> -->
                                <!-- <button type="button" onclick="load_add_customer()" class="btn btn-secondary new-btn p2-9 m-0 mr-2 fs-12" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Create Customer"><img src="<?php echo base_url()?>assets/images/plus-white.png" height="10px" width="10px" class="img-fluid mt-1 mr-1">New</button> -->
                                <div class="mr-md-3">
                                    <a href="<?php echo base_url()?>settings/add-purpose" class="secoundry-btn">+ New</a>

                                </div>

                                <div class="mr-3 header-a">
                                    <button type="button" class="btn btn-secondary line-btn" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Customer Prefreences"> <i class="fa fa-cog fa-lg" aria-hidden="true"></i>
                          </button>

                                </div>


                                <div class="mr-3 header-a">
                                    <div class="dropdown rem-arr Customer-content-- show all-btn ">
                                        <button class="btn  dropdown-toggle p-0 line-btn" type="button" id="dropdownMenuButtonall" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <img src="<?php echo base_url()?>/assets/images/lines.png" class="img-fluid " height="14px" width="14px">
                            </button>
                                        <div class="dropdown-menu sort-drop-down " aria-labelledby="dropdownMenuButton" style="position: absolute; transform: translate3d(0px, 42px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-start">
                                            <div class="default">Sort by</div>
                                            <a class="dropdown-item" href="#">Name</a>
                                            <a class="dropdown-item sortable asc position-relative active" href="#">Company Name
                                <span class="sort"></span>
                              </a>
                                            <a class="dropdown-item" href="#">Receivables</a>
                                            <a class="dropdown-item" href="#">Created Time</a>
                                            <a class="dropdown-item edit-bor-bot" href="#">Last Modified Time</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-download mr-2 color-grey" aria-hidden="true"></i>Import Customers</a>
                                            <a class="dropdown-item edit-bor-bot" href="#"><i class="fa fa-upload mr-2" aria-hidden="true"></i>Export Customers</a>
                                            <a class="dropdown-item edit-bor-bot" href="#"><i class="fa fa-cog mr-2" aria-hidden="true"></i>Customer Preferences</a>
                                            <a class="dropdown-item edit-bor-bot" href="#"><i class="fa fa-upload mr-2" aria-hidden="true"></i>Export Current View</a>
                                            <a class="dropdown-item edit-bor-bot" href="#"><i class="fa fa-refresh mr-2" aria-hidden="true"></i>Refresh List</a>
                                            <a class="dropdown-item page-bg " href="#"><i class="fa fa-lightbulb-o mr-2" aria-hidden="true"></i>Page Tips</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mr-3 header-a"><a href="#" class="tips page-bg-a"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Page Tips</a></div>

                            </div>
                        </div>
                    </div>

                    <div class="cust-datatable">
                        <div class="table-responsive rem-pt-4 pt-4">
                            <table class="w-100 table-list rem-mt-5 cust-table-mar " id="myTabless">
                                <thead>
                                    <tr>
                                       
                                        <th>Sl No</th>
                                        <th>Purpose </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                <?php 
                    $i=1;
                 if($existingpurpose!=false) {
                 
                    foreach($existingpurpose as $info) { ?>
                      <tr><td><?php echo $i++?></td>
                        <td><?=$info->purpose?></td>
                   
                    <td>
                         
                          <?php if($info->purpose_status) {?>
                                                         
                            <a href="<?=base_url()?>settings/purposeupdate/edit/<?=base64_encode($info->sk_purpose_id)?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            |<a href="<?=base_url()?>settings/purposeupdate/delete/<?=base64_encode($info->sk_purpose_id)?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      <?php }else {?>
                            <a href="<?=base_url()?>settings/purposeupdate/active/<?=base64_encode($info->sk_purpose_id)?>"><i class="fa fa-check" aria-hidden="true"></i></a>
                          <?php }?>
                          </td>
                         
                      </tr>
                   <?php }}?>
                </tbody>
                

                                        
                                        
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <!--invoices section starts below-->
                <div class="row show-invoice-row d-none">
                    <div class="col-md-3">

                        <!--side row-->
                        <div class="side-row">
                            <div class="row all-invoice-row " id="all-inv">
                                <div class="col-md-6 m-0 p-0">

                                    <div class="dropdown Customer-content-- show all-btn">
                                        <button class="btn  dropdown-toggle  " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            All Customers
                                          </button>
                                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton" style="position: absolute; transform: translate3d(0px, 42px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-start">
                                            <div class="default">Default Filters</div>
                                            <a class="dropdown-item" href="#">All Customers</a>
                                            <a class="dropdown-item" href="#">Active Customers</a>
                                            <a class="dropdown-item" href="#">CRM Customers</a>
                                            <a class="dropdown-item" href="#">Duplicate Customers</a>
                                            <a class="dropdown-item" href="#">Inactive Customers</a>
                                            <a class="dropdown-item" href="#">Client Portal Enabled</a>
                                            <a class="dropdown-item" href="#">Client Portal Disabled</a>
                                            <a class="dropdown-item" href="#">Overdue Customers</a>
                                            <a class="dropdown-item edit-bor-bot" href="#">Unpaid Customers</a>
                                            <a class="dropdown-item new-blue" href="#"> <i class="fa fa-plus mr-1" aria-hidden="true"></i>New Custom View</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6 m-0 p-0 text-right">
                                    <div class="row float-right">
                                        <div class="col-md-7 text-right p-0">
                                            <div class="btn-group split-btn">
                                                <button type="button" class="btn btn-secondary new-btn p2-9 m-0 mr-2 fs-12" data-toggle="tooltip" data-placement="bottom" title="Create Customer"><img src="<?php echo  base_url()?>/assets/images/plus-white.png" height="10px" width="10px" class="img-fluid m-1"></button>

                                                <!-- <button type="button" class="btn btn-secondary new-btn bor-new dropdown-toggle dropdown-toggle-split p2-9  m-0" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                              <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                              <a class="dropdown-item" href="#">Action</a>
                                              <a class="dropdown-item" href="#">Another action</a>
                                              <a class="dropdown-item" href="#">Something else here</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#">Separated link</a>
                                            </div> -->
                                            </div>
                                        </div>
                                        <div class="col-md-5 p-0 text-right">
                                            <div class="dropdown rem-arr Customer-content-- show all-btn ">
                                                <button class="btn  dropdown-toggle p-0 line-btn" type="button" id="dropdownMenuButtonall" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <img src="<?php echo base_url()?>/assets/images/lines.png" class="img-fluid " height="14px" width="14px">
                                            </button>
                                                <div class="dropdown-menu sort-drop-down " aria-labelledby="dropdownMenuButton" style="position: absolute; transform: translate3d(0px, 42px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-start">
                                                    <div class="default">Sort by</div>
                                                    <a class="dropdown-item" href="#">Name</a>
                                                    <a class="dropdown-item sortable asc position-relative active" href="#">Company Name
                                                <span class="sort"></span>
                                              </a>
                                                    <a class="dropdown-item" href="#">Receivables</a>
                                                    <a class="dropdown-item" href="#">Created Time</a>
                                                    <a class="dropdown-item edit-bor-bot" href="#">Last Modified Time</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-download mr-2 color-grey" aria-hidden="true"></i>Import Customers</a>
                                                    <a class="dropdown-item edit-bor-bot" href="#"><i class="fa fa-upload mr-2" aria-hidden="true"></i>Export Customers</a>
                                                    <a class="dropdown-item edit-bor-bot" href="#"><i class="fa fa-cog mr-2" aria-hidden="true"></i>Customer Preferences</a>
                                                    <a class="dropdown-item edit-bor-bot" href="#"><i class="fa fa-upload mr-2" aria-hidden="true"></i>Export Current View</a>
                                                    <a class="dropdown-item edit-bor-bot" href="#"><i class="fa fa-refresh mr-2" aria-hidden="true"></i>Refresh List</a>
                                                    <a class="dropdown-item page-bg" href="#"><i class="fa fa-lightbulb-o mr-2" aria-hidden="true"></i>Page Tips</a>
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

                                    <input type="checkbox" id="blankCheckbox0" class="selectall checkbox_check one mt-6" name="ch[]" data-group="1" />
                                    <!-- <input type="checkbox" id="selectall" onclick="selectAll();"></input> -->
                                </div>

                                <div class="col-md-3 pl-0">
                                    <div class="d-flex">
                                        <button type="button" class="btn mark-btn p-zero" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send Customer Statements"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
                                        <button type="button" class="btn mark-btn p-zero" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print Customer Statements"><i class="fa fa-print" aria-hidden="true"></i></button>
                                    </div>
                                </div>

                                <div class="col-md-3 p-0">
                                    <div class="dropdown more-dropdown">
                                        <button class="btn btn-secondary dropdown-toggle p-zero mark-btn more-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            More
                                          </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Bulk Update</a>
                                            <a class="dropdown-item" href="#">Enable Portal</a>
                                            <a class="dropdown-item" href="#">Mark as Active</a>
                                            <a class="dropdown-item" href="#">Merge</a>
                                            <a class="dropdown-item" href="#">Associate Templates</a>
                                            <a class="dropdown-item" href="#">Mark as Inactive</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 p-0 d-flex">
                                    <p class="selected one-sel text-muted d-block cust-sel"> 1 Selected</p>

                                    <button type="button" class="close check-close p-zero" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="Remove selection">
                                          <span aria-hidden="true" class="x-close">×</span>
                                        </button>

                                </div>

                            </div>

                            <!--checked-display ^-->


                            <div class="row checkbox-row ">
                                <div class="col-md-2 pr-0 text-center">
                                    <!-- <div class="form-check">
                                        <input class="form-check-input position-static check1 mark-click child" data-group="1" type="checkbox" id="blankCheckbox" value="option1" aria-label="..." onchange="valueChanged()"/>
                                      </div> -->
                                    <input type="checkbox" class="child check1 mark-click one " id="blankCheckbox" name="ch[]" data-group="1" />
                                    <!-- <input type="checkbox" class="selectedId" name="selectedId" value="AF7F1FC4-A03B-11E2-A620-080027D207FA" onclick="resetSelectAll();" /> -->
                                </div>

                                <div class="col-md-10 p-0">
                                    <a href="#">
                                        <div class="check-name check-name-clr"></div>

                                        <p class="text-muted date_of_created"></p>
                                    </a>

                                </div>

                                <!-- <div class="col-md-5 p-0 text-right">
                                        <p class="check-rs"> ₹2,32,323.00</p>
                                        <p class="check-rs overdue"> OVERDUE BY 10 DAYS</p>
                                    </div> -->
                            </div>
                            <!--                             
                               <div class="row  checkbox-row check-row">
                                <div class="col-md-2 pr-0 text-center">
                               
                                  <input type="checkbox" class="child class-mark mark-click one" id="blankCheckbox2" name="ch[]" data-group="1" />
       
                                </div>

                                <div class="col-md-5 p-0">
                                    <div class="check-name">arjun reddy</div>
                                    <div class="d-flex">
                                        <p class="inv">INV-000002</p>
                                        <p class="text-muted separationline">19/03/2021</p>
                                    </div>
                                </div>

                                <div class="col-md-5 p-0 text-right">
                                    <p class="check-rs"> ₹300.00</p>
                                    <p class="check-rs overdue"> OVERDUE BY 10 DAYS</p>
                                </div>
                           </div> -->

                        </div>

                        <!--side row ^-->
                    </div>

                    <div class="col-md-9 bor-left pl-0 ">
                        <div class="row cus-name-padd">
                            <div class="col-md-5">
                                <h3 class="cus-name"></h3>
                            </div>

                            <div class="col-md-7 p-0 text-right">
                                <button type="button" class="btn line-btn edit-btn mr-10">Edit</button>
                                <button type="button" class="btn line-btn edit-btn   rem-hover comm1 mr-10" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Attach file">
                                          <i class="fa fa-paperclip attach-icon mr-1" aria-hidden="true"></i>
                                    </button>

                                <div class="attach-popover cus-attach-popover d-none">
                                    <div class="card position-relative crd-before" style="width: 383px; height:170px;">
                                        <div class="text-right">
                                            <button type="button" class="close pop-close mr-4 mt-4" aria-label="Close">
                                                  <span aria-hidden="true">×</span>
                                                </button>
                                        </div>

                                        <div class="card-body padd-card">
                                            <h5 class="card-title upload-text text-center">
                                                You can upload a maximum of 10 files, 5MB each
                                            </h5>

                                            <div class="row text-center padd-card-row mt-4">
                                                <div class="col-md-4 p-0 mr-1 upload-bor">
                                                    <img src="<?php echo base_url()?>/assets/images/upload.png" class="img-fluid">
                                                    <a href="#" class="drag mt-2">Drag &amp; drop</a>
                                                </div>

                                                <div class="col-md-4 p-0 mr-1 upload-bor">
                                                    <img src="<?php echo base_url()?>/assets/images/cloud-computing.png" class="img-fluid" height="16px" width="16px">
                                                    <a href="#" class="drag mt-2">Cloud</a>
                                                </div>

                                                <div class="col-md-4 p-0 upload-bor">
                                                    <img src="<?php echo base_url()?>/assets/images/docum.png" class="img-fluid" height="16px" width="16px">
                                                    <a href="#" class="drag mt-2">Documents</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown cust-new-display">
                                    <button class="btn btn-secondary cust-new offline dropdown-toggle mr-10" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         New Transaction
                                        </button>
                                    <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                                        <h6 class="spread-sheet">Sales</h6>
                                        <a class="dropdown-item spreed-sheet-titles" href="#">Invoice</a>
                                        <a class="dropdown-item spreed-sheet-titles " href="#">Customer Payment</a>
                                        <a class="dropdown-item spreed-sheet-titles" href="#">Estimate</a>
                                        <a class="dropdown-item spreed-sheet-titles" href="#">Sales Order</a>
                                        <a class="dropdown-item spreed-sheet-titles" href="#">Delivery Challan</a>
                                        <a class="dropdown-item spreed-sheet-titles" href="#">Recurring Invoice</a>
                                        <a class="dropdown-item spreed-sheet-titles" href="#">Expense</a>
                                        <a class="dropdown-item spreed-sheet-titles" href="#">Recurring Expense</a>
                                        <a class="dropdown-item spreed-sheet-titles" href="#">Journals</a>
                                        <a class="dropdown-item spreed-sheet-titles edit-bor-bot" href="#">Credit Note</a>
                                        <a class="dropdown-item spreed-sheet-titles" href="#">Project</a>
                                    </div>
                                </div>

                                <div class="dropdown cust-new-display">
                                    <button class="btn btn-secondary line-btn-more  edit-btn dropdown-toggle mr-10" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           More
                                        </button>
                                    <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">

                                        <a class="dropdown-item spreed-sheet-titles" href="#">Associate Templates</a>
                                        <a class="dropdown-item spreed-sheet-titles" href="#">Stop all Reminders</a>
                                        <a class="dropdown-item spreed-sheet-titles edit-bor-bot" href="#">Email Customer</a>
                                        <a class="dropdown-item spreed-sheet-titles" href="#">Configure Client Portal</a>
                                        <a class="dropdown-item spreed-sheet-titles" href="#">Clone</a>
                                        <a class="dropdown-item spreed-sheet-titles" href="#">Link to Vendor</a>
                                        <a class="dropdown-item spreed-sheet-titles edit-bor-bot" href="#">Merge Customers</a>
                                        <a class="dropdown-item spreed-sheet-titles " href="#">Mark as Inactive</a>
                                        <a class="dropdown-item spreed-sheet-titles" href="#">Delete</a>


                                    </div>
                                </div>

                                <button type="button" class="close mt-5-close float-none" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>


                            </div>
                        </div>

                        <div class="faq-tabs mb-2">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="false">Comments</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Sales</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link " id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">Related Lists</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="mails-tab" data-toggle="tab" href="#mails" role="tab" aria-controls="mails" aria-selected="false">Mails</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="statement-tab" data-toggle="tab" href="#statement" role="tab" aria-controls="statement" aria-selected="false">Statements</a>
                                </li>
                            </ul>
                            <div class="customer-tab">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                        <div class="row m-0 p-0">
                                            <div class="col-md-5 details-info m-0">
                                                <div class="">
                                                    <div class="group">
                                                        <div class="codebele-text"></div>
                                                        <div class="row mt-20  p-0">
                                                            <div class="col-md-2 p-0 m-0">
                                                                <img src="<?php echo base_url()?>/assets/images/code-profile.png" class="img-fluid cp-pic">
                                                            </div>

                                                            <div class="col-md-10 pl-15 m-0">
                                                                <div class="group-name"> arjun reddy</div>
                                                                <div class="email">arjun@codebele.com</div>
                                                                <div class="d-flex"><i class="fa fa-phone mt-1 mr-2 work_phone" aria-hidden="true"></i></div>
                                                                <div class="d-flex"><i class="fa fa-mobile mt-1 mobile-mar work_mobile" aria-hidden="true"></i></div>
                                                                <div class=d-flex>
                                                                    <button type="button" class="btn edit-code-btn">Edit</button>
                                                                    <a href="#" class="edit-code-btn pl-3">Send Email</a>
                                                                    <button type="button" class="btn edit-code-btn rem-bor">Delete</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--accordian starts below-->
                                                    <div class="customer-accordian">
                                                        <div class="accordion acc-arrow" id="accordionExample-cust">
                                                            <div class="card">
                                                                <div class="card-header " id="headingOne-cust">
                                                                    <h2 class="mb-0">
                                                                        <button class="btn btn-link btn-block text-left cust-acc-btn" type="button" data-toggle="collapse" data-target="#collapseOne-cust" aria-expanded="true" aria-controls="collapseOne-cust">
                                                                        ADDRESS <img src="<?php echo base_url()?>/assets/images/acc-down.png" class="img-fluid acc-down float-right rot-arrow" height="10px" width="10px">
                                                                      </button>
                                                                    </h2>
                                                                </div>

                                                                <div id="collapseOne-cust" class="collapse show" aria-labelledby="headingOne-cust" data-parent="#accordionExample-cust">
                                                                    <div class="card-body">
                                                                        <div class="group pl-0 pr-0">
                                                                            <div class="billing_address">Billing Address</div>
                                                                            <span class="text-muted">No Billing Address - <a class="font-xs a-spn" href="#">Add new address</a></span>
                                                                            <div class="mt-4">Shipping Address</div>
                                                                            <span class="text-muted fs-12">No Shipping Address - <a class="font-xs a-spn" href="#">Add new address</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header" id="headingTwo-cust">
                                                                    <h2 class="mb-0">
                                                                        <button class="btn btn-link btn-block text-left collapsed cust-acc-btn" type="button" data-toggle="collapse" data-target="#collapseTwo-cust" aria-expanded="true" aria-controls="collapseTwo-cust">
                                                                        OTHER DETAILS<img src="<?php echo base_url()?>/assets/images/acc-down.png" class="img-fluid acc-down float-right rot-arrow" height="10px" width="10px">
                                                                      </button>
                                                                    </h2>
                                                                </div>
                                                                <div id="collapseTwo-cust" class="collapse show" aria-labelledby="headingTwo-cust" data-parent="#accordionExample-cust">
                                                                    <div class="card-body">
                                                                        <div class="group">
                                                                            <div class="row m-0 p-0">
                                                                                <div class="col-md-6 p-0 m-0">
                                                                                    <div class="text-muted cus-id">Customer ID</div>
                                                                                </div>

                                                                                <div class="col-md-6 p-0 m-0">
                                                                                    <div class="cus-det">516776000000017001</div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row m-0 p-0">
                                                                                <div class="col-md-6 p-0 m-0">
                                                                                    <div class="text-muted cus-id ">Currency Code</div>
                                                                                </div>

                                                                                <div class="col-md-6 p-0 m-0">
                                                                                    <div class="cus-det inr-hov currency_code"><i class="fa fa-pencil text-muted ml-2 inr-rem dis-none" aria-hidden="true"></i> </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row m-0 p-0">
                                                                                <div class="col-md-6 p-0 m-0">
                                                                                    <div class="text-muted cus-id">Portal Status</div>
                                                                                </div>

                                                                                <div class="col-md-6 p-0 m-0">
                                                                                    <span class="text-muted">Disabled - <a class="font-xs a-spn" href="#">enable</a></span>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row m-0 p-0">
                                                                                <div class="col-md-6 p-0 m-0">
                                                                                    <div class="text-muted cus-id"> Portal Language</div>
                                                                                </div>

                                                                                <div class="col-md-6 p-0 m-0">
                                                                                    <div class="cus-det hov-pen portal_lang"> <i class="fa fa-pencil text-muted ml-2 rem-dis dis-none" aria-hidden="true"></i></div>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header" id="headingThree-cust">
                                                                    <h2 class="mb-0">
                                                                        <button class="btn btn-link btn-block text-left collapsed cust-acc-btn" type="button" data-toggle="collapse" data-target="#collapseThree-cust" aria-expanded="true" aria-controls="collapseThree-cust">
                                                                        <!-- CONTACT PERSONS <i class="fa fa-plus plus-blue" aria-hidden="true"></i><img src="images/acc-down.png" class="img-fluid acc-down float-right rot-arrow" height="10px" width="10px"> -->
                                                                        <div class="row m-0 p-0">
                                                                             <div class="col-md-6 p-0 m-0">
                                                                                CONTACT PERSONS 
                                                                             </div>
                                                                             <div class="col-md-6 p-0 m-0 text-right">
                                                                                <i class="fa fa-plus plus-blue mr-2" aria-hidden="false"></i>
                                                                                <img src="<?php echo base_url()?>/assets/images/acc-down.png" class="img-fluid acc-down float-right rot-arrow" height="10px" width="10px">
                                                                            </div>
                                                                        </div>
                                                                      </button>
                                                                    </h2>
                                                                </div>
                                                                <div id="collapseThree-cust" class="collapse show" aria-labelledby="headingThree-cust" data-parent="#accordionExample-cust">
                                                                    <div class="card-body">
                                                                        <div class="group">
                                                                            <div class="mt-20">
                                                                                <div class="text-muted text-center">No contact persons found.</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--accordian ^-->
                                                    <div class="ask-review contact row mx-4 p-4">
                                                        <div class="col-md-2 p-0 m-0">
                                                            <i class="fa fa-user-o user-green" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col-md-10  m-0">
                                                            <div class="client-portal">
                                                                Client Portal allows your customers to keep track of all the transactions between them and your business.<a href="#">Learn More</a>

                                                            </div>
                                                            <button type="button" class="btn line-btn edit-btn btn-enable mr-10">Enable Portal</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--col-md-5 div-->

                                            <div class="col-md-7 prim-info m-0">
                                                <div class="row out-row-padd  m-0">
                                                    <div class="col-md-5 bor-lft">
                                                        <h6 class="out-text">Outstanding Receivables</h6>
                                                        <h5 class="out-rups opening_balance"></h5>
                                                    </div>
                                                    <div class="col-md-7 ">
                                                        <div class="row p-22 m-0">
                                                            <div class="col-md-6 p-0">
                                                                <p class="text-muted unused">Unused Credits</p>
                                                            </div>
                                                            <div class="col-md-6 p-0">
                                                                <p class="rs">₹0.00</p>
                                                            </div>
                                                        </div>

                                                        <div class="row m-0">
                                                            <div class="col-md-6 p-0">
                                                                <p class="text-muted unused">Payment due period</p>
                                                            </div>
                                                            <div class="col-md-6 p-0">
                                                                <p class="rs float-right"> Due on Receipt</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a href="#" class="notify" data-toggle="tooltip" data-placement="bottom" title="An SMS will be sent to the customer with the details of the Outstanding Balance and requesting them to pay it."> Notify via SMS</a>
                                                <p class="notify enter-opening">Enter Opening Balance ₹0.00<a href="#" class="ml-2">Update <i class="fa fa-pencil ml-1 " aria-hidden="true"></i></a></p>
                                                <div class="enter-opening-bor"></div>
                                                <div class="graph-row">
                                                    <div class="row">
                                                        <div class="col-md-8 p-0">
                                                            <p class="income text-muted">Income</p>
                                                        </div>
                                                        <div class="col-md-4 float-right p-0">
                                                            <div class="row">
                                                                <div class="col-md-6 p-0">
                                                                    <button class="btn  dropdown-toggle last-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  Last 6 months
                                                                </button>
                                                                    <div class="dropdown-menu fs-13" aria-labelledby="dropdownMenuButton" style="">
                                                                        <a class="dropdown-item" href="#">This Fiscal Year</a>
                                                                        <a class="dropdown-item" href="#">Previous Fiscal Year</a>
                                                                        <a class="dropdown-item" href="#">Last 12 Months</a>
                                                                        <a class="dropdown-item" href="#">Last 6 Months</a>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 p-0">
                                                                    <button class="btn  dropdown-toggle last-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  Accrual
                                                                </button>
                                                                    <div class="dropdown-menu fs-13" aria-labelledby="dropdownMenuButton" style="">
                                                                        <a class="dropdown-item" href="#">Accrual</a>
                                                                        <a class="dropdown-item" href="#">Cash</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="total-income text-center">Total Income ( Last 6 Months ) - ₹2,32,623.00</div>

                                                    <!--chart code starts below-->
                                                    <figure class="highcharts-figure">
                                                        <div id="container"></div>
                                                        <p class="highcharts-description">

                                                        </p>
                                                    </figure>
                                                    <!--chart code ends above-->


                                                </div>

                                                <!--comments code starts below-->
                                                <div class="invoice-line ">
                                                    <div class="inv-upd inv-text">
                                                        <div>
                                                            <div class="inv-node">
                                                                <div class="time">
                                                                    <small>24/03/2021 12:14 PM</small>
                                                                </div>
                                                                <div class="invoice-updated-row">
                                                                    <div>
                                                                        <div class="upd-text message-circle">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="inv-com-upd" style="margin-top: -15px">
                                                                    <div class="arrow"></div>
                                                                    <p class="text-regular"> Invoice updated </p>
                                                                    <div class="text-muted"> Invoice INV-000001 marked as sent <strong>by accounts</strong> -
                                                                        <a href="#" data-ember-action="" data-ember-action-753="753">
                                                                            <small>View Details</small>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <div class="inv-node">
                                                                <div class="time"><small>24/03/2021 10:55 AM</small></div>
                                                                <div class="invoice-updated-row">
                                                                    <div>
                                                                        <div class="upd-text message-circle">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="inv-com-upd" style="margin-top: -15px">
                                                                    <div class="arrow">

                                                                    </div>
                                                                    <p class="text-regular"> Invoice updated </p>
                                                                    <div class="text-muted"> Invoice INV-000002 marked as sent <strong>by accounts</strong> -
                                                                        <a href="#" data-ember-action="" data-ember-action-757="757">
                                                                            <small>View Details</small>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <div class="inv-node">
                                                                <div class="time">
                                                                    <small>19/03/2021 03:40 PM</small>
                                                                </div>
                                                                <div class="invoice-updated-row">
                                                                    <div>
                                                                        <div class="upd-text message-circle">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="inv-com-upd" style="margin-top: -15px">
                                                                    <div class="arrow"></div>
                                                                    <p class="text-regular"> Invoice added </p>
                                                                    <div class="text-muted"> Invoice INV-000002 of amount ₹300.00 created <strong>by accounts</strong> -
                                                                        <a href="#" data-ember-action="" data-ember-action-761="761">
                                                                            <small>View Details</small>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <div class="inv-node">
                                                                <div class="time">
                                                                    <small>19/03/2021 03:40 PM</small>
                                                                </div>
                                                                <div class="invoice-updated-row">
                                                                    <div>
                                                                        <div class="upd-text message-circle">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="inv-com-upd" style="margin-top: -15px">
                                                                    <div class="arrow"></div>
                                                                    <p class="text-regular"> Invoice added </p>
                                                                    <div class="text-muted"> Invoice INV-000001 of amount ₹2,32,323.00 created
                                                                        <strong>by accounts</strong> -
                                                                        <a href="#" data-ember-action="" data-ember-action-765="765">
                                                                            <small>View Details</small>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <div class="inv-node">
                                                                <div class="time">
                                                                    <small>19/03/2021 03:37 PM</small>
                                                                </div>
                                                                <div class="invoice-updated-row">
                                                                    <div>
                                                                        <div class="upd-text message-circle">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="inv-com-upd" style="margin-top: -15px">
                                                                    <div class="arrow">

                                                                    </div>
                                                                    <p class="text-regular"> Contact added </p>
                                                                    <div class="text-muted"> Contact created <strong>by accounts</strong> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--comments code  ends above-->


                                            </div>

                                        </div>
                                        <!--row-div-->
                                    </div>
                                    <!--tab-pane-->

                                    <!--comments tab starts below-->
                                    <div class="tab-pane fade heigh-vh" id="comments" role="tabpanel" aria-labelledby="comments-tab">
                                        <div class="text-area container">
                                            <div class="form-group">
                                                <textarea rows="3" autofocus="" class="form-control "></textarea>
                                                <div class="text-muted">
                                                    <small class>(For Internal Use)</small>
                                                </div>
                                                <button class="btn offline mt-1rem">Add Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--comments tab ends above-->

                                    <!--sales tab starts below-->
                                    <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                                        <div class="sales-tab-btn">
                                            <button class="btn btn-secondary line-btn-more  edit-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Go to transactions
                                    </button>
                                            <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">

                                                <a class="dropdown-item spreed-sheet-titles" href="#">Invoice</a>
                                                <a class="dropdown-item spreed-sheet-titles" href="#">Customer Payment</a>
                                                <a class="dropdown-item spreed-sheet-titles" href="#">Estimate</a>
                                                <a class="dropdown-item spreed-sheet-titles" href="#">Sales Order</a>
                                                <a class="dropdown-item spreed-sheet-titles" href="#">Delivery Challan</a>
                                                <a class="dropdown-item spreed-sheet-titles" href="#">Recurring Invoice</a>
                                                <a class="dropdown-item spreed-sheet-titles" href="#">Expense</a>
                                                <a class="dropdown-item spreed-sheet-titles" href="#">Recurring Expense</a>
                                                <a class="dropdown-item spreed-sheet-titles" href="#">Project</a>
                                                <a class="dropdown-item spreed-sheet-titles" href="#">Journals</a>
                                                <a class="dropdown-item spreed-sheet-titles" href="#">Bill</a>
                                                <a class="dropdown-item spreed-sheet-titles" href="#">Credit Note</a>
                                            </div>
                                        </div>

                                        <div class="sales-drop-down">
                                            <div class="acc-pad">
                                                <!--accordion-->
                                                <div class="add-bor-bot">
                                                    <div class="d-flex">
                                                        <a class="btn btn-primary invoice-acc-btn pl-0 invoice-acc-btn1" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                            <i class="fa fa-caret-down mr-1 arr-acc" aria-hidden="true"></i> Invoice
                                                        </a>
                                                        <div class="ml-auto">
                                                            <p class="status inv d-none">Status: </p>
                                                            <button class="btn  dropdown-toggle acc-d last-btn p-0 pr-2 bor-right fs-13 d-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    All
                                                  </button>
                                                            <div class="dropdown-menu fs-13" aria-labelledby="dropdownMenuButton" style="">
                                                                <a class="dropdown-item" href="#">All</a>
                                                                <a class="dropdown-item" href="#">Draft</a>
                                                                <a class="dropdown-item" href="#">Client Viewed</a>
                                                                <a class="dropdown-item" href="#">Partially Paid</a>
                                                                <a class="dropdown-item" href="#">Unpaid</a>
                                                                <a class="dropdown-item" href="#">Overdue</a>
                                                                <a class="dropdown-item" href="#">Paid</a>
                                                                <a class="dropdown-item" href="#">Void</a>
                                                            </div>
                                                            <a href="#" class="add-new ml-3"><i class="fa fa-plus mr-1" aria-hidden="true"></i>Add New</a>
                                                        </div>
                                                    </div>
                                                    <div class="collapse show" id="collapseExample">
                                                        <div class="card card-pad card-rem-bor card-body">
                                                            <!--tables start below-->
                                                            <div class="table-accor table-hover">
                                                                <table class="table" id="example">
                                                                    <thead>
                                                                        <tr class="rem-bor-acc tr-styles">
                                                                            <th class=" rem-rece date-table">Date </th>
                                                                            <th scope="col" class="rem-inv invoice-table">Invoice# </th>
                                                                            <th scope="col">Reference#</th>
                                                                            <th scope="col" class="text-right rem-amt amount-table pr-22">Amount </th>
                                                                            <th scope="col" class="text-right rem-bal bal-table">Balance Due</th>
                                                                            <th scope="col">Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <tr>
                                                                            <th scope="row"><a href="invoice.html" class="clr-black">19/03/2021</a></th>
                                                                            <td><a href="invoice.html">INV-000001</a></td>
                                                                            <td></td>
                                                                            <td class="text-right "><a href="invoice.html" class="clr-black">₹2,32,323.00</a></td>
                                                                            <td class="text-right"><a href="invoice.html" class="clr-black">₹2,32,323.00</a></td>
                                                                            <td class="overdue"><a href="invoice.html" class="clr-or-red">Overdue</a></td>
                                                                        </tr>
                                                                        <tr class="bor-bot">
                                                                            <th scope="row"><a href="invoice.html" class="clr-black">19/03/2021</a></th>
                                                                            <td><a href="invoice.html">INV-000001</a></td>
                                                                            <td></td>
                                                                            <td class="text-right"><a href="invoice.html" class="clr-black">₹300</a></td>
                                                                            <td class="text-right"><a href="invoice.html" class="clr-black">₹300</a></td>
                                                                            <td class="overdue"><a href="invoice.html" class="clr-or-red">Overdue</a></td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!--tables ends above-->
                                                            <div class="d-flex mt-3 ml-2">
                                                                <div class="total d-flex">
                                                                    <a href="#" class="mr-1 click-total">Total Count</a>
                                                                    <span class="two d-none">: 2</span>
                                                                </div>

                                                                <div class="pl-50 d-flex ml-auto">
                                                                    <i class="fa fa-caret-left total-arr mr-2" aria-hidden="true"></i>
                                                                    <div class="one-two">1 - 2</div>
                                                                    <i class="fa fa-caret-right total-arr ml-2" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--accordion ^-->

                                            </div>


                                            <!--dropdown-replication v-->

                                            <div class="acc-pad">
                                                <!--accordion-->
                                                <div class="add-bor-bot">
                                                    <div class="d-flex">
                                                        <a class="btn btn-primary invoice-acc-btn collapsed pl-0" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                                                            <i class="fa fa-caret-down mr-1 arr-acc" aria-hidden="true"></i> Customer Payment
                                                        </a>
                                                        <div class="ml-auto">
                                                            <a href="#" class="add-new ml-3"><i class="fa fa-plus mr-1" aria-hidden="true"></i>Add New</a>
                                                        </div>
                                                    </div>
                                                    <div class="collapse" id="collapseExample1" style="">
                                                        <div class="card card-pad card-rem-bor card-body">
                                                            <!--tables start below-->
                                                            <div class="table-accor">
                                                                <table class="table mb-0" id="example1">
                                                                    <thead>
                                                                        <tr class="rem-bor-acc tr-styles">
                                                                            <th class=" rem-rece1 date-table1">Date
                                                                                <div class="arr-inline date-none1 position-relative d-none">
                                                                                    <i class="fa fa-caret-down  arrow-black change-clr-up ml-1 " aria-hidden="true"></i>
                                                                                    <i class="fa fa-caret-up arrow-light change-clr-down arr-pos" aria-hidden="true"></i>
                                                                                </div>
                                                                            </th>
                                                                            <th scope="col">Payment#

                                                                            </th>
                                                                            <th scope="col" class="rem-inv1 invoice-table1">Reference#
                                                                                <div class="arr-inline inv-none1 position-relative d-none">
                                                                                    <i class="fa fa-caret-down  arrow-black change-clr-up ml-1 " aria-hidden="true"></i>
                                                                                    <i class="fa fa-caret-up arrow-light change-clr-down arr-pos" aria-hidden="true"></i>
                                                                                </div>
                                                                            </th>
                                                                            <th scope="col" class=" rem-amt1 amount-table1">Payment Mode
                                                                                <div class="arr-inline amt-none1 position-relative d-none">
                                                                                    <i class="fa fa-caret-down  arrow-black change-clr-up ml-1 " aria-hidden="true"></i>
                                                                                    <i class="fa fa-caret-up arrow-light change-clr-down arr-pos" aria-hidden="true"></i>
                                                                                </div>
                                                                            </th>
                                                                            <th scope="col" class="text-right rem-bal1 bal-table1">Amount Received
                                                                                <div class="arr-inline bal-none1 position-relative d-none">
                                                                                    <i class="fa fa-caret-down  arrow-black change-clr-up ml-1 " aria-hidden="true"></i>
                                                                                    <i class="fa fa-caret-up arrow-light change-clr-down arr-pos" aria-hidden="true"></i>
                                                                                </div>
                                                                            </th>
                                                                            <th scope="col" class="text-right rem-bal11 bal-table11">Unused Payment
                                                                                <div class="arr-inline bal-none11 position-relative d-none">
                                                                                    <i class="fa fa-caret-down  arrow-black change-clr-up ml-1 " aria-hidden="true"></i>
                                                                                    <i class="fa fa-caret-up arrow-light change-clr-down arr-pos" aria-hidden="true"></i>
                                                                                </div>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody class="mb-0">
                                                                        <tr>
                                                                            <td colspan="6" class="bor-bot">
                                                                                <div class="text-center">
                                                                                    <p class="text-muted mt-5"> No Payments Received yet.</p>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!--tables ends above-->
                                                            <div class="d-flex mt-3">
                                                                <div class="total d-flex">
                                                                    <a href="#" class="mr-1 click-total">Total Count</a>

                                                                </div>

                                                                <div class="pl-50 d-flex ml-auto">
                                                                    <i class="fa fa-caret-left total-arr mr-2" aria-hidden="true"></i>
                                                                    <div class="one-two"></div>
                                                                    <i class="fa fa-caret-right total-arr ml-2" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--accordion ^-->

                                            </div>
                                            <!--dropdown-replication ^-->

                                            <!--estimate code starts below-->
                                            <div class="acc-pad">
                                                <!--accordion-->
                                                <div class="add-bor-bot">
                                                    <div class="d-flex">
                                                        <a class="btn btn-primary  invoice-acc-btn  est-btn pl-0 collapsed" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                                                            <i class="fa fa-caret-down mr-1 arr-acc" aria-hidden="true"></i> Estimate
                                                        </a>
                                                        <div class="ml-auto">
                                                            <p class="status est d-none">Status: </p>
                                                            <button class="btn dropdown-toggle est-d last-btn p-0 pr-2 bor-right fs-13 d-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    All
                                                  </button>
                                                            <div class="dropdown-menu fs-13" aria-labelledby="dropdownMenuButton" style="">
                                                                <a class="dropdown-item" href="#">All</a>
                                                                <a class="dropdown-item" href="#">Draft</a>
                                                                <a class="dropdown-item" href="#">Sent</a>
                                                                <a class="dropdown-item" href="#">Client Viewed</a>
                                                                <a class="dropdown-item" href="#">Accepted</a>
                                                                <a class="dropdown-item bor-bot" href="#">Invoiced</a>
                                                                <a class="dropdown-item" href="#">Declined</a>
                                                                <a class="dropdown-item" href="#">Expired</a>

                                                            </div>
                                                            <a href="#" class="add-new ml-3"><i class="fa fa-plus mr-1" aria-hidden="true"></i>Add New</a>
                                                        </div>
                                                    </div>
                                                    <div class="collapse" id="collapseExample2" style="">
                                                        <div class="card card-pad card-rem-bor card-body">
                                                            <!--tables start below-->
                                                            <div class="table-accor">
                                                                <table class="table mb-0" id="example2">
                                                                    <thead>
                                                                        <tr class="rem-bor-acc tr-styles">
                                                                            <th class="rem-rece2 date-table2">Date
                                                                                <div class="arr-inline date-none2 position-relative d-none">
                                                                                    <i class="fa fa-caret-down  arrow-black change-clr-up ml-1 " aria-hidden="true"></i>
                                                                                    <i class="fa fa-caret-up arrow-light change-clr-down arr-pos" aria-hidden="true"></i>
                                                                                </div>
                                                                            </th>

                                                                            <th scope="col" class="rem-inv2 invoice-table2">Estimate#
                                                                                <div class="arr-inline inv-none2 position-relative d-none">
                                                                                    <i class="fa fa-caret-down  arrow-black change-clr-up ml-1 " aria-hidden="true"></i>
                                                                                    <i class="fa fa-caret-up arrow-light change-clr-down arr-pos" aria-hidden="true"></i>
                                                                                </div>
                                                                            </th>
                                                                            <th scope="col">Reference#

                                                                            </th>
                                                                            <th scope="col" class="text-right  rem-amt2 amount-table2">Amount
                                                                                <div class="arr-inline amt-none2 position-relative d-none">
                                                                                    <i class="fa fa-caret-down  arrow-black change-clr-up ml-1 " aria-hidden="true"></i>
                                                                                    <i class="fa fa-caret-up arrow-light change-clr-down arr-pos" aria-hidden="true"></i>
                                                                                </div>
                                                                            </th>
                                                                            <th scope="col">Status

                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="mb-0">

                                                                        <tr>
                                                                            <td colspan="6" class="bor-bot">
                                                                                <div class="text-center">
                                                                                    <p class="text-muted mt-5"> There are no estimates<a href="" class=" ml-2">- Add new</a></p>

                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!--tables ends above-->
                                                            <div class="d-flex mt-3">
                                                                <div class="total d-flex">
                                                                    <a href="#" class="mr-1 click-total">Total Count</a>

                                                                </div>

                                                                <div class="pl-50 d-flex ml-auto">
                                                                    <i class="fa fa-caret-left total-arr mr-2" aria-hidden="true"></i>
                                                                    <div class="one-two"></div>
                                                                    <i class="fa fa-caret-right total-arr ml-2" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--accordion ^-->

                                            </div>
                                            <!--estimate code ends above-->

                                            <!--sales order code starts below-->
                                            <div class="acc-pad">
                                                <!--accordion-->
                                                <div class="add-bor-bot">
                                                    <div class="d-flex">
                                                        <a class="btn btn-primary invoice-acc-btn sales-btn pl-0 collapsed" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                                                            <i class="fa fa-caret-down mr-1 arr-acc" aria-hidden="true"></i> Sales Order
                                                        </a>
                                                        <div class="ml-auto">
                                                            <p class="status sales d-none">Status: </p>
                                                            <button class="btn dropdown-toggle sales-d last-btn p-0 pr-2 bor-right fs-13 d-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    All
                                                  </button>
                                                            <div class="dropdown-menu fs-13" aria-labelledby="dropdownMenuButton" style="">
                                                                <a class="dropdown-item" href="#">All</a>
                                                                <a class="dropdown-item" href="#">Draft</a>
                                                                <a class="dropdown-item" href="#">Partially Invoiced</a>
                                                                <a class="dropdown-item" href="#">Invoiced</a>
                                                                <a class="dropdown-item" href="#">Closed</a>
                                                                <a class="dropdown-item" href="#">Void</a>
                                                                <a class="dropdown-item" href="#">Confirmed</a>
                                                                <a class="dropdown-item" href="#">Overdue</a>

                                                            </div>
                                                            <a href="#" class="add-new ml-3"><i class="fa fa-plus mr-1" aria-hidden="true"></i>Add New</a>
                                                        </div>
                                                    </div>
                                                    <div class="collapse" id="collapseExample3" style="">
                                                        <div class="card card-pad card-rem-bor card-body">
                                                            <!--tables start below-->
                                                            <div class="table-accor ">
                                                                <table class="table mb-0 " id="example3">
                                                                    <thead>
                                                                        <tr class="rem-bor-acc tr-styles">
                                                                            <th>Sales Order#</th>
                                                                            <th scope="col">Reference# </th>
                                                                            <th scope="col">Date</th>
                                                                            <th scope="col">Shipment Date </th>
                                                                            <th scope="col" class="text-right">Amount </th>
                                                                            <th scope="col">Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="mb-0">

                                                                        <tr>
                                                                            <td colspan="6" class="bor-bot">
                                                                                <div class="text-center">
                                                                                    <p class="text-muted mt-5"> There are no Sales Orders<a href="" class=" ml-2">- Add new</a></p>

                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!--tables ends above-->
                                                            <div class="d-flex mt-3">
                                                                <div class="total d-flex">
                                                                    <a href="#" class="mr-1 click-total">Total Count</a>

                                                                </div>

                                                                <div class="pl-50 d-flex ml-auto">
                                                                    <i class="fa fa-caret-left total-arr mr-2" aria-hidden="true"></i>
                                                                    <div class="one-two"></div>
                                                                    <i class="fa fa-caret-right total-arr ml-2" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--accordion ^-->

                                            </div>
                                            <!--sales order code ends above-->

                                            <!--delivery challen code starts below-->
                                            <div class="acc-pad">
                                                <!--accordion-->
                                                <div class="add-bor-bot">
                                                    <div class="d-flex">
                                                        <a class="btn btn-primary invoice-acc-btn delivery-btn pl-0 collapsed" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                                                            <i class="fa fa-caret-down mr-1 arr-acc" aria-hidden="true"></i> Delivery Challan
                                                        </a>
                                                        <div class="ml-auto">
                                                            <p class="status delivery d-none">Status: </p>
                                                            <button class="btn dropdown-toggle delivery-d last-btn p-0 pr-2 bor-right fs-13 d-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    All
                                                  </button>
                                                            <div class="dropdown-menu fs-13" aria-labelledby="dropdownMenuButton" style="">
                                                                <a class="dropdown-item" href="#">All</a>
                                                                <a class="dropdown-item" href="#">Draft</a>
                                                                <a class="dropdown-item" href="#">Open</a>
                                                                <a class="dropdown-item" href="#">Delivered</a>
                                                                <a class="dropdown-item" href="#">Returned</a>
                                                            </div>
                                                            <a href="#" class="add-new ml-3"><i class="fa fa-plus mr-1" aria-hidden="true"></i>Add New</a>
                                                        </div>
                                                    </div>
                                                    <div class="collapse" id="collapseExample4" style="">
                                                        <div class="card card-pad card-rem-bor card-body">
                                                            <!--tables start below-->
                                                            <div class="table-accor ">
                                                                <table class="table mb-0 " id="example4">
                                                                    <thead>
                                                                        <tr class="rem-bor-acc tr-styles">
                                                                            <th class="sorting-tab">Delivery Challan#
                                                                                <div class="arr-inline arrow d-none position-relative">
                                                                                    <i class="fa fa-caret-down  arrow-black ml-1 " aria-hidden="true"></i>
                                                                                    <i class="fa fa-caret-up arrow-light arr-pos" aria-hidden="true"></i>
                                                                                </div>

                                                                            </th>
                                                                            <th class="sorting-tab ">Reference#
                                                                                <div class="arr-inline arrow d-none  position-relative">
                                                                                    <i class="fa fa-caret-down  arrow-black ml-1 " aria-hidden="true"></i>
                                                                                    <i class="fa fa-caret-up arrow-light arr-pos" aria-hidden="true"></i>
                                                                                </div>
                                                                            </th>
                                                                            <th class="sorting-tab ">Date</th>
                                                                            <th class="sorting-tab" class="text-right">Amount </th>
                                                                            <th class="sorting-tab">Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="mb-0">

                                                                        <tr>
                                                                            <td colspan="6" class="bor-bot">
                                                                                <div class="text-center">
                                                                                    <p class="text-muted mt-5"> There are no Delivery Challans<a href="" class=" ml-2">- Add new</a></p>

                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!--tables ends above-->
                                                            <div class="d-flex mt-3">
                                                                <div class="total d-flex">
                                                                    <a href="#" class="mr-1 click-total">Total Count</a>

                                                                </div>

                                                                <div class="pl-50 d-flex ml-auto">
                                                                    <i class="fa fa-caret-left total-arr mr-2" aria-hidden="true"></i>
                                                                    <div class="one-two"></div>
                                                                    <i class="fa fa-caret-right total-arr ml-2" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--accordion ^-->

                                            </div>
                                            <!--delivery challen code ends above-->

                                            <!--recurring invoice code starts below-->
                                            <div class="acc-pad">
                                                <!--accordion-->
                                                <div class="add-bor-bot">
                                                    <div class="d-flex">
                                                        <a class="btn btn-primary invoice-acc-btn rec-inv-btn pl-0 collapsed" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
                                                            <i class="fa fa-caret-down mr-1 arr-acc" aria-hidden="true"></i>Recurring Invoice
                                                        </a>
                                                        <div class="ml-auto">
                                                            <p class="status rec-inv d-none">Status: </p>
                                                            <button class="btn dropdown-toggle rec-inv-d last-btn p-0 pr-2 bor-right fs-13 d-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    All
                                                  </button>
                                                            <div class="dropdown-menu fs-13" aria-labelledby="dropdownMenuButton" style="">
                                                                <a class="dropdown-item" href="#">All</a>
                                                                <a class="dropdown-item" href="#">Active</a>
                                                                <a class="dropdown-item" href="#">Stopped</a>
                                                                <a class="dropdown-item" href="#">Invoiced</a>
                                                            </div>
                                                            <a href="#" class="add-new ml-3"><i class="fa fa-plus mr-1" aria-hidden="true"></i>Add New</a>
                                                        </div>
                                                    </div>
                                                    <div class="collapse" id="collapseExample5" style="">
                                                        <div class="card card-pad card-rem-bor card-body">
                                                            <!--tables start below-->
                                                            <div class="table-accor ">
                                                                <table class="table mb-0 " id="example5">
                                                                    <thead>
                                                                        <tr class="rem-bor-acc tr-styles">
                                                                            <th class="">Profile Name</th>
                                                                            <th scope="col">Frequency </th>
                                                                            <th scope="col">Last Invoice Date</th>
                                                                            <th scope="col">Next Invoice Date</th>
                                                                            <th scope="col">Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="mb-0">

                                                                        <tr>
                                                                            <td colspan="6" class="bor-bot">
                                                                                <div class="text-center">
                                                                                    <p class="text-muted mt-5"> There are no recurring invoices <a href="" class=" ml-2">- Add new</a></p>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!--tables ends above-->
                                                            <div class="d-flex mt-3">
                                                                <div class="total d-flex">
                                                                    <a href="#" class="mr-1 click-total">Total Count</a>

                                                                </div>

                                                                <div class="pl-50 d-flex ml-auto">
                                                                    <i class="fa fa-caret-left total-arr mr-2" aria-hidden="true"></i>
                                                                    <div class="one-two"></div>
                                                                    <i class="fa fa-caret-right total-arr ml-2" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--accordion ^-->

                                            </div>
                                            <!--recurring invoice code ends above-->

                                            <!--expense code starts below-->
                                            <div class="acc-pad">
                                                <!--accordion-->
                                                <div class="add-bor-bot">
                                                    <div class="d-flex">
                                                        <a class="btn btn-primary invoice-acc-btn expense-btn pl-0 collapsed" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6">
                                                            <i class="fa fa-caret-down mr-1 arr-acc" aria-hidden="true"></i>Expense
                                                        </a>
                                                        <div class="ml-auto">
                                                            <p class="status expense d-none">Status: </p>
                                                            <button class="btn dropdown-toggle expense-d last-btn p-0 pr-2 bor-right fs-13 d-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  All
                                                </button>
                                                            <div class="dropdown-menu fs-13" aria-labelledby="dropdownMenuButton" style="">
                                                                <a class="dropdown-item" href="#">All</a>
                                                                <a class="dropdown-item" href="#">Unbilled</a>
                                                                <a class="dropdown-item" href="#">Invoiced</a>
                                                                <a class="dropdown-item" href="#">Reimbursed</a>
                                                                <a class="dropdown-item" href="#">Billable</a>
                                                                <a class="dropdown-item" href="#">Non-Billable</a>
                                                                <a class="dropdown-item" href="#">With Receipts</a>
                                                                <a class="dropdown-item" href="#">Without Receipts</a>
                                                            </div>
                                                            <a href="#" class="add-new ml-3"><i class="fa fa-plus mr-1" aria-hidden="true"></i>Add New</a>
                                                        </div>
                                                    </div>
                                                    <div class="collapse" id="collapseExample6" style="">
                                                        <div class="card card-pad card-rem-bor card-body">
                                                            <!--tables start below-->
                                                            <div class="table-accor ">
                                                                <table class="table mb-0 " id="example6">
                                                                    <thead>
                                                                        <tr class="rem-bor-acc tr-styles">
                                                                            <th class="">Date</th>
                                                                            <th scope="col">Expense Category </th>
                                                                            <th scope="col">Reference#</th>
                                                                            <th scope="col" class="text-right">Amount</th>
                                                                            <th scope="col">Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="mb-0">

                                                                        <tr>
                                                                            <td colspan="6" class="bor-bot">
                                                                                <div class="text-center">
                                                                                    <p class="text-muted mt-5"> There are no expenses <a href="" class=" ml-2">- Add new</a></p>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!--tables ends above-->
                                                            <div class="d-flex mt-3">
                                                                <div class="total d-flex">
                                                                    <a href="#" class="mr-1 click-total">Total Count</a>

                                                                </div>

                                                                <div class="pl-50 d-flex ml-auto">
                                                                    <i class="fa fa-caret-left total-arr mr-2" aria-hidden="true"></i>
                                                                    <div class="one-two"></div>
                                                                    <i class="fa fa-caret-right total-arr ml-2" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--accordion ^-->

                                            </div>
                                            <!--expense code ends above-->

                                            <!--recurring expense code starts below-->
                                            <div class="acc-pad">
                                                <!--accordion-->
                                                <div class="add-bor-bot">
                                                    <div class="d-flex">
                                                        <a class="btn btn-primary invoice-acc-btn rec-exp-btn pl-0 collapsed" data-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample7">
                                                            <i class="fa fa-caret-down mr-1 arr-acc" aria-hidden="true"></i>Recurring Expense
                                                        </a>
                                                        <div class="ml-auto">
                                                            <p class="status rec-exp d-none">Status: </p>
                                                            <button class="btn dropdown-toggle rec-exp-d last-btn p-0 pr-2 bor-right fs-13 d-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                All
                                              </button>
                                                            <div class="dropdown-menu fs-13" aria-labelledby="dropdownMenuButton" style="">
                                                                <a class="dropdown-item" href="#">All</a>
                                                                <a class="dropdown-item" href="#">Active</a>
                                                                <a class="dropdown-item" href="#">Stopped</a>
                                                                <a class="dropdown-item" href="#">Expired</a>
                                                            </div>
                                                            <a href="#" class="add-new ml-3"><i class="fa fa-plus mr-1" aria-hidden="true"></i>Add New</a>
                                                        </div>
                                                    </div>
                                                    <div class="collapse" id="collapseExample7" style="">
                                                        <div class="card card-pad card-rem-bor card-body">
                                                            <!--tables start below-->
                                                            <div class="table-accor ">
                                                                <table class="table mb-0 " id="example7">
                                                                    <thead>
                                                                        <tr class="rem-bor-acc tr-styles">
                                                                            <th class="">Profile Name</th>
                                                                            <th scope="col">Expense Category </th>
                                                                            <th scope="col">Frequency</th>
                                                                            <th scope="col">Last Expense Date</th>
                                                                            <th scope="col">Next Expense Date</th>
                                                                            <th scope="col">Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="mb-0">

                                                                        <tr>
                                                                            <td colspan="6" class="bor-bot">
                                                                                <div class="text-center">
                                                                                    <p class="text-muted mt-5"> There are no recurring expenses <a href="" class=" ml-2">- Add new</a></p>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!--tables ends above-->
                                                            <div class="d-flex mt-3">
                                                                <div class="total d-flex">
                                                                    <a href="#" class="mr-1 click-total">Total Count</a>

                                                                </div>

                                                                <div class="pl-50 d-flex ml-auto">
                                                                    <i class="fa fa-caret-left total-arr mr-2" aria-hidden="true"></i>
                                                                    <div class="one-two"></div>
                                                                    <i class="fa fa-caret-right total-arr ml-2" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--accordion ^-->

                                            </div>
                                            <!--recurring expense code ends above-->

                                            <!--project code starts below-->
                                            <div class="acc-pad">
                                                <!--accordion-->
                                                <div class="add-bor-bot">
                                                    <div class="d-flex">
                                                        <a class="btn btn-primary invoice-acc-btn project-btn pl-0 collapsed" data-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample8">
                                                            <i class="fa fa-caret-down mr-1 arr-acc" aria-hidden="true"></i>Project
                                                        </a>
                                                        <div class="ml-auto">
                                                            <p class="status project d-none">Status: </p>
                                                            <button class="btn dropdown-toggle project-d last-btn p-0 pr-2 bor-right fs-13 d-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                All
                                              </button>
                                                            <div class="dropdown-menu fs-13" aria-labelledby="dropdownMenuButton" style="">
                                                                <a class="dropdown-item" href="#">All</a>
                                                                <a class="dropdown-item" href="#">Active</a>
                                                                <a class="dropdown-item" href="#">Inactive</a>
                                                            </div>
                                                            <a href="#" class="add-new ml-3"><i class="fa fa-plus mr-1" aria-hidden="true"></i>Add New</a>
                                                        </div>
                                                    </div>
                                                    <div class="collapse" id="collapseExample8" style="">
                                                        <div class="card card-pad card-rem-bor card-body">
                                                            <!--tables start below-->
                                                            <div class="table-accor ">
                                                                <table class="table mb-0 " id="example8">
                                                                    <thead>
                                                                        <tr class="rem-bor-acc tr-styles">
                                                                            <th class="">Project Name</th>
                                                                            <th scope="col">Billing Method </th>
                                                                            <th scope="col">Rate</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="mb-0">

                                                                        <tr>
                                                                            <td colspan="6" class="bor-bot">
                                                                                <div class="text-center">
                                                                                    <p class="text-muted mt-5"> There are no projects <a href="" class=" ml-2">- Add new</a></p>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!--tables ends above-->
                                                            <div class="d-flex mt-3">
                                                                <div class="total d-flex">
                                                                    <a href="#" class="mr-1 click-total">Total Count</a>

                                                                </div>

                                                                <div class="pl-50 d-flex ml-auto">
                                                                    <i class="fa fa-caret-left total-arr mr-2" aria-hidden="true"></i>
                                                                    <div class="one-two"></div>
                                                                    <i class="fa fa-caret-right total-arr ml-2" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--accordion ^-->

                                            </div>
                                            <!--project code ends above-->

                                            <!--journals code starts below-->
                                            <div class="acc-pad">
                                                <!--accordion-->
                                                <div class="add-bor-bot">
                                                    <div class="d-flex">
                                                        <a class="btn btn-primary invoice-acc-btn journals-btn pl-0 collapsed" data-toggle="collapse" href="#collapseExample9" role="button" aria-expanded="false" aria-controls="collapseExample9">
                                                            <i class="fa fa-caret-down mr-1 arr-acc" aria-hidden="true"></i>Journals
                                                        </a>
                                                        <div class="ml-auto">
                                                            <a href="#" class="add-new ml-3"><i class="fa fa-plus mr-1" aria-hidden="true"></i>Add New</a>
                                                        </div>
                                                    </div>
                                                    <div class="collapse" id="collapseExample9" style="">
                                                        <div class="card card-pad card-rem-bor card-body">
                                                            <!--tables start below-->
                                                            <div class="table-accor ">
                                                                <table class="table mb-0 " id="example9">
                                                                    <thead>
                                                                        <tr class="rem-bor-acc tr-styles">
                                                                            <th class="">Date</th>
                                                                            <th scope="col">Journal#</th>
                                                                            <th scope="col">Reference Number</th>
                                                                            <th scope="col" class="text-right">Debit</th>
                                                                            <th scope="col" class="text-right">Credit</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="mb-0">

                                                                        <tr>
                                                                            <td colspan="6" class="bor-bot">
                                                                                <div class="text-center">
                                                                                    <p class="text-muted mt-5"> There are no journals created</p>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!--tables ends above-->
                                                            <div class="d-flex mt-3">
                                                                <div class="total d-flex">
                                                                    <a href="#" class="mr-1 click-total">Total Count</a>

                                                                </div>

                                                                <div class="pl-50 d-flex ml-auto">
                                                                    <i class="fa fa-caret-left total-arr mr-2" aria-hidden="true"></i>
                                                                    <div class="one-two"></div>
                                                                    <i class="fa fa-caret-right total-arr ml-2" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--accordion ^-->

                                            </div>
                                            <!--journals code ends above-->

                                            <!--bill code starts below-->
                                            <div class="acc-pad">
                                                <!--accordion-->
                                                <div class="add-bor-bot">
                                                    <div class="d-flex">
                                                        <a class="btn btn-primary invoice-acc-btn bill-btn pl-0 collapsed" data-toggle="collapse" href="#collapseExample10" role="button" aria-expanded="false" aria-controls="collapseExample10">
                                                            <i class="fa fa-caret-down mr-1 arr-acc" aria-hidden="true"></i>Bill
                                                        </a>
                                                        <div class="ml-auto">
                                                            <p class="status bill d-none">Status: </p>
                                                            <button class="btn dropdown-toggle bill-d last-btn p-0 pr-2  fs-13 d-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                All
                                              </button>
                                                            <div class="dropdown-menu fs-13" aria-labelledby="dropdownMenuButton" style="">
                                                                <a class="dropdown-item" href="#">All</a>
                                                                <a class="dropdown-item" href="#">Open</a>
                                                                <a class="dropdown-item" href="#">Overdue</a>
                                                                <a class="dropdown-item" href="#">Unpaid</a>
                                                                <a class="dropdown-item" href="#">Partially Paid</a>
                                                                <a class="dropdown-item" href="#">Paid</a>
                                                                <a class="dropdown-item" href="#">Void</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="collapse" id="collapseExample10" style="">
                                                        <div class="card card-pad card-rem-bor card-body">
                                                            <!--tables start below-->
                                                            <div class="table-accor ">
                                                                <table class="table mb-0 " id="example10">
                                                                    <thead>
                                                                        <tr class="rem-bor-acc tr-styles">
                                                                            <th class="">Date</th>
                                                                            <th scope="col">Bill# </th>
                                                                            <th scope="col">Reference#</th>
                                                                            <th scope="col">Vendor Name</th>
                                                                            <th scope="col" class="text-right">Amount</th>
                                                                            <th scope="col" class="text-right">Balance Due</th>
                                                                            <th scope="col">Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="mb-0">

                                                                        <tr>
                                                                            <td colspan="7" class="bor-bot">
                                                                                <div class="text-center">
                                                                                    <p class="text-muted mt-5"> There are no Bills</p>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!--tables ends above-->
                                                            <div class="d-flex mt-3">
                                                                <div class="total d-flex">
                                                                    <a href="#" class="mr-1 click-total">Total Count</a>

                                                                </div>

                                                                <div class="pl-50 d-flex ml-auto">
                                                                    <i class="fa fa-caret-left total-arr mr-2" aria-hidden="true"></i>
                                                                    <div class="one-two"></div>
                                                                    <i class="fa fa-caret-right total-arr ml-2" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--accordion ^-->

                                            </div>
                                            <!--bill code ends above-->

                                            <!--credit node code starts below-->
                                            <div class="acc-pad">
                                                <!--accordion-->
                                                <div class="add-bor-bot">
                                                    <div class="d-flex">
                                                        <a class="btn btn-primary invoice-acc-btn credit-note-btn pl-0 collapsed" data-toggle="collapse" href="#collapseExample11" role="button" aria-expanded="false" aria-controls="collapseExample11">
                                                            <i class="fa fa-caret-down mr-1 arr-acc" aria-hidden="true"></i>Credit Note
                                                        </a>
                                                        <div class="ml-auto">
                                                            <p class="status credit-note d-none">Status: </p>
                                                            <button class="btn dropdown-toggle credit-note-d last-btn p-0 pr-2 bor-right fs-13 d-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              All
                                            </button>
                                                            <div class="dropdown-menu fs-13" aria-labelledby="dropdownMenuButton" style="">
                                                                <a class="dropdown-item" href="#">All</a>
                                                                <a class="dropdown-item" href="#">Open</a>
                                                                <a class="dropdown-item" href="#">Closed</a>
                                                                <a class="dropdown-item" href="#">Void</a>
                                                            </div>
                                                            <a href="#" class="add-new ml-3"><i class="fa fa-plus mr-1" aria-hidden="true"></i>Add New</a>
                                                        </div>
                                                    </div>
                                                    <div class="collapse" id="collapseExample11" style="">
                                                        <div class="card card-pad card-rem-bor card-body">
                                                            <!--tables start below-->
                                                            <div class="table-accor ">
                                                                <table class="table mb-0 " id="example11">
                                                                    <thead>
                                                                        <tr class="rem-bor-acc tr-styles">
                                                                            <th class="">Credit Date</th>
                                                                            <th scope="col">Credit Note#</th>
                                                                            <th scope="col">Reference#</th>
                                                                            <th scope="col" class="text-right">Balance</th>
                                                                            <th scope="col" class="text-right">Amount</th>
                                                                            <th scope="col">Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="mb-0">

                                                                        <tr>
                                                                            <td colspan="6" class="bor-bot">
                                                                                <div class="text-center">
                                                                                    <p class="text-muted mt-5"> There are no credit notes <a href="" class=" ml-2">- Add new</a></p>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!--tables ends above-->
                                                            <div class="d-flex mt-3">
                                                                <div class="total d-flex">
                                                                    <a href="#" class="mr-1 click-total">Total Count</a>

                                                                </div>

                                                                <div class="pl-50 d-flex ml-auto">
                                                                    <i class="fa fa-caret-left total-arr mr-2" aria-hidden="true"></i>
                                                                    <div class="one-two"></div>
                                                                    <i class="fa fa-caret-right total-arr ml-2" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--accordion ^-->

                                            </div>
                                            <!--credit note code ends above-->


                                        </div>
                                    </div>

                                    <!--sales tab ends above-->

                                    <!--related-list tab starts below-->
                                    <div class="tab-pane fade heigh-vh-rel" id="list" role="tabpanel" aria-labelledby="list-tab">
                                        <div class="text-center text-muted mt-50">
                                            There are no transactions available
                                        </div>
                                    </div>
                                    <!--related-list tab ends above-->


                                    <!--mail tab starts below-->
                                    <div class="tab-pane fade heigh-vh" id="mails" role="tabpanel" aria-labelledby="mails-tab">
                                        <div class="d-flex system-mails">
                                            <div class="dropdown cust-new-display">
                                                <button class="btn btn-secondary  edit-btn dropdown-toggle rel-tab-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Snail Mail History
                                                </button>
                                                <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item spreed-sheet-titles" href="#">System Mails</a>
                                                    <a class="dropdown-item spreed-sheet-titles" href="#">Snail Mail History</a>
                                                </div>
                                            </div>
                                            <div class="ml-auto">
                                                <button class="btn  dropdown-toggle last-btn fs-13" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Connect your mail account
                                              </button>
                                                <div class="dropdown-menu fs-13" aria-labelledby="dropdownMenuButton" style="">
                                                    <a class="dropdown-item" href="#">Outlook</a>
                                                    <a class="dropdown-item" href="#">Zoho Mail</a>
                                                    <a class="dropdown-item" href="#">Link with work account</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center p-50">
                                            <i class="fa fa-exclamation-triangle triangle-yellow mr-1" aria-hidden="true"> </i>
                                            <div class="no-mails">No emails sent.</div>
                                        </div>
                                    </div>
                                    <!--mail tab ends above-->

                                    <!--statement tab starts below-->
                                    <div class="tab-pane fade" id="statement" role="tabpanel" aria-labelledby="statement-tab">
                                        <div class="row p-20 m-0">
                                            <div class="col-md-3 pr-2 p-0">
                                                <button class="btn btn-secondary  edit-btn dropdown-toggle month-btn w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <i class="glyphicon glyphicon-calendar fa fa-calendar mr-2"></i><span class="mr-4">This month</span>
                                            </button>
                                                <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item spreed-sheet-titles statement-dropdown" href="#">Today</a>
                                                    <a class="dropdown-item spreed-sheet-titles statement-dropdown" href="#">This Week</a>
                                                    <a class="dropdown-item spreed-sheet-titles statement-dropdown active" href="#">This Month</a>
                                                    <a class="dropdown-item spreed-sheet-titles statement-dropdown" href="#">This Quarter</a>
                                                    <a class="dropdown-item spreed-sheet-titles statement-dropdown" href="#">This Year</a>
                                                    <a class="dropdown-item spreed-sheet-titles statement-dropdown" href="#">Yesterday</a>
                                                    <a class="dropdown-item spreed-sheet-titles statement-dropdown" href="#">Previous Week</a>
                                                    <a class="dropdown-item spreed-sheet-titles statement-dropdown" href="#">Previous Month</a>
                                                    <a class="dropdown-item spreed-sheet-titles statement-dropdown" href="#">Previous Quarter</a>
                                                    <a class="dropdown-item spreed-sheet-titles statement-dropdown" href="#">Previous Year</a>
                                                    <a class="dropdown-item spreed-sheet-titles statement-dropdown" href="#">Custom</a>
                                                </div>
                                            </div>

                                            <div class="col-md-2 p-0">
                                                <button class="btn btn-secondary  edit-btn dropdown-toggle month-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <span class="text-muted">Filter By</span>:All 
                                              </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                    <a class="dropdown-item spreed-sheet-titles" href="#">System Mails</a>
                                                    <a class="dropdown-item spreed-sheet-titles" href="#">Snail Mail History</a>
                                                </div>
                                            </div>

                                            <div class="c0l-md-7 ml-auto p-0">
                                                <button type="button" class="btn line-btn edit-btn   rem-hover comm1 mr-10" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Print">
                                                  <i class="fa fa-print mr-1" aria-hidden="true"></i>
                                                </button>

                                                <button type="button" class="btn line-btn edit-btn   rem-hover comm1 mr-10" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="PDF">
                                                    <i class="fa fa-file-pdf-o mr-1" aria-hidden="true"></i>
                                                </button>

                                                <button type="button" class="btn line-btn edit-btn   rem-hover comm1 mr-10" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="XLS">
                                                    <i class="fa fa-file-text-o mr-1" aria-hidden="true"></i>
                                              </button>

                                                <button type="button" class="btn offline">
                                                <i class="fa fa-envelope-o mr-1" aria-hidden="true"></i> Send Email
                                              </button>
                                            </div>
                                        </div>

                                        <div class="text-center cus-sec">
                                            <div class="no-mails">Customer Statement for arjun reddy</div>
                                            <div class="from">From 01/04/2021 To 30/04/2021</div>
                                        </div>

                                        <!--google-meet section starts below-->
                                        <div class="google-stat-sec">
                                            <div class="google-sec-header">
                                                <div class="dropdown float-right btn-cust1 cust-btn d-none">
                                                    <button class="btn btn-secondary  offline bor-rad" type="button" id="dropdownMenuButton">
                                                <img src="<?php echo base_url()?>/assets/images/setting-white.png" class="img-fluid mr-1">Customize
                                              </button>
                                                </div>
                                            </div>
                                            <div class="google-sec-body">

                                                <div class="row m-0">
                                                    <div class="col-md-6 p-0">
                                                        <img src="<?php echo base_url()?>/assets/images/google-meet.png" class="stat-google">
                                                    </div>

                                                    <div class="col-md-6 my-auto p-0">
                                                        <p class="birds-eye-stat text-right">The Birds Eye</p>
                                                        <p class="kar text-right">Karnataka</p>
                                                        <p class="kar text-right">India</p>
                                                    </div>
                                                </div>
                                                <div class="row m-0">
                                                    <div class="col-md-8 my-auto p-0">
                                                        <p class="to">To</p>
                                                        <a href="#">arjun reddy</a>
                                                    </div>
                                                    <div class="col-md-4 ml-auto p-0">
                                                        <div class="ml-25">
                                                            <h4 class="stat">Statement of Accounts</h4>
                                                            <p class="stat-date">01/04/2021 To 30/04/2021</p>
                                                        </div>
                                                        <td class="account-summary">
                                                            <table class="accounts-section">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="accounts-summary-text table-bg" colspan="5">Account Summary</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="accounts-summary-text opening-text">Opening Balance</td>
                                                                        <td class="opening-rs">₹ 2,32,623.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="accounts-summary-text invoice-text">Invoiced Amount</td>
                                                                        <td class="opening-rs">₹ 0.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="accounts-summary-text">Amount Received</td>
                                                                        <td class="amount-rs">₹ 0.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="accounts-summary-text balance-text">Balance Due</td>
                                                                        <td class="opening-rs bal-bor">₹ 2,32,623.00</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>

                                                    </div>
                                                </div>
                                                <!--transaction code starts below-->
                                                <div class="transaction-table">
                                                    <table class="table table-borderless">
                                                        <thead>
                                                            <tr class="transaction-header">
                                                                <th scope="col" class="pl-1">Date</th>
                                                                <th scope="col">Transactions</th>
                                                                <th scope="col">Details</th>
                                                                <th scope="col" class="text-right">Amount</th>
                                                                <th scope="col" class="text-right">Payments</th>
                                                                <th scope="col" class="text-right pr-1">Balance</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="tr-bor">
                                                                <th scope="row" class="td-pad">01/04/2021</th>
                                                                <td class="td-pad">***Opening <br>Balance***</td>
                                                                <td class="td-pad"></td>
                                                                <td class="td-pad text-right">2,32,623.00 </td>
                                                                <td class="td-pad"></td>
                                                                <td class="td-pad text-right">2,32,623.00 </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <table class="table table-borderless">
                                                        <thead>

                                                        </thead>
                                                        <tbody>

                                                            <tr class="">
                                                                <td></td>
                                                                <td class="w-50">
                                                                    <table class="w-100">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="td-pad text-right w-50"><b>Balance Due</b></td>
                                                                                <td class="td-pad text-right">₹ 2,32,623.00</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>

                                                    <div class="transaction-footer">
                                                        <div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <!--transaction code ends above-->
                                            </div>

                                        </div>
                                        <!--google-meet sec ends above-->
                                    </div>
                                    <!--statement tab ends above-->


                                </div>
                                <!--tab-content-div-->
                            </div>


                        </div>
                    </div>




                    <!-- Option 2: Separate Popper and Bootstrap JS -->

                    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->

                   <?php $this->load->view('admin/inc/footer'); ?>


</body>

</html>