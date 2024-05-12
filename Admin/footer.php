    <head>
        <style>
            body {
                justify-content: flex-end;
                align-items: flex-end;
                min-height: 100vh;
                background-color: white;
            }

            .footer {
                position: relative;
                width: 100%;
                background: #00b0ad;
                height: 215px;
                padding: 20px 50px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            .social-icon {
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;
                margin: 10px 5px;
                flex-wrap: wrap;
            }

            .icon-elem {
                list-style: none;
            }

            .icon {
                color: white;
                font-size: 32px;
                display: inline-block;
                margin: 0 10px;
                transition: 0.5s;
            }

            .icon:hover {
                transform: translateY(-10px);
            }

            .menu {
                display: flex;
                justify-content: center;
                position: relative;
                align-items: center;
                margin: 10px 0;
                flex-wrap: wrap;
            }

            .menu-elem {
                list-style: none;
            }
            .menu-icon {
                color: white;
                font-size: 20px;
                display: inline-block;
                text-decoration: none;
                margin: 5px 10px;
                opacity: 0.5;
                transition: 0.3s;
            }

            .menu-icon:hover {
                opacity: 1;
            }

            .text {
                color: white;
                text-align: center;
                margin-top: 15px;
                margin-bottom: 10px;
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <footer class="footer">
            <ul class="social-icon">
                <li class="icon-elem">
                    <a href="" class="icon">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                </li>
                <li class="icon-elem">
                    <a href="" class="icon">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>
                <li class="icon-elem">
                    <a href="" class="icon">
                        <ion-icon name="logo-whatsapp"></ion-icon>
                    </a>
                </li>
                <li class="icon-elem">
                    <a href="" class="icon">
                        <ion-icon name="logo-github"></ion-icon>
                    </a>
                </li>
                <li class="icon-elem">
                    <a href="" class="icon">
                        <ion-icon name="mail-outline"></ion-icon>
                    </a>
                </li>
            </ul>
            <ul class="menu">
                <li class="menu-elem">
                    <a href="" class="menu-icon"> Huỳnh Thành Đạt </a>
                </li>
                <li class="menu-elem">
                    <a href="/bookshop/TrangTin/index.php" class="menu-icon"> BookShop </a>
                </li>
                <li class="menu-elem">
                    <a href="/bookshop/TrangTin/index.php?do=contact" class="menu-icon"> Contact </a>
                </li>
                <li class="menu-elem">
                    <a href="" class="menu-icon"> Trần Duy Đăng </a>
                </li>
              
            </ul>
            <p class="text">© 2024 Copyright: D&DBookShop.com</p>
        </footer>
        <script
            type="module"
            src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
        ></script>
        <script
            nomodule
            src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
        ></script>
    </body>
</html>
