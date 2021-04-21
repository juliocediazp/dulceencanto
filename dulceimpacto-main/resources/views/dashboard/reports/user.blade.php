<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            /* display: flex; */
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .table{
            width: 100%;
        }

        .table tbody tr{
            border-width: 3px;
            border-color: red;
            height: 40px;
            background-color: #F3F2F7;
        }

        .table thead tr{
            
            background-color: #FFECD9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="">{{$title}}</h1>
        <span>{{$date}}</span>
<br>
        <h2 class="">{{'Empleados:'}}</h2>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Contacto</th>
                <th>Email</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $index => $employee)
                <tr>
                    <td align="center">
                        <span class="font-weight-bold">{{ $index + 1 }}</span>
                    </td>
                    <td>{{ $employee->fullName }}</td>
                    <td align="center">{{ $employee->cellPhone }}</td>
                    <td>{{ $employee->email }}</td>
                    <td align="center">
                        <span
                            class="badge badge-pill {{ $employee->state == 'active' ? 'badge-light-success' : 'badge-light-danger' }} mr-1">{{ $employee->state == 'active' ? 'Activo' : 'Desabilitado' }}</span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <h2 class="">{{'Clientes:'}}</h2>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Contacto</th>
                <th>Email</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $index => $client)
                <tr>
                    <td align="center">
                        <span class="font-weight-bold">{{ $index + 1 }}</span>
                    </td>
                    <td>{{ $client->fullName }}</td>
                    <td align="center">{{ $client->cellPhone }}</td>
                    <td>{{ $client->email }}</td>
                    <td align="center"><span
                            class="badge badge-pill {{ $client->state == 'active' ? 'badge-light-success' : 'badge-light-danger' }} mr-1">{{ $client->state == 'active' ? 'Activo' : 'Desabilitado' }}</span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>