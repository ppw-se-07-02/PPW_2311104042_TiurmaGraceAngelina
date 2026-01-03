// Cart Management (for future use)
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Initialize page
document.addEventListener('DOMContentLoaded', function() {
    initializeSearch();
    initializeAddToCart();
    initializeLogin();
});

// Update cart count display
function updateCartCount() {
    const cartCount = document.getElementById('cartCount');
    if (cartCount) {
        cartCount.textContent = cart.length;
        if (cart.length > 0) {
            cartCount.style.animation = 'pulse 0.5s ease';
        }
    }
}

// Initialize search functionality
function initializeSearch() {
    const searchInput = document.getElementById('searchInput');
    const searchBtn = document.getElementById('searchBtn');
    const productCards = document.querySelectorAll('.product-card');

    function performSearch() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        let foundCount = 0;

        productCards.forEach(card => {
            const productName = card.getAttribute('data-name').toLowerCase();
            
            if (productName.includes(searchTerm) || searchTerm === '') {
                card.style.display = 'block';
                card.style.animation = 'fadeInUp 0.5s ease';
                foundCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Show message if no cats found
        const productGrid = document.getElementById('productGrid');
        let noResultsMsg = document.getElementById('noResultsMessage');
        
        if (foundCount === 0) {
            if (!noResultsMsg) {
                noResultsMsg = document.createElement('div');
                noResultsMsg.id = 'noResultsMessage';
                noResultsMsg.className = 'col-12 text-center py-5';
                noResultsMsg.innerHTML = `
                    <div style="font-size: 5rem;">😿</div>
                    <h4 class="text-muted mt-3">Kucing tidak ditemukan</h4>
                    <p>Coba cari ras kucing yang lain</p>
                `;
                productGrid.appendChild(noResultsMsg);
            }
        } else if (noResultsMsg) {
            noResultsMsg.remove();
        }
    }

    if (searchBtn) {
        searchBtn.addEventListener('click', performSearch);
    }

    if (searchInput) {
        searchInput.addEventListener('keyup', function(e) {
            if (e.key === 'Enter') {
                performSearch();
            }
        });

        // Real-time search
        searchInput.addEventListener('input', performSearch);
    }
}

// Initialize Add to Cart buttons
function initializeAddToCart() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-id');
            const productName = this.getAttribute('data-name');
            const productPrice = this.getAttribute('data-price');
            
            addToCart(productId, productName, productPrice);
        });
    });
}

// Add cat to cart
function addToCart(id, name, price) {
    const product = {
        id: id,
        name: name,
        price: price,
        quantity: 1
    };

    // Check if cat already in cart
    const existingProduct = cart.find(item => item.id === id);
    
    if (existingProduct) {
        // For cats, we don't increase quantity, just notify
        showToast('Kucing ini sudah ada di keranjang!');
        return;
    } else {
        cart.push(product);
    }

    // Save to localStorage
    localStorage.setItem('cart', JSON.stringify(cart));
    
    // Show toast notification
    showToast();
    
    // Add button animation
    const button = document.querySelector(`[data-id="${id}"]`);
    if (button) {
        button.classList.add('loading');
        setTimeout(() => {
            button.classList.remove('loading');
        }, 300);
    }
}

// Show toast notification
function showToast(message = 'Kucing berhasil ditambahkan ke keranjang!') {
    const toastElement = document.getElementById('cartToast');
    const toastBody = toastElement.querySelector('.toast-body');
    toastBody.textContent = message;
    const toast = new bootstrap.Toast(toastElement);
    toast.show();
}

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#' && document.querySelector(href)) {
            e.preventDefault();
            document.querySelector(href).scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// Initialize Login button
function initializeLogin() {
    const loginBtn = document.getElementById('loginBtn');
    if (loginBtn) {
        loginBtn.addEventListener('click', function(e) {
            e.preventDefault();
            alert('Fitur login akan segera hadir!\n\nUntuk pemesanan, silakan hubungi kami via WhatsApp 💬');
        });
    }
}