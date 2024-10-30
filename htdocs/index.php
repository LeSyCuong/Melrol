<?php
include 'config/head.php';
?>

<main>
    <div class="container">
        <section class="content">
            <div class="images">
                <img class="macbook" src="https://melrol.com/wp-content/uploads/2023/01/home7_macbook.png"
                    alt="Laptop Mockup" />
                <img class="phone" src="https://melrol.com/wp-content/uploads/2023/01/home7iphone.png"
                    alt="Phone Mockup" />
            </div>
            <div class="text">
                <h1>Thiết kế Website</h1>
                <p>
                    <b>Melrol</b> cung cấp giải pháp thiết kế website trọn gói - theo
                    yêu cầu. Đảm bảo chuẩn SEO, tương thích với các thiết bị di động,
                    giao diện hiện đại, thân thiện với người dùng.
                </p>
                <button>
                    <i class="fa-regular fa-circle-play" style="color: #ffffff"></i>&nbsp;&nbsp;Bắt đầu
                </button>
            </div>
        </section>
        <section class="content2">
            <div class="text2">
                <h2>Website Ứng&nbsp;dụng Marketing</h2>
                <p>
                    Ngoài ra <strong>Melrol</strong> còn đưa đến gói giải pháp AIO -
                    Tất cả trong một, bao gồm:<br />
                    - Website chuẩn Seo, hiện đại, thân thiện với người dùng.<br />
                    - Ứng dụng dành riêng cho các thiết bị.<br />
                    - Lộ trình, kế hoạch để xây dựng thương hiệu và quảng bá.
                </p>
                <button>
                    <i class="okey2 fa-regular fa-circle-play"></i>&nbsp;&nbsp;Bắt đầu
                </button>
            </div>
            <div class="images2">
                <img class="shape2" src="https://melrol.com/wp-content/uploads/2022/11/apple_shapebg2.png"
                    alt="shape" />
                <img class="phone2" src="https://melrol.com/wp-content/uploads/2022/11/apple_phone2-1.png"
                    alt="Laptop Mockup" />
                <img class="watch" src="https://melrol.com/wp-content/uploads/2022/11/apple_watch-1.png"
                    alt="Phone Mockup" />
            </div>
        </section>

        <section class="content3">
            <div class="text3">
                <h2>Không&nbsp;chỉ giải pháp mà còn hơn nữa</h2>
                <p>
                    <strong>Melrol</strong> sẵn sàng hỗ trợ, thiết kế, tư vấn cho
                    những giải pháp đặc thù của khách hàng để có lựa chọn tốt nhất cho
                    nhu cầu của chính mình. Hỗ trợ 24/7 khi tin dùng
                    <strong>Melrol</strong>
                </p>
                <button>
                    <i class="fa-regular fa-circle-play" style="color: #ffffff"></i>&nbsp;&nbsp;Bắt đầu
                </button>
            </div>
            <div class="images3">
                <img class="shape3" src="https://melrol.com/wp-content/uploads/2023/01/home6_shapebg2-01.svg"
                    alt="shape" />
                <img class="pc" src="https://melrol.com/wp-content/uploads/2022/11/apple2.png" alt="Laptop Mockup" />
            </div>
        </section>
    </div>
    <button class="nav-buttons prev" onclick="prevSlide()">
        <i class="fa-solid fa-chevron-left"></i>
    </button>
    <button class="nav-buttons next" onclick="nextSlide()">
        <i class="fa-solid fa-chevron-right"></i>
    </button>

    <div class="dots">
        <div class="dot active" onclick="goToSlide(0)"></div>
        <div class="dot" onclick="goToSlide(1)"></div>
        <div class="dot" onclick="goToSlide(2)"></div>
    </div>

    <script>
    const prevButton = document.querySelector(".nav-buttons.prev");
    const nextButton = document.querySelector(".nav-buttons.next");

    function showButtons() {
        prevButton.classList.add("show");
        nextButton.classList.add("show");
    }

    function hideButtons() {
        prevButton.classList.remove("show");
        nextButton.classList.remove("show");
    }

    document
        .querySelector("main")
        .addEventListener("mouseenter", showButtons);
    document
        .querySelector("main")
        .addEventListener("mouseleave", hideButtons);
    document.addEventListener("keydown", showButtons);

    let currentSlide = 0;

    function updateSlide() {
        const container = document.querySelector(".container");
        container.style.transform = `translateX(-${currentSlide * 100}vw)`;

        document.querySelectorAll(".dot").forEach((dot, index) => {
            dot.classList.toggle("active", index === currentSlide);
        });
    }

    function nextSlide() {
        const totalSlides = document.querySelectorAll(".content").length;
        if (currentSlide <= totalSlides) {
            currentSlide++;
            updateSlide();
        }
    }

    function prevSlide() {
        if (currentSlide > 0) {
            currentSlide--;
            updateSlide();
        }
    }

    function goToSlide(slideIndex) {
        currentSlide = slideIndex;
        updateSlide();
    }
    </script>
