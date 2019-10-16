@extends('layouts.dbapp')
@section('content')
    @role('student')
    @include('student.fill-details')
    @endrole
     @role('staff')
    @include('staff.fill-details')
    @endrole
@endsection