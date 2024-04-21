<header >
    <style>
         .footer {
            height: 380px;
            padding: 10px 0; 
            background: #2e2100;
              color: #bfbcb2;
        }
        h2{
            color: #fff;
        }

        .container {
            display: flex;
            padding: 50px 0;
            margin: 0 50px;
            gap: 60px;
        }

        .footer  .row {
            width: 50%;  
        }

        .footer .socials {
            display: flex;
            gap: 20px;
            margin-top: 18px;
        }

        .footer-logo p , .footer-contact p{
            font-size: 14px;
            color: #bfbcb2;
        }

        .footer-menu ul {
            list-style: none; 
            padding: 0; 
        }

        .footer-menu li a{
            color: #bfbcb2;
        }

        .footer-menu ul li {
            margin-bottom: 10px; 
        }

        .footer-menu li a:hover{
            color: #FF8C69	;
        }

        .title{
            padding: 0 48px 14px 0;
            border-bottom: 1px solid #59554b;
        }

        .form input[type="email"] {
            padding: 10px 15px;
            width: 300px; 
            border-radius: 5px;
            border: 2px solid #bfbcb2; 
            outline: none; 
            font-size: 16px; 
        }

        .form .footer-btn {
            margin-top: 5px;
            padding: 10px 20px;
            border: none; 
            background-color: #FF8C69; 
            color: white; 
            cursor: pointer; 
        }

        .footer-btn:hover {
            background-color: #e47660; 
        }
    </style>
</header>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-logo">
                <!-- Phần logo và slogan của shop -->
                <img src="./images/logo.png" alt="D&D" style="width: 150px; height: 80px">
                <p>D&D Bookstore nhận đặt hàng trực tuyến và giao hàng tận nơi. KHÔNG hỗ trợ đặt mua và nhận hàng trực tiếp tại văn phòng cũng như tất cả Hệ thống D&D trên toàn quốc.</p>
                <div class="socials">
                    <a href="#!">
                        <img
                            src="./images/twitter.svg"
                            alt="Twitter"
                            class="icon"
                        />                                    
                    </a>

                    <a href="#!">
                        <img
                            src="./images/facebook.svg"
                            alt="Facebook"
                            class="icon"
                        />                                    
                    </a>

                    <a href="#!">
                        <img
                            src="./images/linkedin.svg"
                            alt="Linkedin"
                            class="icon"
                        />                                    
                    </a>

                    <a href="#!">
                        <img
                            src="./images/instagram.svg"
                            alt="Instagram"
                            class="icon"
                        />                                    
                    </a>
                </div>            
            </div>
        </div>

                <!-- Phần danh mục -->
        <div class="row">
            <div class="footer-menu">
                    <h2 class="title">Danh mục</h2>
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
        </div> 

        <div class="row">
            <div class="footer-contact">
                    <h2 class="title">Liên hệ</h2>
                    <p>Đăng ký nhận bản tin của chúng tôi và nhận các ưu đãi độc quyền mà bạn sẽ không tìm thấy ở bất kỳ nơi nào khác ngay trong hộp thư đến của bạn!</p>
                    <div class="form">
                        <form action="#">
                            <input class="footer-input" type="email" placeholder="yourmail@gmail.com">
                            <input class="footer-btn" type="submit" value="Đăng ký">
                        </form>
                    </div>
            </div>    
        </div> 
    </div>   
</footer>