</main>

<div class="next">
    <h2>Chúng tôi thiết kế và phát triển giải pháp kỹ thuật số.</h2>
    <p>
        Bạn đang không biết mình cần gì? Bạn cần một hệ thống cho riêng mình?
        Bạn muốn giải pháp hiệu quả và tối ưu nhất? Thế thì hãy đến với
        <b>Melrol</b>. Ở đây chúng tôi sẽ ngồi lại với bạn, cùng nhau xác nhận
        và tìm ra mục tiêu cần đạt được theo nhu cầu của bạn.
    </p>
</div>
<div class="icon">
    <div>
        <i class="fa-thin fa-swatchbook"></i>
        <h3>Sáng tạo</h3>
        <p>
            Tương tác với thương hiệu của bạn mạnh mẽ thông qua sự hợp tác và chia
            sẻ ý tưởng thay vì chỉ đưa ra các lựa chọn cố định như những bên khác
        </p>
    </div>
    <div>
        <i class="fa-thin fa-rocket-launch"></i>
        <h3>Hiện đại</h3>
        <p>
            Chúng tôi luôn lựa chọn những phương án hiện đại và không ngừng đổi
            mới để nắm bắt được xu hướng mới nhất đem lại lợi ích cho khách hàng
            của mình
        </p>
    </div>
    <div>
        <i class="fa-thin fa-face-smile-relaxed"></i>
        <h3>Thân thiện</h3>
        <p>
            Chúng tôi hiểu rằng, mỗi khách hàng có một tệp nhóm đối tượng riêng,
            nhu cầu riêng của mình và để tối ưu chúng tôi sẽ đem đến các giải pháp
            dễ sử dụng
        </p>
    </div>
</div>
<div class="bot-img">
    <img
        src="https://media.licdn.com/dms/image/D4D12AQHIklGOnHkFew/article-cover_image-shrink_600_2000/0/1677924741018?e=2147483647&v=beta&t=XtC9FKDg3SQij-y3Vvu3541Z_7NhQzdfVfk30VthSiw" />
    <div class="text-content">
        <h3>Hãy cùng thảo luận về nhu cầu và vấn đề bạn đang có.</h3>
        <p>
            <b>Melrol</b> ở đây để đáp ứng lại nhu cầu của khách hàng. Đừng ngần
            ngại khi liên hệ cho chúng tôi để nhận được sự tư vấn và giải pháp hợp
            lý. Chúng tôi tôn trọng và nhắm tới mục tiêu xa hơn là chúng ta có thể
            gắn kết làm việc lâu dài. Mỗi một phản hồi của bạn chính là cơ hội hợp
            tác và phát triển hơn nữa của chúng tôi.
        </p>
        <button class="buttonx">Liên hệ ngay</button>
    </div>
</div>
<div class="bot-khung">
    <div class="text-content">
        <div class="sevi">
            <div class="gach"></div>
            <p>Services - dịch vụ</p>
        </div>
        <h3>Bạn có thể lựa chọn.</h3>
        <p>
            Đây là những giải pháp mà chúng tôi hiện tại đề xuất cho bạn nếu bạn
            cần thực hiện cho nhu cầu của chính mình
        </p>
        <button>Thêm nữa</button>
    </div>

    <div class="grid-container">
        <div class="card highlight">
            <div class="card-icon">🌐</div>
            <div class="card-title">Thiết kế Web</div>
            <div class="card-content">
                Bạn cần một website riêng cho thương hiệu của mình
            </div>
        </div>
        <div class="card c1">
            <div class="card-icon">📱</div>
            <div class="card-title">Ứng dụng</div>
            <div class="card-content">
                Bạn cần giải pháp linh hoạt có thể sử dụng trên mọi loại thiết bị.
            </div>
        </div>
        <div class="card">
            <div class="card-icon">📜</div>
            <div class="card-title">Xây dựng thương hiệu</div>
            <div class="card-content">
                Bạn muốn có một bộ nhận diện riêng dành cho mình.
            </div>
        </div>
        <div class="card c2">
            <div class="card-icon">📈</div>
            <div class="card-title">Marketing</div>
            <div class="card-content">
                Bạn cần quảng cáo, tiếp thị, thiết kế ấn phẩm truyền thông.
            </div>
        </div>
    </div>
</div>

