<?php

use app\models\Product;
use UK\modificators\UK_Controller;
use UK\modificators\UK_Log;

class HomDatae extends UK_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function pageLoad(){
        Product::connectByController($this);
        $products = Product::get();
        $this->load($this->views_file->templates->header,[]);
        $this->load($this->views_file->templates->home,['allProducts' => $products]);
        $this->load($this->views_file->templates->footer,[]);
    }
}
