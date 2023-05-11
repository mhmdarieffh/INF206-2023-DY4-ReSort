<!-- Isi halaman dashboard petugas -->
<div>
    <!-- Menampilkan notifikasi -->
    @foreach (Auth::user()->unreadNotifications as $notification)
        <div>{{ $notification->data['message'] }}</div>
    @endforeach
</div>