<div class="nomal">
    <div class="content-xam">
        <div class="sevi">
            <div class="gach2"></div>
            <p>Môt số dự án của <b>Melrol</b></p>
        </div>
        <h3>Chúng tôi thiết kế & phát triển các dự án .</h3>
        <p>Xem qua những dự án mới nhất. <a href="/">Xem thêm</a></p>
    </div>
    <div class="wrapper">
        <div class="pbot">
            <div class="item">
                <img src="https://preview.treethemes.com/nyssa/demo1-clean/wp-content/uploads/sites/2/2022/08/project4.jpg"
                    onclick="openModal(this.src)" />
                <div class="overlay">
                    <button>More Info</button>
                    <button
                        onclick="openModal('https://preview.treethemes.com/nyssa/demo1-clean/wp-content/uploads/sites/2/2022/08/project4.jpg')">
                        View Larger
                    </button>
                </div>
            </div>
            <p>Art Exhibition<span>Split Layout</span></p>
        </div>
        <div class="pbot">
            <div class="item">
                <img src="https://preview.treethemes.com/nyssa/demo1-clean/wp-content/uploads/sites/2/2022/08/project6.jpg"
                    onclick="openModal(this.src)" />
                <div class="overlay">
                    <button>More Info</button>
                    <button
                        onclick="openModal('https://preview.treethemes.com/nyssa/demo1-clean/wp-content/uploads/sites/2/2022/08/project6.jpg')">
                        View Larger
                    </button>
                </div>
            </div>
            <p>My Goals App<span>Slider</span></p>
        </div>
        <div class="pbot">
            <div class="item">
                <img src="https://preview.treethemes.com/nyssa/demo1-clean/wp-content/uploads/sites/2/2022/08/project7.jpg"
                    onclick="openModal(this.src)" />
                <div class="overlay">
                    <button>More Info</button>
                    <button
                        onclick="openModal('https://preview.treethemes.com/nyssa/demo1-clean/wp-content/uploads/sites/2/2022/08/project7.jpg')">
                        View Larger
                    </button>
                </div>
            </div>
            <p>Nyssa WordPress Theme<span>Custom Layout</span></p>
        </div>

        <div class="pbot">
            <div class="item">
                <img src="https://preview.treethemes.com/nyssa/demo1-clean/wp-content/uploads/sites/2/2022/08/project9.jpg"
                    onclick="openModal(this.src)" />
                <div class="overlay">
                    <button>More Info</button>
                    <button
                        onclick="openModal('https://preview.treethemes.com/nyssa/demo1-clean/wp-content/uploads/sites/2/2022/08/project9.jpg')">
                        View Larger
                    </button>
                </div>
            </div>
            <p>Flower nyssa lettering<span>Custom Layout</span></p>
        </div>
        <div class="pbot">
            <div class="item">
                <img src="https://preview.treethemes.com/nyssa/demo1-clean/wp-content/uploads/sites/2/2022/08/project10.jpg"
                    onclick="openModal(this.src)" />
                <div class="overlay">
                    <button>More Info</button>
                    <button
                        onclick="openModal('https://preview.treethemes.com/nyssa/demo1-clean/wp-content/uploads/sites/2/2022/08/project10.jpg')">
                        View Larger
                    </button>
                </div>
            </div>
            <p>Brochure mockup<span>Slider</span></p>
        </div>
        <div class="pbot">
            <div class="item">
                <img src="https://preview.treethemes.com/nyssa/demo1-clean/wp-content/uploads/sites/2/2022/08/project11.jpg"
                    onclick="openModal(this.src)" />
                <div class="overlay">
                    <button>More Info</button>
                    <button
                        onclick="openModal('https://preview.treethemes.com/nyssa/demo1-clean/wp-content/uploads/sites/2/2022/08/project11.jpg')">
                        View Larger
                    </button>
                </div>
            </div>
            <p>Treethemes box<span>Video</span></p>
        </div>
        <div class="pbot">
            <div class="item">
                <img src="https://preview.treethemes.com/nyssa/demo1-clean/wp-content/uploads/sites/2/2022/08/project12.jpg"
                    onclick="openModal(this.src)" />
                <div class="overlay">
                    <button>More Info</button>
                    <button
                        onclick="openModal('https://preview.treethemes.com/nyssa/demo1-clean/wp-content/uploads/sites/2/2022/08/project12.jpg')">
                        View Larger
                    </button>
                </div>
            </div>
            <p>Artistic Photography<span>Big Images</span></p>
        </div>
    </div>
    <script>
    const wrapper = document.querySelector(".wrapper");
    let isDown = false;
    let startX;
    let scrollLeft;

    wrapper.addEventListener("mousedown", (e) => {
        isDown = true;
        wrapper.classList.add("active");
        startX = e.pageX - wrapper.offsetLeft;
        scrollLeft = wrapper.scrollLeft;
    });

    wrapper.addEventListener("mouseleave", () => {
        isDown = false;
        wrapper.classList.remove("active");
    });

    wrapper.addEventListener("mouseup", () => {
        isDown = false;
        wrapper.classList.remove("active");
    });

    wrapper.addEventListener("mousemove", (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - wrapper.offsetLeft;
        const walk = (x - startX) * 2;
        wrapper.scrollLeft = scrollLeft - walk;
    });
    </script>

    <!-- Model -->
    <div id="myModal" class="modal" onclick="closeModal()">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="img01" />
        <div id="caption"></div>
    </div>

    <script>
    function openModal(imgSrc) {
        const modal = document.getElementById("myModal");
        const modalImg = document.getElementById("img01");
        const captionText = document.getElementById("caption");

        modal.style.display = "block";
        modalImg.src = imgSrc;

        // Tìm chỉ số của hình ảnh trong danh sách
        currentIndex = images.indexOf(imgSrc);
    }

    function closeModal() {
        const modal = document.getElementById("myModal");
        modal.style.display = "none";
    }
    </script>
