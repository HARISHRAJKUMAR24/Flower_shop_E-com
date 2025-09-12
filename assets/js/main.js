document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
        const href = this.getAttribute('href');

        // CASE 1: Same-page section links like "#popular_products"
        if (href.startsWith('#')) {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // CASE 2: Links like "./index.php/#popular_products"
        else if (href.includes('#') && href.includes('index.php')) {
            e.preventDefault();
            const sectionId = href.split('#')[1];
            if (window.location.pathname.endsWith('index.php')) {
                // already on index.php → scroll
                const target = document.getElementById(sectionId);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            } else {
                // not on index.php → go to page (browser will scroll automatically)
                window.location.href = href;
            }
        }

        // CASE 3: Normal navigation (like "../test.html")
        else {
            // let browser do its job
        }
    });
});


//popular products
const categoryBtns = document.querySelectorAll('.category-btn');
const products = document.querySelectorAll('.card-product');

categoryBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        categoryBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const category = btn.getAttribute('data-category');

        products.forEach(product => {
            if (category === 'all' || product.dataset.category === category) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    });
});

//seasonal scrool
document.getElementById("goToCart").addEventListener("click", function() {
  document.getElementById("cart").scrollIntoView({ behavior: "smooth" });
});


