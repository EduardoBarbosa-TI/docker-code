    </div>
    </section>
    <footer class="container-fluid bg-dark text-white pt-5 ">
        <div class="row ">
            <div class="col-12 col-md-12 mb-4">
                <div class="row">
                    <div class="col-8 col-md-8">
                        <h4 class="text-white">Construtora LTDA</h2>
                    </div>
                    <div class="col-4 col-md-4 d-flex justify-content-end text-white" id="icon-contactes">
                        <i class="bi bi-instagram mx-3 "></i>
                        <i class="bi bi-facebook mx-3 "></i>
                        <i class="bi bi-whatsapp mx-3 "></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-md-4">
                <div class="card">
                    <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7796.499669678052!2d-69.1227585235292!3d12.298954947822313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e8497a207b75667%3A0x41cf7bc8139f292a!2sJan%20Donker%2C%20Cura%C3%A7ao!5e0!3m2!1spt-BR!2sbr!4v1656723709924!5m2!1spt-BR!2sbr" width="" height="250" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-md-0 mb-md-5 mt-5 offset-md-1">
                <div class="row">
                    <form class="col-12 col-md-12 needs-validation" action="<?=base_url('admin/contact/register')?>" method="post">
                        <div class=" form-group">
                            <label for="validationDefault01" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="name" id="validationDefault01" required>
                        </div>
                        <div class="my-3 form-group">
                            <label for="validationDefaultUsername" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                        </div>
                        <div class="my-3 form-group">
                            <label for="validationDefault02" class="form-label">Telefone</label>
                            <input type="text" name="phone" class="form-control" id="validationDefault02" required>
                        </div>
                        <button class="btn btn-primary"  type="submit">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="col-12 w-100 mt-5 mb-3">
                <a class="btn btn-danger" href="<?=base_url('/admin')?>">Sistema Adiministrador</a>
            </div>     
        </div>
    </footer>
    </body>

    </html>