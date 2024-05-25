<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cetak KEUANGAN</title>
  <style>
    .table-data {
      border-collapse: collapse;
      width: 100%;
    }

    .table-data tr th,
    .table-data tr td {
      border: 1px solid black;
      font-size: 11pt;
      padding: 10px 20px;
      text-align: center;
    }

    .table-data tr th {
      background-color: #2c3e50;
      color: white;
    }

    .table-data tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .table-data tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>

<body>
  <div style="text-align: center;">
    <h3>Data Keuangan</h3>
  </div>
  <table class="table-data">
    <thead>
      <tr>
        <th>ID KEUANGAN</th>
        <th>ID_PENJUALAN</th>
        <th>ID PEMBELIAN</th>
        <th>UANG MASUK</th>
        <th>UANG KELUAR</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($keuangan as $data)
    <tr>
      <td>{{ $data->id_keuangan }}</td>
      <td>{{ $data->id_penjualan }}</td>
      <td>{{ $data->id_pembelian }}</td>
      <td>Rp. {{ number_format($data->uang_masuk) }}</td>
      <td>Rp. {{ number_format($data->uang_keluar) }}</td>
    </tr>
  @empty
  <tr>
    <td colspan="4" align="center">Tidak ada data</td>
  </tr>
@endforelse
    </tbody>
</body>

</html>