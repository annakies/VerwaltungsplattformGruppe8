@extends('layouts.app')

@section('content')
<h1 class="container flex justify-center mx-auto">Leistungskatalog</h1>
<div class="container flex justify-center mx-auto">
<div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table class="table-auto">
                    <tbody class="bg-white">
                <form action="" method="POST">
                    @csrf 
                    <input type="text" name="bezeichnung" placeholder="Bezeichnung eingeben">
                    <input type="text" name="erforderliche_rolle" placeholder="Rolle eingeben">
                </form>
                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container flex justify-center mx-auto">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table class="table-auto">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500"> Leistungsnummer</th>
                        <th class="px-6 py-2 text-xs text-gray-500"> Bezeichnung</th>
                        <th class="px-6 py-2 text-xs text-gray-500"> erforderliche Rolle</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                
                    @foreach($leistungs as $leistung)
                    
                    <tr class="whitespace-nowrap">
                        <td class="px-6 py-4 text-sm text-gray-500"> {{$leistung ['leistungs_id']}}</td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{$leistung ['bezeichnung']}} </td>
                        <td class="px-6 py-4 text-sm text-gray-500">{{$leistung ['erforderliche_rolle']}} </td>
                        <td class="px-6 py-4">
                            <a href="#" class="px-4 py-1 text-sm text-white bg-entfernen rounded">Leistung entfernen</a>
                        </td>                   
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

