function resetForm() {
    const inputIds = ["codigo", "marca", "nombre_producto",
    "descripccion", "existencia", "stock", "precio_compra", "precio_venta"];
  
    for (let i = 0; i < inputIds.length; i++) {
      document.getElementById(inputIds[i]).value = "";
    }
  }
  