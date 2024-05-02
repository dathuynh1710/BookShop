<head>
   <style>
     #BenTrai{
        visibility: hidden;
    }

    #Giua{
        visibility: hidden;
    
    }

    #BenPhai    {
        visibility: hidden;
    }
   </style>
</head>
<body>
    <style>
        .row {
            display: flex;
        }
        .contact__title {
            color: #2e2e2e;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .form-left {
            width: 700px;
            margin-right: 30px;
        }
        .form-left p {
            color: #333;
            margin-bottom: 35px;
        }
        .form-left .single-form {
            margin: 0 0 35px;
        }
        .form-left .single-form.space-between {
            display: flex;
            justify-content: space-around;
            margin-left: -10px;
            margin-right: -10px;
        }
        .form-left .single-form.space-between input {
            margin: 0 10px;
        }
        .form-left .single-form input {
            border: 1px solid #c1c1c1;
            border-radius: 0;
            height: 42px;
            outline: medium none;
            padding: 0 0px;
            width: 100%;
            border-bottom: 1px solid #c1c1c1;
            border-left: 0;
            border-right: 0;
            border-top: 0;
        }
        .form-left .single-form textarea {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            border: 1px solid #c1c1c1;
            border-bottom: 1px solid #c1c1c1;
            border-radius: 0;
            max-width: 100%;
            padding: 10px;
            height: 180px;
            padding: 0px;
            border-left: 0;
            border-right: 0;
            border-top: 0;
            width: 100%;
            outline: none;
        }

        .form-right p {
            color: #333;
            margin-bottom: 35px;
        }
        .form-right .single__address {
            display: flex;
        }

        .form-right .single__address .content span {
            color: #353535;
            display: inline-block;
            font-weight: 600;
            text-transform: uppercase;
        }
        .form-right .single__address .content p {
            color: #333;
            font-size: 17px;
            margin-bottom: 15px;
        }
        #googleMap {
            width: 100%;
            height: 500px;
        }

        .icon {
            margin-right: 26px;
            margin-bottom: 30px;
        }
    </style>
</body>

<section class="wn_contact_area bg--white pt--80 pb--80">
    <div class="google__map pb--80">
        <div class="container">
            <div class="col-md-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3924.627228724114!2d105.429764!3d10.3716611!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a731e7546fd7b%3A0x953539cd7673d9e5!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBBbiBHaWFuZyAtIMSQSFFHIFRQSENN!5e0!3m2!1svi!2s!4v1714625510827!5m2!1svi!2s"
                    width="600"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    id="googleMap"
                ></iframe>
            </div>
        </div>
    </div>
    <div class="container">
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
                            <!-- <button type="submit">Gửi Email</button> -->
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
                    <div class="wn__addres__wreapper">
                        <div class="single__address">
                            <img
                                src="./place_icon.svg"
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
                                src="./phone_icon.svg"
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
                                src="./email_icon.svg"
                                alt=""
                                width="20px"
                                class="icon"
                            />
                            <div class="content">
                                <span>Địa Chỉ Mail:</span>
                                <p>huynhthanhdat2506@gmail.com</p>
                            </div>
                        </div>

                        <div class="single__address">
                            <img
                                src="./world_icon.svg"
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
</section>
