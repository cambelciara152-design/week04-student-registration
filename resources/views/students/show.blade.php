<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Profile</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: #faf8f6;
            font-family: 'Poppins', sans-serif;
            color: #171717;
            padding: 45px 20px;
        }

        .container {
            max-width: 760px;
            margin: auto;
        }

        .success {
            background: #f3fbf6;
            border: 1px solid #d8efdf;
            color: #27643d;
            padding: 13px 16px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 13px;
        }

        .card {
            background: #fff;
            border: 1px solid #eee9e6;
            border-radius: 18px;
            padding: 32px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.04);
        }

        .top {
            display: flex;
            align-items: center;
            gap: 22px;
            padding-bottom: 25px;
            border-bottom: 1px solid #eee9e6;
        }

        .profile-picture {
            width: 95px;
            height: 95px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #f9e3e7;
        }

        .top h1 {
            margin: 0;
            font-size: 23px;
        }

        .top p {
            margin: 5px 0 0;
            color: #888;
            font-size: 13px;
        }

        .section {
            margin-top: 27px;
        }

        .section-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 17px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 17px;
        }

        .item {
            padding: 13px 15px;
            background: #fdfafa;
            border-radius: 9px;
        }

        .label {
            display: block;
            color: #999;
            font-size: 10px;
            margin-bottom: 4px;
        }

        .value {
            font-size: 13px;
            font-weight: 500;
        }

        .address {
            grid-column: 1 / -1;
        }

        .button {
            display: block;
            margin-top: 27px;
            text-align: center;
            text-decoration: none;
            background: #e8a0ad;
            color: white;
            padding: 12px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 600;
        }

        .button:hover {
            background: #df8f9e;
        }

        @media (max-width: 600px) {
            body {
                padding: 25px 15px;
            }

            .card {
                padding: 22px;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .address {
                grid-column: auto;
            }
        }
    </style>
</head>

<body>

<div class="container">

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">

        <div class="top">

            <img
                src="{{ asset('storage/' . $student->profile_picture) }}"
                alt="Profile Picture"
                class="profile-picture"
            >

            <div>
                <h1>
                    {{ $student->first_name }}
                    {{ $student->last_name }}
                </h1>

                <p>
                    Student ID: {{ $student->student_id }}
                </p>
            </div>

        </div>


        <div class="section">

            <div class="section-title">
                Personal Information
            </div>

            <div class="grid">

                <div class="item">
                    <span class="label">First Name</span>
                    <span class="value">{{ $student->first_name }}</span>
                </div>

                <div class="item">
                    <span class="label">Middle Name</span>
                    <span class="value">{{ $student->middle_name ?? '—' }}</span>
                </div>

                <div class="item">
                    <span class="label">Last Name</span>
                    <span class="value">{{ $student->last_name }}</span>
                </div>

                <div class="item">
                    <span class="label">Gender</span>
                    <span class="value">{{ $student->gender }}</span>
                </div>

                <div class="item">
                    <span class="label">Date of Birth</span>
                    <span class="value">{{ $student->date_of_birth }}</span>
                </div>

                <div class="item">
                    <span class="label">Mobile Number</span>
                    <span class="value">{{ $student->mobile_number }}</span>
                </div>

                <div class="item address">
                    <span class="label">Email</span>
                    <span class="value">{{ $student->email }}</span>
                </div>

                <div class="item address">
                    <span class="label">Address</span>
                    <span class="value">{{ $student->address }}</span>
                </div>

            </div>

        </div>


        <div class="section">

            <div class="section-title">
                Academic Information
            </div>

            <div class="grid">

                <div class="item">
                    <span class="label">Program</span>
                    <span class="value">{{ $student->program }}</span>
                </div>

                <div class="item">
                    <span class="label">Year Level</span>
                    <span class="value">{{ $student->year_level }}</span>
                </div>

            </div>

        </div>


        <a href="{{ route('students.create') }}" class="button">
            Register Another Student
        </a>

    </div>

</div>

</body>
</html>