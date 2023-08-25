<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=url("assets/web/css/login.css"); ?>">
    <title>eEletronics - Login</title>
</head>
<body>
    
    <div class="container">
        <div class="form__image">
            <img src="./assets/web/img/main-logo-1.png" class="logo" alt="">
            <!-- <img src="./assets/assetsRegister/img/undraw_online_stats_0g94.png" alt=""> -->
        </div>
        <div class="form">
            <form id="login-form">
                <div class="form__header">
                    <div class="title">
                        <h1>Logar</h1>
                    </div>
                    <div class="login__button">
                        <button type="button" href="<?= url("/registro");?>" ><a href="<?= url("/registro");?>";>Cadastrar</a></button>
                    </div>    
                </div>
                <div class="input__group">

                    <div class="input__box">
                        <label for="email">E-mail</label>
                        <input id="email" name="email" type="email" placeholder="Digite seu e-mail">
                    </div>
                    
                    <div class="input__box">
                        <label for="password">Senha</label>
                        <input id="password" name="password" type="password" placeholder="Digite sua senha">
                    </div>

                </div>
                <div class="response">
                    <p class="response__p" ></p>
                </div>
                
                <div class="continue__button"> 
                    <button type="submit"><a>Entrar</a></button>
                </div>
            </form>
        </div>
    </div>


<script type="text/javascript" async>
    const url = `<?= url("api/user/login");?>`;

    async function request (url, options) {
        try {   
            const response = await fetch (url, options);
            const data = await response.text();
            return data;
        } catch (err) {
            console.error(err);
            return {
                type: "error",
                message: err.message
            };
        }
    }

    document.querySelector("form").addEventListener("submit", async (e) => {
        e.preventDefault();
        const formData = new FormData(document.querySelector("form"));
        const options = {
            method: 'POST',
            body : formData
        };
        const resp = await request(url, options);
        console.log(resp);
		// if (resp.type !== "success") {
			// let responseDiv = document.querySelector(".response__p");
			// responseDiv.innerHTML = "Não foi possível fazer o login. Email ou senha incorretos!";
            // responseDiv.classList.remove("alert__success");
            // responseDiv.classList.add("alert__danger");
			// responseDiv.classList.add("error");
		// } else {
			// window.location.href = "<?= url("/");?>";
		// }
// 
        // setTimeout(() => {
            // document.querySelector(".response").setAttribute("style", "display: none");
        // }, 3000);

        // function goToRegister(){
        //     location.href = "<?= url("/registro");?>";
        // }

    });

</script>