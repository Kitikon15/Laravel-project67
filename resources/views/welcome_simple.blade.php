<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project67 - หน้าแรก</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts - Kanit -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .hero-section {
            padding: 100px 0;
            color: white;
            text-align: center;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .btn-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 25px;
            padding: 12px 30px;
            color: white;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        .feature-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-code"></i> Laravel Project67
            </a>
            <div class="navbar-nav ml-auto">
                @auth
                    <span class="navbar-text mr-3">ยินดีต้อนรับ, {{ Auth::user()->name }}!</span>
                    <a class="nav-link" href="/message">รายการโพสต์</a>
                    <a class="nav-link" href="/create">สร้างโพสต์</a>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-light btn-sm ml-2">
                            <i class="fas fa-sign-out-alt"></i> ออกจากระบบ
                        </button>
                    </form>
                @else
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <h1 class="display-4 mb-4">
                <i class="fab fa-laravel"></i> Laravel Project67
            </h1>
            <p class="lead mb-5">ระบบจัดการโพสต์และบทความ พัฒนาด้วย Laravel Framework</p>
            
            @auth
                <a href="/message" class="btn-custom mr-3">
                    <i class="fas fa-list"></i> ดูรายการโพสต์
                </a>
                <a href="/create" class="btn-custom">
                    <i class="fas fa-plus"></i> สร้างโพสต์ใหม่
                </a>
            @else
                <a href="{{ route('login') }}" class="btn-custom mr-3">
                    <i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ
                </a>
                <a href="/message" class="btn-custom">
                    <i class="fas fa-eye"></i> ดูโพสต์
                </a>
            @endauth
        </div>
    </div>

    <!-- Features Section -->
    <div class="container mt-5 pb-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center p-4">
                    <div class="card-body">
                        <i class="fas fa-plus-circle feature-icon"></i>
                        <h5 class="card-title">สร้างโพสต์</h5>
                        <p class="card-text">เขียนและแชร์เนื้อหาของคุณได้อย่างง่าายดาย พร้อมระบบการจัดการที่สมบูรณ์</p>
                        @auth
                            <a href="/create" class="btn-custom">
                                <i class="fas fa-edit"></i> เริ่มเขียน
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn-custom">
                                <i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center p-4">
                    <div class="card-body">
                        <i class="fas fa-list feature-icon"></i>
                        <h5 class="card-title">จัดการโพสต์</h5>
                        <p class="card-text">ดูรายการโพสต์ทั้งหมด พร้อมระบบแบ่งหน้าและการค้นหาที่ใช้งานง่าย</p>
                        <a href="/message" class="btn-custom">
                            <i class="fas fa-eye"></i> ดูรายการ
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center p-4">
                    <div class="card-body">
                        <i class="fas fa-shield-alt feature-icon"></i>
                        <h5 class="card-title">ความปลอดภัย</h5>
                        <p class="card-text">ระบบรักษาความปลอดภัยด้วยการเข้าสู่ระบบและการจัดการสิทธิ์ผู้ใช้</p>
                        @guest
                            <a href="{{ route('login') }}" class="btn-custom">
                                <i class="fas fa-lock"></i> เข้าสู่ระบบ
                            </a>
                        @else
                            <span class="text-success">
                                <i class="fas fa-check-circle"></i> เข้าสู่ระบบแล้ว
                            </span>
                        @endguest
                    </div>
                </div>
            </div>
        </div>

        <!-- Test Users Info -->
        @guest
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0"><i class="fas fa-info-circle"></i> ข้อมูลสำหรับทดสอบ</h5>
                    </div>
                    <div class="card-body">
                        <p>คุณสามารถทดสอบระบบได้ด้วยบัญชีผู้ใช้ตัวอย่างเหล่านี้:</p>
                        <div class="row">
                            <div class="col-md-4">
                                <strong>บัญชีทดสอบ 1:</strong><br>
                                อีเมล: <code>test@example.com</code><br>
                                รหัสผ่าน: <code>password123</code>
                            </div>
                            <div class="col-md-4">
                                <strong>บัญชี Admin:</strong><br>
                                อีเมล: <code>admin@example.com</code><br>
                                รหัสผ่าน: <code>admin123</code>
                            </div>
                            <div class="col-md-4">
                                <strong>บัญชี Demo:</strong><br>
                                อีเมล: <code>demo@example.com</code><br>
                                รหัสผ่าน: <code>demo123</code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endguest
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>