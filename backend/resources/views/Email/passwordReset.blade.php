@component('mail::message')
# Solicitação de mudança de senha.

Clique no botão abaixo para alterar a senha

@component('mail::button', ['url' => 'http://localhost:4200/response-password-reset?token='.$token])
Redefenir Senha
@endcomponent

Obrigado,<br>
MySquare

@endcomponent
