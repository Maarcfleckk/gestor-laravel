function eliminarProducto(stockId) {
    var stockSpan = document.getElementById(stockId);
    var currentStock = parseInt(stockSpan.innerText);
    if (currentStock > 0) {
        stockSpan.innerText = currentStock - 1;
    } else {
        alert("El stock ya está en 0.");
    }
}

function aumentarStock(stockId) {
    var stockSpan = document.getElementById(stockId);
    var currentStock = parseInt(stockSpan.innerText);
    stockSpan.innerText = currentStock + 1;
}
    