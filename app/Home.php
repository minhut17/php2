<?php
namespace app;
class Home{
    public static function index():string{
        echo "Home";
    }
}
class Invoices{
    public Static function index():string {
        echo "Invoices";
    }
    public static function create():string {
        echo 'create Incvoice';
    }
}