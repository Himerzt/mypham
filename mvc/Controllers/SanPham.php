<?php
    class SanPham extends controller{
        function show()
        {
            $model = $this->model("SanPhamModel");
            $brand = $model->getBrand();
            $origin = $model->getOrigin();
            $color = $model->getColor();
            $size = $model->getSize();
            $category = $model->getCategories();

            $IDLoai = isset($_GET["IDLoai"]) ? $_GET["IDLoai"] : null;
            $labelCategory = "";

            if($IDLoai != null)
            {
                $labelCategory = $model->getCategory($IDLoai);
            }

            self::view("master",
                    [  
                        "page" => "SanPham",
                        "brand" => $brand,
                        "origin" => $origin,
                        "color" => $color,
                        "size" => $size, 
                        "category" => json_decode($category,true),
                        "title" => "Sản phẩm",
                        "labelCategory" => $labelCategory != "" ? json_decode($labelCategory, true)[0]["tenTL"] : ""
                    ]);           
        }

        function getCategories()
        {
            $model = $this->model("SanPhamModel");

            $result = $model->getCategories();

            echo $result;
        }

        function getCategory($IDLoai){
            $model = $this->model("SanPhamModel");

            $result = $model->getCategory($IDLoai);

            echo $result;
        }
    }
