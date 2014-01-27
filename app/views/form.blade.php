{{ Form::open(array(
    'route' => 'a-named-route',
    'files' => true
)) }}

    {{ Form::label('first_name', 'First name') }}
    {{ Form::text('first_name', '', array('placeholder' => 'Luis')) }}

    {{ "<br>" }}

    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', 'Best field!') }}
    
    {{ "<br>" }}

    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}

    {{ "<br>" }}

    {{ Form::label('pands_are_cute', 'Are pandas cute?') }}
    {{ Form::checkbox('pandas_are_cute', '1', true) }}

    {{ "<br>" }}

    {{ Form::label('panda_colour', 'Pandas are?') }}
    {{ Form::radio('panda_colour', 'red', true) }} Red
    {{ Form::radio('panda_colour', 'black') }} Black
    {{ Form::radio('panda_colour', 'white') }} White

    {{ "<br>" }}

    {{ Form::label('favourite_color', 'What is your favourite colour, baby?') }}
    {{ Form::select('favourite_color', array(
        'living_colour' => 'Living colour ;)',
        'other_colour'  => 'Other colour ;)'
    )) }}

    {{ "<br>" }}

    {{ Form::label('bear', 'Bears are') }}
    {{ Form::select('bear', array(
        'Panda' => array(
            'red'   => 'Red',
            'black' => 'Black',
            'white' => 'White'
        ),
        'Character' => array(
            'pooh'  => 'Pooh',
            'baloo' => 'Baloo'
        )
    ), 'black') }}

    {{ "<br>" }}

    {{ Form::label('email', 'E-mail Address') }}
    {{ Form::email('email', 'me@luismilanese.com') }}
    
    {{ "<br>" }}

    {{ Form::button('Envia', array('type' => 'submit')) }}

{{ Form::close() }}