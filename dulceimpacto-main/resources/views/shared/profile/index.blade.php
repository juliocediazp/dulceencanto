@extends(Auth::user()->role_id !== 3 ? 'layouts.dashboard' : 'layouts.client')

@section('title')
    <h2 class="content-header-title float-left mb-0">Configuración de cuenta</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Inicio</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Pages</a>
            </li>
            <li class="breadcrumb-item active">Configuración de cuenta
            </li>
        </ol>
    </div>
@endsection
    
@section('content')
    <!-- account setting page -->
    <section id="page-account-settings">
        <div class="row">
            <!-- left menu section -->
            <div class="col-md-3 mb-2 mb-md-0">
                <ul class="nav nav-pills flex-column nav-left">
                    <!-- general -->
                    <li class="nav-item">
                        <a class="nav-link active" id="account-pill-general" data-toggle="pill"
                            href="#account-vertical-general" aria-expanded="true">
                            <i data-feather="user" class="font-medium-3 mr-1"></i>
                            <span class="font-weight-bold">General</span>
                        </a>
                    </li>
                    <!-- view purchases -->
                    <li class="nav-item">
                        <a class="nav-link" id="account-pill-purchases" data-toggle="pill"
                            href="#account-vertical-purchases" aria-expanded="false">
                            <i data-feather='shopping-bag' class="font-medium-3 mr-1"></i>
                            <span class="font-weight-bold">Compras realizadas</span>
                        </a>
                    </li>
                    <!-- change password -->
                    <li class="nav-item">
                        <a class="nav-link" id="account-pill-password" data-toggle="pill" href="#account-vertical-password"
                            aria-expanded="false">
                            <i data-feather="lock" class="font-medium-3 mr-1"></i>
                            <span class="font-weight-bold">Cambiar contraseña</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!--/ left menu section -->

            <!-- right content section -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <!-- general tab -->
                            <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                aria-labelledby="account-pill-general" aria-expanded="true">
                                <!-- header media -->
                                <div class="media">
                                    <a href="javascript:void(0);" class="mr-25">
                                        <img src="./app-assets/images/portrait/small/avatar-s-11.jpg"
                                            id="account-upload-img" class="rounded mr-50" alt="profile image" height="80"
                                            width="80" />
                                    </a>
                                    <!-- upload and reset button -->
                                    <div class="media-body mt-75 ml-1">
                                        <label for="account-upload" class="btn btn-sm btn-primary mb-75 mr-75">Subir</label>
                                        <input type="file" id="account-upload" hidden accept="image/*" />
                                        <!-- <button class="btn btn-sm btn-outline-secondary mb-75">Reset</button> -->
                                        <!-- <p>Allowed JPG, GIF or PNG. Max size of 800kB</p> -->
                                    </div>
                                    <!--/ upload and reset button -->
                                </div>
                                <!--/ header media -->

                                <!-- form -->
                                <form class="mt-2 " method="POST" action="/persona/{{ Auth::user()->person_id }}">
                                    @csrf
                                    @method('patch')
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="fullName">Nombre completo</label>
                                                <input type="text" class="form-control" id="fullName" name="fullName"
                                                    placeholder="nombre completo" value="{{ $user->fullName }}" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="document">Documento</label>
                                                <input type="text" class="form-control" id="document" name="document"
                                                    placeholder="Documento" value="{{ $user->document }}" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="cellPhone">Teléfono</label>
                                                <input type="text" class="form-control" id="cellPhone" name="cellPhone"
                                                    placeholder="ej: 399999999" value="{{ $user->cellPhone }}" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="direction">Dirección</label>
                                                <input type="text" class="form-control" id="direction" name="direction"
                                                    placeholder="Kr 20 # 31 42" value="{{ $user->direction }}" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="birthDate">Fecha de nacimiento</label>
                                                <input type="date" class="form-control" id="birthDate" name="birthDate"
                                                    placeholder="Fecha de naciminto" value="{{ $user->birthDate }}" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="mail">E-mail</label>
                                                <input type="email" class="form-control" id="mail" name="email"
                                                    placeholder="Email" value="{{ Auth::user()->email }}" disabled />
                                            </div>
                                        </div>
                                        <!-- <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="account-company">Company</label>
                                                                        <input type="text" class="form-control" id="account-company" name="company" placeholder="Company name" value="Crystal Technologies" />
                                                                    </div>
                                                                </div> -->
                                        <div class="col-12 mt-75">
                                            <div class="alert alert-warning mb-50" role="alert">
                                                <h4 class="alert-heading">Su correo electrónico no está
                                                    confirmado. Por favor revise su bandeja de entrada.</h4>
                                                <div class="alert-body">
                                                    <a href="javascript: void(0);" class="alert-link">Reenviar
                                                        confirmación</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-2 mr-1">Guardar cambios</button>
                                            <!-- <button type="reset" class="btn btn-outline-secondary mt-2">Cancel</button> -->
                                        </div>
                                    </div>
                                </form>
                                <!--/ form -->
                            </div>
                            <!--/ general tab -->

                            <!-- change password -->
                            <div class="tab-pane fade" id="account-vertical-password" role="tabpanel"
                                aria-labelledby="account-pill-password" aria-expanded="false">
                                <!-- form -->
                                <form method="POST" action="/change_password">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-old-password">Contraseña actual</label>
                                                <div class="input-group form-password-toggle input-group-merge">
                                                    <input type="password" class="form-control" id="account-old-password"
                                                        name="oldPassword" placeholder="contraseña actual" />
                                                    <div class="input-group-append">
                                                        <div class="input-group-text cursor-pointer">
                                                            <i data-feather="eye"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-new-password">Nueva contraseña</label>
                                                <div class="input-group form-password-toggle input-group-merge">
                                                    <input type="password" id="account-new-password" name="newPassword"
                                                        class="form-control" placeholder="nueva contraseña" />
                                                    <div class="input-group-append">
                                                        <div class="input-group-text cursor-pointer">
                                                            <i data-feather="eye"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="account-retype-new-password">Confirmar
                                                    contraseña</label>
                                                <div class="input-group form-password-toggle input-group-merge">
                                                    <input type="password" class="form-control"
                                                        id="account-retype-new-password" name="confirmPassword"
                                                        placeholder="confirmar contraseña" />
                                                    <div class="input-group-append">
                                                        <div class="input-group-text cursor-pointer"><i
                                                                data-feather="eye"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1 mt-1">
                                                Actualizar contraseña
                                            </button>
                                            <!-- <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button> -->
                                        </div>
                                    </div>
                                </form>
                                <!--/ form -->
                            </div>
                            <!--/ change password -->

                            <!-- View purchases -->
                            <div class="tab-pane fade" id="account-vertical-purchases" role="tabpanel"
                                aria-labelledby="account-pill-purchases" aria-expanded="false">
                                <div class="form-group input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg></span>
                                    </div>
                                    <input type="text" class="form-control" id="icons-search" placeholder="Buscador...">
                                </div>
                                <!-- table -->
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Número de compra</th>
                                                <th>Dirección</th>
                                                <th>Fecha</th>
                                                <th>Estado</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @php
                                                dd($purchases);
                                            @endphp --}}
                                            @foreach ($purchases as $index => $purchase)
                                                <tr>
                                                    <td>
                                                        <span class="font-weight-bold">{{$purchase->id}}</span>
                                                    </td>
                                                    <td>{{$purchase->direction}}</td>
                                                    <td>{{$purchase->saleDate}}</td>
                                                    <td><span class="badge badge-pill badge-light-{{ $purchase->state == 'En ruta' ? 'primary' : ($purchase->state == 'En curso' ? 'warning' : 'success')}} mr-1">{{$purchase->state}}</span></td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-primary"
                                                            data-toggle="modal" data-target="#detail-{{$index}}">
                                                            <i data-feather='eye' class="text-lg-center text"></i>
                                                        </button>
                                                        <div class="modal fade text-left" id="detail-{{$index}}" tabindex="-1" role="dialog"
                                                            aria-labelledby="myModalLabel17" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel17">
                                                                            Productos comprados</h4>
                                                                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button> -->
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Número de compra: {{$purchase->id}}</p>
                                                                        <div class="table-responsive">
                                                                            <table class="table table-bordered">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Producto</th>
                                                                                        <th>Precio</th>
                                                                                        <th>Cantidad</th>
                                                                                        <th>Precio total</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @php
                                                                                        $detailSales = Illuminate\Support\Facades\DB::table('detail_sales')->join('products', 'products.id', '=', 'detail_sales.product_id')
                                                                                        ->select('products.name', 'detail_sales.*')
                                                                                        ->where('sale_id', $purchase->id)->get();
                                                                                    @endphp
                                                                                    @foreach ($detailSales as $detailSale)
                                                                                        <tr>
                                                                                            <td><span
                                                                                                    class="font-weight-bold">{{$detailSale->name}}</span>
                                                                                            </td>
                                                                                            <td>{{$detailSale->price}}</td>
                                                                                            <td>{{$detailSale->amount}}</td>
                                                                                            <td>{{$detailSale->totalPrice}}</td>
                                                                                        </tr>
                                                                                    @endforeach
                                                                                </tbody>
                                                                                <tfoot>
                                                                                    <tr>
                                                                                        <th colspan="2">Costo total
                                                                                        </th>
                                                                                        <td colspan="2">{{$purchase->totalPrice}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th colspan="2">Descripción
                                                                                        </th>
                                                                                        <td colspan="2">{{$purchase->description}}</td>
                                                                                    </tr>
                                                                                </tfoot>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <!-- <p>Description:</p> -->
                                                                        <button type="button" class="btn btn-primary"
                                                                            data-dismiss="modal">Cerrar</button>
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
                                <!--/ table -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ right content section -->
        </div>
    </section>
    <!-- / account setting page -->
@endsection
