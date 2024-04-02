document.addEventListener("DOMContentLoaded", function () {
    const menuItems = document.querySelectorAll(".menu-item");
    const cartItems = document.querySelector(".cart-items");
    const total = document.querySelector(".total-price");

    menuItems.forEach(item => {
        item.querySelector(".add-to-cart").addEventListener("click", () => {
            const name = item.querySelector("h2").textContent;
            const price = item.querySelector(".price").textContent;

            const cartItem = document.createElement("li");
            cartItem.className = "cart-item";
            cartItem.innerHTML = `
                <span>${name}</span>
                <span>${price}</span>
            `;

            cartItems.appendChild(cartItem);

            // Update the total price
            const totalPrice = parseFloat(total.textContent.substring(1)) + parseFloat(price.substring(1));
            total.textContent = "₹" + totalPrice.toFixed(2);
        });
    });
});
