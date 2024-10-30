<?php
$data = [
    'title' => "Dịch vụ",
    'dichvu' => 'active'
  ];
include 'config/head.php';
?>
<style>
nav ul li a {
    color: #dfd7d7;
}

nav ul li a:hover {
    color: white;
}

nav ul li a::before {
    background-color: white;
}

nav ul li a.active {
    color: white;
}

header.scrolled nav ul li a:hover {
    color: #5a4de8;
}

header.scrolled nav ul li a::before {
    background-color: #5a4de8;
}

header.scrolled nav ul li a.active {
    color: #5a4de8;
}

header.scrolled nav ul li a {
    color: black;
}
</style>
<main>
    <div class="bg-dv">
        <img src="https://melrol.com/wp-content/uploads/2022/12/bgcolors.jpg" alt="">
        <div class="nd-dv">
            <span>Chúng tôi ở đây</span>
            <h2>Những gì chúng<br>tôi có thể.</h2>
            <div class="icon-dv">
                <div class="ic1">
                    <i class="fa-light fa-browser" style="color: #ffffff;"></i>
                    <span>Thiết kế web</span>
                </div>
                <div class="ic2">
                    <i class="fa-regular fa-pen-nib fa-rotate-by"
                        style="color: #ffffff; --fa-rotate-angle: 135deg;"></i>
                    <span>Xây dựng thương hiệu</span>
                </div>
                <div class="ic3">
                    <i class="fa-thin fa-rectangle-code" style="color: #ffffff;"></i>
                    <span>Lập trình ứng dụng</span>
                </div>
                <div class="ic4">
                    <i class="fa-thin fa-desktop" style="color: #ffffff;"></i>
                    <span>Thiết kế đồ họa</span>
                </div>
                <div class="ic5">
                    <i class="fa-thin fa-megaphone" style="color: #ffffff;"></i>
                    <span>Marketing</span>
                </div>
            </div>
        </div>
        <div class="bg-w"></div>
    </div>
</main>
<div class="thang"></div>

<div class="wrapper">
    <div class="pbot  mg">
        <div class="item dv">
            <img src="https://melrol.com/wp-content/uploads/2022/12/nyssa_service2.jpg" />
            <div class="overlay dv">
                <p>Bạn có ý tưởng cần thực hiện? Bạn chưa tìm ra <br>giải pháp hợp lý? Hãy đến với Melrol,
                    ở đây<br> chúng tôi sẽ cùng bạn lên ý tưởng cho website <br> của riêng bạn.
                    Hoặc bạn có thể lựa chọn trong <br>danh sáchwebsite mẫu của chúng tôi ở đa dạng <br> lĩnh vực.
                </p>
            </div>
        </div>
        <h2>Thiết kế website</h2>
    </div>
    <div class="pbot mg">
        <div class="item dv">
            <img src="https://melrol.com/wp-content/uploads/2022/12/nyssa_service3.jpg" />
            <div class="overlay dv">
                <p>Bạn có ý tưởng cần thực hiện? Bạn chưa tìm ra <br>giải pháp hợp lý? Hãy đến với Melrol,
                    ở đây<br> chúng tôi sẽ cùng bạn lên ý tưởng cho website <br> của riêng bạn.
                    Hoặc bạn có thể lựa chọn trong <br>danh sáchwebsite mẫu của chúng tôi ở đa dạng <br> lĩnh vực.
                </p>
            </div>
        </div>
        <h2>Thiết kế website</h2>
    </div>
    <div class="pbot mg">
        <div class="item dv">
            <img src="https://melrol.com/wp-content/uploads/2022/12/nyssa_service3.jpg" />
            <div class="overlay dv">
                <p>Bạn có ý tưởng cần thực hiện? Bạn chưa tìm ra <br>giải pháp hợp lý? Hãy đến với Melrol,
                    ở đây<br> chúng tôi sẽ cùng bạn lên ý tưởng cho website <br> của riêng bạn.
                    Hoặc bạn có thể lựa chọn trong <br>danh sáchwebsite mẫu của chúng tôi ở đa dạng <br> lĩnh vực.
                </p>
            </div>
        </div>
        <h2>Thiết kế website</h2>
    </div>

    <div class="pbot mg">
        <div class="item dv">
            <img src="https://melrol.com/wp-content/uploads/2022/12/nyssa_service1.jpg" />
            <div class="overlay dv">
                <p>Bạn có ý tưởng cần thực hiện? Bạn chưa tìm ra <br>giải pháp hợp lý? Hãy đến với Melrol,
                    ở đây<br> chúng tôi sẽ cùng bạn lên ý tưởng cho website <br> của riêng bạn.
                    Hoặc bạn có thể lựa chọn trong <br>danh sáchwebsite mẫu của chúng tôi ở đa dạng <br> lĩnh vực.
                </p>
            </div>
        </div>
        <h2>Thiết kế website</h2>
    </div>
    <div class="pbot mg">
        <div class="item dv">
            <img src="https://melrol.com/wp-content/uploads/2022/12/nyssa_service3.jpg" />
            <div class="overlay dv">
                <p>Bạn có ý tưởng cần thực hiện? Bạn chưa tìm ra <br>giải pháp hợp lý? Hãy đến với Melrol,
                    ở đây<br> chúng tôi sẽ cùng bạn lên ý tưởng cho website <br> của riêng bạn.
                    Hoặc bạn có thể lựa chọn trong <br>danh sáchwebsite mẫu của chúng tôi ở đa dạng <br> lĩnh vực.
                </p>
            </div>
        </div>
        <h2>Thiết kế website</h2>
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

