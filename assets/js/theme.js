// Custom theme code
$( document ).ready(function() {
    $.ajax({
        url: 'https://www.alus.com.mx/assets/PT/catalog.json',
        mode:'corse',
        method: 'GET',
        success: function (response) {

            for (let i= 0; i <response.results.products.length; i++)
            {
                $('#productos').append(`<div class="col-12 col-md-6 col-lg-4 categoria-${response.results.products[i].category_id}"><div class="clean-product-item"><div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src=${response.results.products[i].product_image}></a></div><div class="product-name" style="text-align: center;"><a href="#"><br><br>${response.results.products[i].product_name}<br></a></div><div class="about"><div class="price"><h3 style="font-size: 32px;">$ ${response.results.products[i].price}</h3></div><button class="btn btn-primary" type="button"style="color: var(--bs-gray-dark);background: rgba(255,255,255,0);font-size: 25px;border-style: none;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"fill="currentColor" viewBox="0 0 16 16"class="bi bi-arrows-angle-expand"><path fill-rule="evenodd"d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"></path></svg></button></div></div></div>`)
                console.log(response.results.products[i])
            }
        }
    })
    $.ajax({
        url: 'https://www.alus.com.mx/assets/PT/categories.json',
        mode:'corse',
        method: 'GET',
        success: function (response) {
            for (let i = 0; i < response.categories.length; i++){
                $('.categorias').append(`<option value=${response.categories[i].id}>${response.categories[i].name}</option>`)
            }
            console.log(response.categories)
        }
    })

    $('.categorias').on('change',function () {
        if (this.value ==0)
        {
            $('.categoria-1').removeAttr('hidden')
            $('.categoria-2').removeAttr('hidden')
            $('.categoria-3').removeAttr('hidden')
        }
        if (this.value == 1)
        {
            $('.categoria-1').removeAttr('hidden')
            $('.categoria-2').attr('hidden',true)
            $('.categoria-3').attr('hidden',true)
        }
        if (this.value == 2)
        {
            $('.categoria-1').attr('hidden',true)
            $('.categoria-2').removeAttr('hidden')
            $('.categoria-3').attr('hidden',true)
        }
        if (this.value == 3)
        {
            $('.categoria-2').attr('hidden',true)
            $('.categoria-3').removeAttr('hidden')
            $('.categoria-1').attr('hidden',true)
        }
        console.log(this.value)
    })

});

if (document.getElementsByClassName('clean-gallery').length > 0) {
   baguetteBox.run('.clean-gallery', { animation: 'slideIn' });
}

if (document.getElementsByClassName('clean-product').length > 0) {
    window.onload = function() {
        vanillaZoom.init('#product-preview');
    };
}
