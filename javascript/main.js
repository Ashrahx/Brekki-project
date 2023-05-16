let products = [];

function loadData() {
  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      let data = JSON.parse(xhr.responseText);
      products = data.products;
    }
  };
  xhr.open("GET", "products.json", true);
  xhr.send();
}

loadData();

function searchProduct() {
  let input = document.getElementById("input-search").value.toLowerCase();
  let results = document.getElementById("results");
  let resultsContainer = document.getElementById("results-container");
  resultsContainer.style.display = "none"; // Ocultamos el contenedor de resultados

  if (input.length > 0) {
    results.innerHTML = "";
    for (let i = 0; i < products.length; i++) {
      let product = products[i];
      if (product.name.toLowerCase().startsWith(input)) {
        let elemento = document.createElement("div");
        elemento.classList.add("results");
        elemento.innerHTML = `
          <img src="${product.image}"><h3>${product.name}</h3>
          <p>Category: ${product.category}</p>
          <p>Price: ${product.price}</p>
        `;
        results.appendChild(elemento);
      }
    }
    resultsContainer.style.display = "block"; // Mostramos el contenedor de resultados
  }
}

document.getElementById("input-search").addEventListener("keydown", function(event) {
  if (event.keyCode === 13 || event.keyCode === 27) { 
    event.preventDefault();
    if (event.keyCode === 13) {
      searchProduct();
    }
    // Teclas "Enter" (13) y "Esc" (27) deshablitadas
  }
});