let cartItems = document.querySelector("#cartItems")
let cartTotal = document.querySelector("#cartTotal")
let clearBtn = document.querySelector("#clearCart")
let checkoutBtn = document.querySelector("#checkout")
let cartInput = document.querySelector("#cartInput")
let totalInput = document.querySelector("#totalInput")

clearBtn.onclick = clearCart

const cart = {
    currentPrice: 0,
    items: [],
    addItem: function(book, price) {
        // add a book (string) to the items array
        this.items.push(book)
        //add the price (number) to the currentPrice properties
        this.currentPrice += price
    },
    clear: function() {
        //reset the currentPrice and items properties
        this.currentPrice = 0
        this.items = []
    }, 
    getSummary: function() {
        let summary = `<p>Number of Items: ${this.items.length}</p>
            <h4>Details</h4>
            <p>${this.items.join('<br>')}</p>
            <p>Total Price: $${this.currentPrice}</p>`
        return summary
    },
    getTitles: function() {
        return this.items.join('|')
    }
}

function addToCart(book) {
    /* 
        PRICES
        php: 60
        python: 49
        html: 35
        dictionary: 55
    */
   
    //add the correct price to the currentPrice variable
    if(book == 'Learning PHP, MySQL & JavaScript') {
        cart.addItem(book, 60)
    } else if(book == 'Learning Python') {
        cart.addItem(book, 49)
    } else if(book == 'HTML & CSS 9th Ed') {
        cart.addItem(book, 35)
    } else { // must be dictionary
        cart.addItem(book, 55)
    }
    cartItems.innerHTML = cart.items.length
    cartTotal.innerHTML = `${cart.currentPrice}`
    cartInput.value = cart.getTitles()
    totalInput.value = cart.currentPrice
}



function clearCart() {
    cart.clear()
    cartItems.innerHTML = '&nbsp;'
    cartTotal.innerHTML = `${cart.currentPrice}`
    cartInput.value = cart.getTitles()
    totalInput.value = cart.currentPrice
} 

function darkMode() {
    // add your code here
    let body = document.querySelector("body")
    body.style.backgroundColor = "black"
    body.style.color = "lightgray"
}