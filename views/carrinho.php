
<?php echo \Classes\ClassLayout::setHeaderUser('Cadastro', "Faça seu cadastro", ""); ?>

<script type="text/javascript">
  // Material Select Initialization
$(document).ready(function() {
  $('.mdb-select').material_select();
});
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<div class="container mt-5">


  <!--Section: Content-->
  <section class="dark-grey-text">

  	<div class="card">
      <div class="card-body">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-lg-8">

            <!-- Pills navs -->
            <ul class="nav md-pills nav-justified pills-primary font-weight-bold">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tabCheckoutBilling123" role="tab">1. 
Faturamento</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabCheckoutAddons123" role="tab">2. Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabCheckoutPayment123" role="tab">3. Pagementos</a>
              </li>
            </ul>

            <!-- Pills panels -->
            <div class="tab-content pt-4">

              <!--Panel 1-->
              <div class="tab-pane fade in show active" id="tabCheckoutBilling123" role="tabpanel">

                <!--Card content-->
                <form>

                  <!--Grid row-->
                  <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12 mb-4">

                      <!--firstName-->
                      <label for="firstName" class="">Nome</label>
                      <input type="text" id="nome" class="form-control" required="" onfocus="">

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->

                  <!--Username-->
                 <div class="col-md-12 mb-4">

                      <!--firstName-->
                      <label for="email" class="">Email</label>
                      <input type="email" id="nome" class="form-control" required="">

                    </div>

                    

                  </div>
                
                <div class="row">
                  <div class="col-md-10">
                        <label for="address" class="">Endereço</label>
                  <input type="text" id="endereco" class="form-control mb-4" placeholder="Logradouro, Rua, Avenida">
                  </div>
                  <div class="col-md-2">
                        <label for="address" class="">Numero</label>
                  <input type="text" id="numero_endereco" class="form-control mb-4" placeholder="">
                  </div>
                </div>

                 
<div class="row">

                    <!--Grid column-->
                    <div class="col-lg-2 col-md-2 mb-4">
 <label for="address" class="">Prefixo</label>
                  <input type="tel" id="prefixo" class="form-control mb-4" placeholder="+(55)">
                     

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-5 col-md-6 mb-4">

                     <label for="address" class="">Telefone</label>
                  <input type="tel" id="telefone" class="form-control mb-4" placeholder="">

                    </div>
                     <div class="col-lg-5 col-md-6 mb-4">

                     <label for="address" class="">CPF</label>
                  <input type="tel" id="telefone" class="form-control mb-4" placeholder="">

                    </div>

                  </div>
                  <!--Grid row-->

                  

                  

                  <hr>

                  <button class="btn btn-primary btn-lg btn-block" type="submit">Próximo Passo</button>

                </form>

              </div>
              <!--/.Panel 1-->

              <!--Panel 2-->
              <div class="tab-pane fade" id="tabCheckoutAddons123" role="tabpanel">

                <!--Grid row-->
                <div class="row">

                  <!--Grid column-->
                  <div class="col-md-5 mb-4">

                    <img src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" class="img-fluid z-depth-1-half"
                      alt="Second sample image">

                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-7 mb-4">

                    <h5 class="mb-3 h5">Plano Premium</h5>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, ea ut aperiam corrupti,
                      dolorem.</p>

                    <!--Name-->
                    <select class="mdb-select colorful-select dropdown-info">
                      <option value="" disabled selected class="mb-1">Escolha o Periodo de tempo</option>
                      <option value="1" >+6 months : 200$</option>
                      <option value="2">+12 months: 400$</option>
                      <option value="3">+18 months: 800$</option>
                      <option value="4">+24 months: 1200$</option>
                    </select>

                    <button type="button" class="btn btn-primary btn-md">Add premium support to the cart</button>

                  </div>
                  <!--Grid column-->

                </div>
                <!--Grid row-->

                <hr class="mb-5">


                <hr class="mb-4">

                <button class="btn btn-primary btn-lg btn-block" type="submit">Próximo Passo</button>

              </div>
              <!--/.Panel 2-->

              <!--Panel 3-->
              <div class="tab-pane fade" id="tabCheckoutPayment123" role="tabpanel">

                <div class="d-block my-3 ml-3">
                  <div class="mb-2">
                    <input name="group2" type="radio" class="form-check-input with-gap" id="radioWithGap4" checked
                      required>
                    <label class="form-check-label" for="radioWithGap4"><i class="fas fa-credit-card"></i>   Cartão de Credito</label>
                  </div>
                  <div class="mb-2">
                    <input iname="group2" type="radio" class="form-check-input with-gap" id="radioWithGap5"
                      required>
                    <label class="form-check-label" for="radioWithGap5"><i class="fab fa-cc-paypal"></i>  Paypal</label>
                  </div>
                  <div class="mb-2">
                    <input name="group2" type="radio" class="form-check-input with-gap" id="radioWithGap6" required>
                    <label class="form-check-label" for="radioWithGap6"><i class="far fa-credit-card"></i>  Pag seguro</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="cc-name123">Nome </label>
                    <input type="text" class="form-control" id="cc-name123" placeholder="" required>
                    <small class="text-muted">Nome Completo escrito no cartão</small>
                    <div class="invalid-feedback">
                      Name on card is required
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="cc-number123">Numero do Cartão</label>
                    <input type="text" class="form-control" id="cc-number123" placeholder="" required>
                    <div class="invalid-feedback">
                      Credit card number is required
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="cc-expiration123">Data de Validade</label>
                    <input type="text" class="form-control" id="cc-expiration123" placeholder="" required>
                    <div class="invalid-feedback">
                      Expiration date required
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="cc-cvv123">Codigo CVV</label>
                    <input type="text" class="form-control" id="cc-cvv123" placeholder="" required>
                    <div class="invalid-feedback">
                      Security code required
                    </div>
                  </div>
                </div>
                <hr class="mb-4">

                <button class="btn btn-primary btn-lg btn-block" type="submit">Realizar Pedido</button>

              </div>
              <!--/.Panel 3-->

            </div>
            <!-- Pills panels -->


          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4 mb-4">

            <button class="btn btn-primary btn-lg btn-block" type="submit">Realizar Compra</button>

            <!--Card-->
            <div class="card z-depth-0 border border-light rounded-0">

              <!--Card content-->
              <div class="card-body">
                <h4 class="mb-4 mt-1 h5 text-center font-weight-bold">Itens no Carrinho</h4>

                <hr>

                <dl class="row">
                  <dd class="col-sm-8">
                   Plano Premium
                  </dd>
                  <dd class="col-sm-4">
                    $ 2000
                  </dd>
                </dl>

                <hr>

               

                
              </div>

            </div>
            <!--/.Card-->



          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
    </div>

  </section>
  <!--Section: Content-->


</div>
