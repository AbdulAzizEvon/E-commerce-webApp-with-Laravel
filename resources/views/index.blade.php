<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nav.css') }}" >
    <title>Document</title>
</head>
<body>
 <section class="nav-container">
        <div class="logo">
          <h2>E-<span>B</span>usiness</h2>
        </div>

      <form action="" method="">
          <div class="search-box">
          <input type="text"id="search" placeholder="search">
          <label for="search">Search</label>
          </div>
      </form>
      <div class="nav">
      <i class="fa fa-window-close"></i>
        <a href="#">Home</a>
        <a href="#">Catagories</a>
        <a href="#">Trending</a>
        <a href="#">Contact Us</a>
            <form action="{{url('/')}}/logout" method="post">
                @csrf
                <button type="submit">Logout</button>
         </form>
        <a href="#">Log In</a>
        <a href="#"> <i class="fa-solid fa-cart-shopping"></i></a>
      </div>
      <i class="fa-solid fa-bars"></i>
  </section>
  @if (session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
@endif
    <section class="product-display">
      <div class="pro-1 product">
        <div class="description">
        <h2>Men's Watches</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quis explicabo sed aperiam eligendi quos?</p>
        <a href="#">Order Now</a>
        </div>
        <img src="{{ URL('images/watch/img-1.jpg')}}" class="imag" alt="Image">
        <div onclick="nextimg(-1)" class="prev">&#10094</div>
        <div onclick="nextimg(1)" class="next">&#10095</div>
      </div>
      <div class="pro-2 product">
      <div class="description">
        <h2>Freez</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quis explicabo sed aperiam eligendi quos?</p>
        <a href="#">Order Now</a>
      </div>
        <img src="{{ URL('images/freez/2021_06_23_13_46_60d2e6dcc8186_upload.png')}}" class="imag" alt="Image">
        <div onclick="nextimg(-1)" class="prev">&#10094</div>
        <div onclick="nextimg(1)" class="next">&#10095</div>
      </div>
      <div class="pro-3 product">
      <div class="description">
        <h2>Freez</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quis explicabo sed aperiam eligendi quos?</p>
         <a href="#">Order Now</a>
      </div>
        <img src="{{ URL('images/freez/8e2d9c728aff3c8bfa047ef25d2da00b.jpg')}}" class="imag" alt="Image">
        <div onclick="nextimg(-1)" class="prev">&#10094</div>
        <div onclick="nextimg(1)" class="next">&#10095</div>
      </div>
      <div class="pro-4 product">
      <div class="description">
        <h2>Samsung Mobile</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quis explicabo sed aperiam eligendi quos?</p>
        <a href="#">Order Now</a>
        </div>
        <img src="{{ URL('images/samsung mobile/01-hd02-B4-kv-pc-1440x640.webp')}}" class="imag" alt="Image">
        <div onclick="nextimg(-1)" class="prev">&#10094</div>
        <div onclick="nextimg(1)" class="next">&#10095</div>
      </div>
      <div class="pro-5 product">
      <div class="description">
        <h2>Television</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quis explicabo sed aperiam eligendi quos?</p>
        <a href="#">Order Now</a>
        </div>
        <img src="{{ URL('images/TV/1_9b8014ad-124e-4742-a628-9a4c4affe617_1400x.jpg')}}" class="imag" alt="Image">
        <div onclick="nextimg(-1)" class="prev">&#10094</div>
        <div onclick="nextimg(1)" class="next">&#10095</div>
      </div>
</section>
    <div class="products">
      <div class="elec-container">
          <div class="headline">
              <div>
                 <h1>Watch</h1>
             </div>
             <div>
                 <button>See All</button>
             </div>
            </div>
            <div class="watch">
          <div class="w-1 watch-img-box">
            <div class="icon">
                <a href=""><i class="fa-regular fa-heart"></i></a>
                <a href=""><i class="fa fa-eye"></i></a>
            </div>
            <img class="image img-box" src="{{ URL('images/watch/img-1.jpg')}}" alt="Image">
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="details-price">
                <div class="dtl">
                    Details
                </div>
                <div class="prc">
                    price $25
                </div>
                <div class="ord-nw">
                    Order Now
                  </div>
            </div>
          </div>
            <div class="w-2 watch-img-box">
              <div class="icon">
                <a href=""><i class="fa-regular fa-heart"></i></a>
                <a href=""><i class="fa fa-eye"></i></a>
              </div>
                <img class="image img-box" src="{{ URL('images/watch/img-2.webp')}}" alt="Image">
                <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
          </div>
          <div class="w-3 watch-img-box">
            <div class="icon">
                <a href=""><i class="fa-regular fa-heart"></i></a>
              <a href=""><i class="fa fa-eye"></i></a>
              </div>
                <img class="image img-box" src="{{ URL('images/watch/img-3.avif')}}" alt="Image">
                <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
          </div>
          <div class="w-4 watch-img-box">
            <div class="icon">
                <a href=""><i class="fa-regular fa-heart"></i></a>
              <a href=""><i class="fa fa-eye"></i></a>
              </div>
                <img class="image img-box" src="{{ URL('images/watch/img-4.avif')}}" alt="Image">
                <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
          </div>
          <div class="w-5 watch-img-box">
            <div class="icon">
                <a href=""><i class="fa-regular fa-heart"></i></a>
              <a href=""><i class="fa fa-eye"></i></a>
              </div>
                <img class="image img-box" src="{{ URL('images/watch/img-5.jpg')}}" alt="Image">
                <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
          </div>
          <div class="w-6 watch-img-box">
            <div class="icon">
                <a href=""><i class="fa-regular fa-heart"></i></a>
              <a href=""><i class="fa fa-eye"></i></a>
              </div>
                <img class="image img-box" src="{{ URL('images/watch/img-6.jpg')}}" alt="Image">
                <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
          </div>
          <div class="w-7 watch-img-box">
            <div class="icon">
                <a href=""><i class="fa-regular fa-heart"></i></a>
              <a href=""><i class="fa fa-eye"></i></a>
              </div>
                <img class="image img-box" src="{{ URL('images/watch/img-7.jpg')}}" alt="Image">
                <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
          </div>
          <div class="w-8 watch-img-box">
            <div class="icon">
                <a href=""><i class="fa-regular fa-heart"></i></a>
              <a href=""><i class="fa fa-eye"></i></a>
              </div>
                <img class="image img-box" src="{{ URL('images/watch/img-8.jpg')}}" alt="Image">
                <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
          </div>
          <div class="w-9 watch-img-box">
            <div class="icon">
                <a href=""><i class="fa-regular fa-heart"></i></a>
              <a href=""><i class="fa fa-eye"></i></a>
              </div>
                <img class="image img-box" src="{{ URL('images/watch/img-9.png')}}" alt="Image">
                <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
          </div>
          <div class="w-10 watch-img-box">
            <div class="icon">
                <a href=""><i class="fa-regular fa-heart"></i></a>
              <a href=""><i class="fa fa-eye"></i></a>
              </div>
                <img class="image img-box" src="{{ URL('images/watch/img-10.webp')}}" alt="Image">
                <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                </div>
          </div>

          </div>
     </div>
        <div class="freez">
            <div class="headline">
                <div>
                   <h1>Freez</h1>
               </div>
               <div>
                   <button>See All</button>
               </div>
              </div>
            <div class="w-10 watch-img-box">
                <div class="icon">
                    <a href=""><i class="fa-regular fa-heart"></i></a>
                  <a href=""><i class="fa fa-eye"></i></a>
                  </div>
                    <img class="image img-box" src="{{ URL('images/freez/img-01.jpg')}}" alt="Image">
                    <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    </div>
              </div>
        </div>
        <div class="tv">
            <div class="headline">
                <div>
                   <h1>Television</h1>
               </div>
               <div>
                   <button>See All</button>
               </div>
              </div>
            <div class="w-10 watch-img-box">
                <div class="icon">
                    <a href=""><i class="fa-regular fa-heart"></i></a>
                  <a href=""><i class="fa fa-eye"></i></a>
                  </div>
                    <img class="image img-box" src="{{ URL('images/TV/img-1.jpg')}}" alt="Image">
                    <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>
        <div class="mobile">
          <div class="samsung">
            <div class="headline">
                <div>
                   <h1>Mobile Phone</h1>
               </div>
               <div>
                   <button>See All</button>
               </div>
              </div>
            <div class="w-10 watch-img-box">
                <div class="icon">
                    <a href=""><i class="fa-regular fa-heart"></i></a>
                  <a href=""><i class="fa fa-eye"></i></a>
                  </div>
                    <img class="image img-box" src="{{ URL('images/samsung mobile/img-1.webp')}}" alt="Image">
                    <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
          </div>
          <div class="simphony">

          </div>
          <div class="apple">

          </div>
          <div class="blackbery">

          </div>
          <div class="huawei">

          </div>
          <div class="htc">

          </div>
          <div class="lava">

          </div>
          <div class="nokia">

          </div>
          <div class="oppo">
          </div>
          <div class="xiaomi">

          </div>
      </div>
        <div class="fan">

        </div>
      </div>
      <div class="pc-and-accessories">
          <div class="monitor">

        </div>
        <div class="keyboard">

        </div>
        <div class="mouse">

        </div>
        <div class="speaker">

        </div>
        <div class="headphone">

        </div>
        <div class="blootuth">

        </div>
        <div class="laptop-cooling-fan">

        </div>
        <div class="pendrive">

        </div>
        <div class="motherboard">

        </div>
        <div class="harddisk">

        </div>
        <div class="ssd-card">

        </div>
        <div class="graphics-card">

        </div>
        <div class="laptop">

        </div>
        <div class="gamming-laptop">

        </div>
        <div class="gamming-pc">

        </div>
      </div>
        <div class="gar-container">
           <div class="t-shart">

           </div>
           <div class="pant">

           </div>
           <div class="shart">

           </div>
           <div class="panjavi">

           </div>
        </div>
  </div>
    <script>

var imageno =1;
displayimg(imageno);

function nextimg(n){
    displayimg(imageno += n)
}

function currentSlide(n){
    displayimg(imageno = n)
}

function displayimg(n){
    var i;
    var product = document.getElementsByClassName("product");
    var dots = document.getElementsByClassName("dot");

    if(n > product.length){
        imageno = 1;
    }

    if(n < 1){
        imageno = product.length;
    }

    for(i=0; i < product.length; i++){
        product[i].style.display = "none";
    }

    for(i=0; i < dots.length; i++){
        dots[i].className = dots[i].className.replace(" active", "");
    }

    product[imageno - 1].style.display ="grid";
    dots[imageno - 1].className += " active";

}

</script>
</body>
</html>
