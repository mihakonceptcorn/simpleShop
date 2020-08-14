(function() {
    document.addEventListener('DOMContentLoaded', function(){
        let option = document.getElementById("option");
        let optionAmount = 0;
        let totalPriceElem = document.querySelector('[data-total-price]');
        let totalPriceElemValue = +totalPriceElem.innerHTML;
        option.addEventListener("change", function(){
            optionAmount = +option.options[option.selectedIndex].getAttribute('data-value');
            let totalPrice = optionAmount + totalPriceElemValue;
            totalPriceElem.innerHTML = totalPrice.toFixed(2);
        });
    });
}());
