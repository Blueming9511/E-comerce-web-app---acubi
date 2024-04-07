// const products = [
//   {
//     id: 1,
//     name: 'product 1',
//     price: 10,
//     img: 'asset/image/SHOP-IMG/m1.jpg',
//     category: 'bottom',
//     description:
//       'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.'
//   },
//   {
//     id: 2,
//     name: 'product 2',
//     price: 20,
//     img: 'asset/image/SHOP-IMG/i2.jpg',
//     category: 'bottom',
//     description:
//       'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.'
//   },
//   {
//     id: 3,
//     name: 'product 3',
//     price: 30,
//     img: 'asset/image/SHOP-IMG/i3.jpg',
//     category: 'bottom',
//     description:
//       'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.'
//   },
//   {
//     id: 4,
//     name: 'product 4',
//     price: 40,
//     img: 'asset/image/SHOP-IMG/i4.jpg',
//     category: 'top',
//     description:
//       'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.'
//   }
// ]

// let product_list = document.querySelector('.shop-field')

// function initApp () {
    
//   products.forEach((value, key) => {
//     let newItem = document.createElement('div')
//     newItem.innerHTML = `
//       <div class="image">
// 				<div id="zoom-In">
// 					<figure>
//                     <img src="${value.img}" alt="Tranding">
// 					</figure>
// 				</div>
// 			</div>
        
  
//           <div class="item-content">
//               <p class="item-name">
//                   ${value.name}
//               </p>
  
//               <p class="item-price">$${value.price}<svg class="cart-icon-item" onclick="addToCart(${key})" style="cursor: pointer;"
//                       xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
//                       version="1.1" id="ast-basket-icon-svg" x="0px" y="0px" width="100" height="100"
//                       viewBox="826 826 140 140" enable-background="new 826 826 140 140" xml:space="preserve">
//                       <path
//                   </path>
//                   </svg>
//               </p>
//           </div>
//       `
//         newItem.classList.add('item')
//         newItem.setAttribute('data-name', value.id)
//         product_list.appendChild(newItem)
//     })
// }

initApp()
let total = document.querySelector('.total-money')
let quantity = document.querySelector('.items-amount')

let listCards = []
let listCard = document.querySelector('.cart-body')

function addToCart (key) {
  if (listCards[key] == null) {
    listCards[key] = products[key]
    listCards[key].quantity = 1
  } else {
    listCards[key].quantity++
  }

  reloadCard()
}

function reloadCard () {
  listCard.innerHTML = ''
  let count = 0
  let totalPrice = 0
  listCards.forEach((value, key) => {
    totalPrice += value.price * value.quantity
    count += value.quantity
    if (value != null) {
      let newDiv = document.createElement('li')
      newDiv.innerHTML = `
                  <div class="image">
                      <img src="${value.img}" alt="">
                  </div>
                  <div class="Name">
                      ${value.name}
                  </div>
                  <div class="Price">
                      $ ${value.price}
                  </div>
                  <div class="Quantity">
                      <span onclick="changeQuantity(${key}, ${
        value.quantity - 1
      })">-</span>
                      <span>${value.quantity}</span>
                      <span onclick="changeQuantity(${key}, ${
        value.quantity + 1
      })">+</span>
                  </div>
              `
      newDiv.classList.add('cart-item')
      listCard.appendChild(newDiv)
    }
  })

  total.innerText = totalPrice
  quantity.innerText = count
}

function changeQuantity (key, quantity) {
  if (quantity <= 0) {
    delete listCards[key]
  } else {
    listCards[key].quantity = quantity
  }

  reloadCard()
}

{
  /* <div class="item-img">
             
</div> */
}
let preveiwContainer = document.querySelector('.products-preview')
let previewBox = preveiwContainer.querySelectorAll('.preview')

document.querySelectorAll('.shop-field .item').forEach(product => {
  product.onclick = () => {
    preveiwContainer.style.display = 'flex';
    let name = product.getAttribute('data-name');
    console.log(name);
    previewBox.forEach(preview => {
      let target = preview.getAttribute('data-target')
      if (name == target) {
        preview.classList.add('active')
      }
    })
  }
})

previewBox.forEach(close => {
  close.querySelector('.fa-times').onclick = () => {
    let name = close.getAttribute('data-target');


    previewBox.forEach(preview => {
      let target = preview.getAttribute('data-target')
      if (name == target) {
        preview.classList.remove('active')
      }
    })
    preveiwContainer.style.display = 'none'
  }
})



