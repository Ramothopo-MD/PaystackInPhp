<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Payment Complete</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>/* General Styling */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body, html {
    height: 100%;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(to bottom right, #f9f9f9, #e0e7ff);
    display: flex;
    justify-content: center;
    align-items: center;
}
.payment-container {
    max-width: 600px;
    width: 100%;
    padding: 20px;
}

/* Card Styling */
.card {
    background-color: white;
    border-radius: 15px;
    padding: 40px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    animation: fadeInUp 1s ease-out;
}
.card h1 {
    color: #4CAF50;
    font-size: 32px;
    margin-bottom: 10px;
    font-weight: 700;
}
.card p {
    color: #555;
    font-size: 18px;
    margin-bottom: 30px;
    line-height: 1.5;
}

/* Checkmark Animation */
.checkmark-circle {
    width: 120px;
    height: 120px;
    background-color: #4CAF50;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto 20px auto;
    position: relative;
    animation: bounce 1s ease-in-out infinite;
}
.checkmark {
    width: 40px;
    height: 20px;
    border-left: 5px solid white;
    border-bottom: 5px solid white;
    transform: rotate(-45deg);
    position: absolute;
}

/* Transaction Details */
.transaction-details {
    margin-top: 30px;
    text-align: left;
}
.transaction-details h2 {
    color: #333;
    font-size: 22px;
    margin-bottom: 20px;
    font-weight: 600;
}
.details-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    row-gap: 10px;
}
.details-grid div {
    font-size: 16px;
    color: #666;
}

/* Button Styling */
.buttons {
    margin-top: 40px;
}
.btn {
    text-decoration: none;
    padding: 15px 20px;
    border-radius: 50px;
    font-size: 18px;
    display: inline-block;
    transition: 0.3s;
    font-weight: 600;
    margin: 5px;
    width: calc(100% - 10px);
    text-align: center;
}
.primary-btn {
    background-color: #4CAF50;
    color: white;
    border: none;
}
.secondary-btn {
    background-color: white;
    color: #4CAF50;
    border: 2px solid #4CAF50;
}
.primary-btn:hover, .secondary-btn:hover {
    opacity: 0.9;
}

/* Animations */
@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive Design */
@media only screen and (max-width: 600px) {
    .card {
        padding: 20px;
    }
    .btn {
        font-size: 16px;
    }
}
</style>

</head>
<body>
    <div class="payment-container">
        <div class="card">
            <div class="checkmark-circle">
                <div class="checkmark"></div>
            </div>
            <h1>Payment Successful!</h1>
            <p>Thank you for your payment. We've received your transaction and it’s being processed.</p>
            
            <div class="transaction-details">
                <h2>Transaction Summary</h2>
                <div class="details-grid">
                    <div><strong>Transaction ID:</strong></div><div id="transaction-id">123456789ABCDEF</div>
                    <div><strong>Amount Paid:</strong></div><div id="amount-paid">$200.00</div>
                    <div><strong>Date:</strong></div><div id="payment-date">October 24, 2024</div>
                </div>
            </div>
            
            <div class="buttons">
                <a href="index.php" class="btn primary-btn">Return to Homepage</a>
                <a href="contact.html" class="btn secondary-btn">Contact Support</a>
            </div>
        </div>
    </div>
</body>
</html>
