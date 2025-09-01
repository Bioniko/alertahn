
<style>
    /* Reset básico */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

/* Contenedor principal */
.contact-section {
  padding: 60px 20px;
  background: #fff;
  border-radius: 12px;
  max-width: 900px;
  margin: 40px auto;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.contact-section h1 {
  font-size: 2rem;
  margin-bottom: 10px;
  color: #111;
}

.contact-section h2 {
  font-size: 1.2rem;
  font-weight: normal;
  margin-bottom: 30px;
  color: #555;
}

/* Formulario */
.contact-form {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.form-group {
  display: flex;
  flex-direction: column;
}

.form-group.half {
  flex: 1 1 calc(50% - 20px);
}

.form-group.full {
  flex: 1 1 100%;
}

label {
  font-size: 0.9rem;
  margin-bottom: 6px;
  color: #333;
}

input, textarea {
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 1rem;
  width: 100%;
  transition: all 0.3s ease;
}

input:focus, textarea:focus {
  border-color: #0073e6;
  outline: none;
  box-shadow: 0 0 6px rgba(0,115,230,0.3);
}

textarea {
  resize: vertical;
  min-height: 120px;
}

/* Botón */
.form-submit {
  flex: 1 1 100%;
  text-align: center;
}

button {
  background: #51a1bc;
  color: #fff;
  font-size: 1rem;
  padding: 14px 28px;
  border: none;
  border-radius: 30px;
  cursor: pointer;
  transition: background 0.3s ease;
}

button:hover {
  background: #356a7bff;
}

/* Responsivo */
@media (max-width: 768px) {
  .form-group.half {
    flex: 1 1 100%;
  }

  .contact-section {
    padding: 40px 15px;
  }

  .contact-section h1 {
    font-size: 1.6rem;
  }

  .contact-section h2 {
    font-size: 1rem;
  }
}
</style>
<section class="contact-section">
  <div class="container">
    <div class="text-center pb-3 pt-3" style="margin: 0% 0% 5% 0%;background-color: #51a1bc;
    border-radius: 0px 0px 10px 10px;-webkit-border-radius: 0px 0px 10px 10px;-moz-border-radius: 0px 0px 10px 10px;">
      <h1 style="color: #fff">¡Comunícate con nosotros!</h1>
      <h2 style="color: #fff">«Alerta Security Group proporciona servicios de seguridad de primera categoría. Altamente recomendado». Expreco S.de R.L</h2>
    </div>

    <form class="contact-form" method="post" action="https://alertahn.com/">
      <div class="form-group half">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
      </div>

      <div class="form-group half">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>
      </div>

      <div class="form-group half">
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" placeholder="Teléfono" required>
      </div>

      <div class="form-group half">
        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" placeholder="Correo electrónico" required>
      </div>

      <div class="form-group full">
        <label for="mensaje">¡Cuéntanos qué servicio te interesa!</label>
        <textarea id="mensaje" name="mensaje" placeholder="¡Cuéntanos qué servicio te interesa!" required></textarea>
      </div>
      <!-- Aquí va el reCAPTCHA -->
      <div class="g-recaptcha" data-sitekey="6Lcbo6srAAAAADYwIJOuornEfOEb0pOF4wW-3cSN"></div>
      <div class="form-submit">
        <button type="submit">Enviar mensaje</button>
      </div>
    </form>
  </div>
</section>
