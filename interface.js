document.addEventListener("DOMContentLoaded", () => {
  // التعامل مع أيقونات الإعجاب (القلب)
  document.querySelectorAll(".fa-heart").forEach((heart) => {
    heart.addEventListener("click", () => {
      heart.classList.toggle("fas"); // يضيف أو يزيل اللون الممتلئ
      heart.classList.toggle("far"); // يضيف أو يزيل اللون الفارغ
    });
  });
  // تفعيل زر الإضافة للسلة (Cart)
  const cartButtons = document.querySelectorAll('.cart');
  let cartCount = 0;
  cartButtons.forEach(button => {
    button.addEventListener('click', function() {
      cartCount++;
      // تحديث عداد السلة (يمكن ربطه بعنصر في الصفحة إذا رغبت)
      console.log(`تمت إضافة عنصر إلى السلة. العدد الإجمالي: ${cartCount}`);
      alert(`تمت إضافة العنصر إلى السلة! العدد الإجمالي: ${cartCount}`);
      
      // الحصول على بيانات الكتاب (العنوان والسعر) من أقرب عنصر يحتوي على بطاقة الكتاب
      const bookElement = this.closest('.book');
      const title = bookElement.querySelector('h2').textContent;
      const price = bookElement.querySelector('.price').textContent;
      
      // إضافة الكتاب إلى السلة باستخدام الدالة المخصصة
      addToCart(title, price);
    });
  });

  // تفعيل زر "Shop Now" للتمرير بسلاسة إلى قسم الكتب الأكثر شعبية
  const shopNowButton = document.querySelector('.content button');
  if (shopNowButton) {
    shopNowButton.addEventListener('click', function() {
      const popularSection = document.querySelector('#buybook');
      if (popularSection) {
        popularSection.scrollIntoView({ behavior: 'smooth' });
      }
    });
  }

  // مصفوفة لتخزين المنتجات في السلة
  let cart = [];

  function addToCart(title, price) {
    // إضافة المنتج إلى المصفوفة
    cart.push({ title, price });
    // تنبيه المستخدم بإضافة المنتج
    alert(`تمت إضافة "${title}" إلى السلة بنجاح!`);
    // طباعة محتوى السلة في وحدة التحكم
    console.log("📌 محتوى السلة:", cart);
  }
});


document.addEventListener("DOMContentLoaded", function() {
  let categoryBtn = document.getElementById("category-btn");
  let dropdownMenu = document.getElementById("dropdown-menu");

  // عند النقر على الزر
  categoryBtn.addEventListener("click", function(event) {
      event.preventDefault(); // منع الانتقال للرابط #
      dropdownMenu.classList.toggle("show");
  });

  // إغلاق القائمة عند النقر خارجها
  document.addEventListener("click", function(event) {
      if (!categoryBtn.contains(event.target) && !dropdownMenu.contains(event.target)) {
          dropdownMenu.classList.remove("show");
      }
  });
});

//حذف الكتاب
function updateTotal() {
  let total = 0;
  document.querySelectorAll(".cart-item").forEach(item => {
      total += parseFloat(item.querySelector(".price").textContent);
  });
  document.getElementById("total-price").textContent = total;
}

document.querySelectorAll(".remove-btn").forEach(button => {
  button.addEventListener("click", function() {
      this.closest(".cart-item").remove();
      updateTotal();
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const btn = document.getElementById('searchBtn');
  const search = document.querySelector('.search');
  const input = document.getElementById('searchInput');

  btn.addEventListener('click', () => {
      search.classList.toggle('active');
      input.focus();
  });
});