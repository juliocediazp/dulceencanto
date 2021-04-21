@extends('layouts.dashboard')

@section('title')
    <h2 class="content-header-title float-left mb-0">Usuarios</h2>
@endsection

@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="empleado-tab" data-toggle="tab" href="#empleado" aria-controls="home" role="tab"
                aria-selected="true"><i data-feather='user-check'></i> Pasteleros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="cliente-tab" data-toggle="tab" href="#cliente" aria-controls="profile" role="tab"
                aria-selected="false"><i data-feather='users'></i> Clientes</a>
        </li>
    </ul>
    <div class="tab-content">

        <div class="modal fade text-left" id="registrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel17">Registrando usuario</h4>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button> -->
                    </div>
                    <div class="modal-body">
                        <form class="auth-register-form mt-2" action="/usuarios" method="POST" id="register-user">
                            @csrf
                            <div class="form-group row">
                                <div class="col-6">
                                    <label class="form-label" for="register-username">Nombre completo *</label>
                                    <input class="form-control" id="register-username" type="text" name="fullName"
                                        placeholder="johndoe" aria-describedby="register-username" autofocus=""
                                        tabindex="1" />
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="register-document">Documento *</label>
                                    <input class="form-control" id="register-document" type="text" name="document"
                                        placeholder="documento" aria-describedby="register-document" autofocus=""
                                        tabindex="2" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label class="form-label" for="register-cellphone">Teléfono *</label>
                                    <input class="form-control" id="register-cellphone" type="text" name="cellPhone"
                                        placeholder="ej: 3999999999" aria-describedby="register-cellphone" tabindex="3" />
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="birthDate">Fecha de nacimiento *</label>
                                    <input class="form-control" id="birthDate" type="date" name="birthDate"
                                        placeholder="fecha de nacimiento" aria-describedby="birthDate" autofocus=""
                                        tabindex="2" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label class="form-label" for="register-direction">Dirección *</label>
                                    <input class="form-control" id="register-direction" type="text" name="direction"
                                        placeholder="Kr 23 # 32 21" aria-describedby="register-direction" tabindex="4" />
                                </div>
                                <div class="col-6">
                                    <label>Rol</label>
                                    <div class="position-relative" data-select2-id="248">
                                        <select class="select2 form-control select2-hidden-accessible" data-select2-id="1"
                                            tabindex="-1" aria-hidden="true" name="role">
                                            <option value="0" data-select2-id="3">Seleccionar</option>
                                            @foreach ($roles as $i => $role)
                                                @if ($role->name !== 'Admin')
                                                    <option data-select2-id="register-{{ $i }}"
                                                        value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label class="form-label" for="register-email">Email *</label>
                                    <input class="form-control" id="register-email" type="text" name="email"
                                        placeholder="john@example.com" aria-describedby="register-email" tabindex="5" />
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="register-password">Contraseña *</label>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input class="form-control form-control-merge" id="register-password"
                                            type="password" name="password" placeholder="············"
                                            aria-describedby="register-password" tabindex="5" />
                                        <div class="input-group-append"><span class="input-group-text cursor-pointer"><i
                                                    data-feather="eye"></i></span></div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="register-privacy-policy" type="checkbox" tabindex="4" />
                                                    <label class="custom-control-label" for="register-privacy-policy">Acepto la <a href="javascript:void(0);">&nbsp;política y los términos de privacidad</a></label>
                                                </div>
                                            </div> -->
                            <!-- <button class="btn btn-primary btn-block" tabindex="5">Registrar</button> -->
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <!-- <p>Description:</p> -->
                        <div class="col-md-12  row justify-content-end">
                            <button type="button" class="btn btn-danger mr-25" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success mr-25" form="register-user">Registrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <<<<<< PANERL 1 >>>>> -->

        <div class="tab-pane active" id="empleado" aria-labelledby="empleado-tab" role="tabpanel">
            <div class="row p-75">
                <div class="form-group input-group input-group-merge col-5 p-0 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg></span>
                    </div>
                    <input type="text" class="form-control" id="icons-search" placeholder="Buscador...">
                </div>
                <div class="col-3">
                    <button class="btn btn-outline-success round waves-effect" data-toggle="modal"
                        data-target="#registrar"><i data-feather='user-plus'></i> Registar usuario</a>
                </div>
                <div class="col-4 d-flex row justify-content-end">
                    <p class="mr-50">Descargar usuarios</p>
                    <a class="btn-outline-success mr-50" href="{{ route('users.excel') }}">
                        <img src="./app-assets/images/icons/excel.png" height="45px" alt="Descargar excel">
                    </a>
                    <a class="btn-outline-success mr-50" href="{{ route('users.pdf') }}">
                        <img src="./app-assets/images/icons/pdfd.png" height="45px" alt="Descargar pdf">
                    </a>
                    <!-- <button class="btn-outline-danger mr-50">
                                        <img src="./app-assets/images/icons/pdfd.png" height="45px" alt="Descargar pdf" >
                                    </button> -->
                </div>
            </div>
            <br>
            <!-- table -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Contacto</th>
                            <th>Email</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $index => $employee)
                            <tr>
                                <td>
                                    <span class="font-weight-bold">{{ $index + 1 }}</span>
                                </td>
                                <td>{{ $employee->fullName }}</td>
                                <td>{{ $employee->cellPhone }}</td>
                                <td>{{ $employee->email }}</td>
                                <td><span
                                        class="badge badge-pill {{ $employee->state == 'active' ? 'badge-light-success' : 'badge-light-danger' }} mr-1">{{ $employee->state == 'active' ? 'Activo' : 'Desabilitado' }}</span>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                                        data-target="#ver-empleado-{{$index}}">
                                        <i data-feather='eye' class="text-lg-center text"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-warning" data-toggle="modal"
                                        data-target="#editar-empleado-{{$index}}">
                                        <i data-feather='edit' class="text-lg-center text"></i>
                                    </button>
                                    <div class="modal fade text-left" id="ver-empleado-{{$index}}" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel17" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel17">Informaciín del usuario</h4>
                                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button> -->
                                                </div>
                                                <div class="modal-body">
                                                    <form class="auth-register-form mt-2" action="index.html" method="POST">
                                                        <div class="form-group row">
                                                            <div class="col-6">
                                                                <label class="form-label" for="register-username">Nombre
                                                                    completo</label>
                                                                <input disabled class="form-control" id="register-username"
                                                                    type="text" name="register-username"
                                                                    value="{{ $employee->fullName }}"
                                                                    placeholder="johndoe"
                                                                    aria-describedby="register-username" autofocus=""
                                                                    tabindex="1" />
                                                            </div>
                                                            <div class="col-6">
                                                                <label class="form-label"
                                                                    for="register-document">Documento</label>
                                                                <input disabled class="form-control" id="register-document"
                                                                    type="text" name="register-document"
                                                                    value="{{ $employee->document }}"
                                                                    placeholder="documento"
                                                                    aria-describedby="register-document" autofocus=""
                                                                    tabindex="2" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-6">
                                                                <label class="form-label" for="birthDate">Fecha de nacimiento *</label>
                                                                <input disabled class="form-control" id="birthDate" type="date" name="birthDate"
                                                                    placeholder="fecha de nacimiento" 
                                                                    aria-describedby="birthDate" 
                                                                    autofocus=""
                                                                    value="{{$employee->birthDate}}"
                                                                    tabindex="2" />
                                                            </div>
                                                            <div class="col-6">
                                                                <label class="form-label"
                                                                    for="register-cellphone">Teléfono</label>
                                                                <input disabled class="form-control" id="register-cellphone"
                                                                    type="text" name="register-cellphone"
                                                                    value="{{ $employee->cellPhone }}"
                                                                    placeholder="ej: 3999999999"
                                                                    aria-describedby="register-cellphone" tabindex="3" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-6">
                                                                <label class="form-label"
                                                                    for="register-direction">Dirección</label>
                                                                <input disabled class="form-control" id="register-direction"
                                                                    type="text" name="register-direction"
                                                                    value="{{ $employee->direction }}"
                                                                    placeholder="Kr 23 # 32 21"
                                                                    aria-describedby="register-direction" tabindex="4" />
                                                            </div>
                                                            <div class="col-6">
                                                                <label class="form-label" for="register-email">Email</label>
                                                                <input disabled class="form-control" id="register-email"
                                                                    type="text" name="register-email"
                                                                    value="{{ $employee->email }}"
                                                                    placeholder="john@example.com"
                                                                    aria-describedby="register-email" tabindex="5" />
                                                            </div>
                                                            {{-- <div class="col-6">
                                                                <label class="form-label"
                                                                    for="register-password">Contraseña</label>
                                                                <div class="input-group input-group-merge form-password-toggle">
                                                                    <input disabled class="form-control form-control-merge"
                                                                        id="register-password" type="password" value="12324354"
                                                                        name="register-password" placeholder="············"
                                                                        aria-describedby="register-password" tabindex="5" />
                                                                    <div class="input-group-append"><span
                                                                            class="input-group-text cursor-pointer"><i
                                                                                data-feather="eye"></i></span></div>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-6">
                                                                <label class="form-label" for="register-email">Rol</label>
                                                                <input disabled class="form-control" id="register-email"
                                                                    type="text" name="register-email"
                                                                    value="{{ $employee->role }}"
                                                                    placeholder="john@example.com"
                                                                    aria-describedby="register-email" tabindex="5" />
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <div class="col-md-12  row justify-content-end">
                                                        <button type="button" class="btn btn-danger mr-25"
                                                            data-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade text-left" id="editar-empleado-{{$index}}" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel17" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel17">Editando usuario</h4>
                                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button> -->
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/usuarios/{{ $employee->id }}" method="POST" id="edit-employee-{{$index}}">
                                                        @csrf
                                                        @method('patch')
                                                        <input type="text" hidden value="{{ $employee->user_id }}" name="userId">
                                                        <div class="form-group row">
                                                            <div class="col-6">
                                                                <label class="form-label" for="register-username">Nombre
                                                                    completo</label>
                                                                <input class="form-control" id="register-username"
                                                                    type="text" name="fullName"
                                                                    value="{{ $employee->fullName }}"
                                                                    placeholder="johndoe"
                                                                    aria-describedby="register-username" autofocus=""
                                                                    tabindex="1" />
                                                            </div>
                                                            <div class="col-6">
                                                                <label class="form-label"
                                                                    for="register-document">Documento</label>
                                                                <input class="form-control" id="register-document"
                                                                    type="text" name="document"
                                                                    value="{{ $employee->document }}"
                                                                    placeholder="documento"
                                                                    aria-describedby="register-document" autofocus=""
                                                                    tabindex="2" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-6">
                                                                <label class="form-label" for="birthDate">Fecha de nacimiento *</label>
                                                                <input class="form-control" id="birthDate" type="date" name="birthDate"
                                                                    placeholder="fecha de nacimiento" 
                                                                    aria-describedby="birthDate" 
                                                                    autofocus=""
                                                                    value="{{$employee->birthDate}}"
                                                                    tabindex="2" />
                                                            </div>
                                                            <div class="col-6">
                                                                <label class="form-label"
                                                                    for="register-cellphone">Teléfono</label>
                                                                <input class="form-control" id="register-cellphone"
                                                                    type="text" name="cellPhone"
                                                                    value="{{ $employee->cellPhone }}"
                                                                    placeholder="ej: 3999999999"
                                                                    aria-describedby="register-cellphone" tabindex="3" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-6">
                                                                <label class="form-label"
                                                                    for="register-direction">Dirección</label>
                                                                <input class="form-control" id="register-direction"
                                                                    type="text" name="direction"
                                                                    value="{{ $employee->direction }}"
                                                                    placeholder="Kr 23 # 32 21"
                                                                    aria-describedby="register-direction" tabindex="4" />
                                                            </div>
                                                            <div class="col-6">
                                                                <label class="form-label" for="register-email">Email</label>
                                                                <input class="form-control" id="register-email" type="text"
                                                                    name="email" value="{{ $employee->email }}"
                                                                    placeholder="john@example.com"
                                                                    aria-describedby="register-email" tabindex="5" />
                                                            </div>
                                                            {{-- <div class="col-6">
                                                                <label class="form-label"
                                                                    for="register-password">Contraseña</label>
                                                                <div class="input-group input-group-merge form-password-toggle">
                                                                    <input class="form-control form-control-merge"
                                                                        id="register-password" type="password" value="12324354"
                                                                        name="register-password" placeholder="············"
                                                                        aria-describedby="register-password" tabindex="5" />
                                                                    <div class="input-group-append"><span
                                                                            class="input-group-text cursor-pointer"><i
                                                                                data-feather="eye"></i></span></div>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-6">
                                                                <label>Rol</label>
                                                                <div class="position-relative"
                                                                    data-select2-id="employee-{{ $index }}">
                                                                    <select
                                                                        class="select2 form-control select2-hidden-accessible"
                                                                        data-select2-id="employee-s{{ $index }}"
                                                                        tabindex="-1" aria-hidden="true"
                                                                        name="role"
                                                                        >
                                                                        <option value="0"
                                                                            data-select2-id="employee-s1{{ $index }}">
                                                                            Seleccionar</option>
                                                                        @foreach ($roles as $i => $role)
                                                                            @if ($role->name != 'Admin')
                                                                                <option
                                                                                    data-select2-id="employee-s2{{ $index }}-{{ $i }}"
                                                                                    {{ $employee->role_id == $role->id ? 'selected' : '' }}
                                                                                    value="{{ $role->id }}">
                                                                                    {{ $role->name }} </option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="form-group">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="custom-control-input" id="register-privacy-policy" type="checkbox" tabindex="4" />
                                                                                <label class="custom-control-label" for="register-privacy-policy">Acepto la <a href="javascript:void(0);">&nbsp;política y los términos de privacidad</a></label>
                                                                            </div>
                                                                        </div> -->
                                                        <!-- <button class="btn btn-primary btn-block" tabindex="5">Registrar</button> -->
                                                    </form>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <!-- <p>Description:</p> -->
                                                    <div class="col-md-12  row justify-content-end">
                                                        <button type="button" class="btn btn-danger mr-25"
                                                            data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-success mr-25" form="edit-employee-{{$index}}">Guardar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- <<<<<< PANERL 2 >>>>> -->
        <div class="tab-pane" id="cliente" aria-labelledby="cliente-tab" role="tabpanel">
            <div class="row p-75">
                <div class="form-group input-group input-group-merge col-5 p-0">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg></span>
                    </div>
                    <input type="text" class="form-control" id="icons-search" placeholder="Buscador...">
                </div>
                <div class="col-3">
                    <button class="btn btn-outline-success round waves-effect" data-toggle="modal"
                        data-target="#registrar"><i data-feather='user-plus'></i> Registar usuario</a>
                </div>
                <div class="col-4 d-flex row justify-content-end">
                    <p class="mr-50">Descargar usuarios</p>
                    <button class="btn-outline-success mr-50">
                        <img src="./app-assets/images/icons/excel.png" height="45px" alt="Descargar excel">
                    </button>
                    <!-- <button class="btn-outline-danger mr-50">
                                        <img src="./app-assets/images/icons/pdfd.png" height="45px" alt="Descargar pdf" >
                                    </button> -->
                </div>
            </div>
            <br>
            <!-- table -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Contacto</th>
                            <th>Email</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $index => $client)
                            <tr>
                                <td>
                                    <span class="font-weight-bold">{{ $index + 1 }}</span>
                                </td>
                                <td>{{ $client->fullName }}</td>
                                <td>{{ $client->cellPhone }}</td>
                                <td>{{ $client->email }}</td>
                                <td><span
                                        class="badge badge-pill {{ $client->state == 'active' ? 'badge-light-success' : 'badge-light-danger' }} mr-1">{{ $client->state == 'active' ? 'Activo' : 'Desabilitado' }}</span>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                                        data-target="#ver-cliente-{{$index}}">
                                        <i data-feather='eye' class="text-lg-center text"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-warning" data-toggle="modal"
                                        data-target="#editar-cliente-{{$index}}">
                                        <i data-feather='edit' class="text-lg-center text"></i>
                                    </button>
                                    <div class="modal fade text-left" id="ver-cliente-{{$index}}" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel17" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel17">Informaciín del usuario</h4>
                                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button> -->
                                                </div>
                                                <div class="modal-body">
                                                    <form class="auth-register-form mt-2" action="index.html" method="POST">
                                                        <div class="form-group row">
                                                            <div class="col-6">
                                                                <label class="form-label" for="register-username">Nombre
                                                                    completo</label>
                                                                <input disabled class="form-control" id="register-username"
                                                                    type="text" name="register-username"
                                                                    value="{{ $client->fullName }}" placeholder="johndoe"
                                                                    aria-describedby="register-username" autofocus=""
                                                                    tabindex="1" />
                                                            </div>
                                                            <div class="col-6">
                                                                <label class="form-label"
                                                                    for="register-document">Documento</label>
                                                                <input disabled class="form-control" id="register-document"
                                                                    type="text" name="register-document"
                                                                    value="{{ $client->document }}"
                                                                    placeholder="documento"
                                                                    aria-describedby="register-document" autofocus=""
                                                                    tabindex="2" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-6">
                                                                <label class="form-label" for="birthDate">Fecha de nacimiento *</label>
                                                                <input disabled class="form-control" id="birthDate" type="date" name="birthDate"
                                                                    placeholder="fecha de nacimiento" 
                                                                    aria-describedby="birthDate" 
                                                                    autofocus=""
                                                                    value="{{$employee->birthDate}}"
                                                                    tabindex="2" />
                                                            </div>
                                                            <div class="col-6">
                                                                <label class="form-label"
                                                                    for="register-cellphone">Teléfono</label>
                                                                <input disabled class="form-control" id="register-cellphone"
                                                                    type="text" name="register-cellphone"
                                                                    value="{{ $client->cellPhone }}"
                                                                    placeholder="ej: 3999999999"
                                                                    aria-describedby="register-cellphone" tabindex="3" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-6">
                                                                <label class="form-label"
                                                                    for="register-direction">Dirección</label>
                                                                <input disabled class="form-control" id="register-direction"
                                                                    type="text" name="register-direction"
                                                                    value="{{ $client->direction }}"
                                                                    placeholder="Kr 23 # 32 21"
                                                                    aria-describedby="register-direction" tabindex="4" />
                                                            </div>
                                                            <div class="col-6">
                                                                <label class="form-label" for="register-email">Email</label>
                                                                <input disabled class="form-control" id="register-email"
                                                                    type="text" name="register-email"
                                                                    value="{{ $client->email }}"
                                                                    placeholder="john@example.com"
                                                                    aria-describedby="register-email" tabindex="5" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-6">
                                                                <label class="form-label" for="register-email">Rol</label>
                                                                <input disabled class="form-control" id="register-email"
                                                                    type="text" name="register-email"
                                                                    value="{{ $client->role }}"
                                                                    placeholder="john@example.com"
                                                                    aria-describedby="register-email" tabindex="5" />
                                                            </div>
                                                        </div>
                                                        <!-- <div class="form-group">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="custom-control-input" id="register-privacy-policy" type="checkbox" tabindex="4" />
                                                                                <label class="custom-control-label" for="register-privacy-policy">Acepto la <a href="javascript:void(0);">&nbsp;política y los términos de privacidad</a></label>
                                                                            </div>
                                                                        </div> -->
                                                        <!-- <button class="btn btn-primary btn-block" tabindex="5">Registrar</button> -->
                                                    </form>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <!-- <p>Description:</p> -->
                                                    <div class="col-md-12  row justify-content-end">
                                                        <button type="button" class="btn btn-danger mr-25"
                                                            data-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade text-left" id="editar-cliente-{{$index}}" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel17" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel17">Editando usuario</h4>
                                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button> -->
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/usuarios/{{$client->id}}" method="POST" id="edit-client">
                                                        @csrf
                                                        @method('patch')
                                                        <input type="text" hidden value="{{ $client->user_id }}" name="userId">
                                                        <div class="form-group row">
                                                            <div class="col-6">
                                                                <label class="form-label" for="register-username">Nombre
                                                                    completo</label>
                                                                <input class="form-control" id="fullName"
                                                                    type="text" name="fullName"
                                                                    value="{{ $client->fullName }}" placeholder="johndoe"
                                                                    aria-describedby="register-username" autofocus=""
                                                                    tabindex="1" />
                                                            </div>
                                                            <div class="col-6">
                                                                <label class="form-label"
                                                                    for="register-document">Documento</label>
                                                                <input class="form-control" id="register-document"
                                                                    type="text" name="document"
                                                                    value="{{ $client->document }}"
                                                                    placeholder="documento"
                                                                    aria-describedby="register-document" autofocus=""
                                                                    tabindex="2" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-6">
                                                                <label class="form-label" for="birthDate">Fecha de nacimiento *</label>
                                                                <input class="form-control" id="birthDate" type="date" name="birthDate"
                                                                    placeholder="fecha de nacimiento" 
                                                                    aria-describedby="birthDate" 
                                                                    autofocus=""
                                                                    value="{{$employee->birthDate}}"
                                                                    tabindex="2" />
                                                            </div>
                                                            <div class="col-6">
                                                                <label class="form-label"
                                                                    for="register-cellphone">Teléfono</label>
                                                                <input class="form-control" id="register-cellphone"
                                                                    type="text" name="cellPhone"
                                                                    value="{{ $client->cellPhone }}"
                                                                    placeholder="ej: 3999999999"
                                                                    aria-describedby="register-cellphone" tabindex="3" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-6">
                                                                <label class="form-label"
                                                                    for="register-direction">Dirección</label>
                                                                <input class="form-control" id="direction"
                                                                    type="text" name="register-direction"
                                                                    value="{{ $client->direction }}"
                                                                    placeholder="Kr 23 # 32 21"
                                                                    aria-describedby="register-direction" tabindex="4" />
                                                            </div>
                                                            <div class="col-6">
                                                                <label class="form-label" for="register-email">Email</label>
                                                                <input class="form-control" id="email" type="text"
                                                                    name="email" value="{{ $client->email }}"
                                                                    placeholder="john@example.com"
                                                                    aria-describedby="register-email" tabindex="5" />
                                                            </div>
                                                            {{-- <div class="col-6">
                                                                <label class="form-label"
                                                                    for="register-password">Contraseña</label>
                                                                <div class="input-group input-group-merge form-password-toggle">
                                                                    <input class="form-control form-control-merge"
                                                                        id="register-password" type="password" value="12324354"
                                                                        name="register-password" placeholder="············"
                                                                        aria-describedby="register-password" tabindex="5" />
                                                                    <div class="input-group-append"><span
                                                                            class="input-group-text cursor-pointer"><i
                                                                                data-feather="eye"></i></span></div>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-6">
                                                                <label>Rol</label>
                                                                <div class="position-relative"
                                                                    data-select2-id="client-{{ $index }}">
                                                                    <select
                                                                        class="select2 form-control select2-hidden-accessible"
                                                                        data-select2-id="client-s{{ $index }}"
                                                                        tabindex="-1" aria-hidden="true"
                                                                        name="role"
                                                                        >
                                                                        <option value="0"
                                                                            data-select2-id="client-s1{{ $index }}">
                                                                            Seleccionar
                                                                        </option>
                                                                        @foreach ($roles as $i => $role)
                                                                            @if ($role->name != 'Admin')
                                                                                <option
                                                                                data-select2-id="client-s2{{ $index }}-{{ $i }}"
                                                                                {{ $client->role_id == $role->id ? 'selected' : '' }}
                                                                                value="{{ $role->id }}">
                                                                                {{ $role->name }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="form-group">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="custom-control-input" id="register-privacy-policy" type="checkbox" tabindex="4" />
                                                                                <label class="custom-control-label" for="register-privacy-policy">Acepto la <a href="javascript:void(0);">&nbsp;política y los términos de privacidad</a></label>
                                                                            </div>
                                                                        </div> -->
                                                        <!-- <button class="btn btn-primary btn-block" tabindex="5">Registrar</button> -->
                                                    </form>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <!-- <p>Description:</p> -->
                                                    <div class="col-md-12  row justify-content-end">
                                                        <button type="button" class="btn btn-danger mr-25"
                                                            data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-success mr-25" form="edit-client">Guardar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
