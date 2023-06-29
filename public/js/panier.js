var quantiteElement = document.getElementById("quantite");
var quantite = parseInt(quantiteElement.innerText);
var plusButton = document.getElementById("plus");
var moinsButton = document.getElementById("moins");
var addButton = document.getElementById("addButton");
var panierModal = document.getElementById("panierModal");
var quantitePanier = document.getElementById("quantitePanier");
var panier = parseInt(quantitePanier.innerText);
var plusPanier = document.getElementById("plusPanier");
var moinsPanier = document.getElementById("moinsPanier");
var totalPrice = document.getElementById("totalPrice");
var price = parseInt(totalPrice.innerText);

plusButton.addEventListener("click", function () {
  if (quantite > 0) {
    quantite++;
    quantiteElement.innerText = quantite;
    quantitePanier.innerText = quantite;
    totalPrice.innerText = 199 * quantite;
  }
});

moinsButton.addEventListener("click", function () {
  if (quantite > 1) {
    quantite--;
    quantiteElement.innerText = quantite;
    quantitePanier.innerText = quantite;
    totalPrice.innerText = 199 * quantite;
  }
});

plusPanier.addEventListener("click", function () {
  if (quantite > 0) {
    quantite++;
    quantiteElement.innerText = quantite;
    quantitePanier.innerText = quantite;
    totalPrice.innerText = 199 * quantite;
  }
});

moinsPanier.addEventListener("click", function () {
  if (quantite > 1) {
    quantite--;
    quantiteElement.innerText = quantite;
    quantitePanier.innerText = quantite;
    totalPrice.innerText = 199 * quantite;
  }
});

addButton.addEventListener("click", function (e) {
  e.preventDefault();
  if (quantite > 0) {
    quantitePanier.innerText = quantite;
    panierModal.style.visibility = "visible";
  }
});

document.addEventListener("click", function (e) {
  var target = e.target;
  if (!panierModal.contains(target) && target !== addButton) {
    panierModal.style.visibility = "hidden";
  }
});
