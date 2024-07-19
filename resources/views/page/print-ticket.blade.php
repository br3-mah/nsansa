<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 5%;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .ticket {
            width: 600px; /* Increased width for a wider ticket */
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            font-family: Arial, sans-serif;
            position: relative; /* To position watermark */
        }

        .ticket-header {
            background-color: #fff;
            color: #000;
            padding: 20px;
            text-align: center;
            font-size: 28px;
        }

        .ticket-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            padding: 20px;
        }

        .ticket-details p {
            margin: 0;
            font-size: 16px;
        }

        .status {
            color: #000;
            text-align: center;
            padding: 10px 0;
            font-weight: bold;
            font-size: 20px;
            border: 1px solid #938293;
        }

        /* Watermark */
        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.2; /* Adjust opacity as needed */
        }
    </style>
</head>
<body>
    <div class="ticket">
        <!-- Watermark image -->
        <img src="https://nsansawellness.com/uploads/sites/304/2022/06/logos.svg" alt="Watermark" class="watermark">

        <div class="ticket-header">
            Serenity Festival 2023
        </div>
        <div class="ticket-details">
            <p><strong>Name:</strong> {{ $ticket->fname}} {{ $ticket->lname}}</p>
            <p><strong>Event Date:</strong> {{ $ticket->for_event_on }}</p>
            <p><strong>Email:</strong> {{ $ticket->email}}</p>
            <p><strong>Event:</strong> Serenity Festival 2023</p>
            <p><strong>Phone:</strong>  {{ $ticket->phone}}</p>
            <!-- <p><strong>Time:</strong> 7:00 PM</p> -->
            <p><strong>Location:</strong> T3C GARDENS, LILAYI RD, LILAY</p>
            <p><strong>Ticket#:</strong> {{ $ticket->ticketnum }}</p>
            <p><strong>Fee:</strong> {{ $ticket->trans_amount }}</p>
            <p><strong>Message:</strong> {{ $ticket->msg }}</p>
        </div>
        <div class="status">
        {{ $ticket->status }}
        </div>
    </div>
    <div>
        <p>Please check your email inbox</p>
        @auth
        <a href="{{ route('tickets')}}">Back</a>
        @else
        <a href="{{ route('welcome')}}">Back Home</a>
        @endauth
    </div>
</body>
</html>
