<?php
header("Access-Control-Allow-Origin: *");


class ThanhToan extends controller
{
    function show()
    {
        $this->view("master", [
            "page" => "ThanhToan",
            "title" => "Thanh toán"
        ]);
    }

    function discount()
    {
        $code = isset($_POST["code"]) ? $_POST["code"] : null;

        $model = $this->model("ThanhToanModel");

        $result = $model->discount($code);

        echo $result;
    }

   
}
