<section class="modal fade bd-login-modal login" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="close-right-top"><i class="large material-icons close" data-dismiss="modal" >close</i></div>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Prihlásenie</h5>
            </div>
            <div class="modal-body">
                <form class="login-reg-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control" id="email-login" name="email" aria-describedby="emailHelp" placeholder="Emailová adresa" required autofocus>
                        <small  class="form-text text-muted">Neposkytneme tvoj email nikomu inému.</small>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password-login" name="password" placeholder="Heslo" required>
                    </div>
                    <button type="submit" class="btn btn-lg btn-block btn-login">Prihlásenie</button>
                    <div class="login-registration-label">
                        <span>Nemáš účet?</span>
                    </div>
                    <button type="button" class="btn btn-lg btn-block btn-registration">Registruj sa</button>
                </form>
            </div>
        </div>
    </div>
</section>