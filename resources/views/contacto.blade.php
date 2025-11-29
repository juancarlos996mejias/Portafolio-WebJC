@extends('layouts.app')

@section('title', 'Contacto')

@section('content')




<div class="container fade-in">
    <h1 class="text-center mb-4 section-title">
        <p>Contacto</p>
    </h1>

    @if(session('success'))
    <div class="alert alert-success glass text-white" style="background:rgba(76,175,80,0.25); border:none;">
        {{ session('success') }}
    </div>
    @endif

    <p class="text-center mb-5" style="color:#676767;">
        Si deseas ponerte en contacto conmigo por oportunidades laborales o proyectos,
        completa el formulario y te responderé a la brevedad.
    </p>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- CARD GLASS FORM -->
            <div class="glass-form">

                <form action="/contacto" method="POST" id="contactForm">
                    @csrf

                    <!-- Nombre -->
                    <div class="mb-3 input-wrapper">
                        <label class="form-label fw-bold">Nombre completo</label>
                        <i class="bi bi-person-fill"></i>
                        <input type="text" name="name" id="name"
                            class="form-control glass-input @error('name') is-invalid @enderror"
                            placeholder="Ingresa tu nombre" required>
                        <div class="validation-msg"></div>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-3 input-wrapper">
                        <label class="form-label fw-bold">Correo electrónico</label>
                        <i class="bi bi-envelope-fill"></i>
                        <input type="email" name="email" id="email"
                            class="form-control glass-input @error('email') is-invalid @enderror"
                            placeholder="ejemplo@correo.com" required>
                        <div class="validation-msg"></div>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Mensaje -->
                    <div class="mb-3 input-wrapper">
                        <label class="form-label fw-bold">Mensaje</label>
                        <i class="bi bi-chat-left-text-fill"></i>
                        <textarea name="message" id="message" rows="5"
                            class="form-control glass-input @error('message') is-invalid @enderror"
                            placeholder="Escribe tu mensaje..." required></textarea>
                        <div class="validation-msg"></div>
                        @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Botón -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-dark btn-lg px-5"style="background:#1a3faa; color:#fff; border:none;">
                            <i class="bi bi-send-fill me-2"></i>Enviar mensaje
                        </button>

                    </div>
                </form>

            </div> <!-- /glass-form -->
        </div> <!-- /col-md-8 -->
    </div> <!-- /row -->
</div> <!-- /container -->

<script>
document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById('contactForm');
    if (!form) return;

    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const messageInput = document.getElementById('message');

    const nameRegex = /^[A-Za-zÁÉÍÓÚÜÑáéíóúüñ\s]+$/;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    function setState(input, msg, ok) {
        const w = input.closest('.input-wrapper');
        const m = w.querySelector('.validation-msg');
        if (ok) {
            w.classList.add("valid"); w.classList.remove("invalid");
            input.classList.add("is-valid"); input.classList.remove("is-invalid");
            m.textContent = msg; m.className = "validation-msg success";
        } else {
            w.classList.add("invalid"); w.classList.remove("valid");
            input.classList.add("is-invalid"); input.classList.remove("is-valid");
            m.textContent = msg; m.className = "validation-msg error";
        }
    }

    function validateName() {
        const v = nameInput.value.trim();
        if (v === "") return setState(nameInput, "El nombre es obligatorio.", false);
        if (!nameRegex.test(v)) return setState(nameInput, "Solo letras y espacios.", false);
        return setState(nameInput, "✓ Nombre válido", true);
    }

    function validateEmail() {
        const v = emailInput.value.trim();
        if (v === "") return setState(emailInput, "El correo es obligatorio.", false);
        if (!emailRegex.test(v)) return setState(emailInput, "Formato inválido.", false);
        return setState(emailInput, "✓ Email válido", true);
    }

    function validateMessage() {
        const v = messageInput.value.trim();
        if (v.length < 10) return setState(messageInput, "El mensaje debe tener mínimo 10 caracteres.", false);
        return setState(messageInput, "✓ Mensaje válido", true);
    }

    nameInput.addEventListener("input", validateName);
    emailInput.addEventListener("input", validateEmail);
    messageInput.addEventListener("input", validateMessage);

    form.addEventListener("submit", (e) => {
        if (!validateName() || !validateEmail() || !validateMessage()) e.preventDefault();
    });
});
</script>

@endsection
