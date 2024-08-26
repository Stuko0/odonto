@extends('adminlte::page')

@section('title', 'Teachers')

@section('content_header')
    <h1 class="text-orange">Teachers Page</h1>
@stop

@section('content')
    <p>Here you can register teachers or see those already registered.</p>
    <form method="POST" action="{{ route('teachers') }}">
        @csrf

                {{-- Minimal --}}
        <x-adminlte-input name="teacherName" label="Name" placeholder="Fullname" label-class="text-black">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-user text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        {{-- Email type --}}
        <x-adminlte-input name="teacherEmail" label="Email" type="email" placeholder="mail@example.com"/>

        {{-- With label, invalid feedback disabled, and form group class --}}
        <div class="row">
            <x-adminlte-input name="teacherSpecialty" label="Specialty" placeholder="Specialty"
                fgroup-class="col-md-5" disable-feedback/>

                {{-- With append slot, number type, and sm size --}}
            <x-adminlte-input name="teacherPhone" label="Phone" placeholder="Phone" type="number"
                fgroup-size="col-md-8" min=1 max=10>
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-hashtag"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        </div>

        {{-- With extra information on the bottom slot --}}
        <x-adminlte-input name="teacherCode" label="Teacher Code" placeholder="example123">
            <x-slot name="prependSlot">
                <div class="input-group-text text-purple">
                    <i class="fas fa-address-card"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input id="teacherPsw" name="teacherPsw" label="Password" placeholder="example123" type="password">
            <x-slot name="prependSlot">
                <div class="input-group-text text-blue">
                    <i class="fas fa-key"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-input-error :messages="$errors->get('teacherPsw')" class="mt-2" />

        <div class="row">
            <x-adminlte-button label="Cancel" theme="danger" icon="fas fa-trash" fgroup-class="col-md-5"/>
            <x-adminlte-button label="Submit" theme="success" icon="fas fa-save" fgroup-class="col-md-5"/>
        </div>
    </form>
@stop