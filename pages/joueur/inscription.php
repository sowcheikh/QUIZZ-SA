<div class="position-relative py-auto inscription">
    <div class="container">
        <div class="row">
        <div class="col-4 col-xs col-sm-2 col-md-4 col-lg mt-5 av_ins">
        <img src="./public/img/avatar.png" id="output" class="rounded-circle border border-info" width="130" height="130">
        <h4  class="text-title ml-4">AVATAR</h4>
        </div>
            <div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-8 milieu">
                <form class="form_login" id="form" action="" method="post" enctype="multipart/form-data">
                    <h6 class="text-title">S’inscrire pour tester votre niveau de culture générale</h6>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg bg-grey lighten-2" name="name" id="nom" placeholder="Entrer votre nom complet">
                        <small>Validation Error</small>
                        <svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        </svg>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg bg-grey lighten-2" name="login" id="login" placeholder="Entrer votre login">
                        <small>Validation Error</small>
                        <svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        </svg>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg bg-grey lighten-2" name="password" id="password" placeholder="Entrer votre password">
                        <small>Validation Error</small>
                        <svg class="bi bi-lock" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
                        </svg>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg bg-grey lighten-2" name="password2" id="password2" placeholder="Confirmer votre password">
                        <small>Validation Error</small>
                        <svg class="bi bi-lock" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
                        </svg>
                    </div>
                    <div class="row">
            <div class="col">
            <div class="overflow-hidden position-relative btn1">
                            <input type="file" class="btn btn-warning" accept="image/*" name="photo" id="photo" onchange="loadFile(event)" value="Choisir un avatar">
                            <button class="btn border-0 rounded upload_avatar">Choisir un avatar</button>
                            <button type="submit" name="compte" id="compte" class="btn btn-warning position-relative btn-block mt-1">Créer un compte</button>
                    </div>
                    <div class="user-form-error upload" id="upload-error"></div>
            </div>
        </div>
                </form>
            </div>
            <div id="signup-error"></div>
        </div>
    </div>
</div>
<script src="public/js/file.js"></script>
<script src="public/js/inscription.js"></script>
<script src="public/js/upload.js"></script>