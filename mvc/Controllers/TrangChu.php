<?php
    class TrangChu extends Controller
    {
        function show()
        {
            $temp = self::model("SanPhamModel");
            $result = $temp->saleHome();
            $proDuctSale = $temp->productSale();
            $bestProDuctSelling = $temp->bestProductSelling();
            $getStarProduct = $temp->getStarProduct();
           
            
            self::view("master",
                ["product" => $result,
                 "page" => "TrangChu",
                 "productSale" => $proDuctSale,
                 "bestProSelling" => $bestProDuctSelling,
                 "star"=> json_decode($getStarProduct,true),
            
                ]
            );
        }

        function loadBannerEvent()
        {
            $result = $this->modelAdmin("EventModel")->apiListEvent();

            echo $result;
        }
    }
?>