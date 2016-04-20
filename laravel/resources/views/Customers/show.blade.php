@extends ('app')

@section ('content')
    <h1>{{$customer->Name}}</h1>

    <hr/>

    <article>
        <strong>Phone #:</strong>{{ $customer->Phone }}<br />
        <strong>Address:</strong>{{ $customer->Street }}<br />{{$customer->City}}, {{$customer->State}} {{$customer->Zip}}</br>
        <iframe
                width="600"
                height="450"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDNJ47au9crSdMpzkI7sUYbFPUXtFGuC8g
                    &q={{$customer->Street}}+{{$customer->City}}+{{$customer->State}}+{{$customer->Zip}}" allowfullscreen>
        </iframe>
        <hr/>
        <strong>Notes:</strong><br />{{ $customer->Notes }}
        <hr/>
        <a href="/Customers">Back</a>
    </article>



@stop