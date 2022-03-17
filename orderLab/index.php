<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Order Lab</title>
    <link rel="stylesheet"
          href="https://bootswatch.com/4/darkly/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="app container">
    <h2>Registration</h2>
    <form>
        <div class="form-group">
            <label htmlFor="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter email"/>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                else.
            </small>
        </div>
        <div class="form-group">
            <label htmlFor="exampleInputUniversity">University</label>
            <select class="form-control" required>
            <option hidden>University</option>
            <option>BSTU</option>
            <option>BSU</option>
            <option>BNTU</option>
            <option>BSUIR</option>
            </select>
        </div>
        <div class="form-group">
            <label htmlFor="exampleInputFaculty">Faculty</label>
            <select class="form-control">
            <option>FIT</option>
            <option>HIT</option>
            </select>
        </div>
        <div class="form-group">
            <label htmlFor="exampleInputSpeciality">Speciality</label>
            <select class="form-control">
            <option hidden>Speciality</option>
            <option>POIT</option>
            <option>POIBMS</option>
            <option>ISiT</option>
            <option>DEIVI</option>
            </select>
        </div>
        <div class="form-group">
            <label htmlFor="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"/>
        </div>
        <div class="form-group">
            <label htmlFor="exampleInputPassword2">Confirm password</label>
            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm password"/>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1"/>
            <label class="form-check-label" htmlFor="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
