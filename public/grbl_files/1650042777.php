<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <meta charset="UTF-8">
        <title>sign in</title>
        <link rel="stylesheet" href="css/login.css">
        <script src="https://kit.fontawesome.com/2924b03037.js" crossorigin="anonymous"></script>

    </head>
    <body>

        <header> <!----------------------HEADER------------------------>
            <a href="#" class="logo_admin">BCPWAY</a>
            <div class="cust_data">
            <a href="#">My Account</a>
            <a href="#">My Cart</a>
            </div>
        </header>

        
                    
            <div class="sign_up">
                <form>
                    <h3>sign in</h3>
                    <div>
                        <form method="POST" class="user" action="{{ route('login') }}">
                            @csrf
                        <label for="31">user_Name</label> 
                          <div class="form-group">
                            <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your user_Name"> 
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                           </div>  
                    </div>
                    <label for="32">password</label>
                    <div class="form-group">
                       <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                       @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
            
                    <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                            <input class="form-check-input custom-control-user" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                           <label class="custom-control-label" for="customcheck">Remember Me</label>
                            
                            <a href="">forget password?</a> 
                        </div>
                    </div>    
                    <div>
                        <input type="submit" value="sign in" class="btn btn-primary btn-user btn-block" >
                    </div>

                </form>
            </div>
        </div>
        <!-- -------footer--------------->
        <footer><!---------------------footer------------------------->
            <div class="footer-top-area">
                <div class="zigzag-bottom"></div>
                <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-about-us">
                        <h4><span>PCB</span></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
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
                    <li>Mobile Phone : 01000002222088821 </li>
                    </ul>                        
                </div>
                </div>
                </div>
                </div>
                </div>
            </footer>
            
        
            
    </body>
</html>