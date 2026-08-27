<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registered Students</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-top: 0;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .button {
            background: #2563eb;
            color: white;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 6px;
        }

        .button:hover {
            background: #1d4ed8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #f8fafc;
        }

        .view {
            color: #2563eb;
            text-decoration: none;
        }

        .empty {
            text-align: center;
            padding: 30px;
            color: #666;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="top-bar">
        <h1>Registered Students</h1>

        <a href="{{ route('students.create') }}" class="button">
            Register Student
        </a>
    </div>

    @if ($students->count())

        <table>
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Program</th>
                    <th>Year Level</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($students as $student)

                    <tr>
                        <td>{{ $student->student_id }}</td>

                        <td>
                            {{ $student->first_name }}
                            {{ $student->last_name }}
                        </td>

                        <td>{{ $student->email }}</td>

                        <td>{{ $student->program }}</td>

                        <td>{{ $student->year_level }}</td>

                        <td>
                            <a
                                href="{{ route('students.show', $student) }}"
                                class="view"
                            >
                                View
                            </a>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>

    @else

        <div class="empty">
            No students registered yet.
        </div>

    @endif

</div>

</body>
</html>