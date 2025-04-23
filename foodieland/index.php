<?php
session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? ''
];
$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie land</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="logo">
            <img src="./image/Foodieland..png" alt="Foodieland">
        </div>

        <ul>
            <li>Home</li>
            <li>Recipes</li>
            <li>Blog</li>
            <li>Contact</li>                <li>About Us</li>
         </ul>

         <div class="logs">
             <button class="login-btn">LOG IN</button>    
            <a href="#">Signup</a>
         </div>
    </header>

    <div class="blur-bg-overlay"></div>

<div class="form-popup">
    <span class="close-btn">close</span>

    <div class="form-box login  <?= isActiveForm('login', $activeForm); ?>" id="login-form">
        <div class="form-details">
            <h2>Welcome Back</h2>
            <p>Please log in with your personal information to stay on with us</p>
        </div>
        <div class="form-content">
            <h2>LOGIN</h2>
            <form action="login_register.php" method="post">
                <?= showError($errors['login']); ?> 
                <div class="input-field" >
                    <input type="email" name="email" required>
                    <label> Email</label> 
                </div>
                <div class="input-field">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <a href="" class="forgot-password">Forgot password?</a>
                <button type="submit" name="login">Log in</button>
            </form>
            <div class="bottom-link">
                Don't have an account?
                <a href="#" id="signup-link" onclick="showForm('register-form')"> Sign Up </a>
            </div>
        </div>
    </div>


    <div class="form-box signup <?= isActiveForm('register', $activeForm); ?>" id="register-form">
        <div class="form-details">
            <h2>Sign up</h2>
            <p>Please sign up with your personal information to stay connected with us.</p>
        </div>

        <div class="form-content">
            <h2>SIGNUP</h2>

            <form action="login_register.php" method="post">

                <?= showError($errors['register']); ?>
                <div class="input-field" >
                    <input type="text" name="name" required>
                    <label> Enter your full name</label> 
                </div>
                <div class="input-field" >
                    <input type="email" name="email" required>
                    <label> Enter your email</label> 
                </div>
                <div class="input-field">
                    <input type="password" name="password" required>
                    <label> Create Password</label>
                </div>
                <div class="policy-text">
                    <input type="checkbox" id="policy">
                    <label for="policy">
                        I agree to the 
                        <a href="#"> Terms & Conidtions</a>
                    </label>
                </div>
                <select name="role">
                    <option value="">--Select skill--</option>
                    <option value="chef">Chef</option>
                    <option value="admin">Admin</option>
                    <option value="baker">Baker</option>
                </select>
                <button type="submit" name="register"> sign Up </button>
            </form>
            <div class="bottom-link">
                Already have an account?
                <a href="#" id="login-link" onclick="showForm('login-form')"> login </a>
            </div>
        </div>
    </div>
</div>
      
    <div class="king">
        <div class="first-text">
            <div class="hot">
                <img src="./assets/scrool.jpg" alt="">
                <h4>Hot Recipes</h4>
            </div>

            <div class="section-1">
                <h1>Spicy delicious <br>chicken wings</h1>
                <p>Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqut enim ad minim </p>

                <div class="time">
                    <div class="clock">
                        <i class="fa-solid fa-stopwatch"></i>
                        <h4>30 Minutes</h4>
                    </div>

                    <div class="knife">
                        <i class="fa-solid fa-utensils"></i>
                        <h4>kitchen</h4>
                    </div>
                </div>
               
                <div class="dg">
                    <div class="dg1">
                        <img src="./image/king-removebg-preview.png" alt="king">

                    <h3>Godwin Stephen<br> <span class="date">April 14, 2025</span></h3>
                    </div>

                    <div class="dg2">
                        <h3>View Receipes</h3>
                        <i class="fa-solid fa-play"></i>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="fist">
            <img src="./image/Badge.png" alt="Badge">
        </div>
        <div class="sec">
            <img src="./image/bakedchicken.png" alt="bakedchicken">
        </div>
    </div>
    <div class="categories">
        <div class="categories-1">
            <h1>Categories</h1>
            
            <div class="view">
                <h4>View All Categories</h4>
            </div>
        </div>
    </div>
    <div class="slider">
        <div class="cart-item">
        <div class="cart-item-1">
            <img src="./image/breakfast.png" alt=""> 
        </div>

        <div class="cart-item-2">
            <img src="./image/Vegan.png" alt="">
        </div>

        <div class="cart-item-3">
            <img src="./image/Meat.png" alt="">
        </div>

        <div class="cart-item-4">
            <img src="./image/Dessert.png" alt=""><br>
        </div>

        <div class="cart-item-5">
            <img src="./image/Lunch.png" alt=""><br>
        </div>

        <div class="cart-item-6">
            <img src="./image/Chocolate.png" alt=""><br>
        </div>
    </div>
