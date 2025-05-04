var products = [
    {
        "category": "Tops",
        "contents": [
            {
                "name": "Indie Aesthetic Lace Halter Top",
                "code": "IALT",
                "price": "₱450",
                "picture": "prod2.webp"
            },
            {
                "name": "Y2K Rhinestone Cross Scarf Top",
                "code": "YRCST",
                "price": "₱550",
                "picture": "prod19.webp"
            },
            {
                "name": "Harajuku Gothic Vintage Tee",
                "code": "HGVT",
                "price": "₱470",
                "picture": "prod4.jpg"
            },
            {
                "name": "Run She Got the Gun Top",
                "code": "RSGT",
                "price": "₱400",
                "picture": "prod13.webp"
            },
            {
                "name": "Y2K Star Mesh Off-Shoulder Long Sleeve Top",
                "code": "YSMS",
                "price": "₱600",
                "picture": "prod14.webp"
            },
            {
                "name": "Guitar Print Ribbed Top",
                "code": "GPRT",
                "price": "₱500",
                "picture": "prod11.webp"
            },
            {
                "name": "Vinyl Print Crop Top",
                "code": "VPCT",
                "price": "₱400",
                "picture": "prod5.jpg"
            }
            ,
            {
                "name": "Y2K Eyes Graphic Shirt",
                "code": "YEGS",
                "price": "₱480",
                "picture": "prod3.jpg"
            },
            {
                "name": "Star Print Ribbed Long Sleeve Top",
                "code": "SPRLST",
                "price": "₱530",
                "picture": "prod10.webp"
            }

        ]
    },

    {
        "category": "Pants ",
        "contents": [
            {
                "name": "Grunge Aesthetic Ripped Wide Jeans",
                "code": "GARWJ",
                "price": "₱1,200",
                "picture": "prod15.webp"
            },
            {
                "name": "Japanese Dragon Aesthetic Jeans",
                "code": "JDAJ",
                "price": "₱1,200",
                "picture": "prod9.webp"
            },
            {
                "name": "Grunge Aesthetic Knee Buckle Jeans",
                "code": "GAKBJ",
                "price": "₱1,150",
                "picture": "prod12.webp"
            },
            {
                "name": "90's Kids Jeans in Washed Brown",
                "code": "9KJWB",
                "price": "₱950",
                "picture": "prod8.webp"
            }


        ]
    },

    {
        "category": "Boots ",
        "contents": [
            {
                "name": "Love Bites Boots",
                "code": "LBB",
                "price": "₱1,700",
                "picture": "prod16.webp"
            },
            {
                "name": "Platform Ankle Boots",
                "code": "PAB",
                "price": "₱1,800",
                "picture": "prod18.webp"
            },
            {
                "name": "Lebanon Ankle Boots",
                "code": "LAB",
                "price": "₱1,600",
                "picture": "prod17.webp"
            }

        ]
    },

    {
        "category": "Accessories  ",
        "contents": [
            {
                "name": "Stars Ring",
                "code": "SR",
                "price": "₱200",
                "picture": "prod24.webp"
            },
            {
                "name": "Band-Aid Nose Clip Jewelry",
                "code": "BACJ",
                "price": "₱120",
                "picture": "prod22.webp"
            },
            {
                "name": "Grunge Heart Chain Necklace",
                "code": "GHCN",
                "price": "₱350",
                "picture": "prod25.webp"
            }
            ,
            {
                "name": "Grunge Bear Heart Earrings",
                "code": "GBHE",
                "price": "₱250",
                "picture": "prod20.webp"
            }
            ,
            {
                "name": "Grunge Aesthetic Star Leather Bracelet",
                "code": "GASLB",
                "price": "₱300",
                "picture": "prod23.webp"
            },
            {
                "name": "Silver Star and Crystal Open Bracelet",
                "code": "SSCOB",
                "price": "₱250",
                "picture": "prod1.webp"
            }

        ]
    },

    {
        "category": "Outerwear  ",
        "contents": [

            {
                "name": "Come As You Are Grunge Leather Jacket",
                "code": "CAYAGLJ",
                "price": "₱1,800",
                "picture": "prod6.webp"
            },
            {
                "name": "80's Grandma Striped Cardigan Sweater",
                "code": "8GSCS",
                "price": "₱650",
                "picture": "prod7.webp"
            }



        ]
    }, {
        "category": "Bag  ",
        "contents": [

            {
                "name": "Dark Washed Hobo Bag",
                "code": "DWHB",
                "price": "₱950",
                "picture": "prod21.webp"
            }

        ]
    }
]


var total = 0;

function loadCategories() {
    var categoriesContainer = document.getElementById("categories");

    products.forEach(function (product, index) {
        categoriesContainer.innerHTML +=
            `<div onclick="loadProducts('` + index + `')" class="button-category p-3 m-2">
                <div class="category-name px-3">` + product.category + `</div>
            </div>
            `;

    });
}

function loadProducts(categoryIndex) {
    var maincontainer = document.getElementById("maincontainer");
    maincontainer.innerHTML = "";

    products[categoryIndex].contents.forEach(content => {
        maincontainer.innerHTML += `
<div onclick="addToReceipt ('`+ content.code + `','` + content.price + `')" class="product rounded-3" >
                <div class="card-content p-2">
                    <img src="assets/img/` + content.picture + `">
                    <div class="card-text pt-2">
                      <div class="product-name">
                      ` + content.name + `
                      </div>
                      <div class="product-price">
                         ` + content.price + `
                      </div>
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
        <div><small>`+ price + `</small></div>
      </div>
    `;
}



loadCategories();
