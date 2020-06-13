    <div id="main" class="d-flex justify-content-center align-items-center">
        <div  class="w-75">
              <div class="col-xs-4 col-sm-2 col-md col-lg">
                <img src="./public/img/logo-QuizzSA.png" class="mx-auto d-block postion-relative h-75 border border-dark rounded-circle w-25" alt="">
        </div>
            <div class="connexion-form-body bgWhite p-3">
                <div id="error_message" class="alert alert-danger" role="alert">
                    <strong>Login ou Mot de Passe Incorrect</strong>
                </div>
                <form class="form_login" id="form_connexion" action="index.php?action=login" method="post">
                <h1 class="title text-justify text-nowrap pt-">Le plaisir de jouer</h1>
                <div class="form-group">
                    <input class="form-control" type="text" name="login" id="login" placeholder="Login">
                    <svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    </svg>
                    <small>Validation Error</small>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                    <svg class="bi bi-lock" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
                    </svg>
                    <small>Validation Error</small>
                </div>
                <button type="submit" name="connexion" id="connexion" class="btn btn-warning">Connexion</button>
                <a class="text-secondary" id="inscription" href="#">S'inscrire pour jouer</a>
                </form>
            </div>

        </div>
    </div>
    <script>
        // GET DOM elements
const form = document.getElementById('form_connexion');
const login = document.getElementById('login');
const password = document.getElementById('password');


// Functions
function checkRequired(inputArray) {
    inputArray.forEach(input => {
        if (input.value.trim()=== '') {
            showError(input, `${getFieldName(input)} is required !`);
        } else{
            showSucces(input);
        }
    });
}

function showError(input, message){
    const formControl = input.parentElement;
    formControl.className = 'form-group error';
    // message d'erreur
    const small = formControl.querySelector('small');
    small.innerText = message;

}

function showSucces(input){
    const formControl = input.parentElement;
    formControl.className = 'form-group success';
}

function getFieldName(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

function checkLegth(input, min, max) {
    if (input.value.length<min) {
        showError(input, `${getFieldName(input)} must be at least ${min} characters !`)
    } else if (input.value.length>max) {
        showError(input, `${getFieldName(input)} must be less than ${max} characters !`)
    } else {
        showSucces(input);
    }
}


//Events
form.addEventListener('submit', (e)=>{
    const inputs = document.getElementsByTagName("input");
    var error = false;
    // check if fields are not empty
    checkRequired([login, password ])
    // check if fields are correct
    checkLegth(login, 3, 15);
    checkLegth(password, 4, 30);
    for (input of inputs) {
       
            if (!input.value) {
                error = true;
            }
        }

    if (error) {
        e.preventDefault();
        return false;
    }
    
})

    </script>

   

 