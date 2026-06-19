<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Our Site</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #f5f7fa, #c3cfe2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        h1 {
            margin-bottom: 40px;
            color: #333;
        }

        .flags-container {
            display: flex;
            gap: 50px;
        }

        .flag {
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none; /* No underline */
            color: inherit; /* Inherit text color */
        }

        .flag:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }

        .flag img {
            width: 200px;
            height: auto;
            border-radius: 8px;
        }

        .label {
            text-align: center;
            margin-top: 10px;
            font-size: 1.2em;
            color: #444;
        }
    </style>
</head>
<body>

    <h1>Select Your Country</h1>
    <div class="flags-container">
        <a href="https://rhinofloor.ae" target="_blank" class="flag">
            <img src="https://flagcdn.com/ae.svg" alt="UAE Flag" style="width: 250px;">
            <div class="label">United Arab Emirates</div>
        </a>

        <a href="{{ url('/sa') }}" target="_blank" class="flag">
            <img src="https://flagcdn.com/sa.svg" alt="Saudi Arabia Flag" style="width: 210px;">
            <div class="label">Saudi Arabia</div>
        </a>
    </div>

</body>
</html>