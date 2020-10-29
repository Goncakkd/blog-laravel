<html>

<head>
    @include('layouts/header')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>


<body>
    <div class="container">
        <div class="row">
            <h1>Register</h1>
        </div>

        <form action="/" method="post">
            @csrf
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input type="hidden" name="birthday_hidden" id="birthday_hidden" class="form-control" required>
                <input type="text" name="birthday" id="birthday" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Retype Password</label>
                <input type="password" name="retypePassword" id="retypePassword" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
<script>
    $(function() {
        console.log(moment().format('YYYY/MM/DD'))
        $('input[name="birthday"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            maxDate: moment().format('MM/DD/YYYY'),
            autoApply: true
        }, function(start, end, label) {
            var birthday = moment(start).format('MM/DD/YYYY');
            $('#birthday_hidden').val(birthday)

        });
    });

</script>
