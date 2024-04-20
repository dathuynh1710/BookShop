<footer class="footer">
    <div class="container">
        <div class="footer-row">
            <div class="footer-logo">
                <!-- Phần logo và slogan của shop -->
                <h2>BHT<span> Bookstore</span></h2>
                <p>BHT Bookstore nhận đặt hàng trực tuyến và giao hàng tận nơi. KHÔNG hỗ trợ đặt mua và nhận hàng trực tiếp tại văn phòng cũng như tất cả Hệ thống BHT Bookstore trên toàn quốc.</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
                <!-- Phần danh mục -->
             
            <div class="footer-menu">
                    <h2 class="f-danhmuc">Danh mục</h2>
                    <ul>
                        <?php
                            $sql = "SELECT * FROM theloai ORDER BY IDTheLoai DESC";
                            $list_tl = $connect->query($sql);
                            foreach ($list_tl as $tl) {
                                echo '<li><a href="/#!?IDTheLoai=' . $tl['IDTheLoai'] . '">' . $tl['TenTheLoai'] . '</a></li>';
                            }
                        ?>
                    </ul>
            </div>

            <div class="footer-contact">
                    <h2 class="lienhe">Liên hệ</h2>
                    <p>Đăng ký nhận bản tin của chúng tôi và nhận các ưu đãi độc quyền mà bạn sẽ không tìm thấy ở bất kỳ nơi nào khác ngay trong hộp thư đến của bạn!</p>
                    <div class="newsletter-form">
                        <form action="#">
                            <input type="email" placeholder="yourmail@gmail.com">
                            <input type="submit" value="Đăng ký">
                        </form>
                    </div>
            </div>    
        </div>
    </div>
        
</footer>