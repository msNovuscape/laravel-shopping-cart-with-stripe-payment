
var stripe = Stripe('pk_test_6zViR9Z2WKkPtciMZGjy82pL005QqquvNC');
var elements = stripe.elements();
var card = elements.create('card');
card.mount('#card-element');
var form = document.getElementById('checkout-form');


form.addEventListener('submit', function(event) {
    event.preventDefault();
    $('#btn-submit').attr("disabled", "disabled");
    $('#charge-error').addClass('hidden');

    stripe.createToken(card).then(function(result){
        if (result.error) {
            $('#btn-submit').attr("disabled", false);
            $('#charge-error').removeClass('hidden');
            $('#charge-error').text(result.error.message);
        } else {
            stripeTokenHandler(result.token);
        }
    });
    return false;
});

function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server

    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);


    // Submit the form
    form.submit();
}
function esewaSubmit(){
    document.getElementById('checkout-form-esewa').submit();

}

