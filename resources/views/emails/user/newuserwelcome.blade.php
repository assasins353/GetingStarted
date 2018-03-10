
@component('mail::message')
Cet e-mail ne s'affiche pas correctement ? Voir dans le navigateur<br>


@component('mail::message')

# {{ $content['title'] }}


{{ $content['body'] }}


@component('mail::table')

| Laravel       | Table         | Example  |

| ------------- |:-------------:| --------:|

| PHP           | Centered      | $100     |

| Laravel       | Right-Aligned | $200     |

@endcomponent


@component('mail::button', ['url' => ''])

{{ $content['button'] }}

@endcomponent


Thanks,


                      
                      

@endcomponent
{{ config('app.name') }}
