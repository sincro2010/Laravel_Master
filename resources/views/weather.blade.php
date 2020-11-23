@extends('layouts.main')

@section('title', 'Temperature in Bryansk')




@section('main-content')


<div class="alert alert-success text-center" role="alert">
        <p>Прогноз на {{ date('d.m.Y', $time) }}</p>
        <p>Погода в Брянске</p>
    </div>
    <table class="table table-bordered table-hover text-center">
        <thead>
        <th>
            Сейчас
        </th>
        <th>
            Температура (°)
        </th>
        <th>
            Скорость ветра (м/с)
        </th>
        <th>
            Давление (мм/рт)
        </th>
        <th>
            Влажность (%)
        </th>
        </thead>

    <tbody>
    <tr>
        <td>
            @if($daytime == 'n')
                Ночь
            @elseif($daytime == 'd')
                День
            @elseif($daytime == 'm')
                Утро
            @else
                Вечер
            @endif
        </td>
        <td>
            {{ $temp }}
        </td>
        <td>
            {{ $windspeed }} 
        </td>
        <td>
            {{ $pressure }} 
        </td>
        <td>
            {{ $humidity }} 
        </td>
    </tr>
    </tbody>
    </table>






@endsection