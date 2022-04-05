<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>
    <!-- CSS Bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
   <!--- bootstrap icon-->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
   <!--- my css--->
   <link rel="stylesheet" href="<?=baseurl;?>/asset/css/style.css" />
  </head>
  <body id="home">
    <!--- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm fixed-top" style="background-color: #808080;">
      <div class="container">
        <a class="navbar-brand text-white" href="#" text-white>AZHARMZ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#About">About</a>
            </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#projects">Project</a></li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#contact">Contact</a></li>
              </ul>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <?php foreach($data['profile'] as $pro):?>
    <!--jumbotron-->
    <section class="jumbotron text-center">
      <img src="<?= baseurl;?>/asset/img/<?= $pro['foto'];?>"alt="" width="300"  height="300" class="img-thumbnail image rounded-circle"/>
      <h1 class="display-4 text-white"><?= $pro['nama'];?></h1>
      <p class="lead text-white"><?= $pro['jabatan'];?>|<?= $pro['perusahaan'];?></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#808080" fill-opacity="1" d="M0,128L30,149.3C60,171,120,213,180,197.3C240,181,300,107,360,96C420,85,480,139,540,144C600,149,660,107,720,90.7C780,75,840,85,900,117.3C960,149,1020,203,1080,224C1140,245,1200,235,1260,218.7C1320,203,1380,181,1410,170.7L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    </section>
    <?php endforeach ?>
    <!-- akhir jumbotron -->
    <!-- About -->
    <section id="About">
      <div class="row text-center">
        <h2>About</h2>
      </div>
      <div class="row justify-content-center">
        <?php foreach($data['about'] as $ab):?>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><?= $ab['column1'];?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?= $ab['column3'];?></h6>
              <p class="card-text"><?= $ab['column2'];?></p>
            </div>
          </div>
          <?php endforeach ?>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#rgb(65, 183, 209)" fill-opacity="1" d="M0,64L20,80C40,96,80,128,120,149.3C160,171,200,181,240,170.7C280,160,320,128,360,144C400,160,440,224,480,256C520,288,560,288,600,250.7C640,213,680,139,720,96C760,53,800,43,840,80C880,117,920,203,960,234.7C1000,267,1040,245,1080,224C1120,203,1160,181,1200,192C1240,203,1280,245,1320,245.3C1360,245,1400,203,1420,181.3L1440,160L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir About -->
<!-- Project -->
    <section id="projects">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,128L30,138.7C60,149,120,171,180,197.3C240,224,300,256,360,272C420,288,480,288,540,250.7C600,213,660,139,720,106.7C780,75,840,85,900,96C960,107,1020,117,1080,144C1140,171,1200,213,1260,192C1320,171,1380,85,1410,42.7L1440,0L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
      <div>
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My projects</h2>
          </div>
        </div>
<div class="row justify-content-center">
  <?php foreach($data['project'] as $pro):?>    
        <div class="col-md-4 mb-3">
          <div class="card">
          <img src="<?= baseurl;?>/asset/img/<?= $pro['poto'];?>" class="card-img-top" alt="project" height="400px" width="500px">
          <div class="card-body">
            <h3><?= $pro['nama_p'];?></h3>
            <p class="card-text"><?= $pro['ket'];?></p>
         </div>
         </div>
         </div>
         <?php endforeach ?>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,288L30,282.7C60,277,120,267,180,229.3C240,192,300,128,360,106.7C420,85,480,107,540,138.7C600,171,660,213,720,240C780,267,840,277,900,272C960,267,1020,245,1080,218.7C1140,192,1200,160,1260,144C1320,128,1380,128,1410,128L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Project -->
<!-- Contact -->
    <section id="contact">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,128L30,138.7C60,149,120,171,180,197.3C240,224,300,256,360,272C420,288,480,288,540,250.7C600,213,660,139,720,106.7C780,75,840,85,900,96C960,107,1020,117,1080,144C1140,171,1200,213,1260,192C1320,171,1380,85,1410,42.7L1440,0L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
              <form action="<?=baseurl;?>/Portofolio/pesan"method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_k" id="name" aria-describedby="name" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="email" required/>
                </div>
                <div class="mb-3">
                  <label for="Pesan" class="form-label">Pesan</label>
                  <textarea class="form-control"name="pesan" id="Pesan"rows="3" required></textarea>
                </div>
             <button type="submit" name="submit"class="btn btn-info">Kirim</button>
           </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000" fill-opacity="1" d="M0,128L20,138.7C40,149,80,171,120,149.3C160,128,200,64,240,37.3C280,11,320,21,360,69.3C400,117,440,203,480,229.3C520,256,560,224,600,197.3C640,171,680,149,720,117.3C760,85,800,43,840,42.7C880,43,920,85,960,96C1000,107,1040,85,1080,106.7C1120,128,1160,192,1200,197.3C1240,203,1280,149,1320,149.3C1360,149,1400,203,1420,229.3L1440,256L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Contact -->
<!-- Footer -->
    <footer class="text-white text-center pb-4">
      <p>Creater with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="https:/www.instagram.com/vinaaatae_"class="text-white fw-bold" style="text-decoration: none;">AZHARMZ</a></p>

    </footer>
    <!-- Akhir Footer -->
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>