    <script>
        $('input[name="mobile-number"]').mask('(00) 0000 0000');
    </script>
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="index.php?pagina=index">Home</a>
                    <span class="breadcrumb-item active">Contato</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Contate-nos</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="tel" class="form-control" id="name" placeholder="Seu Nome"
                                required="required" data-validation-required-message="Por favor insira seu nome" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="mobile-number" name="mobile-number" placeholder="Seu número"
                                required="required" data-validation-required-message="Por favor insira seu número"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="8" id="message" placeholder="Mensagem"
                                required="required"
                                data-validation-required-message="Por favor insira sua mensagem"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <script>
                                var name = document.querySelector("#name");
                                var message = document.querySelector("#message");
                            </script>
                            <button class="btn py-2 px-4" style="background-color:#DF0805;color:#f9f6f6;border-radius:3px;" type="submit" id="sendMessageButton"><a href="<script></script>"></a></button>
                            <!-- https://api.whatsapp.com/send?phone=5585987338264&text=teste%20amigao -->
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30">
                    <iframe style="width: 100%; height: 250px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.227486446334!2d-38.4777393851287!3d-4.175632446779501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b8b9ed0a2bffff%3A0x3e632462d2dc6bc1!2sBIO%20-%20CROSS%20%7C%20T.%20FUNCIONAL!5e0!3m2!1spt-BR!2sbr!4v1665509419496!5m2!1spt-BR!2sbr"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="bg-light p-30 mb-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt mr-3" style="color:#DF0805;"></i>Rua Maria Queiroz 107 - Buriti</p>
                    <p class="mb-2"><i class="fa fa-envelope mr-3" style="color:#DF0805;"></i>afsuplementosemodafitness@gmail.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt mr-3" style="color:#DF0805;"></i>+55 85 99108-5837</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->