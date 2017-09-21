<section id="contact-area">
    <div class="container">
        <div class="row">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible;">Contactanos</h2>
                <p class="text-center wow fadeInDown animated" style="visibility: visible;">Drop a line to us. Your word is most important to us.</p>
            </div>
            <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="col-lg-6 animated animate-from-left" style="opacity: 1; left: 0px;">

                    <div class="form-group">
                            <label for="name">Nombre (Requerido)</label>
                            <input id="name" type="text" name="name" class="form-control" placeholder="Nombre" required>
                        </div>
                    <div class="form-group">
                            <label for="email">Correo Electronico</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Correo" required>
                        </div>
                    <div class="form-group">
                        <label for="subject">Tema</label>
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Tema" required>
                    </div>

                </div>
                <div class="col-lg-6 animated animate-from-right" style="opacity: 1; right: 0px;">
                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea name="message" id="message" class="form-control" rows="8" placeholder="Mensaje" required></textarea>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="text-center">

                      <button type="submit" class="btn btn-primary btn-lg btn-send-msg">Enviar Mensaje</button>

                </div>

            </form>

        </div>
    </div>
</section><!--/#bottom-->
