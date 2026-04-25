<?php
$pageTitle = "Send Anywhere - Easy & Secure File Transfer";
$pageDesc  = "Send whatever you want, wherever you want. Secure and fast file transfer without any limits.";
require_once 'includes/header.php';
?>

<style>
    .hero {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 3rem 1rem;
        background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
    }

    .hero-container {
        max-width: 1200px;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
    }

    .hero-text h1 {
        font-size: 3.5rem;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 1.5rem;
        color: #111827;
    }

    .hero-text p {
        font-size: 1.25rem;
        color: var(--text-light);
        margin-bottom: 2rem;
        line-height: 1.6;
    }

    .widget-wrapper {
        position: relative;
    }

    .widget-wrapper::before {
        content: '';
        position: absolute;
        top: -10%;
        left: -10%;
        width: 120%;
        height: 120%;
        background: radial-gradient(circle, rgba(239,68,68,0.15) 0%, rgba(255,255,255,0) 70%);
        z-index: 0;
    }

    .transfer-widget {
        background-color: var(--primary-bg);
        border-radius: 16px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        width: 100%;
        max-width: 450px;
        min-height: 500px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        border: 1px solid var(--border-color);
    }

    .widget-tabs {
        display: flex;
        border-bottom: 1px solid var(--border-color);
    }

    .tab {
        flex: 1;
        padding: 1.25rem;
        text-align: center;
        font-weight: 600;
        font-size: 1.1rem;
        cursor: pointer;
        color: var(--text-light);
        background-color: #f9fafb;
        transition: all 0.3s;
    }

    .tab.active {
        background-color: var(--primary-bg);
        color: var(--brand-color);
        border-bottom: 2px solid var(--brand-color);
    }

    .widget-content {
        flex: 1;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .upload-icon {
        font-size: 4rem;
        color: #d1d5db;
        margin-bottom: 1rem;
        transition: transform 0.3s, color 0.3s;
    }

    .widget-content:hover .upload-icon {
        transform: translateY(-5px);
        color: var(--brand-color);
    }

    .widget-content h3 {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
        color: var(--text-dark);
    }

    .widget-content p {
        color: var(--text-light);
        font-size: 0.95rem;
        margin-bottom: 2rem;
    }

    .btn-action {
        background-color: var(--brand-color);
        color: white;
        border: none;
        padding: 0.8rem 2rem;
        font-size: 1.1rem;
        font-weight: 600;
        border-radius: 50px;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s;
        box-shadow: 0 4px 14px rgba(239, 68, 68, 0.4);
    }

    .btn-action:hover {
        background-color: var(--brand-hover);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(239, 68, 68, 0.6);
    }

    @media (max-width: 900px) {
        .hero-container {
            grid-template-columns: 1fr;
            text-align: center;
        }
        .hero-text h1 {
            font-size: 2.5rem;
        }
    }
</style>

<main class="hero">
    <div class="hero-container">

        <div class="hero-text">
            <h1>Send whatever you want, wherever you want</h1>
            <p>Transfer files of any size quickly and securely across all your devices without the hassle of registration.</p>
        </div>

        <div class="widget-wrapper">
            <div class="transfer-widget">
                <div class="widget-tabs">
                    <div class="tab active">Send</div>
                    <div class="tab">Receive</div>
                </div>

                <div class="widget-content">
                    <i class='bx bx-plus-circle upload-icon'></i>
                    <h3>Add files</h3>
                    <p>Drag and drop files or folders here</p>
                    <button class="btn-action">Select Files</button>
                </div>
            </div>
        </div>

    </div>
</main>

<?php require_once 'includes/footer.php'; ?>
