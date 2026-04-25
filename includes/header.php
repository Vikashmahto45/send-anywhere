<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Send Anywhere - Easy & Secure File Transfer'; ?></title>
    <meta name="description" content="<?php echo isset($pageDesc) ? $pageDesc : 'Send whatever you want, wherever you want. Secure and fast file transfer without any limits.'; ?>">
    <meta name="keywords" content="<?php echo isset($pageKeywords) ? $pageKeywords : 'send anywhere, file transfer, share files online, free file sharing'; ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        :root {
            --primary-bg: #fff;
            --secondary-bg: #f5f6f8;
            --brand-color: #ef4444;
            --brand-hover: #dc2626;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --border-color: #e5e7eb;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--secondary-bg);
            color: var(--text-dark);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        /* Navbar */
        nav {
            background-color: var(--primary-bg);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--text-dark);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo i {
            color: var(--brand-color);
            font-size: 1.8rem;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-light);
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--brand-color);
        }

        .btn-sign-in {
            color: var(--text-dark);
            font-weight: 600;
            text-decoration: none;
            padding: 0.5rem 1.5rem;
            border-radius: 6px;
            transition: background 0.3s;
        }

        .btn-sign-in:hover {
            background-color: var(--secondary-bg);
        }

        /* Page content wrapper */
        .page-body {
            margin-top: 80px;
            flex: 1;
            padding: 3rem 1.5rem;
            max-width: 860px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 100px;
        }

        /* Inner page typography */
        .page-body h1 {
            font-size: 2.4rem;
            font-weight: 800;
            color: #111827;
            margin-bottom: 1rem;
            line-height: 1.3;
        }

        .page-body h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #111827;
            margin: 2rem 0 0.8rem;
        }

        .page-body h3 {
            font-size: 1.15rem;
            font-weight: 600;
            color: #374151;
            margin: 1.5rem 0 0.5rem;
        }

        .page-body p {
            margin-bottom: 1.2rem;
            font-size: 1.05rem;
            color: #374151;
            line-height: 1.8;
        }

        .page-body ul {
            margin: 0.5rem 0 1.2rem 1.5rem;
        }

        .page-body ul li {
            margin-bottom: 0.5rem;
            font-size: 1.05rem;
            color: #374151;
            line-height: 1.8;
        }

        .badge {
            display: inline-block;
            background: #fef2f2;
            color: #ef4444;
            padding: 0.3rem 0.8rem;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .cta-box {
            background: #ef4444;
            color: #fff;
            padding: 2rem;
            border-radius: 12px;
            text-align: center;
            margin: 2.5rem 0;
        }

        .cta-box h2 {
            color: #fff;
            margin: 0 0 0.5rem;
            font-size: 1.6rem;
        }

        .cta-box p {
            color: #fecaca;
            margin: 0 0 1.2rem;
        }

        .cta-box a {
            background: #fff;
            color: #ef4444;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            font-size: 1rem;
        }

        /* Footer */
        footer {
            background-color: var(--primary-bg);
            padding: 2rem;
            text-align: center;
            color: var(--text-light);
            font-size: 0.9rem;
            border-top: 1px solid var(--border-color);
        }

        @media (max-width: 900px) {
            .nav-links { display: none; }
            .page-body h1 { font-size: 1.8rem; }
        }
    </style>
</head>
<body>

<nav>
    <a href="/" class="logo">
        <i class='bx bx-paper-plane'></i>
        Send Anywhere
    </a>
    <div class="nav-links">
        <a href="#">Transfer</a>
        <a href="#">Plus</a>
        <a href="#">Business</a>
        <a href="#">API</a>
        <a href="#" class="btn-sign-in">Sign In</a>
    </div>
</nav>
