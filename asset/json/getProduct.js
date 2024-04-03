let listProductHTML = document.querySelector('.cart-body')
let listProducts = []
async function getListProducts () {
  const response = await fetch('http://localhost:3000/');
  const json = await res.json();  
  console.log(json);
}

getListProducts()
