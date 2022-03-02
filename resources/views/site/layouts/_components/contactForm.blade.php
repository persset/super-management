{{ $slot }}

<form action={{ route('site.contact') }} method="post">
    @csrf
    <input name="name" type="text" placeholder="Nome" class="{{$class}}" value="{{old('name')}}"">
    <br>
    <input name=" phone" type="text" placeholder="Telefone" class="{{$class}}" value="{{old('phone')}}"">
    <br>
    <input name=" email" type="email" placeholder="E-mail" class="{{$class}}" value="{{old('email')}}"">
    <br>
    <select name=" contact_subject" class="{{$class}}">
    <option value="">Qual o motivo do contato?</option>
    @foreach($contact_subjects as $subject => $contact_subject)
    <option value="{{$subject}}" {{ old('contact_subject')==$subject ? 'selected' : '' }}>{{$contact_subject}}</option>
    @endforeach
    </select>
    <br>
    <textarea name="message" class="{{$class}}"
        placeholder="Preencha aqui a sua mensagem">{{ (old('message') != '') ? old('message') : '' }}</textarea>
    <br>
    <button type="submit" class="{{$class}}">ENVIAR</button>
</form>