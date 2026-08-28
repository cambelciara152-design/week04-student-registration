<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Students</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f7f4f2;
            color: #1f1f1f;
            padding: 40px 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        h1 {
            margin: 0;
        }

        .register-btn {
            background: #e8aeb7;
            color: #1f1f1f;
            text-decoration: none;
            padding: 11px 18px;
            border-radius: 8px;
            font-weight: bold;
        }

        .register-btn:hover {
            background: #d99ba6;
        }

        .table-card {
            background: white;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        th {
            background: #f1e5e3;
            font-size: 14px;
        }

        td {
            border-top: 1px solid #eee;
        }

        .view-btn {
            color: #9d5965;
            text-decoration: none;
            font-weight: bold;
        }

        .empty {
            text-align: center;
            padding: 40px;
            color: #777;
        }

        @media (max-width: 700px) {
            .header {
                align-items: flex-start;
                gap: 15px;
                flex-direction: column;
            }

            .table-card {
                overflow-x: auto;
            }

            table {
                min-width: 700px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <div>
            <h1>Registered Students</h1>
            <p>Student Registration Records</p>
        </div>

        <a href="{{ route('students.create') }}" class="register-btn">
            + Register Student
        </a>
    </div>

    <div class="table-card">

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
                                {{ $student->middle_name }}
                                {{ $student->last_name }}
                            </td>

                            <td>{{ $student->email }}</td>

                            <td>{{ $student->program }}</td>

                            <td>{{ $student->year_level }}</td>

                            <td>
                                <a
                                    href="{{ route('students.show', $student) }}"
                                    class="view-btn"
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
                No registered students yet.
            </div>

        @endif

    </div>

</div>

</body>
</html>