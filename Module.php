<?php
namespace CustomWebReceipt;

use CustomWebReceipt\Inc\Filters;
use Tendoo_Module;

class Module extends Tendoo_Module
{
    public function __construct()
    {
        parent::__construct();
        
        $this->filters  =   new Filters;

        $this->events->add_filter( 'nexo_receipt_theme_path', [ $this->filters, 'custom_receipt_path' ]);
    }
}

new Module;