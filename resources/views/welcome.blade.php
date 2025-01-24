@foreach($ocjene as $ucenikovaOcjena)
    <p> {{$ucenikovaOcjena->predmet}} {{ $ucenikovaOcjena->profesor }}: {{$ucenikovaOcjena->ocjena}}</p>
@endforeach
