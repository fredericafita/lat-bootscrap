<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio Frederica Fita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <style>
    html {
      scroll-behavior: smooth;
    }
    .navbar-nav .nav-link.active {
      font-weight: bold;
      color: #0d6efd !important;
      border-bottom: 2px solid #0d6efd;
    }
  </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70" tabindex="0">

  <!-- NAVBAR -->
  <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#home">FredericaFita</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HOME SECTION -->
  <section id="home" class="vh-100 d-flex align-items-center text-center bg-home">
    <div class="container">
      <h1 class="fw-bold display-4">Halo, Saya <span class="text-primary">Frederica Fita</span></h1>
      <p class="lead">Mahasiswa Mekatronika | Web Developer Enthusiast | Creative Thinker</p>
      <a href="#projects" class="btn btn-primary mt-3">Lihat Proyek Saya</a>
    </div>
  </section>

<!-- SERVICE SECTION -->
<section id="service" class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="fw-bold">Proyek Saya</h2>
      <p class="text-muted">Data berikut diambil secara dinamis dari database.</p>
    </div>
    <div class="row">
      <?php
      include 'koneksi.php';
      $result = mysqli_query($conn, "SELECT * FROM service");
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm text-center">
            <!-- tambahkan gambar -->
            <img src="<?= $row['title']; ?>" class="card-img-top" >
            <div class="card-body">
              <p class="card-text"><?= $row['description']; ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>



  <!-- ABOUT SECTION -->
  <section id="about" class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold">About Me</h2>
        <p class="text-muted">Sedikit cerita tentang saya dan perjalanan saya di dunia teknologi.</p>
      </div>
      <div class="row align-items-center">
        <div class="col-md-5">
          <img src="gambar/frederica.jpg" alt="Frederica Fita" class="img-fluid rounded shadow-sm">
        </div>
        <div class="col-md-7">
          <h3 class="fw-semibold">Halo, Saya Frederica Fita 👋</h3>
          <p class="mt-3">Saya adalah mahasiswa yang tertarik pada dunia <strong>elektronika, pemrograman, dan desain web</strong>. 
          Saya gemar belajar hal baru dan mengerjakan proyek yang menggabungkan hardware dan software. 
          Fokus saya saat ini adalah mempelajari integrasi sistem cerdas dan aplikasi berbasis web modern.</p>

          <ul class="list-unstyled mt-3">
            <li>🌱 Sedang belajar: C++, Bootstrap, dan IoT</li>
            <li>💡 Minat: Drone Technology, Embedded System, dan Web Development</li>
            <li>📍 Lokasi: Indonesia</li>
          </ul>

          <!-- ChartJS Canvas -->
          <div class="mt-4">
            <canvas id="skillChart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- DATA REALTIME SECTION -->
<section id="realtime" class="py-5 bg-body-secondary">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="fw-bold">Data Statistik Realtime</h2>
      <p class="text-muted">Grafik berikut diambil langsung dari database menggunakan PHP dan Chart.js.</p>
    </div>
    <canvas id="realtimeChart" height="120"></canvas>
  </div>
</section>


  <!-- CONTACT SECTION -->
  <section id="contact" class="py-5 bg-body-secondary">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">Contact Me</h2>
      <p class="text-muted">Ingin berkolaborasi atau sekadar menyapa? Kirim pesan melalui form berikut 👇</p>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form action="save_message.php" method="POST" class="p-4 border rounded shadow-sm bg-white">
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Pesan</label>
              <textarea name="message" id="message" rows="4" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Kirim</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="text-center py-3 bg-dark text-white">
    <p class="mb-0">© 2025 Frederica Fita — All Rights Reserved.</p>
  </footer>

  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // --- MENU ACTIVE SAAT SCROLL ---
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".nav-link");

    window.addEventListener("scroll", () => {
      let current = "";
      sections.forEach(section => {
        const sectionTop = section.offsetTop - 80;
        if (scrollY >= sectionTop) current = section.getAttribute("id");
      });

      navLinks.forEach(link => {
        link.classList.remove("active");
        if (link.getAttribute("href") === "#" + current) {
          link.classList.add("active");
        }
      });
    });

    // --- AUTOSCROLL SAAT KLIK MENU ---
    navLinks.forEach(link => {
      link.addEventListener("click", (e) => {
        e.preventDefault();
        const targetId = link.getAttribute("href");
        document.querySelector(targetId).scrollIntoView({ behavior: "smooth" });
      });
    });

    // --- CHART.JS DATA STATIS ---
    const ctx = document.getElementById('skillChart').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['C++', 'Arduino', 'PLC', 'SolidWorks', 'Python'],
        datasets: [{
          label: 'Skill Level (%)',
          data: [85, 90, 75, 80, 70],
          backgroundColor: 'rgba(13, 110, 253, 0.6)',
          borderColor: 'rgba(13, 110, 253, 1)',
          borderWidth: 1,
          borderRadius: 8
        }]
      },
      options: {
        scales: {
          y: { beginAtZero: true, max: 100 }
        },
        plugins: {
          legend: { display: true, position: 'bottom' }
        }
      }
    });
  </script>
  <script>
  const ctxRealtime = document.getElementById('realtimeChart').getContext('2d');
  let realtimeChart;

  async function fetchData() {
    const response = await fetch('get_data.php');
    const data = await response.json();
    const labels = data.map(item => item.label);
    const values = data.map(item => item.nilai);
    return { labels, values };
  }

  async function updateChart() {
    const { labels, values } = await fetchData();

    if (!realtimeChart) {
      realtimeChart = new Chart(ctxRealtime, {
        type: 'line',
        data: {
          labels: labels,
          datasets: [{
            label: 'Nilai Realtime',
            data: values,
            fill: true,
            borderColor: 'rgba(13, 110, 253, 1)',
            backgroundColor: 'rgba(13, 110, 253, 0.2)',
            tension: 0.3
          }]
        },
        options: {
          responsive: true,
          scales: { y: { beginAtZero: true } },
          plugins: { legend: { position: 'bottom' } }
        }
      });
    } else {
      realtimeChart.data.labels = labels;
      realtimeChart.data.datasets[0].data = values;
      realtimeChart.update();
    }
  }

  // panggil pertama kali
  updateChart();

  // update otomatis setiap 5 detik
  setInterval(updateChart, 5000);
</script>

</body>

</html>
