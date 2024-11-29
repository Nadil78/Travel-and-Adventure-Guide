<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guide Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .guide-panel {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .guide-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 15px;
            width: 250px;
            text-align: center;
            border: 2px solid orange; /* Orange border */
        }

        .guide-card img {
            width: 100%;
            border-radius: 50%;
        }

        .availability {
            margin-top: 10px;
        }

        .available {
            color: green;
        }

        .not-available {
            color: red;
        }

        .calendar {
            margin: 10px 0;
        }

        h2 {
            color: orange; /* Orange color for heading */
        }

        .booking-button {
            background-color: orange; /* Orange background for button */
            color: white; /* White text for button */
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .booking-button:hover {
            background-color: darkorange; /* Darker orange on hover */
        }
    </style>
</head>
<body>

<h2>Available Guides</h2>
<div class="guide-panel" id="guide-panel">
    <!-- Guide Cards will be populated here -->
</div>

<script>
    // Guide data (12 guides)
    const guides = [
        {
            name: "John Doe",
            address: "Colombo, Sri Lanka",
            email: "john.doe@example.com",
            profilePic: "john.jpg",
            availability: ["2024-10-20", "2024-10-22"],
        },
        {
            name: "Jane Smith",
            address: "Kandy, Sri Lanka",
            email: "jane.smith@example.com",
            profilePic: "jane.jpg",
            availability: ["2024-10-21", "2024-10-23"],
        },
        {
            name: "Amara Perera",
            address: "Galle, Sri Lanka",
            email: "amara.perera@example.com",
            profilePic: "amara.jpg",
            availability: ["2024-10-20", "2024-10-25"],
        },
        {
            name: "Dinesh Kumar",
            address: "Negombo, Sri Lanka",
            email: "dinesh.kumar@example.com",
            profilePic: "dinesh.jpg",
            availability: ["2024-10-22", "2024-10-24"],
        },
        {
            name: "Kavitha Fernando",
            address: "Jaffna, Sri Lanka",
            email: "kavitha.fernando@example.com",
            profilePic: "kavitha.jpg",
            availability: ["2024-10-21", "2024-10-26"],
        },
        {
            name: "Rohan Wijesekara",
            address: "Nuwara Eliya, Sri Lanka",
            email: "rohan.wijesekara@example.com",
            profilePic: "rohan.jpg",
            availability: ["2024-10-23", "2024-10-25"],
        },
        {
            name: "Nadia Ali",
            address: "Colombo, Sri Lanka",
            email: "nadia.ali@example.com",
            profilePic: "nadia.jpg",
            availability: ["2024-10-20", "2024-10-21"],
        },
        {
            name: "Saman Wijeratne",
            address: "Anuradhapura, Sri Lanka",
            email: "saman.wijeratne@example.com",
            profilePic: "saman.jpg",
            availability: ["2024-10-21", "2024-10-23"],
        },
        {
            name: "Tharindu Jayasuriya",
            address: "Hikkaduwa, Sri Lanka",
            email: "tharindu.jayasuriya@example.com",
            profilePic: "tharindu.jpg",
            availability: ["2024-10-22", "2024-10-24"],
        },
        {
            name: "Chathura Kumara",
            address: "Batticaloa, Sri Lanka",
            email: "chathura.kumara@example.com",
            profilePic: "chathura.jpg",
            availability: ["2024-10-23", "2024-10-25"],
        },
        {
            name: "Lakshmi Bandara",
            address: "Matara, Sri Lanka",
            email: "lakshmi.bandara@example.com",
            profilePic: "lakshmi.jpg", 
            availability: ["2024-10-20", "2024-10-21"],
        },
        {
            name: "Chamara Jayawardena",
            address: "Trincomalee, Sri Lanka",
            email: "chamara.jayawardena@example.com",
            profilePic: "chamara.jpg",
            availability: ["2024-10-24", "2024-10-25"],
        }
    ];

    const guidePanel = document.getElementById('guide-panel');

    // Function to handle booking
    function bookGuide(guide) {
        alert(`You have booked ${guide.name} as your guide!`);
    }

    guides.forEach(guide => {
        const card = document.createElement('div');
        card.classList.add('guide-card');
        card.innerHTML = `
            <img src="${guide.profilePic}" alt="${guide.name}">
            <h3>${guide.name}</h3>
            <p>${guide.address}</p>
            <p>${guide.email}</p>
            <div class="availability">
                <strong>Availability:</strong>
                <div class="calendar">
                    ${guide.availability.map(date => `<span class="available">${date}</span>`).join(', ')}
                </div>
            </div>
            <button class="booking-button" onclick="bookGuide(${JSON.stringify(guide)})">Book Now</button>
        `;
        guidePanel.appendChild(card);
    });
</script>

</body>
</html>
