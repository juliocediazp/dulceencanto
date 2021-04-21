@extends('layouts.dashboard')

@section('title')
    <h2 class="content-header-title float-left mb-0">Ventas</h2>
@endsection

@section('content')
    <div class="row p-75">
        <div class="form-group input-group input-group-merge col-6 p-0">
            <div class="input-group-prepend">
                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg></span>
            </div>
            <input type="text" class="form-control" id="icons-search" placeholder="Buscador...">
        </div>
        <div class="col-6 d-flex row justify-content-end">
            <p class="mr-50">Descargar ventas</p>
            <button class="btn-outline-success mr-50">
                <img src="./app-assets/images/icons/excel.png" height="45px" alt="Descargar excel">
            </button>
            <button class="btn-outline-danger mr-50">
                <img src="./app-assets/images/icons/pdfd.png" height="45px" alt="Descargar pdf">
            </button>
        </div>
    </div>
    <br>
    <!-- table -->
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Número de compra</th>
                    <th>Cliente</th>
                    <th>Dirección</th>
                    <th>Fecha</th>
                    <th>Total venta</th>
                    <th>Estado</th>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $index => $sale)
                    <tr>
                        <td>
                            <span class="font-weight-bold">{{ $sale->id }}</span>
                        </td>
                        <td>{{ $sale->fullName }}</td>
                        <td>{{ $sale->direction }}</td>
                        <td>{{ $sale->saleDate }}</td>
                        <td>{{ $sale->totalPrice }}</td>
                        <td><span
                                class="badge badge-pill badge-light-{{ $sale->state == 'En ruta' ? 'primary' : ($sale->state == 'En curso' ? 'warning' : 'success') }} mr-1">{{ $sale->state }}</span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                data-target="#detail-{{ $index }}">
                                <i data-feather='eye' class="text-lg-center text"></i>
                            </button>
                            <div class="modal fade text-left" id="detail-{{ $index }}" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel17" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel17">
                                                Productos comprados</h4>
                                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                        </button> -->
                                        </div>
                                        <div class="modal-body">
                                            <p>Número de compra: {{ $sale->id }}</p>
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
                                                            $detailSales = Illuminate\Support\Facades\DB::table('detail_sales')
                                                                ->join('products', 'products.id', '=', 'detail_sales.product_id')
                                                                ->select('products.name', 'detail_sales.*')
                                                                ->where('sale_id', $sale->id)
                                                                ->get();
                                                        @endphp
                                                        @foreach ($detailSales as $detailSale)
                                                            <tr>
                                                                <td><span
                                                                        class="font-weight-bold">{{ $detailSale->name }}</span>
                                                                </td>
                                                                <td>{{ $detailSale->price }}</td>
                                                                <td>{{ $detailSale->amount }}</td>
                                                                <td>{{ $detailSale->totalPrice }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="2">Costo total
                                                            </th>
                                                            <td colspan="2">{{ $sale->totalPrice }}</td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <!-- <p>Description:</p> -->
                                            <div class="col-md-12 mb-1">
                                                <form action="/ventas/{{ $sale->id }}" method="POST" id="edit-sale-{{$index}}">
                                                    @csrf
                                                    @method('patch')
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlTextarea1">Descripción</label>
                                                                <textarea class="form-control"
                                                                    id="exampleFormControlTextarea1" rows="3"
                                                                    placeholder="Descripción"
                                                                    name="description">{{ $sale->description }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-1" data-select2-id="s{{ $index }}">
                                                            <label>Estado</label>
                                                            <div class="position-relative" data-select2-id="248">
                                                                <select
                                                                    class="select2 form-control select2-hidden-accessible"
                                                                    data-select2-id="s1{{ $index }}" tabindex="-1"
                                                                    aria-hidden="true" name="state">
                                                                    @foreach ($stateSales as $stateSale)
                                                                        <option
                                                                            {{ $sale->stateSale_id == $stateSale->id ? 'selected' : '' }}
                                                                            value="{{ $stateSale->id }}"
                                                                            data-select2-id="s2{{ $index }}-{{ $stateSale->id }}">
                                                                            {{ $stateSale->state }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-12  row justify-content-end">
                                                <button type="button" class="btn btn-danger mr-25"
                                                    data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-success mr-25"
                                                    form="edit-sale-{{$index}}">Guardar</button>
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
    <!--/ table -->
@endsection
