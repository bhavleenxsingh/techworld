
<script>
    let cartitems = [];
function addToCart(itemname, itemqty, itemprice){
        let item = {
            itemname : itemname,
            itemqty : itemqty,
            itemprice : itemprice,
            };
for (var i in cartitems) {
            if(cartitems[i].itemname === item.itemname){
                cartitems[i].itemqty += item.itemqty;
                return;
            }}
        cartitems.push(item);
        console.log(cartitems);
}
</script>

<script>

function submitCart(){
        fetch('/cart/store', {
            method : 'POST',
            headers : {
                'Content-Type' : 'application/json',
                'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body : JSON.stringify({ cart : cartitems})
        })
        .then(response => response.json())
        .then(data=>{
            console.log('Cart Saved : ', data);
        })
        
}
</script>
