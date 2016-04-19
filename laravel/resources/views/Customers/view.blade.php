@extends ('app')

@section ('content')
    <h1>Neat and Tidy Services</h1>

    <h3>
        Customers
    </h3>
    <hr/>
    @foreach($customers as $customer)
        <article>
            <h2>
                <a href="{{action('CustController@show', [$customer->ID])}}">{{ $customer->Name }}</a>
            </h2>

            <div class="notes">{{ $customer->Address }} </div>
            <div class="notes">{{ $customer->Phone }} </div>
        </article>
    @endforeach
    <hr/>


@stop