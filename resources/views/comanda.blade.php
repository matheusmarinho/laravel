
@extends('master')

<table class="table table-striped table-bordered responsive resourceTable">
    <thead class="">
        <tr>
            
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Valor Unitário</th>
            <th>Valor Total</th>
            
        </tr>
    </thead>

    <tbody>
        @foreach($consumo as $consumo)
            <tr>
                <td>{{$consumo->nome}}</td>
                <td>{{$consumo->Qtde}}</td>
                <td>{{$consumo->VUnit}}</td>
                <td>{{$consumo->value}}</td>
                <td>{{$consumo->Comanda}}</td>
                <td>{{$consumo->Status}}</td>
            </tr>
        @endforeach
    </tbody>
</table>