</div>



<div class="simple">
    <h1>Simple and tasty recipes</h1>
    <p>Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut <br>labore et dolore magna aliqut enim ad minim </p>
</div>

<div class="frame">
    <div class="frame11">
        <div class="frame-1">
            <div class="bb">
                <img src="./image/Chesseburger.png" class="background">

                 <div class="content">
                    <input type="checkbox" id="heart" class="heart-check">
                    <label for="heart" class="heart-label"></label>
                 </div>
            </div>

            <div class="big">
                <h4>Big and Juicy Wagyu Beef <br> Chesseburger</h4>
                <div class="dwn">
                    <div class="clock">
                        <i class="fa-solid fa-stopwatch"></i>
                        <h6>30 Minutes</h6>
                    </div>
    
                    <div class="knife">
                        <i class="fa-solid fa-utensils"></i>
                        <h6>Snack</h6>
                </div>
               
                </div>
            </div>
            
        </div>
        <div class="frame-1">
            <div class="bb">
                <img src="./image/Salmon.png" class="background">

                 <div class="content">
                    <input type="checkbox" id="hearts" class="heart-check1">
                    <label for="hearts" class="heart-labels"></label>
                 </div>
            </div>

            <div class="big">
                <h4>Fresh Lime Roasted Salmon with Ginger Sauce</h4>
                <div class="dwn">
                    <div class="clock">
                        <i class="fa-solid fa-stopwatch"></i>
                        <h6>30 Minutes</h6>
                    </div>
    
                    <div class="knife">
                        <i class="fa-solid fa-utensils"></i>
                        <h6>Fish</h6>
                </div>
               
                </div>
            </div>
            
        </div>
        
        <div class="frame-1">
            <div class="bb">
                <img src="./image/Honey-Pancakes.png" class="background">

                 <div class="content">
                    <input type="checkbox" id="heart2" class="heart-check2">
                    <label for="heart2" class="heart-labels2"></label>
                 </div>
            </div>

            <div class="big">
                <h4>Strawberry Oatmeal Pancake with Honey Syrup</h4>
                <div class="dwn">
                    <div class="clock">
                        <i class="fa-solid fa-stopwatch"></i>
                        <h6>30 Minutes</h6>
                    </div>
    
                    <div class="knife">
                        <i class="fa-solid fa-utensils"></i>
                        <h6>Breakfast</h6>
                </div>
               
                </div>
            </div>
            
        </div>


    </div>
    
    <div class="frame22">
        <div class="frame-1">
            <div class="bb">
                <img src="./image/Fresh-salad.png" class="background">

                 <div class="content">
                    <input type="checkbox" id="heart3" class="heart-check3">
                    <label for="heart3" class="heart-labels3"></label>
                 </div>
            </div>

            <div class="big">
                <h4>Fresh and Healthy Mixed Mayonnaise salad</h4>
                <div class="dwn">
                    <div class="clock">
                        <i class="fa-solid fa-stopwatch"></i>
                        <h6>30 Minutes</h6>
                    </div>
    
                    <div class="knife">
                        <i class="fa-solid fa-utensils"></i>
                        <h6>Healthy</h6>
                </div>
               
                </div>
            </div>
            
        </div>
        

        <div class="frame-1">
            <div class="bb">
                <img src="./image/Chicken-meatball.png" class="background">

                 <div class="content">
                    <input type="checkbox" id="heart4" class="heart-check4">
                    <label for="heart4" class="heart-labels4"></label>
                 </div>
            </div>

            <div class="big">
                <h4>Chicken Meatballs with Cream cheese</h4>
                <div class="dwn">
                    <div class="clock">
                        <i class="fa-solid fa-stopwatch"></i>
                        <h6>30 Minutes</h6>
                    </div>
    
                    <div class="knife">
                        <i class="fa-solid fa-utensils"></i>
                        <h6>Meat</h6>
                </div>
               
                </div>
            </div>
            
        </div>

        <div class="frame-1">
            <div class="bb">
                <img src="./image/Ads.png" class="background">

                 <div class="content">
                    <input type="checkbox" id="heart5" class="heart-check5">
                    <label for="heart5" class="heart-labels5"></label>
                 </div>
            </div>

            <div class="big">
                <h4>Jellof </h4>
                <div class="dwn">
                    <div class="clock">
                        <i class="fa-solid fa-stopwatch"></i>
                        <h6>30 Minutes</h6>
                    </div>
    
                    <div class="knife">
                        <i class="fa-solid fa-utensils"></i>
                        <h6>shop with us</h6>
                </div>
               
                </div>
            </div>
            
        </div>


    </div>
    
    <div class="frame33">
        <div class="frame-1">
            <div class="bb">
                <img src="./image/Fruity-pancakes.png" class="background">

                 <div class="content">
                    <input type="checkbox" id="heart6" class="heart-check6">
                    <label for="heart6" class="heart-labels6"></label>
                 </div>
            </div>

            <div class="big">
                <h4>Fruity pancakes with Orange & Blueberry</h4>
                <div class="dwn">
                    <div class="clock">
                        <i class="fa-solid fa-stopwatch"></i>
                        <h6>30 Minutes</h6>
                    </div>
    
                    <div class="knife">
                        <i class="fa-solid fa-utensils"></i>
                        <h6>Sweet</h6>
                </div>
               
                </div>
            </div>
            
        </div>

        <div class="frame-1">
            <div class="bb">
                <img src="./image/Chicken-Rice.png" class="background">

                 <div class="content">
                    <input type="checkbox" id="heart7" class="heart-check7">
                    <label for="heart7" class="heart-labels7"></label>
                 </div>
            </div>

            <div class="big">
                <h4>The Best Easy One Pot Chicken and Rice</h4>
                <div class="dwn">
                    <div class="clock">
                        <i class="fa-solid fa-stopwatch"></i>
                        <h6>30 Minutes</h6>
                    </div>
    
                    <div class="knife">
                        <i class="fa-solid fa-utensils"></i>
                        <h6>Snacks</h6>
                </div>
               
                </div>
            </div>
            
        </div>

        <div class="frame-1">
            <div class="bb">
                <img src="./image/Chicken-Pasta.png" class="background">

                 <div class="content">
                    <input type="checkbox" id="heart8" class="heart-check8">
                    <label for="heart8" class="heart-labels8"></label>
                 </div>
            </div>

            <div class="big">
                <h4>The Creamiest Creamy Chicken and Beacon Pasta</h4>
                <div class="dwn">
                    <div class="clock">
                        <i class="fa-solid fa-stopwatch"></i>
                        <h6>30 Minutes</h6>
                    </div>
    
                    <div class="knife">
                        <i class="fa-solid fa-utensils"></i>
                        <h6>Noodles</h6>
                </div>
               
                </div>
            </div>
            
        </div>
    </div>

