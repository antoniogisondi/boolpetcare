@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>{{$pet->name}}</h1>
                    </div>

                    <div class="card-body">
                        <strong>Dettagli:</strong>
                        <div class="col-12 my-5">
                            @if($pet->image != NULL)
                                <img src="{{ asset('storage/'. $pet->image) }}" width="20%" >
                            @else
                                Immagine non disponibile
                            @endif
                        </div>
                        <ul>
                            <li><strong>Specie:</strong> {{ $pet->species}}</li>
                            <li><strong>Data di nascita:</strong> {{ $pet->date_born}}</li>
                            <li><strong>Proprietario:</strong> {{ $pet->owner}}</li>
                            <li><strong>Vaccinazioni:</strong>
                                @foreach ($pet->vaccinations as $vaccine)
                                    @if ($vaccine->vaccine_name)
                                        <span>{{ $vaccine->vaccine_name }},</span>
                                    @else
                                        <p>Non è stata eseguita alcuna vaccinazione</p>
                                    @endif
                                @endforeach
                            </li> 
                            <li><strong>Malattie:</strong>
                                @if ($pet->illnesses)
                                    @foreach ($pet->illnesses as $ill)
                                        @if ($ill->name)
                                            <span class="badge text-bg-primary">{{ $ill->name }},</span>
                                        @else
                                            Non è stata diagnosticata alcun tipo di malattia
                                        @endif
                                    @endforeach
                                @endif
                            <li>
                                <strong>Segni particolari:</strong>
                                <ul>
                                    <li>
                                        <p>{{$pet->notes}}</p>
                                    </li>
                                </ul>
                            </li>
                        </ul>   
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection