const crops = [
    { name: "Tomato", price: "₹25/kg" },
    { name: "Mint", price: "₹10/bunch" },
    { name: "Carrot", price: "₹30/kg" }
  ];
  
  window.onload = () => {
    const container = document.getElementById('crops');
    crops.forEach(crop => {
      const div = document.createElement('div');
      div.className = 'crop';
      div.innerHTML = `<h3>${crop.name}</h3><p>${crop.price}</p>`;
      container.appendChild(div);
    });
  };
  