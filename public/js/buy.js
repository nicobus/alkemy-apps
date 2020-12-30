var appId = document.querySelector("#id");
var customerId = document.getElementById("customer_id");
var btnBuy= document.querySelector('#btn-buy');
var purchase = {
    customer_id: customerId.value,
    app_id: appId.value
};
console.log(purchase);

btnBuy.onclick = function(event){
    event.preventDefault();
    
    fetch('/api/buy',{
        method:'POST',
        body: JSON.stringify({purchase: purchase}) 
    })
    .then(function(response) {
        // if (!response.ok) throw Error(response.status);
        return response.text();
    })
    .then(function(data) {
        console.log(data);
    })
    .catch(function(error) {
        console.log(error);
    })
    
}
   