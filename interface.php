<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bookly</title>
  
  <!-- أيقونة الموقع -->
  <link rel="icon" href="https://fontawesome.com/icons/book?f=classic&s=solid">
  
  <!-- ملفات الأنماط الخارجية -->
  <link rel="stylesheet" href="interface.css">
  
  <!-- جافاسكريبت -->
  <script src="interface.js" defer></script>
  
  <!-- الخطوط -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
  
  <!-- أيقونات FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>
<body>
  <header>
    <nav role="navigation">
      <a href="#" class="logo">
        <i class="fa-solid fa-book"></i>
        <h1>Bookly</h1>
      </a>
      <ul class="nav">
        <li><a href="#home">Home</a></li>
        <li><a href="#buybook">Buy Book</a></li>
        <li class="dropdown">
            <a href="#" id="category-btn">Categories </a>
            <ul class="dropdown-menu" id="dropdown-menu">
                <li><a href="#Novels"> Novels</a></li>
                <li><a href="#History"> History</a></li>
                <li><a href="#Science"> Science</a></li>
            </ul>
        </li>
        <li><a href="#about-us">About</a></li>
        <li><a href="login.php">Sign In</a></li>
      </ul>
    </nav>
    <div class="sub-nav">
      <ul class="social-links">
        <li><a href="#"><i class="fa-brands fa-facebook"style="color: #4267B2;" ></i></a></li>
        <li><a href="#"><i class="fa-brands fa-instagram"
        style="background: linear-gradient(45deg, #f9ce34, #ee2a7b, #6228d7);
                  -webkit-background-clip: text;
                  -webkit-text-fill-color: transparent;
                  "></i></a></li>
        <li><a href="#"><i class="fa-brands fa-github" style="color: #000;"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-whatsapp"style="color: #25D366;"></i></a></li>
      </ul>
      <div class="search">
        <input type="text" class="input" placeholder="search..." id="searchInput">
        <button id="searchBtn">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>
   </div>
  </header>
  
  <main>
    <!-- قسم الصفحة الرئيسية -->
    <section id="home" class="homepage">
      <div class="content">
        <h2>Save on All Products</h2>
        <h1>75% OFF</h1>
        <h3>When You Purchase 2 or More Items*</h3>
        <button>Shop Now</button>
      </div>
    </section>
    
    <!-- قسم الكتب الأكثر شعبية -->
    <section id="buybook">
      <header class="section-header">
        <h1>All available books</h1>
        <button aria-label="View more books">
          <i class="fa-solid fa-arrow-right"></i>
        </button>
      </header>
      <div class="books-container">
        <article class="book">
          <img src="imag/book1.jpg" alt="Book Cover">
          <h2>Book Title</h2>
          <p class="price">$10</p>
          <button class="wishlist" aria-label="Add to wishlist">
            <i class="fa-regular fa-heart"></i>
          </button>
          <button class="cart" aria-label="Add to cart">Add to Cart</button>
        </article>
        <article class="book">
          <img src="imag/book1.jpg" alt="Book Cover">
          <h2>Book Title</h2>
          <p class="price">$10</p>
          <button  class="wishlist" aria-label="Add to wishlist">
            <i class="fa-regular fa-heart"></i>
          </button>
          <button class="cart" aria-label="Add to cart">Add to Cart</button>
        </article>
      </div>
    </section>
    
    <!-- قسم التصنيفات -->
    <section id="categories">
      <header class="section-header">
        <h1>We Have Different Types of Books</h1>
        <button aria-label="View more books">
          <i class="fa-solid fa-arrow-right"></i>
        </button>
      </header>
      <div class="categories-container">
        <article class="category">
          <img src="imag/1.jpg" alt="Novels">
          <h3>Novels</h3>
        </article>
        <article class="category">
          <img src="imag/2.jpg" alt="Historic">
          <h3>Historic</h3>
        </article>
        <article class="category">
          <img src="imag/2.jpg" alt="Literary">
          <h3>Literary</h3>
        </article>
        <article class="category">
          <img src="imag/3.jpg" alt="Scientific">
          <h3>Scientific</h3>
        </article>
        <article class="category">
          <img src="imag/4.jpg" alt="Medical">
          <h3>Medical</h3>
        </article>
      </div>
    </section>
    
    <!-- أقسام الكتب حسب النوع -->
    <section id="Novels">
      <header class="section-header">
        <h1>Novels</h1>
        <button aria-label="View more books">
          <i class="fa-solid fa-arrow-right"></i>
        </button>
      </header>
      <div class="books-container">
        <article class="book">
          <img src="imag/book1.jpg" alt="Book Cover">
          <h2>Book Title</h2>
          <p class="price">$10</p>
          <button class="wishlist" aria-label="Add to wishlist">
            <i class="fa-regular fa-heart"></i>
          </button>
          <button class="cart" aria-label="Add to cart">Add to Cart</button>
        </article>
      </div>
    </section>
    
    <section id="History">
      <header class="section-header">
        <h1>History</h1>
        <button aria-label="View more books">
          <i class="fa-solid fa-arrow-right"></i>
        </button>
      </header>
      <div class="books-container">
        <article class="book">
          <img src="imag/book1.jpg" alt="Book Cover">
          <h2>Book Title</h2>
          <p class="price">$10</p>
          <button class="wishlist" aria-label="Add to wishlist">
            <i class="fa-regular fa-heart"></i>
          </button>
          <button class="cart" aria-label="Add to cart">Add to Cart</button>
        </article>
      </div>
    </section>
    
    <section id="literary">
      <header class="section-header">
        <h1>Literary</h1>
        <button aria-label="View more books">
          <i class="fa-solid fa-arrow-right"></i>
        </button>
      </header>
      <div class="books-container">
        <article class="book">
          <img src="imag/book1.jpg" alt="Book Cover">
          <h2>Book Title</h2>
          <p class="price">$10</p>
          <button class="wishlist" aria-label="Add to wishlist">
            <i class="fa-regular fa-heart"></i>
          </button>
          <button class="cart" aria-label="Add to cart">Add to Cart</button>
        </article>
      </div>
    </section>
    
    <section id="Science">
      <header class="section-header">
        <h1>Science</h1>
        <button aria-label="View more books">
          <i class="fa-solid fa-arrow-right"></i>
        </button>
      </header>
      <div class="books-container">
        <article class="book">
          <img src="imag/book1.jpg" alt="Book Cover">
          <h2>Book Title</h2>
          <p class="price">$10</p>
          <button class="wishlist" aria-label="Add to wishlist">
            <i class="fa-regular fa-heart"></i>
          </button>
          <button class="cart" aria-label="Add to cart">Add to Cart</button>
        </article>
      </div>
    </section>
    
    <section id="medical">
      <header class="section-header">
        <h1>Medical</h1>
        <button aria-label="View more books">
          <i class="fa-solid fa-arrow-right"></i>
        </button>
      </header>
      <div class="books-container">
        <article class="book">
          <img src="imag/book1.jpg" alt="Book Cover">
          <h2>Book Title</h2>
          <p class="price">$10</p>
          <button class="wishlist" aria-label="Add to wishlist">
            <i class="fa-regular fa-heart"></i>
          </button>
          <button class="cart" aria-label="Add to cart">Add to Cart</button>
        </article>
      </div>
    </section>
    
    <!-- قسم عن الموقع -->
    <section id="about-us">
        <header class="section-header">
          <h1>About Us</h1>
        </header>
        <h2>A cozy bookstore filled with books</h2>
        <p>We are a platform specialized in selling books, offering a wide range of books in various fields to meet readers' needs.</p>
        <p>Our goal is to facilitate access to books and provide a unique shopping experience for book lovers, with diverse options and affordable prices for everyone.</p>
    </section>
  </main>
  <footer>
    <div class="footer-container">
      <p>&copy; 2025 Bookly. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
