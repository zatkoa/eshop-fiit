<section class="modal fade bd-registration-modal registration" tabindex="-1" role="dialog" aria-labelledby="registrationModalLabel" aria-hidden="true">
    <div class="close-right-top"><i class="large material-icons close" data-dismiss="modal" >close</i></div>
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Registrácia</h5>
            </div>
            <div class="modal-body">
                <form  class="login-reg-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <section class="row">
                        <div class="col-sm-12 col-md-6">
                            <input type="text" id="name" name="name" placeholder="Meno*" class="form-control" required>
                            <div class="input-text">
                                <span>Meno*</span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input type="text" id="surname" name="surname" class="form-control" placeholder="Priezvisko*" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input type="tel" id="tel_num" name="tel_num" class="form-control" placeholder="Telefónne číslo">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Emailová adresa*" required>
                        </div>
                    </section>

                    <section class="row">
                        <div class="col-sm-12 col-md-6">
                            <input type="text" id="city"  name="city" class="form-control" placeholder="Mesto*" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input type="number" id="zip" name="zip" class="form-control" placeholder="PSČ*" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input type="text" id="street" name="street" class="form-control" placeholder="Ulica*" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input type="number" id="street_num" name="street_num" class="form-control" placeholder="Číslo*" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="state">Krajina*</label>
                            <select id="state" class="form-control" name="state" required>
                                <option selected>Slovensko</option>
                                <option>Česko</option>
                                <option>Nemecko</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            Povinné údaje sú označené hviezdičkou*
                        </div>
                    </section>
                    <section class="row">

                        <div class="col-sm-12 col-md-6">
                            <input type="password" class="form-control" id="password" placeholder="Heslo" name="password" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input type="password" class="form-control" id="password_confirmation" placeholder="Potvrdenie hesla" name="password_confirmation" required>
                        </div>

                        <div class="custom-control custom-checkbox col-10 checkbox ">
                            <input class="custom-control-input" type="checkbox" value="" id="accept-conditions-reg" name="accept_conditions">
                            <label class="custom-control-label" for="accept-conditions-reg">
                                Súhlasím s obchodnými podmienkami a s podmienkami o ochrane súkromia*
                            </label>
                        </div>
                    </section>

                    <section>
                        <button type="submit" class="btn btn-lg btn-block btn-registration">Pridaj sa k saUmy</button>
                        <div class="login-registration-label">
                            <span>Nemáš účet?</span>
                        </div>
                        <button type="button" class="btn btn-lg btn-block btn-login">Prihlás sa</button>
                    </section>
                </form>
            </div>
        </div>
    </div>
</section>