<style>
.video-container {
    position: relative;
    width: 100vw;
    height: 60vh;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #000;
    margin: 150px 0;
}

.video-container iframe {
    position: absolute;
    top: -10%;

    width: 100vw;
    height: 120vh;
}

.counter-overlay {
    position: relative;
    z-index: 1;
    display: flex;
    gap: 50px;
    text-align: center;
}

.counter-item {
    font-size: 2.5em;
    font-weight: bold;
}

.counter-label {
    font-size: 1em;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-top: 10px;
    opacity: 0.8;
}
</style>
<div class="video-container">
    <iframe src="https://www.youtube.com/embed/KWYu1i-QUvI?autoplay=1&mute=1&loop=1&controls=0&playlist=KWYu1i-QUvI"
        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

    <div class="counter-overlay">
        <div class="counter-item">
            <div id="counter1">0</div>
            <div class="counter-label">Khách hàng</div>
        </div>
        <div class="counter-item">
            <div id="counter2">0</div>
            <div class="counter-label">Dự án đã hoàn thành</div>
        </div>
        <div class="counter-item">
            <div id="counter3">0</div>
            <div class="counter-label">Số lượng đội ngũ</div>
        </div>
    </div>
</div>

<script>
function animateCounter(id, target, duration) {
    let element = document.getElementById(id);
    let start = 0;
    let increment = target / (duration / 50);

    let counter = setInterval(() => {
        start += increment;
        if (start >= target) {
            element.innerText = target;
            clearInterval(counter);
        } else {
            element.innerText = Math.floor(start);
        }
    }, 50);
}

animateCounter("counter1", 391, 3000); // Khách hàng
animateCounter("counter2", 1091, 3000); // Dự án đã hoàn thành
animateCounter("counter3", 66, 3000); // Số lượng đội ngũ
</script>


<div class="cuoi">
    <div class="thang"></div>
    <div class="di">
        <p>It's time to change</p>
        <h4>Chúng tôi có thể<br />giúp bạn!</h4>
        <button class="buttonx">Liên hệ với chúng tôi</button>
    </div>
</div>
<div class="bg-w2"></div>
<?php
include 'config/foot.php';
?>