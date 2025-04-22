const cart = [];

function addToCart(name, price) {
  if (!cart.some(item => item.name === name)) {
    cart.push({ name, price });
    updateCartDisplay();
  }
}

function updateCartDisplay() {
  const cartList = document.getElementById('cart-list');
  const cartDataInput = document.getElementById('cartData');

  cartList.innerHTML = '';
  cart.forEach(item => {
    const li = document.createElement('li');
    li.textContent = `${item.name} - ₹${item.price}`;
    cartList.appendChild(li);
  });

  cartDataInput.value = JSON.stringify(cart);
}
