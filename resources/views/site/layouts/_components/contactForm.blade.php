{{ $slot }}

<form action={{ route('site.contact') }} method="post">
    @csrf
    <input name="name" type="text" placeholder="Nome" class="{{$class}}" value="{{old('name')}}"">
    @if ($errors->has('name'))
        {{ $errors->first('name') }}
    @endif
    <br>

    <input name=" phone" type="text" placeholder="Telefone" class="{{$class}}" value="{{old('phone')}}"">
    {{$errors->has('phone') ? $errors->first('phone') : ''}}
    <br>

    <input name=" email" type="email" placeholder="E-mail" class="{{$class}}" value="{{old('email')}}"">
    {{$errors->has('email') ? $errors->first('email') : ''}}
    <br>

    <select name=" contact_subject_id" class="{{$class}}">
    <option value="">Qual o motivo do contato?</option>
    @foreach($contact_subjects as $key => $contact_subject)
    <option value="{{$contact_subject->id}}" {{ old('contact_subject_id')==$contact_subject->id ? 'selected' : ''
        }}>{{$contact_subject->subject}}</option>
    @endforeach
    </select>
    {{$errors->has('contact_subject_id') ? $errors->first('contact_subject_id') : ''}}
    <br>

    <textarea name="message" class="{{$class}}"
        placeholder="Preencha aqui a sua mensagem">{{ (old('message') != '') ? old('message') : '' }}</textarea>
    {{$errors->has('message') ? $errors->first('message') : ''}}
    <br>

    <button type="submit" class="{{$class}}">ENVIAR</button>
</form>