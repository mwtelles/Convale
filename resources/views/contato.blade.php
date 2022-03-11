@include('layouts.head')
<style type="text/css">
  .contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
  }
  .contact-form .form-control{
    border-radius:1rem;
  }
  .contact-image{
    text-align: center;
    font-size: 80px;

  }
  .contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
  }
  .contact-form form{
    padding: 14%;
  }
  .contact-form form .row{
    margin-bottom: -7%;
  }
  .contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
  }
  .contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
  }
  .btnContactSubmit
  {
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
  }
</style>
<body>

  @include('layouts.header')

  <div role="main" class="main">
    <section class="section section-tertiary section-no-border pb-3 mt-0">
      <div class="container">
        <div class="row justify-content-end mt-4">
          <div class="col-lg-10 pt-4 mt-4 text-right">
            <h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Entre em contato</h1>
          </div>
        </div>
      </div>
    </section>

    <div class="container">

      <div class="row pt-4 mb-4">
        <div class="col-lg-7">

          <h2 class="mb-0">Nos envie uma mensagem!</h2>

          <p class="lead mb-4 mt-1">Entre em contato ou nos ligue, veja como podemos te ajudar.</p>

          <form method="POST" action="/contato/email">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
              <strong>Sucesso!</strong> Sua mensagem foi enviada para nós, responderemos em breve.
            </div>

            <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
              <strong>Erro!</strong> Existe um erro, tente novamente.
              <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <input type="text" placeholder="Nome e sobrenome" value="" data-msg-required="Digite seu nome." maxlength="100" class="form-control" name="txtName" id="name" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <input type="email" placeholder="E-mail" value="" data-msg-required="Digite seu email." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="txtEmail" id="email" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <input type="text" placeholder="Telefone" value="" data-msg-required="Digite o assunto." maxlength="100" class="form-control" name="subject" id="subject" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <textarea maxlength="5000" placeholder="Mensagem" data-msg-required="Digite sua mensagem." rows="5" class="form-control" name="txtMsg" id="message" required></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <input type="submit" value="Enviar" name="btnSubmit" class="btn btn-lg btn-primary mb-4" data-loading-text="Loading...">
              </div>
            </div>
          </form>

        </div>
        <div class="col-lg-4 col-lg-offset-1">

          <h4 class="text-color-dark mb-1 pb-3">Nossa sede</h4>

          <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
          <div id="googlemaps" class="google-map small"></div>

          <ul class="list list-icons mt-4 mb-4">
            <li><i class="icon-pin icons"></i> <strong>Endereço:</strong> Vassouras, Av. Otávio Gomes, 395</li>
            <li><i class="icon-call-end icons"></i> <strong>Telefone:</strong> (24) 2491-9000</li>
            <li><i class="icon-envelope icons"></i> <strong>Email:</strong> <a href="mailto:convale@gmail.com">convale@gmail.com</a></li>
          </ul>

        </div>
      </div>

    </div>
  </div>


@include('layouts.footer')

@include('layouts.js')

</body>

<!-- Mirrored from www.sitesemprojeto.com.br/layouts/34/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 22:24:48 GMT -->
</html>