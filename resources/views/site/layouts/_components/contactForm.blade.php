{{ $slot }}

<form action={{ route('site.contact') }} method="post">
    @csrf
    <input name="name" type="text" placeholder="Nome" class="{{$class}}">
    <br>
    <input name="phone" type="text" placeholder="Telefone" class="{{$class}}">
    <br>
    <input name="email" type="email" placeholder="E-mail" class="{{$class}}">
    <br>
    <select name="contact-subject" class="{{$class}}">
        <option value="">Qual o motivo do contato?</option>
        <option value="">Dúvida</option>
        <option value="">Elogio</option>
        <option value="">Reclamação</option>
    </select>
    <br>
    <textarea name="message" class="{{$class}}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{$class}}">ENVIAR</button>
</form>