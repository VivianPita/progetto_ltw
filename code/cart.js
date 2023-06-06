
let ShoppingCart = document.getElementById("shopping-cart");
let label = document.getElementById("label");

let basket = JSON.parse(localStorage.getItem("data")) || [];

//Funzione per calcolare il numero di un particolare prodotto visualizzato poi nel carrello
let calculation = () => {
  let cartIcon = document.getElementById("cartAmount");
  cartIcon.innerHTML = basket.map((x) => x.item).reduce((x, y) => x + y, 0);
};
//Invoco funzione precedentemente definita
calculation();

//Funzione per generare i prodotti nella pagina del carrello visualizzando la quantita, il prezzo e il costo del prodotto
let generateCartItems = () => {
  if (basket.length !== 0) {
    return (ShoppingCart.innerHTML = basket
      .map((x) => {
        let { id, item } = x;
        let search = shopItemsData.find((y) => y.id === id) || [];
        let { img, price, name } = search;
        return `
      <div class="cart-item">
        <img width="100" src=${search.img} alt="" />
        <div class="details">
          <div class="title-price-x">
              <h4 class="title-price">
                <p>${name}</p>
                
              </h4>
              <i onclick="removeItem(${id})" class="bi bi-x-lg"></i>
          </div>
          <div class="buttons">
              <i onclick="decrement(${id})" class="bi bi-dash-lg"></i>
              <h5><div id=${id} class="quantity">Num.Pezzi:${item}</div></h5>
              <i onclick="increment(${id})" class="bi bi-plus-lg"></i>
          </div>
          <h4>costo: $${item * search.price}</h4>
        </div>
      </div>
      `;
      })
      .join(""));
  } else {
    ShoppingCart.innerHTML = "";
    label.innerHTML = `
    <h2>Il Carrello &egrave vuoto</h2>
    <a href="shop.html">
      <button class="HomeBtn">Ritorna allo Shop</button>
    </a>
    `;
  }
};
//Invoco la funzione prima definita
generateCartItems();

//Funzione per incrementare il numero di un particolare prodotto visualizzato poi nel carrello
let increment = (id) => {
  let selectedItem = id;
  let search = basket.find((x) => x.id === selectedItem.id);

  if (search === undefined) {
    basket.push({
      id: selectedItem.id,
      item: 1,
    });
  } else {
    search.item += 1;
  }

  generateCartItems();
  update(selectedItem.id);
  localStorage.setItem("data", JSON.stringify(basket));
};
//Funzione per decrementare il numero di un particolare prodotto visualizzato poi nel carrello
let decrement = (id) => {
  let selectedItem = id;
  let search = basket.find((x) => x.id === selectedItem.id);

  if (search === undefined) return;
  else if (search.item === 0) return;
  else {
    search.item -= 1;
  }
  update(selectedItem.id);
  basket = basket.filter((x) => x.item !== 0);
  generateCartItems();
  localStorage.setItem("data", JSON.stringify(basket));
};
//Funzione per aggiornare il numero di un particolare prodotto visualizzato poi nel carrello
let update = (id) => {
  let search = basket.find((x) => x.id === id);
  // console.log(search.item);
  document.getElementById(id).innerHTML = search.item;
  calculation();
  TotalAmount();
};
//Funzione per rimuovere un particolare elemento (non usata alla fine del progetto)
let removeItem = (id) => {
  let selectedItem = id;
  // console.log(selectedItem.id);
  basket = basket.filter((x) => x.id !== selectedItem.id);
  calculation();
  generateCartItems();
  TotalAmount();
  localStorage.setItem("data", JSON.stringify(basket));
};
//Funzione per svuotare il carrello
let clearCart = () => {
  basket = [];
  generateCartItems();
  calculation();
  localStorage.setItem("data", JSON.stringify(basket));
};
//Funzione per calcolare il prezzo totale e per permettere all'utente di poter svuotare il carrello o andare al checkout
let TotalAmount = () => {
  if (basket.length !== 0) {
    let amount = basket
      .map((x) => {
        let { item, id } = x;
        let search = shopItemsData.find((y) => y.id === id) || [];

        return item * search.price;
      })
      .reduce((x, y) => x + y, 0);
    // console.log(amount);
    label.innerHTML = `
    <h2>Prezzo Totale : $ ${amount}</h2>
    <a href='card.php'><button class="checkout">Checkout</button></a>
    <button onclick="clearCart()" class="removeAll">Svuota Carrello</button>
    `;
  } else return;
};
//Invocazione funzione definita prima
TotalAmount();

