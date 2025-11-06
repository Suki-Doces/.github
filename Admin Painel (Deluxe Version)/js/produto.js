document.getElementById("addProductForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const name = e.target.name.value;
    const price = e.target.price.value;
    const qtd = e.target.qtd.value;
    const date = e.target.date.value;
    const image = e.target.image.files[0];
    const reader = new FileReader();
    reader.onload = function() {
      const products = JSON.parse(localStorage.getItem("products")) || [];
      products.push({
        name, price, qtd, date, image: reader.result
      });
      localStorage.setItem("products", JSON.stringify(products));
      alert("Produto adicionado ao estoque!");
      window.location.href = "estoque.html";
}   ;
    reader.readAsDataURL(image);
});