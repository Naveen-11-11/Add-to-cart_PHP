<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    font-family: 'Courier New', Courier, monospace;
}

body {
    height: 100%;
    background-color: #222222;
}

.container {
    width: 100%;
    height: 100%;
    margin: 3% auto;
}

.ui {
    border: 0;
    box-shadow: 0 0 10´x 0 rgba(149, 184, 209, .5);
    border-radius: 10px;
    width: 60%;
    margin: 0 auto;
    padding: 10%;
    display: flex;
    gap: 20px;
    background-color: rgb(0, 0, 0);
}

.container-left {
    width: 50%;
}

.container-right {
    width: 50%;
    display: flex;
    align-items: center;
}

.card {
    width: 360px;
    height: 230px;
    margin: 0 auto;
    background: linear-gradient(45deg, rgba(2,0,36,1) 0%, rgba(0,140,177,1) 35%, rgba(0,29,125,1) 100%);
    border: 1px solid rgba(0,0,0,.3);
    border-radius: 15px;
}

.intern {
    padding: 20px;
}

.approximation {
    width: 30px;
    transform: rotate(90deg);
}

.chip {
    height: 40px;
    position: relative;
    left: 87%;
    bottom: 20px;
}

.card-number {
    margin-top: 40px;
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
    display: flex;
}

.card-holder {
    color: whitesmoke;
}

.card label {
    font-size: .7rem;
}

.card-infos {
    display: flex;
    width: 40%;
    justify-content: space-between;
    color: white;
}

#credit-card {
    display: flex;
    flex-direction: column;
    gap: 15px;
    font-size: 1.1rem;
    color: white;
    text-transform: uppercase;
}

.number-container, .name-container {
    display: flex;
    flex-direction: column;
}

.expiration-container, .cvv-container {
    width: 50%;
}

input {
    border: 0;
    border-radius: 5px;
    padding: 10px;
    background-color: #333333;
    color: white;
    font-weight: 600;
    font-size: 1.1rem;
    outline: 0;
    width: 90%;
}

input[type="text"]:focus {
    border: 1px solid #95B8D1;
}

input#valid-thru-text, input#cvv-text {
    width: 80%;
}

input[type="submit"] {
    width: 95%;
    background-color: #008cb1;
    cursor: pointer;
}

.infos-container {
    display: flex;
}

@media (max-width: 1024px) {
    .ui {
        flex-direction: column-reverse;
    }

    .container-left, .container-right {
        width: 100%;
    }
}
</style>
<body>
    <main class="container">
        <section class="ui">
            <div class="container-left">
                <form id="credit-card">
                    <div class="number-container">
                        <label>Card Number</label>
                        <input type="text" name="card-number" id="card-number" maxlength="19" placeholder="**** **** **** ****"
                        required
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                    </div>
                    <div class="name-container">
                        <label>Holder</label>
                        <input type="text" name="name-text" id="name-text" maxlength="30" placeholder="CARDHOLDER NAME"
                        required
                        onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.key == ' '">
                    </div>
                    <div class="infos-container">
                        <div class="expiration-container">
                            <label>Valid-thru</label>
                            <input type="text" name="valid-thru-text" id="valid-thru-text" maxlength="5" placeholder="dd/mm"
                            required
                            
                            onkeypress="return event.charCode >=48 && event.charCode <= 57">
                        </div>
                        <div class="cvv-container">
                            <label>CVV</label>
                            <input type="text" name="cvv-text" id="cvv-text" maxlength="4" placeholder="****"
                            required
                            onkeypress="return event.charCode >=48 && event.charCode <= 57">
                        </div>
                    </div>
                    <input type="submit" value="ADD" id="add">
                </form>
            </div>
            <div class="container-right">
                <div class="card">
                    <div class="intern">
                        <i class="fa-solid fa-wifi fa-rotate-90" style="color: #ffee2e;"></i>
                        <div class="card-number">
                            <div class="number-vl">**** **** **** ****</div>
                        </div>
                        <div class="card-holder">
                            <label>Holder</label>
                            <div class="name-vl">card holder name</div>
                        </div>
                        <div class="card-infos">
                            <div class="exp">
                                <label>valid</label>
                                <div class="expiration-vl">dd/mm</div>
                            </div>
                            <div class="cvv">
                                <label>CVV</label>
                                <div class="cvv-vl">***</div>
                            </div>
                        </div>
                        <img class="chip" src="chip.jpeg" alt="chip">
                    </div>
                </div>
            </div>
        </section>
    </main>
    
</body>
<script>
    const form = document.querySelector("#credit-card");

const cardNumber = document.querySelector("#card-number");
const cardHolder = document.querySelector("#name-text");
const cardExpiration = document.querySelector("#valid-thru-text");
const cardCVV = document.querySelector("#cvv-text");

const cardNumberText = document.querySelector(".number-vl");
const cardHolderText = document.querySelector(".name-vl");
const cardExpirationText = document.querySelector(".expiration-vl");
const cardCVVText = document.querySelector(".cvv-vl");

cardNumber.addEventListener("keyup", (e) => {
    if (!e.target.value) {
        cardNumberText.innerText = "1234 5678 9101 1121";
    } else {
        const valuesOfInput = e.target.value.replaceAll(" ", "");

        if (e.target.value.length > 14) {
            e.target.value = valuesOfInput.replace(/(\d{4})(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3 $4");
            cardNumberText.innerHTML = valuesOfInput.replace(/(\d{4})(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3 $4");
        } else if (e.target.value.length > 9) {
            e.target.value = valuesOfInput.replace(/(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3");
            cardNumberText.innerHTML = valuesOfInput.replace(/(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3");
        } else if (e.target.value.length > 4) {
            e.target.value = valuesOfInput.replace(/(\d{4})(\d{0,4})/, "$1 $2");
            cardNumberText.innerHTML = valuesOfInput.replace(/(\d{4})(\d{0,4})/, "$1 $2");
        } else {
            cardNumberText.innerHTML = valuesOfInput
        }
    }
})

cardHolder.addEventListener("keyup", (e) => {
    if (!e.target.value) {
        cardHolderText.innerHTML = "NOAH JACOB";
    } else {
        cardHolderText.innerHTML = e.target.value.toUpperCase();
    }
})

cardExpiration.addEventListener("keyup", (e) => {
    if (!e.target.value) {
        cardExpirationText.innerHTML = "02/40";
    } else {
        const valuesOfInput = e.target.value.replace("/", "");

        if (e.target.value.length > 2) {
            e.target.value = valuesOfInput.replace(/^(\d{2})(\d{0,2})/, "$1/$2");
            cardExpirationText.innerHTML = valuesOfInput.replace(/^(\d{2})(\d{0,2})/, "$1/$2");
        } else {
            cardExpirationText.innerHTML = valuesOfInput;
        }
    }
})

cardCVV.addEventListener("keyup", (e) => {
    if (!e.target.value) {
        cardCVVText.innerHTML = "123";
    } else {
        cardCVVText.innerHTML = e.target.value;
    }
})

form.addEventListener("submit", (e) => {
    e.preventDefault();

    alert("Credit Card Added!");
})
</script>
</html>