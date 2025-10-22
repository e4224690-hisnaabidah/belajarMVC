<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Edit Data Skincare Herbal</title>
 <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
        overflow: hidden;
    }

    .bubble {
        position: absolute;
        width: 180px;
        height: 180px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.25);
        filter: blur(50px);
        animation: float 8s infinite ease-in-out;
    }

    .bubble:nth-child(1) {
        top: 10%;
        left: 20%;
        animation-delay: 0s;
    }

    .bubble:nth-child(2) {
        bottom: 15%;
        right: 15%;
        animation-delay: 3s;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-25px); }
    }

    form {
        position: relative;
        background: rgba(255, 255, 255, 0.25);
        backdrop-filter: blur(15px);
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        padding: 40px 50px;
        width: 100%;
        max-width: 420px;
        color: #2f4f4f;
        z-index: 2;
        transition: 0.3s ease;
        animation: fadeIn 1s ease;
    }

    form:hover {
        transform: scale(1.02);
        box-shadow: 0 12px 35px rgba(0,0,0,0.15);
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    h2 {
        text-align: center;
        color: #00695c;
        margin-bottom: 25px;
        font-size: 1.8rem;
        letter-spacing: 0.5px;
    }

    label {
        display: block;
        font-weight: 600;
        margin-bottom: 8px;
        color: #004d40;
    }

    input[type="text"],
    input[type="number"],
    select {
        width: 100%;
        padding: 12px 15px;
        margin-bottom: 18px;
        border: none;
        border-radius: 10px;
        background: rgba(255,255,255,0.7);
        color: #333;
        font-size: 15px;
        box-shadow: inset 2px 2px 6px rgba(0,0,0,0.1),
                    inset -2px -2px 6px rgba(255,255,255,0.3);
        transition: 0.3s;
    }

    input:focus, select:focus {
        outline: none;
        background: rgba(255,255,255,0.9);
        box-shadow: 0 0 6px rgba(0,200,180,0.6);
    }

    button {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 12px;
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: #004d40;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s ease;
        box-shadow: 4px 4px 10px rgba(0,0,0,0.2);
    }

    button:hover {
        transform: translateY(-3px);
        background: linear-gradient(135deg, #38f9d7 0%, #43e97b 100%);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }

    .footer {
        margin-top: 25px;
        text-align: center;
        color: #004d40;
        font-size: 14px;
        font-weight: 500;
        opacity: 0.9;
        background: rgba(255, 255, 255, 0.3);
        padding: 8px 18px;
        border-radius: 20px;
        backdrop-filter: blur(10px);
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        transition: 0.3s ease;
    }

    .footer:hover {
        transform: scale(1.05);
        background: rgba(255, 255, 255, 0.5);
    }

    @media (max-width: 480px) {
        form {
            padding: 30px;
        }
        .footer {
            font-size: 13px;
        }
    }
 </style>
</head>
<body>
    <div class="bubble"></div>
    <div class="bubble"></div>

    <form action="/produk/update" method="POST">
        @csrf
        @method('PUT')

        <h2>Form Edit Skincare Herbal</h2>

        <label>Nama Produk:</label>
        <input type="text" name="nama" value="Herbal Glow Serum" required>

        <label>Harga Produk:</label>
        <input type="number" name="harga" value="120000" required>

        <label>Kategori:</label>
        <select name="kategori">
            <option value="Serum" selected>Serum</option>
            <option value="Pelembab">Pelembab</option>
            <option value="Toner">Toner</option>
            <option value="Masker">Masker</option>
            <option value="Sabun Wajah">Sabun Wajah</option>
        </select>

        <button type="submit">Perbarui Data</button>
    </form>

    <div class="footer">
        Project by <strong>Hisna Abidah</strong>
    </div>
</body>
</html>
