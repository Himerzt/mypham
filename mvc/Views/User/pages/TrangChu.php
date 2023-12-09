<dive class="Main">
    <section class="section__1">
        <i class="fa-solid fa-angle-left left left__Banner"></i>

        <div class="section__1--slide">
            <div class="slide--subItem">
                <div class="section__1--Title">
                    <span>Làm đẹp tự nhiên</span>
                    <h2>Mỹ phẩm xuất xứ từ Hàn Quốc</h2>
                    <p>Giảm 20% khi mua bất kì sản phẩm</p>
                   
                </div>
            </div>
            <div class="slide--subItem">
                <div class="section__1--Title">
                    <span>Làm đẹp tự nhiên</span>
                    <h2>Mỹ phẩm xuất xứ từ Hàn Quốc</h2>
                    <p>Giảm 20% khi mua bất kì sản phẩm</p>
                   
                </div>
            </div>
            <div class="slide--subItem">
                <div class="section__1--Title">
                    <span>Làm đẹp tự nhiên</span>
                    <h2>Mỹ phẩm xuất xứ từ Hàn Quốc</h2>
                    <p>Giảm 20% khi mua bất kì sản phẩm</p>
                   
                </div>
            </div>
        </div>

        <i class="fa-solid fa-angle-right right right__Banner"></i>
    </section>

    <input type="checkbox" id="modal-cart__overplay" class="modal-cart__Input">
    <input type="checkbox" id="quickView__overplay" class="quickView__Input">

    <label for="modal-cart__overplay" class="cart-overplay"></label>
    <label for="quickView__overplay" class="quickView-overplay"></label>

 

    <div class="modal-cart"></div>

    <div class="quickView"></div>

    <div class="notifyFavourite"></div>

    <section class="section__2">
        <div class="section__2__Brand">
            <div class="section__2__Brand__Name Title__All">
                <div class="Title__Name">
                    <span>Mỹ phẩm</span>
                    <h2>BRAND</h2>
                </div>
            </div>

            <div class="section__2__Brand__Contain">

                <i class="fa-solid fa-angle-left left leftBrand"></i>

                <div class="Iteams__Brand">
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand1_ea4f5ee840ff4f8188e70db81dd062e0.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand4_f1b4ed755c3f4ba28e996a0316c87fd9.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand3_de97619a12cd47a7bd4796d99dd9d6f9.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand6_fca2b08e8f8a4314a50b9898848e28b2.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand2_ebcd27d7dd61405da0cf5cfff9b46b9c.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand5_192461e3d71a4852be4c012ccf604103.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand3_de97619a12cd47a7bd4796d99dd9d6f9.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand1_ea4f5ee840ff4f8188e70db81dd062e0.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand4_f1b4ed755c3f4ba28e996a0316c87fd9.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand2_ebcd27d7dd61405da0cf5cfff9b46b9c.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand5_192461e3d71a4852be4c012ccf604103.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand3_de97619a12cd47a7bd4796d99dd9d6f9.png"
                            alt="">
                    </div>
                </div>

                <i class="fa-solid fa-angle-right right rigthBrand"></i>

            </div>
        </div>
    </section>


    <section class="section__5">
        <div class="section__5__Contain">
            <div class="Title__All Title__All--title">
                <div class="Title__Name">
                    <span>Khuyến mãi</span>
                    <h2>FLASH SALE</h2>
                </div>
            </div>

            <div class="section__5__Product__Sale">
                <div class="section__5__Items section__7__Items">
                    <i class="fa-solid fa-angle-left left product__Left"></i>
                    <div class="Item__Sale">
                        <?php
                        while ($row =  mysqli_fetch_array($data['productSale'])) {
                            $giaGiam = $row["giaSP"] * ($row["giaGiam"] / 100);
                            $total = $row["giaSP"] - $giaGiam;
                        ?>
                        <div class="prodDuct__sale proDuct__Lenght">
                            <div class="User__Choose">
                                <div class="Choose User__Choose__Cart">
                                    <a data-value='<?php echo $row["IDSP"] ?>'
                                        data-size='<?php echo $row["size"] ?>'
                                        class='Cart--shopping'>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>

                                <div class="Choose User__Choose__Look">
                                    <a data-idsp='<?php echo $row["IDSP"] ?>'
                                        class='Cart--Look'>
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                </div>
                                <div class="Choose User__Choose__Love">
                                    <a class='choose--Love'
                                        data-id='<?php echo $row["IDSP"] ?>'>
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="total__Sale total__Sale--newTotal">
                                <?php echo $row["giaGiam"] . "%" ?></div>

                            <div class="product-Contain product-Contain__Sale">
                                <div class="product-Contain__Image">
                                    <a
                                        href="ChiTietSanPham&IDLoai=<?php echo $row["IDLoai"] ?>&ID=<?php echo $row["IDSP"] ?>">
                                        <img class="prodDuct__sale__Image prodDuct__sale__Image--sale prodDuct__sale__Image--new"
                                            src="<?php echo $row['image'] ?>" alt="">
                                    </a>
                                </div>

                                <div class="product-Contain__Content">
                                    <a class="product-Contain__Content--Top"
                                        href="ChiTietSanPham&IDLoai=<?php echo $row["IDLoai"] ?>&ID=<?php echo $row["IDSP"] ?>">
                                        <?php echo $row['tenSP'] ?>
                                    </a>

                                    <div class="product__Total">
                                        <div class="reduce__Price">
                                            <?php echo number_format($total, 0, ',', '.'); ?><span
                                                class="total">đ</span>
                                        </div>
                                        <div class="original__price">
                                            <?php echo number_format($row['giaSP'], 0, ',', '.'); ?><span
                                                class="total">đ</span></div>
                                    </div>

                                    <div class="product-Contain__Review">
                                        <div class="stars">
                                            <input checked=true
                                                class='star-show star-show__Review star-show-0'
                                                id='star-show-0' type='radio' />
                                            <label
                                                class='star-show star-show__Review star-show-0'
                                                for='star-show-0'></label>
                                            <input checked=true
                                                class='star-show star-show__Review star-show-1'
                                                id='star-show-1' type='radio' />
                                            <label
                                                class='star-show star-show__Review star-show-1'
                                                for='star-show-1'></label>
                                            <input checked=true
                                                class='star-show star-show__Review star-show-2'
                                                id='star-show-2' type='radio' />
                                            <label
                                                class='star-show star-show__Review star-show-2'
                                                for='star-show-2'></label>
                                            <input checked=true
                                                class='star-show star-show__Review star-show-3'
                                                id='star-show-3' type='radio' />
                                            <label
                                                class='star-show star-show__Review star-show-3'
                                                for='star-show-3'></label>
                                            <input checked=true
                                                class='star-show star-show__Review star-show-4'
                                                id='star-show-4' type='radio' />
                                            <label
                                                class='star-show star-show__Review star-show-4'
                                                for='star-show-4'></label>
                                        </div>
                                        <div class="amount-Stars">
                                            <?php
                                                foreach ($data["star"] as $item) {
                                                    if ($row["ID"] == $item["IDSP"]) { ?>
                                            <p>( <?php echo $item["amountStar"] ?> )</p>
                                            <?php }
                                                }
                                                ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php    } ?>
                    </div>

                    <i class="fa-solid fa-angle-right right product__Right"></i>

                </div>
            </div>
        </div>
    </section>
 

    <section class="section__7">
        <div class="section__7__Contain">
            <div class="Title__All Title__All--title">
                <div class="Title__Name">
                    <span>Mỹ phẩm</span>
                    <h2>Best Seller</h2>
                </div>
            </div>

            <div class="section__5__Product__Sale">
                <div class="section__5__Items">
                    <div class="Item--Sale">
                        <?php
                        while ($row =  mysqli_fetch_array($data['bestProSelling'])) {
                            $giaGiam = $row["giaSP"] * ($row["giaGiam"] / 100);
                            $total = $row["giaSP"] - $giaGiam;
                        ?>
                        <div class="prodDuct__sale Item__proDuct--sale">
                            <div class="User__Choose">
                                <div class="Choose User__Choose__Cart">
                                    <a data-value='<?php echo $row["ID"] ?>'
                                        data-size='<?php echo $row["size"] ?>'
                                        class='Cart--shopping'>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>

                                <div class="Choose User__Choose__Look">
                                    <a data-idsp='<?php echo $row["ID"] ?>'
                                        class='Cart--Look'>
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                </div>
                                <div class="Choose User__Choose__Love">
                                    <a class='choose--Love'
                                        data-id='<?php echo $row["ID"] ?>'>
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <?php
                                if ($row["giaGiam"] > 0) { ?>
                            <div class="total__Sale total__Sale--newTotal">
                                <?php echo $row["giaGiam"] . "%" ?></div>
                            <?php }
                                ?>

                            <div class="product-Contain product-Contain__BestSeller">
                                <div class="product-Contain__Image">
                                    <a
                                        href="ChiTietSanPham&IDLoai=<?php echo $row["IDLoai"] ?>&ID=<?php echo $row["ID"] ?>">
                                        <img class="prodDuct__sale__Image prodDuct__sale__Image--sale prodDuct__sale__Image--new"
                                            src="<?php echo $row['image'] ?>" alt="">
                                    </a>
                                </div>

                                <div class="product-Contain__Content">
                                    <a
                                        href="ChiTietSanPham&IDLoai=<?php echo $row["IDLoai"] ?>&ID=<?php echo $row["ID"] ?>">
                                        <?php echo $row['tenSP'] ?>
                                    </a>

                                    <div class="product__Total">
                                        <div class="reduce__Price">
                                            <?php echo number_format($total, 0, ',', '.'); ?><span
                                                class="total">đ</span>
                                        </div>

                                        <?php
                                            if ($row["giaGiam"] > 0) { ?>
                                        <div class="original__price">
                                            <?php echo number_format($row['giaSP'], 0, ',', '.'); ?><span
                                                class="total">đ</span></div>
                                        <?php } ?>
                                    </div>

                                    <div class="product-Contain__Review">
                                        <div class="stars">
                                            <input checked=true
                                                class='star-show star-show__Review star-show-0'
                                                id='star-show-0' type='radio' />
                                            <label
                                                class='star-show star-show__Review star-show-0'
                                                for='star-show-0'></label>
                                            <input checked=true
                                                class='star-show star-show__Review star-show-1'
                                                id='star-show-1' type='radio' />
                                            <label
                                                class='star-show star-show__Review star-show-1'
                                                for='star-show-1'></label>
                                            <input checked=true
                                                class='star-show star-show__Review star-show-2'
                                                id='star-show-2' type='radio' />
                                            <label
                                                class='star-show star-show__Review star-show-2'
                                                for='star-show-2'></label>
                                            <input checked=true
                                                class='star-show star-show__Review star-show-3'
                                                id='star-show-3' type='radio' />
                                            <label
                                                class='star-show star-show__Review star-show-3'
                                                for='star-show-3'></label>
                                            <input checked=true
                                                class='star-show star-show__Review star-show-4'
                                                id='star-show-4' type='radio' />
                                            <label
                                                class='star-show star-show__Review star-show-4'
                                                for='star-show-4'></label>
                                        </div>
                                        <div class="amount-Stars">
                                            <?php
                                                foreach ($data["star"] as $item) {
                                                    if ($row["ID"] == $item["IDSP"]) { ?>
                                            <p>( <?php echo $item["amountStar"] ?> )</p>
                                            <?php }
                                                }
                                                ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php    } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section__11">
        <div class="section__11__AboutUs">
            <div class="Title__All Title__All--title">
                <div class="Title__Name">
                    <span>Về Chúng Tôi</span>
                    <h2>KAT JEWELRY</h2>
                </div>
            </div>

            <div class="About">
                <div class="About_slider">
                    <div class="About_item">
                        <div class="About_item-desc">
                            <p></p>
                        </div>
                        <img src="https://bizweb.dktcdn.net/100/302/551/themes/758295/assets/testimonial1.jpg?1699007615400"
                            alt="">
                        <div class="About_item-title">
                            <h4>Đạt 100.000+ khách hàng</h4>
                        </div>
                    </div>

                    <div class="About_item">
                        <div class="About_item-desc">
                            <p></p>
                        </div>
                        <img src="https://bizweb.dktcdn.net/100/302/551/themes/758295/assets/testimonial3.jpg?1699007615400"
                            alt="">
                        <div class="About_item-title">
                            <h4>10 năm hoạt động</h4>
                        </div>
                    </div>

                    <div class="About_item">
                        <div class="About_item-desc">
                            <p></p>
                        </div>
                        <img src="https://bizweb.dktcdn.net/100/302/551/themes/758295/assets/testimonial2.jpg?1699007615400"
                            alt="">
                        <div class="About_item-title">
                            <h4>15 Cửa hàng toàn quốc</h4>
                        </div>
                    </div>

                    <ul class="dots">
                        <li class="dots_active"></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section__12">
        <div class="section__12__Follow">
            <div class="Title__All Title__All--title">
                <div class="Title__Name">
                    <span>Follow On Instagram</span>
                    <h2>#Katjewelry</h2>
                </div>
            </div>
            <div class="Follow">
                <div class="Follow_item">
                    <div class="Follow_item_img">
                        <img src="https://file.hstatic.net/200000259653/file/img-gal10-1_add65d1fa97a4dd581d813de28ba2b6c.jpg"
                            alt="">
                    </div>
                    <div class="Follow_item_img">
                        <img src="https://file.hstatic.net/200000259653/file/img-gal2-1_a1435181c26944658ef1f0b2ff518b21.jpg"
                            alt="">
                    </div>
                    <div class="Follow_item_img">
                        <img src="https://bizweb.dktcdn.net/100/302/551/themes/758295/assets/instagram_image_5.jpg?1699007615400"
                            alt="">
                    </div>
                    <div class="Follow_item_img">
                        <img src="https://file.hstatic.net/200000259653/file/img-gal5-1_a91d6a2672a54b1bab1a1b24a2ca3ec3.jpg"
                            alt="">
                    </div>
                    <div class="Follow_item_img">
                        <img src="https://file.hstatic.net/200000259653/file/img-gal3-1_b23d9a32015a4ef1941689bac874790f.jpg"
                            alt="">
                    </div>
                    <div class="Follow_item_img">
                        <img src="https://file.hstatic.net/200000259653/file/img-gal8-1_06836180b92e4aef8e96068ee19398f1.jpg"
                            alt="">
                    </div>
                    <div class="Follow_item_img">
                        <img src="https://file.hstatic.net/200000259653/file/img-gal7-1_115d77a33684423996ab21e7b55ff43e.jpg"
                            alt="">
                    </div>
                    <div class="Follow_item_img">
                        <img src="https://file.hstatic.net/200000259653/file/img-gal6-1_f7e85ed4fae845d9b0d074dfcabfd9ba.jpg"
                            alt="">
                    </div>
                    <div class="Follow_item_img">
                        <img src="https://file.hstatic.net/200000259653/file/img-gal1-1_9e668bc0ef2649e9a682360388ac6dd7.jpg"
                            alt="">
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="section__10">
        <div class="section__10__Support">
            <div class="Support">
                <div>
                    <i class="fa-solid fa-truck-moving"></i>
                </div>
                <div class="Support__Content">
                    <h3>MIỄN PHÍ VẬN CHUYỂN</h3>
                    <p>Nhận hàng trong vòng 3 ngày</p>
                </div>
            </div>

            <div class="Support">
                <div>
                    <i class="fa-solid fa-trophy"></i>
                </div>
                <div class="Support__Content">
                    <h3>CHẤT LƯỢNG ĐẢM BẢO</h3>
                    <p>Top 10 thương hiệu uy tín 2017</p>
                </div>
            </div>

            <div class="Support">
                <div>
                    <i class="fa-solid fa-headphones-simple"></i>
                </div>
                <div class="Support__Content">
                    <h3>HỖ TRỢ 24/7</h3>
                    <p>Gọi điện - Zalo - iMessage - SMS</p>
                </div>
            </div>

            <div class="Support">
                <div>
                    <i class="fa-solid fa-rotate-left"></i>
                </div>
                <div class="Support__Content">
                    <h3>ĐỔI TRẢ DỄ DÀNG</h3>
                    <p>Trả lại hàng nếu không ưng ý</p>
                </div>
            </div>
        </div>
    </section>
</dive>