<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="UTF-8" />
  <title>MCUDC 熱舞社</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="MCUDC 熱舞社官方網站，介紹 Locking、Breaking、Jazz、HipHop、Popping 組別及表演活動。" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <div class="scale-wrapper">
    <!-- 導覽列 -->
    <header class="navbar">
      <div class="logo">MCUDC</div>
      <nav>
        <a href="#home">首頁</a>
        <div class="dropdown">
          <a href="#about">關於我們 ▾</a>
          <div class="dropdown-content">
            <a href="#locking">Locking 組介紹</a>
            <a href="#breaking">Breaking 組介紹</a>
            <a href="#jazz">Jazz 組介紹</a>
            <a href="#hiphop">HipHop 組介紹</a>
            <a href="#popping">Popping 組介紹</a>
          </div>
        </div>
        <a href="#gallery">活動花絮</a>
      </nav>
      <div class="menu-toggle" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>

    <!-- 手機選單 -->
    <nav id="mobileMenu" class="mobile-nav">
      <a href="#home">首頁</a>
      <a href="#about">關於我們</a>
      <a href="#locking">Locking 組</a>
      <a href="#breaking">Breaking 組</a>
      <a href="#jazz">Jazz 組</a>
      <a href="#hiphop">HipHop 組</a>
      <a href="#popping">Popping 組</a>
      <a href="#gallery">活動花絮</a>
      <a href="join.php">加入我們</a>
    </nav>

    <!-- 首頁橫幅區 -->
    <section class="hero" id="home">
      <div class="hero-content">
        <h1>舞動青春．點燃熱血</h1>
        <p>加入我們，一起創造舞台上的奇蹟。</p>
      </div>
    </section>

    <!-- 關於我們 -->
    <section class="about" id="about">
      <div class="container">
        <h2>關於我們</h2>
        <p>桃銘熱舞總共有 5 種舞風，分別是 H、J、L、P、B。</p>
        <p>只要對跳舞有興趣，不管哪種舞風都期待你們的加入。</p>
        <p>就算完全沒有基礎，只要你熱愛街舞這個文化，學長姐都會很親切且耐心的教大家。</p>
        <p>在這裡，不管是喜歡表演還是比賽，桃銘熱舞都有屬於你的舞台。</p>
        <p>期待愛跳舞的你們一起加入桃銘熱舞這個大家庭！</p>
      </div>
    </section>

    <!-- Locking 組介紹 -->
    <section class="locking-section" id="locking">
      <div class="container">
        <h2>Locking 組</h2>
        <p>Locking 是源自 1970 年代美國的街舞風格，由 Don Campbell 所創，屬於 Funk Style 的一種。</p>
        <p>誇張的大幅度肢體擺動、快速手勢變換，以及與觀眾間的互動感，常伴隨著幽默、戲劇性的表現風格。</p>
        <p>Locking 強調節奏與律動的精準配合，適合喜歡表演、風格鮮明、有舞台魅力的舞者參與。</p>
      </div>
    </section>

    <!-- Locking 精選影片 -->
    <section id="locking-video">
      <div class="container">
        <div class="video-row">
          <div class="video-box">
            <h3>24屆期末大型成發《Golden Street》</h3>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/Fu4ueUKc2UI" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="video-box">
            <h3>25屆期初迎新舞展《NextONE》</h3>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/bzkGPYPuyYs?si=xkXjOD5fuqclgM7a" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- Locking 精彩照片 -->
    <section class="gallery">
      <div class="container">
        <div class="photo-grid locking-grid">
          <img src="img/L1.webp" alt="Locking 表演 1" loading="lazy" />
          <img src="img/L2.webp" alt="Locking 表演 2" loading="lazy" />
          <img src="img/L3.webp" alt="Locking 表演 3" loading="lazy" />
          <img src="img/L4.webp" alt="Locking 表演 4" loading="lazy" />
          <img src="img/L5.webp" alt="Locking 表演 5" loading="lazy" />
          <img src="img/L6.webp" alt="Locking 表演 6" loading="lazy" />

        </div>
      </div>
    </section>

    <!-- Breaking 組介紹 -->
    <section class="breaking-section" id="breaking" style="background-color: #ffffff; color: #000;">
      <div class="container">
        <h2>Breaking 組</h1>
        <p>Breaking（B-boying/B-girling）起源於 1970 年代紐約布朗克斯，融合力量、速度、創意與技巧。</p>
        <p>包含 Toprock（站立動作）、Downrock（地板動作）、Power moves（如風車、頭轉）、Freeze（定格動作）等元素。</p>
        <p>Breaking 不只是舞蹈，更是一種街頭文化的態度，象徵原創力與不屈不撓的精神。</p>
      </div>
    </section>

    <!-- Breaking 精選影片 -->
    <section id="breaking-video" style="background-color: #ffffff; color: #000;">
      <div class="container">
        <div class="video-row">
          <div class="video-box">
            <h3>24屆期末大型成發《Golden Street》</h3>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/MDb8qvlcPr0?si=HaeFYIwUKOPi6ib3" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="video-box">
            <h3>25屆期初迎新舞展《NextONE》</h3>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/eneC5Gr9C8E?si=NWyf5nkr1ChTs3IU" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- Breaking 精彩照片 -->
    <section class="gallery" style="background-color: #ffffff; color: #000;">
      <div class="container">
        <div class="photo-grid locking-grid">
          <img src="img/B1.webp" alt="Breaking 表演 1" loading="lazy" />
          <img src="img/B2.webp" alt="Breaking 表演 2" loading="lazy" />
          <img src="img/B3.webp" alt="Breaking 表演 3" loading="lazy" />
          <img src="img/B4.webp" alt="Breaking 表演 4" loading="lazy" />
          <img src="img/B5.webp" alt="Breaking 表演 5" loading="lazy" />
          <img src="img/B6.webp" alt="Breaking 表演 6" loading="lazy" />
        </div>
      </div>
    </section>

    <!-- Jazz 組介紹 -->
    <section class="Jazz-section" id="jazz">
      <div class="container">
        <h2>Jazz 組</h2>
        <p>Jazz 融合芭蕾、現代舞與街舞元素，呈現流暢卻具爆發力的動作。</p>
        <p>動作線條講究，擅長以肢體語言講述故事，注重情緒表達與節奏感。</p>
        <p>適合想提升柔軟度、身體控制力及舞台張力的舞者。</p>
      </div>
    </section>

    <!-- Jazz 精選影片 -->
    <section id="jazz-video">
      <div class="container">
        <div class="video-row">
          <div class="video-box">
            <h3>24屆期末大型成發《Golden Street》</h3>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/HWLFhSFZKY0?si=1GAbxfon81M9VIZh" frameborder="0" allowfullscreen></iframe> 
          </div>
          <div class="video-box">
            <h3>25屆期初迎新舞展《NextONE》</h3>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/KJEs6DyBS2k?si=hL2dy-lXyXNldk7Q" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- Jazz 精彩照片 -->
    <section class="gallery">
      <div class="container">
        <div class="photo-grid locking-grid">
          <img src="img/J1.webp" alt="Jazz 表演 1" loading="lazy" />
          <img src="img/J2.webp" alt="Jazz 表演 2" loading="lazy" />
          <img src="img/J3.webp" alt="Jazz 表演 3" loading="lazy" />
          <img src="img/J4.webp" alt="Jazz 表演 4" loading="lazy" />
          <img src="img/J5.webp" alt="Jazz 表演 5" loading="lazy" />
          <img src="img/J6.webp" alt="Jazz 表演 6" loading="lazy" />
        </div>
      </div>
    </section>

    <!-- HipHop 組介紹 -->
    <section class="HipHop-section" id="hiphop" style="background-color: #ffffff; color: #000;">
      <div class="container">
        <h2>HipHop 組</h2>
        <p>HipHop 舞蹈源自街頭文化，講求 Groove（律動感）、節奏與個人風格。</p>
        <p>融合 Popping、Locking、House 等多種元素，並與現代音樂潮流緊密結合。</p>
        <p>強調自我表達與態度，是讓舞者在節奏中找到個人聲音的最佳平台。</p>
      </div>
    </section>

    <!-- HipHop 精選影片 -->
    <section id="hiphop-video" style="background-color: #ffffff; color: #000;">
      <div class="container">
        <div class="video-row">
          <div class="video-box">
            <h3>24屆期末大型成發《Golden Street》</h3>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/JW3SME6A5uw?si=0I6iXxA8zakNjOdU" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="video-box">
            <h3>25屆期初迎新舞展《NextONE》</h3>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/LeW5Fj1fc7c?si=vtzgk_HP3iBSL-vq" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- HipHop 精彩照片 -->
    <section class="gallery" style="background-color: #ffffff; color: #000;">
      <div class="container">
        <div class="photo-grid locking-grid">
          <img src="img/H1.webp" alt="HipHop 表演 1" loading="lazy" />
          <img src="img/H2.webp" alt="HipHop 表演 2" loading="lazy" />
          <img src="img/H3.webp" alt="HipHop 表演 3" loading="lazy" />
          <img src="img/H4.webp" alt="HipHop 表演 4" loading="lazy" />
          <img src="img/H5.webp" alt="HipHop 表演 5" loading="lazy" />
          <img src="img/H6.webp" alt="HipHop 表演 6" loading="lazy" />
        </div>
      </div>
    </section>

    <!-- Popping 組介紹 -->
    <section class="Popping-section" id="popping" >
      <div class="container">
        <h2>Popping 組</h2>
        <p>Popping 發源於 1970 年代加州，舞者透過快速肌肉收縮（pop）與波浪（wave）、幻影（tutting）、動畫感（animation）等技巧，創造出機械般的視覺效果。</p>
        <p>此舞風強調肌肉控制與節奏掌握，可展現剛硬帥氣或柔順流暢的多樣風格。</p>
        <p>Popping 是展現創意與技巧的絕佳舞台，適合追求獨特動作表現的舞者。</p>
      </div>
    </section>

    <!-- Popping 精選影片 -->
    <section id="popping-video">
      <div class="container">
        <div class="video-row">
          <div class="video-box">
            <h3>24屆期末大型成發《Golden Street》</h3>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/HWLFhSFZKY0?si=1GAbxfon81M9VIZh" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="video-box">
            <h3>25屆期初迎新舞展《NextONE》</h3>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/ZYSfIBfLo6o?si=zugAIqZKFXvCLmPT" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- Popping 精彩照片 -->
    <section class="gallery">
      <div class="container">
        <div class="photo-grid locking-grid">
          <img src="img/P1.webp" alt="Popping 表演 1" loading="lazy" />
          <img src="img/P2.webp" alt="Popping 表演 2" loading="lazy" />
          <img src="img/P3.webp" alt="Popping 表演 3" loading="lazy" />
          <img src="img/P4.webp" alt="Popping 表演 4" loading="lazy" />
          <img src="img/P5.webp" alt="Popping 表演 5" loading="lazy" />
          <img src="img/P6.webp" alt="Popping 表演 6" loading="lazy" />
        </div>
      </div>
    </section>

    <!-- 活動花絮 -->
    <section class="gallery" id="gallery">
      <div class="container">
        <h2>我們的日常</h2>
        <div class="photo-grid">
          <img src="img/A1.webp" alt="1" loading="lazy" />
          <img src="img/A2.webp" alt="2" loading="lazy" />
          <img src="img/A3.webp" alt="3" loading="lazy" />
          <img src="img/A4.webp" alt="4" loading="lazy" />

          <img src="img/A21.webp" alt="5" loading="lazy" />
          <img src="img/A22.webp" alt="6" loading="lazy" />
          <img src="img/A23.webp" alt="7" loading="lazy" />
          <img src="img/A24.webp" alt="8" loading="lazy" />

          <img src="img/A31.webp" alt="9" loading="lazy" />
          <img src="img/A32.webp" alt="10" loading="lazy" />
          <img src="img/A33.webp" alt="11" loading="lazy" />
          <img src="img/A34.webp" alt="12" loading="lazy" />

          <img src="img/A41.webp" alt="13" loading="lazy" />
          <img src="img/A42.webp" alt="14" loading="lazy" />
          <img src="img/A43.webp" alt="15" loading="lazy" />
          <img src="img/A44.webp" alt="16" loading="lazy" />
        </div>
      </div>
    </section>

    <!-- 頁尾 -->
    <footer style="background-color: #111; color: #fff; text-align: center; padding: 1rem 0;">
      <p>&copy; MCUDC25 r4c. All rights reserved.</p>
    </footer>
  </div>

  <!-- JavaScript -->
  <script>
    function toggleMenu() {
      document.getElementById("mobileMenu").classList.toggle("show");
    }
  </script>

</body>
</html>
