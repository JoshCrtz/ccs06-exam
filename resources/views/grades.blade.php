<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Input Grades</title>
</head>

<body>
<div class="container-sm">
    <h1>Enter Student's Midterm and Finals Grade</h1>

    <form action="/compute-grades" method="POST">
    <input type="hidden" name="student_1" value="{{ $student_1 }}">
    <input type="hidden" name="student_2" value="{{ $student_2 }}">
    <input type="hidden" name="student_3" value="{{ $student_3 }}">
    <input type="hidden" name="student_4" value="{{ $student_4 }}">
    <input type="hidden" name="student_5" value="{{ $student_5 }}">
        @csrf
        <div class="row">
            <label>Student Name: <strong>{{ $student_1 }}</strong></label>
            <div class="col col-md-4">
                <label>Midterm Grade</label>
                <input type="number" name="p1_midterm" class="form-control" required>
            </div>
            <div class="col col-md-4">
                <label>Finals Grade</label>
                <input type="number" name="p1_finals" class="form-control" required>
            </div>

            <label>Student Name: <strong>{{ $student_2 }}</strong></label>
            <div class="col col-md-4">
                <label>Midterm Grade</label>
                <input type="number" name="p2_attempt1" class="form-control" required>
            </div>
            <div class="col col-md-4">
                <label>Finals Grade</label>
                <input type="number" name="p2_attempt2" class="form-control" required>
            </div>
            
            <label>Student Name: <strong>{{ $student_3 }}</strong></label>
            <div class="col col-md-4">
                <label>Midterm Grade</label>
                <input type="number" name="p3_attempt1" class="form-control" required>
            </div>
            <div class="col col-md-4">
                <label>Finals Grade</label>
                <input type="number" name="p3_attempt2" class="form-control" required>
            </div>

            <label>Student Name: <strong>{{ $student_4 }}</strong></label>
            <div class="col col-md-4">
                <label>Midterm Grade</label>
                <input type="number" name="p4_attempt1" class="form-control" required>
            </div>
            <div class="col col-md-4">
                <label>Finals Grade</label>
                <input type="number" name="p4_attempt2" class="form-control" required>
            </div>

            <label>Student Name: <strong>{{ $student_5 }}</strong></label>
            <div class="col col-md-4">
                <label>Midterm Grade</label>
                <input type="number" name="p5_attempt1" class="form-control" required>
            </div>
            <div class="col col-md-4">
                <label>Finals Grade</label>
                <input type="number" name="p5_attempt2" class="form-control" required>
            </div>
 
            <label>&nbsp</label>
            <hr />
            <div class="row">
            <button class="btn btn-primary btn.lg">Compute Grades</button>
            </div>

        </div>
    </form>
</div>