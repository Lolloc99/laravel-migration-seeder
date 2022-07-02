<h1>-- Lista di tutti i treni --</h1>
@foreach ($trains_list as $train)
    <hr>
    <div>
        <h2> Azienda: </h2>
        <span>{{$train->Azienda}}</span>
        <h3>Stazione di Partenza:</h3>
        <span>{{$train->Stazione_di_partenza}}</span>
        <h3>Stazione di Arrivo:</h3>
        <span>{{$train->Stazione_di_arrivo}}</span>
        <h2>Orari:</h2>
        <span>Orario di Partenza:</span>
        <small>{{$train->Orario_di_partenza}}</small>
        <br>
        <span>Orario di Arrivo:</span>
        <small>{{$train->Orario_di_arrivo}}</small>
        <h3>Codice treno:</h3>
        <span>{{$train->Codice_treno}}</span>
        <h3>Numero di Carrozze:</h3>
        <span>{{$train->Numero_carrozze}}</span>
    </div>
    <hr><br>
@endforeach