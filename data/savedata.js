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
        id:$productId,
    };
    let data_text = new URLSearchParams(data).toString();
    alert(data_text);
    let url = 'http://localhost/shop/cart-api.php?' + data_text;
    alert(url);
    fetch(url)
        .then(response => {
            if (!response.ok) throw new Error("Fail to fetched");
            return response.text;
        })
        .then(text => {
            alert(text);
        })
        .catch(error => {
            alert(error.message);
        }) 
    
}




