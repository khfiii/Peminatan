<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Laporan Kelulusan Test Peminatan</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 5px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        p {
            text-align: justify;
            margin-bottom: 10px;
            line-height: 1.5;
        }

        .lulus {
            color: #085A35
        }

        .gagal {
            color: red
        }

        /* Responsive Design for Mobile Devices */
        @media (max-width: 768px) {
            table {
                font-size: 14px;
            }

            p {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center">
        <h3>Laporan Test Peminatan</h3>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nama Peserta</th>
                <th>Nomor Peserta</th>
                <th>Peminatan</th>
                <th>Nilai</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @php
                    $cekLulus = $jawaban->nilai_peserta >= $jawaban->soal->passing_grade ? 'MAMPU' : 'BELUM MAMPU';
                @endphp
                <td>{{ $jawaban->peserta->nama_peserta }}</td>
                <td>{{ $jawaban->id }}</td>
                <td>{{ $jawaban->soal->jurusan->nama_jurusan }}</td>
                <td>{{ $jawaban->nilai_peserta }}</td>
                <td><span
                        class="{{ $jawaban->nilai_peserta >= $jawaban->soal->passing_grade ? 'MAMPU' : 'BELUM MAMPU' }}">{{ $cekLulus }}</span>
                </td>
            </tr>
        </tbody>
    </table>

    <p>Berdasarkan hasil test peminatan, peserta {{ $jawaban->peserta->nama_peserta }} dinyatakan {{ $cekLulus }}
        dengan nilai
        {{ $jawaban->nilai_peserta }} pada
        {{ $jawaban->soal->nama_soal }}.</p>

    <p>Peserta diharapkan untuk mencetak laporan ini dan<b> WAJIB MEMBAWA KETIKA PROSES WAWANCARA DI SEKOLAH </b></p>
    <p>Hormat Kami,</p>

    <p>Panitia Test Peminatan</p>
</body>

</html>