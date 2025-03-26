<?php
class DefaultController
{
    public function index()
    {
        echo "HELLO HUTECH";
    }
    
    public function about()
    {
        echo "Đây là trang giới thiệu";
    }
    
    public function contact()
    {
        echo "Đây là trang liên hệ";
    }
    
    public function notFound()
    {
        echo "404 - Không tìm thấy trang";
    }
}
