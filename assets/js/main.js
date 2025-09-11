//nav link scrool
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault(); // prevent default jump
        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({ behavior: 'smooth' });
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
