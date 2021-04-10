document.addEventListener("DOMContentLoaded", function(){
    let productTable = document.getElementById('all_the_products').getElementsByTagName('tbody')[0];
    let allProducts = '';

    for (let i=0; i<myProducts.length; i++){
        allProducts += '<tr>';
        allProducts += '<td>'+(i+1)+'</td>';
        allProducts += '<td>'+myProducts[i].id+'</td>';
        allProducts += '<td>'+myProducts[i].nombre+'</td>';
        allProducts += '<td>'+myProducts[i].referencia+'</td>';
        allProducts += '<td>'+myProducts[i].ean13+'</td>';
        allProducts += '<td>'+myProducts[i].precio_de_coste+'</td>';
        allProducts += '<td>'+myProducts[i].precio_de_venta+'</td>';
        allProducts += '<td>'+myProducts[i].iva+'</td>';
        allProducts += '<td>'+myProducts[i].cantidad+'</td>';
        allProducts += '<td>'+myProducts[i].categorias+'</td>';
        allProducts += '<td>'+myProducts[i].marca+'</td>';
        allProducts += '</tr>';
    }

    if(allProducts!='')
        productTable.innerHTML = allProducts;

});