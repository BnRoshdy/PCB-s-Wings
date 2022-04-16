<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/homestyle.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <title>MYPCB</title>
</head>
<body>
    <header> <!----------------------HEADER------------------------>

        <a href="/" class="logo_admin">MYPCB</a>
        <div class="cust_data">
@if(Auth::check())
        <a href="/cart">My Cart</a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method = "POST" >
          @csrf
      </form>
@else
<a href="/login">login / register</a>

@endif
        </div>
    </header><!---------------------------------------------------->


    <section><!---------------------THE SLIDES------------------------------->
    <div class="slidershow middle">
    <div class="slides">

        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <div class="slide s1">
            <img src="image/home/1.jpg" alt="">
        </div>
        <div class="slide">
            <img src="image/home/2.jpg" alt="">
        </div>
        <div class="slide">
            <img src="image/home/3.jpg" alt="">
        </div>
        <div class="slide">
            <img src="image/home/4.jpg" alt="">
        </div>
    </div>
    <div class="navigation">
        <button class="btn">
          @if(Auth::check())
            <a  href="/order" class="order-btn">order now</a>
          @else
          <a  href="{{route('login')}}" class="order-btn">order now</a>
          @endif
        </button>
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
    </div>
    </div>
    <script type="text/javascript">
    var counter = 1 ;
    setInterval(function(){
      document.getElementById('r'+ counter).checked=true;
      counter++;
      if(counter>4){
        counter = 1;
      }
    },4000);
    </script>
    </section><!---------------------------------------------------->
  <div class="contentx">
  <h1>PCB Service</h1>
  </div>
    <section class="sec-2">
        <div class="d-one">
        <div class="d-insides">
            <div class="d-image">
                <img src="image/home/PCB-mani.png" alt="">
            </div>
            <div class="content">
            <h1>PCB Manufacturing</h1>
            <p>PCBCart offers full-feature PCB
            production services with high reliability
            to be totally compatible with your requirement.Business covers rigid FR4
            PCBs, HDI PCBs, FPC, Aluminum PCBs, Rogers PCBs, etc.</p>
            </div>
        </div>
        </div>
        <div class="d-two">
        <div class="d-insides">
            <div class="d-image">
                <img src="image/home/PCB-supp.png" alt="">
            </div>
            <div class="content">
            <h1>PCB Stencil</h1>
            <p>Covering PCB fabrication, parts sourcing, SMT and/or THT assembly, PCBCart’s one-stop turnkey PCBA services can be flexibly combined to meet your project’s scope, quality, schedule and budget needs.</p>
            </div>
        </div>
        </div>

    </section>


    <footer>
        <div class="d-five">
            <h2>title</h2>
<p>In our company we insur best quality
                            of products and before that our service to all customars, giving you a fine 
                            experience through our site, providing most if not all of what can be.</p>        </div>
        <div class="d-six">
            <h2>title</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis ad inventore saepe beatae suscipit unde minus voluptatibus, dicta perferendis, doloremque reiciendis eaque eius aliquam sint blanditiis aspernatur debitis repellat. Inventore?</p>
        </div>
    </footer>
  }

</body>
</html>
