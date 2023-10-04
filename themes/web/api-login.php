<h1>Login com API</h1>
<div>
    <form id="formLogin">
        <div>E-mail: <input type="text" id="email" name="email" value=""></div>
        <div>Password: <input type="text" id="password" name="password" value=""></div>
        <button type="submit">Login</button>
    </form>
</div>
<div>
    <button id="listAddress">Lista De Endereços</button>
</div>
<div id="address">
    <!-- Aqui os endereços serão listados -->
</div>
<script type="module" async>
    import {request, requestDebugError} from "<?php echo url("/assets/_shared/functions.js"); ?>";
    const formLogin = document.querySelector("#formLogin");
    formLogin.addEventListener("submit", (event) => {
        event.preventDefault();
        const urlLogin = "<?= url("api/user/login"); ?>";
        const options = {
            method : "get",
            headers : {
                email : document.querySelector("#email").value,
                password : document.querySelector("#password").value
            }
        };
        fetch(urlLogin,options).then(response => {
            response.json().then(user => {
                console.log(user);
                console.log(JSON.stringify(user));
                localStorage.setItem("userLogin",JSON.stringify(user));
            });
        });
    });


    document.querySelector("#listAddress").addEventListener("click",() => {
        const userLogin = JSON.parse(localStorage.getItem("userLogin"));
        console.log(userLogin);
       
        const optionsAddress = {
            method: "get",
            headers: {
                token : userLogin.user.token
            }
        };
        const urlAddress = "./api/user/adresses";
        fetch(urlAddress,optionsAddress).then(response => {
            response.json().then(addresses => {
                const addressContainer = document.querySelector("#address");
                addressContainer.innerHTML = ""; // Limpa o conteúdo anterior
                addresses.forEach(address => {
                    // Cria um elemento de parágrafo para cada endereço
                    const addressElement = document.createElement("p");
                    addressElement.textContent = address.street + ", " + address.city;
                    addressContainer.appendChild(addressElement);
                });
            })
        });
       
    });


</script>
