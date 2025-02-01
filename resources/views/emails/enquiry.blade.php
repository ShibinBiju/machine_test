<!DOCTYPE html>
<html>
<head>
    <title>New Enquiry Received</title>
</head>
<body>
    <h2>New Enquiry for Product ID: {{ $enquiry->product_id }}</h2>
    
    <p><strong>Customer Name:</strong> {{ $enquiry->customer_name }}</p>
    <p><strong>Customer Email:</strong> {{ $enquiry->customer_email }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $enquiry->message }}</p>

    <p>Thank you.</p>
</body>
</html>
