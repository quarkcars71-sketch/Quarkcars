<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Enquiry</title>
</head>

<body style="font-family: Arial, sans-serif; color: #222;">
    <h2>New QuarkCars Contact Enquiry</h2>

    <p><strong>Name:</strong> {{ $enquiry['name'] }}</p>

    <p><strong>Email:</strong> {{ $enquiry['email'] }}</p>

    <p><strong>Phone:</strong> {{ $enquiry['number'] }}</p>

    <p>
        <strong>Company:</strong>
        {{ $enquiry['company'] ?? 'Not provided' }}
    </p>

    <p><strong>Message:</strong></p>

    <p>
        {!! nl2br(e($enquiry['message'])) !!}
    </p>

    <hr>

    <p>
        This enquiry was submitted from the QuarkCars website.
    </p>
</body>
</html>