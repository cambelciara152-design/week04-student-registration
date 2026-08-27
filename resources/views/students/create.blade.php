<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

    <!-- Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #faf7f7;
            color: #222;
        }

        /* =========================
           PAGE
        ========================= */

        .page {
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 35px 20px;
        }


        /* =========================
           CARD
        ========================= */

        .card {
            width: 100%;
            max-width: 820px;

            background: #ffffff;

            border: 1px solid #f0e9e9;

            border-radius: 20px;

            padding: 36px 42px;

            box-shadow:
                0 15px 45px rgba(40, 20, 20, 0.06);
        }


        /* =========================
           HEADER
        ========================= */

        .header {
            text-align: center;

            margin-bottom: 28px;
        }

        .header-badge {
            display: inline-block;

            padding: 5px 11px;

            background: #fcecef;

            color: #b96f7d;

            border-radius: 20px;

            font-size: 9px;

            font-weight: 500;

            margin-bottom: 10px;
        }

        .header h1 {
            margin: 0;

            font-size: 25px;

            font-weight: 600;

            letter-spacing: -0.6px;

            color: #222;
        }

        .header p {
            margin: 6px 0 0;

            font-size: 11px;

            color: #999;
        }


        /* =========================
           FORM
        ========================= */

        .form-grid {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 15px 18px;
        }

        .field {
            min-width: 0;
        }

        .full {
            grid-column: 1 / -1;
        }


        /* =========================
           LABEL
        ========================= */

        label {
            display: block;

            font-size: 10px;

            font-weight: 500;

            color: #444;

            margin-bottom: 6px;
        }

        .required {
            color: #d88c9a;
        }


        /* =========================
           INPUTS
        ========================= */

        input,
        select,
        textarea {

            width: 100%;

            padding: 10px 12px;

            background: #fcfafb;

            border: 1px solid #eadfe1;

            border-radius: 9px;

            outline: none;

            font-family: 'Poppins', sans-serif;

            font-size: 11px;

            color: #333;

            transition: all .2s ease;
        }

        input::placeholder,
        textarea::placeholder {

            color: #b8b0b2;
        }

        input:hover,
        select:hover,
        textarea:hover {

            border-color: #e1c8cd;
        }

        input:focus,
        select:focus,
        textarea:focus {

            background: #fff;

            border-color: #d99aa6;

            box-shadow:
                0 0 0 3px rgba(217, 154, 166, 0.10);
        }


        /* =========================
           ADDRESS
        ========================= */

        textarea {

            height: 65px;

            resize: none;
        }


        /* =========================
           PROFILE UPLOAD
        ========================= */

        .upload {

            display: flex;

            align-items: center;

            gap: 12px;

            padding: 10px 12px;

            border: 1px dashed #e3cfd3;

            background: #fdfafb;

            border-radius: 10px;
        }

        .upload-icon {

            width: 34px;
            height: 34px;

            flex-shrink: 0;

            display: flex;

            align-items: center;
            justify-content: center;

            background: #fcecef;

            color: #c47d89;

            border-radius: 8px;

            font-size: 16px;
        }

        .upload-info {

            flex: 1;
        }

        .upload-title {

            font-size: 10px;

            font-weight: 500;

            color: #444;
        }

        .upload-subtitle {

            font-size: 8px;

            color: #aaa;

            margin-top: 2px;
        }

        .upload input {

            width: auto;

            border: none;

            background: transparent;

            padding: 0;

            font-size: 9px;
        }


        /* =========================
           FOOTER
        ========================= */

        .footer {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            margin-top: 24px;

            padding-top: 20px;

            border-top: 1px solid #f1ebec;
        }

        .footer-note {

            font-size: 9px;

            color: #aaa;

            line-height: 1.5;

            max-width: 300px;
        }


        /* =========================
           BUTTON
        ========================= */

        button {

            border: none;

            background: #e9aab5;

            color: #fff;

            padding: 11px 24px;

            border-radius: 9px;

            font-family: 'Poppins', sans-serif;

            font-size: 11px;

            font-weight: 500;

            cursor: pointer;

            transition: all .2s ease;
        }

        button:hover {

            background: #d9939f;

            transform: translateY(-1px);

            box-shadow:
                0 6px 15px rgba(217, 147, 159, 0.20);
        }

        button:active {

            transform: translateY(0);
        }


        /* =========================
           SUCCESS
        ========================= */

        .success {

            padding: 10px 12px;

            margin-bottom: 18px;

            background: #f9f5f6;

            border: 1px solid #eadfe1;

            border-left: 3px solid #e9aab5;

            border-radius: 8px;

            color: #555;

            font-size: 10px;
        }


        /* =========================
           ERRORS
        ========================= */

        .errors {

            padding: 10px 12px;

            margin-bottom: 18px;

            background: #fcf7f8;

            border: 1px solid #eadfe1;

            border-radius: 8px;

            color: #555;

            font-size: 10px;
        }

        .errors ul {

            margin: 5px 0 0 15px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 650px) {

            .page {

                padding: 20px 14px;

                align-items: flex-start;
            }

            .card {

                padding: 28px 22px;

                margin-top: 10px;

                border-radius: 16px;
            }

            .header {

                margin-bottom: 24px;
            }

            .header h1 {

                font-size: 22px;
            }

            .form-grid {

                grid-template-columns: 1fr;

                gap: 14px;
            }

            .full {

                grid-column: auto;
            }

            .footer {

                flex-direction: column;

                align-items: stretch;
            }

            .footer-note {

                max-width: none;

                text-align: center;
            }

            button {

                width: 100%;
            }

        }

    </style>

