<head>
    <link rel="stylesheet" type="text/css" href="css/style_contact.css" />

   <style>
     #BenTrai{
        display: none;
    }
    
    .title-giua{
        display: none;
    }

    .info-promo{
        display: none;
    }

     #Giua{
        width: 100%;
    
    } 

    #BenPhai    {
        display: none;
    }
   </style>
</head>
<body>
    <div class="container">
            <div class="maps" style="width:100%;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3924.627228724114!2d105.429764!3d10.3716611!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a731e7546fd7b%3A0x953539cd7673d9e5!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBBbiBHaWFuZyAtIMSQSFFHIFRQSENN!5e0!3m2!1svi!2s!4v1714625510827!5m2!1svi!2s"
                    width="600"
                    height="500"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    id="googleMap"
                ></iframe>
            </div>
    </div>
    <div class="container" style=" padding: 20px 0;">
        <div class="row">
            <div class="PhanTrai">
                <div class="form-left">
                    <h2 class="contact__title">Giữ Liên Lạc Với Chúng Tôi</h2>
                    <p>Nhóm Huỳnh Thành Đạt và Trần Duy Đăng</p>
                    <form id="contact-form" action="#" method="post">
                        <div class="single-form space-between">
                            <input
                                type="text"
                                name="firstname"
                                placeholder="Họ và Lót*"
                            />
                            <input
                                type="text"
                                name="lastname"
                                placeholder="Tên*"
                            />
                        </div>
                        <div class="single-form space-between">
                            <input
                                type="email"
                                name="email"
                                placeholder="Email*"
                            />
                            <input
                                type="text"
                                name="website"
                                placeholder="Website*"
                            />
                        </div>
                        <div class="single-form">
                            <input
                                type="text"
                                name="subject"
                                placeholder="Địa Chỉ*"
                            />
                        </div>
                        <div class="single-form message">
                            <textarea
                                name="message"
                                placeholder="Gửi lại lời nhắn của bạn ở đây.."
                            ></textarea>
                        </div>
                        <div class="contact-btn">
                            <button type="submit">Gửi Email</button>
                        </div>
                    </form>
                </div>
                <div class="form-output">
                    <p class="form-messege"></p>
                </div>
            </div>
            <div class="PhanPhai">
                <div class="form-right">
                    <h2 class="contact__title">Thông Tin Của Chúng Tôi.</h2>
                    <p>D&D from AGU with Love ♥</p>
                    <div class="address_info">
                        <div class="single__address">
                            <img
                                src="images/place_icon.svg"
                                alt=""
                                width="25px"
                                class="icon"
                            />
                            <div class="content">
                                <span>address:</span>
                                <p>
                                    18 Ung Văn Khiêm, Phường Đông Xuyên, Thành
                                    phố Long Xuyên, An Giang
                                </p>
                            </div>
                        </div>

                        <div class="single__address">
                            <img
                                src="images/phone_icon.svg"
                                alt=""
                                width="20px"
                                class="icon"
                            />
                            <div class="content">
                                <span>Phone Number:</span>
                                <p>03-3779-1477</p>
                            </div>
                        </div>

                        <div class="single__address">
                            <img
                                src="images/email_icon.svg"
                                alt=""
                                width="20px"
                                class="icon"
                            />
                            <div class="content">
                                <span>Địa Chỉ Mail:</span>
                                <p>D&DBookStore@gmail.com</p>
                            </div>
                        </div>

                        <div class="single__address">
                            <img
                                src="images/world_icon.svg"
                                alt=""
                                width="20px"
                                class="icon"
                            />
                            <div class="content">
                                <span>Địa Chỉ website:</span>
                                <p>
                                    http://127.0.0.1:8080/bookshop/TrangTin/index.php
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>