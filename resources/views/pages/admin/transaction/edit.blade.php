@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title  }}</h1>
    </div>

    {{--  JIKA ADA EROR MEMUNCUL KAN ALERT  --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="card shadow">
            <div class="card body">
                <form action="{{ route('transaction.update', $item->id ) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="transactional_status">Status</label>
                        <select name="transactional_status" required class="form-control">
                            <option value="{{ $item->transactional_status }}">
                                Jangan Ubah ({{ $item->transactional_status }})
                            </option>
                            <option value="IN_CART">In Cart</option>
                            <option value="PENDING">Pending</option>
                            <option value="SUCCESS">Success</option>
                            <option value="CANCEL">Cancel</option>
                            <option value="FAILED">Failed</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Edit
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection
