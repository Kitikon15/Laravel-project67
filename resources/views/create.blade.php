<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts - Kanit -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Laravel Project67</a>
            <div class="navbar-nav ml-auto">
                @auth
                    <span class="navbar-text mr-3">ยินดีต้อนรับ, {{ Auth::user()->name }}!</span>
                    <a class="nav-link" href="/message">รายการโพสต์</a>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-light btn-sm ml-2">ออกจากระบบ</button>
                    </form>
                @else
                    <a class="nav-link" href="{{ route('login') }}">เข้าสู่ระบบ</a>
                @endauth
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fas fa-plus-circle"></i> สร้างโพสต์ใหม่</h3>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <form action="{{ route('store') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="title"><i class="fas fa-heading"></i> หัวข้อ:</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="content"><i class="fas fa-align-left"></i> เนื้อหา:</label>
                                <textarea name="content" id="content" class="form-control" rows="6" required>{{ old('content') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="posted_by"><i class="fas fa-user"></i> ผู้โพสต์:</label>
                                <input type="text" name="posted_by" id="posted_by" class="form-control" 
                                       value="@auth{{ Auth::user()->name }}@else{{ old('posted_by') }}@endauth" 
                                       @auth readonly @endauth required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-paper-plane"></i> บันทึกโพสต์
                                </button>
                                <a href="/message" class="btn btn-secondary ml-2">
                                    <i class="fas fa-arrow-left"></i> กลับ
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>