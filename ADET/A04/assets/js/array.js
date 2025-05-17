var products = [];
var categories = [];


const getAllCategories = async () => {
  fetch(
      'http://localhost/ScharizzeAnnBarqueros.github.io/ADET/A06/categories.php'
      )
    .then(response => response.json())
    .then(data => {
      categories = data;
      loadCategories();
    });
}

const getAllProducts = async (categoryID) => {

  fetch(
      'http://localhost/ScharizzeAnnBarqueros.github.io/ADET/A06/products.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ categoryID })
      })
    .then(response => response.json())
    .then(data => {
      products = data;
      loadProducts();
    });
}

getAllCategories();

var total = 0;

function loadCategories() {
    var categoriesContainer = document.getElementById("categories");

    categories.forEach((category) => {
        categoriesContainer.innerHTML +=
            `<div onclick="getAllProducts('` + category.categoryID + `')" class="button-category p-3 m-2">
                <div class="category-name px-3">` + category.name + `</div>
            </div>
            `;

    });
}

function loadProducts(categoryID) {
    var maincontainer = document.getElementById("maincontainer");
    maincontainer.innerHTML = "";

    products.forEach(product => {
        maincontainer.innerHTML += `
<div onclick="addToReceipt ('`+ product.code + `','` + product.price + `')" class="product rounded-3" >
                <div class="card-content p-2">
                    <img src="assets/img/` + product.picture + `">
                    <div class="card-text pt-2">
                      <div class="product-name">
                      ` + product.name + `
                      </div>
                      <span class="product-price">
                         ₱` + product.price + `
                      </span>
                    </div>
                  </div>
                  </div>
                </div>
                        

        

        `;
    });
}

function addToReceipt(code, price) {
    var receiptContainer = document.getElementById("receipt");
    var numericPrice = parseFloat(price.replace('₱', ''));
    total += numericPrice;

    var totalValueElement = document.getElementById("totalValue");
    totalValueElement.innerHTML = "₱" + total;

    receiptContainer.innerHTML += `
    
      <div class="d-flex justify-content-between align-items-center px-2">
        <div><small>`+ code + `</small></div>
        <span><small>₱`+ price + `</small></span>
      </div>
    `;
}



loadCategories();
