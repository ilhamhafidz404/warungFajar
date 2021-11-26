<div class="mt-10">
    {{-- <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/> --}}

    <div class="flex">
        <a href="{{ route('export-products') }}" class="bg-indigo-500 px-10 py-3 rounded text-white hover:bg-indigo-400 hover:shadow mr-2">
            <i class="fad fa-file-export text-xl mr"></i>
            Export Excel
        </a>
        <label for="my-modal-2" class="bg-green-500 px-10 py-3 rounded text-white hover:bg-green-400 hover:shadow ">
            <i class="fad fa-file-import text-xl mr"></i>
            Import Excel
        </label> 
        <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
        <div class="modal">
        <div class="modal-box">
            
            <h1 class="text-gray-900 text-center font-bold tracking-wide mb-10">Upload Excel yang akan diimport</h1>

            <form action="{{ route('import-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" class="text-gray-900" name="excel">
                <div class="modal-action mt-10 flex justify-between">
                    <label for="my-modal-2" class="bg-red-500 px-5 py-1 btn-sm rounded text-white hover:bg-red-400 hover:shadow ">Close</label>
                    <div>
                        <a href="{{ route('download-template-excel') }}" class="bg-blue-500 hover:bg-blue-400 rounded btn-sm py-2 px-5 mr-1">
                            Download Template
                        </a>
                        <button type="submit" class="bg-green-500 px-10 py-1 btn-sm rounded text-white hover:bg-green-400 hover:shadow">Import</button>
                    </div>
                </div>
            </form>
            
            
        </div>
        </div>
    </div>

    <div class="card p-3 mt-6" style="overflow: auto; white-space: nowrap">
        <table id="myTable" class="table w-full table-zebra text-gray-900">
            <thead>
                <tr class="border p-5 text-gray-900 text-center">
                    <th class="p-3">No</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
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
                <tr class="hover">
                    <td class="text-center p-5">{{ $index+1 }}</td>
                    <td class="text-center">{{ $product->nama }}</td>
                    <td class="text-center">
                        <span class="px-3 py-1 rounded-lg text-white text-xs" style="background-color: {{ $product->category->color }}">
                            <i class="fas fa-{{ $product->category->icon }}"></i>
                            {{ $product->category->nama }}
                        </span>
                    </td>
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

    {{-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script> --}}
    {{-- <script> 
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>  --}}
</div>
