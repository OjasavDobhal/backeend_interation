// Initialize the total amount
var totalAmount = 0;

// Function to add items to the cart
function addToCart(itemName, itemPrice) {
    // Create a new list item
    var listItem = document.createElement("li");
    listItem.textContent = itemName + ' - ₹' + itemPrice;

    // Update the total amount
    totalAmount += itemPrice;

    // Display the total amount in the cart
    document.getElementById("cart-total").textContent = 'Total: ₹' + totalAmount;

    // Append the list item to the cart
    document.getElementById("cart-items").appendChild(listItem);
}

// Function to handle checkout
function checkout() {
    alert('Checkout successful! Total amount: ₹' + totalAmount);
    // Here you can implement further actions, like submitting the order to a server.
}
