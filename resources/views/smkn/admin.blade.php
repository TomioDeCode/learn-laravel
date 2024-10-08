<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Halaman Admin</h1>
        <div class="row">
            <div class="col-12">
                @component('layouts.alert', ['class' => 'warning', 'judul' => 'Peringatan!'])
                    100 data siswa perlu diperbaiki!
                @endcomponent

                @component('layouts.alert', ['class' => 'danger', 'judul' => 'Awas!'])
                    Hari ini deadline laporan perjalanan disnas!
                @endcomponent

                @component('layouts.alert', ['class' => 'success', 'judul' => 'Kabar Baik!'])
                    Bulan depan cuti panjang!
                @endcomponent
            </div>
        </div>
    </div>
    {{-- Script --}}
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>
