@extends('dashboard.app')

@section('title', 'Messages')

@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Messages</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Messages</h6>
                        <!-- Search Form -->
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No Telpon</th>
                                        <th>Alamat</th>
                                        <th>Pesan</th>
                                        <th>Tanggal Pembuatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messages as $index => $message)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $message->nama }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->no_telp }}</td>
                                            <td>{{ $message->alamat }}</td>
                                            <td>{{ Str::limit($message->pesan, 50) }}..</td>
                                            <td>{{ $message->created_at }}</td>
                                            <td>
                                                <button class="btn btn-info btn-detail" data-nama="{{ $message->nama }}"
                                                    data-no_telp="{{ $message->no_telp }}"
                                                    data-alamat="{{ $message->alamat }}"
                                                    data-email="{{ $message->email }}" data-pesan="{{ $message->pesan }}"
                                                    data-date="{{ $message->created_at }}">Detail</button>
                                                <form action="{{ route('kontak.destroy', $message->kontak_id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center mt-4">
                                {{ $messages->links('vendor.pagination.bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Message Detail Modal -->
        <div id="messageDetailModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Message Detail</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body custom-modal-body">
                        <p><strong>From:</strong> <span id="fromName"></span></p>
                        <p><strong>Email:</strong> <span id="fromEmail"></span></p>
                        <p><strong>No Telpon:</strong> <span id="fromTelp"></span></p>
                        <p><strong>Alamat:</strong> <span id="fromAddress"></span></p>
                        <p><strong>Message:</strong></p>
                        <p id="detailMessage"></p>
                        <p>Terima kasih.</p>
                        <p>Salam hangat, <span id="warmRegards"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fungsi untuk menampilkan detail pesan pada modal
            $('.btn-detail').on('click', function() {
                var nama = $(this).data('nama');
                var noTelp = $(this).data('no_telp');
                var alamat = $(this).data('alamat');
                var email = $(this).data('email');
                var message = $(this).data('pesan');
                var createdAt = $(this).data('date'); // Tanggal pesan

                // Menampilkan data pada modal
                $('#fromName').text(nama);
                $('#fromEmail').text(email);
                $('#fromTelp').text(noTelp);
                $('#fromAddress').text(alamat);
                $('#detailMessage').text(message);
                $('#warmRegards').text(nama);

                // Menampilkan modal
                $('#messageDetailModal').modal('show');
            });

            // Menutup modal ketika klik pada close atau area modal
            $('.close, .modal').on('click', function() {
                $('#messageDetailModal').modal('hide');
            });
        });
    </script>
@endpush
