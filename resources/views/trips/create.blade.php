<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Date and Purchase Ticket</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Include Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<form action="{{ url('/create-trip') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="date">Select Date:</label>
        <input type="date" name="date" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="start_location">Select Start Location:</label>
        <select name="start_location" class="form-control" required>
            @foreach($locations as $location)
                <option value="{{ $location->id }}">{{ $location->name }}</option>
            @endforeach
        </select>
    </div>
    

    <div class="form-group">
        <label for="start_location">Select Start Location:</label>
        <select name="start_location" class="form-control" required>
            @foreach($locations as $location)
                <option value="{{ $location->id }}">{{ $location->name }}</option>
            @endforeach
        </select>
    </div>
    

    <!-- Add other trip details here -->

    <button type="submit" class="btn btn-primary">Create Trip</button>
</form>

</body>
</html>