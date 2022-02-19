<form action={{ route('site.contact') }} method="post">
    @csrf
    <input name="name" type="text" placeholder="Nome" class="black-border">
    <br>
    <input name="phone" type="text" placeholder="Telefone" class="black-border">
    <br>
    <input name="email" type="email" placeholder="E-mail" class="black-border">
    <br>
    <select name="contact-subject" class="black-border">
        <option value="">Qual o motivo do contato?</option>
        <option value="">Dúvida</option>
        <option value="">Elogio</option>
        <option value="">Reclamação</option>
    </select>
    <br>
    <textarea name="message" class="black-border">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="black-border">ENVIAR</button>
</form>