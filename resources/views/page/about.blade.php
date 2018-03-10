

 <!DOCTYPE html>
<html>
<head>
<style>
.container
{
	
}
</style>
</head>
<body>


@component('mail::message')
Cet e-mail ne s'affiche pas correctement ? Voir dans le navigateur<br>

<div class="container">
@component('mail::panel')


![alt text][logo]

[logo]: {{asset('/img/olympia2.png')}} 


@endcomponent




@component('mail::panel')
Je veux réinitialiser mon mot de passe
@endcomponent

 

@component('mail::panel')
Compte utilisateur: 
@component('mail::button', ['url' => ''])
Button Text
@endcomponent
@endcomponent

@component('mail::panel')
Olympia<br>
14 rue becquerelle 
@endcomponent
</div>
2018 © Olympia<br>

@endcomponent

</body>
</html> 