</div>

 <section class="section-3">
        <div class="chef-section">
          <div class="chef-text">
            <h2>Everyone Can Be a Chef in Their Own Kitchen</h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni
              placeat explicabo ipsam cupiditate ullam aut inventore dolores. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima sunt dolore doloribus quod libero rem, et veniam corrupti ratione necessitatibus maxime, eius,
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
          <div class="chef-image">
            <img src="./image/Chef-1.png" alt="Chef Image" />
          </div>
        </div>

         <div class="foodieig">
          <span>
            <h3>Check out @foodieland on Instagram</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. A quod
              molestias eveniet commodi rem blanditiis voluptatibus.
            </p>
          </span>
           <div class="ig-post">
              <div>
                <img src="./image/Post-1.png" alt="" class="ig-post-img" />
                <img src="./image/Post-2.png" alt="" class="ig-post-img" />
                <img src="./image/Post-3.png" alt="" class="ig-post-img" />
                <img src="./image/Post-4.png" alt="" class="ig-post-img"/>
              </div>
              <button class="ig-btn">
                  Visit our Instagram
                  <img src="./image/download.png" alt="" id="ig-logo-btn"/>
              </button>
            </div>
        </div>
<!-- 
    <section class="mysection"> -->
        <div class="intro-content">
              <h3>Try this delicous recipe to make your day</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae
                optio culpa harum adipisci enim auto.
              </p>
        </div>
        <div class="container">
    <h1>More Recipes</h1>
    <div class="card-grid">
      <!-- Recipe Card 1 -->
      <div class="card">
        <img src="./image/Tropical-salad.png" alt="Smoothie Bowl">
        <button class="like-btn">&#10084;</button>
        <div class="card-title">Mixed tropical fruit salad with superfood boost</div>
      </div>

      <!-- Recipe Card 2 -->
      <div class="card">
        <img src="./image/Juicy-beef.png" alt="Grilled Steak">
        <button class="like-btn">&#10084;</button>
        <div class="card-title">Big and juicy wagyu Beef Chesseburger</div>
      </div>

      <!-- Recipe Card 3 -->
      <div class="card">
        <img src="./image/Japanese-rice.png" alt="Egg & Rice Bowl">
        <button class="like-btn">&#10084;</button>
        <div class="card-title">Healthy Japanese friedrice and Asparagus</div>
      </div>

      <!-- Recipe Card 4 -->
      <div class="card">
        <img src="./image/Taco-meat.png" alt="Chicken Burrito">
        <button class="like-btn">&#10084;</button>
        <div class="card-title">Cauliflower Walnut Vegetarian Taco Meat</div>
      </div>

      <!-- Recipe Card 5 -->
      <div class="card">
        <img src="./image/Chicken-salad.png" alt="Loaded Fries Bowl">
        <button class="like-btn">&#10084;</button>
        <div class="card-title">Rainbow Chicken salad with Almond Honey mustard Dressing</div>
      </div>

      <!-- Recipe Card 6 -->
      <div class="card">
        <img src="./image/Sandwish.png" alt="Club Sandwich">
        <button class="like-btn">&#10084;</button>
        <div class="card-title">Barbeque Spicy Sandwiches with Chips</div>
      </div>

      <!-- Recipe Card 7 -->
      <div class="card">
        <img src="./image/Vegan-lettuce.png" alt="Papaya Salad">
        <button class="like-btn">&#10084;</button>
        <div class="card-title">Firecracker Vegan Lettuce wraps-spicy</div>
      </div>

      <!-- Recipe Card 8 -->
      <div class="card">
        <img src="./image/Vegeterian-lasagna.png" alt="Noodle Soup">
        <button class="like-btn">&#10084;</button>
        <div class="card-title">Noodle Soup</div>
      </div>
    </div>
  </div>
  <section class="newsletter">
    <div class="bbb">
        <h3>Deliciousness to your inbox</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. illo Voluptatum illo quia voluptatib Voluptatum
            illo .</p>
    </div>
    <div class="imagess">
        <img src="./image/kisspng-salad.png" alt="Decorative Veggies" class="left-img">
        <form class="dome">
            <input type="email" placeholder="Your email address" required />
            <button type="submit">Subscribe</button>
        </form>
        <img src="./image/Photo.png" alt="Salad Bowl" class="right-img">
    </div>
</section>
<footer>
    <div class="footer-main">
      <div class="footer-logo-text">
        <img src="./image/Foodieland..png" alt="Foodieland Logo" />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, repellat,
          cum ipsum dignissimos at quibusdam perferendis.
        </p>
      </div>
      <nav class="footer-nav">
        <a href="#">Recipes</a>
        <a href="#">Blog</a>
        <a href="#">Contact</a>
        <a href="#">About Us</a>
      </nav>
    </div>
    <div class="footer-social">
      <hr />
      <div class="footer-social-content">
        <p>@2020 Flowbase Powered by Webflow</p>
        <div class="social-icons">
          <img src="./image/download (1).png" alt="Facebook Icon" />
          <img src="./image/download (2).png" alt="Twitter Icon" />
          <img src="./image/download.png" alt="Instagram Icon" />
        </div>
      </div>
    </div>
  </footer>
    


    <script src="./script.js"></script>
</body>
</html>