</div>

<div class="botc">
    <div class="content-xam">
        <div class="sevi gach-large">
            <div class="gach2 gg"></div>
            <p>Khách hàng của chúng tôi</p>

            <h3>Họ nói gì về Melrol.</h3>
        </div>
        <div class="back"></div>
    </div>

    <div class="slide">
        <div class="wrapper2">
            <div class="item-slide">
                <img src="https://melrol.com/wp-content/uploads/2022/09/testimonial1-80x80.jpg" />
                <p>
                    "Compellingly fashion low-risk high-yield "outside the box"
                    thinking after synergistic users. Quickly empower web-enabled
                    manufactured products alignments"
                </p>
                <b>Lucas Crasy</b><br />
                <span>Bold</span>
            </div>
            <div class="item-slide">
                <img src="https://melrol.com/wp-content/uploads/2022/09/testimonial2-80x80.jpg" />
                <p>
                    "Compellingly fashion low-risk high-yield "outside the box"
                    thinking after synergistic users. Quickly empower web-enabled
                    manufactured products alignments "
                </p>
                <b>Lucas Crasy</b><br />
                <span>Bold</span>
            </div>
            <div class="item-slide">
                <img src="https://melrol.com/wp-content/uploads/2022/09/testimonial3-80x80.jpg" />
                <p>
                    "Compellingly fashion low-risk high-yield "outside the box"
                    thinking after synergistic users. Quickly empower web-enabled
                    manufactured products alignments"
                </p>
                <b>Lucas Crasy</b><br />
                <span>Bold</span>
            </div>
            <div class="item-slide">
                <img src="https://melrol.com/wp-content/uploads/2022/09/testimonial4-80x80.jpg" />
                <p>
                    "Compellingly fashion low-risk high-yield "outside the box"
                    thinking after synergistic users. Quickly empower web-enabled
                    manufactured products alignments"
                </p>
                <b>Lucas Crasy</b><br />
                <span>Bold</span>
            </div>
            <div class="item-slide">
                <img src="https://melrol.com/wp-content/uploads/2022/09/testimonial5-80x80.jpg" />
                <p>
                    "Compellingly fashion low-risk high-yield "outside the box"
                    thinking after synergistic users. Quickly empower web-enabled
                    manufactured products alignments"
                </p>
                <b>Lucas Crasy</b><br />
                <span>Bold</span>
            </div>
        </div>
    </div>

    <script>
    const slideContainer = document.querySelector(".slide");
    let isMouseDown = false;
    let initialMouseX;
    let initialScrollLeft;

    slideContainer.addEventListener("mousedown", (event) => {
        isMouseDown = true;
        slideContainer.classList.add("active");
        initialMouseX = event.pageX - slideContainer.offsetLeft;
        initialScrollLeft = slideContainer.scrollLeft;
    });

    slideContainer.addEventListener("mouseleave", () => {
        isMouseDown = false;
        slideContainer.classList.remove("active");
    });

    slideContainer.addEventListener("mouseup", () => {
        isMouseDown = false;
        slideContainer.classList.remove("active");
    });

    slideContainer.addEventListener("mousemove", (event) => {
        if (!isMouseDown) return;
        event.preventDefault();
        const currentMouseX = event.pageX - slideContainer.offsetLeft;
        const scrollDistance = (currentMouseX - initialMouseX) * 4;
        slideContainer.scrollLeft = initialScrollLeft - scrollDistance;
    });
    </script>

    <div class="cuoi">
        <div class="thang"></div>
        <div class="di">
            <p>It's time to change</p>
            <h4>Chúng tôi có thể<br />giúp bạn!</h4>
            <button class="buttonx">Liên hệ ngay</button>
        </div>
    </div>
</div>
<?php
include 'config/foot.php';
?>