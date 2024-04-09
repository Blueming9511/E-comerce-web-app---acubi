function add($productId) {
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




