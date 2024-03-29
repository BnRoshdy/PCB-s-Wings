<!DOCTYPE html>
<html>

<head>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">  -->
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="{{ url('css/cart.css') }}">
    <script src="https://kit.fontawesome.com/2924b03037.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <!----------------------HEADER------------------------>
    <a href="/" class="logo_admin">MYPCB</a>
    <div class="cust_data">
    </div>
</header>

<section>
    <div>


        <table>
            <tr>

                <th> </th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Subtotal</th>
            </tr>
            <form method="post" action="/cart">
                @csrf

            @foreach($data as $i)
                @if($i->status=="not confirmed")
            <tr>
                <td>
                    <input type="radio" name="radio" value="{{$i->id}}">
                </td>
                <td>
                    <div class="info">
                        <img src="{{url('image/cart/cart.jpg')}}" alt="">
                        <div>
                            <P>{{$i->layers}} Layers </P>
                            <span class="tit">Product No.:</span>
                            <span>{{$i->id}}</span>
                            <div class="detials">
                                <div>
                                    <span class="tit">Solder Mask: </span>
                                    <span>{{$i->solder_mask}}</span>

                                </div>
                                <div>
                                    <span class="tit">Silkscreen: </span>
                                    <span>{{$i->silkscreen}}</span>
                                </div>
                            </div>

                            <div>
                                <span class="tit">Bulid Time.:</span>
                                <span>2-3 days</span>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <span>{{$i->quantity}}</span>
                </td>
                <td>
                    <p>{{$i->status}}</p>
                </td>
                <td>{{$i->price}} $</td>
            </tr>
            @endif
            @endforeach

        </table>
    </div>
    <div class="bottom">
        <div class="add">
            <i for="22" class="fa-solid fa-circle-arrow-left"><a id="22" href="/order">add new item</a></i>
        </div>
        <div class="total-price">

        </div>
    </div>
    <div class="buttons">
        <div class="rt">

            <input type="submit" name = "submit" value="delete">
        </div>
        <div class="check">
            <input type="submit" name = "submit" value="check out">
            </form>
        </div>
    </div>

</section>

<footer><!---------------------footer------------------------->
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-about-us">
                <h4><span>PCB</span></h4>
                <p>In our company we insur best quality
                    of products and before that our service to all customars, giving you a fine 
                    experience through our site, providing most if not all of what can be.</p>                <div class="footer-social">
                    <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-twitter-square"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
        <div class="footer-menu">
            <h4 class="footer-wid-title">User Navigation </h4>
            <ul>
                <li><a href="#">our policies</a></li>
                <li><a href="#">more about us</a></li>
            </ul>
        </div>
        </div>
        <div class="col-md-3 col-sm-6">
        <div class="footer-menu">
            <h4 class="footer-wid-title">Help Center</h4>
            <ul>
            <li>Mobile Phone : 01002208821 </li>
            </ul>
        </div>
        </div>
        </div>
        </div>
        </div>
    </footer>
</body>
</html>
