<!-- Untuk basecode nya saya ambil dari w3school -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Tugas Pertemuan 3 Christine 5026241028 </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- Selanjutnya, disini saya coba untuk ganti warna jumbotronnya, font, dll dengan menambahkan bagian style -->
  <style>
    /* Mengganti font di webb */
    body {
      font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;
    }

    /* line 13-20 untuk settingan header di halaman web */
    /* border radius agar lebih rounded */
    .header {
      background-color: #fce4ec;
      color: #ad1457;
      padding: 40px 0;
      margin-top: 20px;
      border-radius: 15px;
    }

    /* line 23-27 untuk jumbotron yg profil section */
    .profile-section {
      background-color: white;
      border: none;
      padding: 40px 0;
    }

    /* line 30-34 untuk atur self potrait nya sesuai */
    .self-potrait {
      aspect-ratio: 1 / 1;
      object-fit: cover;
      border-radius: 15px;
    }

    /* line 37-41 untuk jumbotron bawah (kalau di w3school Full-width jumbotron) */
    /* Margin bottom dibuat 0 supaya menempel di bagian bawah web */
    .fullwidth-jumbotron {
      background-color: #ad1457;
      color: white;
      margin-bottom: 0;
    }
  </style>
<!-- line dibawah ini dapatnya dari w3school -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron header text-center">
    <h1 class="display-4">Christine Rotua Deborah Hutabarat</h1>
    <p class="lead">Sophomore Information System Student at ITS</p>
  </div>

  <div class="jumbotron profile-section">
    <div class="row align-items-center">
      <div class="col-md-4 text-center">
        <img src="file:///C:/Users/christine%20rotua/Downloads/Christine%202026%20self%20potrait.jpeg" class="self-potrait img-thumbnail">
      </div>
      <div class="col-md-8">
        <h2 style="color: #ad1457;">About Me</h2>
        <p>Hi! Welcome to my page! I am an Information Systems student currently taking a Web Programming course. Through this course, I hope to build a great portfolio for my website. Stay tuned for my learning journey in this class!</p>
        <!-- Ini lihat dari kelas responsive kemarin -->
        <a class="btn btn-outline-danger" href="#" role="button">See my portfolio here!</a>
      </div>
    </div>
  </div>
</div>

<div class="jumbotron jumbotron-fluid fullwidth-jumbotron mt-5">
  <div class="container">
    <h2><center>Interested in Collaborating?</center></h2>
    <p><center>Feel free to reach me out!</center></p>
    <p>
      <center><b>Instagram:</b> @christineerotua |
      <b>LinkedIn:</b> Christine Hutabarat</center>
    </p>
  </div>
</div>

</body>
</html>
