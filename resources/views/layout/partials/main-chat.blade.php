<section class="online-chat">
    <section class="chat-content start-chatting">
        <header class="close-chat">
            <span>saUmy.sk</span>
            <i class="large material-icons remove-minimalize" data-dismiss="modal" >remove</i>
        </header>
        <main class="main-chat">
            <h5 class="chat-title">Práve sme online</h5>
            <p class="chat-descr">V prípade Vašich otázok nás neváhajte kontaktovať.</p>
            {{--<form>--}}
            <div class="form-content">
                <div>
                    <label for="inputFirstName">Meno*</label>
                    <input type="text" id="chat-name" class="form-control" placeholder="Meno">
                </div>
                <div>
                    <label for="inputEmail">Emailová adresa*</label>
                    <input type="email" id="chat-email" class="form-control" placeholder="Emailová adresa">
                </div>
                <div class="send-first-message">
                    <button class="btn btn-lg btn-secondary first-message">Odoslať správu</button>
                </div>
            </div>
            {{--</form>--}}
        </main>
    </section>
    <section class="chat-content chatting">
        <header class="close-chat">
            <span>saUmy.sk</span>
            <i class="large material-icons remove-minimalize" data-dismiss="modal" >remove</i>
        </header>
        <main class="main-chat">
            <section class="chat d-flex flex-column">
                <div class="chat-messages">
                    <div class="customer-message">
                        <div class="message-time">
                            15:45
                        </div>
                        <div class="message-author">
                            Vy
                        </div>
                        <div class="message-content">
                            <p>Dobrý večer, chcel by som sa spýtať, či by sa nedalo vybaviť. Lorem ipsum Lorem ipsum Lorem upsim
                                Lorem ipsum Lorem ipsum Lorem upsim.</p>
                        </div>
                    </div>
                    <div class="admin-message">
                        <div class="message-author">
                            Admin
                        </div>
                        <div class="message-time">
                            15:55
                        </div>
                        <div class="message-content">
                            <p>Dobrý večer, asi nie...</p>
                        </div>
                    </div>
                    <div class="customer-message">
                        <div class="message-time">
                            16:12
                        </div>
                        <div class="message-author">
                            Vy
                        </div>
                        <div class="message-content">
                            <p>Nevadí, aj tak Vám ďakujem.</p>
                        </div>
                    </div>
                </div>
                <div class="send-message">
                    <div class="inner">
                        <input placeholder="Napište správu...">
                        </input>
                        <i class="large material-icons send" data-dismiss="modal" >send</i>
                    </div>
                </div>
            </section>
        </main>
    </section>
    <button type="button" class="btn circle-help-chat">Sme ONLINE</button>
</section>