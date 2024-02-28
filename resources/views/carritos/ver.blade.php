<x-app-layout>

    <form method="POST" action="{{route('facturas.store')}}">
        @csrf
<div class="relative overflow-x-auto max-w-xl mx-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Denominacion Zapato
                </th>
                <th scope="col" class="px-6 py-3">
                    Cantidad
                </th>
                <th scope="col" class="px-6 py-3">
                    Precio
                </th>
                <th scope="col" class="px-6 py-3">
                    importe
                </th>
            </tr>
        </thead>
        <tbody>
            @php
                $total = 0;
            @endphp
            @foreach ($carritos as $carrito )
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th name=''scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$carrito->zapato->denominacion}}
                </th>
                <td name='cantidad[]' class="px-6 py-4">
                    @livewire('cantidad',['carrito' => $carrito])
                </td>
                <td name='precio[]' class="px-6 py-4">
                    {{$carrito->zapato->precio}}€
                </td>
                <td  class="px-6 py-4">
                    {{$carrito->zapato->precio * $carrito->cantidad}}€
                </td>
            </tr>
            <input type="hidden" name="zapatos[]" value="{{$carrito->zapato->id}}">
            @php
                $total +=$carrito->zapato->precio * $carrito->cantidad
            @endphp
            @endforeach
            <tr class=" text-gray-900">
                <td></td>
                <td></td>
                <td class="px-6 py-4">
                Total : {{$total}} €
                </td class="px-6 py-4">
                <td><x-primary-button>Comprar</x-primary-button></td>
            </tr>
        </tbody>
    </table>
</div>
</form>

</x-app-layout>
