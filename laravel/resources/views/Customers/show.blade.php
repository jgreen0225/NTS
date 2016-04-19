@extends ('app')

@section ('content')
    <h1>{{$customer->Name}}</h1>

    <hr/>

    <article>
        <strong>Phone #:</strong>{{ $customer->Phone }}<br />
        <strong>Address:</strong>{{ $customer->Address }}<br />
        <hr/>
        <strong>Notes:</strong><br />{{ $customer->Notes }}
        <hr/>
        <a href="/Customers">Back</a>
    </article>



@stop