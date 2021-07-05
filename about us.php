<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}


.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 40%;
  margin:10px;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
<?php include("./header.html"); ?>

<h2  class ="bg-dark bg-light text-white mt-n5 p-4 my-5 text-center ">Home Decrorations</h2>

<div class ="text-center container mt-n5">
<div class="text-center row">
  <div class="column">
    <div class="card">
      <img src="https://www.homeguide.com.sg/wp-content/uploads/2017/08/home-interior-design-trends-lighting.jpg" alt="Jane" style="width:100%; height:200px;">
      <div class="container">
        <h2>Interior Design</h2>
        <button class="button"><a href="tel:+919945131276">Contact</a></button>
        <button class="button"><a href="https://pixabay.com/images/search/interior%20design/">Gallary</a></button>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://5.imimg.com/data5/IB/JL/MY-11540162/pvc-panel-ceiling-design-500x500.jpg" alt="Mike" style="width:100%;height:200px;">
      <div class="container">
        <h2>PVC Ceilings Design</h2>
        <button class="button"><a href="tel:+919945131276">Contact</a></button>
        <button class="button"><a href="https://www.google.co.in/search?q=pvc+ceiling+design+for+home&tbm=isch&chips=q:pvc+ceiling+design+for+home,online_chips:living+room:ZZ_LC_mAu9M%3D,online_chips:modern:jzL_sAERFz4%3D&hl=en&sa=X&ved=2ahUKEwiE-9Hy96XwAhXynEsFHWxvDwIQ4lYoAXoECAEQHQ&biw=1263&bih=577">Gallary</a></button>
      </div>
    </div>
  </div>
  
  <div class=" text-center column">
    <div class="card">
      <img src="./img/design (8).jpg" alt="John" style="width:100%; height:200px;">
      <div class="container">
        <h2>POP Ceilings Design</h2>
        <button class="button"><a href="tel:+919945131276">Contact</a></button>
        <button class="button"><a href="https://www.google.co.in/search?q=ceilings+pop+latest+design+for+hall&tbm=isch&hl=en&chips=q:ceilings+pop+latest+design+for+hall,online_chips:modern:Z17ZlNqXEvw%3D&sa=X&ved=2ahUKEwirpbO--KXwAhVQRysKHYOzAKgQ4lYoA3oECAEQHw&biw=1263&bih=577">Gallary</a></button>
      </div>
    </div>
  </div>
</div>
<div class=" text-center column">
    <div class="card">
      <img src="https://tse4.mm.bing.net/th?id=OIP._tjLpHzVsuRkkQSNOUmq0wHaDN&pid=Api&P=0&w=318&h=139" alt="John" style="width:100%; height:200px;">
      <div class="container">
        <h2>Painter Services</h2>
        <button class="button"><a href="tel:+919945131276">Contact</a></button>
        <button class="button"><a href="https://www.google.co.in/search?q=Painter+Services+latest+design+for+hall&tbm=isch&ved=2ahUKEwiNhYPD-KXwAhVEH3IKHYvNBBkQ2-cCegQIABAA&oq=Painter+Services+latest+design+for+hall&gs_lcp=CgNpbWcQA1CBzANYgcwDYL7tA2gAcAB4AIABlAKIAZQCkgEDMi0xmAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=S_SLYM2zDcS-yAOLm5PIAQ&bih=577&biw=1263&hl=en">Gallary</a></button>
      </div>
    </div>
  </div>

  <div class=" text-center column">
    <div class="card">
      <img src="https://www.hays-nyc.com/wp-content/uploads/2012/12/Carpenter-Service-NYC.jpg" alt="John" style="width:100%; height:200px;">
      <div class="container">
        <h2>Carpenter Service</h2>
        <button class="button"><a href="tel:+919945131276">Contact</a></button>
        <button class="button"><a href="https://www.google.co.in/search?q=Carpenter+Service+latest+design+for+hall&tbm=isch&ved=2ahUKEwjNvKXi-KXwAhWZOCsKHbRSBd8Q2-cCegQIABAA&oq=Carpenter+Service+latest+design+for+hall&gs_lcp=CgNpbWcQA1DF3AhYxdwIYMjnCGgAcAB4AIABwQOIAcEDkgEDNC0xmAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=jPSLYM3GMJnxrAG0pZX4DQ&bih=577&biw=1263&hl=en">Gallary</a></button>
      </div>
    </div>
  </div>

  <div class=" text-center column">
    <div class="card">
      <img src="http://youmeandtrends.com/wp-content/uploads/2016/07/Perfect-Pink-Modular-Kitchen-ideas-and-pictures.jpg" alt="John" style="width:100%; height:200px;">
      <div class="container">
        <h2>Modular Kitchen</h2>
        <button class="button"><a href="tel:+919945131276">Contact</a></button>
        <!-- <button class="button"><a href="https://pixabay.com/images/search/interior%20design/">Gallary</a></button> -->
      </div>
    </div>
  </div>

  <div class=" text-center column">
    <div class="card">
      <img src="https://tse1.mm.bing.net/th?id=OIP.iY6eD2bZn4VwslIvPxwRCgHaE7&pid=Api&P=0&w=248&h=166" alt="John" style="width:100%; height:200px;">
      <div class="container">
        <h2>Renovation Service</h2>
        <button class="button"><a href="tel:+919945131276">Contact</a></button>
        <button class="button"><a href="https://i.pinimg.com/originals/82/09/50/820950a547b07216c47495d439f8df13.jpg">Gallary</a></button>
      </div>
    </div>
  </div>

  <div class=" text-center column">
    <div class="card">
      <img src="https://5.imimg.com/data5/YT/KU/CT/SELLER-3546945/shera-wood-cladding-500x500.jpg" alt="John" style="width:100%; height:200px;">
      <div class="container">
        <h3>Shera Wood cladding</h3>
        <button class="button"><a href="tel:+919945131276">Contact</a></button>
        <button class="button"><a href="https://www.google.co.in/search?q=Shera+Wood+cladding+latest+design+for+home&tbm=isch&ved=2ahUKEwj7rNWc-qXwAhUQXCsKHc4NCoEQ2-cCegQIABAA&oq=Shera+Wood+cladding+latest+design+for+home&gs_lcp=CgNpbWcQA1C15wNYtecDYJD4A2gAcAB4AIAB1AKIAdQCkgEDMy0xmAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=E_aLYLvXJ5C4rQHOm6iICA&bih=577&biw=1263&hl=en">Gallary</a></button>
      </div>
    </div>
  </div>

  <div class=" text-center column">
    <div class="card">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6toZByiLoOGD_vgoWD9HOoLqap8CGXy4cZnCKKWaAKRbrKSGLDkw4QdA94g5WKsm3UyY&usqp=CAU" alt="John" style="width:100%; height:200px;">
      <div class="container">
        <h4>Marble,Granite,Tiles,fitting</h4>
        <button class="button"><a href="tel:+919945131276">Contact</a></button>
        <button class="button"><a href="https://www.google.co.in/search?q=Marble%2CGranite%2CTiles%2Cfitting+latest+design+for+home&tbm=isch&ved=2ahUKEwj7kLu8-qXwAhWOQn0KHcy7BawQ2-cCegQIABAA&oq=Marble%2CGranite%2CTiles%2Cfitting+latest+design+for+home&gs_lcp=CgNpbWcQA1ChrANYoawDYOW3A2gAcAB4AIABsgKIAbICkgEDMy0xmAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=VvaLYPuNFI6F9QPM95bgCg&bih=577&biw=1263&hl=en">Gallary</a></button>
      </div>
    </div>
  </div>


</div>
</body>
</html>
