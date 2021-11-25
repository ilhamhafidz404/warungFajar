<div>
    {{-- <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>

    <div class="card p-3 mt-10">
        <table id="myTable" class="display w-full">
            <thead>
                <tr class="border p-5 bg-gray-900 text-white">
                    <th class="p-3">No</th>
                    <th>Nama Barang</th>
                    <th>Modal</th>
                    <th>Modal</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $productModal = 0;
                    $productJumlah = 0;
                    $productTotal = 0;
                @endphp
                @foreach ($products as $index=> $product)
                <tr class="@if($index%2==1) bg-gray-100 @endif">
                    <td class="text-center p-5">{{ $index+1 }}</td>
                    <td class="text-center">{{ $product->nama }}</td>
                    <td class="text-center">Rp. {{ number_format($product->modal) }}</td>
                    <td class="text-center">Rp. {{ number_format($product->modal) }}</td>
                    <td class="text-center">Rp. {{ number_format($product->jumlah) }}</td>
                    <td class="text-center">Rp. {{ number_format($product->total) }}</td>
                    @php
                        $productModal += $product->modal;
                        $productJumlah += $product->jumlah;
                        $productTotal += $product->total;
                    @endphp
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <x-report-card :products='$products'  :productModal='$productModal' :productJumlah='$productJumlah' :productTotal="$productTotal"></x-report-card>

    {{-- <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
    <script> 
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script> 
</div>
