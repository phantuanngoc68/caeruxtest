<?php require_once('inc/header.inc.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Caerux Test - NAME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/main.css" />
</head>
<body>
    <div id="wrapper">

        <!-- 
            List all users
            Chia n list, mỗi list gồm 3 users
            Styles:
                - thumbnail bên trái kích thước with 350px
                - info bên phải, text căn trái cách ảnh 30px, căn đều theo chiều dọc, cỡ chữ tuỳ ý
            Scripts: không có yêu cầu
        -->

        <section class="users">
            <div class="content_wrapper">
                <h2>Users Listing Without Actions</h2>
                <!-- List 1 -->
                <h3>List 1</h3>
                <ul>
                    <li>
                        <div class="flash_card">
                            <div class="thumbnail">
                                <img src="https://picsum.photos/500/300?v=1" alt="">
                            </div>

                            <div class="info">
                                <p class="last_access"><span>Last access:</span> 2019/01/04</p>
                                <p class="name"><span>Name:</span> John Doe</p>
                                <p class="position"><span>Position:</span> Diretor</p>
                                <p class="summary">
                                    Lorem ipsum dolor sit amet, id vim aeque scripta voluptua, eu cum essent discere maluisset. Cum no senserit suscipiantur.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flash_card">
                            <div class="thumbnail">
                                <img src="https://picsum.photos/500/300?v=2" alt="">
                            </div>

                            <div class="info">
                                <p class="last_access"><span>Last access:</span> 2019/01/04</p>
                                <p class="name"><span>Name:</span> John Doe</p>
                                <p class="position"><span>Position:</span> Diretor</p>
                                <p class="summary">
                                    Inani rationibus ne qui, viderer constituam et vis. Ius alienum minimum luptatum ad, veri euismod eu sit. Sea nominavi indoctum ex, ei pri lorem voluptatibus.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flash_card">
                            <div class="thumbnail">
                                <img src="https://picsum.photos/500/300?v=2" alt="">
                            </div>

                            <div class="info">
                                <p class="last_access"><span>Last access:</span> 2019/01/04</p>
                                <p class="name"><span>Name:</span> John Doe</p>
                                <p class="position"><span>Position:</span> Diretor</p>
                                <p class="summary">
                                    Inani rationibus ne qui, viderer constituam et vis. Ius alienum minimum luptatum ad, veri euismod eu sit. Sea nominavi indoctum ex, ei pri lorem voluptatibus.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>

                <h3>List n</h3>
                <!-- List n -->
                <ul>
                    <li>
                        <div class="flash_card">
                            <div class="thumbnail">
                                <img src="https://picsum.photos/500/300?v=1" alt="">
                            </div>

                            <div class="info">
                                <p class="last_access"><span>Last access:</span> 2019/01/04</p>
                                <p class="name"><span>Name:</span> John Doe</p>
                                <p class="position"><span>Position:</span> Diretor</p>
                                <p class="summary">
                                    Lorem ipsum dolor sit amet, id vim aeque scripta voluptua, eu cum essent discere maluisset. Cum no senserit suscipiantur.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flash_card">
                            <div class="thumbnail">
                                <img src="https://picsum.photos/500/300?v=2" alt="">
                            </div>

                            <div class="info">
                                <p class="last_access"><span>Last access:</span> 2019/01/04</p>
                                <p class="name"><span>Name:</span> John Doe</p>
                                <p class="position"><span>Position:</span> Diretor</p>
                                <p class="summary">
                                    Inani rationibus ne qui, viderer constituam et vis. Ius alienum minimum luptatum ad, veri euismod eu sit. Sea nominavi indoctum ex, ei pri lorem voluptatibus.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flash_card">
                            <div class="thumbnail">
                                <img src="https://picsum.photos/500/300?v=2" alt="">
                            </div>

                            <div class="info">
                                <p class="last_access"><span>Last access:</span> 2019/01/04</p>
                                <p class="name"><span>Name:</span> John Doe</p>
                                <p class="position"><span>Position:</span> Diretor</p>
                                <p class="summary">
                                    Inani rationibus ne qui, viderer constituam et vis. Ius alienum minimum luptatum ad, veri euismod eu sit. Sea nominavi indoctum ex, ei pri lorem voluptatibus.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- 
            List all users
            Styles:
                + Các items lẻ:
                    - thumbnail bên trái kích thước with 350px
                    - info bên phải, text căn trái cách ảnh 30px, căn đều theo chiều dọc, cỡ chữ tuỳ ý
                + Các items chẵn:
                    - thumbnail bên phải kích thước with 350px
                    - info bên trái, text căn phải cách ảnh 30px, căn đều theo chiều dọc, cỡ chữ tuỳ ý
                + Item đầu tiên ẩn nút Turn Up, cuối cùng ẩn Turn Down
                + Styles khác tuỳ ý
            Scripts:
                Viết sự kiện click nút:
                    - Turn Up di chuyển item đó lên trên 1 item
                    - Turn Up di chuyển item đó xuống dưới 1 item
                Sau khi di chuyển style tự động thay đổi đáp ứng yêu cầu của phần Styles, không reload trang
        -->
        <section class="users user_with_actions">
            <div class="content_wrapper">
                <h2>Users Listing With Actions</h2>
                <ul>
                    <li>
                        <div class="flash_card">
                            <div class="thumbnail">
                                <img src="https://picsum.photos/500/300?v=1" alt="">
                            </div>

                            <div class="info">
                                <p class="last_access"><span>Last access:</span> 2019/01/04</p>
                                <p class="name"><span>Name:</span> John Doe</p>
                                <p class="position"><span>Position:</span> Diretor</p>
                                <p class="summary">
                                    Lorem ipsum dolor sit amet, id vim aeque scripta voluptua, eu cum essent discere maluisset. Cum no senserit suscipiantur.
                                </p>

                                <ul class="actions">
                                    <li><a href="#" class="turn_up">Turn up</a></li>
                                    <li><a href="#" class="turn_down">Turn down</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flash_card">
                            <div class="thumbnail">
                                <img src="https://picsum.photos/500/300?v=2" alt="">
                            </div>

                            <div class="info">
                                <p class="last_access"><span>Last access:</span> 2019/01/04</p>
                                <p class="name"><span>Name:</span> John Doe</p>
                                <p class="position"><span>Position:</span> Diretor</p>
                                <p class="summary">
                                    Inani rationibus ne qui, viderer constituam et vis. Ius alienum minimum luptatum ad, veri euismod eu sit. Sea nominavi indoctum ex, ei pri lorem voluptatibus.
                                </p>

                                <ul class="actions">
                                    <li><a href="#" class="turn_up">Turn up</a></li>
                                    <li><a href="#" class="turn_down">Turn down</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- 
            List users truy cập ngày 04/01/2019
            Styles: tuỳ ý
            Scripts: không có yêu cầu
        -->
        <section class="last_accessed">
            <div class="content_wrapper">
                <h2>Users Accessed At 2019/01/04</h2>
                <ul>
                    <li>John Doe</li>
                    <li>Jane Doe</li>
                </ul>
            </div>
        </section>

        <!-- 
            List users chưa từng access
            Styles: tuỳ ý
            Scripts: không có yêu cầu
        -->
        <section class="has_never_accessed">
            <div class="content_wrapper">
                <h2>Users Has Never Accessed</h2>
                <ul>
                    <li>John Doe</li>
                    <li>Jane Doe</li>
                </ul>
            </div>
        </section>
    </div>

    <script src="//code.jquery.com/jquery-1.11.3.js"></script>
    <script src="assets/main.js"></script>
</body>
</html>
