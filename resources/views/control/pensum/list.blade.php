@extends('layouts.app')
@section ('content')
<div class="container-fluid">
    <div class="row justify-content-start">
    @include('layouts.appcontrol')
        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
            <div class="row pt-2">
                
                                    @include('layouts.items.card-header', ['titulo' => 'Lista de Pensum ENFMP'])
                                
                                    <p align="right"><a class='btn btn-info' href="{{URL::route('datosestudiante')}}">Crear Informacion del Pensum</a></p>
                                    
                                    <p>Desde aqui puedes listar la informacion del Pensun.</p>
                                    
                                    <div class="table-responsive mt-3">
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th>Trimestre</th>
                                                    <th>Eje</th>
                                                    <th>Unidad Curricular</th>
                                                    <th>Codigo</th>
                                                    <th>UC</th>
                                                    <th>Horas</th>
                                                    <th>Prela</th>
                                                    @if(in_array( Auth::user()->id_usuariogrupo, array(6,9) ))
                                                        <th>Opcion</th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($datospensum<>NULL)
                                                    @foreach ($datospensum as $item)
                                                    <tr>
                                                    
                                                        <td>{{ $item->id_trimestre }}</td>
                                                        <td>{{ $item->id_eje }}</td>
                                                        <td>{{ $item->nombre }}</td>
                                                        <td>{{ $item->codigo }}</td>
                                                        <td>{{ $item->unidad_curricular }}</td>
                                                        <td>{{ $item->horas }}</td>
                                                        <td></td>
                                                        @if(in_array( Auth::user()->id_usuariogrupo, array(9,6) ))
                                                            <td class="text-center">
                                                            <a href= "/editestudiantedatos/{{$item->id}}" class="btn btn-info" data-tip="Detalle" data-toggle="tooltip" data-original-title="Editar">
                                                            <img src="/img/icon/modify.ico" class="icon-sm" alt="Listado">
                                                            </a>
                                                            </td>
                                                        @endif
                                                            
                                                    </tr>
                                                    @endforeach
                                                @endif
                                                
                                            </tbody>
                                        </table>
                                    </div>
    
            </div>
        </div>
    </div>
</div>

@endsection



