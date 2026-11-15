<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a Job - Skill Connect</title>
</head>
<body>

    <h1>Post a Job</h1>

    @if ($errors->any())
        <div>
            <strong>Please fix the following errors:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Job Title</label>
            <input type="text"
                   id="title"
                   name="title"
                   value="{{ old('title') }}"
                   required>
        </div>

        <br>

        <div>
            <label for="description">Job Description</label><br>
            <textarea id="description"
                      name="description"
                      rows="6"
                      required>{{ old('description') }}</textarea>
        </div>

        <br>

        <div>
            <label for="location">Location</label>
            <input type="text"
                   id="location"
                   name="location"
                   value="{{ old('location') }}"
                   placeholder="e.g. Dhaka, Bangladesh"
                   required>
        </div>

        <br>

        <div>
            <label for="salary">Salary</label>
            <input type="text"
                   id="salary"
                   name="salary"
                   value="{{ old('salary') }}"
                   placeholder="e.g. 20,000 - 30,000 BDT">
        </div>

        <br>

        <button type="submit">Post Job</button>

    </form>

</body>
</html>