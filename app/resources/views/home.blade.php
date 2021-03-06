@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    El animal creado es: id = {{ $animal->id }}, Nombre =  {{ $animal->nombre }}
                    <p>Para ver si agarra los cambios</p>

                    <script src="axios.min.js"></script>
                    <script>
                    axios.get('oauth/clients')
                        .then(response => {
                            console.log(response.data);
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
