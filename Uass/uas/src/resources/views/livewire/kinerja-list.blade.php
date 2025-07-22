<div>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Tahun</th>
                <th>Nilai Kinerja</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kinerja as $riwayat)
                <tr>
                    <td>{{ $riwayat['tahun'] }}</td>
                    <td>{{ $riwayat['nilai'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
