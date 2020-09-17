<?php
namespace CustomWebReceipt\Inc;

use Tendoo_Module;

class Filters extends Tendoo_Module
{
    public function custom_receipt_path( $path )
    {
        return '../modules/custom-web-receipt/views/receipt';
    }
}