</head>

<body>


<div class="page">

    <div class="card">


        <!-- HEADER -->

        <div class="header">

            <div class="header-badge">
                STUDENT PORTAL
            </div>

            <h1>
                Student Registration
            </h1>

            <p>
                Please provide your information to create your account.
            </p>

        </div>


        <!-- SUCCESS MESSAGE -->

        @if (session('success'))

            <div class="success">
                {{ session('success') }}
            </div>

        @endif


        <!-- ERROR MESSAGE -->

        @if ($errors->any())

            <div class="errors">

                <strong>
                    Please check your information.
                </strong>

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <!-- FORM -->

        <form
            action="{{ route('students.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf


            <div class="form-grid">


                <!-- STUDENT ID -->

                <div class="field">

                    <label for="student_id">
                        Student ID <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="student_id"
                        name="student_id"
                        placeholder="Enter student ID"
                        value="{{ old('student_id') }}"
                    >

                </div>


                <!-- EMAIL -->

                <div class="field">

                    <label for="email">
                        Email Address <span class="required">*</span>
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="example@email.com"
                        value="{{ old('email') }}"
                    >

                </div>


                <!-- FIRST NAME -->

                <div class="field">

                    <label for="first_name">
                        First Name <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="first_name"
                        name="first_name"
                        placeholder="First name"
                        value="{{ old('first_name') }}"
                    >

                </div>


                <!-- MIDDLE NAME -->

                <div class="field">

                    <label for="middle_name">
                        Middle Name
                    </label>

                    <input
                        type="text"
                        id="middle_name"
                        name="middle_name"
                        placeholder="Middle name"
                        value="{{ old('middle_name') }}"
                    >

                </div>


                <!-- LAST NAME -->

                <div class="field">

                    <label for="last_name">
                        Last Name <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="last_name"
                        name="last_name"
                        placeholder="Last name"
                        value="{{ old('last_name') }}"
                    >

                </div>


                <!-- MOBILE -->

                <div class="field">

                    <label for="mobile_number">
                        Mobile Number <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="mobile_number"
                        name="mobile_number"
                        placeholder="09XX XXX XXXX"
                        value="{{ old('mobile_number') }}"
                    >

                </div>


                <!-- DATE OF BIRTH -->

                <div class="field">

                    <label for="date_of_birth">
                        Date of Birth <span class="required">*</span>
                    </label>

                    <input
                        type="date"
                        id="date_of_birth"
                        name="date_of_birth"
                        value="{{ old('date_of_birth') }}"
                    >

                </div>


                <!-- GENDER -->

                <div class="field">

                    <label for="gender">
                        Gender <span class="required">*</span>
                    </label>

                    <select
                        id="gender"
                        name="gender"
                    >

                        <option value="">
                            Select gender
                        </option>

                        <option
                            value="Male"
                            {{ old('gender') == 'Male' ? 'selected' : '' }}
                        >
                            Male
                        </option>

                        <option
                            value="Female"
                            {{ old('gender') == 'Female' ? 'selected' : '' }}
                        >
                            Female
                        </option>

                    </select>

                </div>


                <!-- PROGRAM -->

                <div class="field">

                    <label for="program">
                        Program <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="program"
                        name="program"
                        placeholder="e.g. BS Information Technology"
                        value="{{ old('program') }}"
                    >

                </div>


                <!-- YEAR LEVEL -->

                <div class="field">

                    <label for="year_level">
                        Year Level <span class="required">*</span>
                    </label>

                    <select
                        id="year_level"
                        name="year_level"
                    >

                        <option value="">
                            Select year level
                        </option>

                        <option
                            value="1st Year"
                            {{ old('year_level') == '1st Year' ? 'selected' : '' }}
                        >
                            1st Year
                        </option>

                        <option
                            value="2nd Year"
                            {{ old('year_level') == '2nd Year' ? 'selected' : '' }}
                        >
                            2nd Year
                        </option>

                        <option
                            value="3rd Year"
                            {{ old('year_level') == '3rd Year' ? 'selected' : '' }}
                        >
                            3rd Year
                        </option>

                        <option
                            value="4th Year"
                            {{ old('year_level') == '4th Year' ? 'selected' : '' }}
                        >
                            4th Year
                        </option>

                    </select>

                </div>


                <!-- ADDRESS -->

                <div class="field full">

                    <label for="address">
                        Complete Address <span class="required">*</span>
                    </label>

                    <textarea
                        id="address"
                        name="address"
                        placeholder="Enter your complete address"
                    >{{ old('address') }}</textarea>

                </div>


                <!-- PROFILE -->

                <div class="field full">

                    <label>
                        Profile Picture
                    </label>

                    <div class="upload">

                        <div class="upload-icon">
                            +
                        </div>

                        <div class="upload-info">

                            <div class="upload-title">
                                Upload profile picture
                            </div>

                            <div class="upload-subtitle">
                                JPG, JPEG or PNG · Optional
                            </div>

                        </div>

                        <input
                            type="file"
                            id="profile_picture"
                            name="profile_picture"
                            accept=".jpg,.jpeg,.png"
                        >

                    </div>

                </div>


            </div>


            <!-- FOOTER -->

            <div class="footer">

                <div class="footer-note">
                    Please make sure that all information provided is
                    correct before submitting.
                </div>

                <button type="submit">
                    Register Student →
                </button>

            </div>


        </form>

    </div>

</div>


</body>
</html>