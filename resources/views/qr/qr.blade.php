{{--

  ____          _____               _ _           _
 |  _ \        |  __ \             (_) |         | |
 | |_) |_   _  | |__) |_ _ _ __ _____| |__  _   _| |_ ___
 |  _ <| | | | |  ___/ _` | '__|_  / | '_ \| | | | __/ _ \
 | |_) | |_| | | |  | (_| | |   / /| | |_) | |_| | ||  __/
 |____/ \__, | |_|   \__,_|_|  /___|_|_.__/ \__, |\__\___|
         __/ |                               __/ |
        |___/                               |___/

    Blog:       https://parzibyte.me/blog
    Ayuda:      https://parzibyte.me/blog/contrataciones-ayuda/
    Contacto:   https://parzibyte.me/blog/contacto/

    Copyright (c) 2020 Luis Cabrera Benito
    Licenciado bajo la licencia MIT

    El texto de arriba debe ser incluido en cualquier redistribucion
--}}
@extends("maestra")
@section("titulo", "Generar QR")
@section("contenido")

{{$producto->codigo_barras.",".$producto->descripcion.",".$producto->precio_compra }}

    <div class="row">
        <div class="col-12">
            <h1>Codigo QR <i class="fa fa-cart-plus"></i></h1>
            @include("notificacion")

             <?php 
             $qr=$producto->codigo_barras.",".$producto->descripcion.",".$producto->precio_compra

             ?>
             {{    
                QrCode::
                size(250) 
                ->backgroundColor(250,240,215)
                ->color(255,0,0)
                ->margin(1)
                ->generate($qr)
            }}
    </div>
</div>
    @endsection
