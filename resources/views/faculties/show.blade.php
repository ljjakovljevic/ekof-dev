@extends('layouts.master')
@section('title', trans('Faculty'))

@section('content')
    <h2>Идентификациони подаци Факултета</h2>
    <hr>

    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <th>Оснивач</th>
                <td class="text-right">{{ $faculty->founder }}</td>
            </tr>
            <tr>
                <th>Пун назив</th>
                <td class="text-right">{{ $faculty->title }}</td>
            </tr>
            <tr>
                <th>Скраћени назив</th>
                <td class="text-right">{{ $faculty->short_title }}</td>
            </tr>
            <tr>
                <th>Адреса</th>
                <td class="text-right">{{ $faculty->street }} {{ $faculty->street_no }}, {{ $faculty->postal_code }} {{ $faculty->city }}</td>
            </tr>
            <tr>
                <th>Телефон</th>
                <td class="text-right">{{ $faculty->phone }}</td>
            </tr>
            <tr>
                <th>Факс</th>
                <td class="text-right">{{ $faculty->fax }}</td>
            </tr>
            <tr>
                <th>Е-маил</th>
                <td class="text-right"><a href="mailto:dekanat@екоf.bg.ac.rs">Деканат Факултета</a></td>
            </tr>
            <tr>
                <th>Веб</th>
                <td class="text-right"><a href="{{ $faculty->website }}" target="_blank">Званични сајт Факултета</a></td>
            </tr>
            <tr>
                <th>Регистарски број</th>
                <td class="text-right">{{ $faculty->registration_no }}</td>
            </tr>
            <tr>
                <th>Шифра делатности</th>
                <td class="text-right">{{ $faculty->activity_code }} - {{ $faculty->activity_desc }}</td>
            </tr>
            <tr>
                <th>Матични број</th>
                <td class="text-right">{{ $faculty->identification_no }}</td>
            </tr>
            <tr>
                <th>Број текућег рачуна</th>
                <td class="text-right">{{ $faculty->bank_account }}</td>
            </tr>
            <tr>
                <th>Пословна банка</th>
                <td class="text-right">{{ $faculty->bank }}</td>
            </tr>
            <tr>
                <th>Девизне уплате</th>
                <td class="text-right">{{ $faculty->foreign_payments }}</td>
            </tr>
            <tr>
                <th>ПИБ</th>
                <td class="text-right">{{ $faculty->pib }}</td>
            </tr>
            <tr>
                <th>ПДВ број</th>
                <td class="text-right">{{ $faculty->pdv }}</td>
            </tr>
            <tr>
                <th>Овлашћени заступник Факултета</th>
                <td class="text-right">Декан - проф. др Бранислав Боричић</td>
            </tr>
        </tbody>
    </table>

@stop