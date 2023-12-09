<section class="BreadCrum closeSearch">

</section>

<div class="BreadCrum__Title">
        <a href="TrangChu"><i class="fa-solid fa-house"></i>Trang chủ</a>
        <span class="Header__Top-line color--Brown">|</span>
        <a href="SanPham"><?php echo $data["title"] ?></a>
        <?php
        if(isset($data["labelCategory"]))
        {
           if($data["labelCategory"] != "")
          {?>
                <span class="Header__Top-line color--Brown">|</span>
                <a href=""><?php echo $data["labelCategory"] ?></a>
        <?php  }}
        ?>

</div>