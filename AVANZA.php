<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>

        .btn
        {
          border: 2px solid black;
          background-color: white;
          color: black;
          padding: 14px 28px;
          font-size: 16px;
          cursor: pointer;
          text-align: center;
          position: relative;
          display: inline-block;
        }
        .dl 
        {
          border-color: #2196F3;
          color: dodgerblue;
        }
        .dl:hover 
        {
          background: #2196F3;
          color: white;
        }
        .back 
        {
          border-color: #f44336;
          color: red;
        }
        .back:hover 
        {
          background: #f44336;
          color: white;
        }
        .img-container1 img
        {
            width: 100%;
            height: auto;
        }
        .img-container2 img
        {
            width: 100%;
            height: auto;
            position: relative;

        }
        .img-container 
        {
          width:100%;
          height:auto;
          text-align: center;
        }
        .ava
        {
            width: 25%;
            height: 70px;
            padding: 10px;
            left: 50px;
            position: relative;
            display: inline-block;
            color:red;
        }
        .ava2
        {
            width: 20%;
            height: 150px;
            padding: 10px;
            top: 45px;
            left: 750px;
            text-align: center;
            position: relative;
            display: inline-block;
            color:red;
        }
        .center
        {
          text-align: center;
        }
        div.scroll
        {
          overflow-x: hidden;
        }

        #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}

        </style>


      <title>Toyota Avanza</title>
    </head>
  <body>

<div class="scroll">

  <div class="img-container1">
  <img src="AVANZA1.png" alt="">
  </div>

  <div class="problem">
          <div class="ava">
          <h1>AVANZA Veloz</h1>
          </div>

          <div class="ava2">
          <h1>MSRP</h1>
          <h2>₱1,077,000</h2>
          </div>

          <div class="img-container2">
          <br>
          <br>
          <img src="AVANZAMID.png" alt="" style= >
          </div>
  </div>


  <div class="img-container">
  <img src="AVANZAB.png" alt="">
  </div>


  <div class="center">

    <h2>SPECIFICATIONS</h2>


    <table class="table table-dark">
      <thead>
        <tr>
          <th>DIMENSION AND WEIGHT</th>
        </tr>
      </thead>

      <table class="table table-striped table-light">
      <tbody>
        <tr>
          <td>Overall Dimensions (mm): 4,200 x 1,660 x 1,695</td>
        </tr>
        <tr>
          <td>Wheelbase (mm): 2,655</td>
        </tr>
        <tr>
          <td>Seating Capacity: 7</td>
        </tr>
      </tbody>
    </table>



    <table class="table table-dark">
      <thead>
        <tr>
          <th>ENGINE</th>
        </tr>
      </thead>

      <table class="table table-striped table-light">
      <tbody>
        <tr>
          <td>Engine Type: 4 Cylinder, In-line, 16 Valve DOHC, Chain Drive with Dual VVT-i</td>
        </tr>
        <tr> 
          <td>Engine Displacement (cc): 1,496</td>
        </tr>
        <tr>
          <td>Maximum Output (ps/rpm): 103 / 6000</td>
        </tr>
        <tr>
          <td>Maximum Torque (Nm/Rpm): 136 / 4200</td>
        </tr>
        <tr>
          <td>Fuel Capacity (L): 45</td>
        </tr>
      </tbody>
    </table>



    <table class="table table-dark">
      <thead>
        <tr>
          <th>TRANSMISSION</th>
        </tr>
      </thead>

      <table class="table table-striped table-light">
      <tbody>
        <tr>
          <td>Power Transmission: 4-Speed A/T</td>
        </tr>
        <tr>
          <td>Front Brake / Rear Brake: Ventilated Discs / Leading-Traling Drums</td>
        </tr>
        <tr>
          <td>Tires: 185 / 65 R15</td>
        </tr>
        <tr>
          <td>Wheels (size): 15 x 5J Alloy</td>
        </tr>
      </tbody>
    </table>

    <div class="center">
      <div id="container">
        <form method="get" action="https://www.toyotapasig.com/wp-content/uploads/2018/09/Avanza-Brochure.pdf" target="_blank">
        <button onclick="" class="btn dl">Download Brochure</button>
        </form>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        </div>
    </div>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
  </body>
</html>