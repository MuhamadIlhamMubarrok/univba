<style>
    a{
    text-decoration:none;
    }
    .floating_btn {
        position: fixed;
        bottom: 10px;
        right: 30px;
        width: 105px;
        height: 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }

    @keyframes pulsing {
    to {
        box-shadow: 0 0 0 30px rgba(232, 76, 61, 0);
    }
    }

    .contact_icon {
    background-color: #42db87;
    color: #fff;
    width: 60px;
    height: 60px;
    font-size:30px;
    border-radius: 50px;
    text-align: center;
    box-shadow: 2px 2px 3px #999;
    display: flex;
    align-items: center;
    justify-content: center;
    transform: translatey(0px);
    animation: pulse 1.5s infinite;
    box-shadow: 0 0 0 0 #42db87;
    -webkit-animation: pulsing 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
    -moz-animation: pulsing 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
    -ms-animation: pulsing 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
    animation: pulsing 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
    font-weight: normal;
    font-family: sans-serif;
    text-decoration: none !important;
    transition: all 300ms ease-in-out;
    }


    .text_icon {
        font-family: fantasy;
        background-color: #00de8e;
        padding-left: 10px;
        padding-right: 10px;
        border-radius: 10px;
        margin-top: 8px;
        color: #000000;
        font-size: 15px;
    }
</style>
<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4><img src="/images/logo/logo-azzuhra.png" width="225px"></h4>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Tautan Berguna</h4>
  	 			<ul>
  	 				<li><a href="index.php?m=daftar">Pendaftaran Online</a></li>
  	 				<li><a href="index.php?m=kontak">Kontak</a></li>
  	 				<li><a href="index.php?m=page&id=14">Biaya Kuliah</a></li>
  	 				<li><a href="index.php?m=fasilitas-kampus">Galeri Foto</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Alamat</h4>
  	 			<ul>
  	 				<li><a href="https://maps.app.goo.gl/dWJU55Fm6hpnoeBY6"  target="_blank">JL. Melati No.16, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28292</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="https://kuliahkaryawan.net/"  target="_blank"><i class="fab fa-google"></i></a>
  	 				<a href="https://www.facebook.com/profile.php?id=61562847934936" target="_blank"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="https://www.instagram.com/k2.institutazzuhra/ " target="_blank"><i class="fab fa-instagram"></i></a>
  	 				<a href="https://twitter.com/_kuliahkaryawan"  target="_blank"><i class="fab fa-twitter"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="floating_btn">
    <a target="_blank" href="https://api.whatsapp.com/send?phone=6287818000547&text=Hallo%20Admin,%20Saya%20Mau%20Bertanya%20?%20Sumber%20:%20https%3A%2F%2Finstitutazzuhra.info%2F">
      <div class="contact_icon">
        <i class="fa fa-whatsapp my-float"></i>
      </div>
    </a>
    <p class="text_icon"><b>Chat WA</b></p>
  </div>

<!-- *** COPYRIGHT END *** -->