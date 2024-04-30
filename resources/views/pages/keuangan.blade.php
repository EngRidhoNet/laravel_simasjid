@extends('templete.app')

@section('content')
    <div class="container">
        <h2>Laporan Keuangan Masjid</h2>
        <canvas id="grafikKeuangan"></canvas>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tanggal</th>
                    <th>Jenis Transaksi</th>
                    <th>Keterangan</th>
                    <th>Jumlah</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($keuangan as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->tanggal }}</td>
                    <td>{{ $data->jenis_transaksi }}</td>
                    <td>{{ $data->keterangan }}</td>
                    <td>{{ $data->jumlah }}</td>
                    <td>{{ $data->saldo }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<script>
    var ctx = document.getElementById('grafikKeuangan').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                @foreach($keuangan as $data)
                    "{{ $data->tanggal }}",
                @endforeach
            ],
            datasets: [{
                label: 'Jumlah Transaksi',
                data: [
                    @foreach($keuangan as $data)
                        {{ $data->jumlah }},
                    @endforeach
                ],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endpush
