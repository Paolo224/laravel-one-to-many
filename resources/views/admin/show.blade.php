@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <a class="btn btn-sm btn-outline-primary mb-2" href={{route('projects.index')}}>
                Torna alla lista
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card text-center">
                <div class="card-header">
                    {{$project->Nome_sviluppatore}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$project->Nome_progetto}}</h5>
                    <p class="card-text">{{$project->Descrizione_progetto}}</p>
                </div>
                <div class="img">
                    <img class="size-image-show" src="{{asset('storage/' . $project->Immagine )}}" alt="">
                </div>
                <div class="card-footer text-muted">
                    Inizio: {{$project->Data_inizio_progetto}}
                </div>
                <div class="card-footer text-muted">
                    Fine: {{$project->Data_fine_progetto}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection