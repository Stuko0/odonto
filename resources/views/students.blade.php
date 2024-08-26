@extends('adminlte::page')

@section('title', 'Students')

@section('content_header')
    <h1 class="text-orange">Students Page</h1>
@stop

@section('content')
    <p>Here you can register students or see those already registered.</p>
    <form method="POST" action="{{ route('students') }}">
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

        @php
            $config = [
                "placeholder" => "Select multiple options...",
                "allowClear" => true,
            ];
        @endphp
        <x-adminlte-select2 id="sel2Category" name="sel2Category[]" label="Subjects"
            label-class="text-danger" igroup-size="sm" :config="$config" multiple>
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-red">
                    <i class="fas fa-tag"></i>
                </div>
            </x-slot>
            <x-slot name="appendSlot">
                <x-adminlte-button theme="outline-dark" label="Clear" icon="fas fa-lg fa-ban text-danger"/>
            </x-slot>
            <option>Subject1</option>
            <option>Subject2</option>
            <option>Subject3</option>
            <option>Subject4</option>
            <option>Subject5</option>
        </x-adminlte-select2>

        <div class="row">
            <x-adminlte-input name="studentCode" label="Student Code" placeholder="example123"
                fgroup-class="col-md-3" disable-feedback>
                <x-slot name="prependSlot">
                    <div class="input-group-text text-purple">
                        <i class="fas fa-address-card"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

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

        <div class="row">
            <x-adminlte-button label="Cancel" theme="danger" icon="fas fa-trash" fgroup-class="col-md-5"/>
            <x-adminlte-button label="Submit" theme="success" icon="fas fa-save" fgroup-class="col-md-5"/>
        </div>
    </form>
@stop