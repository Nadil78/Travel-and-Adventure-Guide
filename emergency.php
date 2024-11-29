<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Report</title>
    <link rel="stylesheet" href="styles.css"> 
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-image: url('emergency.jpg'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #ff5722; 
            text-align: center;
            margin-bottom: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9); /* Add slight transparency for better visibility */
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .guide-card {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            transition: box-shadow 0.3s;
            cursor: pointer;
            display: flex; 
        }

        .guide-card:hover {
            box-shadow: 0 0 20px rgba(255, 87, 34, 0.5);
        }

        .guide-card img {
            width: 100px; 
            height: 100px; 
            border-radius: 50%; 
            margin-right: 15px; 
        }

        .guide-card h3 {
            color: #333;
            margin: 0;
        }

        .guide-card p {
            margin: 5px 0;
            color: #666;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }

        select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #ff5722; 
            color: white; 
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        button:hover {
            background-color: #e64a19; 
        }

        .error {
            color: red;
            font-size: 0.9em;
            margin-top: -10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Emergency Report</h2>

    <div id="guideSelection">
        <h3>Select a Guide</h3>
        <!-- Guide cards -->
        <div class="guide-card" onclick="selectGuide('John Doe')">
            <img src="john.jpg" alt="John Doe">
            <div>
                <h3>John Doe</h3>
                <p>Address: Colombo, Sri Lanka</p>
                <p>Email: john.doe@example.com</p>
            </div>
        </div>
        <div class="guide-card" onclick="selectGuide('Jane Smith')">
            <img src="jane.jpg" alt="Jane Smith">
            <div>
                <h3>Jane Smith</h3>
                <p>Address: Kandy, Sri Lanka</p>
                <p>Email: jane.smith@example.com</p>
            </div>
        </div>
       
        <div class="guide-card" onclick="selectGuide('Amara Perera')">
            <img src="amara.jpg" alt="Amara Perera">
            <div>
                <h3>Amara Perera</h3>
                <p>Address: Galle, Sri Lanka</p>
                <p>Email: amara.perera@example.com</p>
            </div>
        </div>
        <div class="guide-card" onclick="selectGuide('Dinesh Kumar')">
            <img src="dinesh.jpg" alt="Dinesh Kumar">
            <div>
                <h3>Dinesh Kumar</h3>
                <p>Address: Negombo, Sri Lanka</p>
                <p>Email: dinesh.kumar@example.com</p>
            </div>
        </div>
        <div class="guide-card" onclick="selectGuide('Kavitha Fernando')">
            <img src="kavitha.jpg" alt="Kavitha Fernando">
            <div>
                <h3>Kavitha Fernando</h3>
                <p>Address: Jaffna, Sri Lanka</p>
                <p>Email: kavitha.fernando@example.com</p>
            </div>
        </div>
        <div class="guide-card" onclick="selectGuide('Rohan Wijesekara')">
            <img src="rohan.jpg" alt="Rohan Wijesekara">
            <div>
                <h3>Rohan Wijesekara</h3>
                <p>Address: Nuwara Eliya, Sri Lanka</p>
                <p>Email: rohan.wijesekara@example.com</p>
            </div>
        </div>
        <div class="guide-card" onclick="selectGuide('Nadia Ali')">
            <img src="nadia.jpg" alt="Nadia Ali">
            <div>
                <h3>Nadia Ali</h3>
                <p>Address: Colombo, Sri Lanka</p>
                <p>Email: nadia.ali@example.com</p>
            </div>
        </div>
        <div class="guide-card" onclick="selectGuide('Saman Wijeratne')">
            <img src="saman.jpg" alt="Saman Wijeratne">
            <div>
                <h3>Saman Wijeratne</h3>
                <p>Address: Anuradhapura, Sri Lanka</p>
                <p>Email: saman.wijeratne@example.com</p>
            </div>
        </div>
        <div class="guide-card" onclick="selectGuide('Tharindu Jayasuriya')">
            <img src="tharindu.jpg" alt="Tharindu Jayasuriya">
            <div>
                <h3>Tharindu Jayasuriya</h3>
                <p>Address: Hikkaduwa, Sri Lanka</p>
                <p>Email: tharindu.jayasuriya@example.com</p>
            </div>
        </div>
        <div class="guide-card" onclick="selectGuide('Lakshmi Bandara')">
            <img src="lakshmi.jpg" alt="Lakshmi Bandara">
            <div>
                <h3>Lakshmi Bandara</h3>
                <p>Address: Matara, Sri Lanka</p>
                <p>Email: lakshmi.bandara@example.com</p>
            </div>
        </div>
    </div>
    <div class="guide-card" onclick="selectGuide('Chathura Kumara')">
        <img src="chathura.jpg" alt="Chathura Kumara">
        <div>
            <h3>Chathura Kumara</h3>
            <p>Address: Batticaloa, Sri Lanka</p>
            <p>Email: chathura.kumara@example.com</p>
        </div>
    </div>
    <div class="guide-card" onclick="selectGuide('Chamara Jayawardena')">
        <img src="chamara.jpg" alt="Chamara Jayawardena">
        <div>
            <h3>Chamara Jayawardena</h3>
            <p>Address: Trincomalee, Sri Lanka</p>
            <p>Email: chamara.jayawardena@example.com</p>
        </div>
    </div>

    <label for="complaint">Describe the Incident:</label>
    <textarea id="complaint" rows="4" placeholder="Please provide details of the incident..."></textarea>

    <button onclick="submitComplaint()">Submit Complaint</button>
</div>

<script>
    let selectedGuide = '';

    function selectGuide(guideName) {
        selectedGuide = guideName;
        alert(`You selected ${guideName}.`);
    }

    function submitComplaint() {
        const complaintText = document.getElementById('complaint').value;
        if (selectedGuide === '' || complaintText === '') {
            alert('Please select a guide and provide a description of the incident.');
            return;
        }
        alert(`Complaint submitted for ${selectedGuide}: ${complaintText}`);
    }
</script>

</body>
</html>
