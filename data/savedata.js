let mul_data = [];
let itemAmount = localStorage.getItem('itemAmount') || 0;
let submoney = document.querySelector('.sub-money');

function saveData(data) {
    localStorage.removeItem('boughtProducts');
    localStorage.setItem('boughtProducts', JSON.stringify(data));
    console.log(JSON.parse(localStorage.getItem('boughtProducts')));
}

function addData(productId) {
    itemAmount++;
    localStorage.setItem('itemAmount', itemAmount);
    document.querySelector('.items-amount').innerText = itemAmount;

    let productName = document.querySelector('.productDetails-wrapper .product-info .product-name').innerText;
    let productPrice = document.querySelector('.productDetails-wrapper .product-info .price').innerText;
    let productImg = document.querySelector('.productDetails-wrapper .product-img img').src;
    let data = {
        'quantity': 1,
        'subtotal': productPrice,
        'product_name': productName,
        'product_img': productImg,
        'product_price': productPrice,
        'product_id': productId
    };    

    let found = mul_data.findIndex(item => item.product_id === data.product_id);
    if (found !== -1) {
        mul_data[found].quantity++;
    } else {
        mul_data.push(data);
    }
    saveData(mul_data);
    console.log(mul_data);
}

document.addEventListener("DOMContentLoaded", function () {
    const addBtn = document.querySelector('.add');
    const reBtn = document.querySelector('.minus');
    const quantitySpan = document.querySelector('.quantity');
    let price = null;
    if (document.querySelector('.amount bdi')) {
        price = document.querySelector('.amount bdi');
    }
    else if (document.querySelector('.product-price')) {
        price = document.querySelector('.product-price');
    }

    const priceProduct = parseFloat(document.querySelector('.product-price').textContent.replace('$', ''));

    addBtn.addEventListener('click', function () {
        let currentQuantity = parseInt(quantitySpan.textContent);
        quantitySpan.textContent = currentQuantity + 1;
        let currentPrice = parseFloat(price.textContent.replace('$', ''));
        price.textContent = '$' + (currentPrice + priceProduct).toFixed(2);

        itemAmount++;
        localStorage.setItem('itemAmount', itemAmount);
        document.querySelector('.items-amount').innerText = itemAmount;

    });

    reBtn.addEventListener('click', function () {
        let currentQuantity = parseInt(quantitySpan.textContent);
        if (currentQuantity > 1) {
            quantitySpan.textContent = currentQuantity - 1;
            let currentPrice = parseFloat(price.textContent.replace('$', ''));
            price.textContent = '$' + (currentPrice - priceProduct).toFixed(2);
            itemAmount--;
            localStorage.setItem('itemAmount', itemAmount);
            document.querySelector('.items-amount').innerText = itemAmount;
        }
    });

    let money = [...document.querySelectorAll('.product-price')]; // Spread operator correction
    let amountMoney = 0;
    money.forEach(element => {
       amountMoney += parseFloat(element.textContent.replace('$', '')); // Parse text content to float
    });
    document.querySelector('.sub-money').innerText = '$' + amountMoney; // Update subtotal money

    
    let itemProducts = localStorage.getItem('boughtProducts');
    if (itemProducts) {
        let products = JSON.parse(itemProducts);
        // Now 'products' contains the array of products previously saved in localStorage
        // You can do further processing or rendering here
        }
});
