  const products = JSON.parse(localStorage.getItem("products")) || [];
  const table = document.getElementById("productTable");

  products.forEach(p => {
    const row = document.createElement("tr");
    row.innerHTML = `
      <td>${p.name}</td>
      <td><img src="${p.image}" width="80"></td>
      <td>R$ ${p.price}</td>
      <td>${p.qtd}</td>
      <td>${p.date}</td>
    `;
    table.appendChild(row);
});