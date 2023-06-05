<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="{{ URL::asset('brudam_logo.png') }}" type="image/x-icon" />
    <title>DeliverEase</title>
</head>

<body>
    <div class="container">
        <div class="card p-2 mt-3">
            <div class="card-header text-center">DeliverEase - Brudam</div>
            <div class="card-body">
                <!-- Logo Brudam -->
                <div class="d-flex justify-content-center">
                    <img src="{{ URL::asset('brudam_logo.png') }}" alt="Logo Brudam">
                </div>

                <!-- Cadastrar Pedido -->
                <div class="my-3">
                    <form class="form-group" method="POST" action="/api/orders">
                        @csrf
                        <div class="form-group">
                            <label for="customer_id"><strong>Nome do Cliente</strong></label>
                            <select class="custom-select" required>
                                <option>Selecione...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="delivery_date"><strong>Data de Entrega</strong></label>
                            <input type="date" class="form-control" id="delivery_date" name="delivery_date" required>
                        </div>
                        <div class="form-group">
                            <label for="freight_value"><strong>Valor do Frete</strong></label>
                            <input type="number" class="form-control" id="freight_value" name="freight_value" step="0.01" required>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                    </form>
                </div>

                <hr>

                <!-- Tabela de Pedidos -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID do Pedido</th>
                            <th>Nome do Cliente</th>
                            <th>Data de Entrega</th>
                            <th>Valor do Frete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teste</td>
                            <td>Teste</td>
                            <td>Teste</td>
                            <td>Teste</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>