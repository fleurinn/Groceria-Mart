<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulir Layanan</title>
</head>
<body>
    @if ($replyMessage)
        <p>Halo {{ $service->fullname }},</p>
        <p>Terima kasih atas pesan Anda sebelumnya. Berikut balasan dari kami:</p>
        <blockquote>{{ $replyMessage }}</blockquote>
        <p>Salam,<br>Tim Kami</p>
    @else
        <p>Formulir layanan baru telah dikirimkan dengan detail berikut:</p>
        <ul>
            <li><strong>Nama:</strong> {{ $service->fullname }}</li>
            <li><strong>Email:</strong> {{ $service->email }}</li>
            <li><strong>No HP:</strong> {{ $service->phone }}</li>
            <li><strong>Pesan:</strong> {{ $service->message }}</li>
        </ul>
        <p>Silakan tindak lanjuti sesuai kebutuhan.</p>
    @endif
</body>
</html>
